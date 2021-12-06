<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index()
    {
        return view("home");
    }
    public function tentang(){
        return view("about");
    }
    public function produkrs(){
        return view("pelayanan");
    }
    public function artikel(){
        return view("articlepage");
    }
    public function artikeldetail(){
        return view("detail1");
    }
    public function artikeldetail2(){
        return view("detail2");
    }
    public function kontak(){
        return view("contact");
    }
    public function artikeldetail3(){
        return view("detail3");
    }
    public function loginpage(){
        return view("login");
    }
    public function registerpage(){
        return view("registrasi");
    }
}
?>