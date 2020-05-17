<div class="awake">
    @include('base/header_pu')
    @extends('base/script_yes')
    @include('base/script4')
    <link rel="stylesheet" type="text/css" href="{{asset('/strap')}}/css/bootstrap.css">

    <style type="text/css">
        .awake {
            background-color: #f4f6f9;
            height: 140%;


        }


        @media screen and (width:640px) {
            .awake {
                background-color: #fafafa;
                height: 180%;

            }
        }

        @media screen and (width:731px) {
            .awake {
                background-color: #fafafa;
                height: 130%;

            }
        }

        @media screen and (width:568px) {
            .awake {
                background-color: #fafafa;
                height: 180%;

            }
        }

        @media screen and (width:667px) {
            .awake {
                background-color: #fafafa;
                height: 160%;

            }
        }

        @media screen and (width:812px) {
            .awake {
                background-color: #fafafa;
                height: 150%;

            }
        }

        @media screen and (width:823px) {
            .awake {
                background-color: #fafafa;
                height: 140%;

            }
        }

        @media screen and (width:736px) {
            .awake {
                background-color: #fafafa;
                height: 140%;

            }
        }

        p {
            line-height: 1.4em;
            font-size: 18px;
            font-family: sans-serif;
            color: #999999;
            font-weight: normal;
        }

        .typing h4 {
            margin-left: 120px;
            margin-right: 20px;
        }

        .typing p1 {
            color: #787878;
            font-size: 17px;
            font-weight: lighter;
            font-style: normal;
            margin-top: 10px;
            margin-right: 10px;
        }

        @media screen and (width: 360px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 812px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 667px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 568px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 736px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 731px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 823px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 411px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
                margin-bottom: 90px;
            }


        }

        @media screen and (width: 320px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 375px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 414px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 640px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 375px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 768px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 30px;

            }

            p {
                line-height: 1.4em;
                font-size: 17px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }

        @media screen and (width: 1024px) {
            .typing h4 {
                margin-left: 40px;
                font-size: 32px;

            }

            p {
                line-height: 1.4em;
                font-size: 19px;
                font-family: sans-serif;
                color: #999999;
                font-weight: normal;
            }


        }


        .cards {

            width: 40%;
            float: left;

        }

        .services {
            display: flex;
            align-items: center;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            margin: 20px;
            padding-top: 10px;
            padding-bottom: 0px;
            border-radius: 15px;
            background-color: #fff;

        }

        .content h2 {
            margin-left: 15px;
            margin-top: 25px;
            font-size: 18px;
            padding-right: 10px;

        }

        .content p {
            font-weight: lighter;
            font-size: 17px;
        }

        img {
            float: left;
            margin-top: 20px;
            margin-left: 25px;
            height: 45px;
            padding-top: 10px;
        }

        @media screen and (width: 360px) {

            .cards {
                max-width: 110%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin-left: 2px;
                margin-right: 4px;
                padding-top: 10px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 1px;
                margin-top: 20px;
                font-size: 0.9em;

            }

            .content p {
                font-weight: lighter;
                font-size: 12px;
            }

            img.kiri {
                float: left;
                margin: 10px;
                margin-left: 8px;
                width: 40px;
                height: 50px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 812px) {
            .cards {
                max-width: 63%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                border-radius: 15px;
                background-color: #fff;


            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 18px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 14px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 60px;
                height: 70px;
                padding-top: 20px;
            }

        }

        @media screen and (width: 823px) {
            .cards {
                max-width: 63%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                border-radius: 15px;
                background-color: #fff;


            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 18px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 14px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 60px;
                height: 70px;
                padding-top: 20px;
            }

        }

        @media screen and (width: 411px) {

            .cards {
                max-width: 110%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin-left: 2px;
                margin-right: 4px;
                padding-top: 10px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 6px;
                margin-top: 20px;
                font-size: 1em;

            }

            .content p {
                font-weight: lighter;
                font-size: 13px;
            }

            img.kiri {
                float: left;
                margin: 10px;
                margin-left: 8px;
                width: 40px;
                height: 50px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 320px) {

            .cards {
                max-width: 110%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin-left: 1px;
                margin-right: 4px;
                padding-top: 10px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 5px;
                margin-top: 20px;
                font-size: 12px;

            }

            .content p {
                font-weight: lighter;
                font-size: 11px;
            }

            img.kiri {
                float: left;
                margin: 10px;
                margin-left: 5px;
                width: 33px;
                height: 46px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 375px) {

            .cards {
                max-width: 110%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin-left: 5px;
                margin-right: 4px;
                padding-top: 10px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 4px;
                margin-top: 20px;
                font-size: 0.9em;

            }

            .content p {
                font-weight: lighter;
                font-size: 12px;
            }

            img.kiri {
                float: left;
                margin: 10px;
                margin-left: 8px;
                width: 40px;
                height: 50px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 1366px) {

            .cards {
                max-width: 61%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                padding-bottom: 0px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 15px;
                margin-top: 25px;
                font-size: 19px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 17px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 25px;
                width: 60px;
                height: 70px;
                padding-top: 20px;
            }

        }


        @media screen and (width: 414px) {

            .cards {
                max-width: 92%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin-left: 2px;
                margin-right: 4px;
                padding-top: 10px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 6px;
                margin-top: 20px;
                font-size: 14px;

            }

            .content p {
                font-weight: lighter;
                font-size: 14px;
            }

            img.kiri {
                float: left;
                margin: 10px;
                margin-left: 8px;
                width: 40px;
                height: 50px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 768px) {
            .cards {
                max-width: 64%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                padding-bottom: 0px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 18px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 14px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 60px;
                height: 70px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 1024px) {
            .cards {
                max-width: 73%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                padding-bottom: 0px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 18px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 15px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 60px;
                height: 70px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 640px) {
            .cards {
                max-width: 73%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                padding-bottom: 0px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 16px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 15px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 60px;
                height: 70px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 731px) {
            .cards {
                max-width: 69%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                padding-bottom: 0px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 16px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 15px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 60px;
                height: 70px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 568px) {
            .cards {
                max-width: 76%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                padding-bottom: 0px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 15px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 15px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 50px;
                height: 60px;
                padding-top: 20px;
            }
        }


        @media screen and (width: 667px) {
            .cards {
                max-width: 74%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                padding-bottom: 0px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 16px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 15px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 50px;
                height: 60px;
                padding-top: 20px;
            }
        }

        @media screen and (width: 736px) {
            .cards {
                max-width: 72%;
            }

            .services {
                display: flex;
                align-items: center;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                flex: 1;
                margin: 20px;
                padding-top: 10px;
                padding-bottom: 0px;
                border-radius: 15px;
                background-color: #fff;

            }

            .content h2 {
                margin-left: 10px;
                margin-top: 25px;
                font-size: 17px;
                padding-right: 10px;

            }

            .content p {
                font-weight: lighter;
                font-size: 15px;
            }

            img.kiri {
                float: left;
                margin: 13px;
                margin-left: 20px;
                width: 50px;
                height: 60px;
                padding-top: 20px;
            }
        }

        .judul {

            text-align: left;
        }

        .navi ul {
            margin-left: 3.5em;
            margin-top: 3em;
            padding-bottom: 0;
            width: 100%;
        }

        .navi ul a {
            text-decoration: none;
            margin-left: 3em;
            font-weight: bolder;
            color: #565656;
        }

         ul a:hover {
            color: #92CD16;
        }

        .secsion {
            padding-left: 70px;
        }
        .gong {
            padding: 3px;
        }
    </style>
<div class="gong">
</div>
    <section class="search-course-area relative" style="background:url('frontend/img/satu.png'); height: 295px">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <br>
            <br>
            <br>
        </div>

        <div class="typing">
            <h4>
                <b>
                    <font color="#000">Program {{$rinci->program}}
                </b>
                <br>
                <p><br>
                    {{$rinci->keterangan_rinci}}</p>
                </font>
            </h4>

        </div>


        <section class="course-details-area pt-12">

            <div class="col-lg-10 left-contents">

                <div class="navi">
                    <ul>
                         @foreach($data as $k)
                        <a href="{{route('soalFilter', [$k->id_program, $k->id])}}">{{$k->mapel}}</a>
                        @endforeach
                        </ul>
                </div>


<br>
                @foreach($dat as $ki)
                <div class="jq-tab-content active">

                    <div class="secsion">
                        <div class="cards">

                            <div class="services">

                                <div class="content">

                                    <div class="img">
                                        <a href="{{route('soalTO', $ki->id)}}" type="button" class="btn btn-link">
                                            <img src="{{asset('/images')}}/inofa.png" />
                                    </div>

                                    <h2 class="judul">{{$ki->nama}}<br>
                                        <p>{{$ki->jumlah_soal}} soal pilihan ganda<br>
                                        </p>
                                    </h2>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    @endforeach





                </div>
            </div>
</div>

</section>

</b>
</h4>
</div>
</section>
</div>

@include('base/futerb')