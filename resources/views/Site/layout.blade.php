<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tittle')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/9740156a5f.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #e5e5e5;
            color: #e5e5e5;
            font-family: helvetica neue, Helvetica, Arial, sans-serif;
        }

        .justify {
            text-align: justify;
        }

        .nav-wrapper {
            height: 30px;

            @media screen and (max-width: 600px) {
                margin-bottom: 60px !important;
            }

            & ul {
                display: inline-flex;
                margin: -35px 30px !important;

                @media screen and (max-width: 600px) {
                    margin: 15px 5px !important;
                }

                & i {
                    font-size: 13px !important;
                    color: #a5a8ab;
                }
            }

            & li {
                margin: 5px 7px;
            }

            & .title-topo {
                margin-left: 18% !important;
                font-size: 20px;
                color: #7b809a !important;
                margin-top: 10px !important;

                @media screen and (max-width: 600px) {
                    margin-left: 8% !important;
                }
            }

            & span {
                display: inline-flex;
                font-weight: 100;
                font-size: 15px !important;
            }

            & p {
                margin: 0px 5px !important;
                color: #7b809a;
            }

            & .destaque {
                margin-left: 18%;
                color: #000000;
                font-weight: 600;
                font-size: 15px !important;

                @media screen and (max-width: 600px) {
                    margin-left: 8% !important;
                }
            }
        }

        .logo {
            display: flex;

            & img {
                width: 32px;
                height: 32px;
                margin: 15px 0px;
            }

            & span {
                margin: 15px 10px !important;
                font-size: 12px !important;
                color: #fff;
            }
        }

        .card-title {
            font-size: 24px;
        }

        .nav-wrapper ul {
            color: #344767;

            & a {
                font-size: 13px;
                font-weight: 600;
                color: #606060
            }
        }

        .nav-wrapper {
            outline: none;
        }

        .card-image {
            margin: 0px 15px;
            height: 60px;
            padding: 15px 17px;
            width: 60px;
            border-radius: 10px;
            bottom: 15px;
        }

        .color-1 {
            background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
        }

        .color-2 {
            background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
        }

        .color-3 {
            background-image: linear-gradient(195deg, #66BB6A 0%, #43A047 100%);
        }

        .color-4 {
            background-image: linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%);
        }

        .card .card-image {
            position: absolute !important;
            top: -20px;
            z-index: 100;
        }

        .card-content .tittle {
            color: #625b5b;
        }

        .card-content p {
            position: relative;
            left: 20px;
            bottom: 15px;
        }

        .card {
            height: 160px;
            border-radius: 10px !important;

            @media screen and (max-width: 600px) {
                margin-bottom: 20px !important;
            }
        }

        .hamburger {
            display: none;
        }

        .espaço-grafico {
            display: block;
            margin-bottom: 15px;
            margin-top: 30px;
            margin-bottom: -30px;

            @media screen and (max-width: 600px) {
                display: block;
                margin-top: 20px;
            }
        }

        .card-grafico {


            @media screen and (max-width: 600px) {
                margin-bottom: 10px;
            }
        }

        .card-medio-1,
        .card-medio-2,
        .card-medio-3 {
            background-color: #fff;
            border: 1px solid;
            border-radius: 10px;
            margin-bottom: 40px;
        }

        .card-grafico h6,
        .card-grafico p {
            margin-left: 15px;
            margin-top: 0px;
        }

        .card-grafico h6 {
            font-weight: 700;
        }

        .container-dados {
            float: none !important;
        }

        .image-1 {
            border-radius: 10px;
            width: 95%;
            left: 10px;
            position: relative;
            bottom: 20px;
            background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
        }

        .image-2 {
            border-radius: 10px;
            width: 95%;
            left: 10px;
            position: relative;
            bottom: 20px;
            background-image: linear-gradient(195deg, #66BB6A 0%, #43A047 100%);
        }

        .image-3 {
            border-radius: 10px;
            width: 95%;
            left: 10px;
            position: relative;
            bottom: 20px;
            background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
        }

        .projects {
            padding: 0px !important;

            & h6 {
                color: #000000 !important;
                font-weight: 700;
            }
        }

        .check {
            padding: 0px !important;

            & span {
                display: flex;
                margin: 0px !important;
                align-items: center;
            }

            & p {
                font-weight: 700;
                font-size: 13px !important;
                color: #808080 !important;
                margin-right: 5px;
            }

            & .menu {
                color: #000000 !important;
                margin: 5px 0px !important;
                cursor: pointer;
            }

            & .month {
                color: #808080 !important;
                font-size: 13px !important;
                font-weight: 100;
            }
        }

        .tabela-projeto {
            margin-top: 45px;
        }

        .projeto {
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            background-color: #fff;
            border-radius: 10px;
            width: 66.1% !important;
            margin-right: 20px;
            height: 540px;

            @media screen and (max-width: 600px) {
                width: 100% !important;
                height: 100%;
                margin-top: -50px !important;
            }

            & .title {
                color: #808080 !important;
                font-size: 11px;
                font-weight: 700;
                text-transform: uppercase;
            }

            & img {
                position: relative;
                width: 32px !important;
                height: 32px !important;
                border: 2px solid #fff;
            }

            & .image-circle-2 {
                left: -25px;
                width: 32px;
                height: 32px;
                border: 2px solid #fff;
            }

            & .image-circle-3 {
                left: -50px;
                width: 32px;
                height: 32px;
                border: 2px solid #fff;
            }

            & .image-circle-4 {
                left: -75px;
                width: 32px;
                height: 32px;
                border: 2px solid #fff;
            }


            & td {
                color: #808080;
                font-size: 13px;
            }
        }

        .text-today::before {
            clear: both;

        }


        h1 {
            color: black;
            font-size: 20px !important;
            margin: 0px !important;
            margin-top: 20px !important;
        }

        .text-today {
            margin-top: 60px !important;
        }

        .text-today p {
            margin-left: -40px !important;
            position: relative;
            bottom: 15px;
        }

        .border {
            border: 1px solid #d0d0d033;
            width: 100%;
            position: absolute;
            z-index: 100;
            left: 0;
            top: 100px;
        }

        .border-2 {
            border: 1px solid #d0d0d033;
        }

        .border-3 {
            border: 1px solid;
            width: 100%;
            left: 0px;
            position: relative;
            top: 60px;
            color: #ffffff17;
        }


        .value {
            font-size: 20px;
            font-weight: 700;
            color: #000000;
        }

        .day {
            font-weight: 400;

            @media screen and (max-width: 600px) {
                font-size: 16px;
            }
        }

        .porcentgem {
            font-weight: 700;
            margin-right: 5px;
        }

        .card i {
            position: relative;
            left: 2px;
            top: 5px;
            font-size: 20px;
        }

        .update {
            margin-top: 25px !important;
        }

        .relogio {
            font-weight: 700;
            margin-right: 2px;
        }

        .menu-lateral {
            background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
            border-radius: 8px;
            height: auto;
            padding: 0px !important;
            margin: -45px 0px;
            position: fixed;
            display: block;
            z-index: 1000;

            @media screen and (max-width: 600px) {
                display: block;
                transform: translateX(-150%);
                -webkit-transform: translateX(-150%);
                margin: 0;
            }

            & p {
                color: #c2bbbb !important;
            }

        }

        .menu-lateral span {
            margin-top: 10px;
            font-weight: 700;
            font-size: 18px;
            margin: 5px 0px;
        }

        .menu-lateral h6 {
            font-size: 12px;
            font-weight: 700;
            color: #fff;
            margin: 10px 5px;

        }

        .menu-lateral-mobile {
            background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
            border-radius: 8px;
            height: auto;
            padding: 0px !important;
            margin: 0;
            position: fixed;
            display: block;
            z-index: 1000;


            & p {
                color: #c2bbbb !important;
                margin-bottom: 15px !important;
            }

        }

        .menu-lateral-mobile span {
            margin-top: 10px;
            font-weight: 700;
            font-size: 18px;
            margin: 5px 0px;
        }

        .menu-lateral-mobile h6 {
            font-size: 12px;
            font-weight: 700;
            color: #fff;
            margin: 10px 5px;

            @media screen and (max-width: 600px) {
                margin: 25px 5px;
            }

        }


        .icon-check {
            margin-right: 5px;
            color: #1a73e8;
        }

        .text-negrito {
            margin-right: 5px;
            font-weight: 700;
        }

        .tres-pontos {
            color: #9e9e9e;
            font-size: 20px;
        }

        .font-weight {
            font-weight: 600;
        }

        .interative-user {
            margin-bottom: 10px;

            & p {
                white-space: nowrap !important;
            }
        }

        .interative-user i {
            margin-right: 20px;
            font-size: 18px;
        }

        .user {
            margin: 5px 5px !important;
            color: #a5a8ab;
        }

        .pages h6 {
            margin-bottom: 20px;
        }

        .pages button {
            border-radius: 8px;
            border: none;
            cursor: pointer;
            height: 40px;
            color: #fff !important;
            display: flex;
            margin-bottom: 20px;
            background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);

        }

        .button-pages i {
            margin: 6px 10px;

            @media screen and (max-width: 600px) {
                margin: 12px 10px !important;
            }
        }

        .button-pages p {
            margin: 11px 0px;
            font-size: 13px;
            font-weight: 500;

            @media screen and (max-width: 600px) {
                margin: 11px 0px !important;
            }
        }

        .button-documentation button {
            margin-bottom: 20px;

            & p {

                @media screen and (max-width: 600px) {
                    margin-bottom: 0px !important;
                }
            }
        }

        .documentation {
            margin-top: 10px;
        }

        .documentation button {
            border-radius: 8px;
            border: none;
            cursor: pointer;
            height: 40px;
            color: #fff;
            background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);

            & p {
                margin: 0px;
                font-size: 12px;
                font-weight: 500;
            }
        }

        .button-documentation button:hover {
            -webkit-box-shadow: 0px 0px 89px 0px rgba(213, 30, 230, 0.3);
            -moz-box-shadow: 0px 0px 89px 0px rgba(213, 30, 230, 0.3);
            box-shadow: 0px 0px 89px 0px rgba(213, 30, 230, 0.3);
        }

        .brand-logo {

            @media screen and (max-width: 600px) {
                font-size: 25px !important;
            }
        }

        .display-mobile {


            @media screen and (max-width: 600px) {
                display: flex;
            }
        }

        .transparente {
            background: transparent !important;

            & button {
                border-radius: 0px !important;
            }
        }

        .transparente:hover {
            background-color: #757575 !important;
        }

        nav .sidenav-trigger i {
            color: #344767;
        }

        .sidenav {
            display: none !important;

            @media screen and (max-width: 600px) {
                background-color: transparent !important;
                box-shadow: none !important;
                display: block !important;
            }
        }

        .sidenav-overlay {
            background-color: transparent !important;

        }

        .image-circle {
            width: 32px !important;
            height: 32px !important;
            object-fit: cover;
        }

        .icon-1 {
            width: 36px;
            height: 36px;
            object-fit: cover;
        }

        .title-company {
            width: 50%;
        }

        .companes {
            padding-top: 10px !important;
            padding-right: 40px !important;
            white-space: nowrap !important;
        }

        meter {
            width: 153px;
        }

        .orders {
            width: 32% !important;
            height: 540px;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            background-color: #fff;
            border-radius: 10px;

            @media screen and (max-width: 600px) {
                width: 100% !important;
                margin-top: 25px;
            }

            @media screen and (min-width: 600px) and (max-width: 1350px) {
                width: 31.5% !important;
            }
        }

        .template-lateral {

            & .arrow {
                color: #4caf50 !important;
                margin-right: 10px;
            }

            & h6 {
                font-size: 16px;
                font-weight: 600;
                color: #000000 !important;

                @media screen and (max-width: 600px) {
                    margin: 15px 0px !important;
                }
            }

            & p {
                color: #000000;
                margin: 25px 0px;
            }
        }

        .notifation {
            display: flow;
            padding: 0px !important;

            & h6 {
                font-size: 12px;
            }

            .danger {
                margin: 0px -3px;
                font-size: 20px !important;
                color: #EF5350;
            }

            .bell {
                color: #4caf50 !important;
            }

            .cart {
                color: #49a3f1;
            }

            .credit {
                color: #FFA726;
            }

            .key {
                color: #EC407A;
            }

            .payments {
                color: #42424a;
            }
        }

        .mensagem {

            & p {
                font-size: 11px;
            }
        }

        .border-4 {
            border-left: 2px solid #efe7e7;
            width: 10px;
            height: 59px;
            margin: -3px 6px;
        }

        .text {
            padding: 0px !important;
        }

        .over-view {
            margin-bottom: 45px;

            & h6 {
                font-size: 14px;
                margin: 0px;
                color: #000000;
                font-weight: 700;
            }

            & p {
                font-size: 11px;
                margin: 0px;
                color: #000000;
                font-weight: 600;
            }
        }

        .type-here {

            & input {
                border: 1px solid #a5a8ab !important;
                border-radius: 5px !important;
                height: 30px !important;

                @media screen and (max-width: 600px) {
                    height: 35px !important;
                }
            }

            & label {
                width: 130px;
                position: absolute;
                top: 27px;
                margin-left: 10px;
                color: #888a8b;
            }
        }

        .others-icons {
            display: none;

            @media screen and (max-width: 600px) {
                margin: 17px 25px !important;
                display: block;

                & i {
                    color: #7b809a;
                    font-size: 15px;
                }
            }
        }

        .type-here-mobile {
            display: none;

            @media screen and (max-width: 600px) {
                display: block;
                margin: 10px 20px !important;

                & input {
                    border: 1px solid #a5a8ab !important;
                    border-radius: 5px !important;
                    height: 30px !important;
                }

                & label {
                    width: 130px;
                    position: absolute;
                    top: 71px;
                    margin-left: 10px;
                    color: #888a8b;
                    font-size: 13px;
                }
            }
        }

        .scroll-table {
            overflow-x: scroll !important;


            @media screen and (max-width: 600px) {
                overflow-x: auto;
            }
        }

        .table-project td {
            white-space: nowrap;
            padding: 7px 63px;
        }

        .table-project td:first-child {
            padding: 5px 20px 5px 10px;
        }

        .last {
            border: none;
        }


        .footer {
            margin-top: 40px;

            @media screen and (max-width: 600px) {
                display: none;
            }

            & .text-footer {
                & span {
                    color: #7b809a;
                    display: flex;
                    font-size: 14px;
                }

                & p {
                    margin: 0px 5px;
                }

                & i {
                    color: #7b809a;
                }

                ul {
                    display: flex;
                    margin: 0px;
                    float: right;
                }

                li {
                    color: #7b809a;
                    margin-right: 20px;

                }

                & .texto-grosso-1 {
                    font-weight: 700;
                }

                & .texto-grosso-2 {
                    font-weight: 700;
                }
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <script>
        //JQuery
        $(document).ready(function() {
            $('.modal').modal();
            $('.sidenav').sidenav();
            $('.slider').slider();
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('#textarea1').textarea();

            //Configurações Jquery
            $('#tel').mask('(00)0.0000-0000');

        });


        //JQuery Mask
        /**
         * jquery.mask.js
         * @version: v1.14.16
         * @author: Igor Escobar
         *
         * Created by Igor Escobar on 2012-03-10. Please report any bug at github.com/igorescobar/jQuery-Mask-Plugin
         *
         * Copyright (c) 2012 Igor Escobar http://igorescobar.com
         *
         * The MIT License (http://www.opensource.org/licenses/mit-license.php)
         *
         * Permission is hereby granted, free of charge, to any person
         * obtaining a copy of this software and associated documentation
         * files (the "Software"), to deal in the Software without
         * restriction, including without limitation the rights to use,
         * copy, modify, merge, publish, distribute, sublicense, and/or sell
         * copies of the Software, and to permit persons to whom the
         * Software is furnished to do so, subject to the following
         * conditions:
         *
         * The above copyright notice and this permission notice shall be
         * included in all copies or substantial portions of the Software.
         *
         * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
         * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
         * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
         * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
         * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
         * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
         * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
         * OTHER DEALINGS IN THE SOFTWARE.
         */

        /* jshint laxbreak: true */
        /* jshint maxcomplexity:17 */
        /* global define */

        // UMD (Universal Module Definition) patterns for JavaScript modules that work everywhere.
        // https://github.com/umdjs/umd/blob/master/templates/jqueryPlugin.js
        (function(factory, jQuery, Zepto) {

            if (typeof define === 'function' && define.amd) {
                define(['jquery'], factory);
            } else if (typeof exports === 'object' && typeof Meteor === 'undefined') {
                module.exports = factory(require('jquery'));
            } else {
                factory(jQuery || Zepto);
            }

        }(function($) {
            'use strict';

            var Mask = function(el, mask, options) {

                var p = {
                    invalid: [],
                    getCaret: function() {
                        try {
                            var sel,
                                pos = 0,
                                ctrl = el.get(0),
                                dSel = document.selection,
                                cSelStart = ctrl.selectionStart;

                            // IE Support
                            if (dSel && navigator.appVersion.indexOf('MSIE 10') === -1) {
                                sel = dSel.createRange();
                                sel.moveStart('character', -p.val().length);
                                pos = sel.text.length;
                            }
                            // Firefox support
                            else if (cSelStart || cSelStart === '0') {
                                pos = cSelStart;
                            }

                            return pos;
                        } catch (e) {}
                    },
                    setCaret: function(pos) {
                        try {
                            if (el.is(':focus')) {
                                var range, ctrl = el.get(0);

                                // Firefox, WebKit, etc..
                                if (ctrl.setSelectionRange) {
                                    ctrl.setSelectionRange(pos, pos);
                                } else { // IE
                                    range = ctrl.createTextRange();
                                    range.collapse(true);
                                    range.moveEnd('character', pos);
                                    range.moveStart('character', pos);
                                    range.select();
                                }
                            }
                        } catch (e) {}
                    },
                    events: function() {
                        el
                            .on('keydown.mask', function(e) {
                                el.data('mask-keycode', e.keyCode || e.which);
                                el.data('mask-previus-value', el.val());
                                el.data('mask-previus-caret-pos', p.getCaret());
                                p.maskDigitPosMapOld = p.maskDigitPosMap;
                            })
                            .on($.jMaskGlobals.useInput ? 'input.mask' : 'keyup.mask', p.behaviour)
                            .on('paste.mask drop.mask', function() {
                                setTimeout(function() {
                                    el.keydown().keyup();
                                }, 100);
                            })
                            .on('change.mask', function() {
                                el.data('changed', true);
                            })
                            .on('blur.mask', function() {
                                if (oldValue !== p.val() && !el.data('changed')) {
                                    el.trigger('change');
                                }
                                el.data('changed', false);
                            })
                            // it's very important that this callback remains in this position
                            // otherwhise oldValue it's going to work buggy
                            .on('blur.mask', function() {
                                oldValue = p.val();
                            })
                            // select all text on focus
                            .on('focus.mask', function(e) {
                                if (options.selectOnFocus === true) {
                                    $(e.target).select();
                                }
                            })
                            // clear the value if it not complete the mask
                            .on('focusout.mask', function() {
                                if (options.clearIfNotMatch && !regexMask.test(p.val())) {
                                    p.val('');
                                }
                            });
                    },
                    getRegexMask: function() {
                        var maskChunks = [],
                            translation, pattern, optional, recursive, oRecursive, r;

                        for (var i = 0; i < mask.length; i++) {
                            translation = jMask.translation[mask.charAt(i)];

                            if (translation) {

                                pattern = translation.pattern.toString().replace(/.{1}$|^.{1}/g, '');
                                optional = translation.optional;
                                recursive = translation.recursive;

                                if (recursive) {
                                    maskChunks.push(mask.charAt(i));
                                    oRecursive = {
                                        digit: mask.charAt(i),
                                        pattern: pattern
                                    };
                                } else {
                                    maskChunks.push(!optional && !recursive ? pattern : (pattern +
                                    '?'));
                                }

                            } else {
                                maskChunks.push(mask.charAt(i).replace(/[-\/\\^$*+?.()|[\]{}]/g,
                                    '\\$&'));
                            }
                        }

                        r = maskChunks.join('');

                        if (oRecursive) {
                            r = r.replace(new RegExp('(' + oRecursive.digit + '(.*' + oRecursive.digit +
                                    ')?)'), '($1)?')
                                .replace(new RegExp(oRecursive.digit, 'g'), oRecursive.pattern);
                        }

                        return new RegExp(r);
                    },
                    destroyEvents: function() {
                        el.off(['input', 'keydown', 'keyup', 'paste', 'drop', 'blur', 'focusout', '']
                            .join('.mask '));
                    },
                    val: function(v) {
                        var isInput = el.is('input'),
                            method = isInput ? 'val' : 'text',
                            r;

                        if (arguments.length > 0) {
                            if (el[method]() !== v) {
                                el[method](v);
                            }
                            r = el;
                        } else {
                            r = el[method]();
                        }

                        return r;
                    },
                    calculateCaretPosition: function(oldVal) {
                        var newVal = p.getMasked(),
                            caretPosNew = p.getCaret();
                        if (oldVal !== newVal) {
                            var caretPosOld = el.data('mask-previus-caret-pos') || 0,
                                newValL = newVal.length,
                                oldValL = oldVal.length,
                                maskDigitsBeforeCaret = 0,
                                maskDigitsAfterCaret = 0,
                                maskDigitsBeforeCaretAll = 0,
                                maskDigitsBeforeCaretAllOld = 0,
                                i = 0;

                            for (i = caretPosNew; i < newValL; i++) {
                                if (!p.maskDigitPosMap[i]) {
                                    break;
                                }
                                maskDigitsAfterCaret++;
                            }

                            for (i = caretPosNew - 1; i >= 0; i--) {
                                if (!p.maskDigitPosMap[i]) {
                                    break;
                                }
                                maskDigitsBeforeCaret++;
                            }

                            for (i = caretPosNew - 1; i >= 0; i--) {
                                if (p.maskDigitPosMap[i]) {
                                    maskDigitsBeforeCaretAll++;
                                }
                            }

                            for (i = caretPosOld - 1; i >= 0; i--) {
                                if (p.maskDigitPosMapOld[i]) {
                                    maskDigitsBeforeCaretAllOld++;
                                }
                            }

                            // if the cursor is at the end keep it there
                            if (caretPosNew > oldValL) {
                                caretPosNew = newValL * 10;
                            } else if (caretPosOld >= caretPosNew && caretPosOld !== oldValL) {
                                if (!p.maskDigitPosMapOld[caretPosNew]) {
                                    var caretPos = caretPosNew;
                                    caretPosNew -= maskDigitsBeforeCaretAllOld -
                                        maskDigitsBeforeCaretAll;
                                    caretPosNew -= maskDigitsBeforeCaret;
                                    if (p.maskDigitPosMap[caretPosNew]) {
                                        caretPosNew = caretPos;
                                    }
                                }
                            } else if (caretPosNew > caretPosOld) {
                                caretPosNew += maskDigitsBeforeCaretAll - maskDigitsBeforeCaretAllOld;
                                caretPosNew += maskDigitsAfterCaret;
                            }
                        }
                        return caretPosNew;
                    },
                    behaviour: function(e) {
                        e = e || window.event;
                        p.invalid = [];

                        var keyCode = el.data('mask-keycode');

                        if ($.inArray(keyCode, jMask.byPassKeys) === -1) {
                            var newVal = p.getMasked(),
                                caretPos = p.getCaret(),
                                oldVal = el.data('mask-previus-value') || '';

                            // this is a compensation to devices/browsers that don't compensate
                            // caret positioning the right way
                            setTimeout(function() {
                                p.setCaret(p.calculateCaretPosition(oldVal));
                            }, $.jMaskGlobals.keyStrokeCompensation);

                            p.val(newVal);
                            p.setCaret(caretPos);
                            return p.callbacks(e);
                        }
                    },
                    getMasked: function(skipMaskChars, val) {
                        var buf = [],
                            value = val === undefined ? p.val() : val + '',
                            m = 0,
                            maskLen = mask.length,
                            v = 0,
                            valLen = value.length,
                            offset = 1,
                            addMethod = 'push',
                            resetPos = -1,
                            maskDigitCount = 0,
                            maskDigitPosArr = [],
                            lastMaskChar,
                            check;

                        if (options.reverse) {
                            addMethod = 'unshift';
                            offset = -1;
                            lastMaskChar = 0;
                            m = maskLen - 1;
                            v = valLen - 1;
                            check = function() {
                                return m > -1 && v > -1;
                            };
                        } else {
                            lastMaskChar = maskLen - 1;
                            check = function() {
                                return m < maskLen && v < valLen;
                            };
                        }

                        var lastUntranslatedMaskChar;
                        while (check()) {
                            var maskDigit = mask.charAt(m),
                                valDigit = value.charAt(v),
                                translation = jMask.translation[maskDigit];

                            if (translation) {
                                if (valDigit.match(translation.pattern)) {
                                    buf[addMethod](valDigit);
                                    if (translation.recursive) {
                                        if (resetPos === -1) {
                                            resetPos = m;
                                        } else if (m === lastMaskChar && m !== resetPos) {
                                            m = resetPos - offset;
                                        }

                                        if (lastMaskChar === resetPos) {
                                            m -= offset;
                                        }
                                    }
                                    m += offset;
                                } else if (valDigit === lastUntranslatedMaskChar) {
                                    // matched the last untranslated (raw) mask character that we encountered
                                    // likely an insert offset the mask character from the last entry; fall
                                    // through and only increment v
                                    maskDigitCount--;
                                    lastUntranslatedMaskChar = undefined;
                                } else if (translation.optional) {
                                    m += offset;
                                    v -= offset;
                                } else if (translation.fallback) {
                                    buf[addMethod](translation.fallback);
                                    m += offset;
                                    v -= offset;
                                } else {
                                    p.invalid.push({
                                        p: v,
                                        v: valDigit,
                                        e: translation.pattern
                                    });
                                }
                                v += offset;
                            } else {
                                if (!skipMaskChars) {
                                    buf[addMethod](maskDigit);
                                }

                                if (valDigit === maskDigit) {
                                    maskDigitPosArr.push(v);
                                    v += offset;
                                } else {
                                    lastUntranslatedMaskChar = maskDigit;
                                    maskDigitPosArr.push(v + maskDigitCount);
                                    maskDigitCount++;
                                }

                                m += offset;
                            }
                        }

                        var lastMaskCharDigit = mask.charAt(lastMaskChar);
                        if (maskLen === valLen + 1 && !jMask.translation[lastMaskCharDigit]) {
                            buf.push(lastMaskCharDigit);
                        }

                        var newVal = buf.join('');
                        p.mapMaskdigitPositions(newVal, maskDigitPosArr, valLen);
                        return newVal;
                    },
                    mapMaskdigitPositions: function(newVal, maskDigitPosArr, valLen) {
                        var maskDiff = options.reverse ? newVal.length - valLen : 0;
                        p.maskDigitPosMap = {};
                        for (var i = 0; i < maskDigitPosArr.length; i++) {
                            p.maskDigitPosMap[maskDigitPosArr[i] + maskDiff] = 1;
                        }
                    },
                    callbacks: function(e) {
                        var val = p.val(),
                            changed = val !== oldValue,
                            defaultArgs = [val, e, el, options],
                            callback = function(name, criteria, args) {
                                if (typeof options[name] === 'function' && criteria) {
                                    options[name].apply(this, args);
                                }
                            };

                        callback('onChange', changed === true, defaultArgs);
                        callback('onKeyPress', changed === true, defaultArgs);
                        callback('onComplete', val.length === mask.length, defaultArgs);
                        callback('onInvalid', p.invalid.length > 0, [val, e, el, p.invalid, options]);
                    }
                };

                el = $(el);
                var jMask = this,
                    oldValue = p.val(),
                    regexMask;

                mask = typeof mask === 'function' ? mask(p.val(), undefined, el, options) : mask;

                // public methods
                jMask.mask = mask;
                jMask.options = options;
                jMask.remove = function() {
                    var caret = p.getCaret();
                    if (jMask.options.placeholder) {
                        el.removeAttr('placeholder');
                    }
                    if (el.data('mask-maxlength')) {
                        el.removeAttr('maxlength');
                    }
                    p.destroyEvents();
                    p.val(jMask.getCleanVal());
                    p.setCaret(caret);
                    return el;
                };

                // get value without mask
                jMask.getCleanVal = function() {
                    return p.getMasked(true);
                };

                // get masked value without the value being in the input or element
                jMask.getMaskedVal = function(val) {
                    return p.getMasked(false, val);
                };

                jMask.init = function(onlyMask) {
                    onlyMask = onlyMask || false;
                    options = options || {};

                    jMask.clearIfNotMatch = $.jMaskGlobals.clearIfNotMatch;
                    jMask.byPassKeys = $.jMaskGlobals.byPassKeys;
                    jMask.translation = $.extend({}, $.jMaskGlobals.translation, options.translation);

                    jMask = $.extend(true, {}, jMask, options);

                    regexMask = p.getRegexMask();

                    if (onlyMask) {
                        p.events();
                        p.val(p.getMasked());
                    } else {
                        if (options.placeholder) {
                            el.attr('placeholder', options.placeholder);
                        }

                        // this is necessary, otherwise if the user submit the form
                        // and then press the "back" button, the autocomplete will erase
                        // the data. Works fine on IE9+, FF, Opera, Safari.
                        if (el.data('mask')) {
                            el.attr('autocomplete', 'off');
                        }

                        // detect if is necessary let the user type freely.
                        // for is a lot faster than forEach.
                        for (var i = 0, maxlength = true; i < mask.length; i++) {
                            var translation = jMask.translation[mask.charAt(i)];
                            if (translation && translation.recursive) {
                                maxlength = false;
                                break;
                            }
                        }

                        if (maxlength) {
                            el.attr('maxlength', mask.length).data('mask-maxlength', true);
                        }

                        p.destroyEvents();
                        p.events();

                        var caret = p.getCaret();
                        p.val(p.getMasked());
                        p.setCaret(caret);
                    }
                };

                jMask.init(!el.is('input'));
            };

            $.maskWatchers = {};
            var HTMLAttributes = function() {
                    var input = $(this),
                        options = {},
                        prefix = 'data-mask-',
                        mask = input.attr('data-mask');

                    if (input.attr(prefix + 'reverse')) {
                        options.reverse = true;
                    }

                    if (input.attr(prefix + 'clearifnotmatch')) {
                        options.clearIfNotMatch = true;
                    }

                    if (input.attr(prefix + 'selectonfocus') === 'true') {
                        options.selectOnFocus = true;
                    }

                    if (notSameMaskObject(input, mask, options)) {
                        return input.data('mask', new Mask(this, mask, options));
                    }
                },
                notSameMaskObject = function(field, mask, options) {
                    options = options || {};
                    var maskObject = $(field).data('mask'),
                        stringify = JSON.stringify,
                        value = $(field).val() || $(field).text();
                    try {
                        if (typeof mask === 'function') {
                            mask = mask(value);
                        }
                        return typeof maskObject !== 'object' || stringify(maskObject.options) !== stringify(
                            options) || maskObject.mask !== mask;
                    } catch (e) {}
                },
                eventSupported = function(eventName) {
                    var el = document.createElement('div'),
                        isSupported;

                    eventName = 'on' + eventName;
                    isSupported = (eventName in el);

                    if (!isSupported) {
                        el.setAttribute(eventName, 'return;');
                        isSupported = typeof el[eventName] === 'function';
                    }
                    el = null;

                    return isSupported;
                };

            $.fn.mask = function(mask, options) {
                options = options || {};
                var selector = this.selector,
                    globals = $.jMaskGlobals,
                    interval = globals.watchInterval,
                    watchInputs = options.watchInputs || globals.watchInputs,
                    maskFunction = function() {
                        if (notSameMaskObject(this, mask, options)) {
                            return $(this).data('mask', new Mask(this, mask, options));
                        }
                    };

                $(this).each(maskFunction);

                if (selector && selector !== '' && watchInputs) {
                    clearInterval($.maskWatchers[selector]);
                    $.maskWatchers[selector] = setInterval(function() {
                        $(document).find(selector).each(maskFunction);
                    }, interval);
                }
                return this;
            };

            $.fn.masked = function(val) {
                return this.data('mask').getMaskedVal(val);
            };

            $.fn.unmask = function() {
                clearInterval($.maskWatchers[this.selector]);
                delete $.maskWatchers[this.selector];
                return this.each(function() {
                    var dataMask = $(this).data('mask');
                    if (dataMask) {
                        dataMask.remove().removeData('mask');
                    }
                });
            };

            $.fn.cleanVal = function() {
                return this.data('mask').getCleanVal();
            };

            $.applyDataMask = function(selector) {
                selector = selector || $.jMaskGlobals.maskElements;
                var $selector = (selector instanceof $) ? selector : $(selector);
                $selector.filter($.jMaskGlobals.dataMaskAttr).each(HTMLAttributes);
            };

            var globals = {
                maskElements: 'input,td,span,div',
                dataMaskAttr: '*[data-mask]',
                dataMask: true,
                watchInterval: 300,
                watchInputs: true,
                keyStrokeCompensation: 10,
                // old versions of chrome dont work great with input event
                useInput: !/Chrome\/[2-4][0-9]|SamsungBrowser/.test(window.navigator.userAgent) &&
                    eventSupported('input'),
                watchDataMask: false,
                byPassKeys: [9, 16, 17, 18, 36, 37, 38, 39, 40, 91],
                translation: {
                    '0': {
                        pattern: /\d/
                    },
                    '9': {
                        pattern: /\d/,
                        optional: true
                    },
                    '#': {
                        pattern: /\d/,
                        recursive: true
                    },
                    'A': {
                        pattern: /[a-zA-Z0-9]/
                    },
                    'S': {
                        pattern: /[a-zA-Z]/
                    }
                }
            };

            $.jMaskGlobals = $.jMaskGlobals || {};
            globals = $.jMaskGlobals = $.extend(true, {}, globals, $.jMaskGlobals);

            // looking for inputs with data-mask attribute
            if (globals.dataMask) {
                $.applyDataMask();
            }

            setInterval(function() {
                if ($.jMaskGlobals.watchDataMask) {
                    $.applyDataMask();
                }
            }, globals.watchInterval);
        }, window.jQuery, window.Zepto));
    </script>

    @include('partials.navbar')

    @include('partials.banner-slide')

    @yield('content')
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>

</html>
