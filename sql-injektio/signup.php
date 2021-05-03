<!DOCTYPE HTML>  
<html>
<body>  

<h3>Luo käyttäjätunnus</h3>
<?php include 'header.php';?>

<?php
// ladataan SQL-istuntoa varten apukirjasto
?>
<?php include 'php_connect_to_mysql.php';?>

<?php
// luodaan tyhjät muuttujat tietojen tallentamista varten
$kayttajatunnus = $salasana = $sukupuoli = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kayttajatunnus = test_input($_POST["kayttajatunnus"]);
  $salasana = test_input($_POST["salasana"]);
  $sukupuoli = test_input($_POST["sukupuoli"]);

echo "<h2>Syötit tiedot:</h2>";
echo $kayttajatunnus;
echo "<br>";
echo $salasana;
echo "<br>";
echo $sukupuoli;
echo "<br>";

$sql = "INSERT INTO users (kayttajatunnus,salasana,sukupuoli,syntymavuosi) VALUES ('".$kayttajatunnus."','".$salasana."','".$sukupuoli."',1995)";
//echo "SQL-komento:".$sql."<br>";
//echo "SQL-status<br>";

$conn->multi_query($sql);

do {
    if ($result = $conn->store_result()) {
        var_dump($result->fetch_all(MYSQLI_ASSOC));
        $result->free();
    }
} while ($conn->next_result());
$conn->close();
}

function test_input($data) {
  // TODO: muokkaa tässä $data muuttujaa, jotta koodista tulee turvallisempaa

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
  <input type="radio" name="sukupuoli" value="nainen">Nainen
  <input type="radio" name="sukupuoli" value="mies">Mies
  <input type="radio" name="sukupuoli" value="muu">Muu
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>
