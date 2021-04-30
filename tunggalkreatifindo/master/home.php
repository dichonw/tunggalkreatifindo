<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<style>
/* Make the image fully responsive */
.carousel-inner img {
  width: 100%;
  height: 100%;
  max-height: 550px;
}
.card-img-top{
  cursor: pointer;
  
}
.link-card :hover{
  text-decoration: none !important;
}
.card-title{
  margin-bottom: 5px !important;
}
</style>

  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="img/banner.PNG" alt="" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="img/banner.PNG" alt="" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="img/banner.PNG" alt="" width="1100" height="500">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <div class="container" style="padding:30px;">
      <div class="kotak shadow p-3 mb-2 bg-white" style="border-radius: 18px;">
        <div class="card-body">
            <h3 class="card-text"><b>Hey, Kamu</b></h3>
            <h2 class="card-text">Apakah ada <br> yang bisa kami bantu?</h2>
            <form class="d-flex" style="margin-right: 5px;" action="?menu=search" method="POST">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="search" style="border:1px solid #d3d3d3; color: #000000;  margin-top: 5px; margin-right: 10px; border-radius: 18px;">
                  <div class="input-group-append">
                    <button class="btn btn-outline-dark" style="border-radius: 20px;" type="submit" name="kirim"><b>Cari<b></button>
                  </div>
              </div>
            </form>
        </div>
    </div>
  </div>
  <div class="container" style="padding-left:30px; padding-right:30px;">
      <h5><b>Acara Terakhir<b>&nbsp;<a href="?menu=product"><small class="text-danger" style="cursor: pointer; color: #808080 !important; float: right;"><b>Selengkapnya ><b></small></a></h5>
      <div class="row" style="margin-top:10px;">
      <?php
      // include "../koneksi/koneksi.php";
        $query = "SELECT * FROM tabel_event";
        $execute = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_array($execute)) {
          ?>
          <div class="col-md-3 col-12" style="margin-top:10px;">
              <a href="?menu=detail_event&&id_event=<?php echo $data['id_event']?>" class="link-card">
                <div class="card" style="border: 0.5px solid #b0b0b0">
                  <img src="admin/images/<?php echo $data['gmb_event']?>" class="card-img-top" alt="..." style="max-height:200px;">
                  <div class="card-body">
                    <p style="margin: 0; font-size: 14px; color: #2e2e2e;"><?php echo $data['tgl_event']?></p>
                    <h4 class="card-title " style="color:#333; font-weight: 600;"><?php echo $data['nm_event']?></h5>
                    <h6 class="card-text text-truncate" style="background:#FFF;color:#333"><?php echo $data['kt_event']?></h6>
                  </div>
                </div>
              </a>
          </div>
          <?php
        }
      ?>
      </div>
  </div>

  <div class="container" style="padding-left:30px; padding-right:30px; padding-bottom:10px;">
        <div class="row">
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="kotak" style="margin-top:10px;">
                <div class="card-body">
                  <img class="img" src="img/icon/iconbaru/idea.svg" alt="" style="max-height:50px;">
                  <h6 class="card-text" style="font-size:14px; margin-top:10px; color:#4d4c4c !important"><b>Creative Thinking</b></h6>
                  <p class="card-text" style="font-size:12px;">Kreatifitas adalah nyawa tim event organizer (EO) kami dalam kami bekerja untuk menghasilkan acara yang unik dan menarik.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="kotak" style="margin-top:10px;">
                <div class="card-body">
                  <img class="img" src="img/icon/iconbaru/high-five1.svg" alt="" style="max-height:50px;">
                  <h6 class="card-text" style="font-size:14px; margin-top:10px; color:#4d4c4c !important"><b>Solid Teamwork</b></h6>
                  <p class="card-text" style="font-size:12px;">Tim yang sold dan kompak siap membantu melancarkan acara bazaar, outbound, dan acara Anda lainnya.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="kotak" style="margin-top:10px;">
                <div class="card-body">
                  <img class="img" src="img/icon/iconbaru/confetti.svg" alt="" style="max-height:50px;">
                  <h6 class="card-text" style="font-size:14px; margin-top:10px; color:#4d4c4c !important"><b>Fun</b></h6>
                  <p class="card-text" style="font-size:12px;">Membawa kesenangan dalam acara anda</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="kotak" style="margin-top:10px;">
                <div class="card-body">
                  <img class="img" src="img/icon/iconbaru/like.svg" alt="" style="max-height:50px;">
                  <h6 class="card-text" style="font-size:14px; margin-top:10px; color:#4d4c4c !important"><b>Reliable</b></h6>
                  <p class="card-text" style="font-size:12px;">Partner yang dapat anda andalkan dalam acara anda</p>
                </div>
              </div>
            </div>
        </div>
      <hr>
  </div>
  
  <div class="container" style="padding-left:30px; padding-right:30px;">
      <h5 class="text-center"><b>Layanan Kami<br>Berbagai Layanan Jasa Event Organizer<b></h5>
      <div class="row" style="margin-top:20px;">
        <?php
      // include "../koneksi/koneksi.php";
        $query = "SELECT * FROM tabel_jasa";
        $execute = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_array($execute)) {
          ?>
          <div class="col-md-3 col-12" style="margin-top:10px;">
              <a href="?menu=detail_jasa&&id_jasa=<?php echo $data['id_jasa']?>" class="link-card">
                <div class="card" style="border: 0.5px solid #b0b0b0">
                  <img src="admin/images/<?php echo $data['gmb_jasa']?>" class="card-img-top" alt="..." style="max-height:200px;">
                  <div class="card-body">
                    <h4 class="card-title " style="color:#333; font-weight: 600;"><?php echo $data['nm_jasa']?></h5>
                    <h6 class="card-text text-truncate" style="background:#FFF;color:#333"><?php echo $data['kt_jasa']?></h6>
                  </div>
                </div>
              </a>
          </div>
          <?php
        }
      ?>
      </div>
      <hr>
  </div>

  <div class="container" style="padding-left:30px; padding-right:30px;">
      <h5><b>Bekerjasama dengan<b></h5>
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="container">
                <img src="img/sp1.PNG" class="card-img-top" alt="..." style="max-height:120px;">
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="container">
                <img src="img/sp2.PNG" class="card-img-top" alt="..." style="max-height:120px;">
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="container">
                <img src="img/sp3.PNG" class="card-img-top" alt="..." style="max-height:120px;">
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="container">
                <img src="img/sp4.PNG" class="card-img-top" alt="..." style="max-height:120px;">
              </div>
            </div>
        </div>
      <hr>
  </div>

  <div class="container" style="padding-left:30px; padding-right:30px;">
      <h5 class="text-center"><b>@tunggalkreatifindo<br>Ikuti Kami di Instagram<b></h5>
      <div class="row" style="margin-top:20px;">
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="container">
                <img src="img/eyeson2.jpg" class="card-img-top" alt="..." style="max-height:120px;">
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="container">
                <img src="img/konser.jpg" class="card-img-top" alt="..." style="max-height:120px;">
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="container">
                <img src="img/outbond.jpeg" class="card-img-top" alt="..." style="max-height:120px;">
              </div>
            </div>
            <div class="col-sm-3" style="margin-top:10px;">
              <div class="container">
                <img src="img/meet.jpg" class="card-img-top" alt="..." style="max-height:120px;">
              </div>
            </div>
        </div>
  </div>
 
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    