<?php
// Serverin puolelle luodaan tätä istuntoa varten muuttujia
// istuntoa käytetään pitämään kirjaa web-sivua selaavasta käyttäjästä
session_start();
?>

<?php include 'header.php';?>
<h3>Dashboard</h3>

<?php
if( empty($_SESSION["kayttajatunnus"]) ) {
  echo "Kirjaudu ensin sisään.";
  // lopeta sivun lataus
  exit(1);
}
?>

<?php
// ladataan SQL-istuntoa varten apukirjasto
?><?php include 'php_connect_to_mysql.php';?>

<?php
// Kopio tähän admin osiosta user-tietojen näyttö sessionissa olevalla käyttäjälle.
echo "Tervetuloa, ".$_SESSION["kayttajatunnus"]."<br>";
?> 
<h4>Käyttäjätietosi</h4>
<?php
echo "SQL-haku on :";
$sql = "SELECT kayttajatunnus, salasana, sukupuoli, syntymavuosi FROM users WHERE kayttajatunnus='".$_SESSION["kayttajatunnus"]."'";
echo $sql;
echo "<br>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // tulostetaan taulukon otsikkotiedot
echo "<table><thead><th>Kayttajatunnus</th><th>Salasana</th><th>Sukupuoli</th><th>Syntymavuosi</th></thead>";
  while($row = $result->fetch_assoc()) {
    // tulostetaan taulukon sisältö
    echo "<tr><td>".$row["kayttajatunnus"]."</td><td>".$row["salasana"]."</td><td>" .$row["sukupuoli"]."</td><td>".$row["syntymavuosi"]."</td></tr>";
  }
echo "</table>";
} else {
  echo "Tietoa ei voida näyttää";
}
// sulje SQL-yhteys
$conn->close();
?> 