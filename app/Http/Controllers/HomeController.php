<?php

namespace App\Http\Controllers;
use DB;
use App\Crud;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $users = Crud::all();  
       // return view('welcome',compact('users'));
        if(auth()->user()->is_admin == 1){
            return redirect('adminhome');
            }
        if(auth()->user()->is_admin == 0){
            return redirect('welcome');
        }
            
    }
}

   

