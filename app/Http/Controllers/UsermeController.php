<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;

class UsermeController extends Controller
{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //$users = DB::select('select * from cruds');
      $users = User::all();
      // dd($users);
      // return view('welcome',['users'=>$users]);
      return view('viewuser',compact('users'));
        // return view('welcome')->with('cruds',Crud::find(all));
        //ew->var name model name
    }
    public function homee(){
      return view('homee');
    }
}
