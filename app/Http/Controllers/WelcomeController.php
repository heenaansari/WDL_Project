<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Crud;
use App\Http\Requests;

class WelcomeController extends Controller
{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $users = Crud::all();
      return view('welcome',compact('users'));
        
    }
}
