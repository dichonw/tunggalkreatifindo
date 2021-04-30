<?php
  include 'koneksi/koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, userscalabale=no">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <title>.:Tunggal Kreatif Indo:.</title>
    <link rel="shortcut icon" href="img/tk.png">
  </head>
  <body style="background-repeat:no-repeat; background-position:inherit; background-size:100%; background-attachment:fixed">
  <?php include 'inc/header.php' ?>
  
<div class="container" style="padding-left:0;padding-right:0;padding-top:10px;padding-bottom:10px; min-width:100%;margin-top:50px">
<?php
if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    switch ($menu) {
        case ('home');
            include('master/home.php');
            break;
        case ('detail_event');
            include('master/detail_event.php');
            break;
        case ('detail_jasa');
            include('master/detail_jasa.php');
            break;
        
        
    }
}else {
    include('master/home.php');
}
?>

</div>    

<?php include 'inc/footer.php';?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
  </body>
</html>