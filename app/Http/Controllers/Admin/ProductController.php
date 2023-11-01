<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('tags')->with('categories')->orderBy('id', 'desc')->get();
        return view('admin.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::active()->get();
        $tags = Tag::active()->get();
        return view('admin.product-create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pro_name = $request->post('product-name');
        $product = Product::create([
            'product_name' => $pro_name,
            'product_slug' => Str::slug($pro_name),
            'product_brand' => $request->post('product-brand'),
            'product_price' => $request->post('product-price'),
            'product_discount_percentage' => $request->post('product-discount-percentage'),
            'product_sku' => $request->post('product-sku'),
            'product_short_description' => $request->post('product-short-description'),
            'product_long_description' => $request->post('product-long-description') ,
            'status' => 1,
        ]);

        if ($request->hasFile('product-image')) {
            $image = time().'-'.$request->file('product-image')->getClientOriginalName();
            $request->file('product-image')->move(public_path().'/image/products', $image);
            $product->product_image = $image;
            $product->save();
        }
        if ($request->hasFile('product-flip-image')) {
            $image = time().'-'.$request->file('product-flip-image')->getClientOriginalName();
            $request->file('product-flip-image')->move(public_path().'/image/products', $image);
            $product->product_flip_image = $image;
            $product->save();
        }

        if ($request->hasFile('product-desc-images')) {
            $desc_images = array();
            foreach ($request->file('product-desc-images') as $key => $file) {
                $image = time().'-'.$file->getClientOriginalName();
                $file->move(public_path().'/image/products', $image);
                $desc_images[] = $image;
            }
            $product->product_desc_images = json_encode($desc_images);
            $product->save();
        }


        $tag_ids = array();
        foreach ($request->input('tag-id') as $key => $value) {
            $tag_ids[] = decodeId($value);
        }
        $category_ids = array();
        foreach ($request->input('category-id') as $key => $value) {
            $category_ids[] = decodeId($value);
        }
        $product->tags()->sync((array)$tag_ids);
        $product->categories()->sync((array)$category_ids);
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findByUidOrFail($id);
        $categories = Category::active()->get();
        $tags = Tag::active()->get();
        return view('admin.product-edit', compact("product", "categories", "tags"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pro_name = $request->post('product-name');
        $product = Product::updateOrCreate(
            ['id' => decodeId($id)],
            ['product_name' => $pro_name,
            'product_slug' => Str::slug($pro_name),
            'product_brand' => $request->post('product-brand'),
            'product_price' => $request->post('product-price'),
            'product_discount_percentage' => $request->post('product-discount-percentage'),
            'product_sku' => $request->post('product-sku'),
            'product_short_description' => $request->post('product-short-description'),
            'product_long_description' => $request->post('product-long-description') ,
            'status' => 1,
        ]);

        if ($request->hasFile('product-image')) {
            $image = time().'-'.$request->file('product-image')->getClientOriginalName();
            $request->file('product-image')->move(public_path().'/image/products', $image);
            $product->product_image = $image;
            $product->save();
        }
        if ($request->hasFile('product-flip-image')) {
            $image = time().'-'.$request->file('product-flip-image')->getClientOriginalName();
            $request->file('product-flip-image')->move(public_path().'/image/products', $image);
            $product->product_flip_image = $image;
            $product->save();
        }

        if ($request->hasFile('product-desc-images')) {
            $desc_images = array();
            foreach ($request->file('product-desc-images') as $key => $file) {
                $image = time().'-'.$file->getClientOriginalName();
                $file->move(public_path().'/image/products', $image);
                $desc_images[] = $image;
            }
            $product->product_desc_images = json_encode($desc_images);
            $product->save();
        }


        $tag_ids = array();
        foreach ($request->input('tag-id') as $key => $value) {
            $tag_ids[] = decodeId($value);
        }
        $category_ids = array();
        foreach ($request->input('category-id') as $key => $value) {
            $category_ids[] = decodeId($value);
        }
        $product->tags()->sync((array)$tag_ids);
        $product->categories()->sync((array)$category_ids);
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
