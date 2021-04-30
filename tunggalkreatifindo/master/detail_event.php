<div class="container">
    <div class="row">
        <div class="col-12">
        <?php
            include 'koneksi/koneksi.php';
            $id_event = $_GET['id_event'];
            $query = "SELECT * FROM tabel_event WHERE `id_event` = '$id_event'";
            $execute = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($execute)) {
                # code...
          ?>
            <div class="card" style="margin-top: 30px !important;">
                <img class="card-img-top" src="admin/images/<?php echo $data['gmb_event']?>" alt="Card image cap" style="max-height: 400px; width: inherit;">
                <div class="card-body text-center">
                    <h3 class="card-title" style="font-weight: bold;"><?php echo $data['nm_event']?></h3>
                    <p class="card-text" style="font-size: 16px; margin: 0; font-weight: 500;"> Tanggal: <br><?php echo $data['tgl_event']?> </p>
                    <p class="card-text">Keterangan: <br><?php echo $data['kt_event']?></p>
                </div>
            </div>
         <?php     
         }
        ?>
        </div>
    </div>
</div>