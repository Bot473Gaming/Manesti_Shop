<html class="no-js supports-no-cookies" lang="en">
<head>
    <link rel="shortcut icon" href="/public/image/logo1.png" type="image/png">
    <title>
    Manesti - Thanh toán đơn hàng
    </title>

    <meta name="description" content="Manesti - Thanh toán đơn hàng">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        .btn {
            display: inline-block;
            border-radius: 4px;
            font-weight: 500;
            padding: 1.4em 1.7em;
            box-sizing: border-box;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            position: relative;
            background: #8a8f6a;
            color: white;
        }

        .fieldset .field .field-input-wrapper .field-input {
            box-shadow: 0 0 0 1px #d9d9d9;
            transition: all 0.2s ease-out;
            background-color: white;
            color: #333333;
            border-radius: 4px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            padding: 0.94em 2.8em 0.94em 0.8em;
            word-break: normal;
        }

        body {
            color: #737373;
            background: white !important;

            font-size: 14px;
            font-family: Helvetica Neue, sans-serif;
            line-height: 1.3em;
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-word;
            -webkit-font-smoothing: subpixel-antialiased;
            overflow-x: hidden;
        }

        .fieldset .field .field-input-wrapper .field-input:focus {
            box-shadow: 0 0 0 2px #8a8f6a;
            outline: none;
        }

        .radio-wrapper .radio-input .input-radio:checked,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked {
            border: none;
            box-shadow: 0 0 0 10px #8a8f6a inset;
        }

        .fieldset .field.field-error .field-input-wrapper .field-input {
            box-shadow: 0 0 0 2px #ff6d6d;
            outline: none;
        }

        html,
        body {
            margin: 0;
            width: 100%;
            /* == 2 => 1 page, == 1 => 2 page*/
        }





        a {
            text-decoration: none;
            color: #8a8f6a;
            transition: color 0.2s ease-in-out;
            display: inline-block;
        }

        .banner {
            padding: 1.5em 0;

            display: none;
            ;
        }

        .alert {
            padding: 16px;
            border-radius: 5px;
            display: -webkit-flex;
            display: flex;
            align-items: center;
        }


        .alert-danger svg {
            width: 20px;
            margin-right: 10px;
        }

        .alert-danger span {
            max-width: calc(100% - 30px);
        }

        .alert-danger * {
            flex: 0 0 auto;
        }

        .alert-danger {
            color: #721c24;
            background-color: #ffebeb;
            border-color: #ffebeb;
            line-height: 20px;
        }

        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }


        a:focus {
            outline: none;
        }

        a:hover {
            /* color: #2b78a0; */
            filter: brightness(1.2);
        }

        ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: normal;
            margin: 0;
            line-height: 1em;
        }

        h2 {
            font-size: 1.28571em;
        }

        h3 {
            font-size: 1em;
            font-weight: 500;
            margin-bottom: 0.75em;
        }

        h3:not(:first-child) {
            margin-top: 1.5em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 1em;
        }

        td,
        th {
            padding: 0;
            padding-left: 1em;
        }

        td:first-child,
        th:first-child {
            padding-left: 0;
            text-align: left;
        }

        td:last-child,
        th:last-child {
            text-align: right;
        }

        img {
            border: 0;
            max-width: 100%;
        }

        p {
            margin: 0;
            line-height: 1.5em;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0;
            padding: 0;
            -webkit-appearance: none;
            -webkit-font-smoothing: inherit;
            border: none;
            background: transparent;
            line-height: normal;
        }

        button:focus,
        input:focus {
            outline: none;
        }

        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .radio-wrapper,
        .checkbox-wrapper {
            display: table;
            box-sizing: border-box;
            width: 100%;
            zoom: 1;
        }

        .radio-wrapper:after,
        .radio-wrapper:before,
        .checkbox-wrapper:after,
        .checkbox-wrapper:before {
            content: "";
            display: table;
        }

        .radio-wrapper .radio-input,
        .checkbox-wrapper .checkbox-input {
            display: table-cell;
            padding-right: 0.75em;
            white-space: nowrap;
        }

        .radio-wrapper .payment-method-checkbox {
            display: flex;
            align-self: center;
        }

        .radio-wrapper .radio-input .input-radio,
        .checkbox-wrapper .checkbox-input .input-checkbox {
            width: 18px;
            height: 18px;
            box-shadow: 0 0 0 0 #8a8f6a inset;
            transition: all 0.2s ease-in-out;
            position: relative;
            cursor: pointer;
            vertical-align: -4px;
            outline: 0;
            border: solid 1px #d9d9d9;
        }

        .radio-wrapper .radio-input .input-radio:hover,
        .checkbox-wrapper .checkbox-input .input-checkbox:hover {
            border-color: #cccccc;
        }

        .radio-wrapper .radio-input .input-radio {
            border-radius: 50%;
        }

        .radio-wrapper .radio-content-input {
            display: flex;
            align-items: center;
        }

        .radio-content-input .content-wrapper {
            display: grid
        }

        .radio-wrapper .radio-content-input .main-img {
            margin-right: 10px;
            display: flex;
            align-self: center;
            width: 40px;
            height: 40px;
        }

        .radio-wrapper .radio-content-input .child-img {
            max-height: 30px
        }

        .radio-wrapper .radio-content-input .quick-tagline {
            color: #8a8f6a;
            display: flex;
            align-items: center;
            margin-top: 2px;
        }

        .radio-wrapper .radio-content-input .quick-tagline svg {
            fill: #8a8f6a;
            margin-left: 10px;
        }

        .radio-wrapper .radio-input .input-radio:checked:focus,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked:focus {
            border-color: #286f94;
        }

        .radio-wrapper .radio-input .input-radio:checked:after,
        .checkbox-wrapper .checkbox-input .input-checkbox:checked:after {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="100 ")";
            filter: alpha(opacity=100);
        }

        .radio-wrapper .radio-input .input-radio:after,
        .checkbox-wrapper .checkbox-input .input-checkbox:after {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: scale(0.2);
            transform: scale(0.2);
            transition: all 0.2s ease-in-out 0.1s;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="0 ")";
            filter: alpha(opacity=0);
        }

        .radio-wrapper .radio-input .input-radio:after {
            width: 4px;
            height: 4px;
            margin-left: -2px;
            margin-top: -2px;
            background-color: #fff;
            border-radius: 50%;
        }

        .radio-wrapper .radio-label,
        .checkbox-wrapper .checkbox-label {
            display: flex !important;
            cursor: pointer !important;
            align-items: center;
            padding: 1.3em;
            width: auto;
        }

        .radio-wrapper .two-page,
        .checkbox-wrapper .checkbox-label {
            display: flex;
            cursor: pointer;
            align-items: center;
            padding: 1.3em;
            width: auto;
        }

        .radio-wrapper .radio-label .radio-label-primary,
        .checkbox-wrapper .checkbox-label .checkbox-label-primary {
            display: table-cell;
            width: 100%;
        }

        .radio-wrapper .radio-accessory,
        .checkbox-wrapper .checkbox-accessory {
            display: table-cell;
            padding-left: 0.75em;
            white-space: nowrap;
        }

        .radio-wrapper.no-box,
        .checkbox-wrapper.no-box {
            display: block;
        }

        .radio-wrapper.no-box .radio-input,
        .checkbox-wrapper.no-box .checkbox-input {
            display: inline-block;
        }

        .radio-wrapper.no-box .radio-label,
        .checkbox-wrapper.no-box .checkbox-label {
            display: inline-block;
            width: inherit;
        }

        ::selection {
            background: #8a8f6a;
            color: white;
        }


        .btn:not(.btn-disabled):hover {
            /* background: #286f94; */
            color: white;
            filter: brightness(1.2);
        }



        .btn-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -10px;
            margin-left: -10px;
            /*transition: opacity 0.3s ease-in-out;*/
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="0 ")";
            filter: alpha(opacity=0);
        }

        .btn-loading {
            pointer-events: none;
            cursor: default;
        }

        .btn-loading .btn-content {
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="0 ")";
            filter: alpha(opacity=0);
        }

        .btn-loading .btn-spinner {
            -webkit-animation: rotate 0.5s linear infinite;
            animation: rotate 0.5s linear infinite;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="100 ")";
            filter: alpha(opacity=100);
        }

        .icon {
            background-position: center center;
            background-repeat: no-repeat;
            display: inline-block;
        }

        .icon.icon-button-spinner {
            width: 20px;
            height: 20px;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PHBhdGggZD0iTTIwIDEwYzAgNS41MjMtNC40NzcgMTAtMTAgMTBTMCAxNS41MjMgMCAxMCA0LjQ3NyAwIDEwIDB2MmMtNC40MTggMC04IDMuNTgyLTggOHMzLjU4MiA4IDggOCA4LTMuNTgyIDgtOGgyeiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg=='), none;
        }

        .icon.icon-clear {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMiAtNCAxNiAxNiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAyIC00IDE2IDE2Ij48cGF0aCBvcGFjaXR5PSIuMiIgZD0iTTEwLTRjLTQuNCAwLTggMy42LTggOHMzLjYgOCA4IDggOC0zLjYgOC04LTMuNi04LTgtOHptMy43IDEwLjdsLTEgMS0yLjctMi42LTIuNyAyLjYtMS0xIDIuNi0yLjctMi42LTIuNyAxLTEgMi43IDIuNiAyLjctMi42IDEgMS0yLjYgMi43IDIuNiAyLjd6Ii8+PC9zdmc+'), none;
        }

        .icon.icon-os-question {
            width: 18px;
            height: 18px;
            margin-right: 0.5em;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDE4IDE4Ij48cGF0aCBkPSJNOSAxOGM0Ljk3IDAgOS00LjAzIDktOXMtNC4wMy05LTktOS05IDQuMDMtOSA5IDQuMDMgOSA5IDl6TTUuODUgNy4xNjJoMS41NDZjLjA1My0uODAzLjYtMS4zMTcgMS40NS0xLjMxNy44MjggMCAxLjM4LjQ5NCAxLjM4IDEuMTggMCAuNjUtLjI3NSAxLTEuMDkyIDEuNDkzLS45MDguNTM0LTEuMjkgMS4xMjYtMS4yMyAyLjExNGwuMDA2LjQ0OGgxLjUyN3YtLjM3NmMwLS42NS4yNDQtLjk4NyAxLjEwNi0xLjQ5NC44OTYtLjUzNCAxLjM5Ni0xLjIzOCAxLjM5Ni0yLjI0NiAwLTEuNDU1LTEuMjA3LTIuNDk1LTMuMDEtMi40OTUtMS45NTUgMC0zLjAzIDEuMTMtMy4wOCAyLjY5em0yLjg5NiA3LjA1OGMuNjcyIDAgMS4wOTMtLjQxNCAxLjA5My0xLjA0NiAwLS42NC0uNDIzLTEuMDU0LTEuMDk1LTEuMDU0LS42NiAwLTEuMDkzLjQxNS0xLjA5MyAxLjA1NCAwIC42MzIuNDM0IDEuMDQ2IDEuMDkzIDEuMDQ2eiIgZmlsbD0iI0I1QjVCNSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+'), none;
        }

        .icon.icon-closed-box {
            width: 68px;
            height: 54px;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2OCIgaGVpZ2h0PSI1NCIgdmlld0JveD0iMjQuMSAtMTcgNjggNTQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMjQuMSAtMTcgNjggNTQiPjxwYXRoIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiIGQ9Ik0yNS4xLTVoNjZNMzIuMSAyOGgxNk0zMi4xIDIzaDEyIi8+PHBhdGggc3Ryb2tlPSIjQjJCMkIyIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI1LjEtNS40bDYuNy0xMC42aDUyLjlsNi40IDEwLjZ2MzguNmMwIDEuNi0xLjIgMi44LTIuOCAyLjhoLTYwLjRjLTEuNiAwLTIuOC0xLjItMi44LTIuOHYtMzguNnpNNTguMS0xNnYxMSIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
        }

        .icon.icon-closed-box.has-error {
            width: 68px;
            height: 54px;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2OCIgaGVpZ2h0PSI1NCIgdmlld0JveD0iMjQuMSAtMTcgNjggNTQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMjQuMSAtMTcgNjggNTQiPjxwYXRoIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiIGQ9Ik0yNS4xLTVoNjZNMzIuMSAyOGgxNk0zMi4xIDIzaDEyIi8+PHBhdGggc3Ryb2tlPSIjZmY2ZDZkIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI1LjEtNS40bDYuNy0xMC42aDUyLjlsNi40IDEwLjZ2MzguNmMwIDEuNi0xLjIgMi44LTIuOCAyLjhoLTYwLjRjLTEuNiAwLTIuOC0xLjItMi44LTIuOHYtMzguNnpNNTguMS0xNnYxMSIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
        }

        .flexbox {}

        .flexbox body,
        .flexbox .content,
        .flexbox .content .wrap,
        .flexbox .main {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }

        .flexbox .main-content {
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }

        .step-footer {
            z-index: 2;
            position: relative;
            margin-top: 1em;
            zoom: 1;
        }

        .step-footer:after,
        .step-footer:before {
            content: "";
            display: table;
        }

        .step-footer:after {
            clear: both;
        }

        .step-footer .step-footer-previous-link {
            cursor: pointer;
            display: block;
        }

        .step-footer .step-footer-previous-link .previous-link-icon {
            fill: #8a8f6a;
            transition: all 0.2s cubic-bezier(0.3, 0, 0, 1);
            margin-right: 0.25em;
        }

        .step-footer .step-footer-previous-link:hover .previous-link-icon {
            fill: #2b78a0;
            -webkit-transform: translateX(-5px);
            transform: translateX(-5px);
        }

        .step-footer .step-footer-info {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .content {
            overflow-x: hidden;
        }

        .content.content-second {
            display: none;
        }

        .section {
            position: relative;
            padding-top: 2em;
        }

        .section.thank-you-checkout-info {
            padding-top: 0.5em;
        }

        .section:first-child {
            padding-top: 0;
        }

        .section .section-header {
            position: relative;
        }

        .section .section-content {
            zoom: 1;
            margin-bottom: 2em;
        }

        .section .section-content .section-content-text {
            margin-bottom: 0.75em;
        }

        .section .section-content.no-mb,
        .section .section-content:last-child {
            margin-bottom: inherit;
        }

        .section .section-content:after,
        .section .section-content:before {
            content: "";
            display: table;
        }

        .section .section-content .content-box {
            box-shadow: 0 0 0 1px #d9d9d9;
            border-radius: 4px;
            background: #fff;
            color: #737373;
            margin-top: 1em;
        }

        .section .section-content .content-box.has-error {
            box-shadow: 0 0 0 2px #ff6d6d;
            color: #ff6d6d;
        }

        .section .section-content .content-box.no-border {
            box-shadow: none;
        }

        .section .section-content .content-box:first-child {
            margin-top: 0;
        }

        .section .section-content .content-box .content-box-row {
            display: table;
            box-sizing: border-box;
            width: 100%;
            border-top: 1px solid #d9d9d9;
            zoom: 1;
        }

        .section .section-content .content-box .content-box-row.content-box-row-padding {
            padding: 0.8em 0.6em;
        }

        .section .section-content .content-box .content-box-row:first-child {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-top: none;
        }

        .section .section-content .content-box .content-box-row:last-child {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .section .section-content .content-box .content-box-row:after,
        .section .section-content .content-box .content-box-row:before {
            content: "";
            display: table;
        }

        .section .section-content .content-box .content-box-row.content-box-row-secondary {
            background-color: #fafafa;
        }

        .section .section-content .content-box .content-box-row.content-box-row-no-border {
            padding-bottom: 0;
        }

        .section .section-content .content-box .content-box-row.content-box-row-no-border+.content-box-row {
            border-top: none !important;
        }

        .section .section-content .content-box .content-box-emphasis {
            font-weight: 500;
            color: #4d4d4d;
        }

        .section .section-content .content-box h3 {
            color: #4d4d4d;
        }

        .section .section-content .content-box h2 {
            color: #333333;
        }

        .section .section-content .content-box h2:only-child {
            margin: 0;
        }

        .section .section-title {
            color: #333333;


        }

        .payment-later-table,
        .payment-later-table>table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            box-shadow: 0px 0px 5px rgb(10 31 68 / 21%);
            border-radius: 9px;
            background-color: #FFFFFF;
        }

        .paylater--text {
            color: #ACA9A9;
        }

        .payment-later-table--loading {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            box-shadow: 0px 0px 5px rgb(10 31 68 / 21%);
            border-radius: 9px;
            background-color: #FFFFFF;
            display: none;
        }

        .payment-later-table--loading.show {
            display: block;
        }

        .payment-later-table>table th {
            text-align: center;
            padding: 16px;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            color: #8a8f6a;
        }

        .payment-later-table>table th:first-child {
            text-align: left;
            border-top-left-radius: 9px;
            border: 1px;
        }

        .payment-later-table>table th:last-child {
            text-align: right;
            border-top-right-radius: 9px;
            border: 1px;
        }

        .payment-later-table>table td {
            text-align: center;
            padding: 16px;
            font-weight: 500;
        }

        .payment-later-table>table td:first-child {
            text-align: left;
        }

        .payment-later-table>table td:last-child {
            text-align: right;
            padding: 16px;
        }

        .payment-later-table>table tr:nth-child(odd) {
            background-color: #D9D9D9;
        }


        .fieldset {
            margin: -0.45em;
            zoom: 1;
        }

        .fieldset:after,
        .fieldset:before {
            content: "";
            display: table;
        }

        .fieldset:after {
            clear: both;
        }

        .fieldset .field {
            width: 100%;
            float: left;
            padding: 0.45em;
            box-sizing: border-box;
        }

        .fieldset .field .field-input-btn-wrapper {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .fieldset .field .field-input-btn-wrapper .field-input-btn {
            width: auto;
            margin-left: 0.9em;
            white-space: nowrap;
            padding-top: 0;
            padding-bottom: 0;
        }

        .fieldset .field .field-input-btn-wrapper .field-input-wrapper {
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .fieldset .field .field-input-wrapper {
            position: relative;
        }

        .fieldset .field .field-input-wrapper .field-label {
            font-size: 0.85714em;
            font-weight: normal;
            position: absolute;
            top: 0;
            width: 100%;
            padding: 0 0.93333em;
            z-index: 1;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transform: translateY(3px);
            transform: translateY(3px);
            pointer-events: none;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            box-sizing: border-box;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="0 ")";
            filter: alpha(opacity=0);
            color: #999999;
            transition: all 0.2s ease-out;
            margin: 0.5em 0;
            margin-top: 0.3em;
            display: block;
        }




        .fieldset .field .field-input-wrapper .field-description {
            display: block;
            margin-left: 25px;
            margin-top: 2px;
        }

        .fieldset .field .field-input-wrapper.field-input-wrapper-select {}

        .fieldset .field .field-input-wrapper.field-input-wrapper-select::before {
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMSIgaGVpZ2h0PSIxOSIgdmlld0JveD0iMCAwIDIxIDE5Ij48dGl0bGU+QXJ0Ym9hcmQgMTwvdGl0bGU+PGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjMDAwIj48Zz48cGF0aCBkPSJNMCAwaDF2MTlIMFYweiIgaWQ9IlNoYXBlIiBmaWxsLW9wYWNpdHk9Ii4xNSIvPjxwYXRoIGQ9Ik0xMSA4aDEwbC01IDUtNS01eiIgZmlsbC1vcGFjaXR5PSIuNSIvPjwvZz48L2c+PC9nPjwvc3ZnPg=='), none;
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 50px;
            background-position: center center;
            background-repeat: no-repeat;
            pointer-events: none;
        }

        .fieldset .field .field-message {
            font-size: 0.85714em;
        }

        .fieldset .field .field-message.field-message-error {
            margin: 0;
            display: none;
            margin: 0.75em 0 0.25em;
            transition: all 0.3s ease-out;
            line-height: 1.3em;
            color: #ff6d6d
        }

        .fieldset .field.field-active {}

        .fieldset .field.field-active .field-input-wrapper .field-label {
            color: #737373;
        }

        .fieldset .field.field-show-floating-label {}

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-label {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="100 ")";
            filter: alpha(opacity=100);
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input {
            padding-top: 1.5em;
            padding-bottom: 0.38em;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-webkit-input-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-moz-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-moz-placeholder {
            color: transparent;
        }

        .fieldset .field.field-show-floating-label .field-input-wrapper .field-input::-ms-input-placeholder {
            color: transparent;
        }

        .fieldset .field.field-error {}

        .fieldset .field.field-error .field-input-wrapper {}

        .fieldset .field.field-error .field-message.field-message-error {
            display: block;
        }

        .wrap {
            margin: 0 auto;
            max-width: 40em;
            zoom: 1;
        }

        .wrap:after {
            clear: both;
        }

        .wrap:after,
        .wrap:before {
            content: "";
            display: table;
        }

        .sidebar {
            position: relative;
            color: #717171;
        }

        .sidebar h2 {
            color: #323232;
        }

        .sidebar:after {
            content: "";
            display: block;
            width: 300%;
            position: absolute;
            top: 0;
            left: -100%;
            bottom: 0;
            background: #fafafa;

            z-index: -1;
            box-shadow: 0 -1px 0 #e1e1e1 inset;
        }

        .sidebar .sidebar-content {}

        .sidebar .sidebar-content .order-summary {}

        .sidebar .sidebar-content .order-summary .order-summary-sections {}

        .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section {
            border-top: 1px solid;
            padding-top: 1.5em;
            padding-bottom: 1em;
            border-color: #e1e1e1;
        }

        .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section:first-child {
            border-top: none;
        }

        .sidebar .sidebar-content .order-summary .order-summary-emphasis {
            font-weight: 500;
            color: #4b4b4b;
        }

        .sidebar .sidebar-content .order-summary .order-summary-small-text {
            font-size: 0.85714em;
            color: #969696;
        }

        .sidebar .sidebar-content .order-summary .product {}

        .sidebar .sidebar-content .order-summary .product:first-child td {
            padding-top: 0;
        }

        .sidebar .sidebar-content .order-summary .product td {
            padding-top: 1em;
        }

        .sidebar .sidebar-content .order-summary .product .product-image {}

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail {
            width: 4.6em;
            height: 4.6em;
            border-radius: 8px;
            background: #fff;
            position: relative;
        }

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-wrapper {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-wrapper .product-thumbnail-image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
        }

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail .product-thumbnail-quantity {
            font-size: 0.85714em;
            font-weight: 500;
            white-space: nowrap;
            padding: 0.15em 0.65em;
            border-radius: 2em;
            background-color: rgba(153, 153, 153, 0.9);
            color: #fff;
            position: absolute;
            right: -0.75em;
            top: -0.75em;
            z-index: 2;
        }

        .sidebar .sidebar-content .order-summary .product .product-image .product-thumbnail::after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            border-radius: 8px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1) inset;
        }

        .sidebar .sidebar-content .order-summary .product .product-description {
            width: 100%;
        }

        .sidebar .sidebar-content .order-summary .product .product-description .product-description-name,
        .sidebar .sidebar-content .order-summary .product .product-description .product-description-variant,
        .sidebar .sidebar-content .order-summary .product .product-description .product-description-property {
            display: block;
        }

        .sidebar .sidebar-content .order-summary .product .product-quantity {}

        .sidebar .sidebar-content .order-summary .product .product-price {
            white-space: nowrap;
        }

        .sidebar .btn-disabled {
            cursor: default;
            background: #c8c8c8;
            box-shadow: none;
        }


        .logo-text {
            color: #333333;
        }

        .main {}

        .main .main-header {}

        .main .main-header .logo {
            display: none;
        }

        .main .main-header .breadcrumb {}

        .main .main-header .breadcrumb .breadcrumb-item {
            display: inline-block;
            font-size: 0.85714em;
            color: #999999;
        }

        .main .main-header .breadcrumb .breadcrumb-item.breadcrumb-item-current {
            font-weight: 500;
            color: #4d4d4d;
        }

        .main .main-header .breadcrumb .breadcrumb-item:after {
            content: "";
            display: inline-block;
            width: 6px;
            height: 11px;
            vertical-align: middle;
            margin: 0 0.5em;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2IiBoZWlnaHQ9IjExIiBvcGFjaXR5PSIuNCIgZmlsbD0iIzAwMCI+PHBhdGggZD0iTS41MjYgMS40MDhsNCA0LjY0NS4wMTQtLjgzLTQgNC4zNTQuOTIuODQ2IDQtNC4zNTYuMzc2LS40MS0uMzYyLS40Mi00LTQuNjQ1LS45NDguODE2eiIvPjwvc3ZnPg=='), none;
        }

        .main .main-header .breadcrumb .breadcrumb-item:last-child:after {
            display: none;
        }

        .main .main-header .breadcrumb .breadcrumb-item .breadcrumb-link {
            cursor: pointer;
        }

        .main .main-footer {
            padding: 1em 0;
            border-top: 1px solid #e6e6e6;
        }

        .main h2 {
            color: #333333;
        }

        .field-label-strong {
            font-weight: 600;
        }

        .ctrl_payment_method {
            padding: 10px 60px;
        }

        .ctrl_payment_method>label {
            margin-bottom: 5px;
            display: block;
        }

        .ctrl_payment_method .payment_method_list {
            padding-left: 10px;
        }

        .total-line {}

        .total-line td {
            padding-top: 0.75em;
        }

        .total-line-table-footer .total-line td {
            padding-top: 3em;
            position: relative;
        }

        .total-line-table-footer .total-line td::before {
            background-color: #e1e1e1;
            content: '';
            position: absolute;
            top: 1.5em;
            left: 0;
            width: 100%;
            height: 1px;
        }

        .payment-due-label {}

        .payment-due-label .payment-due-label-total {
            font-size: 1.14286em;
            color: #4b4b4b;
        }

        .payment-due {}

        .payment-due .payment-due-currency {
            font-size: 0.85714em;
            vertical-align: 0.2em;
            margin-right: 0.5em;
            color: #969696;
        }

        .payment-due .payment-due-price {
            font-size: 1.71429em;
            font-weight: 500;
            letter-spacing: -0.04em;
            color: #4b4b4b;
            line-height: 1em;
        }

        .applied-reduction-code {
            margin-left: 0.5em;
        }

        .applied-reduction-code .applied-reduction-code-icon {
            fill: #8a8f6a;
            vertical-align: middle;
            margin-right: 0.14286em;
        }

        .applied-reduction-code .applied-reduction-code-information {
            font-size: 0.85714em;
            color: #8a8f6a;
            font-weight: 500;
        }

        .applied-reduction-code-clear-button {
            vertical-align: middle;
            margin-left: 0.28571em;
        }

        .hanging-icon {
            margin-right: 0.75em;
            stroke: #8a8f6a;
        }

        .hanging-icon.hanging-icon-error {
            stroke: #ff6d6d;
        }

        .os-header {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0;
        }

        .os-header .os-header-heading {
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .os-header .os-header-heading .os-order-number {
            display: block;
        }

        .os-header .os-header-heading .os-header-title {
            font-size: 1.5em;
            margin-bottom: 0.1em;
        }

        .os-header .os-header-heading .os-description {
            color: #4d4d4d;
        }

        .wrap {
            margin: 0 auto;
            max-width: 40em;
            zoom: 1;
        }

        .wrap:after,
        .wrap:before {
            content: "";
            display: table;
        }

        .order-summary-toggle {
            background: #fafafa;
            border-top: 1px solid #e6e6e6;
            border-bottom: 1px solid #e6e6e6;
            padding: 1.25em 0;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            text-align: left;
            width: 100%;
        }

        .order-summary-toggle .order-summary-toggle-inner {
            display: table;
            box-sizing: border-box;
            width: 100%;
            zoom: 1;
        }

        .order-summary-toggle .order-summary-toggle-inner:after,
        .order-summary-toggle .order-summary-toggle-inner:before {
            content: "";
            display: table;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-icon-wrapper {
            display: table-cell;
            vertical-align: middle;
            padding-right: 0.75em;
            white-space: nowrap;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-icon-wrapper .order-summary-toggle-icon {
            fill: #8a8f6a;
            transition: fill 0.2s ease-in-out;
        }



        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-text {
            color: #8a8f6a;
            vertical-align: middle;
            transition: color 0.2s ease-in-out;
            display: none;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-text .order-summary-toggle-dropdown {
            vertical-align: middle;
            transition: fill 0.2s ease-in-out;
            fill: #8a8f6a;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-total-recap {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
            padding-left: 0.75em;
            white-space: nowrap;
        }

        .order-summary-toggle .order-summary-toggle-inner .order-summary-toggle-total-recap .total-recap-final-price {
            font-size: 1.28571em;
            line-height: 1em;
            color: #4d4d4d;
        }

        .order-summary-toggle.order-summary-toggle-show {}

        .order-summary-toggle.order-summary-toggle-hide .order-summary-toggle-inner .order-summary-toggle-text.order-summary-toggle-text-show,
        .order-summary-toggle.order-summary-toggle-show .order-summary-toggle-inner .order-summary-toggle-text.order-summary-toggle-text-hide {
            display: table-cell;
            width: 100%;
        }

        .logged-in-customer-information {
            display: table;
            box-sizing: border-box;
            width: 100%;
            margin-bottom: 1.5em;
        }

        .logged-in-customer-information:after,
        .logged-in-customer-information:before {
            content: "";
            display: table;
        }

        .logged-in-customer-information .logged-in-customer-information-avatar-wrapper {
            display: table-cell;
            padding-right: 1em;
            white-space: nowrap;
            vertical-align: middle;
        }

        .logged-in-customer-information .logged-in-customer-information-avatar-wrapper .logged-in-customer-information-avatar {
            border-radius: 8px;
            background-size: cover;
            position: relative;
            max-width: none;
            width: 50px;
            height: 50px;
            overflow: hidden;
        }

        .logged-in-customer-information .logged-in-customer-information-avatar-wrapper .logged-in-customer-information-avatar:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSI1MCIgdmlld0JveD0iMCAwIDUwIDUwIj48dGl0bGU+QXJ0Ym9hcmQ8L3RpdGxlPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PHBhdGggZD0iTTAgMGg1MHY1MEgwVjB6IiBmaWxsPSIjRDhEOEQ4Ii8+PHBhdGggZD0iTTI1LjEwMyAyNi4yNDJjMy4yMTIgMCA1LjY0Mi0yLjkyIDUuNjQyLTYuNzg3IDAtMy4wODYtMi41OC01LjcwNS01LjY0Mi01LjcwNS0zLjA2IDAtNS42NCAyLjYyLTUuNjQgNS43MDUgMCAzLjg2NiAyLjQzIDYuNzg3IDUuNjQgNi43ODd6bTAtMTAuNTRjMS45NTIgMCAzLjY3OCAxLjc2MyAzLjY3OCAzLjc1MyAwIDIuNzU3LTEuNTc0IDQuODM1LTMuNjc3IDQuODM1LTIuMTAzIDAtMy42NzctMi4wNzgtMy42NzctNC44MzUgMC0xLjk5IDEuNzI2LTMuNzUzIDMuNjc3LTMuNzUzem0tOC40NSAyMC42MTVsLjE3Ny0xLjg3N2MuMzktMy43NzggNC42OTctNC42MSA4LjI3My00LjYxIDMuNTc3IDAgNy44ODQuODMyIDguMjc0IDQuNTk4bC4xNzYgMS44OWgyLjAxNWwtLjE3Ni0yLjA4Yy0uNDQtNC4xMTctNC4wNjgtNi4zODQtMTAuMjktNi4zODQtNi4yMiAwLTkuODQ2IDIuMjY3LTEwLjI4NyA2LjM5N2wtLjE3NiAyLjA2N2gyLjAxNHoiIGZpbGw9IiNGRkYiLz48L2c+PC9zdmc+'), none;
        }

        .logged-in-customer-information .logged-in-customer-information-paragraph {
            display: table-cell;
            width: 100%;
            padding-top: 0.25em;
            vertical-align: middle;
        }

        @media (min-width: 1300px) {
            .hanging-icon {
                position: absolute;
                right: 100%;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                margin-right: 1.5em;
            }
        }

        @media (min-width: 1000px) {
            .wrap {
                padding: 0 5%;
                width: 90%;
                max-width: 78.57143em;
            }

            .order-summary-toggle {
                display: none;
            }

            .flexbox .content .wrap {
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .main {
                width: 52%;
                width: 52%;
                padding-right: 6%;
                /* float: left;*/
            }

            .main .main-header {
                padding-bottom: 1em;
            }

            .main .main-header .logo {
                display: block;
            }

            .main .main-header .breadcrumb {
                margin-top: 1em;
            }

            .sidebar {
                width: 38%;
                padding-left: 4%;
                background-position: left top;
                 float: right; 
            }

            .sidebar:after {
                left: 0;
                background-position: left top;
                box-shadow: 1px 0 0 #e1e1e1 inset;
            }

            .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section:first-child {
                padding-top: 0;
            }
        }

        @media (max-width: 999px) {
            .content {}

            .content.content-second {
                display: block;
            }

            .wrap {
                width: 100%;
                box-sizing: border-box;
                padding: 0 1em;
            }

            .banner {
                display: block;
            }

            .banner.error {
                padding-bottom: 100px;
            }

            #checkout_order_information_changed_error_message {
                position: absolute;
                top: 60px;
                left: 15px;
                width: calc(100% - 30px);
                margin-bottom: 0 !important;
            }

            .main .main-header .breadcrumb {
                display: none;
            }

            .sidebar .sidebar-content .order-summary.order-summary-is-collapsed {
                height: 0;
                overflow: hidden;
            }
        }

        @media (max-width: 999px) and (min-width: 750px) {
            .hanging-icon {
                position: absolute;
                right: 100%;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                margin-right: 1.5em;
            }
        }

        @media (min-width: 750px) {
            h1 {
                font-size: 2em;
            }

            .main {
                padding-top: 1.5em;
            }

            .main .main-content {
                padding-bottom: 4em;
            }

            .step-footer {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                margin-top: 1.5em;
            }

            .step-footer .step-footer-continue-btn {
                -webkit-flex: 0 0 auto;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                float: right;
            }

            .step-footer .step-footer-previous-link {
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                margin-right: 1em;
                float: left;
                display: block;
            }

            .step-footer .step-footer-info {
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                margin-right: 1em;
                float: left;
            }

            .section {
                padding-top: 3em;
            }

            .section.thank-you-checkout-info {
                padding-top: 1.5em;
            }

            .section .section-header {
                margin-bottom: 1.5em;
            }

            .field-half {
                width: 50% !important;
            }

            .field-two-thirds {
                width: 66.66667% !important;
            }

            .field-third {
                width: 33.33333% !important;
            }

            .os-header {
                margin: 0 0 -0.5em !important;
            }

            .icon {}

            .icon.icon-closed-box {
                width: 108px;
                height: 85px;
                background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgiIGhlaWdodD0iODUiIHZpZXdCb3g9IjAgMCAxMDggODUiPjxnIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiPjxwYXRoIGQ9Ik0xIDE4aDEwNk0xMSA3MC4zaDI2bS0yNi02aDI2bS0yNi02aDE3Ii8+PC9nPjxwYXRoIHN0cm9rZT0iI0IyQjJCMiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xIDE4bDEwLjctMTdoODQuN2wxMC42IDE3djYxLjVjMCAyLjUtMiA0LjUtNC41IDQuNWgtOTdjLTIuNSAwLTQuNS0yLTQuNS00LjV2LTYxLjV6TTU0IDF2MTYuNiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
            }

            .icon.icon-closed-box.has-error {
                width: 108px;
                height: 85px;
                background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDgiIGhlaWdodD0iODUiIHZpZXdCb3g9IjAgMCAxMDggODUiPjxnIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGZpbGw9Im5vbmUiPjxwYXRoIGQ9Ik0xIDE4aDEwNk0xMSA3MC4zaDI2bS0yNi02aDI2bS0yNi02aDE3Ii8+PC9nPjxwYXRoIHN0cm9rZT0iI2ZmNmQ2ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xIDE4bDEwLjctMTdoODQuN2wxMC42IDE3djYxLjVjMCAyLjUtMiA0LjUtNC41IDQuNWgtOTdjLTIuNSAwLTQuNS0yLTQuNS00LjV2LTYxLjV6TTU0IDF2MTYuNiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg=='), none;
            }
        }

        @media (min-width: 1000px) {

            .main,
            .sidebar {
                padding-top: 4em;
            }
        }

        .text-center {
            text-align: center;
        }

        @media (max-width: 749px) {
            .modal-container {
                display: block;
            }

            .tool-tip__info,
            .tool-tip {
                display: none !important;
            }

            .main {
                padding-top: 1.5em;
            }

            .main .main-content {
                padding-bottom: 1.5em;
            }

            .section-header {
                margin-bottom: 1em;
            }

            .text-center {
                text-align: left;
            }

            .btn {
                width: 100%;
                padding-top: 1.75em;
                padding-bottom: 1.75em;
            }

            .step-footer {}

            .step-footer .step-footer-previous-link {
                padding-top: 1.5em;
                text-align: center;
            }

            .step-footer .step-footer-info {
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-top: 1.5em;
                text-align: center;
            }
        }

        .thank-you-additional-content {
            margin-top: 15px;
            line-height: 1.25em;
        }

        .blank-slate {
            white-space: pre-line;
            padding: 1.5em;
            text-align: center;
        }

        .paylater {
            padding: .8em;
            white-space: normal;
        }

        .paylater--ul {
            list-style-type: disc;
            padding: 0 2em;
            padding-right: 1em;
            word-break: break-word;
        }

        .paylater--ul li {
            margin: 5px;
            text-align: justify;
        }

        .blank-slate .blank-slate-icon {
            margin-bottom: 1em;
        }

        .dp-none {
            display: none;
        }

        .dp-inline-block {
            display: inline-block;
        }

        .visually-hidden {
            border: 0;
            clip: rect(0, 0, 0, 0);
            clip: rect(0 0 0 0);
            width: 2px;
            height: 2px;
            margin: -2px;
            overflow: hidden;
            padding: 0;
            position: absolute;
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

        .group:after {
            content: "";
            display: table;
            clear: both;
        }

        .pt0 {
            padding-top: 0px !important;
        }

        .mt0 {
            margin-top: 0px !important;
        }

        .mb5 {
            margin-bottom: 5px;
        }

        .hidden {
            display: none !important;
        }

        form#form_update_shipping_method {
            position: relative;
        }

        .footer-powered-by {
            text-align: center;
            color: #bbb5b5;
            font-size: 0.65000em;
        }

        .order-checkout__loading {
            position: static;
        }

        .order-checkout__loading--box {
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: flex;
            opacity: 0;
            visibility: hidden;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .checkout-payment__loading--box {
            position: relative;
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: flex;
            opacity: 0;
            visibility: hidden;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0;
        }

        .checkout-payment__loading--box p {
            margin-top: 1em;
        }

        .checkout-payment__loading--box.show {
            z-index: 2;
            visibility: visible;
            opacity: 1;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .order-checkout__loading--box.show {
            z-index: 2;
            visibility: visible;
            opacity: 1;
        }

        .order-checkout__loading--circle {
            border: 2px solid #f3f3f3;
            border-top: 2px solid #5cabe0;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            margin: 0;
            -webkit-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            -moz-animation: spin 700ms infinite linear;
            -ms-animation: spin 1.5s infinite linear;
            -webkit-animation: spin 700ms infinite linear;
            -o-animation: spin 700ms infinite linear;
            animation: spin 700ms infinite linear;
            z-index: 1;
        }

        .order-checkout__loading--box.show:after {
            content: "";
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: 3;
        }


        .step-sections {
            position: relative;
            z-index: 3;
        }

        @media (max-width: 767px) {
            .order-checkout__loading--box {
                position: fixed;
            }

            .order-checkout__loading--box.show:after {
                display: none;
            }
        }


        .order-checkout__loading--show .order-checkout__loading--box {
            display: block;
        }


        @-moz-keyframes spin {
            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .redeem-login {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .redeem-login-title {
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }

        .redeem-login-title h2 {
            color: #333;
            margin-right: 5px;
        }


        .redeem-login-btn a {
            display: inline-block;
            border-radius: 4px;
            font-weight: 500;
            padding: 13px 10px;
            background: #8a8f6a;
            color: #fff;
            width: 82px;
            text-align: center;
        }

        .redeem-login-btn a:hover,
        .redeem-login-btn a:focus {
            filter: brightness(1.2);
        }

        .redeem-form-used {
            padding-top: 10px;
        }

        .btn-redeem-loading .btn-redeem-spinner {
            -webkit-animation: rotate 0.5s linear infinite;
            animation: rotate 0.5s linear infinite;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity="100 ")";
            filter: alpha(opacity=100);
        }

        .icon-redeem-button-spinner {
            position: absolute;
            top: 0;
            opacity: 0;
            right: -25px;
            width: 12px;
            height: 12px;
            border: 2px solid #999999;
            border-bottom-color: transparent;
            border-radius: 100%;
        }

        .total-line-table-footer {
            white-space: nowrap;
        }

        .row-align-top {
            vertical-align: top;
        }

        .section .section-content #form_update_shipping_method.default .content-box .content-box-row.content-box-row-secondary {
            padding: 0;
            background: transparent;
            border: none !important;
            margin: 0;
            width: 100%;
            display: block;
            box-shadow: unset !important;
        }

        form#form_update_shipping_method.default {
            padding: 0;
        }

        #form_update_shipping_method.default .content-box {
            box-shadow: unset;
        }




        .hrv-discount-choose-coupons {
            cursor: pointer;
            display: -webkit-flex;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hrv-discount-choose-coupons #list_short_coupon {
            display: -webkit-flex;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .hrv-discount-choose-coupons>div:first-child {
            flex: 0 0 134px;
        }

        .hrv-discount-choose-coupons #list_short_coupon>span:not(:last-child) {
            margin-right: 5px;
        }

        .hrv-discount-choose-coupons #list_short_coupon>span {
            overflow: hidden;
            padding: 6px 0;
            position: relative;
            margin-bottom: 5px;
        }

        .hrv-discount-choose-coupons #list_short_coupon>span span {
            border: 1px solid #8a8f6a;
            padding: 5px 10px;
            border-radius: 3px;
            background: #fff;
            font-weight: 700;
            color: #8a8f6a
        }

        .hrv-discount-choose-coupons #list_short_coupon>span:before {
            content: "";
            display: block;
            width: 10px;
            height: 10px;
            border: 1px solid #8a8f6a;
            background: #fff;
            z-index: 1;
            left: -7px;
            top: 50%;
            position: absolute;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        .hrv-discount-choose-coupons #list_short_coupon>span:after {
            content: "";
            display: block;
            width: 10px;
            height: 10px;
            border: 1px solid #8a8f6a;
            background: #fff;
            z-index: 1;
            right: -7px;
            top: 50%;
            position: absolute;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        .hrv-coupons-popup {
            width: 375px;
            transition: opacity 0.5s ease-out;
            padding: 0;
            opacity: 1;
            position: fixed;
            background: #FFFFFF;
            box-shadow: 0px 0px 20px rgb(33 33 33 / 20%);
            border-radius: 8px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-height: 70vh;
            min-height: 500px;
            z-index: 1234;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-out;
            display: -webkit-flex;
            display: flex;
            flex-direction: column;
        }

        .hrv-title-coupons-popup {
            display: flex;
            padding: 19px 16px;
            width: calc(100% - 32px);
            position: relative;
            box-shadow: inset 0px -1px 0px #eeeeee;
        }

        .hrv-title-coupons-popup p {
            width: 100%;
            font-weight: 500;
            font-size: 20px;
            line-height: 22px;
            padding-right: 60px;
            color: #424242;
        }

        .hrv-title-coupons-popup div {
            width: 60px;
            height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 5;
        }

        .hrv-title-coupons-popup div svg {
            float: right;
            cursor: pointer;
        }

        .hrv-coupons-popup-site-overlay {
            background: #CFCFCF;
            position: fixed;
            opacity: 0.6 !important;
            top: 0px;
            right: 0px;
            left: 0px;
            bottom: 0px;
            z-index: 123;
            visibility: hidden;
        }

        .hrv-content-coupons-code {
            overflow-x: hidden !important;
            overflow-y: auto;
            max-height: calc(100% - 82px);
            padding: 11px 12.5px;
        }

        div[class*="hrv-discount-code-"].open-more .text-center span:last-child {
            transform: rotate(180deg);
            display: inline-block;
        }

        h3.coupon_heading {
            font-size: 16px;
            line-height: 22px;
            font-weight: 500;
            padding: 0 3.5px;
            width: 100%;
            color: #424242;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }

            50% {
                -webkit-transform: translate(0, 10px);
                transform: translate(0, 10px);
            }

            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }

            50% {
                -webkit-transform: translate(0, 10px);
                transform: translate(0, 10px);
            }

            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }

        #show_all_coupon {
            /*-webkit-animation: pulse 1s infinite;
	animation: pulse 2s infinite;*/
            height: 40px;
            width: 100%;
            color: #8a8f6a;
        }

        #show_all_coupon svg {
            fill: #8a8f6a;
            width: 15px;
            position: relative;
        }

        .active-popup {
            opacity: 1;
            visibility: visible;
        }

        .hrv-content-coupons-code .coupon_icon {
            display: flex;
            width: 100%;
            align-items: center;
        }

        .hrv-content-coupons-code .coupon_item {
            position: relative;
            background: #fff;
            filter: drop-shadow(0px 0px 3px rgba(0, 0, 0, .15));
            padding: 10px 16px;
            display: flex;
            min-height: 80px;
            border-radius: 5px;
            margin: 5px 0px 15px 2px;
        }

        .hrv-content-coupons-code::-webkit-scrollbar {
            width: 8px;
            background-color: transparent;
        }

        .hrv-content-coupons-code::-webkit-scrollbar-thumb {
            background-color: #e0e0e0;
            border-radius: 4px;
        }

        .hrv-content-coupons-code .coupon_item:before {
            content: "";
            display: none;
            position: absolute;
            top: 0;
            left: -3px;
            height: 100%;
            width: 10px;
            color: #fff;
            background-clip: padding-box;
            background: repeating-linear-gradient(#e5e5e5, #e5e5e5 5px, transparent 0, transparent 9px, #e5e5e5 0, #e5e5e5 10px) 0/1px 100% no-repeat, radial-gradient(circle at 0 7px, transparent, transparent 2px, #e5e5e5ee 0, #e5e5e5 3px, currentColor 0) 1px 0/100% 10px repeat-y;
        }

        .hrv-content-coupons-code .coupon_icon>div {
            flex: 0 0 auto;
        }

        .hrv-content-coupons-code .coupon_icon .icon-svg {
            width: 37px;
            flex: 0 0 auto;
            margin-right: 10px;
            text-align: center;
        }

        .hrv-content-coupons-code .coupon_icon .icon-svg svg {
            width: 100%;
        }

        .hrv-content-coupons-code .coupon_body {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
            position: relative;
        }

        .hrv-content-coupons-code .coupon_body .coupon_head {
            width: 100%;
            display: -webkit-flex;
            display: flex;
            align-items: center;
            /* margin-bottom: 10px;
	position: relative;*/
        }

        .coupon_layer {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: transparent;
        }

        .hrv-content-coupons-code .coupon_item h3.coupon_title {
            font-size: 16px;
            width: calc(100% - 47px);
            margin: 0.25em 0 5px;
        }

        .hrv-content-coupons-code .coupon_item h3.coupon_title span {
            font-weight: bold;
            font-size: 16px;
            line-height: 20px;
            color: #212121;
        }

        .hrv-content-coupons-code .coupon_item .coupon_desc {
            display: none;
            position: relative;
            z-index: 2;
        }

        .hrv-content-coupons-code .coupon_item .coupon_desc ul,
        .hrv-content-coupons-code .coupon_item .coupon_desc_short ul {
            list-style: initial;
            list-style-position: outside;
            padding-left: 18px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_desc_short.close {
            display: none;
        }

        .hrv-content-coupons-code .coupon_item .coupon_desc_short.close+.coupon_desc {
            display: block;
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] {
            width: 100%;
            font-size: 14px;
            color: #212121;
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] ul li a {
            display: block;
            margin-bottom: 5px;
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] ul li a:before {
            content: "-";
            margin-right: 5px
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] ul li br {
            display: none;
        }

        .hrv-content-coupons-code .coupon_item div[class*="coupon_desc"] ul li a:first-child {
            margin-top: 5px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_actions {
            display: -webkit-flex;
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            margin-top: 8px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more {
            cursor: pointer;
            color: #8a8f6a;
            margin-top: 0px;
            position: relative;
            z-index: 2;
            font-size: 14px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more.open {
            font-size: 0px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more.open:before {
            content: "Thu gọn";
            font-size: 14px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_exp {
            max-width: calc(100% - 75px);
            line-height: 20px;
            margin-top: 0px;
            font-size: 14px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more svg {
            fill: #338bdc;
            width: 10px;
            margin-left: 8px;
        }

        .hrv-content-coupons-code .coupon_item .coupon_more.open svg {
            transform: rotate(180deg);
        }

        .hrv-content-coupons-code .coupon_item .coupon_more.open #show_all_icon {
            transform: rotate(180deg);
        }

        .btn_apply_line_coupon {
            height: 32px;
            padding: 5px 10px !important;
            width: auto !important;
            background: #8a8f6a;
        }



        @media screen and (max-width: 767px) {
            .hrv-content-coupons-code .coupon_item {
                padding: 5px 12.5px;
                width: calc(100% - 25px);
                margin: 5px 0 15px;
            }

            .hrv-coupons-popup {
                width: 100%;
                top: unset;
                bottom: 0;
                left: 0;
                height: 80vh;
                min-height: unset;
                max-height: unset;
                border-radius: 8px 8px 0 0;
                transform: translate(0, 0);
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
                -webkit-transition: transform 0.35s ease, bottom 0.25s ease, visibility 0s;
                transition: transform 0.3;
            }

            .hrv-coupons-popup.active-popup {
                max-height: calc(100% - 60px);
                -webkit-transform: translateY(0);
                transform: translateY(0);
                -webkit-transition-delay: 0.1s;
                transition-delay: 0.1s;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
            }

            .hrv-content-coupons-code .coupon_icon {
                padding: 10px 0;
            }
        }

        .sidebar .sidebar-content .order-summary .order-summary-sections .order-summary-section[data-order-summary-section="discount-display"] {
            padding: 0px;
            border-top: 0px;
            padding-bottom: 1.5em;
        }

        .order-summary-section.order-summary-section-total-lines.payment-lines[data-order-summary-section="payment-lines"] {
            padding-top: 1em !important;
        }
    </style>



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style type="text/css">
        /* sc-component-id: sc-keyframes-FiaaB */
        @-webkit-keyframes FiaaB {
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes FiaaB {
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        /* sc-component-id: sc-keyframes-gTcftA */
        @-webkit-keyframes gTcftA {

            10%,
            90% {
                -webkit-transform: translate3d(-1px, 0, 0);
                -ms-transform: translate3d(-1px, 0, 0);
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                -webkit-transform: translate3d(2px, 0, 0);
                -ms-transform: translate3d(2px, 0, 0);
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                -webkit-transform: translate3d(-4px, 0, 0);
                -ms-transform: translate3d(-4px, 0, 0);
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                -webkit-transform: translate3d(4px, 0, 0);
                -ms-transform: translate3d(4px, 0, 0);
                transform: translate3d(4px, 0, 0);
            }
        }

        @keyframes gTcftA {

            10%,
            90% {
                -webkit-transform: translate3d(-1px, 0, 0);
                -ms-transform: translate3d(-1px, 0, 0);
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                -webkit-transform: translate3d(2px, 0, 0);
                -ms-transform: translate3d(2px, 0, 0);
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                -webkit-transform: translate3d(-4px, 0, 0);
                -ms-transform: translate3d(-4px, 0, 0);
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                -webkit-transform: translate3d(4px, 0, 0);
                -ms-transform: translate3d(4px, 0, 0);
                transform: translate3d(4px, 0, 0);
            }
        }

        /* sc-component-id: sc-keyframes-caPIRE */
        @-webkit-keyframes caPIRE {
            0% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            20% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            40% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            60% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            80% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            100% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }
        }

        @keyframes caPIRE {
            0% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            20% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            40% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            60% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            80% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            100% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }
        }
    </style>
    <style>
        @-webkit-keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        body.swal2-toast-shown .swal2-container {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-shown {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-left,
        body.swal2-toast-shown .swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-left,
        body.swal2-toast-shown .swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-left,
        body.swal2-toast-shown .swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        body.swal2-toast-column .swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.swal2-toast-column .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            height: 2.2em;
            margin-top: .3125em
        }

        body.swal2-toast-column .swal2-toast .swal2-loading {
            justify-content: center
        }

        body.swal2-toast-column .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.swal2-toast-column .swal2-toast .swal2-validation-message {
            font-size: 1em
        }

        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            box-shadow: 0 0 .625em #d9d9d9;
            overflow-y: hidden
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row
        }

        .swal2-popup.swal2-toast .swal2-title {
            flex-grow: 1;
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: initial;
            width: .8em;
            height: .8em;
            line-height: .8
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .swal2-popup.swal2-toast .swal2-icon-text {
            font-size: 2em;
            font-weight: 700;
            line-height: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            height: auto;
            margin: 0 .3125em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 2em;
            height: 2.8125em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.25em;
            left: -.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 2em 2em;
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            -webkit-transform-origin: 0 2em;
            transform-origin: 0 2em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-shown {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            background-color: transparent
        }

        body.swal2-no-backdrop .swal2-shown>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-left,
        body.swal2-no-backdrop .swal2-shown.swal2-top-start {
            top: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-end,
        body.swal2-no-backdrop .swal2-shown.swal2-top-right {
            top: 0;
            right: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-left,
        body.swal2-no-backdrop .swal2-shown.swal2-center-start {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-end,
        body.swal2-no-backdrop .swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        .swal2-container {
            display: flex;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: transparent;
            z-index: 1060;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-top {
            align-items: flex-start
        }

        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .swal2-container.swal2-center {
            align-items: center
        }

        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end
        }

        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }

        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }

        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-container .swal2-modal {
                margin: 0 !important
            }
        }

        .swal2-container.swal2-fade {
            transition: background-color .1s
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, .4)
        }

        .swal2-popup {
            display: none;
            position: relative;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border-radius: .3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem;
            box-sizing: border-box
        }

        .swal2-popup:focus {
            outline: 0
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-popup .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .swal2-popup .swal2-title {
            display: block;
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-popup .swal2-actions {
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin: 1.25em auto 0;
            z-index: 1
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            box-sizing: border-box;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px
        }

        .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            border: 3px solid #999;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff;
            content: '';
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal
        }

        .swal2-popup .swal2-styled {
            margin: .3125em;
            padding: .625em 2em;
            font-weight: 500;
            box-shadow: none
        }

        .swal2-popup .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-popup .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-popup .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-popup .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
        }

        .swal2-popup .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-popup .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .swal2-popup .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .swal2-popup .swal2-close {
            position: absolute;
            top: 0;
            right: 0;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            transition: color .1s ease-out;
            border: none;
            border-radius: 0;
            outline: initial;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer;
            overflow: hidden
        }

        .swal2-popup .swal2-close:hover {
            -webkit-transform: none;
            transform: none;
            color: #f27474
        }

        .swal2-popup>.swal2-checkbox,
        .swal2-popup>.swal2-file,
        .swal2-popup>.swal2-input,
        .swal2-popup>.swal2-radio,
        .swal2-popup>.swal2-select,
        .swal2-popup>.swal2-textarea {
            display: none
        }

        .swal2-popup .swal2-content {
            justify-content: center;
            margin: 0;
            padding: 0;
            color: #545454;
            font-size: 1.125em;
            font-weight: 300;
            line-height: normal;
            z-index: 1;
            word-wrap: break-word
        }

        .swal2-popup #swal2-content {
            text-align: center
        }

        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-textarea {
            margin: 1em auto
        }

        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-textarea {
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            font-size: 1.125em;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            box-sizing: border-box
        }

        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5
        }

        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-range input {
            width: 80%
        }

        .swal2-popup .swal2-range output {
            width: 20%;
            font-weight: 600;
            text-align: center
        }

        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 2.625em;
            margin: 1em auto;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-popup .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        .swal2-popup .swal2-input[type=number] {
            max-width: 10em
        }

        .swal2-popup .swal2-file {
            font-size: 1.125em
        }

        .swal2-popup .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-popup .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            color: #545454;
            font-size: 1.125em
        }

        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-radio {
            align-items: center;
            justify-content: center
        }

        .swal2-popup .swal2-checkbox label,
        .swal2-popup .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-popup .swal2-checkbox input,
        .swal2-popup .swal2-radio input {
            margin: 0 .4em
        }

        .swal2-popup .swal2-validation-message {
            display: none;
            align-items: center;
            justify-content: center;
            padding: .625em;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300;
            overflow: hidden
        }

        .swal2-popup .swal2-validation-message::before {
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center;
            content: '!';
            zoom: normal
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, .4)
            }
        }

        .swal2-icon {
            position: relative;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            line-height: 5em;
            cursor: default;
            box-sizing: content-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            zoom: normal
        }

        .swal2-icon-text {
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 3.75em 3.75em;
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 3.75em;
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            top: -.25em;
            left: -.25em;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%;
            z-index: 2;
            box-sizing: content-box
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            z-index: 1
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86;
            z-index: 2
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .875em;
            width: 1.5625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-progresssteps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            font-weight: 600
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative
        }

        .swal2-progresssteps .swal2-progresscircle {
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center;
            z-index: 20
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progressline {
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6;
            z-index: 10
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .swal2-rtl .swal2-close {
            right: auto;
            left: 0
        }

        .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-animate-error-icon {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }

        .swal2-animate-error-icon .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: initial !important
            }
        }
    </style>
    <style>
        .ejoy-sub-active {
            color: #1296ba !important;
        }

        .ejoy-sub-hovered {
            color: #1296ba !important;
        }

        .ejoy-sub-clzz {
            cursor: pointer;

            line-Height: 1.2;
            font-size: 28px;
            color: #FFCC00;
            background: rgba(17, 17, 17, 0.7);

        }

        .ejoy-sub-clzz:hover {
            color: #1296ba !important;
        }

        .ej-trans-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999999;
            cursor: move;
        }

        .ej-trans-sub>span {
            color: #3CF9ED;
            font-size: 18px;
            text-align: center;
            padding: 0 16px;
            line-height: 1.5;
            background: rgba(32, 26, 25, 0.8);
            /* text-shadow: 0px 1px 4px black; */
            padding: 0 8px;

            line-Height: 1.2;
            font-size: 16px;
            color: #0CB1C7;
            background: rgba(67, 65, 65, 0.7);

        }

        .ej-main-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            cursor: move;
            padding: 0 8px;
        }

        .ej-main-sub>span {
            color: white;
            font-size: 20px;
            line-height: 1.5;
            text-align: center;
            background: rgba(32, 26, 25, 0.8);
            /* text-shadow: 0px 1px 4px black; */
            padding: 2px 8px;

            line-Height: 1.2;
            font-size: 28px;
            color: #FFCC00;
            background: rgba(17, 17, 17, 0.7);

        }

        .ej-main-sub .ejoy-sub-clzz {
            background: transparent !important
        }

        .tran-subtitle>span {
            cursor: pointer;
            padding-left: 10px;
            top: 2px;
            position: relative;
        }

        .tran-subtitle>span>span {
            position: absolute;
            top: -170%;
            background: rgba(0, 0, 0, 0.5);
            font-size: 13px;
            line-height: 20px;
            padding: 2px 8px;
            color: white;
            display: none;
            border-radius: 4px;
            white-space: nowrap;
            left: -50%;
            font-weight: normal;
        }

        .view-icon-copy-main-sub:hover>span,
        .view-icon-edit-sub:hover>span,
        .view-icon-copy-tran-sub:hover>span {
            display: block;
        }

        .tran-subtitle>span>svg {
            width: 16px;
            height: 16px;
            pointer-events: none;
            display: inline-flex !important;
            vertical-align: baseline !important;
        }

        .view-icon-copy-main-sub>svg {
            pointer-events: none;
            color: #FFCC00
        }

        .view-icon-copy-tran-sub {
            padding-left: 0 !important;
            padding-right: 8px !important;
        }

        .view-icon-copy-tran-sub>svg {
            pointer-events: none;
            color: #0CB1C7
        }

        .product-image .product-thumbnail-image {
            aspect-ratio: 1/1;
        }
    </style>
</head>

<body>


    <div class="banner" bis_skin_checked="1">
        
        <div class="wrap" bis_skin_checked="1">
            <a href="/" class="logo">


                <h1 class="logo-text">Manesti</h1>

            </a>
        </div>
    </div>
    <button class="order-summary-toggle order-summary-toggle-show">
				<div class="wrap" bis_skin_checked="1">
					<div class="order-summary-toggle-inner" bis_skin_checked="1">
						<div class="order-summary-toggle-icon-wrapper" bis_skin_checked="1">
							<svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-icon"><path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"></path></svg>
						</div>
						<div class="order-summary-toggle-text order-summary-toggle-text-show" bis_skin_checked="1">
							<span>Ẩn thông tin đơn hàng</span>
							<svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path></svg>
						</div>
						<div class="order-summary-toggle-text order-summary-toggle-text-hide" bis_skin_checked="1">
							<span>Hiển thị thông tin đơn hàng</span>
							<svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z"></path></svg>
						</div>
						<div class="order-summary-toggle-total-recap"bis_skin_checked="1">
							<span class="total-recap-final-price money"></span>
						</div>
					</div>
				</div>
			</button>
    <div class="content content-second" bis_skin_checked="1">
        <div class="wrap" bis_skin_checked="1">
            <div class="sidebar sidebar-second" bis_skin_checked="1">
                <div class="sidebar-content" bis_skin_checked="1">
                    <div class="order-summary" bis_skin_checked="1">
                        <div class="order-summary-sections" bis_skin_checked="1">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content" bis_skin_checked="1">
        
        <div class="wrap" bis_skin_checked="1">
            <div class="sidebar" bis_skin_checked="1">
                <div class="sidebar-content" bis_skin_checked="1">
                    <div class="order-summary order-summary-is-collapsed" bis_skin_checked="1">
                        
                        <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                        <div class="order-summary-sections" bis_skin_checked="1">
                            <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items" bis_skin_checked="1">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $total=0; ?>
                                        <?php foreach($orders as $order):?>
                                        <?php $total += $order->price * $order->qty?>
                                        <tr class="product">
                                            <td class="product-image">
                                                <div class="product-thumbnail" bis_skin_checked="1">
                                                    <div class="product-thumbnail-wrapper" bis_skin_checked="1">
                                                        <img class="product-thumbnail-image"src="/public/image/<?=esc($order->image)?>">
                                                    </div>
                                                    <span class="product-thumbnail-quantity" aria-hidden="true"><?=esc($order->qty)?></span>
                                                </div>
                                            </td>
                                            <td class="product-description">
                                                <span class="product-description-name order-summary-emphasis"><?=esc($order->name)?></span>

                                                <span class="product-description-variant order-summary-small-text">
                                                <?=esc($order->size)?> / <?=esc($order->color)?>
                                                </span>

                                            </td>
                                            <td class="product-price">
                                                <span class="order-summary-emphasis money"><?=esc($order->price * $order->qty)?></span>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines" bis_skin_checked="1">
                                <table class="total-line-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden"></span></th>
                                            <th scope="col"><span class="visually-hidden"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="total-line total-line-subtotal">
                                            <td class="total-line-name">Tạm tính</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis money">
                                                    <?php echo $total?>
                                                </span>
                                            </td>
                                        </tr>


                                        <tr class="total-line total-line-shipping">
                                            <td class="total-line-name">Phí vận chuyển</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis">
                                                30.000 ₫
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="total-line-table-footer">
                                        <tr class="total-line">
                                            <td class="total-line-name payment-due-label">
                                                <span class="payment-due-label-total">Tổng cộng</span>
                                            </td>
                                            <td class="total-line-name payment-due">
                                                <?php $total += 30000?>
                                                <span class="payment-due-price money">
                                                    <?php echo $total?>
                                                </span>
                                                <span class="checkout_version" display:none="" data_checkout_version="2">
                                                </span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main" bis_skin_checked="1">
                <div class="main-header" bis_skin_checked="1">

                    <a href="/" class="logo">

                        <h1 class="logo-text">Manesti</h1>

                    </a>

                    <style>
                        a.logo {
                            display: block;
                        }

                        .logo-cus {
                            width: 100%;
                            padding: 15px 0;
                            /* text-align: ; */
                        }

                        .logo-cus img {
                            max-height: 4.2857142857em
                        }

                        .logo-text {
                            /* text-align: ; */
                        }

                        @media (max-width: 767px) {
                            .banner a {
                                display: block;
                            }
                        }
                    </style>


                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/cart">Giỏ hàng</a>
                        </li>

                        <li class="breadcrumb-item breadcrumb-item-current">
                            Thông tin giao hàng
                        </li>

                    </ul>

                </div>
                <div class="main-content" bis_skin_checked="1">
                    
                    <script>
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                    </script>


                    <div class="step" bis_skin_checked="1">

                        <div class="step-sections steps-onepage" step="1" bis_skin_checked="1">


                            <form action="" method="post" class="completeOrder">
                            <div class="section" bis_skin_checked="1">
                                <div class="section-header" bis_skin_checked="1">
                                    <h2 class="section-title">Thông tin giao hàng</h2>
                                </div>
                                <div class="section-content section-customer-information no-mb" bis_skin_checked="1">
                                    <?php if(!session()->get('isLoggdIn')):?>
                                    <p class="section-content-text">
										<strong><a href="/account/signin">Đăng nhập</a></strong>
										 để theo dõi đơn hàng.
									</p>
									<?php endif?>
                                    <div class="fieldset" bis_skin_checked="1">
                                        <div class="field field-required  " bis_skin_checked="1">
                                            <div class="field-input-wrapper" bis_skin_checked="1">
                                                <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                                                <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="customer_name" name="customer_name" value="" autocomplete="false" required  req="min:6">
                                            </div>

                                        </div>



                                        <div class="field field-required field-two-thirds  " bis_skin_checked="1">
                                            <div class="field-input-wrapper" bis_skin_checked="1">
                                                <label class="field-label" for="checkout_user_email">Email</label>
                                                <input autocomplete="false" placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="customer_email" name="customer_email" value="">
                                            </div>

                                        </div>



                                        <div class="field field-required field-third  " bis_skin_checked="1">
                                            <div class="field-input-wrapper" bis_skin_checked="1">
                                                <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                                                <input autocomplete="false" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="customer_phone" name="customer_phone" value="<?=esc($user->defaultPhone)?>" required req="min:8|max:12">
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="section-content" bis_skin_checked="1">
                                    <div class="fieldset" bis_skin_checked="1">

                                            <div class="" bis_skin_checked="1">

                                                <div id="form_update_location_customer_shipping" class="order-checkout__loading radio-wrapper content-box-row content-box-row-padding content-box-row-secondary " for="customer_pick_at_location_false" bis_skin_checked="1">
                                                    <div class="order-checkout__loading--box" bis_skin_checked="1">
                                                        <div class="order-checkout__loading--circle" bis_skin_checked="1"></div>
                                                    </div>

                                                    <div class="field field-required  " bis_skin_checked="1">
                                                        <div class="field-input-wrapper" bis_skin_checked="1">
                                                            <label class="field-label" for="billing_address_address1">Địa chỉ</label>
                                                            <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="customer_address_detail" value="" required>
                                                        </div>

                                                    </div>



                                                    <input name="customer_province" type="hidden" value="">
                                                    <input name="customer_district" type="hidden" value="">
                                                    <input name="customer_ward" type="hidden" value="">
                                                    <input name="grossAmount" type="hidden" value="<?=esc($total)?>">


                                                    <div class="field field-show-floating-label  field-third " bis_skin_checked="1">
                                                        <div class="field-input-wrapper field-input-wrapper-select" bis_skin_checked="1">
                                                            <label class="field-label" for="customer_shipping_province"> Tỉnh / thành </label>
                                                            <select class="field-input" id="customer_shipping_province" name="province" required  req>
                                                            </select>
                                                        </div>


                                                    </div>


                                                    <div class="field field-show-floating-label  field-third " bis_skin_checked="1">
                                                        <div class="field-input-wrapper field-input-wrapper-select" bis_skin_checked="1">
                                                            <label class="field-label" for="customer_shipping_district">Quận / huyện</label>
                                                            <select class="field-input" id="customer_shipping_district" name="district" required  req>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="field field-show-floating-label   field-third  " bis_skin_checked="1">
                                                        <div class="field-input-wrapper field-input-wrapper-select" bis_skin_checked="1">
                                                            <label class="field-label" for="customer_shipping_ward">Phường / xã</label>
                                                            <select class="field-input" id="customer_shipping_ward" name="ward" required>

                                                            </select>
                                                        </div>

                                                    </div>



                                                </div>

                                            </div>

                                    </div>

                                </div>

                                <div id="change_pick_location_or_shipping" bis_skin_checked="1">



                                    <div id="section-shipping-rate" bis_skin_checked="1">
                                        <div class="section-header" bis_skin_checked="1">
                                            <h2 class="section-title">Phương thức vận chuyển</h2>
                                        </div>
                                        <div class="section-content" bis_skin_checked="1">

                                            <div class="content-box" bis_skin_checked="1">

                                                <div class="content-box-row" bis_skin_checked="1">
                                                    <div class="radio-wrapper" bis_skin_checked="1">
                                                        <label class="radio-label" for="shipping_rate_id_1594160">
                                                            <span class="radio-label-primary">Giao hàng tận nơi (Toàn quốc)</span>
                                                            <span class="radio-accessory content-box-emphasis">
                                                            30.000 ₫
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div id="section-payment-method" class="section" bis_skin_checked="1">
                                        <div class="section-header" bis_skin_checked="1">
                                            <h2 class="section-title">Phương thức thanh toán</h2>
                                        </div>
                                        <div class="section-content" bis_skin_checked="1">
                                            <div class="content-box" bis_skin_checked="1">

                                                <div class="radio-wrapper content-box-row" bis_skin_checked="1">
                                                    <label class="radio-label" for="payment_method_id_1002637986">
                                                        <div class="radio-content-input" bis_skin_checked="1">
                                                            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=1">
                                                            <div bis_skin_checked="1">
                                                                <span class="radio-label-primary">Thanh toán khi giao hàng (COD)</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <div class="step-footer" bis_skin_checked="1">

                                <button type="submit" class="step-footer-continue-btn btn">
                                    <span class="btn-content">Hoàn tất đơn hàng</span>
                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                </button>


                            <a class="step-footer-previous-link" href="/cart">
                                Giỏ hàng
                            </a>

                        </div>
                        </form>
                        </div>
                        
                        
                    </div>

                </div>
            </div>
            <input id="defAddress"type="hidden" value="<?=esc($user->defaultAddress)?>">
        </div>
        <script src="/public/js/vietnamlocalselector.min.js"></script>
        <script>
        window.addEventListener('DOMContentLoaded', async (event) => {
            var localpicker = await new LocalPicker({
                province: "province",
                district: "district",
                ward: "ward"
            });            
            var defAddress = $('#defAddress').val();
            var val = JSON.parse(defAddress);
            await $('#customer_name').val(val.name);
            await $('#billing_address_address1').val(val.detail);
            // await $('#customer_shipping_province').val(val.province).change();;
            // await $('#customer_shipping_district').val(val.district).change();;
            // await $('#customer_shipping_ward').val(val.ward).change();;
        });
        var ls = document.querySelectorAll('select.field-input');

        Array.from(ls).forEach(val => {
            val.onchange = function() {
                // console.log(this.name, this.options[this.selectedIndex].text);
                $(`input[name="customer_${this.name}"`).val(this.options[this.selectedIndex].text)
            }
        });
    
        var moneyText = document.querySelectorAll('.money');
            Array.from(moneyText).forEach(money => {
                let val = parseInt(money.textContent)
                money.innerText = Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                }).format(val);
            })
        $('.order-summary-toggle').click(e => {
            var text_show = $('.order-summary-toggle-text-show');
            var text_hide = $('.order-summary-toggle-text-hide');
            text_show.attr('class', 'order-summary-toggle-text order-summary-toggle-text-hide');
            text_hide.attr('class', 'order-summary-toggle-text order-summary-toggle-text-show');
            if ($('.order-summary').hasClass('order-summary-is-collapsed')) {
                $('.order-summary').attr('class', 'order-summary order-summary-is-expanded');
            } else {
                $('.order-summary').attr('class', 'order-summary order-summary-is-collapsed');
            }
        })
        $('.total-recap-final-price').text($('.payment-due-price').text());    
        </script>
    </body>
</html>
        