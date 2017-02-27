 <html>
  <head>
    <title>2 lesson</title>
<style type="text/css">
    .submit {
    margin: 0 auto;
    text-align: center;
    padding-top: 20px;
    color: black;
}
</style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    
    <body>
    <div class="container">
      <div class="row" style="padding-top: 100px;">
        <div class="col-xs-12 col-sm-12 col-lg-8">
          <div class="panel panel-primary">
             
                    <div class="panel-heading">
                <p><h3 class="panel-title">Проверьте, входит ли ваше число в числовой ряд</h3></p>
                <form method="post">
                <div class="input-group">
                          <span class="input-group-addon" id="user1">#</span>
                          <input name="usr1" type="text" class="form-control" placeholder="Введите число" aria-describedby="basic-addon1">
                </div>
              <div class="submit">
                <input name="submit" type="submit" class="btn center" value="Отправить" >
              </div>
              </form>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
           <p>
                 <?php
                    (int)$u1 = $_POST["usr1"]; #число пользователя
                    echo '<strong>Ваше число:</strong> ', $u1 , '</br>';
                    /*
                    Создаем 2 переменные, задаем их значения по 1*/
                    $p1=1;
                    $p2=1;
                    $flag=true;//Создаем флаг, для выхода из цикла
                    /*Почему при указании типа === появляются ошибки?*/
                    do
                    {
                      if($p1>$u1)
                        { //p1 больше чем число пользователя?
                        /*отступление 0 - входит в ряд в Фибоначчи
                        if ($u1==0) {
                          echo 'задуманное число 0 входит в числовой ряд';# Да
                        } else*/
                        echo 'задуманное число Не входит в числовой ряд';# Да
                        $flag = false;
                        break;
                        }
                      else
                        { #переменная меньше или равна u1
                          if($p1==$u1 )#переменная рвана u1
                            {
                            echo 'задуманное число входит в числовой ряд';
                            $flag = false;
                            }
                          elseif ($p1<$u1) {
                            #переменная меньше u1
                            $p3 = $p1; #сохраняем в p3 значение p1, записываем справо на лево
                            $p1 = $p2 + $p1; #добавляем к p1 значение p2, записываем в p1
                            $p2 = $p3; #присваиваем переменной p2 значение p3
                            }
                        }
                    }
                    while($flag); #выполняем пока "true"
                ?>
            </p>           
          </div>        
          <div class="col-sm-12">
          Чи́сла Фибона́ччи — элементы последовательности
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, 10946, … (последовательность A000045 в OEIS),
в которой первые два числа равны либо 1 и 1, либо 0 и 1, а каждое последующее число равно сумме двух предыдущих чисел. Названы в честь средневекового математика Леонардо Пизанского (известного как Фибоначчи).
<a href='https://ru.wikipedia.org/wiki/%D0%A7%D0%B8%D1%81%D0%BB%D0%B0_%D0%A4%D0%B8%D0%B1%D0%BE%D0%BD%D0%B0%D1%87%D1%87%D0%B8'>Подробнее тут</a>
           </div>
        </div>
    </div>
    </div>
  <body>
  </html>