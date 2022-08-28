<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Projet;

class ProjetController extends BaseController
{
    public function index () {
        return Projet::all();
    }
    
    public function show ($id) {
        return Projet::findOrFail($id);
    }
}
