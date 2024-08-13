<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordPressController extends Controller
{
    public function index(){
        return view('wordpress');
    }
}
