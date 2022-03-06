<?php

namespace App\Models;

class TemplateLoaderModel
{

    protected $link;
    protected $headline;
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

        //replace placeholders for names etc.
        //...

        $this->headline = 'Test';
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
            'headline' => $this->headline,
            'body' => $this->body
        ];

    }

}