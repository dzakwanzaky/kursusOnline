 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{asset('/ya')}}/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/ya')}}/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/ya')}}/assets/css/form-elements.css">
        <link rel="stylesheet" href="{{asset('/ya')}}/assets/css/style.css">

<link rel="stylesheet" href="./style.css">
<div class="container">
<div class="tabs">
  
  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <input type="radio" id="tab3" name="tab-control">  
  <input type="radio" id="tab4" name="tab-control">
  <ul>
    <li><label for="tab1" role="button"><font face="calibri"><font size="4">Soal TKPA</font></font></label></li>
    <li><label for="tab2" role="button"><br><span><font face="calibri">&nbsp;&nbsp;<font size="4">Soal TKD Saintek</font></font></span></label></li>
    <li><label for="tab3" role="button"><br><span><font face="calibri">&nbsp;&nbsp;&nbsp;&nbsp;<font size="4">Soal TKD Soshum</font></font></span></label></li>    
    <li title="Returns"><label for="tab4" role="button"><br><span></span></label></li>
  </ul>
  
  <div class="slider"><div class="indicator"></div></div>
  <div class="content">
    <section>
    	 
 <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
 <img src="{{('/tema/images/coba.png')}}" width="480" height="30"></img>
</button>

   </section>
        <section>
           <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
          <img src="{{('/tema/images/cobas.png')}}" width="500" height="30"></img>
        </button>
      </section>
        <section>
           <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
         <img src="{{('/tema/images/cobass.png')}}" width="500" height="30"></img>
       </button>
         </section>
    
  </div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><br><br><font face="calibri"><font size="5">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b><font color="#696969">Isi form untuk melanjutkan</b><br><br></font></font></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              
              <div class="modal-body">
                 <form action="/soaltkpa" method="GET">
                  {{csrf_field()}}
                      <form role="form" action="" method="post" class="login-form">
                        <div class="form-group">
                          <label class="sr-only" for="form-username">Nama lengkap</label>
                            <input type="text" name="form-username" placeholder="Masukan nama lengkap" class="form-username form-control" id="form-username">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-password">No hp</label>
                            <input type="password" name="form-password" placeholder="Masukan no hp" class="form-password form-control" id="form-password">
                          </div>
                           <div class="form-group">
                          <label class="sr-only" for="form-username">Asal sekolah</label>
                            <input type="text" name="form-username" placeholder="Masukan asal sekolah" class="form-username form-control" id="form-username">
                          </div>
                           <div class="form-group">
                          <label class="sr-only" for="form-username">Email</label>
                            <input type="text" name="form-username" placeholder="Masukan email" class="form-username form-control" id="form-username">
                          </div>
                          <button type="submit" class="button">Masuk</button>
                      </form>
                      
              </div>
              
            </div>
          </div>
 <script src="{{asset('/ya')}}/assets/js/jquery-1.11.1.min.js"></script>
        <script src="{{asset('/ya')}}/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('/ya')}}/assets/js/jquery.backstretch.min.js"></script>
        <script src="{{asset('/ya')}}/assets/js/scripts.js"></script>