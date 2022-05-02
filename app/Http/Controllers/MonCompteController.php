<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonCompteController extends Controller
{
    // Point d'entrée  de ma classe index
    public function __construct() {

        //Sécurise toutes les pages de mon controleur
        //$this->middleware("auth");

        //Sécuriser avec une exception
        //$this->middleware("auth")->except(["index", "panier"]);
    }

    public function index() {

        return view("moncompte");
    }

    public function panier() {

        return view("panier");
    }
}
