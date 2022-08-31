<meta charset="utf-8">/>
<?php
                              //Заполнение массивов
 $arrey = [];
 for ($i=0; $i < 10; $i++) { 
    $arrey[] = 'x';
 }
var_dump($arrey); // получили массив с 10 'x'


                                           //Переворот ассоциативного массива 

$arrey = ['a' => 1, 'b' => 2, 'c' => 3];
 $result = [];
  foreach ($arrey as $key => $value) {
    $result[$value] = $key;
  }
   var_dump($result);    // 1 => a итд.



                                            //Подсчет количества элементов

   $arrey = ['a', 'b', 'b', 'c', 'c', 'c'];
   $count = [];
       foreach ($arrey as  $value) {
         if (!isset($count[$value])) {
           $count[$value]++;
         }
       }
 var_dump($count);












?>






