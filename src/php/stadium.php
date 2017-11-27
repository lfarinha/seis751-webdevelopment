<?php
echo '<!DOCTYPE html>
<html>
<head>
    <link rel="import" href="../html/loader.html">
    <link rel="icon" type="image/png" href="../icon/chelsea-converted.png">
    <script src="../js/config.js" type="text/javascript"></script>
    <script src="../js/app.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcomponentsjs/1.0.14/webcomponents-lite.js"></script>
    <script src="../js/good-map.js" async defer></script>
</head>
<body onload="setPageTitle()">
<div id="logo-img">
    <img src="../image/chelsea-logo.png" sizes="">
</div>
<div id="header">
    <header>Chelsea FC</header>
</div>
<nav class="menu">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="index2.html">Home2</a></li>
        <li><a href="squad.html">Squad</a></li>
        <li><a href="stadium.html">Stadium</a></li>
        <li><a href="stadium2.html">Stadium2</a></li>
    </ul>
</nav>
<br>
<h1><p align="center" id="stadiumName">Stamford Bridge</p></h1>
<img src="../image/chelsea-bridge.jpg" id="stadium" align="middle">
<br>
<br>

<div id="ticket-area">
    <br>
<h2 align="center">Ticket Request Form</h2>
<form id="ticket-form" method="post" action="action.php">
    <p>First Name</p><input type="text" name="first_name" required>
    <p>Last Name</p><input type="text" name="last_name" required>
    <p>Number of tickets</p><input type="text" name="number_of_tickets" required>
    <p>Event Date</p><input type="date" name="date" required><br>
    <input type="submit" value="Buy">
</form>
</div>
<br>
<!--<div id="map"></div>-->';

  echo '
  <good-map api-key="AIzaSyCjrmboDPZHzMNJpv7OQhbUl6y0aVEyS4Q" latitude="51.481680 longitude="-0.190817" zoom="15" id="map" map-options="{"mapTypeId:"'.'"terrain"}"></good-map>
  ';


echo '
<br>
<br>
<br>
<footer id="footer">
    <nav class="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="squad.html">Squad</a></li>
            <li><a href="stadium2.html">Stadium</a></li>
        </ul>
    </nav>
    <p align="center">Credits to Google: <a href="https://developers.google.com/maps/documentation/javascript/tutorial" style="color: white;">Google API</a></p>
    <br>
    <p align="center">Leonardo Farinha</p>
</footer>
</body>
</html>
';
?>
<!--
 -->
