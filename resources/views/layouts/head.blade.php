<meta name="robots" content="max-image-preview:large" />
<link rel="alternate" type="application/rss+xml" title="Sekolah Template &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Sekolah Template &raquo; Umpan Komentar"
    href="comments/feed/index.html" />
<script>
    window._wpemojiSettings = {
            baseUrl: 'https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/',
            ext: '.png',
            svgUrl: 'https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/',
            svgExt: '.svg',
            source: {
                concatemoji: 'https:\/\/sekolah.flymotion.my.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.5',
            },
        }
        /*! This file is auto-generated */
        !(function(i, n) {
            var o, s, e

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: new Date().valueOf()
                    }
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0)
                var t = new Uint32Array(
                        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                    ),
                    r =
                    (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                        e.fillText(n, 0, 0),
                        new Uint32Array(
                            e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                        ))
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case 'flag':
                        return n(
                                e,
                                '\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f',
                                '\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f'
                            ) ?
                            !1 :
                            !n(
                                e,
                                '\ud83c\uddfa\ud83c\uddf3',
                                '\ud83c\uddfa\u200b\ud83c\uddf3'
                            ) &&
                            !n(
                                e,
                                '\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f',
                                '\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f'
                            )
                    case 'emoji':
                        return !n(
                            e,
                            '\ud83d\udc26\u200d\u2b1b',
                            '\ud83d\udc26\u200b\u2b1b'
                        )
                }
                return !1
            }

            function f(e, t, n) {
                var r =
                    'undefined' != typeof WorkerGlobalScope &&
                    self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) :
                    i.createElement('canvas'),
                    a = r.getContext('2d', {
                        willReadFrequently: !0
                    }),
                    o = ((a.textBaseline = 'top'), (a.font = '600 32px Arial'), {})
                return (
                    e.forEach(function(e) {
                        o[e] = t(a, e, n)
                    }),
                    o
                )
            }

            function t(e) {
                var t = i.createElement('script');
                (t.src = e), (t.defer = !0), i.head.appendChild(t)
            }
            'undefined' != typeof Promise &&
                ((o = 'wpEmojiSettingsSupports'),
                    (s = ['flag', 'emoji']),
                    (n.supports = {
                        everything: !0,
                        everythingExceptFlag: !0
                    }),
                    (e = new Promise(function(e) {
                        i.addEventListener('DOMContentLoaded', e, {
                            once: !0
                        })
                    })),
                    new Promise(function(t) {
                        var n = (function() {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o))
                                if (
                                    'object' == typeof e &&
                                    'number' == typeof e.timestamp &&
                                    new Date().valueOf() < e.timestamp + 604800 &&
                                    'object' == typeof e.supportTests
                                )
                                    return e.supportTests
                            } catch (e) {}
                            return null
                        })()
                        if (!n) {
                            if (
                                'undefined' != typeof Worker &&
                                'undefined' != typeof OffscreenCanvas &&
                                'undefined' != typeof URL &&
                                URL.createObjectURL &&
                                'undefined' != typeof Blob
                            )
                                try {
                                    var e =
                                        'postMessage(' +
                                        f.toString() +
                                        '(' + [JSON.stringify(s), u.toString(), p.toString()].join(
                                            ','
                                        ) +
                                        '));',
                                        r = new Blob([e], {
                                            type: 'text/javascript'
                                        }),
                                        a = new Worker(URL.createObjectURL(r), {
                                            name: 'wpTestEmojiSupports',
                                        })
                                    return void(a.onmessage = function(e) {
                                        c((n = e.data)), a.terminate(), t(n)
                                    })
                                } catch (e) {}
                            c((n = f(s, u, p)))
                        }
                        t(n)
                    })
                    .then(function(e) {
                        for (var t in e)
                            (n.supports[t] = e[t]),
                            (n.supports.everything =
                                n.supports.everything && n.supports[t]),
                            'flag' !== t &&
                            (n.supports.everythingExceptFlag =
                                n.supports.everythingExceptFlag && n.supports[t]);
                        (n.supports.everythingExceptFlag =
                            n.supports.everythingExceptFlag && !n.supports.flag),
                        (n.DOMReady = !1),
                        (n.readyCallback = function() {
                            n.DOMReady = !0
                        })
                    })
                    .then(function() {
                        return e
                    })
                    .then(function() {
                        var e
                        n.supports.everything ||
                            (n.readyCallback(),
                                (e = n.source || {}).concatemoji ?
                                t(e.concatemoji) :
                                e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
                    }))
        })((window, document), window._wpemojiSettings)
</script>
<style id="wp-emoji-styles-inline-css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link rel="stylesheet" id="jet-engine-frontend-css"
    href="{{ asset('wp-content/plugins/jet-engine/assets/css/frontendd731.css?ver=2.11.5') }}" media="all" />
