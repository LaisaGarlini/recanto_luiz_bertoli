<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        $data['title'] = 'Home';
        return view('home',$data);
     }
}