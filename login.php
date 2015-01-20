<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dala Travel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="icon" href="http://www.prodraw.net/favicon/temp/c6ab2mdy_2.ico"> <!-- favicon -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body bgcolor="#999999">

<?php
include('modul/slide.php');
?>
<br>
<?php
include('modul/menu.php');
?>
  <br>
  
<div class="container" style="background-color:#666">
  <h2>Form Login User</h2>
  <form role="form">
    <div class="form-group" style="background-color:#06F">
      <label for="email">Email:</label><br>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group" style="background-color:#06F">
      <label for="pwd">Password:</label><br>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default" style="background-color:#999">Submit</button>
  </form>
</div>

</body>
</html>
