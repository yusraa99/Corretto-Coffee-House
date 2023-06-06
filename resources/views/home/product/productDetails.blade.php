@include('home.sectionsPic.productHead')
@include('home.sections.headHome')

<body
    class="product-template-default single single-product postid-55 theme-coffeehouse woocommerce woocommerce-page woocommerce-no-js theme-ver-1.0 elementor-default elementor-kit-5">
    <div class="wrap">
        @include('home.sections.header')
        <div class="content-append-before">
            <div data-elementor-type="wp-post" data-elementor-id="185" class="elementor elementor-185"
                data-elementor-settings="[]">
                <div class="elementor-section-wrap">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-b13337c elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
                        data-id="b13337c" data-element_type="section"
                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f7c727c"
                                data-id="f7c727c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-44c1958 elementor-widget elementor-widget-heading"
                                        data-id="44c1958" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Shop Layout</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-acb8c9d elementor-widget elementor-widget-th-breadcrumb"
                                        data-id="acb8c9d" data-element_type="widget"
                                        data-widget_type="th-breadcrumb.default">
                                        <div class="elementor-widget-container">
                                            <div class="wrap-bread-crumb wrap-bread-crumb-elementor breadcrumb-style2">
                                                <div class="bread-crumb">
                                                    <span><a href="{{url('/')}}">Home</a></span><i
                                                        class="step-bread-crumb las la-angle-right"></i><span><a
                                                            href="{{url('product_all')}}">Products</a></span><i
                                                        class="step-bread-crumb las la-angle-right"></i><span>{{$product->title}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div id="main-content" class="content-page">
            <div class="container">
                <div class="row">
                    <div class="main-wrap-shop content-wrap col-md-12 col-sm-12 col-xs-12">


                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="product-55"
                            class="post-55 product type-product status-publish has-post-thumbnail product_cat-coffee-cups product_tag-coffee product_tag-funny product_tag-juice first instock shipping-taxable purchasable product-type-simple">
                            <div class="product-detail">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="detail-gallery">
                                            <div class="wrap-detail-gallery images ">
                                                <div class="mid woocommerce-product-gallery__image image-lightbox"
                                                    data-number="0">
                                                    <img width="600" height="600" src="product/{{$product->image}}"
                                                        class="wp-post-image wp-post-image" alt="" loading="lazy"
                                                        sizes="(max-width: 600px) 100vw, 600px" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="summary entry-summary detail-info">
                                            <h2 class="product-title titlelv1">{{$product->title}}</h2>
                                            <p class="price">
                                            <div class="product-price price simple"><del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price}}</bdi></span></del>
                                                @if ($product->discount_price != null)
                                                <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price
                                                            - $product->discount_price }}</bdi></span></ins>
                                                @endif
                                            </div>

                                            </p>

                                            <form action="{{url('add_cart',$products->id)}}" method="post">
                                                @csrf
                                                <div class="detail-qty info-qty border radius6">
                       
                                                    <input type="number"  name="quantity" value="1"
                                                         class="input-text text qty qty-val" size="4" />
                                                    
                                                </div>
                                                <button type="submit" name="add-to-cart" 
                                                class="single_add_to_cart_button button alt">Add to cart</button>
                                            </form>



                                            <div class="product_meta item-product-meta-info">



                                                <span class="sku_wrapper"><label>CODE:</label>
                                                    <span class="sku">
                                                        {{$product->product_code}}</span>
                                                </span>


                                                <div class="posted_in"><label>Category:</label>
                                                    <div class="meta-item-list"><a
                                                            href="product-category/coffee-cups/index.html"
                                                            rel="tag">{{$product->category->category_name}}</a></div>
                                                </div>
                                                <div class="posted_in"><label>Brand:</label>
                                                    <div class="meta-item-list"><a
                                                            href="product-category/coffee-cups/index.html"
                                                            rel="tag">{{$product->brand->brand_name}}</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-tabs ">
                                <div class="detail-tab-title">
                                    <ul class="list-tag-detail list-none text-uppercase font-bold nav nav-tabs"
                                        role="tablist">
                                        <li class="description_tab" id="tab-title-description">
                                            <a class="active" href="#tab-description" data-target="#tab-description"
                                                data-toggle="tab" aria-expanded="false">
                                                Description </a>
                                        </li>
                                        <li class="reviews_tab" id="tab-title-reviews">
                                            <a class="" href="#tab-reviews" data-target="#tab-reviews" data-toggle="tab"
                                                aria-expanded="false">
                                                Reviews </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="detail-tab-content">
                                    <div class="tab-content">
                                        <div id="tab-description" class="tab-pane active">
                                            <div class="detail-tab-desc">

                                                <h2>Description</h2>

                                                <p>{{$product->description}}</p>
                                            </div>
                                        </div>
                                        <div id="tab-reviews" class="tab-pane ">
                                            <div class="detail-tab-desc">
                                                <div id="reviews" class="woocommerce-Reviews">
                                                    <div id="comments">
                                                        <h2 class="woocommerce-Reviews-title">
                                                            Reviews </h2>


                                                            @if ($product->productsreview != null)
                                                                @foreach ($product->productsreview as $productsreview)
                                                                    
                                                                
                                                                    
                                                                    <div class="posted_in"><label>Username:</label>
                                                                        <div class="meta-item-list"><a
                                                                                href="product-category/coffee-cups/index.html"
                                                                                rel="tag">{{$productsreview->user->name}}</a></div>
                                                                    </div>
                                                                    <p class="woocommerce-noreviews">{{$productsreview->body}}</p>
                                                                @endforeach
                                                            @else
                                                                
                                                            
                                                            
                                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                                <span id="reply-title" class="comment-reply-title">Be
                                                                    the first to review
                                                                    &ldquo;{{$product->title}}&rdquo; <small><a
                                                                            rel="nofollow"
                                                                            id="cancel-comment-reply-link"
                                                                            href="index.html#respond"
                                                                            style="display:none;">Cancel
                                                                            reply</a></small></span>
                                                                
                                                            @endif
                                                            <br>
                                                            <br>
                                                            <span id="reply-title" class="comment-reply-title">Give Us Your Reviews About
                                                                &ldquo;{{$product->title}}&rdquo; <small><a
                                                                        rel="nofollow"
                                                                        id="cancel-comment-reply-link"
                                                                        href="index.html#respond"
                                                                        style="display:none;">Cancel
                                                                        reply</a></small></span>
                                                                <form
                                                                    action="{{url('product_details',$product->id)}}"
                                                                    method="post" >
                                                                    @csrf
                                                                    <p class="comment-notes"><span id="email-notes">
                                                                        </span>
                                                                        Required fields are marked <span
                                                                            class="required">*</span></p>
                                                                    <p class="comment-form-author"><label
                                                                            for="author">Name&nbsp;<span
                                                                                class="required">*</span></label>
                                                                                <input
                                                                            id="author" name="author" type="text"
                                                                            required /></p>

                                                                    <p class="comment-form-comment"><label
                                                                            for="comment">Your review&nbsp;<span
                                                                                class="required">*</span></label>
                                                                                <textarea
                                                                            id="comment" name="comment" cols="45"
                                                                            rows="8" required></textarea></p>
                                                                    <p class="form-submit">
                                                                        <input name="submit"
                                                                            type="submit" id="submit" class="submit"
                                                                            value="Submit" /> 
                                                                        
                                                                    </p>
                                                                </form>
                                                            </div><!-- #respond -->
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="th-block-detail single-related-product">
                                <h2 class="single-title2">
                                    Related products </h2>
                                <div class="related-product-slider th-slider-wrap">
                                    <div class="elth-swiper-slider swiper-container slider-nav-group-top" data-items="4"
                                        data-items-tablet="3" data-items-mobile="1" data-space="30" data-space-tablet=""
                                        data-space-mobile="" data-column="" data-auto="" data-center="" data-loop=""
                                        data-speed="" data-navigation="yes" data-pagination="">
                                        <div class="swiper-wrapper">
                                            @foreach ($products as $products)


                                            <div class="item-product item-product-default swiper-slide">
                                                <div
                                                    class="item-product item-product-grid item-product-grid-style2 icon">
                                                    <div class="product-thumb">
                                                        <!-- th_woocommerce_thumbnail_loop have $size and $animation -->
                                                        <a href="../espresso-gold/index.html"
                                                            class="product-thumb-link zoom-thumb">
                                                            <img width="270" height="270"
                                                                src="product/{{$products->image}}"
                                                                class="attachment-270x270 size-270x270 wp-post-image"
                                                                alt="" loading="lazy" />

                                                        </a> <a title="Quick View" data-product-id="50"
                                                            href="{{url('product_details',$products->id)}}"
                                                            class="product-quick-view quickview-link "><i
                                                                class="la la-search"></i></a>
                                                        @if ($products->discount_price != null)
                                                        <div class="product-label"><span
                                                                class="sale">{{$products->discount_price}}%</span></div>
                                                        @endif

                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="title14 product-title">{{$products->title}}

                                                        </h3>
                                                        <div class="product-price price simple"><del
                                                                aria-hidden="true"><span
                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products->price}}</bdi></span></del>
                                                            @if ($products->discount_price != null)
                                                            <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{$products->price
                                                                        - $products->discount_price
                                                                        }}</bdi></span></ins>
                                                            @endif
                                                        </div>

                                                        <div class="product-extra-link">
                                                            <form action="{{url('add_cart',$products->id)}}" method="post">
                                                                @csrf
                                                                <div class="detail-qty info-qty border radius6">
                                       
                                                                    <input type="number"  name="quantity" value="1"
                                                                         class="input-text text qty qty-val" size="4" />
                                                                    
                                                                </div>
                                                                <button type="submit" name="add-to-cart" 
                                                                class="single_add_to_cart_button button alt">Add to cart</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- #product-55 -->



                    </div><!-- main-wrap-shop -->
                </div> <!-- close row -->
            </div> <!-- close container -->
        </div> <!-- close content-page -->


        {{-- footer Section Start --}}
        @include('home.sections.footer')
        {{-- footer Section End --}}


    </div>
    @include('home.sections.tail')
    @include('home.sectionsPic.productTail')