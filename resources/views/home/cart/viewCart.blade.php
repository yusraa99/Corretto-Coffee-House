@include('home.sectionsPic.cartHead')
@include('home.sections.headHome')

<body
	class="page-template-default page page-id-8 theme-coffeehouse woocommerce-cart woocommerce-page woocommerce-no-js theme-ver-1.0 elementor-default elementor-kit-5">
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
											<h2 class="elementor-heading-title elementor-size-default">Cart Layout</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-acb8c9d elementor-widget elementor-widget-th-breadcrumb"
										data-id="acb8c9d" data-element_type="widget"
										data-widget_type="th-breadcrumb.default">
										<div class="elementor-widget-container">
											<div class="wrap-bread-crumb wrap-bread-crumb-elementor breadcrumb-style2">
												<div class="bread-crumb">
													<span><a href="{{url('/')}}">Home</a></span><i
														class="step-bread-crumb las la-angle-right"></i><span>Cart</span>
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
					<div class="content-wrap col-md-12 col-sm-12 col-xs-12">
						<article id="post-8" class="post-8 page type-page status-publish hentry">
							<div class="entry-content clearfix">
								<div class="title-page clearfix">
									<h1 class="titlelv1 entry-title">Cart </h1>
								</div>
								<div class="detail-content-wrap inner-content clearfix">
									<div class="woocommerce">
										<div class="woocommerce-notices-wrapper"></div>
										<div class="cart-custom">
											<div class="row">
												<div class="col-md-8 col-sm-7 col-xs-12">

													<form class="woocommerce-cart-form" action="cart/" method="post">

														<table
															class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
															cellspacing="0">
															<thead>
																<tr>
																	<th class="product-remove">&nbsp;</th>
																	<th class="product-thumbnail">Product Image</th>
																	<th class="product-name">Product Name</th>
																	<th class="product-price">Price</th>
																	<th class="product-quantity">Quantity</th>
																	<th class="product-subtotal">Total</th>
																	<th class="product-subtotal">Status</th>

																</tr>
															</thead>
															<tbody>
																@if($receipt->status=='notaccept')
																	
																@foreach ($username->order as $order)
																	
																
																	<tr class="woocommerce-cart-form__cart-item cart_item">

																		<td class="product-remove">
																			<a href="{{url('delete_order',$order->id)}}"
																				class="remove" aria-label="Remove this item"
																				data-product_id="54"
																				data-product_sku="No-4006-7">&times;</a>
																		</td>

																		<td class="product-thumbnail">
																			<a href="{{url('product_details',$product->id)}}"><img
																					width="300" height="300"
																					src="product/{{$product->image}}"
																					class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					alt="" loading="lazy"
																					
																					sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</td>

																		<td class="product-name" data-title="Product">
																			{{$product->title}}
																		</td>

																		<td class="product-price" data-title="Price">
																			@if ($product->discount_price != null)
																				<span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price
																								- $product->discount_price }}</bdi>
																				</span>
																			@endif
																		</td>

																		<td class="product-quantity" data-title="Quantity"style="text-align:center">
																			{{$order->quantity}}
																		</td>

																		<td class="product-subtotal" data-title="Total">
																			@if ($product->discount_price != null)
																				<span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">&#36;</span>{{$order->total_price}}</bdi>
																				</span>
																			@endif
																		</td>
																		
																	</tr>
																
																@endforeach
																@else
																@foreach ($username->order as $order)
																	
																
																	<tr class="woocommerce-cart-form__cart-item cart_item">

																		

																		<td class="product-thumbnail">
																			<a href="{{url('product_details',$product->id)}}"><img
																					width="300" height="300"
																					src="product/{{$product->image}}"
																					class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
																					alt="" loading="lazy"
																					
																					sizes="(max-width: 300px) 100vw, 300px" /></a>
																		</td>

																		<td class="product-name" data-title="Product">
																			{{$product->title}}
																		</td>

																		<td class="product-price" data-title="Price">
																			@if ($product->discount_price != null)
																				<span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price
																								- $product->discount_price }}</bdi>
																				</span>
																			@endif
																		</td>

																		<td class="product-quantity" data-title="Quantity"style="text-align:center">
																			{{$order->quantity}}
																		</td>

																		<td class="product-subtotal" data-title="Total">
																			@if ($product->discount_price != null)
																				<span
																					class="woocommerce-Price-amount amount"><bdi><span
																							class="woocommerce-Price-currencySymbol">&#36;</span>{{$order->total_price}}</bdi>
																				</span>
																			@endif
																		</td>
																		<td class="product-quantity" data-title="Quantity"style="text-align:center">
																			{{$receipt->status}}
																		</td>
																	</tr>
																	
																@endforeach
																@endif
															</tbody>
														</table>
													</form>
												</div>
												
												<div class="col-md-4 col-sm-5 col-xs-12">
													<div class="cart-collaterals">
														<div class="cart_totals ">


															<h2>Cart totals</h2>

															<table cellspacing="0"
																class="shop_table shop_table_responsive">

																<?php $total_price=0;?>
																@foreach ($username->order as $order)
																	
																
																<tr class="cart-subtotal">
																	<th>Subtotal</th>
																	<td data-title="Subtotal"><span
																			class="woocommerce-Price-amount amount"><bdi><span
																					class="woocommerce-Price-currencySymbol">&#36;</span>{{$order->total_price}}</bdi>
																					
																		</span>
																	</td>
																</tr>
																<?php $total_price=$total_price+$order->total_price;?>
																@endforeach

																
																<tr class="order-total">
																	<th>Total</th>
																	<td data-title="Total"><strong><span
																				class="woocommerce-Price-amount amount"><bdi><span
																						class="woocommerce-Price-currencySymbol">&#36;</span>
																						{{$total_price}}</bdi></span></strong>
																	</td>
																</tr>


															</table>

															{{-- <div class="wc-proceed-to-checkout">

																<a href="{{url('checkout',$username->id)}}"
																	class="checkout-button button alt wc-forward">
																	Proceed to checkout</a>
															</div> --}}
															<form action="{{url('checkout',$username->id)}}" method="post"
														class="comment-form" >
					
														@csrf
														
														<div class="row">
															
															<div class="col-sm-6">
																<p class="contact-name">
																	<select name="pay" required>
																		@foreach ($data as $data)
																			<option value="{{$data->payment_type}}">{{$data->payment_type}}</option>
																		@endforeach
																	</select>
																</p>
															</div>
															
														</div>
														<div class="row">
															<div class="col-sm-6">
																<p class="contact-name">
																	<select name="shipment" required>
																		@foreach ($shipment as $shipment)
																			<option value="{{$shipment->company_name}}">{{$shipment->company_name}}</option>
																		@endforeach
																	</select>
																</p>
															</div>
															
														</div>
														<p class="form-submit">
															<button name="submit" type="submit" 
																class="elth-bt-default" > Proceed to checkout</button>
																
															
														</p>
													</form> 


														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- .entry-content -->
						</article>
						<!-- #post-## -->

					</div>
				</div>
			</div>
		</div>
		
        {{-- footer Section Start --}}
        @include('home.sections.footer')
        {{-- footer Section End --}}


    </div>
    @include('home.sections.tail')
    @include('home.sectionsPic.cartTail')