<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title>{{ $title ?? 'Admin' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('layouts.head')

    {{-- END TEMPLATE WP --}}

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles --}}
</head>

<body
    class="home page-template-default page page-id-63 elementor-default elementor-kit-5 elementor-page elementor-page-63">
    @include('layouts.topbar')
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-194dc767 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="194dc767" data-element_type="section"
        data-settings='{"background_background":"classic","sticky":"top","sticky_on":["tablet","mobile"],"jet_parallax_layout_list":[{"_id":"457054a","jet_parallax_layout_image":{"url":"","id":"","size":""},"jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}],"sticky_offset":0,"sticky_effects_offset":0}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-43738e"
                data-id="43738e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-307f443f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="307f443f" data-element_type="section"
                        data-settings='{"background_background":"classic","jet_parallax_layout_list":[{"_id":"863e823","jet_parallax_layout_image":{"url":"","id":"","size":""},"jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-53b9e259"
                                data-id="53b9e259" data-element_type="column"
                                data-settings='{"background_background":"classic"}'>
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3aa9bc6 elementor-widget elementor-widget-image"
                                        data-id="3aa9bc6" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="333" height="87"
                                                src="wp-content/uploads/2022/04/sch-logo.png"
                                                class="attachment-full size-full wp-image-1216" alt=""
                                                srcset="
                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/sch-logo.png        333w,
                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/sch-logo-300x78.png 300w
                              "
                                                sizes="(max-width: 333px) 100vw, 333px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-062e231"
                                data-id="062e231" data-element_type="column"
                                data-settings='{"background_background":"classic"}'>
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-502e8cc elementor-widget elementor-widget-jet-ajax-search"
                                        data-id="502e8cc" data-element_type="widget"
                                        data-widget_type="jet-ajax-search.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-jet-ajax-search jet-search">
                                                <div class="jet-ajax-search jet-ajax-search--mobile-skin"
                                                    data-settings='{"search_source":["post","prestasi","ekskul","geopark","agenda","buku"],"search_taxonomy":"","include_terms_ids":"","exclude_terms_ids":"","exclude_posts_ids":"","custom_fields_source":"","limit_query":5,"limit_query_tablet":"","limit_query_mobile":"","limit_query_in_result_area":25,"results_order_by":"relevance","results_order":"asc","sentence":"","results_area_width_by":"fields_holder","thumbnail_visible":"yes","thumbnail_size":"thumbnail","thumbnail_placeholder":{"url":"","id":"","size":""},"post_content_source":"excerpt","post_content_custom_field_key":"","post_content_length":25,"show_product_price":"","show_product_rating":"","show_result_new_tab":"","bullet_pagination":"","number_pagination":"","navigation_arrows":"in_header","navigation_arrows_type":"fa fa-angle-left","show_title_related_meta":"","meta_title_related_position":"","title_related_meta":"","show_content_related_meta":"","meta_content_related_position":"","content_related_meta":"","negative_search":"Maaf, tidak ada yang cocok dengan pencarian Anda.","server_error":"Maaf, kami tidak dapat menangani kueri penelusuran Anda sekarang. Silakan coba lagi nanti!"}'>
                                                    <form class="jet-ajax-search__form" method="get"
                                                        action="https://sekolah.flymotion.my.id/" role="search"
                                                        target="">
                                                        <div class="jet-ajax-search__fields-holder">
                                                            <div class="jet-ajax-search__field-wrapper">
                                                                <span
                                                                    class="jet-ajax-search__field-icon jet-ajax-search-icon"><i
                                                                        aria-hidden="true"
                                                                        class="fas fa-search"></i></span>
                                                                <input class="jet-ajax-search__field" type="search"
                                                                    placeholder="Cari Informasi Apa ..." value=""
                                                                    name="s" autocomplete="off" />
                                                                <input type="hidden"
                                                                    value='{"search_source":["post","prestasi","ekskul","geopark","agenda","buku"],"results_order_by":"relevance","results_order":"asc"}'
                                                                    name="jet_ajax_search_settings" />

                                                                <input type="hidden"
                                                                    value="post,prestasi,ekskul,geopark,agenda,buku"
                                                                    name="post_type" />
                                                            </div>
                                                        </div>
                                                    </form>
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
    </section>
    </div>
    </div>

    <main id="content" class="site-main post-63 page type-page status-publish hentry">
        <div class="page-content">
            <div data-elementor-type="wp-page" data-elementor-id="63" class="elementor elementor-63">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-1507cd83 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="1507cd83" data-element_type="section"
                    data-settings='{"jet_parallax_layout_list":[{"_id":"57ce2af","jet_parallax_layout_image":{"url":"","id":"","size":""},"jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}],"background_background":"classic"}'>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a33e70c"
                            data-id="5a33e70c" data-element_type="column">
                            <div class="elementor-widget-wrap"></div>
                        </div>
                    </div>
                </section>
                {{ $slot }}
                {{-- @include('livewire.home.banner')
                @include('livewire.home.layanan_unggulan')
                @include('livewire.home.artikel_dan_berita')
                @include('livewire.home.agenda')
                @include('livewire.home.prestasi')
                @include('livewire.home.staff_dan_guru')
                @include('livewire.home.jurusan')

                @include('livewire.home.eskul')
                @include('livewire.home.pengumuman')
                @include('livewire.home.fasilitas')
                @include('livewire.home.kegiatan')
                @include('livewire.home.video')
                @include('livewire.home.alumni') --}}
                {{-- <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-1bb85a88 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="1bb85a88" data-element_type="section"
                    data-settings='{"background_background":"classic","jet_parallax_layout_list":[{"_id":"998e88b","jet_parallax_layout_image":{"url":"","id":"","size":""},"jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6566ac74"
                            data-id="6566ac74" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-3b4898aa elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="3b4898aa" data-element_type="section"
                                    data-settings='{"jet_parallax_layout_list":[{"_id":"ff9d372","jet_parallax_layout_image":{"url":"","id":"","size":""},"jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5ad6d132"
                                            data-id="5ad6d132" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-9b6abfe elementor-widget elementor-widget-heading"
                                                    data-id="9b6abfe" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Link Terkait
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-2b3ecb90 elementor-widget elementor-widget-jet-carousel"
                                    data-id="2b3ecb90" data-element_type="widget"
                                    data-settings='{"slides_to_show":"5","slides_to_show_tablet":"4","slides_to_show_mobile":"3","slides_to_scroll_mobile":"1","slides_to_scroll":"1"}'
                                    data-widget_type="jet-carousel.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-jet-carousel jet-elements">
                                            <div class="jet-carousel-wrap">
                                                <div class="jet-carousel"
                                                    data-slider_options='{"autoplaySpeed":5000,"autoplay":true,"infinite":true,"centerMode":false,"pauseOnHover":false,"speed":500,"arrows":false,"dots":true,"variableWidth":false,"prevArrow":".jet-carousel__prev-arrow-2b3ecb90","nextArrow":".jet-carousel__next-arrow-2b3ecb90","rtl":false,"fractionNav":false}'
                                                    dir="ltr">
                                                    <div class="elementor-slick-slider">
                                                        <div class="jet-carousel__item">
                                                            <div class="jet-carousel__item-inner">
                                                                <a href="#" class="jet-carousel__item-link"><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2022/03/dis.png"
                                                                        class="jet-carousel__item-img" alt="dis"
                                                                        loading="lazy" /></a>
                                                                <div class="jet-carousel__content"></div>
                                                            </div>
                                                        </div>

                                                        <div class="jet-carousel__item">
                                                            <div class="jet-carousel__item-inner">
                                                                <a href="#" class="jet-carousel__item-link"><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2022/03/link-bwi.png"
                                                                        class="jet-carousel__item-img" alt="link-bwi"
                                                                        loading="lazy" /></a>
                                                                <div class="jet-carousel__content"></div>
                                                            </div>
                                                        </div>

                                                        <div class="jet-carousel__item">
                                                            <div class="jet-carousel__item-inner">
                                                                <a href="#" class="jet-carousel__item-link"><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2022/03/link-bwi.png"
                                                                        class="jet-carousel__item-img" alt="link-bwi"
                                                                        loading="lazy" /></a>
                                                                <div class="jet-carousel__content"></div>
                                                            </div>
                                                        </div>

                                                        <div class="jet-carousel__item">
                                                            <div class="jet-carousel__item-inner">
                                                                <a href="#" class="jet-carousel__item-link"><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2022/03/link-bwi.png"
                                                                        class="jet-carousel__item-img" alt="link-bwi"
                                                                        loading="lazy" /></a>
                                                                <div class="jet-carousel__content"></div>
                                                            </div>
                                                        </div>

                                                        <div class="jet-carousel__item">
                                                            <div class="jet-carousel__item-inner">
                                                                <a href="#" class="jet-carousel__item-link"><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2022/03/link-bwi.png"
                                                                        class="jet-carousel__item-img" alt="link-bwi"
                                                                        loading="lazy" /></a>
                                                                <div class="jet-carousel__content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

            </div>
            <div class="post-tags"></div>
        </div>
    </main>

    <div data-elementor-type="footer" data-elementor-id="227" class="elementor elementor-227 elementor-location-footer">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-4954836a elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="4954836a" data-element_type="section"
                data-settings='{"jet_parallax_layout_list":[],"background_background":"classic"}'>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3c252e7"
                        data-id="3c252e7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f5c1b9 elementor-widget elementor-widget-image"
                                data-id="f5c1b9" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="index.html">
                                        <img width="333" height="87"
                                            src="wp-content/uploads/2022/04/sch-logo.png"
                                            class="attachment-full size-full wp-image-1216" alt=""
                                            srcset="
                          https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/sch-logo.png        333w,
                          https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/sch-logo-300x78.png 300w
                        "
                                            sizes="(max-width: 333px) 100vw, 333px" />
                                    </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6d7401b elementor-widget elementor-widget-text-editor"
                                data-id="6d7401b" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.21.0 - 26-05-2024 */
                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                            background-color: #69727d;
                                            color: #fff;
                                        }

                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                            color: #69727d;
                                            border: 3px solid;
                                            background-color: transparent;
                                        }

                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                            margin-top: 8px;
                                        }

                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                            width: 1em;
                                            height: 1em;
                                        }

                                        .elementor-widget-text-editor .elementor-drop-cap {
                                            float: left;
                                            text-align: center;
                                            line-height: 1;
                                            font-size: 50px;
                                        }

                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                            display: inline-block;
                                        }
                                    </style>
                                    Nikmati Cara Mudah dan Menyenangkan Ketika Membaca Buku,
                                    Update Informasi Sekolah Hanya Dalam Genggaman
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-288c96e"
                        data-id="288c96e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1335b0c3 elementor-widget elementor-widget-heading"
                                data-id="1335b0c3" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Menu Lainnya
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3e439c52 jet-nav-align-space-between elementor-widget__width-auto elementor-widget elementor-widget-jet-nav-menu"
                                data-id="3e439c52" data-element_type="widget"
                                data-widget_type="jet-nav-menu.default">
                                <div class="elementor-widget-container">
                                    <nav class="jet-nav-wrap">
                                        <div class="menu-menu-footer-container">
                                            <div class="jet-nav jet-nav--vertical jet-nav--vertical-sub-right-side">
                                                <div
                                                    class="menu-item menu-item-type-post_type menu-item-object-page jet-nav__item-558 jet-nav__item">
                                                    <a href="agenda/index.html"
                                                        class="menu-item-link menu-item-link-depth-0 menu-item-link-top"><span
                                                            class="jet-nav-link-text">Agenda</span></a>
                                                </div>
                                                <div
                                                    class="menu-item menu-item-type-post_type menu-item-object-page jet-nav__item-559 jet-nav__item">
                                                    <a href="artikel/index.html"
                                                        class="menu-item-link menu-item-link-depth-0 menu-item-link-top"><span
                                                            class="jet-nav-link-text">Artikel</span></a>
                                                </div>
                                                <div
                                                    class="menu-item menu-item-type-post_type menu-item-object-page jet-nav__item-560 jet-nav__item">
                                                    <a href="ekstrakurikuler/index.html"
                                                        class="menu-item-link menu-item-link-depth-0 menu-item-link-top"><span
                                                            class="jet-nav-link-text">Ekstrakurikuler</span></a>
                                                </div>
                                                <div
                                                    class="menu-item menu-item-type-post_type menu-item-object-page jet-nav__item-561 jet-nav__item">
                                                    <a href="pengumuman/index.html"
                                                        class="menu-item-link menu-item-link-depth-0 menu-item-link-top"><span
                                                            class="jet-nav-link-text">Pengumuman</span></a>
                                                </div>
                                                <div
                                                    class="menu-item menu-item-type-post_type menu-item-object-page jet-nav__item-562 jet-nav__item">
                                                    <a href="prestasi/index.html"
                                                        class="menu-item-link menu-item-link-depth-0 menu-item-link-top"><span
                                                            class="jet-nav-link-text">Prestasi</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5fda5bb"
                        data-id="5fda5bb" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-154ef1af elementor-widget elementor-widget-heading"
                                data-id="154ef1af" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Temukan Kami
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5bf79073 e-grid-align-left elementor-widget__width-auto elementor-grid-mobile-0 e-grid-align-mobile-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                data-id="5bf79073" data-element_type="widget"
                                data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-edf0712"
                                                href="https://facebook.com/amaryourbae" target="_blank">
                                                <span class="elementor-screen-only">Facebook</span>
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-57b15eb"
                                                href="https://twitter.com/amaryourbae" target="_blank">
                                                <span class="elementor-screen-only">Twitter</span>
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-e9d5016"
                                                href="https://instagram.com/amaryourbae" target="_blank">
                                                <span class="elementor-screen-only">Instagram</span>
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-6c4a13a"
                                                href="https://youtube.com/" target="_blank">
                                                <span class="elementor-screen-only">Youtube</span>
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-whatsapp elementor-repeater-item-cbc1604"
                                                href="https://wa.me/6282233000884" target="_blank">
                                                <span class="elementor-screen-only">Whatsapp</span>
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3ec1cbfe elementor-widget elementor-widget-heading"
                                data-id="3ec1cbfe" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Downloadd App
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3c151e31 elementor-widget__width-auto elementor-widget elementor-widget-image"
                                data-id="3c151e31" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="#">
                                        <img width="320" height="95"
                                            src="wp-content/uploads/2022/03/play-store.png"
                                            class="attachment-full size-full wp-image-118" alt=""
                                            srcset="
                          https://sekolah.flymotion.my.id/wp-content/uploads/2022/03/play-store.png        320w,
                          https://sekolah.flymotion.my.id/wp-content/uploads/2022/03/play-store-300x89.png 300w
                        "
                                            sizes="(max-width: 320px) 100vw, 320px" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            @include('layouts.menu_mobile')
        </div>
    </div>
    @include('layouts.menu_popup')

    @include('layouts.footer')
</body>

</html>
