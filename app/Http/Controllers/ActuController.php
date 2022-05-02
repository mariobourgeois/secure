<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActuController extends Controller
{
    public function index() {

         //Retourne vue administration actu-lister
        return view("admin.actu-lister");
    }


    public function editer() {

        //Retourne vue administration actu-editer
        return view("admin.actu-editer");
    }
}
