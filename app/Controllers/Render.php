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
            'nationality' => $this->request->getVar('nationality'),
            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
        ];

        //Load template
        $templateLoader = new TemplateLoaderModel();
        $templateLoader->load($data);

        echo view('ajax/result', $templateLoader->getResultAsArray());
    }
}
