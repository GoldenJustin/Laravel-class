<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "welcome to my laravel 8 course";
        $description = "This is just a beginning";
        $data = [
            'productOne'=>'Iphone',
            'productTwo'=>'Samsung'
        ];

        // width method
        // return view('products.index')->with("title", $title);


        // return view('products.index')->with("data", $data);

        // compact way of returning data
        // return view('products.index', compact('title', 'description'));

        return view('products.index', ['data'=> $data]);
    }

    public function about(){
        return "this is about us page";
    }
}
