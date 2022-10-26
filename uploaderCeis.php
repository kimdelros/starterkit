<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/daap/resource/php/class/core/init.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/daap/resource/php/class/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/daap/resource/php/class/reupload.php';

$db = new config();
$con = $db->con();
$sql = "SELECT * FROM `applications` WHERE `transID` = '$_GET[id]'";
$data= $con->prepare($sql);
$data->execute();
$result = $data->fetchAll(PDO::FETCH_ASSOC);

if(empty($result))
  header("Location: uploader.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>DAAP File Re-Uploader</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="resource/img/daap-icon.png">

    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="resource/css/uploader.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark">
        <a href="index.php"><img src="resource/img/DAAPlogo-white.png" class="img-fluid logo" alt="daap-logo"></a>
    </nav>
    <div class="wrapper">
    <div class="title">
        Discount Application and Alumni Portal <br> File Re-Uploader (CEIS)
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 pt-3">
          <label for="ceisDiploma" class="form-label">CEIS Diploma (Image Upload)</label>
             <input type="file" class="form-control text-center" aria-label="file example" name="ceisDiploma" id="ceisDiploma" accept="image/*" autocomplete="no">
        </div>
      </div>
      <div class="col-12 text-center mt-4">
        <input class="btn btn-secondary btn-lg btn-block" type="submit" name="reupload_Ceis" value="Re-Upload Document">
      <?php
        if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['reupload_Ceis']){
          $reupload = new reupload();
          $reupload->reuploadDoc($_FILES, 3);
        }
      ?>
      </div>
    </form>
    </div>

</body>
</html>
