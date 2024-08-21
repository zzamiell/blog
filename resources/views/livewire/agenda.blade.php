<div data-elementor-type="wp-page" data-elementor-id="282" class="elementor elementor-282">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-27e8a668 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="27e8a668" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-233851f8"
                data-id="233851f8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5b433e51 elementor-widget elementor-widget-heading"
                        data-id="5b433e51" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.21.0 - 26-05-2024 */
                                .elementor-heading-title {
                                    padding: 0;
                                    margin: 0;
                                    line-height: 1
                                }

                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                    color: inherit;
                                    font-size: inherit;
                                    line-height: inherit
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                    font-size: 15px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                    font-size: 19px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                    font-size: 29px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                    font-size: 39px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                    font-size: 59px
                                }
                            </style>
                            <h2 class="elementor-heading-title elementor-size-default">Agenda</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2e9bb7db elementor-widget elementor-widget-heading"
                        data-id="2e9bb7db" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Agenda terbaru dari Sekolah
                                {{ $sekolah->nama_sekolah }}</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-18161e4a elementor-widget elementor-widget-jet-listing-grid"
                        data-id="18161e4a" data-element_type="widget" id="agenda"
                        data-settings="{&quot;columns&quot;:&quot;3&quot;,&quot;columns_tablet&quot;:&quot;3&quot;,&quot;columns_mobile&quot;:&quot;1&quot;}"
                        data-widget_type="jet-listing-grid.default">
                        <div class="elementor-widget-container">
                            <div class="jet-listing-grid jet-listing">
                                <div class="jet-listing-grid__items grid-col-desk-3 grid-col-tablet-3 grid-col-mobile-1 jet-listing-grid--11"
                                    data-nav="{&quot;enabled&quot;:false,&quot;type&quot;:null,&quot;more_el&quot;:null,&quot;query&quot;:[],&quot;widget_settings&quot;:{&quot;lisitng_id&quot;:11,&quot;posts_num&quot;:12,&quot;columns&quot;:3,&quot;columns_tablet&quot;:3,&quot;columns_mobile&quot;:1,&quot;is_archive_template&quot;:&quot;&quot;,&quot;post_status&quot;:[&quot;publish&quot;],&quot;use_random_posts_num&quot;:&quot;&quot;,&quot;max_posts_num&quot;:9,&quot;not_found_message&quot;:&quot;Tidak ada agenda&quot;,&quot;is_masonry&quot;:false,&quot;equal_columns_height&quot;:&quot;&quot;,&quot;use_load_more&quot;:&quot;&quot;,&quot;load_more_id&quot;:&quot;&quot;,&quot;load_more_type&quot;:&quot;click&quot;,&quot;use_custom_post_types&quot;:&quot;&quot;,&quot;custom_post_types&quot;:[],&quot;hide_widget_if&quot;:&quot;&quot;,&quot;carousel_enabled&quot;:&quot;&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;arrows&quot;:&quot;true&quot;,&quot;arrow_icon&quot;:&quot;fa fa-angle-left&quot;,&quot;dots&quot;:&quot;&quot;,&quot;autoplay&quot;:&quot;true&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;true&quot;,&quot;center_mode&quot;:&quot;&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500,&quot;inject_alternative_items&quot;:&quot;&quot;,&quot;injection_items&quot;:[],&quot;scroll_slider_enabled&quot;:&quot;&quot;,&quot;scroll_slider_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;custom_query&quot;:false,&quot;custom_query_id&quot;:&quot;&quot;,&quot;_element_id&quot;:&quot;agenda&quot;}}"
                                    data-page="1" data-pages="1" data-listing-source="posts">

                                    @foreach ($feed as $item)
                                        <div class="jet-listing-grid__item jet-listing-dynamic-post-759 mb-5"
                                            data-post-id="759">
                                            <style type="text/css">
                                                .jet-listing-dynamic-post-759 .elementor-element.elementor-element-69775b8 .jet-listing-dynamic-field.display-multiline,
                                                .jet-listing-dynamic-post-759 .elementor-element.elementor-element-69775b8 .jet-listing-dynamic-field.display-inline .jet-listing-dynamic-field__inline-wrap {
                                                    background-color: #ffa800;
                                                }

                                                .jet-listing-dynamic-post-759 .elementor-element.elementor-element-098ebdb .elementor-icon-list-icon i {
                                                    color: #3f95a1;
                                                }

                                                .jet-listing-dynamic-post-759 .elementor-element.elementor-element-098ebdb .elementor-icon-list-icon svg {
                                                    fill: #3f95a1;
                                                }

                                                .jet-listing-dynamic-post-759 .elementor-element.elementor-element-8bedf5b .jet-countdown-timer__item-value {
                                                    color: #2f9edd;
                                                }
                                            </style>
                                            <div data-elementor-type="jet-listing-items" data-elementor-id="11"
                                                class="elementor elementor-11">
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-7ffd87e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="7ffd87e" data-element_type="section"
                                                    data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;646e780&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}],&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d87fd24"
                                                            data-id="d87fd24" data-element_type="column"
                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-69775b8 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-jet-listing-dynamic-field"
                                                                    data-id="69775b8" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="jet-listing-dynamic-field.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jet-listing jet-listing-dynamic-field display-inline">
                                                                            <div
                                                                                class="jet-listing-dynamic-field__inline-wrap">
                                                                                <i class="jet-listing-dynamic-field__icon far fa-calendar-alt"
                                                                                    aria-hidden="true"></i>
                                                                                <div
                                                                                    class="jet-listing-dynamic-field__content">
                                                                                    {{ $item->pelaksanaan }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-8e06ee9 elementor-widget elementor-widget-image"
                                                                    data-id="8e06ee9" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <a
                                                                            href="{{ route('agendaDetailComponent', $item->slug) }}">
                                                                            <img width="640" height="426"
                                                                                src="{{ asset($item->thumbnail) }}"
                                                                                class="attachment-full size-full wp-image-1224"
                                                                                alt="{{ $item->judul }}"
                                                                                sizes="(max-width: 640px) 100vw, 640px">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-5eccef9 elementor-widget elementor-widget-jet-listing-dynamic-field"
                                                                    data-id="5eccef9" data-element_type="widget"
                                                                    data-widget_type="jet-listing-dynamic-field.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="jet-listing jet-listing-dynamic-field display-inline">
                                                                            <div
                                                                                class="jet-listing-dynamic-field__inline-wrap">
                                                                                <div
                                                                                    class="jet-listing-dynamic-field__content">
                                                                                    {{ $item->judul }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-098ebdb elementor-icon-list--layout-inline elementor-align-left elementor-tablet-align-left elementor-mobile-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                    data-id="098ebdb" data-element_type="widget"
                                                                    data-widget_type="icon-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <ul
                                                                            class="elementor-icon-list-items elementor-inline-items">
                                                                            <li
                                                                                class="elementor-icon-list-item elementor-inline-item">
                                                                                <span class="elementor-icon-list-icon">
                                                                                    <i aria-hidden="true"
                                                                                        class="fas fa-map-pin"></i>
                                                                                </span>
                                                                                <span
                                                                                    class="elementor-icon-list-text">{{ $item->lokasi }}</span>
                                                                            </li>
                                                                            <li
                                                                                class="elementor-icon-list-item elementor-inline-item">
                                                                                <span class="elementor-icon-list-icon">
                                                                                    <i aria-hidden="true"
                                                                                        class="far fa-clock"></i>
                                                                                </span>
                                                                                <span
                                                                                    class="elementor-icon-list-text">{{ $item->start }}
                                                                                    - {{ $item->end }}</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-61871592 elementor-widget elementor-widget-jet-smart-filters-pagination"
                        data-id="61871592" data-element_type="widget"
                        data-widget_type="jet-smart-filters-pagination.default">
                        <div class="elementor-widget-container">
                            <div class="jet-smart-filters-pagination" data-apply-provider="jet-engine"
                                data-content-provider="jet-engine" data-query-id="agenda"
                                data-controls="{&quot;nav&quot;:true,&quot;prev&quot;:&quot;Sebelum&quot;,&quot;next&quot;:&quot;Selanjutnya&quot;,&quot;pages_mid_size&quot;:0,&quot;pages_end_size&quot;:0,&quot;provider_top_offset&quot;:0}"
                                data-apply-type="ajax"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
