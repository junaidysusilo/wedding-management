<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::get()
        ]);
    }

    public function create()
    {
        return view('categories.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);

        Category::create($validatedData);

        return redirect(route('users.index'))->with('success', 'New category have been added!');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Category::where('id', $category->id)
            ->update($validatedData);

        return redirect(route('users.index'))->with('success', 'Category have been updated');
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);

        return redirect(route('users.index'))->with('success', 'Category have been deleted!');
    }
}
