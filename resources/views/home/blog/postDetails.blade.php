@include('home.sectionsPic.postHead')
@include('home.sections.headHome')

<body
	class="post-template-default single single-post postid-82 single-format-standard theme-coffeehouse woocommerce-no-js theme-ver-1.0 elementor-default elementor-kit-5">
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
											<h2 class="elementor-heading-title elementor-size-default">Posts Details
												Layout</h2>
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
															href="{{url('blog')}}">Blog</a></span><i
														class="step-bread-crumb las la-angle-right"></i><span>{{$post->title}}</span>
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
		<div id="main-content" class="main-page-default">
			<div class="container">
				<div class="row">
					<div class="content-wrap content-sidebar-right col-md-9 col-sm-8 col-xs-12">
						<div class="content-single-blog ">
							<div class="single-post-thumb banner-advs">
								<img width="1170" height="500"
                                src="post/{{$post->image}}"
									class="attachment-1170x500 size-1170x500 wp-post-image" alt="" loading="lazy" />
							</div>
							<ul class="list-inline-block post-meta-data">
								<li class="meta-item"><i class="la la-user" aria-hidden="true"></i>{{$post->auther}}</li>
								<li class="split">|</li>
								<li class="meta-item"><i class="la la-calendar"></i><span class="silver">{{$post->created_at->day}}{{-$post->created_at->month}}{{-$post->created_at->year}}</span></li>
								<li class="split">|</li>
								<li class="meta-item"><i aria-hidden="true" class="la la-comment"></i>
									<a href="index.html#comments"> {{count($post->comments)}} 
										Comments </a>
								</li>
							</ul>
							<div class="content-post-default">
								<h2 class="titlelv1 title-post-single font-bold">
									{{$post->title}}</h2>
								<div class="detail-content-wrap clearfix">
									
									<blockquote class="single-quote">
										<p>{{$post->description}}</p>
									</blockquote>
									
								</div>
							</div>
						</div>
						
						
						
						<div id="comments" class="comments-area comments blog-comment-detail">


							<h2 class="titlelv2 font-bold">
                               {{count($post->comments)}} Comments </h2>
							<div class="comments">
								<ol class="comment-list list-none">
									
                                    @foreach ($post->comments as $comment)
                                    <li
                                            class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                            <div id="comment-3" class="item-comment table-custom">
                                                <div class="comment-thumb vcard">
                                                    <img style="max-width: 50px;
                                                    max-height: 50px;"
												        src="user/{{$comment->user->profile_photo_path}}"/> 
                                                </div>
                                                <div class="comment-info">
                                                   
                                                    <cite class="fn"><a href='index.html' rel='external nofollow ugc'
                                                            class='url'>{{$comment->user->name}}</a></cite> <span class="dash">–</span>
                                                    <span class="comment-date">{{$comment->created_at}}</span>
                                                    <div class="comment-text desc clearfix">
                                                        <p>{{$comment->body}}</p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </li><!-- #comment-## -->
									@endforeach
								</ol>
							</div>




						</div><!-- #comments -->

						<div class="leave-comments contact-form reply-comment">
							<div  class="comment-respond">
								<h3  class="comment-reply-title">Leave Comments <small><a rel="nofollow"
											
											style="display:none;">Cancel reply</a></small></h3>
								<form action="{{url('post_details',$post->id)}}" method="post"
									class="comment-form" >

                                    @csrf
									
									<div class="row">
										<div class="col-sm-6">
											<p class="contact-name">
												<input class="border" name="author" type="text" value=""
													placeholder="Name*" />
											</p>
										</div>
										<div class="col-sm-6">
											<p class="contact-email">
												<input class="border"  name="email" type="text" value=""
													placeholder="Email*" />
											</p>
										</div>
									</div>
									<p class="contact-message">
										<textarea class="border" rows="5" name="comment"
											aria-required="true" placeholder="Your comment*"></textarea>
									</p>
									<p class="form-submit">
                                        <button name="submit" type="submit" 
											class="elth-bt-default" > Post A Comment</button>
                                            
										
									</p>
								</form>
							</div><!-- #respond -->
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
    @include('home.sectionsPic.postTail')