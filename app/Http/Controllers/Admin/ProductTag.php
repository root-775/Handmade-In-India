<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductTag extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('product-tag.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product-tag-create')->with('tag', Tag::active()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tag_name = $request->post('tag-name');
        Tag::create([
            'tag_name' => $tag_name,
            'tag_slug' => Str::slug($tag_name),
            'status' => 1,
        ]);
        return redirect()->route('product-tag.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('product-tag.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product-tag-edit')->with('tag', Tag::active()->get())->with('single_tag', Tag::findByUid($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tag_name = $request->post('tag-name');
        Tag::whereUid($id)->update([
            'tag_name' => $tag_name,
            'tag_slug' => Str::slug($tag_name),
            'status' => 1,
        ]);
        return redirect()->route('product-tag.edit', ['product_tag' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::findByUid($id);
        $tag->delete();
        return redirect()->route('product-tag.create');
    }
}
