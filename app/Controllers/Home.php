<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = '';
        return $this->view('layout/main', $data, true);
    }
}
