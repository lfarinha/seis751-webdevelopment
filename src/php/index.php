<?php
echo '
<!DOCTYPE html>
<html>
<head>
    <link rel="import" href="../html/loader.html">
    <link rel="icon" type="image/png" href="../icon/chelsea-converted.png">
    <script src="../js/config.js" type="text/javascript"></script>
</head>
<body onload="setPageTitle()">
<div id="logo-img">
    <img src="../image/chelsea-logo.png">
</div>
<div id="header">
    <header>Chelsea FC</header>
</div>
';
  require 'links.php';
echo '</body>
</html>'
;
?>
