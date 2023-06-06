<section
    class="elementor-section elementor-top-section elementor-element elementor-element-3b91f2b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="3b91f2b" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2aabaae"
            data-id="2aabaae" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-ff9865d elementor-widget__width-auto elementor-widget elementor-widget-heading"
                    data-id="ff9865d" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Our</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-2f665bf elementor-widget__width-auto elementor-widget elementor-widget-heading"
                    data-id="2f665bf" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Brands</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-fae0725 elementor-widget elementor-widget-text-editor"
                    data-id="fae0725" data-element_type="widget" data-widget_type="text-editor.default">
                </div>
            </div>
        </div>
    </div>
</section>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-adbb458 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="adbb458" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eaac6ed"
            data-id="eaac6ed" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-1b2708b elementor-widget elementor-widget-image-carousel"
                    data-id="1b2708b" data-element_type="widget"
                    data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;slides_to_show_tablet_extra&quot;:&quot;4&quot;,&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                    data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                            <div class="elementor-image-carousel swiper-wrapper">
                                <div class="swiper-slide">
                                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="1b2708b"
                                        data-elementor-lightbox-title="c13" href="#">
                                        <figure class="swiper-slide-inner">

                                            @foreach ($brand as $brand)
                                                <img class="swiper-slide-image" style="max-width:180px"
                                                src="brand/{{$brand->brand_image}}" alt="c13" />
                                            @endforeach
                                            
                                                
                                        </figure>
                                        
                                    </a>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>