<?php
// Serverin puolelle luodaan tätä istuntoa varten muuttujia
// istuntoa käytetään pitämään kirjaa web-sivua selaavasta käyttäjästä
session_start();
?>

<!DOCTYPE HTML>  
<html>
<body>  
<?php include 'header.php';?>
<h3>Login</h3>
<?php include 'php_connect_to_mysql.php';?>

<?php
// näihin muuttujiin asetetaan käyttäjän antamat arvot
$kayttajatunnus = $salasana = "";

// Jos sivua kutsutaan POST-methodilla, eli toisin sanoen, jos
// käyttäjä painaa nappia kirjaudu sisään, niin REQUEST_METHOD on POST ja
// if-lauseen sisässä oleva koodi ajetaan
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  // asetetaan kayttajatunnukseen ja salasanaan käyttäjän antamat arvot
  // TODO: muokkaa tässä kohtaa SQL-koodi turvallisemmaksi
  $kayttajatunnus = $_POST["kayttajatunnus"];
  $salasana = $_POST["salasana"];
 
  // Muodostetaan SQL-haku
  $sql = "SELECT id,kayttajatunnus,rooli FROM users WHERE kayttajatunnus='".$kayttajatunnus."' and salasana='".$salasana."'";
  
  // DEBUG: tulostetaan se
  //echo "SQL-kysely on ".$sql."</br>";
  
  // result muuttujaan talletetaan taulukkomuodossa palautuvat tulokset
  $result = $conn->query($sql);

  // jos num_rows on suurempi kuin 0, haku tuotti tuloksia ja käyttäjä voidaan kirjata sisään
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $_SESSION["kayttajatunnus"] = $row["kayttajatunnus"];
      $_SESSION["rooli"] = $row["rooli"];
      echo "Kirjautuminen käyttäjälle ".$_SESSION["kayttajatunnus"]." onnistui.<br>";
      // Jos kayttajatunnus löytyy, aloita sessio: 
      // https://www.w3schools.com/php/php_sessions.asp 
      // ja 
      // https://www.tutorialspoint.com/php/php_login_example.htm
    }  
  }
  // jos tuloksia ei löytynyt 
  else {
    echo "Kirjautuminen epäonnistui.";
  }
// suljetaan yhteys tietokantaan
$conn->close();

}

?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="login.php">  
  kayttajatunnus: <input type="text" name="kayttajatunnus">
  <br><br>
  salasana: <input type="text" name="salasana">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>
