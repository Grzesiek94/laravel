<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'asc')->get();

        return view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'percent' => 'required|numeric|max:100|min:0',
        ]);

        $category = new Category;
        $category->mapRequest('*');
        $category->save();

        return redirect()->route('category.index')->withSuccess('Kategoria dodana pomyślnie!');
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'percent' => 'required|numeric|max:100|min:0',
        ]);

        $category->mapRequest('*');
        $category->save();

        return redirect()->route('category.index')->withSuccess('Kategoria zaktualizowana pomyślnie!');
    }

    public function destroy(Category $category)
  	{
    		$category->delete();
    		return redirect()->back()->withSuccess( 'Kategoria została usunięta!' );
  	}
}
