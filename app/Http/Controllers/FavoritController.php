<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritController extends Controller
{
    public function index(){
        return view ('favorit');
    }
}
