<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function imprint()
    {
        echo view('pages/imprint');
    }
}
