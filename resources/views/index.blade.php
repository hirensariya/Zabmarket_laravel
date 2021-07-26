@extends('layout.layout')
@section('content')
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/1.jpg" alt="Men slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Men Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/2.jpg" alt="Wristwatch slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 40% Off</span>
                                <h2 data-seq>Wristwatch Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/3.jpg" alt="Women Jeans slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Jeans Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/4.jpg" alt="Shoes slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Exclusive Shoes</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/5.jpg" alt="Male Female slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 50% Off</span>
                                <h2 data-seq>Best Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row">
                            <!-- promo left -->
                            <div class="col-md-5 no-padding">
                                <div class="aa-promo-left">
                                    <div class="aa-promo-banner">
                                        <img src="img/promo-banner-1.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>75% Off</span>
                                            <h4><a href="#">For Women</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- promo right -->
                            <div class="col-md-7 no-padding">
                                <div class="aa-promo-right">
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/promo-banner-3.jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Exclusive Item</span>
                                                <h4><a href="#">For Men</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/promo-banner-2.jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Sale Off</span>
                                                <h4><a href="#">On Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/promo-banner-4.jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>New Arrivals</span>
                                                <h4><a href="#">For Kids</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/promo-banner-5.jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>25% Off</span>
                                                <h4><a href="#">For Bags</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#Electronics" data-toggle="tab">Electronics</a></li>
                                    <li><a href="#Dress" data-toggle="tab">Dress</a></li>
                                    <li><a href="#Cover" data-toggle="tab">Cover</a></li>
                                    <li><a href="#General" data-toggle="tab">General</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="Electronics">
                                        <ul class="aa-product-catg">
                                            @foreach ($e as $item)
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        @foreach ($item->image as $collection)
                                                            @if ($loop->iteration <= 1)
                                                                <a class="aa-product-img"
                                                                    href="/product-detail/{{ $item->id }}"><img
                                                                        src="/image/{{ $collection }}"
                                                                        alt="polo shirt img"></a>
                                                            @endif
                                                        @endforeach
                                                        <a class="aa-add-card-btn" href="javascript:;"
                                                            onclick="update({{ $item->id }})"><span
                                                                class="fa fa-shopping-cart"
                                                                onclick="update({{ $item->id }})"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">{{ $item->name }}</a>
                                                            </h4>
                                                            <span class="aa-product-price">{{ $item->price }}</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="javascript:;" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"
                                                            onclick="wish({{ $item->id }})"><span
                                                                class="fa fa-heart-o"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>

                                            @endforeach

                                        </ul>
                                        <a class="aa-browse-btn" href="/product/Electronics">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / men product category -->
                                    <!-- start women product category -->
                                    <div class="tab-pane fade" id="Dress">
                                        <ul class="aa-product-catg">
                                            @foreach ($d as $item)
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        @foreach ($item->image as $collection)
                                                            @if ($loop->iteration <= 1)
                                                                <a class="aa-product-img"
                                                                    href="/product-detail/{{ $item->id }}"><img
                                                                        src="/image/{{ $collection }}"
                                                                        alt="polo shirt img"></a>
                                                            @endif
                                                        @endforeach
                                                        <a class="aa-add-card-btn" href="javascript:;"
                                                            onclick="update({{ $item->id }})"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</>
                                                            <figcaption>
                                                                <h4 class="aa-product-title"><a
                                                                        href="#">{{ $item->name }}</a>
                                                                </h4>
                                                                <span
                                                                    class="aa-product-price">{{ $item->price }}</span><span
                                                                    class="aa-product-price"><del>$65.50</del></span>
                                                            </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="javascript:;" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"
                                                            onclick="wish({{ $item->id }})"><span
                                                                class="fa fa-heart-o"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>

                                            @endforeach
                                        </ul>
                                        <a class="aa-browse-btn" href="/product/Dress">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / women product category -->
                                    <!-- start sports product category -->
                                    <div class="tab-pane fade" id="Cover">
                                        <ul class="aa-product-catg">
                                            @foreach ($c as $item)
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        @foreach ($item->image as $collection)
                                                            @if ($loop->iteration <= 1)
                                                                <a class="aa-product-img"
                                                                    href="/product-detail/{{ $item->id }}"><img
                                                                        src="/image/{{ $collection }}"
                                                                        alt="polo shirt img"></a>
                                                            @endif
                                                        @endforeach
                                                        <a class="aa-add-card-btn" href="javascript:;"
                                                            onclick="update({{ $item->id }})"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="#">{{ $item->name }}</a></h4>
                                                            <span class="aa-product-price">{{ $item->price }}</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="javascript:;" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"
                                                            onclick="wish({{ $item->id }})"><span
                                                                class="fa fa-heart-o"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>

                                            @endforeach
                                        </ul>
                                        <a class="aa-browse-btn" href="/product/Cover">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / sports product category -->
                                    <!-- start electronic product category -->
                                    <div class="tab-pane fade" id="General">
                                        <ul class="aa-product-catg">
                                            @foreach ($g as $item)
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        @foreach ($item->image as $collection)
                                                            @if ($loop->iteration <= 1)
                                                                <a class="aa-product-img"
                                                                    href="/product-detail/{{ $item->id }}"><img
                                                                        src="/image/{{ $collection }}"
                                                                        alt="polo shirt img"></a>
                                                            @endif
                                                        @endforeach
                                                        <a class="aa-add-card-btn" href="javascript:;"
                                                            onclick="update({{ $item->id }})"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="#">{{ $item->name }}</a></h4>
                                                            <span class="aa-product-price">{{ $item->price }}</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="javascript:;" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"
                                                            onclick="wish({{ $item->id }})"><span
                                                                class="fa fa-heart-o"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>

                                            @endforeach
                                        </ul>
                                        <a class="aa-browse-btn" href="/product/General">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / electronic product category -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                <li><a href="#latest" data-toggle="tab">Latest</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        @foreach ($p as $item)
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                     @foreach ($item->image as $collection)  @if ($loop->iteration
                                                        <=1)
                                                        <a class="aa-product-img"
                                                        href="/product-detail/{{ $item->id }}"><img
                                                        src="/image/{{ $collection }}" alt="polo shirt
                                                        img"></a> @endif
                                        @endforeach
                                        <a class="aa-add-card-btn" href="javascript:;"
                                            onclick="update({{ $item->id }})"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a
                                                    href="/product-detail/{{ $item->id }}">{{ $item->name }}</a>
                                            </h4>
                                            <span class="aa-product-price">{{ $item->price }}</span><span
                                                class="aa-product-price"><del>$65.50</del></span>
                                        </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="javascript:;" data-toggle="tooltip" data-placement="top"
                                                title="Add to Wishlist" onclick="wish({{ $item->id }})"><span
                                                    class="fa fa-heart-o"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        @endforeach

                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        @foreach ($f as $item)
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    @foreach ($item->image as $collection)
                                                        @if ($loop->iteration <= 1)
                                                            <a class="aa-product-img"
                                                                href="/product-detail/{{ $item->id }}"><img
                                                                    src="/image/{{ $collection }}"
                                                                    alt="polo shirt img"></a>
                                                        @endif
                                                    @endforeach
                                                    <a class="aa-add-card-btn" href="javascript:;"
                                                        onclick="update({{ $item->id }})"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                href="/product-detail/{{ $item->id }}">{{ $item->name }}</a>
                                                        </h4>
                                                        <span class="aa-product-price">{{ $item->price }}</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="javascript:;" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist" onclick="wish({{ $item->id }})"><span
                                                            class="fa fa-heart-o"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / featured product category -->

                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        @foreach ($l as $item)
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    @foreach ($item->image as $collection)
                                                        @if ($loop->iteration <= 1)
                                                            <a class="aa-product-img"
                                                            
                                                                href="/product-detail/{{ $item->id }}"><img
                                                                    src="/image/{{ $collection }}"
                                                                    alt="polo shirt img"></a>
                                                        @endif
                                                    @endforeach
                                                    <a class="aa-add-card-btn" href="javascript:;"
                                                        onclick="update({{ $item->id }})"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                href="/product-detail/{{ $item->id }}">{{ $item->name }}</a>
                                                        </h4>
                                                        <span class="aa-product-price">{{ $item->price }}</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="javascript:;" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist" onclick="wish({{ $item->id }})"><span
                                                            class="fa fa-heart-o"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FREE SHIPPING</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>30 DAYS MONEY BACK</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Latest Blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>LATEST BLOG</h2>
                        <div class="row">
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-3.jpg" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest Blog -->

    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id="" placeholder="Enter your Email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->
@endsection
<script>
    function update(param) {
        console.log(param);
        var product_id = param;
        $.ajax({
            url: "/addcart",
            type: "get",
            data: {
                id: product_id
            },
            success: function(res) {
                //   $("#crt_table").html(res);
                alert(res.msg)
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    }

    function wish(param) {
        console.log(param);
        var product_id = param;
        $.ajax({
            url: "/addwhis",
            type: "get",
            data: {
                id: product_id
            },
            success: function(res) {
                $("#crt_table").html(res);
                alert(res.msg)
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    }
</script>
