<h3>Create database</h3>

<?php include 'php_login_base.php';?>

<?php

$sql = "SELECT kayttajatunnus, salasana, sukupuoli, syntymavuosi FROM users";
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