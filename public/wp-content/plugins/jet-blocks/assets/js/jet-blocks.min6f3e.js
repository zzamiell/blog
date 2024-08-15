!function(p,h,i){"use strict";var g={addedScripts:{},addedStyles:{},addedAssetsPromises:[],init:function(){var e={"jet-nav-menu.default":g.navMenu,"jet-search.default":g.searchBox,"jet-auth-links.default":g.authLinks,"jet-hamburger-panel.default":g.hamburgerPanel,"jet-blocks-cart.default":g.wooCard};p.each(e,function(e,t){h.hooks.addAction("frontend/element_ready/"+e,t)}),p(document).on("click.jetBlocks",".jet-search__popup-trigger",g.searchPopupSwitch).on("click.jetBlocks",".jet-search__popup-close",g.searchPopupSwitch),p(window).on("jet-menu/ajax/frontend-init/before",function(){p(document.body).trigger("wc_fragment_refresh")}),h.hooks.addAction("frontend/element_ready/section",g.setStickySection),p(g.stickySection)},wooCard:function(e){var t;window.JetBlocksEditor&&window.JetBlocksEditor.activeSection&&(t=window.JetBlocksEditor.activeSection,["cart_list_style","cart_list_items_style","cart_buttons_style"].indexOf(t),p(".widget_shopping_cart_content").empty(),p(document.body).trigger("wc_fragment_refresh"));var n=p(".jet-blocks-cart",e),i=p(".jet-blocks-cart__heading-link",n);switch(n.data("settings").triggerType){case"hover":"ontouchend"in window||"ontouchstart"in window?(n.on("touchstart",function(e){scrollOffset=p(window).scrollTop()}),n.on("touchend",function(e){if(scrollOffset!==p(window).scrollTop())return!1;var t=p(this);t.hasClass("jet-cart-open-proccess")||setTimeout(function(){t.toggleClass("jet-cart-open")},10)}),p(document).on("touchend",function(e){p(e.target).closest(n).length||n.hasClass("jet-cart-open-proccess")||n.hasClass("jet-cart-open")&&n.removeClass("jet-cart-open")})):n.on("mouseenter mouseleave",function(e){p(this).hasClass("jet-cart-open-proccess")||"mouseenter"!==e.type||p(this).addClass("jet-cart-open"),p(this).hasClass("jet-cart-open-proccess")||"mouseleave"!==e.type||p(this).removeClass("jet-cart-open")});break;case"click":i.on("click",function(e){e.preventDefault(),n.hasClass("jet-cart-open-proccess")||n.toggleClass("jet-cart-open")})}p(".jet-blocks-cart__close-button",n).on("click touchend",function(e){n.hasClass("jet-cart-open-proccess")||n.removeClass("jet-cart-open")})},navMenu:function(r){var c,i,l,e,s,n;function t(e){var t,n=r.find(".jet-nav");"touchend"===e.type&&s!==p(window).scrollTop()||p(e.target).closest(n).length||(t=p(".menu-item-has-children."+c,n))[0]&&(t.removeClass(c),t.addClass(i),setTimeout(function(){t.removeClass(i)},200),n.hasClass("jet-nav--vertical-sub-bottom")&&p(".jet-nav__sub",t).slideUp(200),e.stopPropagation())}function o(e){var t=r.find(".jet-nav-wrap").data("mobile-layout"),n=r.find(".jet-nav-wrap"),i=r.find(".jet-nav__mobile-trigger"),o=r.find(".jet-nav");"left-side"!==t&&"right-side"!==t||"touchend"===e.type&&s!==p(window).scrollTop()||p(e.target).closest(i).length||p(e.target).closest(o).length||n.hasClass(l)&&(n.removeClass(l),e.stopPropagation())}function a(){var e,t;"full-width"===r.find(".jet-nav-wrap").data("mobile-layout")&&(e=r.find(".jet-nav"),"mobile"===h.getCurrentDeviceMode()?(n&&e.css({left:""}),t=-e.offset().left,e.css({left:t}),n=!0):n&&(e.css({left:""}),n=!1))}r.data("initialized")||(r.data("initialized",!0),c="jet-nav-hover",i="jet-nav-hover-out",l="jet-mobile-menu-active",r.find(".jet-nav:not(.jet-nav--vertical-sub-bottom)").hoverIntent({over:function(){p(this).addClass(c)},out:function(){var e=p(this);e.removeClass(c),e.addClass(i),setTimeout(function(){e.removeClass(i)},200)},timeout:200,selector:".menu-item-has-children"}),g.mobileAndTabletCheck()?(r.find(".jet-nav:not(.jet-nav--vertical-sub-bottom)").on("touchstart.jetNavMenu",".menu-item > a",function(e){e=p(e.currentTarget).closest(".menu-item");e.data("offset",p(window).scrollTop()),e.data("elemOffset",e.offset().top)}),r.find(".jet-nav:not(.jet-nav--vertical-sub-bottom)").on("touchend.jetNavMenu",".menu-item > a",function(e){var t,n,i,o,s,a;if(e.preventDefault(),a=p(e.currentTarget),t=a.closest(".menu-item"),n=t.siblings(".menu-item.menu-item-has-children"),i=p("> a",t),o=p(".jet-nav__sub:first",t),s=t.data("offset"),e=t.data("elemOffset"),a=t.closest(".jet-hamburger-panel"),s!==p(window).scrollTop()||e!==t.offset().top)return!1;n[0]&&(n.removeClass(c),p(".menu-item-has-children",n).removeClass(c));if(!p(".jet-nav__sub",t)[0]||t.hasClass(c))return i.trigger("click"),window.location.href=i.attr("href"),r.find(".jet-nav-wrap").hasClass(l)&&r.find(".jet-nav-wrap").removeClass(l),a[0]&&a.hasClass("open-state")&&(a.removeClass("open-state"),p("html").removeClass("jet-hamburger-panel-visible")),!1;o[0]&&t.addClass(c)}),p(document).on("touchstart.jetNavMenu",function(e){s=p(window).scrollTop()}),p(document).on("touchend.jetNavMenu",t)):r.find(".jet-nav:not(.jet-nav--vertical-sub-bottom)").on("click.jetNavMenu",".menu-item > a",function(e){var t=p(e.currentTarget).closest(".menu-item"),e=t.closest(".jet-hamburger-panel");t.hasClass("menu-item-has-children")&&!t.hasClass(c)||e[0]&&e.hasClass("open-state")&&(e.removeClass("open-state"),p("html").removeClass("jet-hamburger-panel-visible"))}),g.isEditMode()||(e=r.find('.menu-item-link[href*="#"]'))[0]&&e.each(function(){""!==this.hash&&location.pathname===this.pathname&&function(t){var e,n=t[0].hash,i="current-menu-item",o="-50% 0% -50%";try{e=p(decodeURIComponent(n))}catch(e){return}e[0]&&(e.hasClass("elementor-menu-anchor")&&(o="300px 0% -300px"),new IntersectionObserver(function(e){e[0].isIntersecting?t.parent(".menu-item").addClass(i):t.parent(".menu-item").removeClass(i)},{rootMargin:o}).observe(e[0]))}(p(this))}),r.find(".jet-nav--vertical-sub-bottom").on("click.jetNavMenu",".menu-item > a",function(e){var t=p(e.currentTarget).closest(".menu-item"),n=t.siblings(".menu-item.menu-item-has-children"),i=p(".jet-nav__sub:first",t),o=t.closest(".jet-hamburger-panel");t.hasClass("menu-item-has-children")&&!t.hasClass(c)?(e.preventDefault(),e.stopPropagation(),n[0]&&(n.removeClass(c),p(".menu-item-has-children",n).removeClass(c),p(".jet-nav__sub",n).slideUp(200)),i[0]&&(i.slideDown(200),t.addClass(c))):(r.find(".jet-nav-wrap").hasClass(l)&&r.find(".jet-nav-wrap").removeClass(l),o[0]&&o.hasClass("open-state")&&(o.removeClass("open-state"),p("html").removeClass("jet-hamburger-panel-visible")))}),p(document).on("click.jetNavMenu",function(e){r.find(".jet-nav").hasClass("jet-nav--vertical-sub-bottom")&&t(e)}),p(".jet-nav__mobile-trigger",r).on("click.jetNavMenu",function(e){p(this).closest(".jet-nav-wrap").toggleClass(l)}),"ontouchend"in window?p(document).on("touchend.jetMobileNavMenu",o):p(document).on("click.jetMobileNavMenu",o),p(".jet-nav__mobile-close-btn",r).on("click.jetMobileNavMenu",function(e){p(this).closest(".jet-nav-wrap").removeClass(l)}),n=!1,a(),p(window).on("resize.jetMobileNavMenu",a),g.isEditMode()&&r.data("initialized",!1))},searchBox:function(a){g.onSearchSectionActivated(a),p(document).on("click.jetBlocks",function(e){var t=a.find(".jet-search"),n=p(".jet-search__popup-trigger",t),i=p(".jet-search__popup-content",t),o="jet-search-popup-active",s="jet-transition-out";p(e.target).closest(n).length||p(e.target).closest(i).length||t.hasClass(o)&&(t.removeClass(o),t.addClass(s),setTimeout(function(){t.removeClass(s)},300),e.stopPropagation())})},onSearchSectionActivated:function(e){var t;i&&window.JetBlocksEditor&&window.JetBlocksEditor.activeSection&&(t=window.JetBlocksEditor.activeSection,-1!==["section_popup_style","section_popup_close_style","section_form_style"].indexOf(t)?e.find(".jet-search").addClass("jet-search-popup-active"):e.find(".jet-search").removeClass("jet-search-popup-active"))},authLinks:function(e){if(i&&window.JetBlocksEditor){if(!window.JetBlocksEditor.activeSection)return e.find(".jet-auth-links__logout").css("display","none"),void e.find(".jet-auth-links__registered").css("display","none");var t=window.JetBlocksEditor.activeSection,n=-1!==["section_logout_link","section_logout_link_style"].indexOf(t),t=-1!==["section_registered_link","section_registered_link_style"].indexOf(t);(n?e.find(".jet-auth-links__login"):e.find(".jet-auth-links__logout")).css("display","none"),(t?e.find(".jet-auth-links__register"):e.find(".jet-auth-links__registered")).css("display","none")}},hamburgerPanel:function(e){var t,n,d=p(".jet-hamburger-panel",e),i=p(".jet-hamburger-panel__toggle",e),o=p(".jet-hamburger-panel__instance",e),s=p(".jet-hamburger-panel__cover",e),a=p(".jet-hamburger-panel__inner",e),r=p(".jet-hamburger-panel__close-button",e),c=p(".jet-hamburger-panel__content",e),l=(Boolean(h.isEditMode()),p("html")),u=d.data("settings")||{};function m(e){var c=e,t=c.data("template-loaded")||!1,e=c.data("template-id"),l=p(".jet-hamburger-panel-loader",c);t||(p(window).trigger("jet-blocks/ajax-load-template/before",{target:d,contentHolder:c}),c.data("template-loaded",!0),p.ajax({type:"GET",url:window.JetHamburgerPanelSettings.templateApiUrl,dataType:"json",data:{id:e,dev:window.JetHamburgerPanelSettings.devMode},success:function(t,e,n){var i,o,s=t.template_content,a=t.template_scripts,r=t.template_styles;for(i in a)g.addedAssetsPromises.push(g.loadScriptAsync(i,a[i]));for(o in r)g.addedAssetsPromises.push(g.loadStyle(o,r[o]));Promise.all(g.addedAssetsPromises).then(function(e){l.remove(),c.append(s),g.elementorFrontendInit(c),p(window).trigger("jet-blocks/ajax-load-template/after",{target:d,contentHolder:c,responce:t})},function(e){console.log("Script Loaded Error")})}}))}"ontouchend"in window||"ontouchstart"in window?(i.on("touchstart",function(e){t=p(window).scrollTop()}),i.on("touchend",function(e){return t===p(window).scrollTop()&&(n&&clearTimeout(n),void(d.hasClass("open-state")?(d.removeClass("open-state"),l.removeClass("jet-hamburger-panel-visible")):(n=setTimeout(function(){d.addClass("open-state")},10),l.addClass("jet-hamburger-panel-visible"),g.initAnimationsHandlers(a),u.ajaxTemplate&&m(c))))})):i.on("click",function(e){d.hasClass("open-state")?(d.removeClass("open-state"),l.removeClass("jet-hamburger-panel-visible")):(d.addClass("open-state"),l.addClass("jet-hamburger-panel-visible"),g.initAnimationsHandlers(a),u.ajaxTemplate&&m(c))}),r.on("click",function(e){d.hasClass("open-state")?(d.removeClass("open-state"),l.removeClass("jet-hamburger-panel-visible")):(d.addClass("open-state"),l.addClass("jet-hamburger-panel-visible"),g.initAnimationsHandlers(a))}),p(document).on("click.JetHamburgerPanel",function(e){(!p(e.target).closest(i).length&&!p(e.target).closest(o).length||p(e.target).closest(s).length)&&d.hasClass("open-state")&&(d.removeClass("open-state"),p(e.target).closest(".jet-hamburger-panel__toggle").length||l.removeClass("jet-hamburger-panel-visible"),e.stopPropagation())})},loadStyle:function(i,o){return g.addedStyles.hasOwnProperty(i)&&g.addedStyles[i]===o?i:o?(g.addedStyles[i]=o,new Promise(function(e,t){var n=document.createElement("link");n.id=i,n.rel="stylesheet",n.href=o,n.type="text/css",n.media="all",n.onload=function(){e(i)},document.head.appendChild(n)})):void 0},loadScriptAsync:function(i,o){return g.addedScripts.hasOwnProperty(i)?i:o?(g.addedScripts[i]=o,new Promise(function(e,t){var n=document.createElement("script");n.src=o,n.async=!0,n.onload=function(){e(i)},document.head.appendChild(n)})):void 0},initAnimationsHandlers:function(e){e.find("[data-element_type]").each(function(){var e=p(this);e.data("element_type")&&window.elementorFrontend.hooks.doAction("frontend/element_ready/global",e,p)})},searchPopupSwitch:function(e){var t=p(this).closest(".jet-search"),n=p(".jet-search__field",t),i="jet-search-popup-active",o="jet-transition-in",s="jet-transition-out";t.hasClass(i)?(t.removeClass(i),t.addClass(s),setTimeout(function(){t.removeClass(s)},300)):(t.addClass(o),setTimeout(function(){t.removeClass(o),t.addClass(i)},300),n.focus())},stickySection:function(){({isEditMode:Boolean(h.isEditMode()),correctionSelector:p("#wpadminbar"),initDesktop:!1,initTablet:!1,initMobile:!1,init:function(){this.isEditMode||(this.run(),p(window).on("resize.JetStickySection orientationchange.JetStickySection",this.run.bind(this)))},getOffset:function(){var e=0;return e=this.correctionSelector[0]&&"fixed"===this.correctionSelector.css("position")?this.correctionSelector.outerHeight(!0):e},run:function(){var e=h.getCurrentDeviceMode(),n="jet-sticky-transition-in",i="jet-sticky-transition-out",o={stickyClass:"jet-sticky-section--stuck",topSpacing:this.getOffset()};function s(e,t){e.jetStickySection(t).on("jetStickySection:stick",function(e){p(e.target).addClass(n),setTimeout(function(){p(e.target).removeClass(n)},3e3)}).on("jetStickySection:unstick",function(e){p(e.target).addClass(i),setTimeout(function(){p(e.target).removeClass(i)},3e3)}),e.trigger("jetStickySection:activated")}"desktop"!==e||this.initDesktop||(this.initTablet&&(g.getStickySectionsTablet.forEach(function(e,t){e.trigger("jetStickySection:detach")}),this.initTablet=!1),this.initMobile&&(g.getStickySectionsMobile.forEach(function(e,t){e.trigger("jetStickySection:detach")}),this.initMobile=!1),g.getStickySectionsDesktop[0]&&(g.getStickySectionsDesktop.forEach(function(e,t){g.getStickySectionsDesktop[t+1]?o.stopper=g.getStickySectionsDesktop[t+1]:o.stopper="",s(e,o)}),this.initDesktop=!0)),"tablet"!==e||this.initTablet||(this.initDesktop&&(g.getStickySectionsDesktop.forEach(function(e,t){e.trigger("jetStickySection:detach")}),this.initDesktop=!1),this.initMobile&&(g.getStickySectionsMobile.forEach(function(e,t){e.trigger("jetStickySection:detach")}),this.initMobile=!1),g.getStickySectionsTablet[0]&&(g.getStickySectionsTablet.forEach(function(e,t){g.getStickySectionsTablet[t+1]?o.stopper=g.getStickySectionsTablet[t+1]:o.stopper="",s(e,o)}),this.initTablet=!0)),"mobile"!==e||this.initMobile||(this.initDesktop&&(g.getStickySectionsDesktop.forEach(function(e,t){e.trigger("jetStickySection:detach")}),this.initDesktop=!1),this.initTablet&&(g.getStickySectionsTablet.forEach(function(e,t){e.trigger("jetStickySection:detach")}),this.initTablet=!1),g.getStickySectionsMobile[0]&&(g.getStickySectionsMobile.forEach(function(e,t){g.getStickySectionsMobile[t+1]?o.stopper=g.getStickySectionsMobile[t+1]:o.stopper="",s(e,o)}),this.initMobile=!0))}}).init()},getStickySectionsDesktop:[],getStickySectionsTablet:[],getStickySectionsMobile:[],setStickySection:function(t){({target:t,isEditMode:Boolean(h.isEditMode()),init:function(){var e;this.isEditMode||"yes"!==this.getSectionSetting("jet_sticky_section")||(e=this.getSectionSetting("jet_sticky_section_visibility")||[])[0]&&(-1!==e.indexOf("desktop")&&g.getStickySectionsDesktop.push(t),-1!==e.indexOf("tablet")&&g.getStickySectionsTablet.push(t),-1!==e.indexOf("mobile")&&g.getStickySectionsMobile.push(t))},getSectionSetting:function(e){var t={};if(Boolean(h.isEditMode())){if(!h.hasOwnProperty("config"))return;if(!h.config.hasOwnProperty("elements"))return;if(!h.config.elements.hasOwnProperty("data"))return;var n=this.target.data("model-cid"),n=h.config.elements.data[n];if(!n)return;if(!n.hasOwnProperty("attributes"))return;t=n.attributes||{}}else t=this.target.data("settings")||{};if(t[e])return t[e]}}).init()},mobileAndTabletCheck:function(){var e,t=!1;return e=navigator.userAgent||navigator.vendor||window.opera,t=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(e)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(e.substr(0,4))?!0:t},isEditMode:function(){return Boolean(h.isEditMode())},elementorFrontendInit:function(e){e.find("[data-element_type]").each(function(){var t=p(this),e=t.data("element_type");if(e)try{"widget"===e&&(e=t.data("widget_type"),window.elementorFrontend.hooks.doAction("frontend/element_ready/widget",t,p)),window.elementorFrontend.hooks.doAction("frontend/element_ready/global",t,p),window.elementorFrontend.hooks.doAction("frontend/element_ready/"+e,t,p)}catch(e){return console.log(e),t.remove(),!1}})}};p(window).on("elementor/frontend/init",g.init)}(jQuery,window.elementorFrontend,window.elementor,window.JetHamburgerPanelSettings);