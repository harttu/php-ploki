<?php
print_r($_SERVER);

print_r(array_keys($_SERVER));

foreach(array_keys($_SERVER) as $key){
    echo "<h3>Key: $key</h3><br>";
    echo "Value:".$_SERVER[$key]."<br>";
  }
  ?>

?>