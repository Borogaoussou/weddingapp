<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MariageController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return view('invites.accueil');
    }

}
