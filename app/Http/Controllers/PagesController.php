<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        $names = ['justin', 'Michael', 'ngoswe', 'robby' ];
        return view('about',['names'=> $names]);
    }

}
