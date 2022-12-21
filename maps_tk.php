<?php
include('koneksi.php');
$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>
 
<!DOCTYPE html>
<html>
<title> Lokasi Sekolah</title>
  <head>
    <style>
      #map-canvas {
        width: 500px;
        height: 500px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    var marker;
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }     
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var infoWindow = new google.maps.InfoWindow;      
        var bounds = new google.maps.LatLngBounds();
 
 
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
          function addMarker(lat, lng, info) {
            var pt = new google.maps.LatLng(lat, lng);
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
          }
 
          <?php
            $query = mysqli_query($dbc,"select * from tk where id_tk='".$_GET['id_tk']."'");
          while ($data = mysqli_fetch_array($query)) {
            $lat = $data['lat'];
            $lon = $data['lng'];
            $nama = $data['nama'];
            echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");                        
          }
          ?>
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>

<?php
mysqli_close($dbc);
?>