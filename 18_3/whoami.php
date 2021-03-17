<?php
session_start();
?>

<h1>Kuka olet?</h1>

<?php
echo "Olet:";
echo $_SESSION['kayttajatunnus'];
?>