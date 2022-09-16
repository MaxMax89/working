<meta charset="utf-8"/>


<?php


// функция для красивой распечатки массива
function debug($data) {
	echo '<pre>' . print_r($data, 1) . '</pre>';
}

$users = range(-10, 10);

debug($users);


// Функция сортировки массива с помощью пользовательской функции и функции usort.
//-----------------------------------------------------------------------------------
 function my_sort ($a, $b) {
 	if ($a == $b) return 0;       //Пользовательская функция
 	return $a > $b ? 1 : -1;     
}
// Вариант для php7: более удобный современный
function my_sort ($a, $b) {
 	return $a['id'] <=> $b['id'];        
 	     
}


$users = [
 ['id' => 9, 'name' => 'Djon', 'age' => 23],
 ['id' => 7, 'name' => 'Ajon', 'age' => 25],
 ['id' => 8, 'name' => 'Cjon', 'age' => 22],
 ['id' => 6, 'name' => 'Bjon', 'age' => 21]
 ];

debug($users); //распечатает не отсортированый массив т.к до использования функции
usort($users, my_sort);
debug($users); //распечатает отсортированый массив по [id]

//Пользовательская Функция примеры

  
 function hello($name) {
  $text = 'привет '.name;
  return $text;
}
echo  hello('Колян'); 


function one_function($num) {
  return $num * $num;              // Вернет квадрат числа
}

   echo one_function(5) //25  


//  Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.




   function weekday($day_number) {
     $array = [1 => 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
      return $array[$day_number];
   }
  echo "сегодня".  .weekday(3);  // сегодня среда

function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

 function get_digits($num){
  return str_split($num, 1);
 }

function arrey_sum($arr){
  $sum = 0;
  foreach ($arr as  $value) {
    $sum  += $value;
  }
}

function in_range($num){
  $sum = arrey_sum(get_digits($num));
  return $sum >= 1 and $sum <= 9;
}


$array = [15,16,22,824,436,];
  $result[] = 0;
  foreach ($array as  $value) {
    $sum += array_sum(get_digits($value));
  }
echo $sum;


////////////////////////////////                     Функция inArray
//Задача: реализуйте функцию inArray, которая будет проверять, есть ли в массиве элемент с таким значением или нет. Первым параметром функция должна принимать значение, а вторым - массив. Если такой элемент есть - функция должна вернуть true, а если нет - false.




function inArray($num, $array){
  foreach ($array as $value) {
    if ($num = $value) {
      return true;     
    } 
      return false;
    
  }
}

$arrayNum = [15,22,458,333,21,98];
  if  (inArray(333,$arrayNum) === true) {
    echo "Yes";

  } else{
    echo "No";
  }
    
         //Задача: реализуйте функцию isSimple, которая параметром будет принимать число и проверять, простое оно или нет. Простое число - это число, которое не делится ни на одно другое число (кроме как на 1 и на само себя - на это делятся все числа). Если число простое - функция должна вернуть true, в противном случае false.

  function isSimple($num){
    for ($i=2; $i < $num ; $i++) { 
       if ($num % $i == 0){
        return false;
       }
        return true;
    } 

  }
echo isSimple(13); // выведет true


           //Задача: реализуйте функцию getDivisors, которая параметром будет принимать число и возвращать массив его делителей, то есть чисел, на которое делится наше число. К примеру, если мы передадим число 24 - мы должны получить массив [1, 2, 3, 4, 6, 12, 24].

function getDivisort($num){
$result = [];  
for ($i=1; $i <= $num; i++) { 
    if ($num % $i == 0){
      $result[] = $num;
    }
  }
   return $result;
}

echo get_digits(24);
                                      //Static переменные

  //Создадим простую функцию:
  function func()
  {
    /*
      Укажем PHP, что мы хотим, чтобы $a была статической переменной:
    */
    static $a;

    $a++;
    echo $a;
  }

  func(); //выведется 1
  func(); //выведется 2!
  func(); //выведется 3






                                             //Рекурсия
                //В программировании есть такое понятие, как рекурсия - это когда функция вызывает сама себя


$arr = [1, 2, 3, 4, 5];

  last($arr);

  function last($arr)
  {
    echo array_pop($arr).'<br>'; //выводим последний элемент массива
    
    if(empty($arr)) {
      last($arr); //это рекурсия
    }
  }


                   // Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром - сколько первых символов оставить в этой строке. Второй параметр должен быть необязательным и по умолчанию принимать значение 10.

function cut($str,$num = 10)
{
  $result = substr($str, 0, $num);
  return $result;
}
echo cut("0123456789www" )

//Пример работы функции array_mup 

$array = [16,5,34,88,22,5];
 var_dump(array_map(function($elem){
  return $elem + 10;
 },$array));

                                       //Пример работы функции array_filter

 $array = [100,200,300,400,];
 $num = 300;                                                 // если не передать callback функцию выведет только те значения которие имеют тип true
 var_dump(array_filter($array, function($element) use ($num){                 // c помощью use передадим переменную в функцию
  return $element >= $num;
 }));

// Пример работы функции array_walk

$array = [100,200,300,400];
    var_dump(array_walk($array, function($element){
  echo $element;
}));


?>

  