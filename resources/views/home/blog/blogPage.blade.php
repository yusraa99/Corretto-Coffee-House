@include('home.sectionsPic.blogHead')
@include('home.sections.headHome')

<body class="blog theme-coffeehouse woocommerce-no-js theme-ver-1.0 elementor-default elementor-kit-5">
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
											<h2 class="elementor-heading-title elementor-size-default">Blog Layout</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-acb8c9d elementor-widget elementor-widget-th-breadcrumb"
										data-id="acb8c9d" data-element_type="widget"
										data-widget_type="th-breadcrumb.default">
										<div class="elementor-widget-container">
											<div class="wrap-bread-crumb wrap-bread-crumb-elementor breadcrumb-style2">
												<div class="bread-crumb">
													<span><a href="{{url('/')}}">Home</a></span><i
														class="step-bread-crumb las la-angle-right"></i><span>Blog</span>
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
		<div id="main-content" class="main-page-default main-page-blog">
			<div class="container">
				<div class="row">
					<div class="content-wrap content-sidebar-right col-md-9 col-sm-8 col-xs-12">
						<div class="title-page clearfix top-filter">
							<h2>Blog</h2>
							
						</div>

						<div class="js-content-wrap elth-posts-wrap blog-list-view wrap-list-style2" data-column="3">
							<div class="js-content-main list-post-wrap row">

                                @foreach ($post as $post)
                                    
                                
                                    <div class="col-md-12 col-sm-12 col-xs-12 item-post-wrap">
                                        <div class="item-post item-post-list item-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="post-thumb banner-advs zoom-image overlay-image">
                                                        
                                                            <img width="570" height="400"
                                                                src="post/{{$post->image}}"
                                                                class="attachment-570x400 size-570x400 wp-post-image" alt=""
                                                                loading="lazy" /> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="post-info">
                                                        <ul class="list-inline-block post-meta-data">
                                                            <li class="meta-item"><i class="la la-user"
                                                                    aria-hidden="true"></i>{{$post->auther}}</li>
                                                            <li class="split">|</li>
                                                            <li class="meta-item"><i class="la la-calendar"></i><span
                                                                    class="silver">{{$post->created_at->day}}{{-$post->created_at->month}}{{-$post->created_at->year}}</span></li>
                                                            <li class="split">|</li>
                                                            <li class="meta-item"><i aria-hidden="true"
                                                                    class="la la-comment"></i>
                                                                <a
                                                                    href="{{url('post_details',$post->id)}}"> {{count($post->comments)}} 
                                                                    Comments </a>
                                                            </li>
                                                        </ul>
                                                        <h3 class="titlelv2 post-title"><a
                                                                href="{{url('post_details',$post->id)}}">{{$post->title}}</h3>
                                                        <p class="desc">{{$post->description}}</p>
                                                        <div class="readmore-wrap">
                                                            <a href="{{url('post_details',$post->id)}}"
                                                                class="elth-bt-default">
                                                                Read more

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

								@endforeach
								
							</div>

							<div class="pagi-nav ">
								<span aria-current="page" class="page-numbers current">1</span>
								<a class="page-numbers" href="page/2/index.html">2</a>
								<a class="next page-numbers" href="page/2/index.html"><i class="la la-angle-right"
										aria-hidden="true"></i></a>
							</div>


						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="sidebar sidebar-right">
							<div id="search-2" class="sidebar-widget widget widget_search">
								<form role="search" class="wg-search-form" method="get"
									action="https://coffeehouse.ththeme.net/">
									<input type="text" value="" name="s" placeholder="Search..">
									<input type="submit" value="Search">
								</form>
							</div>
							<div id="block-8" class="sidebar-widget widget widget_block">
								<h3 class="block-widget-title">Brands</h3>
							</div>
							<div id="block-9" class="sidebar-widget widget widget_block widget_tag_cloud">
								<p class="wp-block-tag-cloud">
                                    @foreach ($brand as $brand)
                                        <a href="{{url('all_post_brand',$brand->id)}}"
										class="tag-cloud-link tag-link-54 tag-link-position-1" style="font-size: 8pt;"
										aria-label="Culinary (1 item)">{{$brand->brand_name}}</a>
                                    @endforeach
								</p>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
        {{-- footer Section Start --}}
        @include('home.sections.footer')
        {{-- footer Section End --}}


    </div>
    @include('home.sections.tail')
    @include('home.sectionsPic.blogTail')