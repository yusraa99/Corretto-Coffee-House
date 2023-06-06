<section
					class="elementor-section elementor-top-section elementor-element elementor-element-b8cc04f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="b8cc04f" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-45093fb"
							data-id="45093fb" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6d8c892 elementor-widget__width-auto elementor-widget elementor-widget-heading"
									data-id="6d8c892" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-default">Best Seller</h2>
									</div>
								</div>
								<div class="elementor-element elementor-element-09b3eeb elementor-widget__width-auto elementor-widget elementor-widget-heading"
									data-id="09b3eeb" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-default">Coffee</h2>
									</div>
								</div>
								<div class="elementor-element elementor-element-3af28a3 elementor-widget elementor-widget-text-editor"
									data-id="3af28a3" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<p>See More Of Our Products	!! <a href="{{url('product_all')}}">>></a></p>
										
									</div>
								</div>
								<div class="elementor-element elementor-element-e0cd42e elementor-widget elementor-widget-th-products"
									data-id="e0cd42e" data-element_type="widget" data-widget_type="th-products.default">
									
								
									<div class="th-block-detail single-related-product">
										
										<div class="related-product-slider th-slider-wrap">
											<div class="elth-swiper-slider swiper-container slider-nav-group-top" data-items="4"
												data-items-tablet="3" data-items-mobile="1" data-space="30" data-space-tablet=""
												data-space-mobile="" data-column="" data-auto="" data-center="" data-loop=""
												data-speed="" data-navigation="yes" data-pagination="">
												<div class="swiper-wrapper">
													
													@foreach ($product as $products)
														
													
														<div class="item-product item-product-default swiper-slide">
															<div
																class="item-product item-product-grid item-product-grid-style2 icon">
																<div class="product-thumb">
																	<!-- th_woocommerce_thumbnail_loop have $size and $animation -->
																	<a href="{{url('product_details',$products->id)}}"
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
																				<div class="product-label"><span class="sale">{{$products->discount_price}}%</span></div>
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
																						class="woocommerce-Price-currencySymbol">&#36;</span>{{$products->price - $products->discount_price  }}</bdi></span></ins>
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
		
								
								
								
								</div>


								
								
							</div>
						</div>
				</section>