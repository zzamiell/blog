<section
    class="elementor-section elementor-top-section elementor-element elementor-element-d5bdc8c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="d5bdc8c" data-element_type="section"
    data-settings='{"background_background":"classic","jet_parallax_layout_list":[{"_id":"998e88b","jet_parallax_layout_image":{"url":"","id":"","size":""},"jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-da650c1"
            data-id="da650c1" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-41a7089 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="41a7089" data-element_type="section"
                    data-settings='{"jet_parallax_layout_list":[{"_id":"ff9d372","jet_parallax_layout_image":{"url":"","id":"","size":""},"jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-974b241"
                            data-id="974b241" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c064302 elementor-widget elementor-widget-heading"
                                    data-id="c064302" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Galeri Kegiatan
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-112c757 elementor-widget elementor-widget-heading"
                                    data-id="112c757" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Galeri Kegiatan Sekolah Crocoblock
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e0b75d0"
                            data-id="e0b75d0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-d12f432 elementor-view-default elementor-widget elementor-widget-icon"
                                    data-id="d12f432" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <a class="elementor-icon" href="{{ route('kegiatanComponent') }}">
                                                <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="elementor-element elementor-element-158805c elementor-widget elementor-widget-jet-listing-grid"
                    data-id="158805c" data-element_type="widget"
                    data-settings='{"columns":"3","columns_tablet":"3","columns_mobile":"2"}'
                    data-widget_type="jet-listing-grid.default">
                    <div class="elementor-widget-container">
                        <div class="jet-listing-grid jet-listing">
                            <div class="jet-listing-grid__items grid-col-desk-3 grid-col-tablet-3 grid-col-mobile-2 jet-listing-grid--942"
                                data-nav='{"enabled":false,"type":null,"more_el":null,"query":[],"widget_settings":{"lisitng_id":942,"posts_num":6,"columns":3,"columns_tablet":3,"columns_mobile":2,"is_archive_template":"","post_status":["publish"],"use_random_posts_num":"","max_posts_num":9,"not_found_message":"Tidak ada fasilitas","is_masonry":false,"equal_columns_height":"","use_load_more":"","load_more_id":"","load_more_type":"click","use_custom_post_types":"","custom_post_types":[],"hide_widget_if":"","carousel_enabled":"","slides_to_scroll":"1","arrows":"true","arrow_icon":"fa fa-angle-left","dots":"","autoplay":"true","autoplay_speed":5000,"infinite":"true","center_mode":"","effect":"slide","speed":500,"inject_alternative_items":"","injection_items":[],"scroll_slider_enabled":"","scroll_slider_on":["desktop","tablet","mobile"],"custom_query":false,"custom_query_id":"","_element_id":""}}'
                                data-page="1" data-pages="1" data-listing-source="posts">
                                @foreach ($kegiatan as $item)
                                    <div class="jet-listing-grid__item jet-listing-dynamic-post-979" data-post-id="979">
                                        <style type="text/css">
                                            .jet-listing-dynamic-post-979 .elementor-element.elementor-element-6f7f173 .elementor-button {
                                                background-color: #03626f;
                                            }
                                        </style>
                                        <div data-elementor-type="jet-listing-items" data-elementor-id="942"
                                            class="elementor elementor-942">
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-2a2273d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="2a2273d" data-element_type="section"
                                                data-settings='{"jet_parallax_layout_list":[{"jet_parallax_layout_image":{"url":"","id":"","size":""},"_id":"fb4688d","jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'>
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8f7d28"
                                                        data-id="e8f7d28" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-6f7f173 elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-auto elementor-absolute elementor-widget elementor-widget-button"
                                                                data-id="6f7f173" data-element_type="widget"
                                                                data-settings='{"_position":"absolute"}'
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                            href="galeri/robotic-roboto-uraaaa/index.html">
                                                                            <span
                                                                                class="elementor-button-content-wrapper">
                                                                                <span
                                                                                    class="elementor-button-icon elementor-align-icon-left">
                                                                                    <i aria-hidden="true"
                                                                                        class="fas fa-film"></i>
                                                                                </span>
                                                                                <span
                                                                                    class="elementor-button-text">Galeri</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-20e18fc elementor-widget elementor-widget-image"
                                                                data-id="20e18fc" data-element_type="widget"
                                                                data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <a href="galeri/robotic-roboto-uraaaa/index.html">
                                                                        <img width="640" height="426"
                                                                            src="{{ $item->thumbnail }}"
                                                                            class="attachment-full size-full wp-image-1203"
                                                                            alt="{{ $item->judul }}"
                                                                            sizes="(max-width: 640px) 100vw, 640px" />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-21071bd elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-jet-listing-dynamic-field"
                                                                data-id="21071bd" data-element_type="widget"
                                                                data-settings='{"_position":"absolute"}'
                                                                data-widget_type="jet-listing-dynamic-field.default">
                                                                <div class="elementor-widget-container">
                                                                    <div
                                                                        class="jet-listing jet-listing-dynamic-field display-inline">
                                                                        <div
                                                                            class="jet-listing-dynamic-field__inline-wrap">
                                                                            <div
                                                                                class="jet-listing-dynamic-field__content">
                                                                                {{ $item->judul }}
                                                                            </div>
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
                                @endforeach
                                {{-- <div
                            class="jet-listing-grid__item jet-listing-dynamic-post-978"
                            data-post-id="978"
                          >
                            <style type="text/css">
                              .jet-listing-dynamic-post-978
                                .elementor-element.elementor-element-6f7f173
                                .elementor-button {
                                background-color: #03626f;
                              }
                            </style>
                            <div
                              data-elementor-type="jet-listing-items"
                              data-elementor-id="942"
                              class="elementor elementor-942"
                            >
                              <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-2a2273d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2a2273d"
                                data-element_type="section"
                                data-settings='{"jet_parallax_layout_list":[{"jet_parallax_layout_image":{"url":"","id":"","size":""},"_id":"fb4688d","jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'
                              >
                                <div
                                  class="elementor-container elementor-column-gap-default"
                                >
                                  <div
                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8f7d28"
                                    data-id="e8f7d28"
                                    data-element_type="column"
                                  >
                                    <div
                                      class="elementor-widget-wrap elementor-element-populated"
                                    >
                                      <div
                                        class="elementor-element elementor-element-6f7f173 elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-auto elementor-absolute elementor-widget elementor-widget-button"
                                        data-id="6f7f173"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="button.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper">
                                            <a
                                              class="elementor-button elementor-button-link elementor-size-sm"
                                              href="galeri/lorem-ipsum-dolor-sitamet/index.html"
                                            >
                                              <span
                                                class="elementor-button-content-wrapper"
                                              >
                                                <span
                                                  class="elementor-button-icon elementor-align-icon-left"
                                                >
                                                  <i
                                                    aria-hidden="true"
                                                    class="fas fa-film"
                                                  ></i>
                                                </span>
                                                <span
                                                  class="elementor-button-text"
                                                  >Galeri</span
                                                >
                                              </span>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-20e18fc elementor-widget elementor-widget-image"
                                        data-id="20e18fc"
                                        data-element_type="widget"
                                        data-widget_type="image.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <a
                                            href="galeri/lorem-ipsum-dolor-sitamet/index.html"
                                          >
                                            <img
                                              loading="lazy"
                                              decoding="async"
                                              width="640"
                                              height="426"
                                              src="wp-content/uploads/2022/04/art2.jpg"
                                              class="attachment-full size-full wp-image-1224"
                                              alt=""
                                              srcset="
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/art2.jpg         640w,
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/art2-300x200.jpg 300w
                                              "
                                              sizes="(max-width: 640px) 100vw, 640px"
                                            />
                                          </a>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-21071bd elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-jet-listing-dynamic-field"
                                        data-id="21071bd"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="jet-listing-dynamic-field.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div
                                            class="jet-listing jet-listing-dynamic-field display-inline"
                                          >
                                            <div
                                              class="jet-listing-dynamic-field__inline-wrap"
                                            >
                                              <div
                                                class="jet-listing-dynamic-field__content"
                                              >
                                                Lorem Ipsum Dolor Si...
                                              </div>
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
                          <div
                            class="jet-listing-grid__item jet-listing-dynamic-post-977"
                            data-post-id="977"
                          >
                            <style type="text/css">
                              .jet-listing-dynamic-post-977
                                .elementor-element.elementor-element-6f7f173
                                .elementor-button {
                                background-color: #03626f;
                              }
                            </style>
                            <div
                              data-elementor-type="jet-listing-items"
                              data-elementor-id="942"
                              class="elementor elementor-942"
                            >
                              <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-2a2273d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2a2273d"
                                data-element_type="section"
                                data-settings='{"jet_parallax_layout_list":[{"jet_parallax_layout_image":{"url":"","id":"","size":""},"_id":"fb4688d","jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'
                              >
                                <div
                                  class="elementor-container elementor-column-gap-default"
                                >
                                  <div
                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8f7d28"
                                    data-id="e8f7d28"
                                    data-element_type="column"
                                  >
                                    <div
                                      class="elementor-widget-wrap elementor-element-populated"
                                    >
                                      <div
                                        class="elementor-element elementor-element-6f7f173 elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-auto elementor-absolute elementor-widget elementor-widget-button"
                                        data-id="6f7f173"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="button.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper">
                                            <a
                                              class="elementor-button elementor-button-link elementor-size-sm"
                                              href="galeri/post-type-galeri/index.html"
                                            >
                                              <span
                                                class="elementor-button-content-wrapper"
                                              >
                                                <span
                                                  class="elementor-button-icon elementor-align-icon-left"
                                                >
                                                  <i
                                                    aria-hidden="true"
                                                    class="fas fa-film"
                                                  ></i>
                                                </span>
                                                <span
                                                  class="elementor-button-text"
                                                  >Galeri</span
                                                >
                                              </span>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-20e18fc elementor-widget elementor-widget-image"
                                        data-id="20e18fc"
                                        data-element_type="widget"
                                        data-widget_type="image.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <a
                                            href="galeri/post-type-galeri/index.html"
                                          >
                                            <img
                                              loading="lazy"
                                              decoding="async"
                                              width="640"
                                              height="426"
                                              src="wp-content/uploads/2022/04/diskus.jpg"
                                              class="attachment-full size-full wp-image-1205"
                                              alt=""
                                              srcset="
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/diskus.jpg         640w,
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/diskus-300x200.jpg 300w
                                              "
                                              sizes="(max-width: 640px) 100vw, 640px"
                                            />
                                          </a>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-21071bd elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-jet-listing-dynamic-field"
                                        data-id="21071bd"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="jet-listing-dynamic-field.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div
                                            class="jet-listing jet-listing-dynamic-field display-inline"
                                          >
                                            <div
                                              class="jet-listing-dynamic-field__inline-wrap"
                                            >
                                              <div
                                                class="jet-listing-dynamic-field__content"
                                              >
                                                Post Type Galeri
                                              </div>
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
                          <div
                            class="jet-listing-grid__item jet-listing-dynamic-post-976"
                            data-post-id="976"
                          >
                            <style type="text/css">
                              .jet-listing-dynamic-post-976
                                .elementor-element.elementor-element-6f7f173
                                .elementor-button {
                                background-color: #03626f;
                              }
                            </style>
                            <div
                              data-elementor-type="jet-listing-items"
                              data-elementor-id="942"
                              class="elementor elementor-942"
                            >
                              <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-2a2273d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2a2273d"
                                data-element_type="section"
                                data-settings='{"jet_parallax_layout_list":[{"jet_parallax_layout_image":{"url":"","id":"","size":""},"_id":"fb4688d","jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'
                              >
                                <div
                                  class="elementor-container elementor-column-gap-default"
                                >
                                  <div
                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8f7d28"
                                    data-id="e8f7d28"
                                    data-element_type="column"
                                  >
                                    <div
                                      class="elementor-widget-wrap elementor-element-populated"
                                    >
                                      <div
                                        class="elementor-element elementor-element-6f7f173 elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-auto elementor-absolute elementor-widget elementor-widget-button"
                                        data-id="6f7f173"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="button.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper">
                                            <a
                                              class="elementor-button elementor-button-link elementor-size-sm"
                                              href="galeri/merdeka-belajar/index.html"
                                            >
                                              <span
                                                class="elementor-button-content-wrapper"
                                              >
                                                <span
                                                  class="elementor-button-icon elementor-align-icon-left"
                                                >
                                                  <i
                                                    aria-hidden="true"
                                                    class="fas fa-film"
                                                  ></i>
                                                </span>
                                                <span
                                                  class="elementor-button-text"
                                                  >Galeri</span
                                                >
                                              </span>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-20e18fc elementor-widget elementor-widget-image"
                                        data-id="20e18fc"
                                        data-element_type="widget"
                                        data-widget_type="image.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <a
                                            href="galeri/merdeka-belajar/index.html"
                                          >
                                            <img
                                              loading="lazy"
                                              decoding="async"
                                              width="640"
                                              height="426"
                                              src="wp-content/uploads/2022/04/lukis.jpg"
                                              class="attachment-full size-full wp-image-1204"
                                              alt=""
                                              srcset="
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/lukis.jpg         640w,
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/lukis-300x200.jpg 300w
                                              "
                                              sizes="(max-width: 640px) 100vw, 640px"
                                            />
                                          </a>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-21071bd elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-jet-listing-dynamic-field"
                                        data-id="21071bd"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="jet-listing-dynamic-field.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div
                                            class="jet-listing jet-listing-dynamic-field display-inline"
                                          >
                                            <div
                                              class="jet-listing-dynamic-field__inline-wrap"
                                            >
                                              <div
                                                class="jet-listing-dynamic-field__content"
                                              >
                                                Merdeka Belajar
                                              </div>
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
                          <div
                            class="jet-listing-grid__item jet-listing-dynamic-post-970"
                            data-post-id="970"
                          >
                            <style type="text/css">
                              .jet-listing-dynamic-post-970
                                .elementor-element.elementor-element-6f7f173
                                .elementor-button {
                                background-color: #03626f;
                              }
                            </style>
                            <div
                              data-elementor-type="jet-listing-items"
                              data-elementor-id="942"
                              class="elementor elementor-942"
                            >
                              <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-2a2273d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2a2273d"
                                data-element_type="section"
                                data-settings='{"jet_parallax_layout_list":[{"jet_parallax_layout_image":{"url":"","id":"","size":""},"_id":"fb4688d","jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'
                              >
                                <div
                                  class="elementor-container elementor-column-gap-default"
                                >
                                  <div
                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8f7d28"
                                    data-id="e8f7d28"
                                    data-element_type="column"
                                  >
                                    <div
                                      class="elementor-widget-wrap elementor-element-populated"
                                    >
                                      <div
                                        class="elementor-element elementor-element-6f7f173 elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-auto elementor-absolute elementor-widget elementor-widget-button"
                                        data-id="6f7f173"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="button.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper">
                                            <a
                                              class="elementor-button elementor-button-link elementor-size-sm"
                                              href="galeri/test-galeri/index.html"
                                            >
                                              <span
                                                class="elementor-button-content-wrapper"
                                              >
                                                <span
                                                  class="elementor-button-icon elementor-align-icon-left"
                                                >
                                                  <i
                                                    aria-hidden="true"
                                                    class="fas fa-film"
                                                  ></i>
                                                </span>
                                                <span
                                                  class="elementor-button-text"
                                                  >Galeri</span
                                                >
                                              </span>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-20e18fc elementor-widget elementor-widget-image"
                                        data-id="20e18fc"
                                        data-element_type="widget"
                                        data-widget_type="image.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <a
                                            href="galeri/test-galeri/index.html"
                                          >
                                            <img
                                              loading="lazy"
                                              decoding="async"
                                              width="640"
                                              height="426"
                                              src="wp-content/uploads/2022/04/uji.jpg"
                                              class="attachment-full size-full wp-image-1206"
                                              alt=""
                                              srcset="
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/uji.jpg         640w,
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/uji-300x200.jpg 300w
                                              "
                                              sizes="(max-width: 640px) 100vw, 640px"
                                            />
                                          </a>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-21071bd elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-jet-listing-dynamic-field"
                                        data-id="21071bd"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="jet-listing-dynamic-field.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div
                                            class="jet-listing jet-listing-dynamic-field display-inline"
                                          >
                                            <div
                                              class="jet-listing-dynamic-field__inline-wrap"
                                            >
                                              <div
                                                class="jet-listing-dynamic-field__content"
                                              >
                                                Test Galeri
                                              </div>
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
                          <div
                            class="jet-listing-grid__item jet-listing-dynamic-post-939"
                            data-post-id="939"
                          >
                            <style type="text/css">
                              .jet-listing-dynamic-post-939
                                .elementor-element.elementor-element-6f7f173
                                .elementor-button {
                                background-color: #03626f;
                              }
                            </style>
                            <div
                              data-elementor-type="jet-listing-items"
                              data-elementor-id="942"
                              class="elementor elementor-942"
                            >
                              <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-2a2273d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2a2273d"
                                data-element_type="section"
                                data-settings='{"jet_parallax_layout_list":[{"jet_parallax_layout_image":{"url":"","id":"","size":""},"_id":"fb4688d","jet_parallax_layout_image_tablet":{"url":"","id":"","size":""},"jet_parallax_layout_image_mobile":{"url":"","id":"","size":""},"jet_parallax_layout_speed":{"unit":"%","size":50,"sizes":[]},"jet_parallax_layout_type":"scroll","jet_parallax_layout_direction":null,"jet_parallax_layout_fx_direction":null,"jet_parallax_layout_z_index":"","jet_parallax_layout_bg_x":50,"jet_parallax_layout_bg_x_tablet":"","jet_parallax_layout_bg_x_mobile":"","jet_parallax_layout_bg_y":50,"jet_parallax_layout_bg_y_tablet":"","jet_parallax_layout_bg_y_mobile":"","jet_parallax_layout_bg_size":"auto","jet_parallax_layout_bg_size_tablet":"","jet_parallax_layout_bg_size_mobile":"","jet_parallax_layout_animation_prop":"transform","jet_parallax_layout_on":["desktop","tablet"]}]}'
                              >
                                <div
                                  class="elementor-container elementor-column-gap-default"
                                >
                                  <div
                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8f7d28"
                                    data-id="e8f7d28"
                                    data-element_type="column"
                                  >
                                    <div
                                      class="elementor-widget-wrap elementor-element-populated"
                                    >
                                      <div
                                        class="elementor-element elementor-element-6f7f173 elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-auto elementor-absolute elementor-widget elementor-widget-button"
                                        data-id="6f7f173"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="button.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper">
                                            <a
                                              class="elementor-button elementor-button-link elementor-size-sm"
                                              href="galeri/massa-ligula-fringilla-velit-egestas/index.html"
                                            >
                                              <span
                                                class="elementor-button-content-wrapper"
                                              >
                                                <span
                                                  class="elementor-button-icon elementor-align-icon-left"
                                                >
                                                  <i
                                                    aria-hidden="true"
                                                    class="fas fa-film"
                                                  ></i>
                                                </span>
                                                <span
                                                  class="elementor-button-text"
                                                  >Galeri</span
                                                >
                                              </span>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-20e18fc elementor-widget elementor-widget-image"
                                        data-id="20e18fc"
                                        data-element_type="widget"
                                        data-widget_type="image.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <a
                                            href="galeri/massa-ligula-fringilla-velit-egestas/index.html"
                                          >
                                            <img
                                              loading="lazy"
                                              decoding="async"
                                              width="640"
                                              height="426"
                                              src="wp-content/uploads/2022/04/lach.jpg"
                                              class="attachment-full size-full wp-image-1208"
                                              alt=""
                                              srcset="
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/lach.jpg         640w,
                                                https://sekolah.flymotion.my.id/wp-content/uploads/2022/04/lach-300x200.jpg 300w
                                              "
                                              sizes="(max-width: 640px) 100vw, 640px"
                                            />
                                          </a>
                                        </div>
                                      </div>
                                      <div
                                        class="elementor-element elementor-element-21071bd elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-jet-listing-dynamic-field"
                                        data-id="21071bd"
                                        data-element_type="widget"
                                        data-settings='{"_position":"absolute"}'
                                        data-widget_type="jet-listing-dynamic-field.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <div
                                            class="jet-listing jet-listing-dynamic-field display-inline"
                                          >
                                            <div
                                              class="jet-listing-dynamic-field__inline-wrap"
                                            >
                                              <div
                                                class="jet-listing-dynamic-field__content"
                                              >
                                                Massa Ligula Fringil...
                                              </div>
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
                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
