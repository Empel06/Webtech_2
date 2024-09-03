<!-- website.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Webtechnology project Home</title>
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
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Graph</a>
    </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-dark-grey w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">WebTech CPU temp</h1>
  <a href="data.php" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Show Data</a></header>

<div class="w3-container w3-dark-grey w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-xlarge"> <a href="https://rickroll.it/rickroll.mp4" class="w3-button w3-padding-large w3-large w3-margin-top"></a></h1>
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
