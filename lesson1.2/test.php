<?php
$p1= rand(0,100);
$p2= rand(0,100);

function sum() {
global $p1, $p2; #прибавляем к p1 значение p
 $p1=$p2+$p1;
  return $p1;
}

$message = sum();

echo $message;

?>
