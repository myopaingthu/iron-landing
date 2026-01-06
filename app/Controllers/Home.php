<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $jsonPath = APPPATH . 'Data/home.json';

        $data = [];

        if (is_file($jsonPath)) {
            $json = file_get_contents($jsonPath);
            $decoded = json_decode($json, true);

            if (is_array($decoded)) {
                $data = $decoded;
            }
        }

        return view('pages/home', $data);
    }
}
