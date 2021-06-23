<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data = [];
        $movies = Movie::get();
        $data['films']=$movies;
        /* dd($movies); */
        /* echo phpinfo(); */
        return view('home',$data);
    }
}
