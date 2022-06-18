<?php
$url = 'https://docs.google.com/spreadsheets/d/1RdvihZJYNDdlx-I5vx7qu8XbIWno2cjG_-eDeuSrtds/edit?usp=sharing';

$csv = file_get_contents($url);
$datas = str_getcsv($csv, "\n");
foreach($datas as $row){
   $row = str_getcsv($row, ",");
} 
