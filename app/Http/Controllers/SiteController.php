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

    public function gallery(){
        return view('gallery');
    }

    public function demo(){
        //第一種
        //return view('test.demo')->with(['name'=>'品爵','age'=>'<b>18</b>']);
        //第二種
        // $data = [];
        // $data['name'] = '品爵';
        // $data['age'] = '<b>18</b>';
        // return view('test.demo',$data);
        //第三種
        $name = '品爵';
        $age = '<b>18</b>'; 
        $games = ['PS5','Nintentdo Switch','XBox'];
        return view('test.demo',compact('name','age','games'));

        

    }
}
