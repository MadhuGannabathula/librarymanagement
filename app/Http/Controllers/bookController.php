<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = \App\Models\book::all();
        return view('bookshow',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $book = new book();
        $book->name = $request->name;
        $book->authorname = $request->authorname;
        $book->department = $request->department;
        $book->section = $request->section;
        $book->reading = $request->reading;
        $book->takehome = $request->takehome;
        $book->total = $request->takehome + $request->reading;
        $book->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        return view('bookid',compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
        return view('editbook',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
        return $book->name;
        $book->name = $request->name;
        $book->authorname = $request->authorname;
        $book->department = $request->department;
        $book->section = $request->section;
        $book->reading = $request->reading;
        $book->takehome = $request->takehome;
        $book->total = $book->total + $request->total;
        $book->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = \App\Models\book::find($id);
        $book->delete();
        return redirect('/admin/books');
    }

    public function search(Request $request){
        $authorname = $request->authorname;
        $name = $request->name;
        if($request->filled('authorname') && $request->filled('name')){
            $books = \App\Models\book::where('name','like','%'.$name.'%')->orwhere('authorname','like','%'.$authorname.'%')->get();
        }
        else if($request->filled('name')){
            $books = \App\Models\book::where('name','like','%'.$name.'%')->get();
        }
        else if($request->filled('authorname')){
            $books = \App\Models\book::where('authorname','like','%'.$authorname.'%')->get();
        }
        else{
            return redirect('/emppage');
        }
        return view('searchbooks',compact('books'));
    }

    public function studentsearch(Request $request){
        $authorname = $request->authorname;
        $name = $request->name;
        if($request->filled('authorname') && $request->filled('name')){
            $books = \App\Models\book::where('name','like','%'.$name.'%')->orwhere('authorname','like','%'.$authorname.'%')->get();
        }
        else if($request->filled('name')){
            $books = \App\Models\book::where('name','like','%'.$name.'%')->get();
        }
        else if($request->filled('authorname')){
            $books = \App\Models\book::where('authorname','like','%'.$authorname.'%')->get();
        }
        else{
            return redirect('/');
        }
        return view('studentsearch',compact('books'));
    }
}
