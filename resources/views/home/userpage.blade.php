@include('home.sections.headHome')
<body
	class="home page-template page-template-elementor_header_footer page page-id-1699 theme-coffeehouse woocommerce-no-js theme-ver-1.0 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-1699">
	<div class="wrap">
		
        {{-- heder Section Start --}}
        @include('home.sections.header')
        {{-- heder Section End --}}

		<div data-elementor-type="wp-page" data-elementor-id="1699" class="elementor elementor-1699"
			data-elementor-settings="[]">
			<div class="elementor-section-wrap">

                {{-- slider Section Start --}}
                @include('home.sections.slider')
                {{-- slider Section End --}}

                {{-- services Section Start --}}
                @include('home.sections.services')
                {{-- services Section End --}}

                {{-- brand Section Start --}}
                @include('home.sections.brand')
                {{-- brand Section End --}}
				
                {{-- best seller Section Start --}}
                @include('home.sections.bestseller')
                {{-- best seller Section End --}}
				
                {{-- talk Section Start --}}
                @include('home.sections.talk')
                {{-- talk Section End --}}
                 
				{{-- blog Section Start --}}
                @include('home.sections.blog')
                {{-- blog Section End --}}
				


			</div>
		</div>
        {{-- footer Section Start --}}
        @include('home.sections.footer')
        {{-- footer Section End --}}
        

	</div>
{{-- tail Section Start --}}
@include('home.sections.tail')
{{-- tail Section End --}}
