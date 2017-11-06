<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        

        $view = view('/books/edit');
        $view->book = new Book;
        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id = null)
    {
        if($id)
        {
            $book = Book::findOrFail($id);
        }
        else
        {
            $book = new Book();
        }
       
       

        $book->fill(request()->only([
            'author_id',
            'title',
            'published_at',
            'finished_reading_at',
            'my_review',
            'my_rating'  
            
        ]));
        
        $book->save();
        
        session()->flash('success_message', 'Book was successfully save'); 

        return redirect()->action('BookController@create', ['id' => $book->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $view = view('books/detail');
        
        $book = Book::find($id);
        
        $view->book = $book;       
        
        return $view;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        
        $view = view('/books/edit');
        $view->book = $book;
        
        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function listing()
    {


       
        //return view('/authors/list');

        $view = view('books/list');
    
            $all_books = Book::all();
            //$all_authors= Author::orderBy('year', 'dsc')->get();
    
            $view->books = $all_books;
    
            return $view;
            
        
    }
}
