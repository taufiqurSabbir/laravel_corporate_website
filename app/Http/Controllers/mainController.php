<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function home(){
        return view('user.home');
    }

    public function about(){
        $title_bg = 'images/banner/banner1.jpg';
        return view('user.about_us',compact('title_bg'));
        }
    public function project(){
        $title_bg = 'images/banner/banner2.jpg';
        return view('user.project',compact('title_bg'));
    }
    public function team(){
        $title_bg = 'images/banner/banner1.jpg';
        return view('user.team',compact('title_bg'));
    }
    public function service(){
        $title_bg = 'images/banner/banner3.jpg';
        return view('user.service',compact('title_bg'));
    }
    public function contact(){
        $title_bg = 'images/banner/banner1.jpg';
        return view('user.contact',compact('title_bg'));
    }

}
