<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function hello()
    {
        return 'Hello';
    }

    public function play($id){
        if($id == 1){
            return view('game1');
        }elseif($id == 2){
            return view('game2');
        }
    }

    public function dashboard(){
        return view('dashboard');
    }
}
