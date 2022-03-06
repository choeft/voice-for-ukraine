<?php

namespace App\Models;

class TemplateLoaderModel
{

    protected $link;
    protected $subjectline;
    protected $body;

    /**
     * @param array $data
     * @return bool
     */
    public function load(array $data): bool
    {

        //load text from file
        $filename = $data['organisation'] . '_' . $data['language'] . '.txt';
        $text = nl2br(file_get_contents('templates/letters/' . $filename));

        $linkHelper = new LinkHelperModel();
        $subjectlineHelper = new SubjectlineHelperModel();
        $nationalityHelper = new NationalityHelperModel();

        $data['nationality'] = $nationalityHelper->translateNationality($data['nationality']);

        //replace placeholders for names etc.
        $text = $this->insertPlaceholders($data, $text);

        $this->link = $linkHelper->getLink($data['organisation'], $data['language']);
        $this->subjectline = $subjectlineHelper->getSubjectline($data['organisation'], $data['language']);
        $this->body = $text;

        return true;

    }

    /**
     * @return array
     */
    public function getResultAsArray(): array
    {

        return [
            'link' => $this->link,
            'headline' => $this->subjectline,
            'body' => $this->body
        ];

    }

    private function insertPlaceholders(array $data, string $text)
    {
        $text = str_replace("[FIRSTNAME]", $data['firstname'], $text);
        $text = str_replace("[LASTNAME]", $data['lastname'], $text);
        $text = str_replace("[NATIONALITY]", $data['nationality'], $text);

        return $text;
    }

}