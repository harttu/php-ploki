<h2>Perus taulukko:array</h2>
<?php
$autot = array("volvo","mersu","skoda");
echo "Pappa ajaa ".$autot[1]."a.<br>";

$ktiedot=array(array("kalle","koira"),array("jussi","salasana"),
array("jorma","kissa"));
for( $i=0; $i < 3; $i++ ) {
	echo "käyttäjätunnus:".$ktiedot[$i][0].", salasana:".$ktiedot[$i][1]."<br>";
}
?>

<h2>Foreach -taulukko</h2>
<?php



$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}

echo $arr;
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
?>


<?php
// SEKALAISTA
// Tällä saa printattua POST:n sisältämät arvot
//print_r($_POST);

?>
