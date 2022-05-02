<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::All();
        //Retourne vue administration user
        return view("admin.user", compact("users"));
    }

    // Gestion des droits d'administrateur
    public function manageRight($i=0) {

        return back();

    }
}
