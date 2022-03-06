<?php

namespace App\Controllers;

use App\Models\TemplateLoaderModel;

class Render extends BaseController
{
    public function index()
    {
        //Get Form Data
        $data = [
            'organisation' => $this->request->getVar('organisation'),
            'language' => $this->request->getVar('language'),
            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'nationality' => $this->request->getVar('nationality'),
        ];

        //Load template
        $templateLoader = new TemplateLoaderModel();
        $templateLoader->load($data);

        echo view('ajax/result', $templateLoader->getResultAsArray());
    }
}
