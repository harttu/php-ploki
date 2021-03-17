<h3>Create database</h3>

<?php include 'php_login_base.php';?>

<?php
$sql = "INSERT INTO users (kayttajatunnus,salasana,sukupuoli,syntymavuosi) VALUES ('matti','abc','mies',1995); 
INSERT INTO users (kayttajatunnus,salasana,sukupuoli,syntymavuosi) VALUES ('vesa','kissa','mies',1975);
INSERT INTO users (kayttajatunnus,salasana,sukupuoli,syntymavuosi) VALUES ('kalle','qwerty','mies',1995);
INSERT INTO users (kayttajatunnus,salasana,sukupuoli,syntymavuosi) VALUES ('jaana','koira','nainen',2010);
INSERT INTO users (kayttajatunnus,salasana,sukupuoli,syntymavuosi) VALUES ('vieno','123abc','muu',2000);
";

if ($conn->query($sql) === TRUE) {
  echo "Success";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>