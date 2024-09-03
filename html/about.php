<!-- website.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Webtechnology Project About</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="styles.css"> <!-- separate CSS file -->
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-black">Home</a>
      <a href="data.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Data</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
    </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-dark-grey w3-center" style="padding: 100px 16px">
  <h1 class="w3-margin w3-jumbo">About</h1>
</header>

<!-- About Section -->
<div class="w3-container w3-light-grey w3-center" style="padding: 50px 16px">
  <section>
    <h2>About me</h2>
    <div class="w3-container w3-light-grey w3-center" style="padding: 50px 16px">
      <p>Ik ben een student aan de Hoge School PXL, 18 jaar oud. In mijn vrije tijd sport ik graag. Momenteel studeer ik Elektronica ICT, een richting die me veel voldoening geeft en waarin ik mijn technische vaardigheden kan ontwikkelen.</p>
    </div>
  </section>

  <section>
    <h2>About the project</h2>
    <div class="w3-container w3-light-grey w3-center" style="padding: 50px 16px">
      <p>Mijn project is een webapplicatie die de gesimuleerde waarde van de CPU-temperatuur meet en weergeeft. Ik heb ervoor gekozen om dit project te doen omdat het voor mij de gemakkelijkste manier was om een verbinding op te zetten tussen een database (webserver/website) en een extern apparaat. Dit project stelt me in staat om praktische ervaring op te doen met het verbinden van verschillende technologieën en het beheren van gegevens in een realistische omgeving.</p>
    </div>
  </section>
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-center w3-opacity w3-padding-64">
 <p>© <a href="https://www.instagram.com/emielmangelschots/" target="_blank">Mangelschots Emiel</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