<style id="classic-theme-styles-inline-css">
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em;
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none;
    }
</style>
<style id="global-styles-inline-css">
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                rgba(6, 147, 227, 1) 0%,
                rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                rgb(122, 220, 180) 0%,
                rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                rgba(252, 185, 0, 1) 0%,
                rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                rgba(255, 105, 0, 1) 0%,
                rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                rgb(238, 238, 238) 0%,
                rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                rgb(74, 234, 220) 0%,
                rgb(151, 120, 209) 20%,
                rgb(207, 42, 186) 40%,
                rgb(238, 44, 130) 60%,
                rgb(251, 105, 98) 80%,
                rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                rgb(255, 206, 236) 0%,
                rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                rgb(254, 205, 165) 0%,
                rgb(254, 45, 45) 50%,
                rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                rgb(255, 203, 112) 0%,
                rgb(199, 81, 192) 50%,
                rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                rgb(255, 245, 203) 0%,
                rgb(182, 227, 212) 50%,
                rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                rgb(202, 248, 128) 0%,
                rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg,
                rgb(2, 3, 129) 0%,
                rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
            6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
</style>
<link rel="stylesheet" id="hello-elementor-css"
    href="{{ asset('wp-content/themes/hello-elementor/style.min41fe.css?ver=3.0.1') }}" media="all" />
<link rel="stylesheet" id="hello-elementor-theme-style-css"
    href="{{ asset('wp-content/themes/hello-elementor/theme.min41fe.css?ver=3.0.1') }}" media="all" />
<link rel="stylesheet" id="hello-elementor-header-footer-css"
    href="{{ asset('wp-content/themes/hello-elementor/header-footer.min41fe.css?ver=3.0.1') }}" media="all" />
<link rel="stylesheet" id="elementor-frontend-css"
    href="{{ asset('wp-content/plugins/elementor/assets/css/frontend-lite.min3cad.css?ver=3.21.8') }}" media="all" />
