<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Contact;
class AdminController extends Controller
{
    //
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminhome');
    }
    public function showbooking()
    {
      
      $books = Book::all();
      
      
      return view('showbookings',compact('books'));
        
    }
   
    public function showcontact()
    {
      
      $contact = Contact::all();
      
      
      return view('viewcontact',compact('contact'));
        
    }
    
}
