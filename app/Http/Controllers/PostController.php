<?php

namespace App\Http\Controllers;

use App\daftar1;
use Illuminate\Http\Request;

class PostController extends Controller
{   
      

    public function show($id){
        $querry = 'SELECT * FROM post where `id` = $id order by DESC';
        return view('bukti',['title' => 'form', 'data'=>$data]);
    }

    public function index(){
        return view('Home',['title' => 'Home']);
    }
    
    public function showform(){
        return view('form',['title' => 'Form']);
    }

    public function showadmin(){
        $querry = ' * FROM `daftar1s` order by id DESC limit 1;';
        $posts = daftar1::all();
        return view('admin',['title' => 'Admin', 'posts'=> $posts]);
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

    public function showresi(){
        return view('resi',['title' => 'Resi']);
    }
    public function create(Request $request){
       dd($request->all());
    }
}

