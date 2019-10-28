<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class IndexController extends Controller
{
    //

    public function index()
    {
        $books = Book::all();
        return view('indexbook',compact('books'));
    }
}
