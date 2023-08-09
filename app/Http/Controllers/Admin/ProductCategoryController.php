<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('admin.product-category.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product-category-create')->with('category', Category::active()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category_name = $request->post('category-name');
        Category::create([
            'category_name' => $category_name,
            'category_slug' => Str::slug($category_name),
            'status' => 1,
        ]);
        return redirect()->route('admin.product-category.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('admin.product-category.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product-category-edit')->with('category', Category::active()->get())->with('single_category', Category::findByUid($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category_name = $request->post('category-name');
        Category::whereUid($id)->update([
            'category_name' => $category_name,
            'category_slug' => Str::slug($category_name),
            'status' => 1,
        ]);
        return redirect()->route('admin.product-category.edit', ['product_category' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $category = Category::findByUid($id);
        $category->delete();
        return redirect()->route('admin.product-category.create');
    }
}
