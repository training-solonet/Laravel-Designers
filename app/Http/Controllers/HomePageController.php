<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {
        return view('home', [
            "title" => 'Home',
            "produk" => Produk::all(),
            "category" => Category::all()
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => 'About'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            "title" => 'Contact'
        ]);
    }

    public function blog()
    {
        return view('blog', [
            "title" => 'Blog',
            "produk" => Produk::all(),
            "category" => Category::all()
        ]);
    }
}
