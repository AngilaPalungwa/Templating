<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function testmethod(){
        return view('dashboard');
    }
}
