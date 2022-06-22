<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Book;
use App\Category;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
    	return view('books.index', compact('books'));
    }

    public function show($id)
    {
    	$books = Book::findOrFail($id);
        $categories = Category::all();
        return view('books.show', ['books'=>$books, 'categories'=>$categories]);
    }

    public function create()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('books.create', ['books'=>$books, 'categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:5|max:50',
            'author'=>'required|max:50',
            'publisher'=>'required|max:50',
            'price'=>'required',
            'stock'=>'required',
            'description'=>'required|max:200',
            'cover'=>'required|image|mimes:jpg,jpeg,png,bmp',
        ]);

        $file = $request->file('cover');
        $path = $file->store('covers', 'public');

        $books = Book::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'publisher'=>$request->publisher,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'description'=>$request->description,
            'cover'=>$path,
        ]);

        $books->categories()->sync($request->categories, false);
        return redirect()->route('books.create')->with('status', 'Book was Successfully Created');
    }

    public function edit($id)
    {
        $books = Book::findOrFail($id);
        $categories = Category::all();
        $cate = array();
        foreach($categories as $cat)
        {
            $cate[$cat->id] = $cat->category_name;
        }

        return view('books.edit', ['books'=>$books, 'categories'=>$categories, 'cate'=>$cate]);
    }

    public function update(Request $request, $id)
    {
        $update_book = Book::findOrfail($id);
        $request->validate([
            'title'         =>'required|min:5|max:50',
            'author'        =>'required|max:50',
            'publisher'     =>'required|max:50',
            'price'         =>'required',
            'stock'         =>'required',
            'description'   =>'required',
            'cover'         =>'required|image|mimes:jpg,jpeg,png,bmp'
        ]);

        $update_book->update([
            'title'       =>$request->title,
            'author'      =>$request->author,
            'publisher'   =>$request->publisher,
            'price'       =>$request->price,
            'stock'       =>$request->stock,
            'description' =>$request->description,
            'cover'       =>$request->cover
        ]);

        if($request->file('cover'))
        {
            if($update_book->cover && file_exists(storage_path('app/public/'.$update_book->cover)))
            {
                Storage::delete('public/'.$update_book->cover);
            }
            $file = $request->file('cover')->store('covers', 'public');
            $update_book->cover = $file;
        }

        $update_book->save();
        $update_book->categories()->sync($request->categories, false);

        return redirect()->route('books.edit', ['books'=>$update_book])->with('status', 'Book was Updated Successfully');
    }

    public function destroy($id)
    {
        $books= Book::findOrfail($id);
        if($books->cover && file_exists(storage_path('app/public/'.$books->coveer)))
        {
            Storage::delete('public/'.$books->cover);
        }
        $books->delete();
        return redirect()->back()->with('status', 'Book was Successfully deleted');
    }

    public function search(Request $request)
    {
        $cari = $request->get('search');
        $books = Book::where('title', 'LIKE', '%'.$cari.'%')->orderBy('created_at', 'DESC')->paginate(5);
        return view('books.index', ['books'=>$books]);
    }
}
