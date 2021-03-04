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
	echo "<br>";
//	echo "Rivi:".$row["ktunnus"]." " . $row["salasana"]." ".$row["sukupuoli"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
