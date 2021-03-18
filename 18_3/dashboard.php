<?php
session_start();
?>
<h3>Dashboard</h3>

<?php include 'php_connect_to_mysql.php';?>

<?php
echo "Tervetuloa, ".$_SESSION["kayttajatunnus"];
// Kopio tähän admin osiosta user-tietojen näyttö sessionissa olevalla käyttäjälle.

?> 
