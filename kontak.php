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
  
  <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(-6.451164, 108.287650);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

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
  <table class="table">
  <thead>
  <tr>
  <td bgcolor="#999999">
  <div id="googleMap" style="width:700px;height:440px;" class="container"></div>
  </td>
  <td bgcolor="#999999">
    <br> <br> <br>
    <p>Alamat : </p>
    <p>Jl. Raya Ujung Jaya Widasari Indramayu </p>
    <p>No. HP :</p>
    <p>087 727 977 700</p>
    
    </td>
  </tr>
  </thead>
  </table>
</body>
</html>
