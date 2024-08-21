<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>flappyphpant-nativephp</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="color-scheme" content="light only" />
    <meta name="description" content="flappyphpant + PHP-GLFW + Visu + NativePHP" />
    <meta property="og:site_name" content="flappyphpant-nativephp" />
    <meta property="og:title" content="flappyphpant-nativephp" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="flappyphpant + PHP-GLFW + Visu + NativePHP" />
    <meta property="og:image" content="assets/card.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="800" />
    <meta property="twitter:card" content="summary_large_image" />
    <link href="https://fonts.googleapis.com/css2?display=swap&family=Inter:ital,wght@0,400;1,400" rel="stylesheet" type="text/css" />
    <style>
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body {
            -webkit-text-size-adjust: none
        }

        mark {
            background-color: transparent;
            color: inherit
        }

        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            line-height: 1.0;
            min-height: var(--viewport-height);
            min-width: 320px;
            overflow-x: hidden;
            word-wrap: break-word;
        }

        body:before {
            content: '';
            display: block;
            background-attachment: scroll;
            height: var(--background-height);
            left: 0;
            pointer-events: none;
            position: fixed;
            top: 0;
            transform: scale(1);
            width: 100vw;
            z-index: 0;
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg%20viewBox%3D%220%200%20512%20512%22%20width%3D%22512%22%20height%3D%22512%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%20%3Cfilter%20id%3D%22noise%22%3E%20%3CfeTurbulence%20type%3D%22fractalNoise%22%20baseFrequency%3D%220.875%22%20result%3D%22noise%22%20%2F%3E%20%3CfeColorMatrix%20type%3D%22matrix%22%20values%3D%220.21875%200%200%200%200%200%200.21875%200%200%200%200%200%200.21875%200%200%200%200%200%200.30859375%200%22%20%2F%3E%20%3C%2Ffilter%3E%20%3Crect%20filter%3D%22url%28%23noise%29%22%20x%3D%220%22%20y%3D%220%22%20width%3D%22512%22%20height%3D%22512%22%20fill%3D%22transparent%22%20opacity%3D%221%22%20%2F%3E%3C%2Fsvg%3E'), url('assets/card.jpg');
            background-size: 512px, cover;
            background-position: center, center;
            background-repeat: repeat, repeat;
            background-color: #FFFFFF;
        }

        body:after {
            background-color: #788281;
            content: '';
            display: block;
            height: 100%;
            left: 0;
            opacity: 0;
            pointer-events: none;
            position: fixed;
            top: 0;
            transform: scale(1);
            transition: opacity 1s ease-in-out 0.875s, visibility 1s 0.875s;
            visibility: hidden;
            width: 100%;
            z-index: 1;
        }

        body.is-loading:after {
            opacity: 1;
            visibility: visible;
        }

        :root {
            --background-height: 100vh;
            --site-language-alignment: left;
            --site-language-direction: ltr;
            --site-language-flex-alignment: flex-start;
            --site-language-indent-left: 1;
            --site-language-indent-right: 0;
            --site-language-margin-left: 0;
            --site-language-margin-right: auto;
            --viewport-height: 100vh;
        }

        html {
            font-size: 16pt;
        }

        u {
            text-decoration: underline;
        }

        strong {
            color: inherit;
            font-weight: bolder;
        }

        em {
            font-style: italic;
        }

        code {
            background-color: rgba(144, 144, 144, 0.25);
            border-radius: 0.25em;
            font-family: 'Lucida Console', 'Courier New', monospace;
            font-size: 0.9em;
            font-weight: normal;
            letter-spacing: 0;
            margin: 0 0.25em;
            padding: 0.25em 0.5em;
            text-indent: 0;
        }

        mark {
            background-color: rgba(144, 144, 144, 0.25);
        }

        spoiler-text {
            -webkit-text-stroke: 0;
            background-color: rgba(32, 32, 32, 0.75);
            text-shadow: none;
            text-stroke: 0;
            color: transparent;
            cursor: pointer;
            transition: color 0.1s ease-in-out;
        }

        spoiler-text.active {
            color: #FFFFFF;
            cursor: text;
        }

        s {
            text-decoration: line-through;
        }

        sub {
            font-size: smaller;
            vertical-align: sub;
        }

        sup {
            font-size: smaller;
            vertical-align: super;
        }

        a {
            color: inherit;
            text-decoration: underline;
            transition: color 0.25s ease;
        }

        a[onclick]:not([href]) {
            cursor: pointer;
        }

        unloaded-script {
            display: none;
        }

        #wrapper {
            -webkit-overflow-scrolling: touch;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: var(--viewport-height);
            overflow: hidden;
            position: relative;
            z-index: 2;
        }

        #main {
            --alignment: center;
            --flex-alignment: center;
            --indent-left: 1;
            --indent-right: 1;
            --margin-left: auto;
            --margin-right: auto;
            --border-radius-tl: 0;
            --border-radius-tr: 0;
            --border-radius-br: 0;
            --border-radius-bl: 0;
            align-items: center;
            display: flex;
            flex-grow: 0;
            flex-shrink: 0;
            justify-content: center;
            max-width: 100%;
            position: relative;
            text-align: var(--alignment);
            z-index: 1;
            transform: perspective(1000px) rotateY(0deg);
            transform-origin: 50% 50%;
            transition: opacity 1s ease 0s, transform 1s ease 0s;
        }

        #main>.inner {
            --padding-horizontal: 3rem;
            --padding-vertical: 3rem;
            --spacing: 1.5rem;
            --width: 36rem;
            border-radius: var(--border-radius-tl) var(--border-radius-tr) var(--border-radius-br) var(--border-radius-bl);
            max-width: 100%;
            position: relative;
            width: var(--width);
            z-index: 1;
            padding: var(--padding-vertical) var(--padding-horizontal);
        }

        #main>.inner>* {
            margin-top: var(--spacing);
            margin-bottom: var(--spacing);
        }

        #main>.inner> :first-child {
            margin-top: 0 !important;
        }

        #main>.inner> :last-child {
            margin-bottom: 0 !important;
        }

        #main>.inner>.full {
            margin-left: calc(var(--padding-horizontal) * -1);
            max-width: calc(100% + calc(var(--padding-horizontal) * 2) + 0.4725px);
            width: calc(100% + calc(var(--padding-horizontal) * 2) + 0.4725px);
        }

        #main>.inner>.full:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
            margin-top: calc(var(--padding-vertical) * -1) !important;
        }

        #main>.inner>.full:last-child {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
            margin-bottom: calc(var(--padding-vertical) * -1) !important;
        }

        #main>.inner>.full.screen {
            border-radius: 0 !important;
            max-width: 100vw;
            position: relative;
            width: 100vw;
            left: 50%;
            margin-left: -50vw;
            right: auto;
        }

        body.is-loading #main {
            opacity: 0;
            transform: perspective(1000px) rotateY(9deg);
        }

        body #wrapper:after {
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            content: '';
            display: block;
            height: 6.25rem;
            left: calc(50% - 3.125rem);
            opacity: 0;
            pointer-events: none;
            position: fixed;
            top: calc(50% - 3.125rem);
            transition: opacity 1s ease, visibility 1s;
            visibility: hidden;
            width: 6.25rem;
            z-index: 100000;
        }

        body.is-loading {
            pointer-events: none;
        }

        body.is-loading.with-loader #wrapper:after {
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iOTZweCIgaGVpZ2h0PSI5NnB4IiB2aWV3Qm94PSIwIDAgOTYgOTYiIHpvb21BbmRQYW49ImRpc2FibGUiPjxzdHlsZT5jaXJjbGUgeyBmaWxsOiAjRkZGRkZGODA7IH08L3N0eWxlPjxjaXJjbGUgY3g9IjI0IiBjeT0iNDgiIHI9IjMiIG9wYWNpdHk9IjEiPjxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9InIiIGJlZ2luPSIwcyIgZHVyPSIxcyIgdmFsdWVzPSIyOzM7MjsyOzIiIHJlcGVhdER1cj0iaW5kZWZpbml0ZSIgLz48YW5pbWF0ZSBhdHRyaWJ1dGVOYW1lPSJvcGFjaXR5IiBiZWdpbj0iMHMiIGR1cj0iMXMiIHZhbHVlcz0iMC4zNzU7MTswLjM3NTswLjM3NTswLjM3NSIgcmVwZWF0RHVyPSJpbmRlZmluaXRlIiAvPjwvY2lyY2xlPjxjaXJjbGUgY3g9IjM2IiBjeT0iNDgiIHI9IjIiIG9wYWNpdHk9IjAuMzc1Ij48YW5pbWF0ZSBhdHRyaWJ1dGVOYW1lPSJyIiBiZWdpbj0iMC4ycyIgZHVyPSIxcyIgdmFsdWVzPSIyOzM7MjsyOzIiIHJlcGVhdER1cj0iaW5kZWZpbml0ZSIgLz48YW5pbWF0ZSBhdHRyaWJ1dGVOYW1lPSJvcGFjaXR5IiBiZWdpbj0iMC4ycyIgZHVyPSIxcyIgdmFsdWVzPSIwLjM3NTsxOzAuMzc1OzAuMzc1OzAuMzc1IiByZXBlYXREdXI9ImluZGVmaW5pdGUiIC8+PC9jaXJjbGU+PGNpcmNsZSBjeD0iNDgiIGN5PSI0OCIgcj0iMiIgb3BhY2l0eT0iMC4zNzUiPjxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9InIiIGJlZ2luPSIwLjRzIiBkdXI9IjFzIiB2YWx1ZXM9IjI7MzsyOzI7MiIgcmVwZWF0RHVyPSJpbmRlZmluaXRlIiAvPjxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9Im9wYWNpdHkiIGJlZ2luPSIwLjRzIiBkdXI9IjFzIiB2YWx1ZXM9IjAuMzc1OzE7MC4zNzU7MC4zNzU7MC4zNzUiIHJlcGVhdER1cj0iaW5kZWZpbml0ZSIgLz48L2NpcmNsZT48Y2lyY2xlIGN4PSI2MCIgY3k9IjQ4IiByPSIyIiBvcGFjaXR5PSIwLjM3NSI+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0iciIgYmVnaW49IjAuNnMiIGR1cj0iMXMiIHZhbHVlcz0iMjszOzI7MjsyIiByZXBlYXREdXI9ImluZGVmaW5pdGUiIC8+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ib3BhY2l0eSIgYmVnaW49IjAuNnMiIGR1cj0iMXMiIHZhbHVlcz0iMC4zNzU7MTswLjM3NTswLjM3NTswLjM3NSIgcmVwZWF0RHVyPSJpbmRlZmluaXRlIiAvPjwvY2lyY2xlPjxjaXJjbGUgY3g9IjcyIiBjeT0iNDgiIHI9IjIiIG9wYWNpdHk9IjAuMzc1Ij48YW5pbWF0ZSBhdHRyaWJ1dGVOYW1lPSJyIiBiZWdpbj0iMC44cyIgZHVyPSIxcyIgdmFsdWVzPSIyOzM7MjsyOzIiIHJlcGVhdER1cj0iaW5kZWZpbml0ZSIgLz48YW5pbWF0ZSBhdHRyaWJ1dGVOYW1lPSJvcGFjaXR5IiBiZWdpbj0iMC44cyIgZHVyPSIxcyIgdmFsdWVzPSIwLjM3NTsxOzAuMzc1OzAuMzc1OzAuMzc1IiByZXBlYXREdXI9ImluZGVmaW5pdGUiIC8+PC9jaXJjbGU+PC9zdmc+');
            opacity: 1;
            transform: scale(1.0);
            visibility: visible;
        }

        body.is-playing.with-loader #wrapper:after {
            opacity: 0;
            transform: scale(0.5);
            transition: opacity 0.25s ease, transform 0.75s ease, visibility 0.25s;
            visibility: hidden;
        }

        body.is-instant #main,
        body.is-instant #main>.inner>*,
        body.is-instant #main>.inner>section>* {
            transition: none !important;
        }

        body.is-instant:after {
            display: none !important;
            transition: none !important;
        }

        .image {
            display: block;
            line-height: 0;
            max-width: 100%;
            position: relative;
        }

        .image .frame {
            -webkit-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            display: inline-block;
            max-width: 100%;
            overflow: hidden;
            vertical-align: top;
            width: 100%;
        }

        .image .frame img {
            border-radius: 0 !important;
            max-width: 100%;
            vertical-align: top;
            width: inherit;
        }

        .image.full .frame {
            display: block;
        }

        .image.full:first-child .frame {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .image.full:last-child .frame {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #image01:not(:first-child) {
            margin-top: 1.5rem !important;
        }

        #image01:not(:last-child) {
            margin-bottom: 1.5rem !important;
        }

        #image01 .frame {
            width: 6rem;
            border-radius: 100%;
            border-color: #FFFFFF;
            border-style: solid;
            border-width: 4px;
            transition: none;
        }

        #image01 .frame img {
            transition: none;
        }

        .buttons {
            cursor: default;
            display: flex;
            justify-content: var(--flex-alignment);
            letter-spacing: 0;
            padding: 0;
        }

        .buttons li {
            max-width: 100%;
            text-align: var(--alignment);
        }

        .buttons li a {
            align-items: center;
            justify-content: center;
            max-width: 100%;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            white-space: nowrap;
        }

        #buttons01 {
            gap: 1rem;
            flex-direction: column;
            flex-wrap: nowrap;
        }

        #buttons01:not(:first-child) {
            margin-top: 1.75rem !important;
        }

        #buttons01:not(:last-child) {
            margin-bottom: 1.75rem !important;
        }

        #buttons01 li a {
            display: inline-flex;
            width: auto;
            height: 3rem;
            line-height: 3rem;
            padding: 0 1.5rem;
            vertical-align: middle;
            font-family: 'Inter', sans-serif;
            font-size: 1em;
            font-weight: 400;
            border-radius: 2.5rem;
            transition: transform 0.25s ease, color 0.25s ease, background-color 0.25s ease, border-color 0.25s ease;
        }

        #buttons01 li a svg {
            display: block;
            fill: #FFFFFF;
            flex-grow: 0;
            flex-shrink: 0;
            height: 100%;
            min-width: 16px;
            width: 1.25em;
            margin-left: -0.125em;
            margin-right: calc(1rem + 0rem);
            transition: fill 0.25s ease;
        }

        #buttons01 li a .label {
            direction: var(--site-language-direction);
            overflow: hidden;
        }

        #buttons01 .button {
            background-color: rgba(255, 255, 255, 0.102);
            color: #FFFFFF;
        }

        #buttons01 .button:hover {
            background-color: rgba(255, 255, 255, 0.18) !important;
        }

        #buttons01 li a:hover {
            transform: scale(1.025);
        }

        .container {
            position: relative;
        }

        .container>.wrapper {
            vertical-align: top;
            position: relative;
            max-width: 100%;
            border-radius: inherit;
        }

        .container>.wrapper>.inner {
            vertical-align: top;
            position: relative;
            max-width: 100%;
            border-radius: inherit;
            text-align: var(--alignment);
        }

        #main .container.full:first-child>.wrapper {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #main .container.full:last-child>.wrapper {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #main .container.full:first-child>.wrapper>.inner {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #main .container.full:last-child>.wrapper>.inner {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #container01 {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg%20viewBox%3D%220%200%20512%20512%22%20width%3D%22512%22%20height%3D%22512%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%20%3Cfilter%20id%3D%22noise%22%3E%20%3CfeTurbulence%20type%3D%22fractalNoise%22%20baseFrequency%3D%220.875%22%20result%3D%22noise%22%20%2F%3E%20%3CfeColorMatrix%20type%3D%22matrix%22%20values%3D%220.21875%200%200%200%200%200%200.21875%200%200%200%200%200%200.21875%200%200%200%200%200%200.30859375%200%22%20%2F%3E%20%3C%2Ffilter%3E%20%3Crect%20filter%3D%22url%28%23noise%29%22%20x%3D%220%22%20y%3D%220%22%20width%3D%22512%22%20height%3D%22512%22%20fill%3D%22transparent%22%20opacity%3D%221%22%20%2F%3E%3C%2Fsvg%3E'), linear-gradient(0deg, rgba(46, 46, 46, 0.212) 50%, rgba(227, 227, 227, 0.102) 100%);
            background-size: 512px, cover;
            background-position: center, 0% 0%;
            background-repeat: repeat, repeat;
            -webkit-backdrop-filter: blur(0.75rem);
            backdrop-filter: blur(0.75rem);
            box-shadow: 0rem 1.375rem 10rem 0rem rgba(0, 0, 0, 0.31);
            border-top-left-radius: 1.5rem;
            border-top-right-radius: 1.5rem;
        }

        #container01:not(:last-child) {
            margin-bottom: 0rem !important;
        }

        #container01>.wrapper>.inner {
            --gutters: 2rem;
            --padding-horizontal: 3rem;
            --padding-vertical: 4rem;
            --spacing: 1rem;
            padding: var(--padding-vertical) var(--padding-horizontal);
            border-top-left-radius: calc(1.5rem - 1px);
            border-top-right-radius: calc(1.5rem - 1px);
        }

        #container01>.wrapper {
            max-width: 30rem;
            width: 100%;
        }

        #container01.default>.wrapper>.inner>* {
            margin-bottom: var(--spacing);
            margin-top: var(--spacing);
        }

        #container01.default>.wrapper>.inner>*:first-child {
            margin-top: 0 !important;
        }

        #container01.default>.wrapper>.inner>*:last-child {
            margin-bottom: 0 !important;
        }

        #container01.columns>.wrapper>.inner {
            flex-wrap: wrap;
            display: flex;
            align-items: flex-start;
        }

        #container01.columns>.wrapper>.inner>* {
            flex-grow: 0;
            flex-shrink: 0;
            max-width: 100%;
            text-align: var(--alignment);
            padding: 0 0 0 var(--gutters);
        }

        #container01.columns>.wrapper>.inner>*>* {
            margin-bottom: var(--spacing);
            margin-top: var(--spacing);
        }

        #container01.columns>.wrapper>.inner>*>*:first-child {
            margin-top: 0 !important;
        }

        #container01.columns>.wrapper>.inner>*>*:last-child {
            margin-bottom: 0 !important;
        }

        #container01.columns>.wrapper>.inner>*:first-child {
            margin-left: calc(var(--gutters) * -1);
        }

        #container01.default>.wrapper>.inner>.full {
            margin-left: calc(var(--padding-horizontal) * -1);
            max-width: none !important;
            width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
        }

        #container01.default>.wrapper>.inner>.full:first-child {
            margin-top: calc(var(--padding-vertical) * -1) !important;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        #container01.default>.wrapper>.inner>.full:last-child {
            margin-bottom: calc(var(--padding-vertical) * -1) !important;
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>div>.full {
            margin-left: calc(var(--gutters) * -0.5);
            max-width: none !important;
            width: calc(100% + var(--gutters) + 0.4725px);
        }

        #container01.columns>.wrapper>.inner>div:first-child>.full {
            margin-left: calc(var(--padding-horizontal) * -1);
            width: calc(100% + var(--padding-horizontal) + calc(var(--gutters) * 0.5) + 0.4725px);
        }

        #container01.columns>.wrapper>.inner>div:last-child>.full {
            width: calc(100% + var(--padding-horizontal) + calc(var(--gutters) * 0.5) + 0.4725px);
        }

        #container01.columns>.wrapper>.inner>div>.full:first-child {
            margin-top: calc(var(--padding-vertical) * -1) !important;
        }

        #container01.columns>.wrapper>.inner>div>.full:last-child {
            margin-bottom: calc(var(--padding-vertical) * -1) !important;
        }

        #container01.columns>.wrapper>.inner>div:first-child,
        #container01.columns>.wrapper>.inner>div:first-child>.full:first-child {
            border-top-left-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>div:last-child,
        #container01.columns>.wrapper>.inner>div:last-child>.full:first-child {
            border-top-right-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>.full {
            align-self: stretch;
        }

        #container01.columns>.wrapper>.inner>.full:first-child {
            border-bottom-left-radius: inherit;
            border-top-left-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>.full:last-child {
            border-bottom-right-radius: inherit;
            border-top-right-radius: inherit;
        }

        #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child {
            border-radius: inherit;
            height: calc(100% + (var(--padding-vertical) * 2));
        }

        #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
            border-radius: inherit;
            height: 100%;
            position: absolute;
            width: 100%;
        }

        .icc-credits {
            display: block;
            opacity: 1 !important;
            position: relative;
            transition-delay: 0s !important;
        }

        .icc-credits span {
            border-radius: 24px;
            cursor: pointer;
            display: inline-block;
            font-family: Arial, sans-serif;
            font-size: 12px;
            letter-spacing: 0;
            line-height: 1;
            position: relative;
            text-decoration: none;
            width: auto;
        }

        .icc-credits span a {
            display: inline-block;
            padding: 0.5em 0.375em;
            position: relative;
            text-decoration: none;
            transition: color 0.25s ease, transform 0.25s ease;
            z-index: 1;
        }

        .icc-credits span a:before {
            content: '( ';
            opacity: 1;
            transition: opacity 0.25s ease;
        }

        .icc-credits span a:after {
            content: ' )';
            opacity: 1;
            transition: opacity 0.25s ease;
        }

        .icc-credits span::after {
            background-image: linear-gradient(30deg, #A464A1 15%, #3B5DAD 85%);
            border-radius: inherit;
            box-shadow: 0 0.25em 1.25em 0 rgba(0, 0, 0, 0.25);
            content: '';
            display: block;
            height: calc(100% + 2px);
            left: -1px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: -1px;
            transition: opacity 0.25s ease, box-shadow 0.25s ease, transform 0.25s ease;
            width: calc(100% + 2px);
        }

        .icc-credits span:hover {
            text-transform: none !important;
        }

        .icc-credits span:hover a {
            color: #ffffff !important;
            transform: scale(1.1) translateY(-0.05rem);
        }

        .icc-credits span:hover a:before {
            opacity: 0;
        }

        .icc-credits span:hover a:after {
            opacity: 0;
        }

        .icc-credits span:hover::after {
            opacity: 1;
            transform: scale(1.1) translateY(-0.05rem);
        }

        #credits span {
            background-color: rgba(80, 80, 80, 0.5);
            color: rgba(224, 224, 224, 0.75);
            margin-top: 1.5rem !important;
        }

        #credits span a:before {
            opacity: 0;
        }

        #credits span a:after {
            opacity: 0;
        }

        @media (max-width: 1920px) {}

        @media (max-width: 1680px) {
            html {
                font-size: 12pt;
            }
        }

        @media (max-width: 1280px) {
            html {
                font-size: 12pt;
            }
        }

        @media (max-width: 1024px) {}

        @media (max-width: 980px) {
            html {
                font-size: 10pt;
            }
        }

        @media (max-width: 736px) {
            html {
                font-size: 11pt;
            }

            #main>.inner {
                --padding-horizontal: 1.5rem;
                --padding-vertical: 1.5rem;
                --spacing: 1.5rem;
            }

            #image01:not(:first-child) {
                margin-top: 1.125rem !important;
            }

            #image01:not(:last-child) {
                margin-bottom: 1.125rem !important;
            }

            #image01 .frame {
                width: 6rem;
            }

            #buttons01 {
                gap: 1rem;
            }

            #buttons01:not(:first-child) {
                margin-top: 1.3125rem !important;
            }

            #buttons01:not(:last-child) {
                margin-bottom: 1.3125rem !important;
            }

            #buttons01 li a {
                letter-spacing: 0rem;
                font-size: 1em;
            }

            #buttons01 li a svg {
                width: 1.25em;
            }

            #container01 {
                --alignment: center;
                --flex-alignment: center;
                --indent-left: 1;
                --indent-right: 1;
                --margin-left: auto;
                --margin-right: auto;
                min-height: 27rem;
            }

            #container01:not(:last-child) {
                margin-bottom: 0rem !important;
            }

            #container01>.wrapper>.inner {
                --gutters: 2rem;
                --padding-horizontal: 2rem;
                --padding-vertical: 3.5rem;
                --spacing: 1rem;
            }

            #container01.columns>.wrapper>.inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }

            #container01.columns>.wrapper>.inner>span {
                height: 0;
                margin-top: calc(var(--gutters) * -1);
                pointer-events: none;
                visibility: hidden;
            }

            #container01.columns>.wrapper>.inner>*:first-child {
                margin-left: 0 !important;
                padding-top: 0 !important;
            }

            #container01.columns>.wrapper>.inner>* {
                padding: calc(var(--gutters) * 0.5) 0 !important;
            }

            #container01.columns>.wrapper>.inner>*:last-child {
                padding-bottom: 0 !important;
            }

            #container01.columns>.wrapper>.inner>div>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            #container01.columns>.wrapper>.inner>div:first-of-type>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            #container01.columns>.wrapper>.inner>div:last-of-type>.full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }

            #container01.columns>.wrapper>.inner>div>.full:first-child {
                margin-top: calc(var(--gutters) * -0.5) !important;
            }

            #container01.columns>.wrapper>.inner>div>.full:last-child {
                margin-bottom: calc(var(--gutters) * -0.5) !important;
            }

            #container01.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                margin-top: calc(var(--padding-vertical) * -1) !important;
            }

            #container01.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                margin-bottom: calc(var(--padding-vertical) * -1) !important;
            }

            #container01.columns>.wrapper>.inner>div:first-of-type,
            #container01.columns>.wrapper>.inner>div:first-of-type>.full:first-child {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }

            #container01.columns>.wrapper>.inner>div:last-of-type,
            #container01.columns>.wrapper>.inner>div:last-of-type>.full:last-child {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }

            #container01.columns>.wrapper>.inner>div:first-of-type,
            #container01.columns>.wrapper>.inner>div:first-of-type>.full:last-child {
                border-bottom-left-radius: 0 !important;
            }

            #container01.columns>.wrapper>.inner>div:last-of-type,
            #container01.columns>.wrapper>.inner>div:last-of-type>.full:first-child {
                border-top-right-radius: 0 !important;
            }

            #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child {
                height: auto;
            }

            #container01.columns>.wrapper>.inner>.full>.full:first-child:last-child>* {
                height: auto;
                position: relative;
                width: auto;
            }
        }

        @media (max-width: 480px) {
            #main>.inner {
                --spacing: 1.3125rem;
            }

            #container01>.wrapper>.inner {
                --spacing: 0.875rem;
            }
        }

        @media (max-width: 360px) {
            #main>.inner {
                --padding-horizontal: 1.125rem;
                --padding-vertical: 1.125rem;
                --spacing: 1.125rem;
            }

            #buttons01 {
                gap: 0.75rem;
            }

            #container01>.wrapper>.inner {
                --gutters: 1.5rem;
                --padding-horizontal: 1.5rem;
                --padding-vertical: 2.625rem;
                --spacing: 0.75rem;
            }

            #container01 {
                min-height: 20.25rem;
            }
        }
    </style>
    <noscript>
        <style>
            body {
                overflow: auto !important;
            }

            body:after {
                display: none !important;
            }

            #main>.inner {
                opacity: 1.0 !important;
            }

            #main {
                opacity: 1.0 !important;
                transform: none !important;
                transition: none !important;
                filter: none !important;
            }
        </style>
    </noscript>
