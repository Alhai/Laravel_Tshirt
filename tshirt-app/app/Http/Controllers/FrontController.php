<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('homepage');
    }
    public function men(){
        return view('Tshirt_homme');
    }
    public function women(){
        return view('Tshirt_femme');
    }

}