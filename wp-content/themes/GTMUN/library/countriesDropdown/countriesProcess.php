<?php
header('Content-Type: text/plain');
$csv = file_get_contents('countriesList.csv');
echo $csv;
?>