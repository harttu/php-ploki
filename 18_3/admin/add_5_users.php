<h3>Add 5 users</h3>
<?php include '../php_connect_to_mysql.php';?>
<?php
$sql = "INSERT INTO users (kayttajatunnus,salasana,sukupuoli,syntymavuosi) VALUES ('vesa','kissa','mies',1975), ('kalle','qwerty','mies',1995), ('jaana','koira','nainen',2010), ('vieno','123abc','muu',2000) ;
";
if ($conn->query($sql) === TRUE) {
  echo "Success";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>