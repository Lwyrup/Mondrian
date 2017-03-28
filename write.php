<?php
$file = "art.csv";

$f = fopen($file, "a");
$dataString = $_POST["thing"];
fwrite($f, $dataString);
fclose($f);

echo "Painting has been saved"
?>



