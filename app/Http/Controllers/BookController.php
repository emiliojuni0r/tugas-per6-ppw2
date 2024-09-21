<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data_book = Book::all()->sortByDesc('id');
        $data_book = Book::all()->sortBy('id');
        // $data_book = Book::all()->sortBy('judul');

        $summary_data = Book::count();

        $total_price = Book::all()->sum('harga');

        return view('book.index', compact('data_book', 'summary_data', 'total_price'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->harga = $request->harga;
        $book->tgl_terbit = $request->tgl_terbit;
        $book->save();

        return  redirect('/book');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);

        return view('book.edit',compact('book'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    
        $book = Book::findOrFail($id);
        $data = [
            'id' =>$request->input('id'),
            'judul' =>$request->input('judul'),
            'penulis' =>$request->input('penulis'),
            'harga' =>$request->input('harga'),
            'tgl_terbit' =>$request->input('tgl_terbit'),
        ];
        
        $updated_data = Book::where('id', '=', $id)->update($data);
    
        return redirect('book')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/book');
    }
}
