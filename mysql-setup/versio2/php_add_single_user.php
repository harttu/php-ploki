<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<h3>Create database</h3>

<?php include 'php_login_base.php';?>

<?php
?>


<?php
// define variables and set to empty values
$kayttajatunnus = $salasana = $sukupuoli = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kayttajatunnus = test_input($_POST["kayttajatunnus"]);
  $salasana = test_input($_POST["salasana"]);
  $sukupuoli = test_input($_POST["sukupuoli"]);

echo "<h2>Your Input:</h2>";
echo $kayttajatunnus;
echo "<br>";
echo $salasana;
echo "<br>";
echo $sukupuoli;
echo "<br>";

$sql = "INSERT INTO users (kayttajatunnus,salasana,sukupuoli,syntymavuosi) VALUES ('".$kayttajatunnus."','".$salasana."','".$sukupuoli."',1995)";

echo "SQL-status<br>";

if ($conn->query($sql) === TRUE) {
  echo "Success";
} else {
  echo "Error: " . $conn->error;
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  kayttajatunnus: <input type="text" name="kayttajatunnus">
  <br><br>
  salasana: <input type="text" name="salasana">
  <br><br>
  sukupuoli:
  <input type="radio" name="sukupuoli" value="female">Female
  <input type="radio" name="sukupuoli" value="male">Male
  <input type="radio" name="sukupuoli" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
?>

</body>
</html>
