<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
		return view('layout/content-frontend', [
'title' => 'Home',
]);
    }

    public function profil()
	{
		echo view('profil');
	}
}
