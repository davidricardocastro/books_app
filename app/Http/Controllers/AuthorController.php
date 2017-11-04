<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/author');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = view('/authors/edit');
        $view->author = new Author;
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
            $author = Author::findOrFail($id);
        }
        else
        {
            $author = new Author();
        }
       

        $author->fill(request()->only([
            'name',
            'year'            
        ]));
        
        $author->save();
        
        session()->flash('success_message', 'Author was successfully save'); 

        return redirect()->action('AuthorController@create', ['id' => $author->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $view = view('authors/detail');
        
        $author = Author::find($id);
        //$movie = Movie::where('id',1)->first(); //equivalent to above
        $view->author = $author;       
        
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
        $author = Author::findOrFail($id);
        
        $view = view('/authors/edit');
        $view->author = $author;
        
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

        $view = view('authors/list');
    
            //$all_movies = Movie::all();
            $all_authors= Author::orderBy('year', 'dsc')->get();
    
            $view->authors = $all_authors;
    
            return $view;
            
        
    }
}
