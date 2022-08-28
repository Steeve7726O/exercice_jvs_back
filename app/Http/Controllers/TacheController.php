<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Tache;

class TacheController extends BaseController
{
    public function index () {
        return Tache::all();
    }
    
    public function show ($id) {
        return Tache::findOrFail($id);
    }
}