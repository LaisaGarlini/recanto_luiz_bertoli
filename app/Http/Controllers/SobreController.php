<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index() {
        $data['title'] = 'Sobre';
        return view('sobre',$data);
     }
}
