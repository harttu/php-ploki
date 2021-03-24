<?php
// Serverin puolelle luodaan tätä istuntoa varten muuttujia
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<h3>Login</h3>

<?php include 'php_connect_to_mysql.php';?>

<?php
?>


<?php
// define variables and set to empty values
$kayttajatunnus = $salasana = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kayttajatunnus = test_input($_POST["kayttajatunnus"]);
  $salasana = test_input($_POST["salasana"]);
 
echo "<h2>Your Input:</h2>";
echo $kayttajatunnus;
echo "<br>";
echo $salasana;
echo "<br>";

echo "SQL-haku on :";
$sql = "SELECT id,kayttajatunnus FROM users WHERE kayttajatunnus='".$kayttajatunnus."' and salasana='".$salasana."'";
echo $sql;
echo "<br>";
echo "SQL-status:<br>";

$result = $conn->query($sql);
echo "Haku tuotti seuraavat tulokset:<br>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
//	  print_r($row);
   echo "id: " . $row["id"]. " - Name: " . $row["kayttajatunnus"]. "<br>";
 	$_SESSION["kayttajatunnus"] = $kayttajatunnus;
	echo "Session started<br>";

// Jos kayttajatunnus löytyy, aloita sessio: 
// https://www.w3schools.com/php/php_sessions.asp 
// ja 
// https://www.tutorialspoint.com/php/php_login_example.htm

  }
} else {
  echo "0 results";
}

$conn->close();

}

function test_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
  return $data;
}



?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="login.php">  
  kayttajatunnus: <input type="text" name="kayttajatunnus">
  <br><br>
  salasana: <input type="text" name="salasana">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
?>

</body>
</html>
