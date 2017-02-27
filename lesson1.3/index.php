<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

/*
$europe = ['Песец','Белый медведь','Волк','Олень','Бобр'];
$asia = ['Панда','Розовый пеликан','Павлин','Японский макак','Золотой фазан','Черная пантера'];
$africa= ['Слон','Носорог','Жираф','Зебра','Лев','Верблюд','Буйвол','Антилопа'];
$north_america = ['Тапир','Волк','Опоссум','Скунс','Дикобраз','Аллигатор','Гризли','Броненосец'];
$south_america = ['Гарпия','Ягуар','Анаконда','Оцелот','Муравьед','Игуана','Тукан'];
$ausralia = ['Кенгуру','Варан','Утконос','Намбат','Молох','Ехидна','Вомбат','Сахарный летающий поссум'];
$antarctica = ['Пингвин','Кашалот','Морской слон','Морской леопард','Тюлень крабоед','Кальмары','Буревестник']; */



/* STEP 1
Берем строку и создаем из нее массив*/
/*
   Строка, которая не содержит разделителя, будет
   просто возвращать массив с одним значением оригинальной строки.
   В двойных кавычках интерпретатор считывает значение переменной внутри строки
*/
(string)$input_europe = "Vulpes lagopus,Ursus maritimus,Castor fiber,Castor";
(string)$input_asia = "Ailuropoda melanoleuca,Pelecanus onocrotalus,Pavo cristatus,Macaca fuscata";
(string)$input_africa= "Loxodonta africana,Diceros bicornis,Giraffa camelopardalis";



/* STEP 2
Задача: Разбить животных по континентам
Создаем двухуровневый массив Континент ($data_continents), куда записываем все хживотных
$data_continents = [
    "Европпа" => $data_europe,
    "Азия" => $data_asia,
    "Африка" => $data_africa,
];
*/

/* STEP 3
Задача: Найти словосочетания разделенные пробелами
Решение: Разобьем каждую строку на подстроки - словосочетания отделенные '',"
Подсчитаем количество слов в строке
Условие, если количество слов в строке >=2 , то запишем их в новую переменную
и выведем на экран
*/

(string)$input_rezdelitel = ',';//Обозначаем разделитель
(array)$data_europe = explode( ',', $input_europe ) ;//Создадим простые массивы из значений строк без разбивки
(array)$data_asia = explode( ',', $input_asia );
(array)$data_africa = explode( ',', $input_africa ) ;
//string implode ( string $glue , array $pieces )

//$input_europe = split(" ",$input_europe); //считаю количество слов разделенных пробелами

//var_dump ($input_europe);
//echo "Количество слов в строке = " , sizeof($input_europe) ;//4


$numb_element_europe = count($data_europe);//4
$numb_element_asia = count($data_asia);//4
$numb_element_africa = count($data_africa);





//mb_strlen(); Подсчет символов в строке
  /* STEP 4
  Задача: Составить нове комбинации из отобранных слов и вывести их на экран
  Решение:
  */











$europe = ['Vulpes lagopus','Ursus maritimus', 'Castor fiber'];
$asia = ['Ailuropoda melanoleuca','Pelecanus onocrotalus','Pavo cristatus','Macaca fuscata'];
$africa= ['Loxodonta africana','Diceros bicornis','Giraffa camelopardalis'];
$north_america = ['Dasypus pilosus','Canis lupus','Caluromys philander'];
$south_america = ['Morphnus guianensis','Panthera onca','Eunectes murinus','Leopardus pardalis','Myrmecophaga tridactyla'];
$ausralia = ['Macropus','Varanus varius','Ornithorhynchus anatinus'];

// Создаем ассоциативный массив. key может быть либо типа integer, либо типа string. value может быть любого типа.

$continents = [
    "Европпа" => $europe,
    "Азия" => $asia,
    "Африка" => $africa,
    "Северная америка" => $north_america,
    "Южная америка" => $south_america,
    "Австралия" => $ausralia
    ];
    $continents;

    foreach ($continents as $value) {
        foreach ($value as $europe) {
            echo "$europe </br>";
            $counter = count($europe);
            echo $counter;
          if ($counter = 2){//отбираем животных из 2х слов
            //  echo $key, '</br>';
          }
    }
  }



    //Переменная содержит двумерный массив из 6 континентов и список животных, на них обитающих
shuffle($continents);
   #Неработает с двумерным массивом var_dump($continents);
// for ($i=0; $i < count($continents); $i++){
//     echo $continents[$i];
//     echo '</br>';
// };
/*foreach (массив as $ключ=>$значение)
команды;*/
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://bootstrap-3.ru/examples/grid/grid.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<title>   Животные планеты Земля </title>
</head>
<body>
 <div class="container">
<div class='row'>
  <div class="col-sm-12" style="margin: 10px 0 0 0;">
      <?php ?>
  </div>
</div>

    <div class="page-header">
        <h1>Животные планеты Земля</h1>
        <p class="lead">Эта страница посвящена животным планеты Земля.</p>
    </div>

      <h3>Все животные в базе</h3>
      <p>Выведем <strong>всех животных</strong> из базы на экран</p>
    <div class="row">
        <div class="col-md-4">
          <h4>Европа</h4>
          <?php  for ($i=0; $i < count($europe); $i++){
        echo $europe[$i];    echo '</br>';     }; ?>
      </div>
        <div class="col-md-4">
        <h4>Азия</h4>
        <?php  for ($i=0; $i < count($asia); $i++){
        echo $asia[$i];    echo '</br>';     }; ?>
      </div>
        <div class="col-md-4">
        <h4>Африка</h4>
        <?php for ($i=0; $i < count($africa); $i++){
        echo $africa[$i];    echo '</br>';     }; ?>
      </div>
    </div>
       <hr>
    <div class="row">
       <div class="col-md-4">
         <h4>Северная Америка</h4>
         <?php   for ($i=0; $i < count($north_america); $i++){
        echo $north_america[$i];   echo '</br>';   }; ?>
      </div>
       <div class="col-md-4">
         <h4>Южная Америка</h4>
         <?php   for ($i=0; $i < count($south_america); $i++){
        echo $south_america[$i];    echo '</br>';     }; ?>
      </div>
        <div class="col-md-4">
          <h4>Австралия</h4>
        <?php   for ($i=0; $i < count($ausralia); $i++){
        echo $ausralia[$i];    echo '</br>';     }; ?>
      </div>
    </div>
      <hr>
      <h3>Offset, push, and pull resets</h3>
      <p>Reset offsets, pushes, and pulls at specific breakpoints.</p>
      <div class="row">
        <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0</div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
        <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0</div>
      </div>
    </div> <!-- /container -->

  </body>

</body>
</html>
