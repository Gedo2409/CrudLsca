<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Alimento;
use App\Blog;

class FrontendController extends Controller
{
    public function index(){  
           
        return view('frontend.index');
        
      }

      public function platillos(){        
        return view('Frontend.platillos',['alimentos'=>Alimento::all()]);
       
      }

      public function blogs(){        
        return view('Frontend.blogs',['blogs'=>Blog::all()]);
       
      }

      public function blog($id){  
        return view('Frontend.blog', ['blogs' => Blog::find($id)]);
      }
      
}