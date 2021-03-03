<html>
<body>
<?php
// Koodi: https://github.com/harttu/PHP-ploki

// korvataan myöhemmin MySQL:llä
// esimerkki PHP-array
// $autot = array("volvo","mersu","skoda")
// echo "Pappa ajaa ".$autot[1]."a.";
$ktiedot=array(array("kalle","koira"),array("jussi","salasana"),
array("jorma","kissa"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	// halutaan tarkistaa salasana
$loytyi=false;
for( $i=0; $i < 3; $i++ ) {
	$kayttaja = $ktiedot[$i][0];
	$salasana = $ktiedot[$i][1];
	if( $kayttaja == $_POST["ktunnus"] && $salasana == $_POST["ssana"]) {
		//echo "Käyttäjä lyötyi indeksistä ".$i."<br>";	
		echo "Welcome ".$kayttaja."<br>";
		echo "Salasana:".$salasana."<br>";
		$loytyi = true;
	} // if $kayttaja = ...
} // for
if( $loytyi == false ) {
	echo "Käyttäjätunnus tai salasana on virheellinen";
}

} // $_SERVER["REQ... 
else {
	echo "Terve muukalainen";
}
?>

</body>
</html> 
