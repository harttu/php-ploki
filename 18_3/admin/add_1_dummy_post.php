<h3>Add 1 post</h3>
<?php include '../php_connect_to_mysql.php';?>
<?php
$sql = "INSERT INTO posts (kayttajatunnus,postaus) VALUES ('vesa','Oli muuten järkky perjantain...')";

echo "SQL-komento on :<br>";
echo $sql;
echo "<br>";

if ($conn->query($sql) === TRUE) {
  echo "Success";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>