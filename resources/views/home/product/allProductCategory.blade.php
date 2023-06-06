@include('home.sectionsPic.productHead')
@include('home.sections.headHome')

<body
    class="archive tax-product_cat term-coffee-cups term-20 theme-coffeehouse woocommerce woocommerce-page woocommerce-no-js theme-ver-1.0 elementor-default elementor-kit-5">
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
                                                        class="step-bread-crumb las la-angle-right"></i><span>Products</span>
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
                    <div class="main-wrap-shop content-wrap content-sidebar-right col-md-9 col-sm-8 col-xs-12">
                        <header class="woocommerce-products-header">

                        </header>
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="title-page clearfix top-filter">
                            <h2>Products</h2>
                            <ul class="sort-pagi-bar list-inline-block">
                                <li>
                                    <div class="sort-by">
                                        <div class="select-box inline-block">
                                            <div class="elth-dropdown-box show-by show-order">
                                                <a href="#" class="dropdown-link">
                                                    <span class="silver set-orderby">Default sorting</span>
                                                </a>
                                                <ul class="elth-dropdown-list list-none">
                                                    <li><a data-orderby="price" class="load-shop-ajax"
                                                            href="index28f0.html?orderby=price">Sort by price: low to
                                                            high</a></li>
                                                    <li><a data-orderby="price-desc" class="load-shop-ajax"
                                                            href="index6a50.html?orderby=price-desc">Sort by price: high
                                                            to low</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <div class="product-grid-view   products-wrap js-content-wrap content-wrap-shop"
                            data-load="{&quot;attr&quot;:{&quot;item_wrap&quot;:&quot;class=\&quot;list-col-item list-3-item\&quot;&quot;,&quot;item_inner&quot;:&quot;class=\&quot;item-product item-product-default grid-style2 list-\&quot;&quot;,&quot;button_icon_pos&quot;:&quot;&quot;,&quot;button_icon&quot;:&quot;&quot;,&quot;button_text&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;,&quot;size_list&quot;:&quot;&quot;,&quot;type_active&quot;:&quot;grid&quot;,&quot;view&quot;:&quot;grid&quot;,&quot;column&quot;:&quot;&quot;,&quot;item_style&quot;:&quot;style2&quot;,&quot;item_style_list&quot;:&quot;&quot;,&quot;item_thumbnail&quot;:&quot;yes&quot;,&quot;item_quickview&quot;:&quot;yes&quot;,&quot;item_label&quot;:&quot;yes&quot;,&quot;item_title&quot;:&quot;yes&quot;,&quot;item_rate&quot;:&quot;yes&quot;,&quot;item_price&quot;:&quot;yes&quot;,&quot;item_button&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;&quot;,&quot;cats&quot;:&quot;coffee-cups&quot;,&quot;tags&quot;:&quot;&quot;,&quot;shop_style&quot;:&quot;&quot;}}">
                            <div class="products row list-product-wrap js-content-main">


                                @foreach ($category->product as $products)
                                <div class="list-col-item list-3-item">
                                    <div class="item-product-wrap">
                                        <div class="item-product item-product-grid item-product-grid-style2 icon">
                                            <div class="product-thumb">
                                                <!-- th_woocommerce_thumbnail_loop have $size and $animation -->
                                                <a href="{{url('product_details',$products->id)}}"
                                                    class="product-thumb-link ">
                                                    <img width="270" height="270" src="product/{{$products->image}}"
                                                        class="attachment-270x270 size-270x270 wp-post-image" alt=""
                                                        loading="lazy" />

                                                </a> <a title="Quick View" data-product-id="30"
                                                    href="{{url('product_details',$products->id)}}"
                                                    class="product-quick-view quickview-link "><i
                                                        class="la la-search"></i></a>
                                                @if ($products->discount_price != null)
                                                <div class="product-label"><span
                                                        class="sale">{{$products->discount_price}}%</span></div>
                                                @endif
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Coffee good morning"
                                                        href="{{url('product_details',$products->id)}}">{{$products->title}}</a>
                                                </h3>
                                                <div class="product-price price simple"><del aria-hidden="true"><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{$products->price}}</bdi></span></del>
                                                    @if ($products->discount_price != null)
                                                    <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{$products->price
                                                                - $products->discount_price }}</bdi></span></ins>
                                                    @endif
                                                </div>

                                                
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
                    </div><!-- main-wrap-shop -->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar sidebar-right">
                            <div id="woocommerce_product_search-1"
                                class="sidebar-widget widget woocommerce widget_product_search">
                                <form role="search" method="get" class="woocommerce-product-search"
                                    action="https://coffeehouse.ththeme.net/">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search
                                        for:</label>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field"
                                        placeholder="Search products&hellip;" value="" name="s" />
                                    <button type="submit" value="Search">Search</button>
                                    <input type="hidden" name="post_type" value="product" />
                                </form>
                            </div>
                            <div id="woocommerce_product_categories-1"
                                class="sidebar-widget widget woocommerce widget_product_categories">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="product-categories">
                                    @foreach ($all_category as $category1)
                                    <li class="cat-item cat-item-18"><a
                                            href="{{url('all_product_category',$category1->id)}}">{{$category1->category_name}}</a></li>
                                    @endforeach

                                </ul>
                            </div>

                            <div id="woocommerce_product_tag_cloud-2"
                                class="sidebar-widget widget woocommerce widget_product_tag_cloud">
                                <h3 class="widget-title">Brand tags</h3>
                                <div class="tagcloud">
                                    @foreach ($brand as $brand)

                                    <a href="{{url('all_product_brand',$brand->id)}}"
                                        class="tag-cloud-link tag-link-24 tag-link-position-1"
                                        style="font-size: 15.368421052632pt;"
                                        aria-label="Beauty (8 products)">{{$brand->brand_name}}</a>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- close row -->
            </div> <!-- close container -->
        </div> <!-- close content-page -->

        {{-- footer Section Start --}}
        @include('home.sections.footer')
        {{-- footer Section End --}}


    </div>
    @include('home.sections.tail')
    @include('home.sectionsPic.productTail')