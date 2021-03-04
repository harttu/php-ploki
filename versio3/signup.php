<!-- TODO: Lisää CSS ja muut perus HTML-jutut -->

<h2>Luo uusi käyttäjätunnus</h2>
<?php
// alustetaan errorit
$ktunnusErr = $ssana1Err = $ssana2Err = $svuosiErr = $sukupuoliErr = "";
$ktunnus = $ssana1 = $ssana2 = $svuosi = $sukupuoli = "";

// Tällä saa printattua POST:n sisältämät arvot
//print_r($_POST);

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	if( empty($_POST["ktunnus"])) {	$ktunnusErr="Syötä käyttäjätunnus"; }
	else { $ktunnus=$_POST["ktunnus"]; }

	if( empty($_POST["ssana1"])) {	$ssana1Err="Syötä salasana"; }
	// TODO: tee salasanaan vaatimusten tarkistus
	// TODO: tee testaa, että salasana ja uusi salasana ovat samat
	else { $ssana1=$_POST["ssana1"]; }

	if( empty($_POST["ssana2"])) {	$ssana2Err="Syötä salasana"; }
	else { $ssana2=$_POST["ssana2"]; }
	
	if( empty($_POST["svuosi"])) {	$svuosiErr="Syötä syntymävuotesi"; }
	else { $svuosi=$_POST["svuosi"]; }

	if( empty($_POST["sukupuoli"])) {	$sukupuoliErr="Syötä sukupuoli"; }
	else { $sukupuoli=$_POST["sukupuoli"]; }

	if($ktunnus != "" && $ssana1 != "" && $ssana2 != "" && 
	$svuosi != "" && $sukupuoli != ""  ) {
		echo "<h2>Käyttäjätunnuksen luonti onnistui</h2>";
		echo "ktunnus:".$ktunnus."<br>";
		echo "ssana1".$ssana1."<br>";
		echo "ssana2".$ssana2."<br>";
		echo "svuosi".$svuosi."<br>";
		echo "sukupuoli".$sukupuoli."<br>";
		// TODO, integroi tähän MySQL:ään tallennus
		exit(1);
		
	}	
}// if( $_SERVER["REQUES...
?>
<!-- oikea: <form method="post" action="<?php /*echo htmlspecialchars($_SERVER["PHP_SELF"]); */?>"> -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Käyttäjätunnus: <input type="text" name="ktunnus" value=<?php echo $ktunnus;?>>
<span class="error">* <?php echo $ktunnusErr;?></span>
<br><br>
Salasana:
<input type="password" name="ssana1" value=<?php echo $ssana1;?>>
<span class="error">* <?php echo $ssana1Err;?></span>
<br><br>
Salasana uudestaan:
<input type="password" name="ssana2" value=<?php echo $ssana2;?>>
<span class="error">* <?php echo $ssana2Err;?></span>
<br><br>
Ikä:
<select id="syntymavuosi" name="svuosi">
	<?php 
	echo "<option selected='selected' value=''>Valitse syntymavuotesi</option>"; 
	for ( $i = 1930; $i < 2016; $i++ ) {
		echo "<option value=".$i.">".$i."</option>"; } 
	?>
</select> <?php echo $svuosiErr;?>
<br>
Sukupuoli:
<input type="radio" name="sukupuoli" value="female">Nainen
<input type="radio" name="sukupuoli" value="male">Mies
<input type="radio" name="sukupuoli" value="other">Muu
<span class="error">* <?php echo $sukupuoliErr;?></span>
<br><br>
<input type="submit" name="submit" value="Luo käyttäjätunnus">
</form> 
