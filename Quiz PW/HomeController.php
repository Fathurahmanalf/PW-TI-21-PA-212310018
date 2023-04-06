<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data= array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310018;
        $students[] = array("npm" =>212310004, "name"=>"Muhamad Agus Setiawan", "gender"=>"M", "alamat"=>"Bogor");
        $students[] = array("npm" =>212310029, "name"=>"Muhamad Ilham Fachririzal", "gender"=>"M", "alamat"=>"Bogor");
        $students[] = array("npm" =>212310044, "name"=>"Hana Yulia Rahmah", "gender"=>"F", "alamat"=>"Bogor");
        $students[] = array("npm" =>212310027, "name"=>"Muhammad Askah", "gender"=>"M", "alamat"=>"Bogor");
        $students[] = array("npm" =>212310005, "name"=>"Adjie Syeraffi Rahmat", "gender"=>"F", "alamat"=>"Bogor");
        $data['students'] = $students;
        return view('home')->with("data",$data);
        }
    
}
