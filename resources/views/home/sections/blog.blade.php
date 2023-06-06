<section
					class="elementor-section elementor-top-section elementor-element elementor-element-8b2513b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="8b2513b" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fe2c368"
							data-id="fe2c368" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-240eb0a elementor-widget__width-auto elementor-widget elementor-widget-heading"
									data-id="240eb0a" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-default">Our</h2>
									</div>
								</div>
								<div class="elementor-element elementor-element-98aa308 elementor-widget__width-auto elementor-widget elementor-widget-heading"
									data-id="98aa308" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-default">Blog</h2>
									</div>
								</div>
								<div class="elementor-element elementor-element-ba1bb80 elementor-widget elementor-widget-text-editor"
									data-id="ba1bb80" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<p>See More Of Our Posts	!! <a href="{{url('blog')}}">>></a></p>
									</div>
								</div>
								<div class="elementor-element elementor-element-2fc1c16 elementor-widget elementor-widget-th-posts"
									data-id="2fc1c16" data-element_type="widget" data-widget_type="th-posts.default">
									<div class="elementor-widget-container">
										<div class="elth-posts-wrap js-content-wrap wrap-box blog-list-view "
											data-column="3" data-column-tablet="" data-column-mobile="">
											<div class="js-content-main list-post-wrap row wrap-list-style3">

												@foreach ($post as $post)
													
												
													<div class="col-md-12 col-sm-12 col-xs-12 item-post-wrap">
														<div class="item-post item-post-list item-style2 item-style3">
															<div class="row">
																<div class="col-md-6 col-sm-12 col-xs-12">
																	<div
																		class="post-thumb banner-advs zoom-image overlay-image">
																		<a href="{{url('post_details',$post->id)}}" class="adv-thumb-link">
																			<img width="760" height="500"
																				src="post/{{$post->image}}"
																				class="attachment-760x500 size-760x500 wp-post-image"
																				alt="" loading="lazy" /> </a>
																	</div>
																</div>
																<div class="col-md-6 col-sm-12 col-xs-12">
																	<div class="post-info">
																		<ul class="list-inline-block post-meta-data">
																			<li class="meta-item"><i class="la la-user"
																					aria-hidden="true"></i><a
																					href="blog.html">{{$post->auther}}</a></li>
																			<li class="split">|</li>
																			<li class="meta-item"><i
																					class="la la-calendar"></i><span
																					class="silver">{{$post->created_at->day}}{{-$post->created_at->month}}{{-$post->created_at->year}}</span></li>

																			</li>
																		</ul>
																		<h3 class="titlelv2 post-title"><a
																				href="{{url('post_details',$post->id)}}"></a>{{$post->title}}</h3>
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>