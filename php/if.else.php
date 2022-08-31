<meta charset="utf-8"/>
<?php

// Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.

$arrey_nums = [4,9,23,15,4,5,3];
  $flag = false;          

 foreach ($arrey_nums as $value) {
     if ($value == 5){
      $flag = true;
      break;
     }
 }

 if ($flag === true) {
    echo 'Есть!';
 } else {
  echo 'Нет!';
 }



// второй вариант с помощью пользовательской финкции

 $arrey_nums = [4,9,23,15,4,5,3];
  function one_function($arrey_nums) {
    foreach ($arrey_nums as $value) {
      if ($value == 5) {
        return true;
      }
    }
    return false ;
  }


     // Сделайте функцию, которая параметрами принимает 2 числа. Если эти числа равны - пусть функция вернет true, а если не равны - false.

  function one_function($a, $b){
    return $a == $b;
 }
    if (one_function(5,5) === true) {
      echo "yes";
   }else{
    echo 'no';
   } 

// Сделайте функцию, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false

   function one_function($a,$b) {
     return ($a + $b) > 10;
   }

     if (one_function(7,5) === true) {
       echo 'yes';
     } else {
      echo 'no';
     }




?>