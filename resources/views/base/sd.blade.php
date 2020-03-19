<div class="awake">
    @include('base/header_page')
    @extends('base/script_yes')
    @include('base/script2')
    <link rel="stylesheet" type="text/css" href="{{asset('/strap')}}/css/bootstrap.css">

    <style type="text/css">
        .awake {
            background-color: #fafafa;
            height: 120%;
            width: 103%;

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
            max-width: 58%;
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

        img.kiri {
            float: left;
            margin: 13px;
            margin-left: 25px;
            width: 60px;
            height: 70px;
            padding-top: 20px;
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
    </style>


    <section class="search-course-area relative" style="background:url('frontend/img/satu.png')">

        <div class="container">

            <body bgcolor="#ffffff">

                <br>
                <br>
                <br>
                <br>

        </div>

        <div class="typing">
            <h4>
                <b>
                    <font color="#000">Program SD
                </b>
                <br>
                <p><br>
                    Program untuk calon siswa Sekolah Dasar untuk menghadapi ujian nasional</p>
                </font>
            </h4>

        </div>
        <section class="course-details-area pt-12">

            <div class="col-lg-8 left-contents">

                <div class="jq-tab-wrapper" id="horizontalTab">
                    <div class="jq-tab-menu">
                        <div class="jq-tab-title active" data-tab="1">
                            <font face="Poppins">Bahasa Indonesia</font>
                            </font>
                        </div>
                        <div class="jq-tab-title" data-tab="2">
                            <font face="Poppins">Matematika</font>
                            </font>
                        </div>
                        <div class="jq-tab-title" data-tab="3">
                            <font face="Poppins">IPA </font>
                            </font>
                        </div>

                    </div>

                    @php $no = 1; @endphp
                    @foreach($bind as $d)
                    <div class="jq-tab-content active" data-tab="1">

                        <div class="cards">
                            <div class="services">
                                <div class="content">
                                    <div class="img">
                                        <img class="kiri" src="{{asset('/images')}}/about.jpg" />
                                    </div>
                                    <a href="{{route('soalTO', $d->id)}}" type="button" class="btn btn-link"
                                     >
                                        <h2>{{$d->nama}}<br>
                                            <p>{{$d->jumlah_soal}}<br>
                                            </p>
                                        </h2>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                
                    @endforeach
               
   
         
                    <div class="modal fade" role="dialog" id="loginModal-{{$d->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-title">
                                        <h>Isi Form</h>
                                        <br>
                                        <pi>Isi form untuk melanjutkan proses</pi>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>                             
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" name="namalengkap" class="form-control"
                                            placeholder="Nama lengkap">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="notelp" class="form-control" placeholder="No telp">
                                    </div>


                                    <div class="form-group">
                                        <input type="text" name="asalsekolah" class="form-control"
                                            placeholder="Asal sekolah">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="tombol_login">Kirim</button>
                                </div>
                            
                              
                            </div>
                        </div>
                    </div>
                  
                    <script type="text/javascript" src="{{asset('/strap')}}/js/jquery-3.2.1.min.js"></script>

                    <script type="text/javascript" src="{{asset('/frontend')}}/js/bootstrap.js"></script>

                  


                    @php $no = 1; @endphp
                    @foreach($mat as $d)
                    <div class="jq-tab-content active" data-tab="2">

                        <div class="cards">
                            <div class="services">
                                <div class="content">
                                    <div class="img">
                                        <img class="kiri" src="{{asset('/images')}}/about.jpg" />
                                    </div>
                                    <a href="{{route('soalTO', $d->id)}}" type="button" class="btn btn-link"
                                     >
                                        <h2>{{$d->nama}}<br>
                                            <p>{{$d->jumlah_soal}}<br>
                                            </p>
                                        </h2>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                
                    @endforeach
                    <div class="modal fade" role="dialog" id="loginModal">
                  
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-title">
                                        <h>Isi Form</h>
                                        <br>
                                        <pi>Isi form untuk melanjutkan proses</pi>
                                    </div>

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" name="namalengkap" class="form-control"
                                            placeholder="Nama lengkap">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="notelp" class="form-control" placeholder="No telp">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="asalsekolah" class="form-control"
                                            placeholder="Asal sekolah">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="tombol_login">Kirim</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <script type="text/javascript" src="{{asset('/strap')}}/js/jquery-3.2.1.min.js"></script>

                    <script type="text/javascript" src="{{asset('/frontend')}}/js/bootstrap.js"></script>


                    @php $no = 1; @endphp
                    @foreach($mat as $d)
                    <div class="jq-tab-content active" data-tab="3">

                        <div class="cards">
                            <div class="services">
                                <div class="content">
                                    <div class="img">
                                        <img class="kiri" src="{{asset('/images')}}/about.jpg" />
                                    </div>
                                    <a href="{{route('soalTO', $d->id)}}" type="button" class="btn btn-link"
                                     >
                                        <h2>{{$d->nama}}<br>
                                            <p>{{$d->jumlah_soal}}<br>
                                            </p>
                                        </h2>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                
                    @endforeach
                        <div class="modal fade" role="dialog" id="loginModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-title">
                                            <h>Isi Form</h>
                                            <br>
                                            <pi>Isi form untuk melanjutkan proses</pi>
                                        </div>

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" name="namalengkap" class="form-control"
                                                placeholder="Nama lengkap">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="notelp" class="form-control" placeholder="No telp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="asalsekolah" class="form-control"
                                                placeholder="Asal sekolah">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="tombol_login">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript" src="{{asset('/strap')}}/js/jquery-3.2.1.min.js"></script>

                        <script type="text/javascript" src="{{asset('/frontend')}}/js/bootstrap.js"></script>

                    </div>
                </div>
            </div>

        </section>
        <br>
        </b>
        </h4>
</div>
</body>
</div>
</section>
</div>

@include('base/futerb')