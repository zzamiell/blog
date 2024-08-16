<main id="content" class="site-main post-1079 page type-page status-publish hentry">


    <div class="page-content">
        <div data-elementor-type="wp-page" data-elementor-id="1079" class="elementor elementor-1079">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-c6a6808 elementor-section-height-min-height elementor-section-items-top elementor-section-boxed elementor-section-height-default"
                data-id="c6a6808" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a94b71e"
                        data-id="a94b71e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-63ae461 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="63ae461" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a67270d"
                                        data-id="a67270d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7ce4397 elementor-widget elementor-widget-heading"
                                                data-id="7ce4397" data-element_type="widget"
                                                data-widget_type="heading.default">
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
                                                    <h2 class="elementor-heading-title elementor-size-default">Download
                                                        Materi</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-01271a9 elementor-widget elementor-widget-jet-dynamic-table"
                                data-id="01271a9" data-element_type="widget" id="download"
                                data-widget_type="jet-dynamic-table.default">
                                <div class="elementor-widget-container">
                                    <style></style>
                                    <div class="jet-dynamic-table-wrapper" style="max-width: 100%; overflow: auto;">
                                        <table class="jet-dynamic-table" data-table-id="17">
                                            <thead class="jet-dynamic-table__header">
                                                <tr class="jet-dynamic-table__row jet-dynamic-table__row--header">
                                                    <th class="jet-dynamic-table__col jet-dynamic-table__col--judulfile"
                                                        style="vertical-align:middle;text-align:left;">Judul File</th>
                                                    <th class="jet-dynamic-table__col jet-dynamic-table__col--jenis"
                                                        style="vertical-align:middle;text-align:center;">Jenis</th>
                                                    <th class="jet-dynamic-table__col jet-dynamic-table__col--download"
                                                        style="vertical-align:middle;text-align:center;">Download</th>
                                                </tr>
                                            </thead>
                                            <tbody class="jet-dynamic-table__body">
                                                @foreach ($download as $item)
                                                    <tr class="jet-dynamic-table__row jet-dynamic-table__row--header"
                                                        data-item-object="3">
                                                        <td class="jet-dynamic-table__col jet-dynamic-table__col--judulfile"
                                                            style="vertical-align:middle;text-align:left;">
                                                            {{ $item->judul }}
                                                        </td>
                                                        <td class="jet-dynamic-table__col jet-dynamic-table__col--jenis"
                                                            style="vertical-align:middle;text-align:center;">
                                                            {{ $item->jenis }}</td>
                                                        <td class="jet-dynamic-table__col jet-dynamic-table__col--download"
                                                            style="vertical-align:middle;text-align:center;"><a
                                                                href="{{ asset($item->lampiran) }}">
                                                                <i class="fa fa-download"></i>
                                                            </a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e1f3863 elementor-widget elementor-widget-jet-smart-filters-pagination"
                                data-id="e1f3863" data-element_type="widget"
                                data-widget_type="jet-smart-filters-pagination.default">
                                <div class="elementor-widget-container">
                                    <div class="jet-smart-filters-pagination" data-apply-provider="jet-engine"
                                        data-content-provider="jet-engine" data-query-id="download"
                                        data-controls="{&quot;nav&quot;:true,&quot;prev&quot;:&quot;Sebelum&quot;,&quot;next&quot;:&quot;Selanjutnya&quot;,&quot;pages_mid_size&quot;:0,&quot;pages_end_size&quot;:0,&quot;provider_top_offset&quot;:0}"
                                        data-apply-type="ajax"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="post-tags">
        </div>
    </div>


</main>
