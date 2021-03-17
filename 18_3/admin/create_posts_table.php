<h3>Create database posts</h3>

<?php include '../php_connect_to_mysql.php';?>

<?php
$sql = "CREATE TABLE posts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kayttajatunnus VARCHAR(30) NOT NULL,
postaus VARCHAR(1000) NOT NULL,
luontiaika TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

echo "SQL-komento on :<br>";
echo $sql;
echo "<br>";

if ($conn->query($sql) === TRUE) {
  echo "posts table created";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>