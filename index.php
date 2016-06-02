<!DOCTYPE html>
<html lang="en">
 
	<?php
		include "head.php";
	?>

	<body link="#05619b" vlink="#05619b" alink="#05619b">
		<div id="main_container">
			<?php
				include "header.php";
			?>

			<div id="main_content">
				<?php
					include "colum1.php";
				?>
			
			
				<?php
					include "colum2.php";
				?>
			
			
				<?php
					include "colum3.php";
				?>
			
			
				<?php
					include "colum4.php";
				?>
			</div>
			<?php
				include "footer.php";
			?>
		</div>
	<script>
      function initMap() {
        var latlong = {lat: -30.0521863, lng: -51.216759000000025}; 
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: latlong,
          zoom: 17
        });

        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Aita Imóveis</h1>'+
      '<div id="bodyContent">'+
      '<p>Endereço:</p>'+
      '<p>Telefone:</p>'+
      '</div>'+
      '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });

      var marker = new google.maps.Marker({
        position: latlong,
        map: map,
        title: 'Aita Imóveis'
      });

      marker.addListener('mouseover', function() {
        infowindow.open(map, marker);
      });


      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
	</body>
</html>
