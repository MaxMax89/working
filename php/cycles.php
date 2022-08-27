<?php
 //Цикл foreach


$kkk = array('1)' => 'ABC', 
             '2)' => 'EFG',
             '3)' => 'HIJ'
              ); 

   foreach($kkk as $key => $value) {
    echo "$key. - ".strrev($value)."<br>";
}
// Цикл for

  $lll = ['1','2','3','4','5'];

   for ($i=0; $i < count($lll) ; $i++) { 
       echo "$lll[$i] <br>";
   }
 
 // Цикл foreach на примере двуерного массива.

 $sss = [
    'Города' =>['Москва','Тверь','Дубна'],
    'Страны' =>['Россия','Франция','Турция'],
    'Планеты' =>['Земля','Марс','Юпитер']
      ];
     foreach ($sss as $key => $dds) {
        echo "<b>$key</b><br>";
         foreach ($dds as $value) {
            echo "<li>$value</li>";
             // code...
         }
     }
      

 

$ooo = [
    'Города' =>['Москва','Тверь','Дубна'],
    'Страны' =>['Россия','Франция','Турция'],
    'Планеты' =>['Земля','Марс','Юпитер']
     ];
     foreach ($ooo as $key => $hhh) {
        echo "<b>$key</b><br>";
         for ($i=0; $i < count($hhh) ; $i++) { 
              echo "<li>$hhh[$i]</li>";
          } 
     }       
              //сортировка массива 
     $usrs = [
     ['id'=>25,'name'=> 'DMaksim', 'age' => 15],
     ['id'=>34,'name'=> 'CKirill', 'age' => 26],
     ['id'=>16,'name'=> 'AStepan', 'age' => 11],
     ['id'=>56,'name'=> 'BJleg', 'age' => 42]
     ];
     
     function ggg($a, $b) {
          if ($a == $b) return 0;
           return $a['name'] <=> $b['name']; 
     }
       usort($usrs, cmp_function 'ggg');


         // распечатать массив
  echo "<pre>"; 
   print_r(array[id])
  echo "</pre>";




$mas = [
    'Имена'=>['Иван','Петр','Сергей'],
    'месяцы'=>['сентябрь','январь','март'],
    'дни'=>['среда','вторник','суббота']
];      foreach ($variable as $key => $value) {
           for ($i=0; $i <count(mas) ; $i++) { 
            
        } }

        //Цыкл wile
$i = 1;
while ($i <= 100) {
    echo $i."<br>";
    $i++;
}

$gk = [10,20,15,17,24,35];

   $result = 0;
 foreach ($gk as $value) {
     $result = $result + $value;
 }
 echo $result;


$p = 1;

    
}

$masst = ['html','css','php','js','jq'];
   foreach ($masst as  $value) {
      echo $value."<br>";  
       
   }

$pro = [1,2,3,4,5];
 $res = 0;
 foreach ($pro as  $value) {

     $res = $res + $value * $value;
 }
 echo $res;

$arr = ['green'=>'зеленый','red'=>'красный','blu'=>'голубой'];
  foreach ($arr as $key => $value) {
      echo $key." - ".$value."<br>";
  }

$arr = ['Коля'=> 200,'Вася'=> 300,'Петя' => 400];
 foreach ($arr as $key => $value) {
     echo $key." - зарплата ".$value." Долларов<br>";
 }




//сумма чисал от 1 до 100

$b = 0;
$i = 1;
while ($i <= 100) {
    $b = $b + $i;   //или $b += $i; 
    $i++;
    
}
echo $b


// цикл foreach с условным оператором if

$arr = [2,5,9,15,0,4,];
 foreach ($arr as  $value) {
      if ($value > 3 AND $value < 10) {
        echo $value."<br>";
          // code...
      }
  } 


$arr = [1,10,12,-6,-8];
$y = 0;
foreach ($arr as $value) {
    if ($value > 0) {
        $y += $value;
    }
}
echo $y;

$arr = [1,2,5,9,4,13,4,10];
 foreach ($arr as $value)  {
     if ($value == 4) ; {
         echo 'Есть!';
     }
 }



?>