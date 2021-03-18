<h3>Create database posts</h3>

<?php include '../php_connect_to_mysql.php';?>

<?php
$sql = "";

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
