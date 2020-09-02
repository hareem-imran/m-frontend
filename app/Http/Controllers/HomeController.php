<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    // Hme Section
    public function home()
    {
        return view('welcome');
    }

    // service Section
    public function service()
    {
        return view('service');
    }


}
