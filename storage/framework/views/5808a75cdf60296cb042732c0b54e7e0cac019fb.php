<?php echo $__env->make('base/header_pagee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<link href="<?php echo e(asset('/button')); ?>/gas.css" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('/button')); ?>/butnn.css" rel="stylesheet" type="text/css">

<style type="text/css">
    .awake {
        background-color: #f4f6f9;
                width: 100%;
        display: inline-block;

    }

    @media  screen and (width: 320px) {
        .awake {
            background-color: #f8f8ff;
            height: 170%;
        }
    }

    @media  screen and (width: 640px) {
        .awake {
            background-color: #f8f8ff;
            height: 245%;
        }
    }

    @media  screen and (width: 731px) {
        .awake {
            background-color: #f8f8ff;
            height: 190%;
        }
    }

    @media  screen and (width: 823px) {
        .awake {
            background-color: #f8f8ff;
            height: 210%;
        }
    }

    @media  screen and (width: 568px) {
        .awake {
            background-color: #f8f8ff;
            height: 280%;
        }
    }

    @media  screen and (width: 667px) {
        .awake {
            background-color: #f8f8ff;
            height: 250%;
        }
    }

    @media  screen and (width: 736px) {
        .awake {
            background-color: #f8f8ff;
            height: 220%;
        }
    }
    @media  screen and (width: 731px) {
        .awake {
            background-color: #f8f8ff;
            height: 230%;
        }
    }

    @media  screen and (width: 812px) {
        .awake {
            background-color: #f8f8ff;
            height: 240%;
        }
    }
    @media  screen and (height: 1366px) {
        .awake {
            background-color: #f8f8ff;
            height: 90%;
        }
    }
    @media  screen and (height: 1024px) {
        .awake {
            background-color: #f8f8ff;
            height: 90%;
        }
    }
     @media  screen and (width: 411px) {
        .awake {
            background-color: #f8f8ff;
            height: 125%;
        }
    }
</style>

<style type="text/css">
    .modal {
        display: none;
        background-color: transparent;
        transition: all 0.25s ease;
    }

    .modal.open {

        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 63%;
        height: 40vh;
        margin-left: 20%;
        margin-top: 15%;
        border-radius: 10%;
        /*background-color: rgba(0, 0, 0, 0.5);*/
    }

    .modal .content-wrapper {
        border-radius: 20px;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        width: 50%;
        margin: 0;
        padding: 2.5rem;
        background-color: white;
        text-align: left;
        margin-left: 20px;
        margin-right: 24px;
        font-weight: lighter;
        font-size: 20px;
        line-height: 1.3em;

        /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
    }

    .gr {
        margin-bottom: 14px;
        font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 14px;
    }

    .satu {
        margin-top: 2px;
        line-height: 1.4em;
        font-size: 14px;
        margin-right: 18px;
        font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    .modal .content-wrapper .close {
        margin-top: 5px;
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.0rem;
        height: 2.0rem;
        border: none;
        background-color: transparent;
        font-size: 1.5rem;
        transition: 0.25s linear;
        border-color: #fff;
    }
    .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}


    .modal .content-wrapper .close:before,
    .modal .content-wrapper .close:after {
        position: absolute;
        content: '';
        width: 1.0rem;
        height: 0.100rem;
        background-color: black;
    }

    .modal .content-wrapper .close:before {
        transform: rotate(-45deg);
    }

    .modal .content-wrapper .close:after {
        transform: rotate(45deg);
    }



    .modal .content-wrapper .close:hover:before,
    .modal .content-wrapper .close:hover:after {
        background-color: #92CD16;
    }

    .modal .content-wrapper .modal-header {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin: 0;
        padding: 0 0 1.25rem;
    }

    .modal .content-wrapper .modal-header h2 {
        font-size: 1.5rem;
        font-weight: lighter;
        margin-top: 13px;
        color: #dcdcdc;

    }

    .modal .content-wrapper .content {
        position: relative;
        display: flex;
    }

    .modal .content-wrapper .content p {
        font-size: 0.875rem;
        line-height: 1.75;
    }

    .modal .content-wrapper .modal-footer {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        width: 100%;
        margin: 0;
        padding: 1.875rem 0 0;
    }

    .modal .content-wrapper .modal-footer>button {
        margin-left: 0.625rem;
        padding: 0.625rem 1.25rem;
        border: none;
        background-color: slategray;
        color: white;
        font-size: 0.87rem;
        font-weight: 300;
    }

    .modal .content-wrapper .modal-footer>button:first-child {
        background-color: #2ecc71;
    }

    .modal .content-wrapper .modal-footer>button:last-child {
        background-color: #e74c3c;
    }

    @media  screen and (width: 360px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 40vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 90%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {
            margin-top: 20px;
            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 14px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 15px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}

        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width: 411px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 30vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 90%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 15px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}

        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width: 320px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }


        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 45vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 90%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 14px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}
        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width: 375px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 45vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 90%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 23px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 15px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}
        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width: 414px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 45vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 90%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 23px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 16px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 16px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
    .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}
        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width: 768px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 60%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 15px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
    .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}
        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width: 1024px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 55vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 14px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}

        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width: 640px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 55vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 15px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {
            margin-top: 30px;
            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 14px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 35px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}

        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width:731px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 55vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 15px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}

        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width:823px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 55vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 15px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
    .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}
        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width:568px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 55vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 13px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 13px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 15px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
    .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}
        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width:667px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 55vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 15px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 12px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}

        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width:736px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 55vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 16px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}

        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }

    @media  screen and (width:812px) {
        .modal {
            display: none;
            background-color: transparent;
            transition: all 0.25s ease;
        }

        .modal.open {

            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 55vh;
            margin-left: 3%;
            margin-top: 15%;
            border-radius: 3%;
            /*background-color: rgba(0, 0, 0, 0.5);*/
        }

        .modal .content-wrapper {
            border-radius: 5px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 50%;
            margin: 0;
            padding: 2.1rem;
            background-color: white;
            text-align: left;
            margin-right: 20px;
            font-weight: lighter;
            font-size: 8px;
            line-height: 1.3em;

            /*box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);*/
        }

        .gr {

            margin-bottom: 14px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 15px;
            line-height: 1.3em;
        }

        .satu {
            margin-top: 2px;
            line-height: 1.3em;
            font-size: 15px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .modal .content-wrapper .close {
            margin-top: 2px;
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.0rem;
            height: 2.0rem;
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            transition: 0.25s linear;
        }
            .close:focus{
 border-color:#fff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,0,0,.0)
}

        .modal .content-wrapper .close:before,
        .modal .content-wrapper .close:after {
            position: absolute;
            content: '';
            width: 1.0rem;
            height: 0.100rem;
            background-color: black;
        }

        .modal .content-wrapper .close:before {
            transform: rotate(-45deg);
        }

        .modal .content-wrapper .close:after {
            transform: rotate(45deg);
        }



        .modal .content-wrapper .close:hover:before,
        .modal .content-wrapper .close:hover:after {
            background-color: #92CD16;
        }

        .modal .content-wrapper .modal-header {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0;
            padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
            font-size: 1.5rem;
            font-weight: lighter;
            margin-top: 13px;
            color: #dcdcdc;

        }

        .modal .content-wrapper .content {
            position: relative;
            display: flex;
        }

        .modal .content-wrapper .content p {
            font-size: 0.875rem;
            line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            margin: 0;
            padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer>button {
            margin-left: 0.625rem;
            padding: 0.625rem 1.25rem;
            border: none;
            background-color: slategray;
            color: white;
            font-size: 0.87rem;
            font-weight: 300;
        }

        .modal .content-wrapper .modal-footer>button:first-child {
            background-color: #2ecc71;
        }

        .modal .content-wrapper .modal-footer>button:last-child {
            background-color: #e74c3c;
        }
    }
    h.lead {
        font-size: 0.77em;
    }

</style>



<div class="awake">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="big-tagline">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <br><br>
                    <h2>Soal Latihan Tryout <?php echo e($d->tryout->nama); ?></h2>
                    <div class="lead"><b>Soal no <?php echo e($d->nomor_soal); ?></b><br>
                    <h class="lead"><?php echo $d->soal; ?></h></div>

                    <?php if($d->file==null): ?>
                    <a></a>
                    <?php else: ?>
                    <a href="<?php echo e(url('/data_file/'.$d->file)); ?>" target="_blank">
                          <img width="150px" src="<?php echo e(url('/data_file/'.$d->file)); ?>">
                    </a> 
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <br>


        <style>
            /* The container */
            .containerr {
                display: block;
                position: relative;

                margin-bottom: 15px;
                cursor: pointer;

                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                margin-top: 0px;
            }

            p {
                font-size: 1.3em;
                margin-left: 0px;
                color: #838383;
                font-weight: 300;
                font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            pu {
                font-size: 1.32em;
                margin-left: 30px;
                color: #838383;
                font-weight: 300;
                font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }

            /* Hide the browser's default radio button */
            .containerr input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
            }

            /* Create a custom radio button */
            .checkmark {
                position: absolute;
                top: 5;
                left: 0;
                height: 22px;
                width: 22px;
                background-color: #E1E1E1;
                border-radius: 50%;
            }

            /* On mouse-over, add a grey background color */
            .containerr:hover input~.checkmark {
                background-color: #CBC7C7;
            }

            /* When the radio button is checked, add a blue background */
            .containerr input:checked~.checkmark {
                background-color: #2196F3;
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .containerr input:checked~.checkmark:after {
                display: block;
            }

            /* Style the indicator (dot/circle) */
            .containerr .checkmark:after {
                top: 7px;
                left: 8px;
                width: 7px;
                height: 7px;
                border-radius: 50%;
                background: white;
            }
        </style>

        <label class="containerr">
            <pu>A.&nbsp;<?php echo e($d->option_a); ?></pu>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="containerr">
            <pu>B.&nbsp;<?php echo e($d->option_b); ?></pu>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="containerr">
            <pu>C.&nbsp;<?php echo e($d->option_c); ?></pu>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="containerr">
            <pu>D.&nbsp;<?php echo e($d->option_d); ?></pu>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
         <?php if($d->tryout->program_id == '1'): ?>
     
        <?php else: ?>
        <label class="containerr">
            <pu>E.&nbsp;<?php echo e($d->option_e); ?></pu>
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
<?php endif; ?>

        <form action="<?php echo e(route('soalTO', $d->id_to)); ?>" method="get">
            <?php if(request()->get('page')==0 ): ?>
            <button class="buton" name="page" type="submit" value="<?php echo e(request()->get('page')+2); ?>">Selanjutnya</button>
            <?php elseif(request()->get('page')==$max_number): ?>
            <button class="butone" name="page" type="submit" value="<?php echo e(request()->get('page')-1); ?>">Sebelumnya</button>
            <button class="but" name="page" type="button" value="<?php echo e(request()->get('page')+1); ?>"
                onclick="pop()">Selanjutnya</button>
            <div id="box">

                <p class="leadi">Pilih opsi untuk melanjutkan akses</p>

                <a onclick="pop()" class="tal">
                    <font color="#ffffff">Batal</font>
                </a>

                <form action="<?php echo e(route('wizardsbm', $d->tryout->program->id)); ?>" method="get">
                <a href="<?php echo e(route('wizardsbm', $d->tryout->id)); ?>" class="ok">
                    <font color="#ffffff">Ok</font>
                </form>
                </a>
            </div>

            <?php else: ?>
            <button class="butonn" name="page" type="submit" value="<?php echo e(request()->get('page')-1); ?>">Sebelumnya</button>
            <button class="but" name="page" type="submit" value="<?php echo e(request()->get('page')+1); ?>">Selanjutnya</button>
            <?php endif; ?>
        </form>
        <br>



        <button data-modal-trigger="trigger-demo" class="btni first">
            <pi>Cek Jawaban</pi>
        </button>
<br>
<br>
<br>
<br>
        <div data-modal="trigger-demo" class="modal">
            <article class="content-wrapper">
                <button class="close"></button>
                <div class="gr">
                    <p>
                        <font color="#696969">Jawaban yang benar : <b>
                                <font color="#92CD16"><?php echo e($d->jawaban); ?>

                            </b></font>
                    </p></b></font>
                </div>




                <div class="satu">
                    <p>
                        <font color="#696969"><b>Pembahasan</b></font><br>
                        <font color="#696969"> <?php echo $d->pembahasan; ?></font>
                    </p>
                </div>
            </article>
        </div>

    </div>
</div>





<script>
    var c = 0;

    function pop() {
        if (c == 0) {
            document.getElementById("box").style.display = "block";
            c = 1;
        } else {

            document.getElementById("box").style.display = "none";
            c = 0;
        }
    }
</script>
<script>
    const buttons = document.querySelectorAll(`button[data-modal-trigger]`);

    for (let button of buttons) {
        modalEvent(button);
    }

    function modalEvent(button) {
        button.addEventListener('click', () => {
            const trigger = button.getAttribute('data-modal-trigger');
            const modal = document.querySelector(`[data-modal=${trigger}]`);
            const contentWrapper = modal.querySelector('.content-wrapper');
            const close = modal.querySelector('.close');

            close.addEventListener('click', () => modal.classList.remove('open'));
            modal.addEventListener('click', () => modal.classList.remove('open'));
            contentWrapper.addEventListener('click', (e) => e.stopPropagation());

            modal.classList.toggle('open');
        });
    }
</script>

</div>
</div>
</div>
<?php echo $__env->make('base/futerbawah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('base/script_yesa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/base/soal.blade.php ENDPATH**/ ?>