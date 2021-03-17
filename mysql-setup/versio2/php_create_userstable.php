<h3>Create database</h3>

<?php include 'php_login_base.php';?>

<?php
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kayttajatunnus VARCHAR(30) NOT NULL,
salasana VARCHAR(30) NOT NULL,
sukupuoli VARCHAR(50),
syntymavuosi INT(6),
rekisterointi_pvm TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Users table created";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>