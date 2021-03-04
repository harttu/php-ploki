<!-- ESIM haku:
http://localhost/php-login/get_login_pohja.php?ktunnus=matti&ssana=ttaa -->

<h2>Users from database with GET</h2>
 <?php
 
$servername = "localhost";
$username_mysql = "root";
$password_mysql = "";
$dbname = "plokidb";

// Create connection
$conn = new mysqli($servername, $username_mysql, $password_mysql, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ktunnus,salasana,sukupuoli,svuosi,reg_date FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //print_r($row);
	
	
	$kayttajatunnus = $_GET["ktunnus"];
	$salasana = $_GET["ssana"];
//	echo "<br>";
//	echo "Rivi:".$row["ktunnus"]." " . $row["salasana"]." ".$row["sukupuoli"]."<br>";
	$mysql_ktunnus = $row["ktunnus"];
	$mysql_ssana = $row["salasana"];
	echo "MySQL palautti: ".$mysql_ktunnus." ".$mysql_ssana."<br>";
	echo "Meidän GET-tiedot: ".$kayttajatunnus." ".$salasana."<br>";
	if( $mysql_ktunnus == $kayttajatunnus ) { echo "Käyttäjätunnus löytyi<br>" ;}
  }
} else {
  echo "0 results";
}
$conn->close();
?> 


