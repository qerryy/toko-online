<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
    	return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
    	$categories = Category::findOrFail($id);
        $books = Book::all();
        return view('categories.show', ['categories'=>$categories]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('categories.create', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            'description'=>'required',
        ]);

        Category::create([
            'category_name'=>$request->category_name,
            'description'=>$request->description,
        ]);

        return redirect()->route('categories.create')->with('status', 'Category was Successfully Created');
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.edit', ['categories'=>$categories]);
    }

    public function update(Request $request, $id)
    {
        $update_category = Category::findOrFail($id);
        $request->validate([
            'category_name' =>'required',
            'description'   =>'required',
        ]);

        $update_category->update([
            'category_name' =>$request->category_name,
            'description'   =>$request->description,
        ]);

        $update_category->save();
        return redirect()->route('categories.edit',['categories'=>$update_category])->with('status', 'Category was Updated Successfully');
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->back()->with('status', 'Category was Successfully deleted');
    }

    public function search(Request $request)
    {
        $cari = $request->get('search');
        $categories = Category::where('category_name', 'LIKE', '%'.$cari.'%')->paginate(5);
        return view('categories.index', ['categories'=>$categories]);
    }
}