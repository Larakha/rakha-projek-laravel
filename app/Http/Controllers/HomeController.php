<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }
    public function about(){
        $data = [
            'name' => 'Larakha Hasta A.P',
            'address' => 'Bobosan,Purwokerto',
            'email' => 'Larakhaaap@gmail.com'
        ];
        return view('about',$data);
    }

}