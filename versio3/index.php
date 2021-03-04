<!-- Yhdistä nämä koodit, luodaksesi toimivan 
index.php:n -->
<!-- SELECT osio -->
<h2>Users in database</h2>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plokidb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ktunnus,salasana,sukupuoli,svuosi,reg_date FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    print_r($row);
	$kayttaja=$row["ktunnus"];
	$salasana=$row["salasana"];
	echo "<br>";
//	echo "Rivi:".$row["ktunnus"]." " . $row["salasana"]." ".$row["sukupuoli"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 




<!-- tämä on vanha ja kovakoodattu index.php
muuta tämä yllä olevan avulla toimimaan MySQL:n kanssa
-->
<html>
<body>
<?php
// Koodi: https://github.com/harttu/PHP-ploki

// korvataan myöhemmin MySQL:llä
// esimerkki PHP-array
// $autot = array("volvo","mersu","skoda")
// echo "Pappa ajaa ".$autot[1]."a.";
$ktiedot=array(array("kalle","koira"),array("jussi","salasana"),
array("jorma","kissa"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	// halutaan tarkistaa salasana
$loytyi=false;
for( $i=0; $i < 3; $i++ ) {
	$kayttaja = $ktiedot[$i][0];
	$salasana = $ktiedot[$i][1];
	if( $kayttaja == $_POST["ktunnus"] && $salasana == $_POST["ssana"]) {
		//echo "Käyttäjä lyötyi indeksistä ".$i."<br>";	
		echo "Welcome ".$kayttaja."<br>";
		echo "Salasana:".$salasana."<br>";
		$loytyi = true;
	} // if $kayttaja = ...
} // for
if( $loytyi == false ) {
	echo "Käyttäjätunnus tai salasana on virheellinen";
}

} // $_SERVER["REQ... 
else {
	echo "Terve muukalainen";
}
?>

</body>
</html> 
