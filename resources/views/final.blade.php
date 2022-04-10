<html>
<head>
    <style>
        /*! normalize.css v3.0.2 | MIT License | git.io/normalize */

        html {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block;
        }

        audio,
        canvas,
        progress,
        video {
            display: inline-block;
            vertical-align: baseline;
        }

        audio:not([controls]) {
            display: none;
            height: 0;
        }

        [hidden],
        template {
            display: none;
        }

        a {
            background-color: transparent;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        abbr[title] {
            border-bottom: 1px dotted;
        }

        b,
        strong {
            font-weight: bold;
        }

        dfn {
            font-style: italic;
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        mark {
            background: #ff0;
            color: #000;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sup {
            top: -0.5em;
        }

        sub {
            bottom: -0.25em;
        }

        img {
            border: 0;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        figure {
            margin: 1em 40px;
        }

        hr {
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
        }

        pre {
            overflow: auto;
        }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        button {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        html input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button[disabled],
        html input[disabled] {
            cursor: default;
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0;
        }

        input {
            line-height: normal;
        }

        input[type="checkbox"],
        input[type="radio"] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        input[type="search"] {
            -webkit-appearance: textfield;
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em;
        }

        legend {
            border: 0;
            padding: 0;
        }

        textarea {
            overflow: auto;
        }

        optgroup {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        td,
        th {
            padding: 0;
        }

        .clearfix:after,
        .content:after,
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .stage-wrapper {
            display: table;
            width: 100%;
            height: 100%;
            overflow: auto;
        }

        .stage {
            display: table-cell;
            vertical-align: middle;
        }

        .full {
            display: block;
            width: 100%;
        }

        .right {
            float: right;
        }

        .left {
            float: left;
        }

        .center {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .small {
            font-size: 14px;
        }

        .pseudo,
        .button span:after,
        aside.drawer header:before,
        aside.drawer article:before,
        aside.drawer article:after {
            content: "";
            display: inline-block;
            height: 100%;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }

        @font-face {
            font-family: 'Open Sans light';
            src: url("../fonts/open-sans/OpenSans-Light-webfont.eot");
            src: url("../fonts/open-sans/OpenSans-Light-webfont.eot?#iefix") format("embedded-opentype"), url("../fonts/open-sans/OpenSans-Light-webfont.woff") format("woff"), url("../fonts/open-sans/OpenSans-Light-webfont.ttf") format("truetype"), url("../fonts/open-sans/OpenSans-Light-webfont.svg#open_sansbold") format("svg");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans regular';
            src: url("../fonts/open-sans/OpenSans-Regular-webfont.eot");
            src: url("../fonts/open-sans/OpenSans-Regular-webfont.eot?#iefix") format("embedded-opentype"), url("../fonts/open-sans/OpenSans-Regular-webfont.woff") format("woff"), url("../fonts/open-sans/OpenSans-Regular-webfont.ttf") format("truetype"), url("../fonts/open-sans/OpenSans-Regular-webfont.svg#open_sansregular") format("svg");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans semibold';
            src: url("../fonts/open-sans/OpenSans-Semibold-webfont.eot");
            src: url("../fonts/open-sans/OpenSans-Semibold-webfont.eot?#iefix") format("embedded-opentype"), url("../fonts/open-sans/OpenSans-Semibold-webfont.woff") format("woff"), url("../fonts/open-sans/OpenSans-Semibold-webfont.ttf") format("truetype"), url("../fonts/open-sans/OpenSans-Semibold-webfont.svg#open_sanssemibold") format("svg");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans bold';
            src: url("../fonts/open-sans/OpenSans-Bold-webfont.eot");
            src: url("../fonts/open-sans/OpenSans-Bold-webfont.eot?#iefix") format("embedded-opentype"), url("../fonts/open-sans/OpenSans-Bold-webfont.woff") format("woff"), url("../fonts/open-sans/OpenSans-Bold-webfont.ttf") format("truetype"), url("../fonts/open-sans/OpenSans-Bold-webfont.svg#open_sansbold") format("svg");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'BT Mono';
            src: url("../fonts/bt-mono/bt-mono-Regular.eot");
            src: url("../fonts/bt-mono/bt-mono-Regular.eot?#iefix") format("embedded-opentype"), url("../fonts/bt-mono/bt-mono-Regular.woff2") format("woff2"), url("../fonts/bt-mono/bt-mono-Regular.woff") format("woff"), url("../fonts/bt-mono/bt-mono-Regular.ttf") format("truetype"), url("../fonts/bt-mono/bt-mono-Regular.svg#bt_monoregular") format("svg");
            font-style: normal;
            font-weight: 400;
        }

        @font-face {
            font-family: 'BT Mono medium';
            src: url("../fonts/bt-mono/bt-mono-Medium.eot");
            src: url("../fonts/bt-mono/bt-mono-Medium.eot?#iefix") format("embedded-opentype"), url("../fonts/bt-mono/bt-mono-Medium.woff2") format("woff2"), url("../fonts/bt-mono/bt-mono-Medium.woff") format("woff"), url("../fonts/bt-mono/bt-mono-Medium.ttf") format("truetype"), url("../fonts/bt-mono/bt-mono-Medium.svg#bt_monobold") format("svg");
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'BT Mono bold';
            src: url("../fonts/bt-mono/bt-mono-Bold.eot");
            src: url("../fonts/bt-mono/bt-mono-Bold.eot?#iefix") format("embedded-opentype"), url("../fonts/bt-mono/bt-mono-Bold.woff2") format("woff2"), url("../fonts/bt-mono/bt-mono-Bold.woff") format("woff"), url("../fonts/bt-mono/bt-mono-Bold.ttf") format("truetype"), url("../fonts/bt-mono/bt-mono-Bold.svg#bt_monobold") format("svg");
            font-weight: 700;
            font-style: normal;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @-moz-keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @-moz-keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(60px);
            }
            100% {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        @-moz-keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(60px);
            }
            100% {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(60px);
            }
            100% {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translateX(-60px);
            }
            100% {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        @-moz-keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translateX(-60px);
            }
            100% {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translateX(-60px);
            }
            100% {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        @-webkit-keyframes fadeOutDown {
            0% {
                opacity: 1;
                transform: translateY(0px);
            }
            100% {
                opacity: 0;
                transform: translateY(40px);
            }
        }

        @-moz-keyframes fadeOutDown {
            0% {
                opacity: 1;
                transform: translateY(0px);
            }
            100% {
                opacity: 0;
                transform: translateY(40px);
            }
        }

        @keyframes fadeOutDown {
            0% {
                opacity: 1;
                transform: translateY(0px);
            }
            100% {
                opacity: 0;
                transform: translateY(40px);
            }
        }

        @-webkit-keyframes fadeOutRight {
            0% {
                opacity: 1;
                transform: translateX(0px);
            }
            100% {
                opacity: 0;
                transform: translateX(40px);
            }
        }

        @-moz-keyframes fadeOutRight {
            0% {
                opacity: 1;
                transform: translateX(0px);
            }
            100% {
                opacity: 0;
                transform: translateX(40px);
            }
        }

        @keyframes fadeOutRight {
            0% {
                opacity: 1;
                transform: translateX(0px);
            }
            100% {
                opacity: 0;
                transform: translateX(40px);
            }
        }

        @-webkit-keyframes slideInUp {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0%);
            }
        }

        @-moz-keyframes slideInUp {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0%);
            }
        }

        @keyframes slideInUp {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slideLeft {
            0% {
                -webkit-transform: translateX(100%);
            }
            100% {
                -webkit-transform: translateX(0%);
            }
        }

        @-moz-keyframes slideLeft {
            0% {
                -moz-transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(0%);
            }
        }

        @keyframes slideLeft {
            0% {
                -webkit-transform: translateX(100%);
                -moz-transform: translateX(100%);
                -ms-transform: translateX(100%);
                -o-transform: translateX(100%);
                transform: translateX(100%);
            }
            100% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%);
            }
        }

        @-webkit-keyframes slideRight {
            0% {
                -webkit-transform: translateX(0%);
            }
            100% {
                -webkit-transform: translateX(100%);
            }
        }

        @-moz-keyframes slideRight {
            0% {
                -moz-transform: translateX(0%);
            }
            100% {
                -moz-transform: translateX(100%);
            }
        }

        @keyframes slideRight {
            0% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%);
            }
            100% {
                -webkit-transform: translateX(100%);
                -moz-transform: translateX(100%);
                -ms-transform: translateX(100%);
                -o-transform: translateX(100%);
                transform: translateX(100%);
            }
        }

        @-webkit-keyframes pullLeftSmall {
            0% {
                -webkit-transform: translateX(0vw);
            }
            100% {
                -webkit-transform: translateX(-16.666vw);
            }
        }

        @-moz-keyframes pullLeftSmall {
            0% {
                -moz-transform: translateX(0vw);
            }
            100% {
                -moz-transform: translateX(-16.666vw);
            }
        }

        @keyframes pullLeftSmall {
            0% {
                -webkit-transform: translateX(0vw);
                -moz-transform: translateX(0vw);
                -ms-transform: translateX(0vw);
                -o-transform: translateX(0vw);
                transform: translateX(0vw);
            }
            100% {
                -webkit-transform: translateX(-16.666vw);
                -moz-transform: translateX(-16.666vw);
                -ms-transform: translateX(-16.666vw);
                -o-transform: translateX(-16.666vw);
                transform: translateX(-16.666vw);
            }
        }

        @-webkit-keyframes pullLeftLarge {
            0% {
                -webkit-transform: translateX(0vw);
            }
            100% {
                -webkit-transform: translateX(-33.333vw);
            }
        }

        @-moz-keyframes pullLeftLarge {
            0% {
                -moz-transform: translateX(0vw);
            }
            100% {
                -moz-transform: translateX(-33.333vw);
            }
        }

        @keyframes pullLeftLarge {
            0% {
                -webkit-transform: translateX(0vw);
                -moz-transform: translateX(0vw);
                -ms-transform: translateX(0vw);
                -o-transform: translateX(0vw);
                transform: translateX(0vw);
            }
            100% {
                -webkit-transform: translateX(-33.333vw);
                -moz-transform: translateX(-33.333vw);
                -ms-transform: translateX(-33.333vw);
                -o-transform: translateX(-33.333vw);
                transform: translateX(-33.333vw);
            }
        }

        @-webkit-keyframes yankLeft {
            0% {
                -webkit-transform: translateX(0px);
            }
            40% {
                -webkit-transform: translateX(-14px);
            }
            70% {
                -webkit-transform: translateX(4px);
            }
            100% {
                -webkit-transform: translateX(0px);
            }
        }

        @-moz-keyframes yankLeft {
            0% {
                -moz-transform: translateX(0px);
            }
            40% {
                -moz-transform: translateX(-14px);
            }
            70% {
                -moz-transform: translateX(4px);
            }
            100% {
                -moz-transform: translateX(0px);
            }
        }

        @keyframes yankLeft {
            0% {
                -webkit-transform: translateX(0px);
                -moz-transform: translateX(0px);
                -ms-transform: translateX(0px);
                -o-transform: translateX(0px);
                transform: translateX(0px);
            }
            40% {
                -webkit-transform: translateX(-14px);
                -moz-transform: translateX(-14px);
                -ms-transform: translateX(-14px);
                -o-transform: translateX(-14px);
                transform: translateX(-14px);
            }
            70% {
                -webkit-transform: translateX(4px);
                -moz-transform: translateX(4px);
                -ms-transform: translateX(4px);
                -o-transform: translateX(4px);
                transform: translateX(4px);
            }
            100% {
                -webkit-transform: translateX(0px);
                -moz-transform: translateX(0px);
                -ms-transform: translateX(0px);
                -o-transform: translateX(0px);
                transform: translateX(0px);
            }
        }

        @-webkit-keyframes rise {
            0% {
                opacity: 0;
                transform: translateY(110%);
            }
            30% {
                opacity: 1;
                transform: translateY(100%);
            }
            70% {
                opacity: 1;
                transform: translateY(100%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-moz-keyframes rise {
            0% {
                opacity: 0;
                transform: translateY(110%);
            }
            30% {
                opacity: 1;
                transform: translateY(100%);
            }
            70% {
                opacity: 1;
                transform: translateY(100%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @keyframes rise {
            0% {
                opacity: 0;
                transform: translateY(110%);
            }
            30% {
                opacity: 1;
                transform: translateY(100%);
            }
            70% {
                opacity: 1;
                transform: translateY(100%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes boop {
            0% {
                opacity: 0;
                -webkit-transform: scale(1.5);
            }
            15% {
                opacity: 1;
                -webkit-transform: scale(0.75);
            }
            30% {
                -webkit-transform: scale(1.2);
            }
            50% {
                -webkit-transform: scale(0.85);
            }
            75% {
                -webkit-transform: scale(1.1);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
            }
        }

        @-moz-keyframes boop {
            0% {
                opacity: 0;
                -moz-transform: scale(1.5);
            }
            15% {
                opacity: 1;
                -moz-transform: scale(0.75);
            }
            30% {
                -moz-transform: scale(1.2);
            }
            50% {
                -moz-transform: scale(0.85);
            }
            75% {
                -moz-transform: scale(1.1);
            }
            100% {
                opacity: 1;
                -moz-transform: scale(1);
            }
        }

        @keyframes boop {
            0% {
                opacity: 0;
                -webkit-transform: scale(1.5);
                -moz-transform: scale(1.5);
                -ms-transform: scale(1.5);
                -o-transform: scale(1.5);
                transform: scale(1.5);
            }
            15% {
                opacity: 1;
                -webkit-transform: scale(0.75);
                -moz-transform: scale(0.75);
                -ms-transform: scale(0.75);
                -o-transform: scale(0.75);
                transform: scale(0.75);
            }
            30% {
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
            }
            50% {
                -webkit-transform: scale(0.85);
                -moz-transform: scale(0.85);
                -ms-transform: scale(0.85);
                -o-transform: scale(0.85);
                transform: scale(0.85);
            }
            75% {
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
                -ms-transform: scale(1.1);
                -o-transform: scale(1.1);
                transform: scale(1.1);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes revealUp {
            0% {
                opacity: 0;
                transform: translateY(37vh);
            }
            25% {
                opacity: 1;
            }
            50% {
                transform: translateY(37vh);
            }
            100% {
                transform: translateY(0vh);
            }
        }

        @-moz-keyframes revealUp {
            0% {
                opacity: 0;
                transform: translateY(37vh);
            }
            25% {
                opacity: 1;
            }
            50% {
                transform: translateY(37vh);
            }
            100% {
                transform: translateY(0vh);
            }
        }

        @keyframes revealUp {
            0% {
                opacity: 0;
                transform: translateY(37vh);
            }
            25% {
                opacity: 1;
            }
            50% {
                transform: translateY(37vh);
            }
            100% {
                transform: translateY(0vh);
            }
        }

        @-webkit-keyframes spin {
            0% {
                transform: rotateZ(0deg);
            }
            100% {
                transform: rotateZ(360deg);
            }
        }

        @-moz-keyframes spin {
            0% {
                transform: rotateZ(0deg);
            }
            100% {
                transform: rotateZ(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotateZ(0deg);
            }
            100% {
                transform: rotateZ(360deg);
            }
        }

        @-webkit-keyframes ratchet {
            0% {
                transform: rotateZ(0deg);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
            }
            50% {
                transform: rotateZ(900deg);
                -webkit-animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
            }
            65% {
                transform: rotateZ(945deg);
                -webkit-animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            70% {
                transform: rotateZ(900deg);
            }
            71%,
            100% {
                transform: rotateZ(0deg);
            }
        }

        @-moz-keyframes ratchet {
            0% {
                transform: rotateZ(0deg);
                -moz-animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
            }
            50% {
                transform: rotateZ(900deg);
                -moz-animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
            }
            65% {
                transform: rotateZ(945deg);
                -moz-animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            70% {
                transform: rotateZ(900deg);
            }
            71%,
            100% {
                transform: rotateZ(0deg);
            }
        }

        @keyframes ratchet {
            0% {
                transform: rotateZ(0deg);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
                -moz-animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
                animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
            }
            50% {
                transform: rotateZ(900deg);
                -webkit-animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
                -moz-animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
                animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
            }
            65% {
                transform: rotateZ(945deg);
                -webkit-animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
                -moz-animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
                animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            70% {
                transform: rotateZ(900deg);
            }
            71%,
            100% {
                transform: rotateZ(0deg);
            }
        }

        @-webkit-keyframes sendUp {
            0%,
            70% {
                transform: translateY(0px);
                opacity: 1;
            }
            85% {
                transform: translateY(-30px);
                opacity: 0;
            }
            86% {
                transform: translateY(30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }

        @-moz-keyframes sendUp {
            0%,
            70% {
                transform: translateY(0px);
                opacity: 1;
            }
            85% {
                transform: translateY(-30px);
                opacity: 0;
            }
            86% {
                transform: translateY(30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }

        @keyframes sendUp {
            0%,
            70% {
                transform: translateY(0px);
                opacity: 1;
            }
            85% {
                transform: translateY(-30px);
                opacity: 0;
            }
            86% {
                transform: translateY(30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }

        @-webkit-keyframes sendDown {
            0%,
            70% {
                transform: translateY(0px);
                opacity: 1;
            }
            85% {
                transform: translateY(30px);
                opacity: 0;
            }
            86% {
                transform: translateY(-30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }

        @-moz-keyframes sendDown {
            0%,
            70% {
                transform: translateY(0px);
                opacity: 1;
            }
            85% {
                transform: translateY(30px);
                opacity: 0;
            }
            86% {
                transform: translateY(-30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }

        @keyframes sendDown {
            0%,
            70% {
                transform: translateY(0px);
                opacity: 1;
            }
            85% {
                transform: translateY(30px);
                opacity: 0;
            }
            86% {
                transform: translateY(-30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }

        @-webkit-keyframes pulse {
            0% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 0px rgba(92, 212, 147, 0);
            }
            20% {
                background-color: rgba(92, 212, 147, 0.5);
                box-shadow: 0px 0px 0px 0px #5cd493;
            }
            80%,
            99% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 8px rgba(92, 212, 147, 0);
            }
            100% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 0px rgba(92, 212, 147, 0);
            }
        }

        @-moz-keyframes pulse {
            0% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 0px rgba(92, 212, 147, 0);
            }
            20% {
                background-color: rgba(92, 212, 147, 0.5);
                box-shadow: 0px 0px 0px 0px #5cd493;
            }
            80%,
            99% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 8px rgba(92, 212, 147, 0);
            }
            100% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 0px rgba(92, 212, 147, 0);
            }
        }

        @keyframes pulse {
            0% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 0px rgba(92, 212, 147, 0);
            }
            20% {
                background-color: rgba(92, 212, 147, 0.5);
                box-shadow: 0px 0px 0px 0px #5cd493;
            }
            80%,
            99% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 8px rgba(92, 212, 147, 0);
            }
            100% {
                background-color: rgba(92, 212, 147, 0);
                box-shadow: 0px 0px 0px 0px rgba(92, 212, 147, 0);
            }
        }

        body {
            background-color: #fff;
            color: #393536;
            font-family: "BT Mono", "Helvetica Neue", Helvetica, Sans-serif;
            font-size: 16px;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
            letter-spacing: .008em;
            text-rendering: optimizeLegibility;
            line-height: 25px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #393536;
            font-family: "BT Mono medium", "Helvetica Neue", Helvetica, Sans-serif;
            font-weight: normal;
            line-height: 1.3;
            margin: 0;
        }

        .dark h1,
        .dark h2,
        .dark h3,
        .dark h4,
        .dark h5,
        .dark h6 {
            color: #fff;
        }

        h1,
        h2 {
            font-family: "BT Mono medium", "Helvetica Neue", Helvetica, Sans-serif;
            letter-spacing: -1px;
        }

        h1 {
            font-size: 42px;
            line-height: 1.1em;
            margin: 0 0 0 -0.05em;
        }

        h2 {
            margin: 0 0 25px;
            font-size: 42px;
        }

        h3 {
            font-size: 23px;
        }

        h4 {
            font-size: 20px;
            text-transform: uppercase;
        }

        h5 {
            font-size: 18px;
            font-weight: normal;
        }

        p {
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            line-height: 1.4;
            margin: 1em 0;
        }

        ul,
        ol {
            list-style: none;
            padding: 0;
        }

        strong {
            font-family: "Open Sans semibold", "Avenir", "Helvetica Neue", Helvetica, Sans-serif;
            font-weight: normal;
        }

        a {
            -webkit-transition: color 0.2s ease, border-color, 0.2s ease;
            -moz-transition: color 0.2s ease, border-color, 0.2s ease;
            -ms-transition: color 0.2s ease, border-color, 0.2s ease;
            -o-transition: color 0.2s ease, border-color, 0.2s ease;
            transition: color 0.2s ease, border-color, 0.2s ease;
            color: #393536;
            text-decoration: none;
        }

        a:hover,
        a:focus,
        a:active {
            color: #5CD493;
            border-color: #5CD493;
        }

        p a,
        li a {
            font-family: "BT Mono medium", "Helvetica Neue", Helvetica, Sans-serif;
            border-bottom: solid 1px #DEE2E5;
            padding: .2em .1em;
            margin: 0 -.1em;
        }

        p a:hover,
        li a:hover {
            border-color: #5CD493;
        }

        img {
            display: block;
            max-width: 100%;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        html,
        body {
            height: 100%;
            min-height: 100%;
            width: 100%;
            overflow: auto;
        }

        body {
            text-align: center;
        }

        @media (min-width: 1025px) {
            body {
                display: -webkit-box;
                display: -moz-box;
                display: box;
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -moz-box-align: center;
                box-align: center;
                -webkit-align-items: center;
                -moz-align-items: center;
                -ms-align-items: center;
                -o-align-items: center;
                align-items: center;
                -ms-flex-align: center;
                -webkit-align-self: stretch;
                -moz-align-self: stretch;
                align-self: stretch;
                -ms-flex-item-align: stretch;
                -webkit-box-orient: vertical;
                -moz-box-orient: vertical;
                box-orient: vertical;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                box-direction: normal;
                -webkit-flex-direction: column;
                -moz-flex-direction: column;
                flex-direction: column;
                -ms-flex-direction: column;
                -webkit-box-flex: 1;
                -moz-box-flex: 1;
                box-flex: 1;
                -webkit-flex: 1 1 auto;
                -moz-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                overflow: hidden;
            }
        }

        header.main,
        footer {
            width: 100%;
        }

        header.main {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            z-index: 20;
            background-color: #fff;
            border-bottom: solid 1px #DEE2E5;
        }

        @media (min-width: 1025px) {
            header.main {
                background-color: transparent;
                border-bottom: none;
            }
        }

        header {
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            box-flex: 0;
            -webkit-flex: 0 0 auto;
            -moz-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-align-self: flex-start;
            -moz-align-self: flex-start;
            align-self: flex-start;
            -ms-flex-item-align: start;
        }

        article {
            -webkit-box-flex: 1;
            -moz-box-flex: 1;
            box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            -webkit-align-self: stretch;
            -moz-align-self: stretch;
            align-self: stretch;
            -ms-flex-item-align: stretch;
            position: relative;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            z-index: 0;
        }

        footer {
            -webkit-box-flex: 0;
            -moz-box-flex: 0;
            box-flex: 0;
            -webkit-flex: 0 0 auto;
            -moz-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-align-self: flex-end;
            -moz-align-self: flex-end;
            align-self: flex-end;
            -ms-flex-item-align: end;
            background-color: #f6f6f6;
        }

        .wrapper {
            width: 100%;
            overflow: auto;
            z-index: 0;
            padding: 4em 0;
        }

        @media (min-width: 1025px) {
            .wrapper {
                display: -webkit-box;
                display: -moz-box;
                display: box;
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 1;
                -moz-box-flex: 1;
                box-flex: 1;
                -webkit-flex: 1 1 auto;
                -moz-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
            }
        }

        .container {
            max-width: 46em;
            margin: 0 auto;
            width: 100%;
        }

        .container.wide {
            max-width: 100%;
        }

        .content {
            padding: 36px 12px;
        }

        .content.slim,
        .content.compact {
            padding: 12px;
        }

        @media (min-width: 641px) {
            .content {
                padding: 36px 24px;
            }
            .content.slim {
                padding: 24px 24px;
            }
            .content.compact {
                padding: 24px 24px;
            }
        }

        @media (min-width: 1025px) {
            .content {
                padding: 36px 44px;
            }
            .content.slim {
                padding: 24px 44px;
            }
            .content.compact {
                padding: 40px;
            }
        }

        @media (max-height: 30em) {
            .content,
            .content.slim {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }

        section {
            display: inline-block;
            width: 100%;
            margin-bottom: 30px;
            z-index: 1;
        }

        section:last-child {
            margin-bottom: 0;
        }

        @media (max-height: 30em) {
            section {
                margin-bottom: 10px;
            }
        }

        .row,
        .set {
            -webkit-align-content: stretch;
            -moz-align-content: stretch;
            align-content: stretch;
            -ms-flex-line-pack: stretch;
            -webkit-box-align: center;
            -moz-box-align: center;
            box-align: center;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            -o-align-items: center;
            align-items: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -moz-box;
            display: box;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -moz-box-orient: vertical;
            box-orient: vertical;
            -webkit-box-direction: normal;
            -moz-box-direction: normal;
            box-direction: normal;
            -webkit-flex-direction: column;
            -moz-flex-direction: column;
            flex-direction: column;
            -ms-flex-direction: column;
        }

        @media (min-width: 641px) {
            .row,
            .set {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                box-direction: normal;
                -webkit-flex-direction: row;
                -moz-flex-direction: row;
                flex-direction: row;
                -ms-flex-direction: row;
            }
        }

        .col {
            display: -webkit-box;
            display: -moz-box;
            display: box;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -moz-box-orient: horizontal;
            box-orient: horizontal;
            -webkit-box-direction: normal;
            -moz-box-direction: normal;
            box-direction: normal;
            -webkit-flex-direction: row;
            -moz-flex-direction: row;
            flex-direction: row;
            -ms-flex-direction: row;
            -webkit-flex-grow: 1;
            -moz-flex-grow: 1;
            flex-grow: 1;
            -ms-flex-positive: 1;
            margin: 0 auto;
        }

        .fill,
        .fit {
            display: inline-block;
            margin: auto;
        }

        .fill {
            -webkit-flex-grow: 1;
            -moz-flex-grow: 1;
            flex-grow: 1;
            -ms-flex-positive: 1;
        }

        .fit {
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            flex-grow: 0;
            -ms-flex-positive: 0;
        }

        .button {
            -webkit-transition: background-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), border-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -moz-transition: background-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), border-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -ms-transition: background-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), border-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -o-transition: background-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), border-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            transition: background-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), border-color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 140ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            background-color: #5CD493;
            border: none;
            border-radius: 2px;
            display: inline-block;
            color: #fff;
            font-family: "BT Mono bold", "Helvetica Neue", Helvetica, Sans-serif;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
            opacity: 1;
            outline: none;
            padding: 0;
            position: relative;
            text-decoration: none;
            text-align: center;
            width: 100%;
        }

        @media (min-width: 641px) {
            .button {
                width: auto;
            }
        }

        .button.full {
            width: 100%;
        }

        .button:hover,
        .button:focus {
            background-color: #7cdda8;
            color: #fff;
        }

        .button:focus {
            outline: none;
            border-color: #44ce83;
        }

        .button.out {
            color: transparent;
        }

        .button span {
            -webkit-transition: color 140ms ease;
            -moz-transition: color 140ms ease;
            -ms-transition: color 140ms ease;
            -o-transition: color 140ms ease;
            transition: color 140ms ease;
            display: inline-block;
            padding: 1em 2.5em 1.15em;
            position: relative;
            text-align: center;
        }

        .button span:after {
            -webkit-animation: spin 400ms infinite normal cubic-bezier(0.445, 0.05, 0.55, 0.95) forwards 0s paused;
            -moz-animation: spin 400ms infinite normal cubic-bezier(0.445, 0.05, 0.55, 0.95) forwards 0s paused;
            animation: spin 400ms infinite normal cubic-bezier(0.445, 0.05, 0.55, 0.95) forwards 0s paused;
            -webkit-transition: opacity 200ms ease;
            -moz-transition: opacity 200ms ease;
            -ms-transition: opacity 200ms ease;
            -o-transition: opacity 200ms ease;
            transition: opacity 200ms ease;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: solid 2px #fff;
            border-top-color: transparent;
            left: 50%;
            opacity: 0;
            top: 50%;
            margin: -10px 0 0 -10px;
        }

        .button.loading {
            cursor: none;
            background-color: #bdbdbf;
        }

        .button.loading span {
            color: transparent;
        }

        .button.loading span:after {
            -webkit-animation-play-state: running;
            -moz-animation-play-state: running;
            animation-play-state: running;
            opacity: 1;
        }

        .button.loading:after,
        .button:hover:after {
            opacity: 0;
        }

        .button.secondary {
            background-color: transparent;
            border: solid 1px #5CD493;
            color: #5CD493;
            font-size: 16px;
        }

        .button.secondary:hover {
            color: #fff;
            background-color: #5CD493;
        }

        .button.cap {
            width: 100%;
            border-radius: 0px 0px 3px 3px;
        }

        ::-webkit-input-placeholder {
            color: #6E787F;
            line-height: 1;
        }

        :-moz-placeholder {
            color: #6E787F;
            line-height: 1;
        }

        ::-moz-placeholder {
            color: #6E787F;
            line-height: 1;
        }

        :-ms-input-placeholder {
            color: #6E787F;
            line-height: 1;
        }

        input:focus::-webkit-input-placeholder {
            color: #283036;
        }

        input:focus:-moz-placeholder {
            color: #283036;
        }

        input:focus::-moz-placeholder {
            color: #283036;
        }

        input:focus:-ms-input-placeholder {
            color: #283036;
        }

        label[for="amount"] {
            -webkit-transition: background-color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -moz-transition: background-color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -ms-transition: background-color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -o-transition: background-color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            transition: background-color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95), color 200ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
            border-top: solid 1px #DEE2E5;
            border-bottom: solid 1px #DEE2E5;
            color: #6E787F;
            cursor: pointer;
            display: block;
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
            padding: 12px 14px;
            position: relative;
            margin-top: -11px;
            width: 100%;
            z-index: 1;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        @media (min-width: 720px) {
            label[for="amount"] {
                border: 1px solid #b5b5b5;
                border-radius: 3px;
            }
        }

        label[for="amount"] .input-label {
            -webkit-transition: opacity 0.2s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -moz-transition: opacity 0.2s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -ms-transition: opacity 0.2s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            -o-transition: opacity 0.2s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            transition: opacity 0.2s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            color: #000;
            display: block;
            font-size: 12px;
            font-weight: 500;
            line-height: 1;
            margin-bottom: 4px;
        }

        label[for="amount"].has-focus {
            background-color: #f9f9f9;
            cursor: text;
            z-index: 2;
        }

        label[for="amount"].has-focus .input-wrapper:after {
            color: #393536;
        }

        label[for="amount"].has-focus .input-label {
            color: #000;
        }

        input {
            background-color: transparent;
            display: block;
            border: none;
            color: #000;
            cursor: pointer;
            font-size: 1.2rem;
            outline: none;
            line-height: 1;
            width: 100%;
        }

        .input-wrapper {
            position: relative;
        }

        .amount-wrapper input {
            -webkit-transition: transform 0.2s cubic-bezier(0.645, 0.045, 0.355, 1), color 0.2s ease;
            -moz-transition: transform 0.2s cubic-bezier(0.645, 0.045, 0.355, 1), color 0.2s ease;
            -ms-transition: transform 0.2s cubic-bezier(0.645, 0.045, 0.355, 1), color 0.2s ease;
            -o-transition: transform 0.2s cubic-bezier(0.645, 0.045, 0.355, 1), color 0.2s ease;
            transition: transform 0.2s cubic-bezier(0.645, 0.045, 0.355, 1), color 0.2s ease;
            padding: 0 14px;
        }

        .amount-wrapper:after {
            -webkit-transition: opacity 0.2s ease;
            -moz-transition: opacity 0.2s ease;
            -ms-transition: opacity 0.2s ease;
            -o-transition: opacity 0.2s ease;
            transition: opacity 0.2s ease;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            content: "$";
            color: #393536;
            display: inline-block;
            line-height: 1;
            left: 0px;
            position: absolute;
            top: 50%;
        }

        /* Modules */

        header .fill {
            text-align: left;
        }

        header a,
        .pseudoshop,
        .braintree {
            display: inline-block;
            text-decoration: none;
            vertical-align: middle;
        }

        .pseudoshop,
        .braintree {
            background-color: #fff;
            padding: 3px 8px;
            margin: 0 -8px;
        }

        .pseudoshop {
            -webkit-transition: color 160ms ease;
            -moz-transition: color 160ms ease;
            -ms-transition: color 160ms ease;
            -o-transition: color 160ms ease;
            transition: color 160ms ease;
            -webkit-box-ordinal-group: 2;
            -moz-box-ordinal-group: 2;
            box-ordinal-group: 2;
            -webkit-order: 2;
            -moz-order: 2;
            order: 2;
            -ms-flex-order: 2;
            color: #393536;
            font-family: "Open Sans regular", "Avenir", "Helvetica Neue", Helvetica, Sans-serif;
            text-align: left;
        }

        .pseudoshop strong {
            font-family: "Open Sans bold", "Avenir", "Helvetica Neue", Helvetica, Sans-serif;
        }

        @media (min-width: 641px) {
            .pseudoshop {
                -webkit-box-ordinal-group: 1;
                -moz-box-ordinal-group: 1;
                box-ordinal-group: 1;
                -webkit-order: 1;
                -moz-order: 1;
                order: 1;
                -ms-flex-order: 1;
            }
        }

        .pseudoshop:hover {
            color: #707073;
        }

        .braintree {
            -webkit-transition: opacity 160ms ease;
            -moz-transition: opacity 160ms ease;
            -ms-transition: opacity 160ms ease;
            -o-transition: opacity 160ms ease;
            transition: opacity 160ms ease;
            -webkit-box-ordinal-group: 1;
            -moz-box-ordinal-group: 1;
            box-ordinal-group: 1;
            -webkit-order: 1;
            -moz-order: 1;
            order: 1;
            -ms-flex-order: 1;
            color: #393536;
            font-size: 12px;
            font-family: "BT Mono bold", "Helvetica Neue", Helvetica, Sans-serif;
            opacity: .5;
        }

        header.main .braintree {
            display: none;
        }

        .dark .braintree {
            background-color: transparent;
            color: #fff;
            opacity: 1;
        }

        @media (min-width: 641px) {
            .braintree {
                -webkit-box-ordinal-group: 2;
                -moz-box-ordinal-group: 2;
                box-ordinal-group: 2;
                -webkit-order: 2;
                -moz-order: 2;
                order: 2;
                -ms-flex-order: 2;
            }
            header.main .braintree {
                display: inline-block;
            }
        }

        .braintree:hover {
            opacity: 1;
        }

        .braintree.notification,
        .braintree.active {
            color: #393536;
        }

        @media (min-width: 1025px) {
            .braintree.notification {
                -webkit-animation: pullLeftLarge 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1125ms;
                -moz-animation: pullLeftLarge 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1125ms;
                animation: pullLeftLarge 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1125ms;
            }
        }

        .braintree.dismiss {
            -webkit-animation: fadeOutRight 300ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
            -moz-animation: fadeOutRight 300ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
            animation: fadeOutRight 300ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
            -webkit-animation-delay: 0s;
            -moz-animation-delay: 0s;
            animation-delay: 0s;
        }

        .notice-wrapper {
            font-family: "BT Mono medium", "Helvetica Neue", Helvetica, Sans-serif;
            text-align: center;
            width: 100%;
            overflow: hidden;
        }

        .notice {
            -webkit-transition: transform 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -moz-transition: transform 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -ms-transition: transform 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -o-transition: transform 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: transform 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
            border-radius: 1px;
            background-color: #f6f6f6;
            color: #707073;
            padding: 15px;
            width: 100%;
        }

        .notice.error {
            background-color: #FF6161;
            color: #fff;
        }

        .notice.show {
            -webkit-transform: translateY(0%);
            -moz-transform: translateY(0%);
            -ms-transform: translateY(0%);
            -o-transform: translateY(0%);
            transform: translateY(0%);
        }

        table {
            width: 100%;
        }

        tr {
            border-top: solid 1px #DEE2E5;
        }

        tr:last-child {
            border-bottom: solid 1px #DEE2E5;
        }

        th,
        td {
            overflow-wrap: break-word;
            word-wrap: break-word;
            -ms-word-break: break-all;
            word-break: break-word;
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
            line-height: 1.3em;
            font-size: 14px;
            letter-spacing: .02em;
            padding: .6em 0;
            vertical-align: top;
            text-align: left;
        }

        th {
            color: #707073;
            font-weight: normal;
            font-family: "BT Mono", "Helvetica Neue", Helvetica, Sans-serif;
        }

        td {
            color: #393536;
            font-family: "BT Mono medium", "Helvetica Neue", Helvetica, Sans-serif;
            width: 60%;
            padding: .6em 0 .6em .6em;
        }

        .checkout {
            text-align: left;
        }

        .checkout section {
            margin: 0;
            padding: 0;

        }

        @media (min-width: 641px) {
            .checkout section {
                padding: 30px 0;
            }
        }

        @media (min-width: 1025px) {
            .checkout section {
                padding: 10px 0;
            }
        }

        .checkout.dismiss {
            -webkit-animation: fadeOutDown 250ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
            -moz-animation: fadeOutDown 250ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
            animation: fadeOutDown 250ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
        }

        .checkout h1,
        .checkout p,
        .checkout section,
        .checkout .button {
            animation: none;
        }

        .checkout h1 {
            -webkit-animation-delay: 200ms;
            -moz-animation-delay: 200ms;
            animation-delay: 200ms;
        }

        .checkout header p {
            -webkit-animation-delay: 300ms;
            -moz-animation-delay: 300ms;
            animation-delay: 300ms;
        }

        .checkout section {
            -webkit-animation-delay: 450ms;
            -moz-animation-delay: 450ms;
            animation-delay: 450ms;
            -webkit-animation-duration: 550ms;
            -moz-animation-duration: 550ms;
            animation-duration: 550ms;
        }

        .checkout .button {
            -webkit-animation-delay: 650ms;
            -moz-animation-delay: 650ms;
            animation-delay: 650ms;
            -webkit-animation-duration: 700ms;
            -moz-animation-duration: 700ms;
            animation-duration: 700ms;
        }

        .bt-drop-in-wrapper {
            min-height: 200px;
            position: relative;
            z-index: 1;
        }

        .bt-drop-in-placeholder {
            background-color: #f9f9f9;
            height: 187px;
            width: 100%;
            text-align: center;
            color: #707073;
            border: dashed 1px #DEE2E5;
            border-bottom: none;
            display: table;
        }

        .bt-drop-in-placeholder:before {
            content: "(Drop-in)";
            color: #707073;
            display: table-cell;
            vertical-align: middle;
        }

        .response {
            text-align: center;
        }

        @media (min-width: 1025px) {
            .response {
                -webkit-animation: pullLeftSmall 600ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1100ms;
                -moz-animation: pullLeftSmall 600ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1100ms;
                animation: pullLeftSmall 600ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1100ms;
                padding: 0;
                width: 60%;
                width: 60vw;
            }
        }

        .response .notice-wrapper,
        .response .icon,
        .response h1,
        .response section {
            -webkit-animation: fadeInUp 600ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
            -moz-animation: fadeInUp 600ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
            animation: fadeInUp 600ms 1 normal cubic-bezier(0.215, 0.61, 0.355, 1) both 0s;
        }

        .response .icon {
            -webkit-animation-delay: 100ms;
            -moz-animation-delay: 100ms;
            animation-delay: 100ms;
        }

        .response h1 {
            -webkit-animation-delay: 200ms;
            -moz-animation-delay: 200ms;
            animation-delay: 200ms;
        }

        .response section:nth-of-type(1) {
            -webkit-animation-delay: 400ms;
            -moz-animation-delay: 400ms;
            animation-delay: 400ms;
        }

        .response section:nth-of-type(2) {
            -webkit-animation-delay: 600ms;
            -moz-animation-delay: 600ms;
            animation-delay: 600ms;
        }

        .response section:nth-of-type(3) {
            -webkit-animation-delay: 800ms;
            -moz-animation-delay: 800ms;
            animation-delay: 800ms;
        }

        .response section:nth-of-type(4) {
            -webkit-animation-delay: 1000ms;
            -moz-animation-delay: 1000ms;
            animation-delay: 1000ms;
        }

        .response section:last-child {
            -webkit-animation-duration: 800ms;
            -moz-animation-duration: 800ms;
            animation-duration: 800ms;
        }

        .response .icon {
            display: inline-block;
            margin: 0 auto;
        }

        .response h1 {
            margin: 0.6em 0 0.8em;
        }

        .response table {
            margin: auto;
            max-width: 10em;
        }

        .response p {
            max-width: 26em;
            display: inline-block;
            margin: 0 auto;
        }

        .response .button {
            margin-top: 3em;
        }

        aside.drawer {
            -webkit-animation: slideInUp 1200ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 800ms;
            -moz-animation: slideInUp 1200ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 800ms;
            animation: slideInUp 1200ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 800ms;
            width: 100%;
            background-color: #393536;
            text-align: left;
        }

        @media (min-width: 1025px) {
            aside.drawer {
                display: -webkit-box;
                display: -moz-box;
                display: box;
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 1;
                -moz-box-flex: 1;
                box-flex: 1;
                -webkit-flex: 1 1 auto;
                -moz-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                -webkit-align-self: stretch;
                -moz-align-self: stretch;
                align-self: stretch;
                -ms-flex-item-align: stretch;
                -webkit-box-orient: vertical;
                -moz-box-orient: vertical;
                box-orient: vertical;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                box-direction: normal;
                -webkit-flex-direction: column;
                -moz-flex-direction: column;
                flex-direction: column;
                -ms-flex-direction: column;
                -webkit-animation: slideLeft 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1200ms;
                -moz-animation: slideLeft 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1200ms;
                animation: slideLeft 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1200ms;
                padding: 0;
                position: fixed;
                width: 33.333%;
                width: 33.333vw;
                height: 100%;
                height: 100vh;
                right: 0px;
                top: 0px;
                bottom: 0px;
                z-index: 900;
                overflow: hidden;
            }
            .out aside.drawer {
                -webkit-animation: slideRight 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1200ms;
                -moz-animation: slideRight 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1200ms;
                animation: slideRight 700ms 1 normal cubic-bezier(0.645, 0.045, 0.355, 1) both 1200ms;
                -webkit-animation-delay: 0s;
                -moz-animation-delay: 0s;
                animation-delay: 0s;
            }
        }

        aside.drawer header,
        aside.drawer article {
            width: 100%;
        }

        aside.drawer header {
            position: relative;
            border-bottom: solid 1px #4B4A4E;
            text-align: center;
            z-index: 20;
        }

        aside.drawer header:before {
            opacity: 0.75;
            position: absolute;
            pointer-events: none;
            top: 100%;
            height: 40px;
            margin-top: 1px;
            background-image: -webkit-linear-gradient(#393536 0%, rgba(48, 46, 51, 0) 100%);
            background-image: -o-linear-gradient(#393536 0%, rgba(48, 46, 51, 0) 100%);
            background-image: linear-gradient(#393536 0%, rgba(48, 46, 51, 0) 100%);
        }

        aside.drawer article {
            position: relative;
            z-index: 10;
        }

        aside.drawer article:before,
        aside.drawer article:after {
            position: fixed;
            pointer-events: none;
            display: none;
        }

        @media (min-width: 1025px) {
            aside.drawer article {
                height: 100%;
                height: 100vh;
            }
        }

        aside.drawer article:after {
            opacity: 0.75;
            top: auto;
            bottom: 0px;
            height: 40px;
            background-image: -webkit-linear-gradient(rgba(48, 46, 51, 0) 0%, #393536 100%);
            background-image: -o-linear-gradient(rgba(48, 46, 51, 0) 0%, #393536 100%);
            background-image: linear-gradient(rgba(48, 46, 51, 0) 0%, #393536 100%);
        }

        @media (min-width: 1025px) {
            aside.drawer article:after,
            aside.drawer article:before {
                display: block;
            }
        }

        aside.drawer h5 {
            font-family: "BT Mono medium", "Helvetica Neue", Helvetica, Sans-serif;
            color: #fff;
            line-height: 1.3em;
            font-size: 16px;
            letter-spacing: .02em;
            margin: 0 0 .9em;
        }

        aside.drawer tr {
            border-color: #4B4A4E;
        }

        aside.drawer th,
        aside.drawer td {
            font-size: 12px;
        }

        aside.drawer th {
            color: #BABABD;
            width: 45%;
        }

        aside.drawer td {
            color: #fff;
            width: 55%;
        }

        aside.drawer p {
            color: #fff;
            max-width: 22em;
        }

        aside.drawer ::selection {
            opacity: 1;
            background: rgba(255, 255, 255, 0.99);
            color: rgba(62, 60, 65, 0.99);
            text-shadow: none;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <div class="response container">
        <div class="content">
            <section>
                <a class="button primary back" href="/index.php">
                    <span>Test Another Transaction</span>
                </a>
            </section>
        </div>
    </div>
</div>

<aside class="drawer dark">
    <header>
        <div class="content compact">
            <a href="https://developers.braintreepayments.com" class="braintree" target="_blank">Braintree</a>
            <h3>API Response</h3>
        </div>
    </header>

    <article class="content compact">
        <section>
            <h5>Transaction</h5>
            <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>id</td>
                    <td>{{$transaction->id}}</td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>{{$transaction->type}}</td>
                </tr>
                <tr>
                    <td>amount</td>
                    <td>{{$transaction->amount}}</td>
                </tr>
                <tr>
                    <td>status</td>
                    <td>$transaction->status</td>
                </tr>
                <tr>
                    <td>created_at</td>
                    <td>{{$transaction->createdAt->format('Y-m-d H:i:s')}}</td>
                </tr>
                <tr>
                    <td>updated_at</td>
                    <td>{{$transaction->updatedAt->format('Y-m-d H:i:s')}}</td>
                </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h5>Payment</h5>

            <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>token</td>
                    <td>{{$transaction->creditCardDetails->token}}</td>
                </tr>
                <tr>
                    <td>bin</td>
                    <td>{{$transaction->creditCardDetails->bin}}</td>
                </tr>
                <tr>
                    <td>last_4</td>
                    <td>{{$transaction->creditCardDetails->last4}}</td>
                </tr>
                <tr>
                    <td>card_type</td>
                    <td>{{$transaction->creditCardDetails->cardType}}</td>
                </tr>
                <tr>
                    <td>expiration_date</td>
                    <td>{{$transaction->creditCardDetails->expirationDate}}</td>
                </tr>
                <tr>
                    <td>cardholder_name</td>
                    <td>{{$transaction->creditCardDetails->cardholderName}}</td>
                </tr>
                <tr>
                    <td>customer_location</td>
                    <td>{{$transaction->creditCardDetails->customerLocation}}</td>
                </tr>
                </tbody>
            </table>
        </section>

        <?php if (!is_null($transaction->customerDetails->id)) : ?>
        <section>
            <h5>Customer Details</h5>
            <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>id</td>
                    <td>{{$transaction->customerDetails->id}}</td>
                </tr>
                <tr>
                    <td>first_name</td>
                    <td>{{$transaction->customerDetails->firstName}}</td>
                </tr>
                <tr>
                    <td>last_name</td>
                    <td>{{$transaction->customerDetails->lastName}}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{$transaction->customerDetails->email}}</td>
                </tr>
                <tr>
                    <td>company</td>
                    <td>{{$transaction->customerDetails->company}}</td>
                </tr>
                <tr>
                    <td>website</td>
                    <td>{{$transaction->customerDetails->website}}</td>
                </tr>
                <tr>
                    <td>phone</td>
                    <td>{{$transaction->customerDetails->phone}}</td>
                </tr>
                <tr>
                    <td>fax</td>
                    <td>{{$transaction->customerDetails->fax}}</td>
                </tr>
                </tbody>
            </table>
        </section>i
        <?php endif; ?>

        <section>
            <p class="center small">Integrate with the Braintree SDK for a secure and seamless checkout</p>
        </section>

        <section>
            <a class="button secondary full" href="https://developers.braintreepayments.com/guides/drop-in" target="_blank">
                <span>See the Docs</span>
            </a>
        </section>
    </article>
</aside>


</body>
</html>
