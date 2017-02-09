<?php

function hello()#функция хелло
{
echo 'hello world </br>';
}



function title() {#функция title
echo "<h1>";
  hello();
  echo '</h1>';
}


for ( $i=0; $i<10; $i++) { #цикл for
  # Регистр имеет значение
  hello(); #Вызов функции в цикле

}
title();

helloworld(); #цикл прервется т.к. функция не задана
#Fatal error: Call to undefined function helloworld() in D:\xampp\htdocs\nethology\function_hello.php on line 13
#дальше не идет

 ?>
