@extends('home.layouts.app')

@push('style')
@endpush


@push('title')
    Indian - Handmade Shop eCommerce
@endpush

@section('meta_tags')
@endsection


@section('content')
    <!-- Slider main container Start -->
    <div class="section section-fluid bg-white">
        <div class="container-fluid">
            <div class="home3-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="home3-slide-item swiper-slide" data-swiper-autoplay="5000"
                        data-bg-image="{{ asset('assets/images/slider/home3/slide-1.webp') }}">
                        <div class="container">
                            <div class="home3-slide-content">
                                <h5 class="sub-title">Handicraft shop</h5>
                                <h2 class="title">Inspired by Your <br>Sweetest Dreams</h2>
                                <div class="link"><a href="shop.html" class="btn btn-black btn-hover-primary">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home3-slide-item swiper-slide" data-swiper-autoplay="5000"
                        data-bg-image="{{ asset('assets/images/slider/home3/slide-2.webp') }}">
                        <div class="container">
                            <div class="home3-slide-content">
                                <h5 class="sub-title">Handicraft shop</h5>
                                <h2 class="title">Daily Recipes <br>for Your Health</h2>
                                <div class="link"><a href="shop.html" class="btn btn-black btn-hover-primary">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home3-slide-item swiper-slide" data-swiper-autoplay="5000"
                    data-bg-image="{{ asset('assets/images/slider/home3/slide-3.webp') }}">
                    <div class="container">
                        <div class="home3-slide-content">
                            <h5 class="sub-title">Handicraft shop</h5>
                            <h2 class="title">Decorative Box <br>for New Aspiration</h2>
                            <div class="link"><a href="shop.html" class="btn btn-black btn-hover-primary">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home3-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
            <div class="home3-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
        </div>
    </div>
    <!-- Slider main container End -->

    <!-- Category Banner Section Start -->
    <div class="section section-fluid learts-pt-30 bg-white">
        <div class="container">
            <div class="row learts-mb-n30">

                <div class="col-xxl-6 col-xl-8 col-12 learts-mb-30">
                    <div class="learts-blockquote">
                        <div class="inner">
                            <h2 class="title">Learts is an online shop for handicrafts and arts’ works based in the US.
                            </h2>
                            <div class="desc">
                                <p>Crafting beautiful stuff with our own hands and the help from useful tools is a wonderful
                                    process, where you can enjoy yourself while pulling out some ideas and busy perfecting
                                    your work. We provide high-end unique vases, wall arts, home accessories, and furniture
                                    pieces.</p>
                            </div>
                            <a href="about-us.html" class="link">ABOUT US</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12 learts-mb-30">
                    <div class="sale-banner3-1">
                        <div class="image"><img src="{{ asset('assets/images/banner/sale/sale-banner3-1.webp') }}"
                                alt=""></div>
                        <div class="content">
                            <span class="special-title">Spring sale</span>
                            <h2 class="title">Sale up to 10% all</h2>
                            <a href="#" class="link">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12 learts-mb-30">
                    <div class="category-banner3">
                        <a href="shop.html" class="inner">
                            <div class="image"><img src="{{ asset('assets/images/banner/category/banner-s2-7.webp') }}"
                                    alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Home Decor<span class="number">16 items</span></h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12 learts-mb-30">
                    <div class="category-banner3">
                        <a href="shop.html" class="inner">
                            <div class="image"><img src="{{ asset('assets/images/banner/category/banner-s2-8.webp') }}"
                                    alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Gift Ideas<span class="number">16 items</span></h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12 order-xxl-6 learts-mb-30">
                    <div class="instagram-banner1">
                        <div class="inner">
                            <div class="image"><img src="{{ asset('assets/images/banner/instagram-1.webp') }}"
                                    alt=""></div>
                            <div class="content">
                                <div class="icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <span class="sub-title">Follow us on instagram</span>
                                <h3 class="title"><a href="shop.html">@learts_store</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-8 col-12 learts-mb-30">
                    <div class="category-banner3">
                        <a href="shop.html" class="inner">
                            <div class="image"><img src="{{ asset('assets/images/banner/category/banner-s2-9.webp') }}"
                                    alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Toys<span class="number">6 items</span></h3>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Category Banner Section End -->

    <!-- Product Section Start -->
    <div class="section section-fluid section-padding bg-white">
        <div class="container">

            <!-- Product Tab Start -->
            <div class="row">
                <div class="col-12">
                    <ul class="product-tab-list nav">
                        <li><a class="active" data-bs-toggle="tab" href="#tab-new-sale">New arrivals</a></li>
                        <li><a data-bs-toggle="tab" href="#tab-sale-items">Sale items</a></li>
                        <li><a data-bs-toggle="tab" href="#tab-best-sellers">Best sellers</a></li>
                    </ul>
                    <div class="prodyct-tab-content1 tab-content">
                        <div class="tab-pane fade show active" id="tab-new-sale">
                            <!-- Products Start -->
                            <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="onsale">-13%</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-1.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-1-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Boho
                                                    Beard Mug</a></h6>
                                            <span class="price">
                                                <span class="old">$45.00</span>
                                                <span class="new">$39.00</span>
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-2.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-2-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Motorized
                                                    Tricycle</a></h6>
                                            <span class="price">
                                                $35.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <span class="product-badges">
                                                <span class="hot">hot</span>
                                            </span>
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-3.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-3-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Walnut
                                                    Cutting Board</a>
                                            </h6>
                                            <span class="price">
                                                $100.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="onsale">-27%</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-4.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-4-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Pizza
                                                    Plate Tray</a></h6>
                                            <span class="price">
                                                <span class="old">$30.00</span>
                                                <span class="new">$22.00</span>
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-5.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-5-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            <div class="product-options">
                                                <ul class="colors">

                                                    <li style="background-color: #c2c2c2;">color one</li>
                                                    <li style="background-color: #374140;">color two</li>
                                                    <li style="background-color: #8ea1b2;">color three</li>
                                                </ul>
                                                <ul class="sizes">
                                                    <li>Large</li>
                                                    <li>Medium</li>
                                                    <li>Small</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Minimalist
                                                    Ceramic Pot</a>
                                            </h6>
                                            <span class="price">
                                                $120.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-6.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-6-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Clear
                                                    Silicate Teapot</a>
                                            </h6>
                                            <span class="price">
                                                $140.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="hot">hot</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-7.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-7-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Lucky
                                                    Wooden Elephant</a>
                                            </h6>
                                            <span class="price">
                                                $35.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="outofstock"><i class="fal fa-frown"></i></span>
                                                    <span class="hot">hot</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-8.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-8-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            <div class="product-options">
                                                <ul class="colors">
                                                    <li style="background-color: #000000;">color one</li>
                                                    <li style="background-color: #b2483c;">color two</li>
                                                </ul>
                                                <ul class="sizes">
                                                    <li>Large</li>
                                                    <li>Medium</li>
                                                    <li>Small</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Decorative
                                                    Christmas Fox</a>
                                            </h6>
                                            <span class="price">
                                                $50.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-9.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-9-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Aluminum
                                                    Equestrian</a></h6>
                                            <span class="price">
                                                $100.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-10.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-10-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Fish
                                                    Cut Out Set</a></h6>
                                            <span class="price">
                                                $9.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Products End -->
                        </div>
                        <div class="tab-pane fade" id="tab-sale-items">
                            <!-- Products Start -->
                            <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="onsale">-27%</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-4.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-4-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Pizza
                                                    Plate Tray</a></h6>
                                            <span class="price">
                                                <span class="old">$30.00</span>
                                                <span class="new">$22.00</span>
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-5.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-5-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            <div class="product-options">
                                                <ul class="colors">
                                                    <li style="background-color: #c2c2c2;">color one</li>
                                                    <li style="background-color: #374140;">color two</li>
                                                    <li style="background-color: #8ea1b2;">color three</li>
                                                </ul>
                                                <ul class="sizes">
                                                    <li>Large</li>
                                                    <li>Medium</li>
                                                    <li>Small</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Minimalist
                                                    Ceramic Pot</a>
                                            </h6>
                                            <span class="price">
                                                $120.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-6.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-6-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Clear
                                                    Silicate Teapot</a>
                                            </h6>
                                            <span class="price">
                                                $140.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="hot">hot</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-7.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-7-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Lucky
                                                    Wooden Elephant</a>
                                            </h6>
                                            <span class="price">
                                                $35.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="outofstock"><i class="fal fa-frown"></i></span>
                                                    <span class="hot">hot</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-8.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-8-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            <div class="product-options">
                                                <ul class="colors">
                                                    <li style="background-color: #000000;">color one</li>
                                                    <li style="background-color: #b2483c;">color two</li>
                                                </ul>
                                                <ul class="sizes">
                                                    <li>Large</li>
                                                    <li>Medium</li>
                                                    <li>Small</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Decorative
                                                    Christmas Fox</a>
                                            </h6>
                                            <span class="price">
                                                $50.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-9.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-9-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Aluminum
                                                    Equestrian</a></h6>
                                            <span class="price">
                                                $100.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-10.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-10-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Fish
                                                    Cut Out Set</a></h6>
                                            <span class="price">
                                                $9.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="onsale">-13%</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-1.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-1-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Boho
                                                    Beard Mug</a></h6>
                                            <span class="price">
                                                <span class="old">$45.00</span>
                                                <span class="new">$39.00</span>
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-2.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-2-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Motorized
                                                    Tricycle</a></h6>
                                            <span class="price">
                                                $35.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <span class="product-badges">
                                                <span class="hot">hot</span>
                                            </span>
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-3.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-3-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Walnut
                                                    Cutting Board</a>
                                            </h6>
                                            <span class="price">
                                                $100.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Products End -->
                        </div>
                        <div class="tab-pane fade" id="tab-best-sellers">
                            <!-- Products Start -->
                            <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-6.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-6-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Clear
                                                    Silicate Teapot</a>
                                            </h6>
                                            <span class="price">
                                                $140.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="hot">hot</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-7.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-7-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Lucky
                                                    Wooden Elephant</a>
                                            </h6>
                                            <span class="price">
                                                $35.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="outofstock"><i class="fal fa-frown"></i></span>
                                                    <span class="hot">hot</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-8.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-8-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            <div class="product-options">
                                                <ul class="colors">
                                                    <li style="background-color: #000000;">color one</li>
                                                    <li style="background-color: #b2483c;">color two</li>
                                                </ul>
                                                <ul class="sizes">
                                                    <li>Large</li>
                                                    <li>Medium</li>
                                                    <li>Small</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Decorative
                                                    Christmas Fox</a>
                                            </h6>
                                            <span class="price">
                                                $50.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-9.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-9-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Aluminum
                                                    Equestrian</a></h6>
                                            <span class="price">
                                                $100.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-10.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-10-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Fish
                                                    Cut Out Set</a></h6>
                                            <span class="price">
                                                $9.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i
                                                        class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="onsale">-13%</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-1.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-1-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Boho
                                                    Beard Mug</a></h6>
                                            <span class="price">
                                                <span class="old">$45.00</span>
                                                <span class="new">$39.00</span>
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Compare"><i class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-2.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-2-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Motorized
                                                    Tricycle</a>
                                            </h6>
                                            <span class="price">
                                                $35.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Compare"><i class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <span class="product-badges">
                                                <span class="hot">hot</span>
                                            </span>
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-3.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-3-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Walnut
                                                    Cutting Board</a>
                                            </h6>
                                            <span class="price">
                                                $100.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Compare"><i class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <span class="product-badges">
                                                    <span class="onsale">-27%</span>
                                                </span>
                                                <img src="{{ asset('assets/images/product/s328/product-4.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-4-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Pizza
                                                    Plate Tray</a></h6>
                                            <span class="price">
                                                <span class="old">$30.00</span>
                                                <span class="new">$22.00</span>
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Compare"><i class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.detail', ['slug' => 'product-details']) }}"
                                                class="image">
                                                <img src="{{ asset('assets/images/product/s328/product-5.webp') }}"
                                                    alt="Product Image">
                                                <img class="image-hover "
                                                    src="{{ asset('assets/images/product/s328/product-5-hover.webp') }}"
                                                    alt="Product Image">
                                            </a>
                                            <a href="wishlist.html" class="add-to-wishlist hintT-left"
                                                data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                            <div class="product-options">
                                                <ul class="colors">

                                                    <li style="background-color: #c2c2c2;">color one</li>
                                                    <li style="background-color: #374140;">color two</li>
                                                    <li style="background-color: #8ea1b2;">color three</li>
                                                </ul>
                                                <ul class="sizes">
                                                    <li>Large</li>
                                                    <li>Medium</li>
                                                    <li>Small</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="title"><a
                                                    href="{{ route('product.detail', ['slug' => 'product-details']) }}">Minimalist
                                                    Ceramic Pot</a>
                                            </h6>
                                            <span class="price">
                                                $120.00
                                            </span>
                                            <div class="product-buttons">
                                                <a href="#quickViewModal" data-bs-toggle="modal"
                                                    class="product-button hintT-top" data-hint="Quick View"><i
                                                        class="fal fa-search"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Add to Cart"><i class="fal fa-shopping-cart"></i></a>
                                                <a href="#" class="product-button hintT-top"
                                                    data-hint="Compare"><i class="fal fa-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Products End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Tab End -->

        </div>
    </div>
    <!-- Product Section End -->

    <!-- Deal of the Day Section Start -->
    <div class="section section-fluid section-padding">
        <div class="container">
            <div class="row align-items-center learts-mb-n30">

                <div class="col-lg-6 col-12 learts-mb-30">
                    <div class="product-deal-image text-center">
                        <img src="{{ asset('assets/images/product/deal-product-1.webp') }}" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-12 learts-mb-30">
                    <div class="product-deal-content">
                        <h2 class="title">Deal of the day</h2>
                        <div class="desc">
                            <p>Years of experience brought about by our skilled craftsmen could ensure that every piece
                                produced is a work of art. Our focus is always the best quality possible.</p>
                        </div>
                        <div class="countdown1" data-countdown="2024/01/01"></div>
                        <a href="shop.html" class="btn btn-dark btn-hover-primary">Shop Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Deal of the Day Section End -->

    <!-- Shop By Category Section Start -->
    <div class="section section-fluid section-padding bg-white">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h3 class="sub-title">Shop by categories</h3>
                <h2 class="title title-icon-both">Making & crafting</h2>
            </div>
            <!-- Section Title End -->

            <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 learts-mb-n40">

                <div class="col learts-mb-40">
                    <div class="category-banner5">
                        <a href="shop.html" class="inner">
                            <div class="image"><img
                                    src="{{ asset('assets/images/banner/category/banner-s5-1.webp') }}"
                                    alt=""></div>
                            <div class="content">
                                <h3 class="title">Gift ideas</h3>
                                <span class="number">16 Items</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col learts-mb-40">
                    <div class="category-banner5">
                        <a href="shop.html" class="inner">
                            <div class="image"><img
                                    src="{{ asset('assets/images/banner/category/banner-s5-2.webp') }}"
                                    alt=""></div>
                            <div class="content">
                                <h3 class="title">Home Decor</h3>
                                <span class="number">16 Items</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col learts-mb-40">
                    <div class="category-banner5">
                        <a href="shop.html" class="inner">
                            <div class="image"><img
                                    src="{{ asset('assets/images/banner/category/banner-s5-3.webp') }}"
                                    alt=""></div>
                            <div class="content">
                                <h3 class="title">Toys</h3>
                                <span class="number">6 Items</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col learts-mb-40">
                    <div class="category-banner5">
                        <a href="shop.html" class="inner">
                            <div class="image"><img
                                    src="{{ asset('assets/images/banner/category/banner-s5-4.webp') }}"
                                    alt=""></div>
                            <div class="content">
                                <h3 class="title">Pots</h3>
                                <span class="number">4 Items</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col learts-mb-40">
                    <div class="category-banner5">
                        <a href="shop.html" class="inner">
                            <div class="image"><img
                                    src="{{ asset('assets/images/banner/category/banner-s5-5.webp') }}"
                                    alt=""></div>
                            <div class="content">
                                <h3 class="title">Kniting & Sewing</h3>
                                <span class="number">5 Items</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Shop By Category Section End -->

    <!-- Shop By Brands Section Start -->
    <div class="section section-fluid section-padding bg-white border-top-dashed border-bottom-dashed">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title title-icon-both">Shop by brands</h2>
            </div>
            <!-- Section Title End -->

            <div class="brand-carousel">

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-7.webp') }}"
                                alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-8.webp') }}"
                                alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-1.webp') }}"
                                alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-2.webp') }}"
                                alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-3.webp') }}"
                                alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-4.webp') }}"
                                alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-5.webp') }}"
                                alt="Brands Image"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="{{ asset('assets/images/brands/brand-6.webp') }}"
                                alt="Brands Image"></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Shop By Brands Section End -->

    <!-- Blog Section Start -->
    <div class="section section-fluid section-padding bg-white">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title title-icon-both">Our blog update</h2>
            </div>
            <!-- Section Title End -->

            <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 learts-mb-n40">

                <div class="col learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img
                                    src="{{ asset('assets/images/blog/s370/blog-1.webp') }}" alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 201 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Start a Kickass Online Blog</a>
                            </h5>
                            <div class="desc">
                                <p>Working on writing our first book has been one of the most amazing projects. It seems
                                    like it will be forever until I get to show you what we’ve been…</p>
                            </div>
                            <a href="blog-details-right-sidebar.html" class="link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img
                                    src="{{ asset('assets/images/blog/s370/blog-2.webp') }}" alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 158 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Tile Tray with Brass
                                    Handles</a></h5>
                            <div class="desc">
                                <p>Happy New Year All! I am back after the holiday break and so excited for all the home
                                    projects I have planned in 2020. So when they asked me to come…</p>
                            </div>
                            <a href="blog-details-right-sidebar.html" class="link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img
                                    src="{{ asset('assets/images/blog/s370/blog-3.webp') }}" alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 119 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Dining Table Chairs
                                    Makeover</a></h5>
                            <div class="desc">
                                <p>I did not know exactly the shape I was looking for, but knew that I wanted to paint them
                                    with this SUPER pretty Krylon® Italian Olive color. I stopped at…</p>
                            </div>
                            <a href="blog-details-right-sidebar.html" class="link">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col learts-mb-40">
                    <div class="blog">
                        <div class="image">
                            <a href="blog-details-right-sidebar.html"><img
                                    src="{{ asset('assets/images/blog/s370/blog-4.webp') }}" alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i><a href="#">January 22, 2020</a></li>
                                <li><i class="far fa-eye"></i> 83 views</li>
                            </ul>
                            <h5 class="title"><a href="blog-details-right-sidebar.html">Faux Map Drawer Dresser</a>
                            </h5>
                            <div class="desc">
                                <p>I gave you all a peek at my guest room makeover yesterday and promised I would share all
                                    the details on my DIY Map Dresser, so here we go! I initially had…</p>
                            </div>
                            <a href="blog-details-right-sidebar.html" class="link">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row learts-mt-50">
                <div class="col text-center">
                    <a href="blog-right-sidebar.html" class="btn btn-dark btn-hover-primary">View all post</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Blog Section End -->
@endsection


@section('script')
@endsection
