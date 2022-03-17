<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('Home',['title' => 'Home']);
    }

    public function showform(){

        return view('form',['title' => 'Form']);
    }

    public function showProduk(){
        return view('Produk',['title' => 'Produk']);
    }

    public function showProduk1(){
        return view('Produk1',['title' => 'Produk1']);
    }

    public function showProduk2(){
        return view('Produk2',['title' => 'Produk2']);
    }

    public function showProduk3(){
        return view('Produk3',['title' => 'Produk3']);
    }

    public function showTentang(){
        return view('Tentang',['title' => 'Tentang']);
    }
}
