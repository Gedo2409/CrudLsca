<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class frontendController extends Controller
{
    public function index(){  
           
        return view('frontend.index');
        
      }
}