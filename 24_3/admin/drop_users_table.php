<h3>Drop table users</h3>

<?php include '../php_connect_to_mysql.php';?>

<?php
$sql = "DROP TABLE users";

if ($conn->query($sql) === TRUE) {
  echo "Table users deleted";
} else {
  echo "Error deleting table: " . $conn->error;
}

$conn->close();
?>