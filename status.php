<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/daap/resource/php/class/core/init.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>DAAP Status Checker</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="resource/img/daap-icon.png">

    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="resource/css/status.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark">
      <img src="resource/img/DAAPlogo-white.png" class="img-fluid logo" alt="daap-logo">
    </nav>

    <div class="wrapper">
         <div class="title">
            Discount Application and Alumni Portal <br> Status Checker
         </div>
         <form action="index.php" method="post">
            <div class="field">
                <h5>Please enter your transaction ID below</h5>
               <input type="text" placeholder="Your Transaction ID" required>
            </div>
            <div class="field">
               <input type="submit" value="Check Status">
            </div>
         </form>
      </div>
</body>

