<?php
// Serverin puolelle luodaan tätä istuntoa varten muuttujia
session_start();
?>
<h3>Log Kalle in</h3>
<?php include 'php_connect_to_mysql.php';?>
<?php

/*
Muuta alla oleva koodi sellaiseksi, että koodi näyttää joko login-formin
tai prosessoi lähetettyjä tietoja, jos formin kautta lähetettiin.
Muista: REQUEST_METHOD == POST...

*/

$POST_KAYTTAJATUNNUS="kalle";
$POST_SALASANA="qwerty";

echo "SQL-haku on :";
$sql = "SELECT id,kayttajatunnus FROM users WHERE kayttajatunnus='".$POST_KAYTTAJATUNNUS."' and salasana='".$POST_SALASANA."'";
echo $sql;
echo "<br>";

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
}$conn->close();
?>