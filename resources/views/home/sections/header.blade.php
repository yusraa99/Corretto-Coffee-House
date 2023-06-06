

<div id="header" class="header-page">
    <div data-elementor-type="wp-post" data-elementor-id="187" class="elementor elementor-187"
        data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-8a23d1f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="8a23d1f" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5a48adfb"
                        data-id="5a48adfb" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-72a2b5f elementor-widget__width-auto elementor-widget elementor-widget-th-logo"
                                data-id="72a2b5f" data-element_type="widget" data-widget_type="th-logo.default">
                                <div class="elementor-widget-container">
                                    <div>
                                        <a href="{{url('Home')}}">
                                            <img width="200" height="197"
                                                src="wp-content/uploads/2021/11/logo-21.png"
                                                class="attachment-full size-full" alt="" loading="lazy" /> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-20e026cf"
                        data-id="20e026cf" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5b533f86 elementor-widget elementor-widget-th-menu"
                                data-id="5b533f86" data-element_type="widget"
                                data-widget_type="th-menu.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="th-menu-container th-menu-offcanvas-elements th-navbar-nav-default th_line_arrow menu-style-">
                                        <div class="th-nav-identity-panel toggler-icon">
                                            <span class="th-menu-toggler">
                                                <span></span>
                                            </span>
                                        </div>
                                        <div class="th-menu-inner">
                                            <div class="th-nav-identity-panel panel-inner">
                                                <div class="close-menu">
                                                    <span class="th-menu-toggler menu-open">
                                                        <span></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <ul id="main-menu" class="th-navbar-nav menupos-center">
                                                <li id="nav-menu-item-2102"
                                                    class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1699 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children">
                                                    <a href="{{url('/')}}">Home</a>
                                                </li>
                                                <li id="nav-menu-item-2101"
                                                    class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                                    <a href="{{url('product_all')}}"
                                                        class="menu-link main-menu-link">Products</a>
                                                </li>
                                                
                                                
                                                <li id="nav-menu-item-2101"
                                                    class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                                    <a href="{{url('about')}}"
                                                        class="menu-link main-menu-link">About</a>
                                                </li>
                                                <li id="nav-menu-item-2100"
                                                    class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                                    <a href="{{url('contact')}}"
                                                        class="menu-link main-menu-link">Contact</a>
                                                </li>
                                                
                                                <li id="nav-menu-item-2100"
                                                    class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                                    <a href="{{url('blog')}}"
                                                        class="menu-link main-menu-link">Blog</a>
                                                </li>

                                               
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4d6053a1"
                        data-id="4d6053a1" data-element_type="column">
                        
                        <div class="elementor-widget-wrap elementor-element-populated">
                            
                            @if (Route::has('login'))
                            
                            @auth
                            <ul id="main-menu" class="th-navbar-nav menupos-center">  
                                <li id="nav-menu-item-60"class="main-menu-item  menu-item-even menu-item-depth-0 has-mega-menu menu-item menu-item-type-post_type menu-item-object-page">
                                    <div class="elementor-element elementor-element-1a8ce9d6 elementor-widget__width-auto elementor-widget ">
                                        <a  href="{{url('/logout')}}">
                                            <h4 style="color: white ; text-align:center">LogOut</h4>
                                        </a>
                                                            
                                    </div>
                                </li>
                            </ul>   
                            
                            
                            
                            
                            
                                @else

                                <div class="elementor-element elementor-element-1a8ce9d6 elementor-widget__width-auto elementor-widget elementor-widget-th-mini-cart"
                                    data-id="1a8ce9d6" data-element_type="widget"
                                    data-widget_type="th-mini-cart.default">
                                    <div class="elementor-widget-container">
                                        <div class="elth-mini-cart elth-cart-icon elth-mini-cart-dropdown">
                                            
                                            <a class="mini-cart-link" href="{{ route('register') }}">
                                                <span class="mini-cart-icon">
                                                    <i aria-hidden="true" class="la la-user">
                                                        <h6 style="color: white ; text-align:center">Register</h6>
                                                    </i></span>

                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endauth    
                            @endif
                            <div class="elementor-element elementor-element-21662042 elementor-widget__width-auto elementor-widget elementor-widget-th-search"
                                data-id="21662042" data-element_type="widget"
                                data-widget_type="th-search.default">
                                <div class="elementor-widget-container">
                                    <div class="elth-search-wrap elth-search-icon live-search-yes">
                                        <div class="search-icon-popup">
                                            <i aria-hidden="true" class="la la-search"></i>
                                        </div>
                                        <div class="elth-search-form-wrap">
                                            <i class="la la-times elth-close-search-form"></i>
                                            <form class="elth-search-form "
                                                action="https://coffeehouse.ththeme.net/">
                                                <div class="elth-dropdown-box">
                                                    <span class="dropdown-link current-search-cat">
                                                        All categories <i class="la la-angle-down"></i>
                                                    </span>
                                                    <ul class="list-none elth-dropdown-list">
                                                        <li class="active"><a class="select-cat-search" href="#"
                                                                data-filter="">All categories</a></li>
                                                        <li><a class="select-cat-search" href="#"
                                                                data-filter="bean-varieties">Bean Varieties</a>
                                                        </li>
                                                        <li><a class="select-cat-search" href="#"
                                                                data-filter="coffee-cups">Coffee Cups</a></li>
                                                        <li><a class="select-cat-search" href="#"
                                                                data-filter="espresso-machines">Espresso
                                                                Machines</a></li>
                                                        <li><a class="select-cat-search" href="#"
                                                                data-filter="fresh-coffee">Fresh Coffee</a></li>
                                                        <li><a class="select-cat-search" href="#"
                                                                data-filter="italian-coffee">Italian Coffee</a>
                                                        </li>
                                                        <li><a class="select-cat-search" href="#"
                                                                data-filter="capuchino">Capuchino</a></li>
                                                    </ul>
                                                </div>
                                                <input class="cat-value" type="hidden" name="product_cat"
                                                    value="" />
                                                <input name="s"
                                                    onblur="if (this.value=='') this.value = this.defaultValue"
                                                    onfocus="if (this.value==this.defaultValue) this.value = ''"
                                                    value="Enter key to search" type="text" autocomplete="off">
                                                <input type="hidden" name="post_type" value="product" />
                                                <div class="elth-submit-form">
                                                    <input type="submit" value="">
                                                    <span class="elth-text-bt-search">
                                                        <i aria-hidden="true" class="la la-search"></i> </span>
                                                </div>
                                                <div class="elth-list-product-search">
                                                    <p class="text-center">Please enter key search to display
                                                        results.</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1a8ce9d6 elementor-widget__width-auto elementor-widget elementor-widget-th-mini-cart"
                                data-id="1a8ce9d6" data-element_type="widget"
                                data-widget_type="th-mini-cart.default">
                                <div class="elementor-widget-container">
                                    <div class="elth-mini-cart elth-cart-icon elth-mini-cart-dropdown">
                                        <a class="mini-cart-link" href="{{url('cart')}}">
                                            <span class="mini-cart-icon">
                                                <i aria-hidden="true" class=" las la-shopping-cart"></i> </span>
                                            
                                        </a>
                                        
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