</head>
<body class="is-loading">
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" display="none" width="0" height="0">
    <symbol id="icon-52655f31fd82f82d1c86cb188764da1e" viewBox="0 0 40 40">
        <path d="M36.1,21.3c1.5-0.7,1.5-1.9,0-2.6L10.5,6.3C9,5.6,7.8,6.2,7.8,7.6l0,24.8c0,1.4,1.2,2,2.7,1.3L36.1,21.3z" />
    </symbol>
</svg>
<div id="wrapper">
    <div id="main">
        <div class="inner">
            <div id="container01" class="container default">
                <div class="wrapper">
                    <div class="inner">
                        <div id="image01" class="image">
                  <span class="frame">
                    <img src="assets/image.jpg" alt="" />
                  </span>
                        </div>
                        <ul id="buttons01" class="buttons">
                            <li>
                                @yield('content', 'Default content')
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function() {
        var on = addEventListener,
            off = removeEventListener,
            $ = function(q) {
                return document.querySelector(q)
            },
            $$ = function(q) {
                return document.querySelectorAll(q)
            },
            $body = document.body,
            $inner = $('.inner'),
            client = (function() {
                var o = {
                        browser: 'other',
                        browserVersion: 0,
                        os: 'other',
                        osVersion: 0,
                        mobile: false,
                        canUse: null,
                        flags: {
                            lsdUnits: false,
                        },
                    },
                    ua = navigator.userAgent,
                    a, i;
                a = [
                    ['firefox', /Firefox\/([0-9\.]+)/],
                    ['edge', /Edge\/([0-9\.]+)/],
                    ['safari', /Version\/([0-9\.]+).+Safari/],
                    ['chrome', /Chrome\/([0-9\.]+)/],
                    ['chrome', /CriOS\/([0-9\.]+)/],
                    ['ie', /Trident\/.+rv:([0-9]+)/]
                ];
                for (i = 0; i < a.length; i++) {
                    if (ua.match(a[i][1])) {
                        o.browser = a[i][0];
                        o.browserVersion = parseFloat(RegExp.$1);
                        break;
                    }
                }
                a = [
                    ['ios', /([0-9_]+) like Mac OS X/, function(v) {
                        return v.replace('_', '.').replace('_', '');
                    }],
                    ['ios', /CPU like Mac OS X/, function(v) {
                        return 0
                    }],
                    ['ios', /iPad; CPU/, function(v) {
                        return 0
                    }],
                    ['android', /Android ([0-9\.]+)/, null],
                    ['mac', /Macintosh.+Mac OS X ([0-9_]+)/, function(v) {
                        return v.replace('_', '.').replace('_', '');
                    }],
                    ['windows', /Windows NT ([0-9\.]+)/, null],
                    ['undefined', /Undefined/, null]
                ];
                for (i = 0; i < a.length; i++) {
                    if (ua.match(a[i][1])) {
                        o.os = a[i][0];
                        o.osVersion = parseFloat(a[i][2] ? (a[i][2])(RegExp.$1) : RegExp.$1);
                        break;
                    }
                }
                if (o.os == 'mac' && ('ontouchstart' in window) && ((screen.width == 1024 && screen.height == 1366) || (screen.width == 834 && screen.height == 1112) || (screen.width == 810 && screen.height == 1080) || (screen.width == 768 && screen.height == 1024))) o.os = 'ios';
                o.mobile = (o.os == 'android' || o.os == 'ios');
                var _canUse = document.createElement('div');
                o.canUse = function(property, value) {
                    var style;
                    style = _canUse.style;
                    if (!(property in style)) return false;
                    if (typeof value !== 'undefined') {
                        style[property] = value;
                        if (style[property] == '') return false;
                    }
                    return true;
                };
                o.flags.lsdUnits = o.canUse('width', '100dvw');
                return o;
            }()),
            ready = {
                list: [],
                add: function(f) {
                    this.list.push(f);
                },
                run: function() {
                    this.list.forEach((f) => {
                        f();
                    });
                },
            },
            trigger = function(t) {
                dispatchEvent(new Event(t));
            },
            cssRules = function(selectorText) {
                var ss = document.styleSheets,
                    a = [],
                    f = function(s) {
                        var r = s.cssRules,
                            i;
                        for (i = 0; i < r.length; i++) {
                            if (r[i] instanceof CSSMediaRule && matchMedia(r[i].conditionText).matches)(f)(r[i]);
                            else if (r[i] instanceof CSSStyleRule && r[i].selectorText == selectorText) a.push(r[i]);
                        }
                    },
                    x, i;
                for (i = 0; i < ss.length; i++) f(ss[i]);
                return a;
            },
            escapeHtml = function(s) {
                if (s === '' || s === null || s === undefined) return '';
                var a = {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#39;',
                };
                s = s.replace(/[&<>"']/g, function(x) {
                    return a[x];
                });
                return s;
            },
            thisHash = function() {
                var h = location.hash ? location.hash.substring(1) : null,
                    a;
                if (!h) return null;
                if (h.match(/\?/)) {
                    a = h.split('?');
                    h = a[0];
                    history.replaceState(undefined, undefined, '#' + h);
                    window.location.search = a[1];
                }
                if (h.length > 0 && !h.match(/^[a-zA-Z]/)) h = 'x' + h;
                if (typeof h == 'string') h = h.toLowerCase();
                return h;
            },
            scrollToElement = function(e, style, duration) {
                var y, cy, dy, start, easing, offset, f;
                if (!e) y = 0;
                else {
                    offset = (e.dataset.scrollOffset ? parseInt(e.dataset.scrollOffset) : 0) * parseFloat(getComputedStyle(document.documentElement).fontSize);
                    switch (e.dataset.scrollBehavior ? e.dataset.scrollBehavior : 'default') {
                        case 'default':
                        default:
                            y = e.offsetTop + offset;
                            break;
                        case 'center':
                            if (e.offsetHeight < window.innerHeight) y = e.offsetTop - ((window.innerHeight - e.offsetHeight) / 2) + offset;
                            else y = e.offsetTop - offset;
                            break;
                        case 'previous':
                            if (e.previousElementSibling) y = e.previousElementSibling.offsetTop + e.previousElementSibling.offsetHeight + offset;
                            else y = e.offsetTop + offset;
                            break;
                    }
                }
                if (!style) style = 'smooth';
                if (!duration) duration = 750;
                if (style == 'instant') {
                    window.scrollTo(0, y);
                    return;
                }
                start = Date.now();
                cy = window.scrollY;
                dy = y - cy;
                switch (style) {
                    case 'linear':
                        easing = function(t) {
                            return t
                        };
                        break;
                    case 'smooth':
                        easing = function(t) {
                            return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1
                        };
                        break;
                }
                f = function() {
                    var t = Date.now() - start;
                    if (t >= duration) window.scroll(0, y);
                    else {
                        window.scroll(0, cy + (dy * easing(t / duration)));
                        requestAnimationFrame(f);
                    }
                };
                f();
            },
            scrollToTop = function() {
                scrollToElement(null);
            },
            loadElements = function(parent) {
                var a, e, x, i;
                a = parent.querySelectorAll('iframe[data-src]:not([data-src=""])');
                for (i = 0; i < a.length; i++) {
                    a[i].contentWindow.location.replace(a[i].dataset.src);
                    a[i].dataset.initialSrc = a[i].dataset.src;
                    a[i].dataset.src = '';
                }
                a = parent.querySelectorAll('video[autoplay]');
                for (i = 0; i < a.length; i++) {
                    if (a[i].paused) a[i].play();
                }
                e = parent.querySelector('[data-autofocus="1"]');
                x = e ? e.tagName : null;
                switch (x) {
                    case 'FORM':
                        e = e.querySelector('.field input, .field select, .field textarea');
                        if (e) e.focus();
                        break;
                    default:
                        break;
                }
                a = parent.querySelectorAll('unloaded-script');
                for (i = 0; i < a.length; i++) {
                    x = document.createElement('script');
                    x.setAttribute('data-loaded', '');
                    if (a[i].getAttribute('src')) x.setAttribute('src', a[i].getAttribute('src'));
                    if (a[i].textContent) x.textContent = a[i].textContent;
                    a[i].replaceWith(x);
                }
                x = new Event('loadelements');
                a = parent.querySelectorAll('[data-unloaded]');
                a.forEach((element) => {
                    element.removeAttribute('data-unloaded');
                    element.dispatchEvent(x);
                });
            },
            unloadElements = function(parent) {
                var a, e, x, i;
                a = parent.querySelectorAll('iframe[data-src=""]');
                for (i = 0; i < a.length; i++) {
                    if (a[i].dataset.srcUnload === '0') continue;
                    if ('initialSrc' in a[i].dataset) a[i].dataset.src = a[i].dataset.initialSrc;
                    else a[i].dataset.src = a[i].src;
                    a[i].contentWindow.location.replace('about:blank');
                }
                a = parent.querySelectorAll('video');
                for (i = 0; i < a.length; i++) {
                    if (!a[i].paused) a[i].pause();
                }
                e = $(':focus');
                if (e) e.blur();
            };
        window._scrollToTop = scrollToTop;
        var thisUrl = function() {
            return window.location.href.replace(window.location.search, '').replace(/#$/, '');
        };
        var getVar = function(name) {
            var a = window.location.search.substring(1).split('&'),
                b, k;
            for (k in a) {
                b = a[k].split('=');
                if (b[0] == name) return b[1];
            }
            return null;
        };
        var errors = {
            handle: function(handler) {
                window.onerror = function(message, url, line, column, error) {
                    (handler)(error.message);
                    return true;
                };
            },
            unhandle: function() {
                window.onerror = null;
            }
        };
        var loaderTimeout = setTimeout(function() {
            $body.classList.add('with-loader');
        }, 500);
        var loadHandler = function() {
            setTimeout(function() {
                clearTimeout(loaderTimeout);
                $body.classList.remove('is-loading');
                $body.classList.add('is-playing');
                setTimeout(function() {
                    $body.classList.remove('with-loader');
                    $body.classList.remove('is-playing');
                    $body.classList.add('is-ready');
                }, 1875);
            }, 100);
        };
        on('load', loadHandler);
        loadElements(document.body);
        var style, sheet, rule;
        style = document.createElement('style');
        style.appendChild(document.createTextNode(''));
        document.head.appendChild(style);
        sheet = style.sheet;
        if (client.mobile) {
            (function() {
                if (client.flags.lsdUnits) {
                    document.documentElement.style.setProperty('--viewport-height', '100svh');
                    document.documentElement.style.setProperty('--background-height', '100lvh');
                } else {
                    var f = function() {
                        document.documentElement.style.setProperty('--viewport-height', window.innerHeight + 'px');
                        document.documentElement.style.setProperty('--background-height', (window.innerHeight + 250) + 'px');
                    };
                    on('load', f);
                    on('orientationchange', function() {
                        setTimeout(function() {
                            (f)();
                        }, 100);
                    });
                }
            })();
        }
        if (client.os == 'android') {
            (function() {
                sheet.insertRule('body::after { }', 0);
                rule = sheet.cssRules[0];
                var f = function() {
                    rule.style.cssText = 'height: ' + (Math.max(screen.width, screen.height)) + 'px';
                };
                on('load', f);
                on('orientationchange', f);
                on('touchmove', f);
            })();
            $body.classList.add('is-touch');
        } else if (client.os == 'ios') {
            if (client.osVersion <= 11)(function() {
                sheet.insertRule('body::after { }', 0);
                rule = sheet.cssRules[0];
                rule.style.cssText = '-webkit-transform: scale(1.0)';
            })();
            if (client.osVersion <= 11)(function() {
                sheet.insertRule('body.ios-focus-fix::before { }', 0);
                rule = sheet.cssRules[0];
                rule.style.cssText = 'height: calc(100% + 60px)';
                on('focus', function(event) {
                    $body.classList.add('ios-focus-fix');
                }, true);
                on('blur', function(event) {
                    $body.classList.remove('ios-focus-fix');
                }, true);
            })();
            $body.classList.add('is-touch');
        }
        var scrollEvents = {
            items: [],
            add: function(o) {
                this.items.push({
                    element: o.element,
                    triggerElement: (('triggerElement' in o && o.triggerElement) ? o.triggerElement : o.element),
                    enter: ('enter' in o ? o.enter : null),
                    leave: ('leave' in o ? o.leave : null),
                    mode: ('mode' in o ? o.mode : 4),
                    threshold: ('threshold' in o ? o.threshold : 0.25),
                    offset: ('offset' in o ? o.offset : 0),
                    initialState: ('initialState' in o ? o.initialState : null),
                    state: false,
                });
            },
            handler: function() {
                var height, top, bottom, scrollPad;
                if (client.os == 'ios') {
                    height = document.documentElement.clientHeight;
                    top = document.body.scrollTop + window.scrollY;
                    bottom = top + height;
                    scrollPad = 125;
                } else {
                    height = document.documentElement.clientHeight;
                    top = document.documentElement.scrollTop;
                    bottom = top + height;
                    scrollPad = 0;
                }
                scrollEvents.items.forEach(function(item) {
                    var elementTop, elementBottom, viewportTop, viewportBottom, bcr, pad, state, a, b;
                    if (!item.enter && !item.leave) return true;
                    if (!item.triggerElement) return true;
                    if (item.triggerElement.offsetParent === null) {
                        if (item.state == true && item.leave) {
                            item.state = false;
                            (item.leave).apply(item.element);
                            if (!item.enter) item.leave = null;
                        }
                        return true;
                    }
                    bcr = item.triggerElement.getBoundingClientRect();
                    elementTop = top + Math.floor(bcr.top);
                    elementBottom = elementTop + bcr.height;
                    if (item.initialState !== null) {
                        state = item.initialState;
                        item.initialState = null;
                    } else {
                        switch (item.mode) {
                            case 1:
                            default:
                                state = (bottom > (elementTop - item.offset) && top < (elementBottom + item.offset));
                                break;
                            case 2:
                                a = (top + (height * 0.5));
                                state = (a > (elementTop - item.offset) && a < (elementBottom + item.offset));
                                break;
                            case 3:
                                a = top + (height * (item.threshold));
                                if (a - (height * 0.375) <= 0) a = 0;
                                b = top + (height * (1 - item.threshold));
                                if (b + (height * 0.375) >= document.body.scrollHeight - scrollPad) b = document.body.scrollHeight + scrollPad;
                                state = (b > (elementTop - item.offset) && a < (elementBottom + item.offset));
                                break;
                            case 4:
                                pad = height * item.threshold;
                                viewportTop = (top + pad);
                                viewportBottom = (bottom - pad);
                                if (Math.floor(top) <= pad) viewportTop = top;
                                if (Math.ceil(bottom) >= (document.body.scrollHeight - pad)) viewportBottom = bottom;
                                if ((viewportBottom - viewportTop) >= (elementBottom - elementTop)) {
                                    state = ((elementTop >= viewportTop && elementBottom <= viewportBottom) || (elementTop >= viewportTop && elementTop <= viewportBottom) || (elementBottom >= viewportTop && elementBottom <= viewportBottom));
                                } else state = ((viewportTop >= elementTop && viewportBottom <= elementBottom) || (elementTop >= viewportTop && elementTop <= viewportBottom) || (elementBottom >= viewportTop && elementBottom <= viewportBottom));
                                break;
                        }
                    }
                    if (state != item.state) {
                        item.state = state;
                        if (item.state) {
                            if (item.enter) {
                                (item.enter).apply(item.element);
                                if (!item.leave) item.enter = null;
                            }
                        } else {
                            if (item.leave) {
                                (item.leave).apply(item.element);
                                if (!item.enter) item.leave = null;
                            }
                        }
                    }
                });
            },
            init: function() {
                on('load', this.handler);
                on('resize', this.handler);
                on('scroll', this.handler);
                (this.handler)();
            }
        };
        scrollEvents.init();
        var onvisible = {
            effects: {
                'blur-in': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'filter ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.opacity = 0;
                        this.style.filter = 'blur(' + (0.25 * intensity) + 'rem)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.filter = 'none';
                    },
                },
                'zoom-in': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity, alt) {
                        this.style.opacity = 0;
                        this.style.transform = 'scale(' + (1 - ((alt ? 0.25 : 0.05) * intensity)) + ')';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'zoom-out': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity, alt) {
                        this.style.opacity = 0;
                        this.style.transform = 'scale(' + (1 + ((alt ? 0.25 : 0.05) * intensity)) + ')';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'slide-left': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function() {
                        this.style.transform = 'translateX(100vw)';
                    },
                    play: function() {
                        this.style.transform = 'none';
                    },
                },
                'slide-right': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function() {
                        this.style.transform = 'translateX(-100vw)';
                    },
                    play: function() {
                        this.style.transform = 'none';
                    },
                },
                'flip-forward': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity, alt) {
                        this.style.opacity = 0;
                        this.style.transformOrigin = '50% 50%';
                        this.style.transform = 'perspective(1000px) rotateX(' + ((alt ? 45 : 15) * intensity) + 'deg)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'flip-backward': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity, alt) {
                        this.style.opacity = 0;
                        this.style.transformOrigin = '50% 50%';
                        this.style.transform = 'perspective(1000px) rotateX(' + ((alt ? -45 : -15) * intensity) + 'deg)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'flip-left': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity, alt) {
                        this.style.opacity = 0;
                        this.style.transformOrigin = '50% 50%';
                        this.style.transform = 'perspective(1000px) rotateY(' + ((alt ? 45 : 15) * intensity) + 'deg)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'flip-right': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity, alt) {
                        this.style.opacity = 0;
                        this.style.transformOrigin = '50% 50%';
                        this.style.transform = 'perspective(1000px) rotateY(' + ((alt ? -45 : -15) * intensity) + 'deg)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'tilt-left': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity, alt) {
                        this.style.opacity = 0;
                        this.style.transform = 'rotate(' + ((alt ? 45 : 5) * intensity) + 'deg)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'tilt-right': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity, alt) {
                        this.style.opacity = 0;
                        this.style.transform = 'rotate(' + ((alt ? -45 : -5) * intensity) + 'deg)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'fade-right': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.opacity = 0;
                        this.style.transform = 'translateX(' + (-1.5 * intensity) + 'rem)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'fade-left': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.opacity = 0;
                        this.style.transform = 'translateX(' + (1.5 * intensity) + 'rem)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'fade-down': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.opacity = 0;
                        this.style.transform = 'translateY(' + (-1.5 * intensity) + 'rem)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'fade-up': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.opacity = 0;
                        this.style.transform = 'translateY(' + (1.5 * intensity) + 'rem)';
                    },
                    play: function() {
                        this.style.opacity = 1;
                        this.style.transform = 'none';
                    },
                },
                'fade-in': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'opacity ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function() {
                        this.style.opacity = 0;
                    },
                    play: function() {
                        this.style.opacity = 1;
                    },
                },
                'fade-in-background': {
                    type: 'manual',
                    rewind: function() {
                        this.style.removeProperty('--onvisible-delay');
                        this.style.removeProperty('--onvisible-background-color');
                    },
                    play: function(speed, delay) {
                        this.style.setProperty('--onvisible-speed', speed + 's');
                        if (delay) this.style.setProperty('--onvisible-delay', delay + 's');
                        this.style.setProperty('--onvisible-background-color', 'rgba(0,0,0,0.001)');
                    },
                },
                'zoom-in-image': {
                    type: 'transition',
                    target: 'img',
                    transition: function(speed, delay) {
                        return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function() {
                        this.style.transform = 'scale(1)';
                    },
                    play: function(intensity) {
                        this.style.transform = 'scale(' + (1 + (0.1 * intensity)) + ')';
                    },
                },
                'zoom-out-image': {
                    type: 'transition',
                    target: 'img',
                    transition: function(speed, delay) {
                        return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.transform = 'scale(' + (1 + (0.1 * intensity)) + ')';
                    },
                    play: function() {
                        this.style.transform = 'none';
                    },
                },
                'focus-image': {
                    type: 'transition',
                    target: 'img',
                    transition: function(speed, delay) {
                        return 'transform ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '') + ', ' + 'filter ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.transform = 'scale(' + (1 + (0.05 * intensity)) + ')';
                        this.style.filter = 'blur(' + (0.25 * intensity) + 'rem)';
                    },
                    play: function(intensity) {
                        this.style.transform = 'none';
                        this.style.filter = 'none';
                    },
                },
                'wipe-up': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'mask-size ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.maskComposite = 'exclude';
                        this.style.maskRepeat = 'no-repeat';
                        this.style.maskImage = 'linear-gradient(0deg, black 100%, transparent 100%)';
                        this.style.maskPosition = '0% 100%';
                        this.style.maskSize = '100% 0%';
                    },
                    play: function() {
                        this.style.maskSize = '110% 110%';
                    },
                },
                'wipe-down': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'mask-size ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.maskComposite = 'exclude';
                        this.style.maskRepeat = 'no-repeat';
                        this.style.maskImage = 'linear-gradient(0deg, black 100%, transparent 100%)';
                        this.style.maskPosition = '0% 0%';
                        this.style.maskSize = '100% 0%';
                    },
                    play: function() {
                        this.style.maskSize = '110% 110%';
                    },
                },
                'wipe-left': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'mask-size ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.maskComposite = 'exclude';
                        this.style.maskRepeat = 'no-repeat';
                        this.style.maskImage = 'linear-gradient(90deg, black 100%, transparent 100%)';
                        this.style.maskPosition = '100% 0%';
                        this.style.maskSize = '0% 100%';
                    },
                    play: function() {
                        this.style.maskSize = '110% 110%';
                    },
                },
                'wipe-right': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'mask-size ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.maskComposite = 'exclude';
                        this.style.maskRepeat = 'no-repeat';
                        this.style.maskImage = 'linear-gradient(90deg, black 100%, transparent 100%)';
                        this.style.maskPosition = '0% 0%';
                        this.style.maskSize = '0% 100%';
                    },
                    play: function() {
                        this.style.maskSize = '110% 110%';
                    },
                },
                'wipe-diagonal': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'mask-size ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.maskComposite = 'exclude';
                        this.style.maskRepeat = 'no-repeat';
                        this.style.maskImage = 'linear-gradient(45deg, black 50%, transparent 50%)';
                        this.style.maskPosition = '0% 100%';
                        this.style.maskSize = '0% 0%';
                    },
                    play: function() {
                        this.style.maskSize = '220% 220%';
                    },
                },
                'wipe-reverse-diagonal': {
                    type: 'transition',
                    transition: function(speed, delay) {
                        return 'mask-size ' + speed + 's ease' + (delay ? ' ' + delay + 's' : '');
                    },
                    rewind: function(intensity) {
                        this.style.maskComposite = 'exclude';
                        this.style.maskRepeat = 'no-repeat';
                        this.style.maskImage = 'linear-gradient(135deg, transparent 50%, black 50%)';
                        this.style.maskPosition = '100% 100%';
                        this.style.maskSize = '0% 0%';
                    },
                    play: function() {
                        this.style.maskSize = '220% 220%';
                    },
                },
                'pop-in': {
                    type: 'animate',
                    keyframes: function(intensity) {
                        let diff = (intensity + 1) * 0.025;
                        return [{
                            opacity: 0,
                            transform: 'scale(' + (1 - diff) + ')',
                        }, {
                            opacity: 1,
                            transform: 'scale(' + (1 + diff) + ')',
                        }, {
                            opacity: 1,
                            transform: 'scale(' + (1 - (diff * 0.25)) + ')',
                            offset: 0.9,
                        }, {
                            opacity: 1,
                            transform: 'scale(1)',
                        }];
                    },
                    options: function(speed) {
                        return {
                            duration: speed,
                            iterations: 1,
                        };
                    },
                    rewind: function() {
                        this.style.opacity = 0;
                    },
                    play: function() {
                        this.style.opacity = 1;
                    },
                },
                'bounce-up': {
                    type: 'animate',
                    keyframes: function(intensity) {
                        let diff = (intensity + 1) * 0.075;
                        return [{
                            opacity: 0,
                            transform: 'translateY(' + diff + 'rem)',
                        }, {
                            opacity: 1,
                            transform: 'translateY(' + (-1 * diff) + 'rem)',
                        }, {
                            opacity: 1,
                            transform: 'translateY(' + (diff * 0.25) + 'rem)',
                            offset: 0.9,
                        }, {
                            opacity: 1,
                            transform: 'translateY(0)',
                        }];
                    },
                    options: function(speed) {
                        return {
                            duration: speed,
                            iterations: 1,
                        };
                    },
                    rewind: function() {
                        this.style.opacity = 0;
                    },
                    play: function() {
                        this.style.opacity = 1;
                    },
                },
                'bounce-down': {
                    type: 'animate',
                    keyframes: function(intensity) {
                        let diff = (intensity + 1) * 0.075;
                        return [{
                            opacity: 0,
                            transform: 'translateY(' + (-1 * diff) + 'rem)',
                        }, {
                            opacity: 1,
                            transform: 'translateY(' + diff + 'rem)',
                        }, {
                            opacity: 1,
                            transform: 'translateY(' + (-1 * (diff * 0.25)) + 'rem)',
                            offset: 0.9,
                        }, {
                            opacity: 1,
                            transform: 'translateY(0)',
                        }];
                    },
                    options: function(speed) {
                        return {
                            duration: speed,
                            iterations: 1,
                        };
                    },
                    rewind: function() {
                        this.style.opacity = 0;
                    },
                    play: function() {
                        this.style.opacity = 1;
                    },
                },
                'bounce-left': {
                    type: 'animate',
                    keyframes: function(intensity) {
                        let diff = (intensity + 1) * 0.075;
                        return [{
                            opacity: 0,
                            transform: 'translateX(' + diff + 'rem)',
                        }, {
                            opacity: 1,
                            transform: 'translateX(' + (-1 * diff) + 'rem)',
                        }, {
                            opacity: 1,
                            transform: 'translateX(' + (diff * 0.25) + 'rem)',
                            offset: 0.9,
                        }, {
                            opacity: 1,
                            transform: 'translateX(0)',
                        }];
                    },
                    options: function(speed) {
                        return {
                            duration: speed,
                            iterations: 1,
                        };
                    },
                    rewind: function() {
                        this.style.opacity = 0;
                    },
                    play: function() {
                        this.style.opacity = 1;
                    },
                },
                'bounce-right': {
                    type: 'animate',
                    keyframes: function(intensity) {
                        let diff = (intensity + 1) * 0.075;
                        return [{
                            opacity: 0,
                            transform: 'translateX(' + (-1 * diff) + 'rem)',
                        }, {
                            opacity: 1,
                            transform: 'translateX(' + diff + 'rem)',
                        }, {
                            opacity: 1,
                            transform: 'translateX(' + (-1 * (diff * 0.25)) + 'rem)',
                            offset: 0.9,
                        }, {
                            opacity: 1,
                            transform: 'translateX(0)',
                        }];
                    },
                    options: function(speed) {
                        return {
                            duration: speed,
                            iterations: 1,
                        };
                    },
                    rewind: function() {
                        this.style.opacity = 0;
                    },
                    play: function() {
                        this.style.opacity = 1;
                    },
                },
            },
            regex: new RegExp('([a-zA-Z0-9\.\,\-\_\"\'\?\!\:\;\#\@\#$\%\&\(\)\{\}]+)', 'g'),
            add: function(selector, settings) {
                var _this = this,
                    style = settings.style in this.effects ? settings.style : 'fade',
                    speed = parseInt('speed' in settings ? settings.speed : 0),
                    intensity = parseInt('intensity' in settings ? settings.intensity : 5),
                    delay = parseInt('delay' in settings ? settings.delay : 0),
                    replay = 'replay' in settings ? settings.replay : false,
                    stagger = 'stagger' in settings ? (parseInt(settings.stagger) >= 0 ? parseInt(settings.stagger) : false) : false,
                    staggerOrder = 'staggerOrder' in settings ? settings.staggerOrder : 'default',
                    staggerSelector = 'staggerSelector' in settings ? settings.staggerSelector : null,
                    threshold = parseInt('threshold' in settings ? settings.threshold : 3),
                    state = 'state' in settings ? settings.state : null,
                    effect = this.effects[style],
                    enter, leave, scrollEventThreshold;

                switch (threshold) {
                    case 1:
                        scrollEventThreshold = 0;
                        break;
                    case 2:
                        scrollEventThreshold = 0.125;
                        break;
                    default:
                    case 3:
                        scrollEventThreshold = 0.25;
                        break;
                    case 4:
                        scrollEventThreshold = 0.375;
                        break;
                    case 5:
                        scrollEventThreshold = 0.475;
                        break;
                }
                switch (effect.type) {
                    default:
                    case 'transition':
                        intensity = ((intensity / 10) * 1.75) + 0.25;
                        enter = function(children, staggerDelay = 0) {
                            var _this = this,
                                transitionOrig;
                            if (effect.target) _this = this.querySelector(effect.target);
                            transitionOrig = _this.style.transition;
                            _this.style.setProperty('backface-visibility', 'hidden');
                            _this.style.transition = effect.transition.apply(_this, [speed / 1000, (delay + staggerDelay) / 1000]);
                            effect.play.apply(_this, [intensity, !!children]);
                            setTimeout(function() {
                                _this.style.removeProperty('backface-visibility');
                                _this.style.transition = transitionOrig;
                            }, (speed + delay + staggerDelay) * 2);
                        };
                        leave = function(children) {
                            var _this = this,
                                transitionOrig;
                            if (effect.target) _this = this.querySelector(effect.target);
                            transitionOrig = _this.style.transition;
                            _this.style.setProperty('backface-visibility', 'hidden');
                            _this.style.transition = effect.transition.apply(_this, [speed / 1000]);
                            effect.rewind.apply(_this, [intensity, !!children]);
                            setTimeout(function() {
                                _this.style.removeProperty('backface-visibility');
                                _this.style.transition = transitionOrig;
                            }, speed * 2);
                        };
                        break;
                    case 'animate':
                        enter = function(children, staggerDelay = 0) {
                            var _this = this,
                                transitionOrig;
                            if (effect.target) _this = this.querySelector(effect.target);
                            setTimeout(() => {
                                effect.play.apply(_this, []);
                                _this.animate(effect.keyframes.apply(_this, [intensity]), effect.options.apply(_this, [speed, delay]));
                            }, delay + staggerDelay);
                        };
                        leave = function(children) {
                            var _this = this,
                                transitionOrig;
                            if (effect.target) _this = this.querySelector(effect.target);
                            let a = _this.animate(effect.keyframes.apply(_this, [intensity]), effect.options.apply(_this, [speed, delay]));
                            a.reverse();
                            a.addEventListener('finish', () => {
                                effect.rewind.apply(_this, []);
                            });
                        };
                        break;
                    case 'manual':
                        enter = function(children, staggerDelay = 0) {
                            var _this = this,
                                transitionOrig;
                            if (effect.target) _this = this.querySelector(effect.target);
                            effect.play.apply(_this, [speed / 1000, (delay + staggerDelay) / 1000, intensity]);
                        };
                        leave = function(children) {
                            var _this = this,
                                transitionOrig;
                            if (effect.target) _this = this.querySelector(effect.target);
                            effect.rewind.apply(_this, [intensity, !!children]);
                        };
                        break;
                }
                $$(selector).forEach(function(e) {
                    var children, targetElement, triggerElement;
                    if (stagger !== false && staggerSelector == ':scope > *') _this.expandTextNodes(e);
                    children = (stagger !== false && staggerSelector) ? e.querySelectorAll(staggerSelector) : null;
                    if (effect.target) targetElement = e.querySelector(effect.target);
                    else targetElement = e;
                    if (children) children.forEach(function(targetElement) {
                        effect.rewind.apply(targetElement, [intensity, true]);
                    });
                    else effect.rewind.apply(targetElement, [intensity]);
                    triggerElement = e;
                    if (e.parentNode) {
                        if (e.parentNode.dataset.onvisibleTrigger) triggerElement = e.parentNode;
                        else if (e.parentNode.parentNode) {
                            if (e.parentNode.parentNode.dataset.onvisibleTrigger) triggerElement = e.parentNode.parentNode;
                        }
                    }
                    scrollEvents.add({
                        element: e,
                        triggerElement: triggerElement,
                        initialState: state,
                        threshold: scrollEventThreshold,
                        enter: children ? function() {
                            var staggerDelay = 0,
                                childHandler = function(e) {
                                    enter.apply(e, [children, staggerDelay]);
                                    staggerDelay += stagger;
                                },
                                a;
                            if (staggerOrder == 'default') {
                                children.forEach(childHandler);
                            } else {
                                a = Array.from(children);
                                switch (staggerOrder) {
                                    case 'reverse':
                                        a.reverse();
                                        break;
                                    case 'random':
                                        a.sort(function() {
                                            return Math.random() - 0.5;
                                        });
                                        break;
                                }
                                a.forEach(childHandler);
                            }
                        } : enter,
                        leave: (replay ? (children ? function() {
                            children.forEach(function(e) {
                                leave.apply(e, [children]);
                            });
                        } : leave) : null),
                    });
                });
            },
            expandTextNodes: function(e) {
                var s, i, w, x;
                for (i = 0; i < e.childNodes.length; i++) {
                    x = e.childNodes[i];
                    if (x.nodeType != Node.TEXT_NODE) continue;
                    s = x.nodeValue;
                    s = s.replace(this.regex, function(x, a) {
                        return ' < text - node > ' + escapeHtml(a) + ' < /text-node>';});w = document.createElement('text-node');w.innerHTML = s;x.replaceWith(w);while (w.childNodes.length > 0) {w.parentNode.insertBefore(w.childNodes[0],w);}w.parentNode.removeChild(w);}},};onvisible.add('#image01', { style: 'fade-up', speed: 1000, intensity: 0, threshold: 3, delay: 0, replay: false });onvisible.add('#buttons01', { style: 'fade-up', speed: 1000, intensity: 3, threshold: 3, delay: 0, replay: false });ready.run();})();
</script>
</body>
</html>
