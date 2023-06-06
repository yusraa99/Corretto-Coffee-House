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
									<h1 class="titlelv1 entry-title">Cart - Order Confirm</h1>
								</div>
								<div class="detail-content-wrap inner-content clearfix">
									<div class="woocommerce">
										<div class="woocommerce-notices-wrapper"></div>
										<div class="cart-custom">
											<div class="row">
												
												<div class="col-md-4 col-sm-5 col-xs-12">
													<div class="cart-collaterals">
														<div class="cart_totals ">

															@if($receipt->status == null)
																<h2>Thank You</h2>

																<p>Please wait to confirm your Order</p>
															@elseif ($receipt->status == 'accept')
																<p>Your Order is Confirm.. </p>
															@elseif ($receipt->status == 'notaccept')
																<p>Sorry !! Your Order is not Confirm.. </p>
															@endif
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