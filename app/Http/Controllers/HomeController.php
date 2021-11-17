<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => 'Home',
            "produk" => Produk::all(),
            "category" => Category::all()
        ]);
    }
}
