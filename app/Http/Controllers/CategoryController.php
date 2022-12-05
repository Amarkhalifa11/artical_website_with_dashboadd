<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('backend.category.all_category' , compact('categories'));
    }


    public function create()
    {
        return view('backend.category.add_category');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        $categories = new Category();
        $categories->name = $name;

        $categories->save();
        return redirect()->route('categories.index');
    }


    public function edit($id)
    {
        $categories = Category::find($id);
        return view('backend.category.update_category' , compact('categories'));
    }

    public function update(Request $request,$id)
    {

        $name = $request->input('name');

        $categories = Category::find($id);
        $categories->update([
            'name'  => $name,
        ]);

        $categories->save();

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('categories.index');
    }
}
