<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Salarie;

class SalarieController extends BaseController
{
    public function index () {
        return Salarie::all();
    }
    
    public function show ($id) {
        return Salarie::findOrFail($id);
    }
}