<style id="elementor-frontend-inline-css">
    .elementor-63 .elementor-element.elementor-element-1507cd83:not(.elementor-motion-effects-element-type-background),
    .elementor-63 .elementor-element.elementor-element-1507cd83>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-20bbbe0c.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-20bbbe0c.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-20bbbe0c.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-20bbbe0c.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-20bbbe0c.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-44e48cdb:not(.elementor-motion-effects-element-type-background),
    .elementor-63 .elementor-element.elementor-element-44e48cdb>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #3f95a1;
    }

    .elementor-63 .elementor-element.elementor-element-49b461d0 .jet-listing-grid__scroll-slider::-webkit-scrollbar {
        background-color: #3f95a1;
    }

    .elementor-63 .elementor-element.elementor-element-49b461d0 .jet-listing-grid__scroll-slider::-webkit-scrollbar-button {
        width: 0;
        height: 0;
    }

    .elementor-63 .elementor-element.elementor-element-49b461d0 .jet-listing-grid__scroll-slider::-webkit-scrollbar-track {
        border: none;
        background: transparent;
    }

    .elementor-63 .elementor-element.elementor-element-49b461d0 .jet-listing-grid__scroll-slider::--webkit-scrollbar-corner {
        background: transparent;
    }

    .elementor-63 .elementor-element.elementor-element-49b461d0 .jet-listing-grid__scroll-slider::-webkit-scrollbar-thumb {
        background-color: #3f95a1;
        border: none;
    }

    .elementor-63 .elementor-element.elementor-element-2b9edfa5.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-2b9edfa5.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-2b9edfa5.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-2b9edfa5.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-2b9edfa5.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-22e8993a:not(.elementor-motion-effects-element-type-background),
    .elementor-63 .elementor-element.elementor-element-22e8993a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #ffa800;
    }

    .elementor-63 .elementor-element.elementor-element-3fb0c1ad .jet-listing-grid__scroll-slider::-webkit-scrollbar {
        background-color: #ffa800;
    }

    .elementor-63 .elementor-element.elementor-element-3fb0c1ad .jet-listing-grid__scroll-slider::-webkit-scrollbar-button {
        width: 0;
        height: 0;
    }

    .elementor-63 .elementor-element.elementor-element-3fb0c1ad .jet-listing-grid__scroll-slider::-webkit-scrollbar-track {
        border: none;
        background: transparent;
    }

    .elementor-63 .elementor-element.elementor-element-3fb0c1ad .jet-listing-grid__scroll-slider::--webkit-scrollbar-corner {
        background: transparent;
    }

    .elementor-63 .elementor-element.elementor-element-3fb0c1ad .jet-listing-grid__scroll-slider::-webkit-scrollbar-thumb {
        background-color: #ffa800;
        border: none;
    }

    .elementor-63 .elementor-element.elementor-element-290f2366.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-290f2366.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-290f2366.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-290f2366.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-290f2366.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-8557f5a.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-8557f5a.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-8557f5a.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-8557f5a.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-8557f5a.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-00e182f.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-00e182f.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-00e182f.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-00e182f.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-00e182f.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-d12f432.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-d12f432.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-d12f432.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-d12f432.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-d12f432.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-f15d9f5.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-f15d9f5.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-f15d9f5.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-f15d9f5.elementor-view-framed .elementor-icon,
    .elementor-63 .elementor-element.elementor-element-f15d9f5.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-63 .elementor-element.elementor-element-a170a30 .jet-listing-grid__slider .jet-slick-dots li {
        background: #3f95a1;
    }

    .elementor-63 .elementor-element.elementor-element-a170a30 .jet-listing-grid__slider .jet-slick-dots li:hover {
        background: #ffa800;
    }

    .elementor-63 .elementor-element.elementor-element-a170a30 .jet-listing-grid__slider .jet-slick-dots li.slick-active {
        background: #2f9edd;
    }

    .elementor-211 .elementor-element.elementor-element-a650e63 .elementor-icon-list-icon i {
        color: #2f9edd;
    }

    .elementor-211 .elementor-element.elementor-element-a650e63 .elementor-icon-list-icon svg {
        fill: #2f9edd;
    }

    .elementor-211 .elementor-element.elementor-element-2ff5733d:not(.elementor-motion-effects-element-type-background),
    .elementor-211 .elementor-element.elementor-element-2ff5733d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #2f9edd;
    }

    .elementor-211 .elementor-element.elementor-element-73a14fe9 .elementor-button {
        background-color: #ffa800;
    }

    .elementor-211 .elementor-element.elementor-element-73a14fe9 .elementor-button:hover,
    .elementor-211 .elementor-element.elementor-element-73a14fe9 .elementor-button:focus {
        background-color: #3f95a1;
    }

    .elementor-211 .elementor-element.elementor-element-194dc767:not(.elementor-motion-effects-element-type-background),
    .elementor-211 .elementor-element.elementor-element-194dc767>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #2f9edd;
    }

    .elementor-211 .elementor-element.elementor-element-502e8cc .jet-ajax-search__field-icon {
        color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-5bf79073 .elementor-social-icon {
        background-color: #3f95a1;
    }

    .elementor-227 .elementor-element.elementor-element-480661:not(.elementor-motion-effects-element-type-background),
    .elementor-227 .elementor-element.elementor-element-480661>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #3f95a1;
    }

    .elementor-227 .elementor-element.elementor-element-704fc402 {
        color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-5890c053.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-5890c053.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-5890c053.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-5890c053.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-5890c053.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-61b20440.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-61b20440.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-61b20440.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-61b20440.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-61b20440.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-3868172c.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-3868172c.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-3868172c.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-3868172c.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-3868172c.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-46944bf8.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-46944bf8.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-46944bf8.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-46944bf8.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-46944bf8.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-269d5771.elementor-view-stacked .elementor-icon {
        background-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-269d5771.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-269d5771.elementor-view-default .elementor-icon {
        color: #2f9edd;
        border-color: #2f9edd;
    }

    .elementor-227 .elementor-element.elementor-element-269d5771.elementor-view-framed .elementor-icon,
    .elementor-227 .elementor-element.elementor-element-269d5771.elementor-view-default .elementor-icon svg {
        fill: #2f9edd;
    }

    .elementor-799 .elementor-element.elementor-element-3edb36b4 .elementor-heading-title {
        color: #2f9edd;
    }
</style>
<link rel="stylesheet" id="elementor-post-5-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-56696.css?ver=1717311675') }}" media="all" />
<link rel="stylesheet" id="jet-popup-frontend-css"
    href="{{ asset('wp-content/plugins/jet-popup/assets/css/jet-popup-frontend2846.css?ver=1.5.5') }}" media="all" />
<link rel="stylesheet" id="elementor-post-707-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-70738ed.css?ver=1717311677') }}" media="all" />
<link rel="stylesheet" id="elementor-post-14-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-1434bb.css?ver=1717311678') }}" media="all" />
<link rel="stylesheet" id="elementor-post-12-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-1234bb.css?ver=1717311678') }}" media="all" />
<link rel="stylesheet" id="elementor-post-18-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-1805fa.css?ver=1717311679') }}" media="all" />
<link rel="stylesheet" id="elementor-post-20-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-2005fa.css?ver=1717311679') }}" media="all" />
<link rel="stylesheet" id="elementor-post-1302-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-13028a59.css?ver=1717311680') }}" media="all" />
<link rel="stylesheet" id="elementor-post-19-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-198a59.css?ver=1717311680') }}" media="all" />
<link rel="stylesheet" id="elementor-post-13-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-138a59.css?ver=1717311680') }}" media="all" />
<link rel="stylesheet" id="elementor-post-16-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-165f36.css?ver=1717311681') }}" media="all" />
<link rel="stylesheet" id="elementor-post-942-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-9425f36.css?ver=1717311681') }}" media="all" />
<link rel="stylesheet" id="elementor-post-1310-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-1310b1b3.css?ver=1717311682') }}" media="all" />
<link rel="stylesheet" id="elementor-post-15-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-15b1b3.css?ver=1717311682') }}" media="all" />
<link rel="stylesheet" id="jet-blocks-css"
    href="{{ asset('wp-content/plugins/jet-blocks/assets/css/jet-blocks6f3e.css?ver=1.3.0') }}" media="all" />
<link rel="stylesheet" id="jet-elements-css"
    href="{{ asset('wp-content/plugins/jet-elements/assets/css/jet-elements61da.css?ver=2.6.2') }}" media="all" />
<link rel="stylesheet" id="jet-elements-skin-css"
    href="{{ asset('wp-content/plugins/jet-elements/assets/css/jet-elements-skin61da.css?ver=2.6.2') }}"
    media="all" />
<link rel="stylesheet" id="elementor-icons-css"
    href="{{ asset('wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mind54b.css?ver=5.29.0') }}"
    media="all" />
<link rel="stylesheet" id="swiper-css"
    href="{{ asset('wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5') }}"
    media="all" />
<link rel="stylesheet" id="elementor-pro-css"
    href="{{ asset('wp-content/plugins/elementor-pro/assets/css/frontend-lite.minac9e.css?ver=3.7.7') }}"
    media="all" />
<link rel="stylesheet" id="jet-search-css"
    href="{{ asset('wp-content/plugins/jet-search/assets/css/jet-search202b.css?ver=2.1.15') }}" media="all" />
<link rel="stylesheet" id="jet-tabs-frontend-css"
    href="{{ asset('wp-content/plugins/jet-tabs/assets/css/jet-tabs-frontend202b.css?ver=2.1.15') }}"
    media="all" />
<link rel="stylesheet" id="jet-tricks-frontend-css"
    href="{{ asset('wp-content/plugins/jet-tricks/assets/css/jet-tricks-frontend2fca.css?ver=1.4.0') }}"
    media="all" />
<link rel="stylesheet" id="elementor-global-css"
    href="{{ asset('wp-content/uploads/elementor/css/global251a.css?ver=1717311686') }}" media="all" />
<link rel="stylesheet" id="elementor-post-63-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-633115.css?ver=1717311689') }}" media="all" />
<link rel="stylesheet" id="elementor-post-211-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-2113115.css?ver=1717311689') }}" media="all" />
<link rel="stylesheet" id="elementor-post-227-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-227f32f.css?ver=1717311690') }}" media="all" />
<link rel="stylesheet" id="elementor-post-799-css"
    href="{{ asset('wp-content/uploads/elementor/css/post-799f32f.css?ver=1717311690') }}" media="all" />
<link rel="stylesheet" id="google-fonts-1-css"
    href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.5.5"
    media="all" />
<link rel="stylesheet" id="elementor-icons-shared-0-css"
    href="{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3') }}"
    media="all" />
<link rel="stylesheet" id="elementor-icons-fa-regular-css"
    href="{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3') }}"
    media="all" />
<link rel="stylesheet" id="elementor-icons-fa-solid-css"
    href="{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3') }}"
    media="all" />
<link rel="stylesheet" id="elementor-icons-fa-brands-css"
    href="{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3') }}"
    media="all" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
<script src="{{ asset('wp-content/plugins/elementor-pro/assets/js/page-transitions.minac9e.js?ver=3.7.7') }}"
    id="page-transitions-js"></script>
<link rel="https://api.w.org/" href="wp-json/index.html" />
<link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/63.json" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<meta name="generator" content="WordPress 6.5.5" />
<link rel="canonical" href="index.html" />
<link rel="shortlink" href="index.html" />
<link rel="alternate" type="application/json+oembed"
    href="{{ asset('wp-json/oembed/1.0/embedf255.json?url=https%3A%2F%2Fsekolah.flymotion.my.id%2F') }}" />
<link rel="alternate" type="text/xml+oembed"
    href="{{ asset('wp-json/oembed/1.0/embed7140?url=https%3A%2F%2Fsekolah.flymotion.my.id%2F&amp;format=xml') }}" />
<meta name="generator"
    content="Elementor 3.21.8; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-224781030-1"></script>
<script>
    window.dataLayer = window.dataLayer || []

    function gtag() {
        dataLayer.push(arguments)
    }
    gtag('js', new Date())

    gtag('config', 'UA-224781030-1')
</script>

<meta name="theme-color" content="#2f9edd" />
