<?php
session_start();
?>
<h3>Dashboard</h3>

<?php include 'php_connect_to_mysql.php';?>

<?php
// Kopio tähän admin osiosta user-tietojen näyttö sessionissa olevalla käyttäjälle.
print_r($_SESSION);
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
  // output data of each row
echo "<table><thead><th>Kayttajatunnus</th><th>Salasana</th><th>Sukupuoli</th><th>Syntymavuosi</th></thead>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["kayttajatunnus"]."</td><td>".$row["salasana"]."</td><td>" .$row["sukupuoli"]."</td><td>".$row["syntymavuosi"]."</td></tr>";
  }
echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?> 