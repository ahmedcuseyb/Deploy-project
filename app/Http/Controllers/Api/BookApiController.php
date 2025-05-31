<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Http\Resources\BookResource;

class BookApiController extends Controller
{
    public function index()
    {
        // return BookResource::collection(Book::latest()->get());
        return BookResource::collection(Book::orderBy('id', 'asc')->get());
    
        // Book::orderBy('id', 'asc')->get();

    }
}
