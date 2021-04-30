<div class="container">
    <div class="row">
        <div class="col-12">
        <?php
            include 'koneksi/koneksi.php';
            $id_jasa = $_GET['id_jasa'];
            $query = "SELECT * FROM tabel_jasa WHERE `id_jasa` = '$id_jasa'";
            $execute = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($execute)) {
                # code...
          ?>
            <div class="card" style="margin-top: 30px !important;">
                <img class="card-img-top" src="admin/images/<?php echo $data['gmb_jasa']?>" alt="Card image cap" style="max-height: 400px; width: inherit;">
                <div class="card-body text-center">
                    <h3 class="card-title" style="font-weight: bold;"><?php echo $data['nm_jasa']?></h3>
                    <p class="card-text">Keterangan: <br><?php echo $data['kt_jasa']?></p>
                </div>
            </div>
         <?php     
         }
        ?>
        </div>
    </div>
</div>