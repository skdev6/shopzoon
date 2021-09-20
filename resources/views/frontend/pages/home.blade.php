@extends('frontend.index')
@section('content')
    <div class="hero-area hero-slider-five">
        <div class="single-hero-slider-five">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content-wrap">
                            <div class="hero-text-five mt-lg-5">
                                <h6 class=" mb-30 small-title">
                                    CHAIR <br> COLLECTION <br> 2020
                                </h6>
                                <h1>Chanel Chair <br> High Quality Walnut</h1>
                                <div class="button-box section-space--mt_60"> <a href="shop-4-column.html" class="text-btn-normal font-weight--reguler font-lg-p">Discover Collection <i class="icon-arrow-right"></i></a> </div>
                            </div>
                            <div class="inner-images">
                                <div class="image-one"> <img src="{{asset('frontend')}}/images/hero/home-full-width-2.webp" class="img-fluid" width="515" height="515" alt="Image"> </div>
                                <div class="image-two"> <img src="{{asset('frontend')}}/images/hero/home-full-width-4.webp" class="img-fluid" width="370" height="480" alt="Image"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slider-five">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content-wrap">
                            <div class="hero-text-five mt-lg-5">
                                <h6 class=" mb-30 small-title">
                                    CHAIR <br> COLLECTION <br> 2020
                                </h6>
                                <h1>Flower Vase <br>  Made Of Ceramic</h1>
                                <div class="button-box section-space--mt_60"> <a href="shop-4-column.html" class="text-btn-normal font-weight--reguler font-lg-p">Discover Collection <i class="icon-arrow-right"></i></a> </div>
                            </div>
                            <div class="inner-images">
                                <div class="image-one"> <img src="{{asset('frontend')}}/images/hero/home-full-width-2.webp" class="img-fluid" width="515" height="515" alt="Image"> </div>
                                <div class="image-two"> <img src="{{asset('frontend')}}/images/hero/home-full-width-1.webp" class="img-fluid" width="597" height="407" alt="Image"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area-box">
        <div class="container">
            <div class="row banner-inner-box">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-images-one mt-30">
                        <a href="#" class="thumbnail"> <img src="{{asset('frontend')}}/images/banners/bn-hf-1-570x340.webp" width="546" height="326" class="img-fluid" alt="Banner images"> </a>
                        <div class="banner-title">
                            <h3><a href="#">Table collection </a></h3>
                            <h6>Furniture Helen</h6>
                            <div class="button-box mt-40"> <a href="#" class="text-btn-normal">Discover now <i class="icon-arrow-right"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-images-one mt-30">
                        <a href="#" class="thumbnail"> <img src="{{asset('frontend')}}/images/banners/bn-hf-2-570x340.webp" width="546" height="326" class="img-fluid" alt="Banner images"> </a>
                        <div class="banner-title">
                            <h3><a href="#">Chair collection </a></h3>
                            <h6>Furniture Helen</h6>
                            <div class="button-box mt-40"> <a href="#" class="text-btn-normal">Discover now <i class="icon-arrow-right"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-wrapper section-space--ptb_120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="section-title text-lg-start text-center mb-20">
                        <h3 class="section-title">New products</h3> </div>
                </div>
                <div class="col-lg-9">
                    <ul class="nav product-tab-menu justify-content-lg-end justify-content-center" role="tablist">
                        <li class="tab__item nav-item active"> <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_01" role="tab">All Products</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_02" role="tab">Accessories</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_03" role="tab">Chair</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_04" role="tab">Decoration</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_05" role="tab">Furniture</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_08" role="tab">Table</a> </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content mt-30">
                <div class="tab-pane fade show active" id="tab_list_01">
                    <!-- product-slider-active -->
                    <div class="product-slider-active">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_1-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon out-of-stock ">
                                    Out Of Stock
                                </span> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_2-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Simple Chair</a></h6>
                                <div class="prodect-price"> <span class="new-price">£70.00</span> - <span class="old-price"> £95.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_3-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Smooth Disk</a></h6>
                                <div class="prodect-price"> <span class="new-price">£46.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_4-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon onsale">
                                -14%
                                </span> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Wooden Flowerpot</a></h6>
                                <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_5-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Living room & Bedroom lights</a></h6>
                                <div class="prodect-price"> <span class="new-price">£60.00</span> - <span class="old-price"> £69.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_6-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Gray lamp</a></h6>
                                <div class="prodect-price"> <span class="new-price">£80.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_8-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                </div>
                <div class="tab-pane" id="tab_list_02">
                    <div class="product-slider-active">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_1-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon out-of-stock ">
                                    Out Of Stock
                                </span> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_8-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_list_03">
                    <!-- product-slider-active -->
                    <div class="product-slider-active">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_2-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Simple Chair</a></h6>
                                <div class="prodect-price"> <span class="new-price">£70.00</span> - <span class="old-price"> £95.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_3-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Smooth Disk</a></h6>
                                <div class="prodect-price"> <span class="new-price">£46.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_4-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon onsale">
                                -14%
                                </span> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Wooden Flowerpot</a></h6>
                                <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_5-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Living room & Bedroom lights</a></h6>
                                <div class="prodect-price"> <span class="new-price">£60.00</span> - <span class="old-price"> £69.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_6-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Gray lamp</a></h6>
                                <div class="prodect-price"> <span class="new-price">£80.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_list_04">
                    <!-- product-slider-active -->
                    <div class="product-slider-active">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_3-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Smooth Disk</a></h6>
                                <div class="prodect-price"> <span class="new-price">£46.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_4-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon onsale">
                                -14%
                                </span> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Wooden Flowerpot</a></h6>
                                <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_5-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Living room & Bedroom lights</a></h6>
                                <div class="prodect-price"> <span class="new-price">£60.00</span> - <span class="old-price"> £69.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_6-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Gray lamp</a></h6>
                                <div class="prodect-price"> <span class="new-price">£80.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_list_05">
                    <!-- product-slider-active -->
                    <div class="product-slider-active">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_4-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon onsale">
                                -14%
                                </span> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Wooden Flowerpot</a></h6>
                                <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_5-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Living room & Bedroom lights</a></h6>
                                <div class="prodect-price"> <span class="new-price">£60.00</span> - <span class="old-price"> £69.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_6-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Gray lamp</a></h6>
                                <div class="prodect-price"> <span class="new-price">£80.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_list_08">
                    <!-- product-slider-active -->
                    <div class="product-slider-active">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_8-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_5-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Living room & Bedroom lights</a></h6>
                                <div class="prodect-price"> <span class="new-price">£60.00</span> - <span class="old-price"> £69.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_6-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Gray lamp</a></h6>
                                <div class="prodect-price"> <span class="new-price">£80.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                            </div>
                        </div>
                        <!-- Single Product Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offer-colection-area">
        <div class="section-space--ptb_120 bg-img" data-bg="{{asset('frontend')}}/images/bg/banner_large.webp">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-9">
                                <div class="colection-info-wrap">
                                    <div class="section-title mb-10">
                                        <h2 class="h-lg"><span class="text-red">50% OFF</span> Interior Collection</h2> </div>
                                    <p class="font-lg-p">Free shipping over $125 for international orders</p>
                                    <div class="button-box section-space--mt_60"> <a href="shop-4-column.html" class="text-btn-normal font-weight--bold font-lg-p">Discover now <i class="icon-arrow-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-wrapper section-space--ptb_120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="section-title text-lg-start text-center mb-20">
                        <h3 class="section-title">Best selling</h3> </div>
                </div>
                <div class="col-lg-9">
                    <ul class="nav product-tab-menu justify-content-lg-end justify-content-center" role="tablist">
                        <li class="tab__item nav-item active"> <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_11" role="tab">All Products</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_12" role="tab">Accessories</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_13" role="tab">Chair</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_14" role="tab">Decoration</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_15" role="tab">Furniture</a> </li>
                        <li class="tab__item nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab_list_16" role="tab">Table</a> </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content mt-30">
                <div class="tab-pane fade show active" id="tab_list_11">
                    <!-- product-slider-active -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_1-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon out-of-stock ">
                                        Out Of Stock
                                    </span> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_2-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_3-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Smooth Disk</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£46.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_4-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon onsale">
                                    -14%
                                    </span> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Wooden Flowerpot</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_5-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Living room & Bedroom lights</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£60.00</span> - <span class="old-price"> £69.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_6-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Gray lamp</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£80.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_8-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_list_12">
                    <div class="row ">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_1-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon out-of-stock ">
                                        Out Of Stock
                                    </span> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_9-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_list_13">
                    <div class="row ">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_2-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Simple Chair</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £45.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/10-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Gray nancy chair</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£70.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/11-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Wooden chair</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£80.00</span> - <span class="old-price"> £195.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_list_14">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_1-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon out-of-stock ">
                                        Out Of Stock
                                    </span> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_2-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Simple Chair</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£70.00</span> - <span class="old-price"> £95.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_3-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Smooth Disk</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£46.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_4-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon onsale">
                                    -14%
                                    </span> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Wooden Flowerpot</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_5-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Living room & Bedroom lights</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£60.00</span> - <span class="old-price"> £69.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_6-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Gray lamp</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£80.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_8-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_list_15">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_3-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Smooth Disk</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£46.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_6-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Gray lamp</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£80.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_8-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_list_16">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_7-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Decoration wood</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£50.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_8-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Teapot with black tea</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£20.00</span> - <span class="old-price"> £135.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_4-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> <span class="ribbon onsale">
                                    -14%
                                    </span> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Wooden Flowerpot</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£40.00</span> - <span class="old-price"> £635.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Single Product Item Start -->
                            <div class="single-product-item text-center">
                                <div class="products-images">
                                    <a href="product-details.html" class="product-thumbnail"> <img src="{{asset('frontend')}}/images/product/1_5-300x300.webp" class="img-fluid" alt="Product Images" width="300" height="300"> </a>
                                    <div class="product-actions"> <a href="#" data-bs-toggle="modal" data-bs-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a> <a href="product-details.html"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a> <a href="wishlist.html"><i class="p-icon icon-heart"></i> <span class="tool-tip">Browse Wishlist</span></a> </div>
                                </div>
                                <div class="product-content">
                                    <h6 class="prodect-title"><a href="product-details.html">Living room & Bedroom lights</a></h6>
                                    <div class="prodect-price"> <span class="new-price">£60.00</span> - <span class="old-price"> £69.00</span> </div>
                                </div>
                            </div>
                            <!-- Single Product Item End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-blog-area section-space--pb_90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="section-title text-start mb-20">
                        <h2 class="section-title">Latest from our blog</h2> </div>
                </div>
                <div class="col-md-2"> <a href="#" class="text-btn-normal">Discover now <i class="icon-arrow-right"></i></a> </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-item mt-30">
                        <div class="blog-thumbnail-box">
                            <a href="#" class="thumbnail"> <img src="{{asset('frontend')}}/images/blog/8-570x370.webp" class="img-fluid" alt="Blog Images"> </a> <a href="#" class="btn-blog"> Read more </a> </div>
                        <div class="blog-contents">
                            <h6 class="blog-title"><a href="#">Interior design is the art, the interior designer is the artist.</a></h6>
                            <div class="meta-tag-box">
                                <div class="meta date"><span>October 15, 2020</span></div>
                                <div class="meta author"><span><a href="#">Hastheme</a></span></div>
                                <div class="meta cat"><span>in <a href="#">Chair</a></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>
                <div class="col-lg-4 col-md-6  col-sm-6 col-12">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-item mt-30">
                        <div class="blog-thumbnail-box">
                            <a href="#" class="thumbnail"> <img src="{{asset('frontend')}}/images/blog/9-570x370.webp" class="img-fluid" alt="Blog Images"> </a> <a href="#" class="btn-blog"> Read more </a> </div>
                        <div class="blog-contents">
                            <h6 class="blog-title"><a href="#">Decorate your home with the most modern furnishings.</a></h6>
                            <div class="meta-tag-box">
                                <div class="meta date"><span>October 02, 2020</span></div>
                                <div class="meta author"><span><a href="#">Hastheme</a></span></div>
                                <div class="meta cat"><span>in <a href="#">Chair</a></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-item mt-30">
                        <div class="blog-thumbnail-box">
                            <a href="#" class="thumbnail"> <img src="{{asset('frontend')}}/images/blog/10-570x370.webp" class="img-fluid" alt="Blog Images"> </a> <a href="#" class="btn-blog"> Read more </a> </div>
                        <div class="blog-contents">
                            <h6 class="blog-title"><a href="#">Spatialize with the decorations of the Helendo store.</a></h6>
                            <div class="meta-tag-box">
                                <div class="meta date"><span>October 18, 2020</span></div>
                                <div class="meta author"><span><a href="#">Hastheme</a></span></div>
                                <div class="meta cat"><span>in <a href="#">Chair</a></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>
            </div>
        </div>
    </div>
    <div class="our-brand-area section-space--pb_90">
        <div class="container">
            <div class="brand-slider-active">
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="{{asset('frontend')}}/images/brand/partner1.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="{{asset('frontend')}}/images/brand/partner2.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="{{asset('frontend')}}/images/brand/partner3.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="{{asset('frontend')}}/images/brand/partner4.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="{{asset('frontend')}}/images/brand/partner5.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="{{asset('frontend')}}/images/brand/partner3.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection