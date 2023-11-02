@extends('admin.layouts.app')

@push('style')


@endpush

@section('content')

    @include('admin.layouts.page-header', ['title' => 'Product Update - '. $product->product_name])
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('admin.product.update', ['product' => $product->uid ]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input class="form-control" name="product-name" value="{{ $product->product_name }}" />
                                </div>
                                <div class="form-group">
                                    <label>Product Brand</label>
                                    <input class="form-control" name="product-brand" value="{{ $product->product_brand }}"  />
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Product Price</label>
                                        <input class="form-control" name="product-price" value="{{ $product->product_price }}" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Product Percentage</label>
                                        <input class="form-control" name="product-discount-percentage" value="{{ $product->product_discount_percentage }}" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Product SKU</label>
                                        <input class="form-control" name="product-sku"  value="{{ $product->product_sku }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Product Short Description</label>
                                    <textarea  class="form-control" name="product-short-description" cols="30" rows="5">{{ $product->product_short_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Product Long Description</label>
                                    <textarea  class="form-control tinymceTextarea" name="product-long-description" cols="30" rows="10">{{ $product->product_long_description }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Product Image</label>
                                        <input class="form-control" name="product-image" type="file" value="{{ $product->product_image }}" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Product Flip Image</label>
                                        <input class="form-control" name="product-flip-image" type="file" value="{{ $product->product_flip_image }}" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Product Details Images</label>
                                        <input class="form-control" name="product-desc-images[]" multiple type="file" value="{{ $product->product_desc_images }}" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Category</label>
                                        <select class="form-control" name="category-id[]" multiple>
                                            @foreach ($categories as $item)
                                                @if (in_array($item->uid, $product->categories->pluck('uid')->toArray()))
                                                    <option value="{{ $item->uid }}" selected >{{ $item->category_name }}</option>
                                                @else
                                                    <option value="{{ $item->uid }}">{{ $item->category_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Tag</label>
                                        <select class="form-control" name="tag-id[]" multiple="multiple">
                                            @foreach ($tags as $item)
                                                @if (in_array($item->uid, $product->tags->pluck('uid')->toArray()))
                                                    <option value="{{ $item->uid }}" selected >{{ $item->tag_name }}</option>
                                                @else
                                                    <option value="{{ $item->uid }}">{{ $item->tag_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
    <!-- /. ROW  -->
@endsection

@push('script')
<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
{{ tinymceTextarea() }}
@endpush
