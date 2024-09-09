<div data-elementor-type="single-post" data-elementor-id="158"
    class="elementor elementor-158 elementor-location-single post-761 agenda type-agenda status-publish has-post-thumbnail hentry">
    <div class="elementor-section-wrap">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-a1ea028 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="a1ea028" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-429441f"
                    data-id="429441f" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6bd81d8 elementor-widget elementor-widget-jet-listing-dynamic-image"
                            data-id="6bd81d8" data-element_type="widget"
                            data-widget_type="jet-listing-dynamic-image.default">
                            <div class="elementor-widget-container">
                                <div class="jet-listing jet-listing-dynamic-image"><img fetchpriority="high"
                                        width="600" height="400" src="{{ asset($agenda->thumbnail) }}"
                                        class="attachment-full size-full wp-post-image" alt="{{ $agenda->judul }}"
                                        decoding="async" sizes="(max-width: 600px) 100vw, 600px"></div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5b0e4de elementor-widget elementor-widget-heading"
                            data-id="5b0e4de" data-element_type="widget" data-widget_type="heading.default">
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
                                <h2 class="elementor-heading-title elementor-size-default">{{ $agenda->judul }}</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-61f3f75 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="61f3f75" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items elementor-inline-items">
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="far fa-user-circle"></i> </span>
                                        <span class="elementor-icon-list-text">Oleh : {{ $agenda->creator }}</span>
                                    </li>
                                    <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="far fa-calendar-check"></i> </span>
                                        <span class="elementor-icon-list-text">Tanggal Posting :
                                            {{ $agenda->created_at }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-96ec2c0 elementor-widget elementor-widget-jet-listing-dynamic-field"
                            data-id="96ec2c0" data-element_type="widget"
                            data-widget_type="jet-listing-dynamic-field.default">
                            <div class="elementor-widget-container">
                                <div class="jet-listing jet-listing-dynamic-field display-inline">
                                    <div class="jet-listing-dynamic-field__inline-wrap"><i
                                            class="jet-listing-dynamic-field__icon far fa-calendar-check"
                                            aria-hidden="true"></i>
                                        <div class="jet-listing-dynamic-field__content"><strong> Pelaksanaan : </strong>
                                            {{ $agenda->pelaksanaan }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cc50604 elementor-widget elementor-widget-jet-listing-dynamic-field"
                            data-id="cc50604" data-element_type="widget"
                            data-widget_type="jet-listing-dynamic-field.default">
                            <div class="elementor-widget-container">
                                <div class="jet-listing jet-listing-dynamic-field display-inline">
                                    <div class="jet-listing-dynamic-field__inline-wrap"><i
                                            class="jet-listing-dynamic-field__icon far fa-clock" aria-hidden="true"></i>
                                        <div class="jet-listing-dynamic-field__content"><strong> Waktu : </strong>
                                            {{ $agenda->start }}
                                            - {{ $agenda->end }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-bd1088b elementor-widget elementor-widget-jet-listing-dynamic-field"
                            data-id="bd1088b" data-element_type="widget"
                            data-widget_type="jet-listing-dynamic-field.default">
                            <div class="elementor-widget-container">
                                <div class="jet-listing jet-listing-dynamic-field display-inline">
                                    <div class="jet-listing-dynamic-field__inline-wrap"><i
                                            class="jet-listing-dynamic-field__icon fas fa-map-marker-alt"
                                            aria-hidden="true"></i>
                                        <div class="jet-listing-dynamic-field__content"><strong> Lokasi : </strong>
                                            {{ $agenda->lokasi }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3aa759e elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="3aa759e" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.21.0 - 26-05-2024 */
                                    .elementor-widget-divider {
                                        --divider-border-style: none;
                                        --divider-border-width: 1px;
                                        --divider-color: #0c0d0e;
                                        --divider-icon-size: 20px;
                                        --divider-element-spacing: 10px;
                                        --divider-pattern-height: 24px;
                                        --divider-pattern-size: 20px;
                                        --divider-pattern-url: none;
                                        --divider-pattern-repeat: repeat-x
                                    }

                                    .elementor-widget-divider .elementor-divider {
                                        display: flex
                                    }

                                    .elementor-widget-divider .elementor-divider__text {
                                        font-size: 15px;
                                        line-height: 1;
                                        max-width: 95%
                                    }

                                    .elementor-widget-divider .elementor-divider__element {
                                        margin: 0 var(--divider-element-spacing);
                                        flex-shrink: 0
                                    }

                                    .elementor-widget-divider .elementor-icon {
                                        font-size: var(--divider-icon-size)
                                    }

                                    .elementor-widget-divider .elementor-divider-separator {
                                        display: flex;
                                        margin: 0;
                                        direction: ltr
                                    }

                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                    .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                        align-items: center
                                    }

                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                    .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                    .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                        display: block;
                                        content: "";
                                        border-block-end: 0;
                                        flex-grow: 1;
                                        border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                    }

                                    .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                        flex-grow: 0;
                                        flex-shrink: 100
                                    }

                                    .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                        content: none
                                    }

                                    .elementor-widget-divider--element-align-left .elementor-divider__element {
                                        margin-left: 0
                                    }

                                    .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                        flex-grow: 0;
                                        flex-shrink: 100
                                    }

                                    .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                        content: none
                                    }

                                    .elementor-widget-divider--element-align-right .elementor-divider__element {
                                        margin-right: 0
                                    }

                                    .elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                        flex-grow: 0;
                                        flex-shrink: 100
                                    }

                                    .elementor-widget-divider--element-align-start .elementor-divider-separator:before {
                                        content: none
                                    }

                                    .elementor-widget-divider--element-align-start .elementor-divider__element {
                                        margin-inline-start: 0
                                    }

                                    .elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                        flex-grow: 0;
                                        flex-shrink: 100
                                    }

                                    .elementor-widget-divider--element-align-end .elementor-divider-separator:after {
                                        content: none
                                    }

                                    .elementor-widget-divider--element-align-end .elementor-divider__element {
                                        margin-inline-end: 0
                                    }

                                    .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                        border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                    }

                                    .elementor-widget-divider--separator-type-pattern {
                                        --divider-border-style: none
                                    }

                                    .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                    .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                        width: 100%;
                                        min-height: var(--divider-pattern-height);
                                        -webkit-mask-size: var(--divider-pattern-size) 100%;
                                        mask-size: var(--divider-pattern-size) 100%;
                                        -webkit-mask-repeat: var(--divider-pattern-repeat);
                                        mask-repeat: var(--divider-pattern-repeat);
                                        background-color: var(--divider-color);
                                        -webkit-mask-image: var(--divider-pattern-url);
                                        mask-image: var(--divider-pattern-url)
                                    }

                                    .elementor-widget-divider--no-spacing {
                                        --divider-pattern-size: auto
                                    }

                                    .elementor-widget-divider--bg-round {
                                        --divider-pattern-repeat: round
                                    }

                                    .rtl .elementor-widget-divider .elementor-divider__text {
                                        direction: rtl
                                    }

                                    .e-con-inner>.elementor-widget-divider,
                                    .e-con>.elementor-widget-divider {
                                        width: var(--container-widget-width, 100%);
                                        --flex-grow: var(--container-widget-flex-grow)
                                    }
                                </style>
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f9f9f7d elementor-drop-cap-yes elementor-drop-cap-view-default elementor-widget elementor-widget-text-editor"
                            data-id="f9f9f7d" data-element_type="widget"
                            data-settings="{&quot;drop_cap&quot;:&quot;yes&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.21.0 - 26-05-2024 */
                                    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                        background-color: #69727d;
                                        color: #fff
                                    }

                                    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                        color: #69727d;
                                        border: 3px solid;
                                        background-color: transparent
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                        margin-top: 8px
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                        width: 1em;
                                        height: 1em
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap {
                                        float: left;
                                        text-align: center;
                                        line-height: 1;
                                        font-size: 50px
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap-letter {
                                        display: inline-block
                                    }
                                </style>
                                <p>
                                    {!! $agenda->deskripsi !!}
                                </p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d116d11 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="d116d11" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-95dc1c4 elementor-widget elementor-widget-heading"
                            data-id="95dc1c4" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Koordinator</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c7fa4ac elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="c7fa4ac" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6f54680 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="6f54680" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="far fa-user"></i> </span>
                                        <span class="elementor-icon-list-text"><strong>Nama :</strong>
                                            {{ $agenda->knama }}</span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-envelope"></i> </span>
                                        <span class="elementor-icon-list-text"><strong>Email :</strong>
                                            {{ $agenda->kemail }}</span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-phone"></i> </span>
                                        <span class="elementor-icon-list-text"><strong>Telp :</strong>
                                            {{ $agenda->kphone }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7583fba elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="7583fba" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-917c824 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="917c824" data-element_type="section"
                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;_id&quot;:&quot;bc05d74&quot;,&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6a63bfb"
                                    data-id="6a63bfb" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-e8828c2 elementor-widget elementor-widget-heading"
                                            data-id="e8828c2" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Bagikan :
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3f70277"
                                    data-id="3f70277" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-532ab70 elementor-share-buttons--view-icon elementor-share-buttons--shape-circle elementor-share-buttons--align-right elementor-share-buttons-tablet--align-center elementor-share-buttons-mobile--align-right elementor-share-buttons--skin-gradient elementor-grid-0 elementor-share-buttons--color-official elementor-widget elementor-widget-share-buttons"
                                            data-id="532ab70" data-element_type="widget"
                                            data-widget_type="share-buttons.default">
                                            <div class="elementor-widget-container">
                                                <link rel="stylesheet"
                                                    href="{{ asset('wp-content/plugins/elementor-pro/assets/css/widget-share-buttons.min.css') }}">
                                                <div class="elementor-grid">
                                                    <div class="elementor-grid-item">
                                                        <div class="elementor-share-btn elementor-share-btn_facebook"
                                                            tabindex="0" aria-label="Share on facebook">
                                                            <span class="elementor-share-btn__icon">
                                                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-grid-item">
                                                        <div class="elementor-share-btn elementor-share-btn_twitter"
                                                            tabindex="0" aria-label="Share on twitter">
                                                            <span class="elementor-share-btn__icon">
                                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-grid-item">
                                                        <div class="elementor-share-btn elementor-share-btn_telegram"
                                                            tabindex="0" aria-label="Share on telegram">
                                                            <span class="elementor-share-btn__icon">
                                                                <i class="fab fa-telegram" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-grid-item">
                                                        <div class="elementor-share-btn elementor-share-btn_whatsapp"
                                                            tabindex="0" aria-label="Share on whatsapp">
                                                            <span class="elementor-share-btn__icon">
                                                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-95d7404 elementor-widget elementor-widget-facebook-comments"
                            data-id="95d7404" data-element_type="widget"
                            data-widget_type="facebook-comments.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor-pro - v3.7.7 - 20-09-2022 */
                                    .elementor-facebook-widget.fb_iframe_widget,
                                    .elementor-facebook-widget.fb_iframe_widget span {
                                        width: 100% !important
                                    }

                                    .elementor-facebook-widget.fb_iframe_widget iframe {
                                        position: relative;
                                        width: 100% !important
                                    }

                                    .elementor-facebook-widget.fb-like {
                                        height: 1px
                                    }

                                    .elementor-widget-facebook-comments iframe {
                                        width: 100% !important
                                    }
                                </style>
                                <div class="elementor-facebook-widget fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop fb_iframe_widget_fluid"
                                    data-href="https://sekolah.flymotion.my.id?p=761" data-width="100%"
                                    data-numposts="10" data-order-by="social" style="min-height: 1px; width: 100%;"
                                    fb-xfbml-state="rendered"
                                    fb-iframe-plugin-query="app_id=&amp;container_width=300&amp;height=100&amp;href=https%3A%2F%2Fsekolah.flymotion.my.id%2F%3Fp%3D761&amp;locale=id_ID&amp;mobile=true&amp;numposts=10&amp;order_by=social&amp;sdk=joey&amp;version=v2.10&amp;width=">
                                    <span
                                        style="vertical-align: top; width: 100%; height: 0px; overflow: hidden;"><iframe
                                            name="f43137fc284752cba" width="1000px" height="100px"
                                            data-testid="fb:comments Facebook Social Plugin"
                                            title="fb:comments Facebook Social Plugin" frameborder="0"
                                            allowtransparency="true" allowfullscreen="true" scrolling="no"
                                            allow="encrypted-media"
                                            src="https://www.facebook.com/v2.10/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df785ee03a189800fa%26domain%3D%26is_canvas%3Dfalse%26origin%3Dfile%253A%252F%252F%252Ff21fc827c6efb8220%26relation%3Dparent.parent&amp;container_width=300&amp;height=100&amp;href=https%3A%2F%2Fsekolah.flymotion.my.id%2F%3Fp%3D761&amp;locale=id_ID&amp;mobile=true&amp;numposts=10&amp;order_by=social&amp;sdk=joey&amp;version=v2.10&amp;width="
                                            style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5f73406 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="5f73406" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ff929de"
                    data-id="ff929de" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">

                        <div class="elementor-element elementor-element-696ef01 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="696ef01" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-08cde8e elementor-widget elementor-widget-jet-headline"
                            data-id="08cde8e" data-element_type="widget" data-widget_type="jet-headline.default">
                            <div class="elementor-widget-container">
                                <h4 class="jet-headline jet-headline--direction-horizontal"><span
                                        class="jet-headline__part jet-headline__first"><span
                                            class="jet-headline__label">Pengumuman</span></span><span
                                        class="jet-headline__space">&nbsp;</span><span
                                        class="jet-headline__part jet-headline__second"><span
                                            class="jet-headline__label">Sekolah</span></span></h4>
                            </div>
                        </div>

                        <div class="elementor-element elementor-element-d0b80f6 elementor-widget elementor-widget-jet-listing-grid"
                            data-id="d0b80f6" data-element_type="widget"
                            data-settings="{&quot;columns&quot;:&quot;1&quot;,&quot;columns_mobile&quot;:&quot;1&quot;,&quot;columns_tablet&quot;:&quot;1&quot;}"
                            data-widget_type="jet-listing-grid.default">
                            <div class="elementor-widget-container">
                                <div class="jet-listing-grid jet-listing">
                                    <div class="jet-listing-grid__slider"
                                        data-slider_options="{&quot;slidesToShow&quot;:{&quot;desktop&quot;:1,&quot;tablet&quot;:1,&quot;mobile&quot;:1},&quot;autoplaySpeed&quot;:5000,&quot;autoplay&quot;:true,&quot;infinite&quot;:true,&quot;centerMode&quot;:false,&quot;speed&quot;:600,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;slidesToScroll&quot;:1,&quot;prevArrow&quot;:&quot;<div class=\&quot;jet-listing-grid__slider-icon prev-arrow \&quot; role=\&quot;button\&quot; aria-label=\&quot;Previous\&quot;><svg viewBox=\&quot;0 0 90 179\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;><path transform=\&quot;scale(0.1,-0.1) translate(0,-1536)\&quot; d=\&quot;M627 992q0 -13 -10 -23l-393 -393l393 -393q10 -10 10 -23t-10 -23l-50 -50q-10 -10 -23 -10t-23 10l-466 466q-10 10 -10 23t10 23l466 466q10 10 23 10t23 -10l50 -50q10 -10 10 -23z\&quot; \/><\/svg><\/div>&quot;,&quot;nextArrow&quot;:&quot;<div class=\&quot;jet-listing-grid__slider-icon next-arrow \&quot; role=\&quot;button\&quot; aria-label=\&quot;Next\&quot;><svg viewBox=\&quot;0 0 90 179\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;><path transform=\&quot;scale(0.1,-0.1) translate(0,-1536)\&quot; d=\&quot;M627 992q0 -13 -10 -23l-393 -393l393 -393q10 -10 10 -23t-10 -23l-50 -50q-10 -10 -23 -10t-23 10l-466 466q-10 10 -10 23t10 23l466 466q10 10 23 10t23 -10l50 -50q10 -10 10 -23z\&quot; \/><\/svg><\/div>&quot;,&quot;rtl&quot;:false,&quot;itemsCount&quot;:3,&quot;fade&quot;:false}"
                                        dir="ltr">
                                        <div class="jet-listing-grid__items grid-col-desk-1 grid-col-tablet-1 grid-col-mobile-1 jet-listing-grid--13 slick-initialized slick-slider"
                                            data-nav="{&quot;enabled&quot;:false,&quot;type&quot;:null,&quot;more_el&quot;:null,&quot;query&quot;:[],&quot;widget_settings&quot;:{&quot;lisitng_id&quot;:13,&quot;posts_num&quot;:6,&quot;columns&quot;:1,&quot;columns_tablet&quot;:1,&quot;columns_mobile&quot;:1,&quot;is_archive_template&quot;:&quot;&quot;,&quot;post_status&quot;:[&quot;publish&quot;],&quot;use_random_posts_num&quot;:&quot;&quot;,&quot;max_posts_num&quot;:9,&quot;not_found_message&quot;:&quot;No data was found&quot;,&quot;is_masonry&quot;:false,&quot;equal_columns_height&quot;:&quot;&quot;,&quot;use_load_more&quot;:&quot;&quot;,&quot;load_more_id&quot;:&quot;&quot;,&quot;load_more_type&quot;:&quot;click&quot;,&quot;use_custom_post_types&quot;:&quot;&quot;,&quot;custom_post_types&quot;:[],&quot;hide_widget_if&quot;:&quot;&quot;,&quot;carousel_enabled&quot;:&quot;yes&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;arrows&quot;:&quot;true&quot;,&quot;arrow_icon&quot;:&quot;fa fa-angle-left&quot;,&quot;dots&quot;:&quot;&quot;,&quot;autoplay&quot;:&quot;true&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;true&quot;,&quot;center_mode&quot;:&quot;&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:600,&quot;inject_alternative_items&quot;:&quot;&quot;,&quot;injection_items&quot;:[],&quot;scroll_slider_enabled&quot;:&quot;&quot;,&quot;scroll_slider_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;custom_query&quot;:false,&quot;custom_query_id&quot;:&quot;&quot;,&quot;_element_id&quot;:&quot;&quot;}}"
                                            data-page="1" data-pages="1" data-listing-source="posts">

                                            <div class="row justify-content-center">
                                                @foreach ($pengumuman as $item)
                                                    <div class="col-12 ml-5">
                                                        <div class="jet-listing-grid__item jet-listing-dynamic-post-762"
                                                            data-post-id="762" style="width: 310px;"
                                                            data-slick-index="-1" id="" aria-hidden="true"
                                                            tabindex="-1">
                                                            <style type="text/css">
                                                                .jet-listing-dynamic-post-762 .elementor-element.elementor-element-9b5f01f .elementor-button {
                                                                    background-color: #3f95a1;
                                                                }
                                                            </style>
                                                            <div data-elementor-type="jet-listing-items"
                                                                data-elementor-id="13" class="elementor elementor-13">
                                                                <section
                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-f67cebd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                    data-id="f67cebd" data-element_type="section"
                                                                    data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;fb4688d&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                                    <div
                                                                        class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26a4ec7"
                                                                            data-id="26a4ec7"
                                                                            data-element_type="column">
                                                                            <div
                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-9b5f01f elementor-align-right elementor-absolute elementor-widget elementor-widget-button"
                                                                                    data-id="9b5f01f"
                                                                                    data-element_type="widget"
                                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                                    data-widget_type="button.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div
                                                                                            class="elementor-button-wrapper">
                                                                                            <a class="elementor-button elementor-button-link elementor-size-xs"
                                                                                                href="../../pengumuman/stop-bullying/index.html"
                                                                                                tabindex="-1">
                                                                                                <span
                                                                                                    class="elementor-button-content-wrapper">
                                                                                                    <span
                                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                                        <i aria-hidden="true"
                                                                                                            class="fas fa-bullhorn"></i>
                                                                                                    </span>
                                                                                                    <span
                                                                                                        class="elementor-button-text">Pengumuman</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-f53dc33 elementor-widget elementor-widget-image"
                                                                                    data-id="f53dc33"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="image.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <a href="../../pengumuman/stop-bullying/index.html"
                                                                                            tabindex="-1">
                                                                                            <img width="900"
                                                                                                height="450"
                                                                                                src="{{ asset($item->thumbnail) }}"
                                                                                                class="attachment-full size-full wp-image-1205"
                                                                                                alt=""
                                                                                                sizes="(max-width: 900px) 100vw, 900px">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-693ee36 elementor-widget elementor-widget-jet-listing-dynamic-field"
                                                                                    data-id="693ee36"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="jet-listing-dynamic-field.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div
                                                                                            class="jet-listing jet-listing-dynamic-field display-inline">
                                                                                            <div
                                                                                                class="jet-listing-dynamic-field__inline-wrap">
                                                                                                <div class="jet-listing-dynamic-field__content"
                                                                                                    style="color: black">
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
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-045a3bb elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="045a3bb" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
