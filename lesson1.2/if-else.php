<?php
echo '<center style="margin-top:1%;background:#e8e8e8;padding: 20%;"><h1>';



$u1 =  rand(-2,2); #число пользователя

/*
Создаем 2 переменные, задаем их значения  - "1" */
$p1=1;
$p2=1;

function mem1(){
  return null;
}

function mem2(){
  return null;
}
$p1= mem1();
$p2= mem2();

echo $p1 ;
echo $p2 ;


if($p1>$u1) {#p1 больше чем число пользователя?
echo 'задуманное число Не входит в числовой ряд';# Да
echo '</br>', $p1;
}
else {  #переменная меньше или равна u1

  if($p1<$u1 )#переменная меньше u1
     {
        $p3 = $p1;  #сохраняем в p3 значение p1, записываем справо на лево
        $p1=$p2+$p1;
       $p2=$p3; #присваиваем переменной p2 значение p3
       #нужно вернуть значения в переменные p1 и p2
       #запишем значения переменных в функцию и вызовем вачале программы???
       mem1() = $p1;
       mem2() = $p2;
    }
  else{#переменная рвана u1
    echo 'задуманное число входит в числовой ряд';
    echo '</br>', $p1;
  }
}




echo '</h1></center>';
?>
