<?php

namespace App\Http\Controllers;

use App\Home;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {           
        $test = 'yes working';
        return view('home', ['test' => $test]);
    }
}