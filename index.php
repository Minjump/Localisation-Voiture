<!DOCTYPE html>
<html>
<head>
  <title>Affichage des coordonnées GPS</title>
  <script>
    function afficherCoordonnees(latitude, longitude) {
      var element = document.getElementById("coordonnees");
      element.innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;
    }
  </script>
</head>
<body>
  <h1>Coordonnées GPS</h1>
  <div id="coordonnees">
    <?php
      if (isset($_GET['lat']) && isset($_GET['lng'])) {
        $latitude = $_GET['lat'];
        $longitude = $_GET['lng'];
        echo "Latitude: " . $latitude . "<br>Longitude: " . $longitude;
      }
    ?>
  </div>
</body>
</html>
