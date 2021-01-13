<?php

namespace App\Controllers;

use App\Libraries\View;

class AlbumsController
{
    public function index()
    {
        $data = [
            'firstname' => "Jon",
            'lastname' => "Hogendorp"
        ];

        return View::render('albums.view', $data);
    }

}