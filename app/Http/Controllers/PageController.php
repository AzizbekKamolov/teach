<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){

        return view('main');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function project(){
        return view('project');
    }
}
