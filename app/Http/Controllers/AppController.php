<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public  function  index()
    {
        return view('welcome');
    }

    public  function  dashboard()
    {
        return view('dashboard');
    }

    public function pages()
    {
        return  view('pages');
    }

    public function products()
    {
        return  view('products');
    }

    public function page($link)
    {
        return  view('page');
    }

}
