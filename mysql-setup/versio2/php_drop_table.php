<h3>Drop table users</h3>

<?php include 'php_login_base.php';?>

<?php
$sql = "DROP TABLE users";

if ($conn->query($sql) === TRUE) {
  echo "Table users deleted";
} else {
  echo "Error deleting table: " . $conn->error;
}

$conn->close();
?>