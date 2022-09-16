<meta charset="utf-8"/>


<?php


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



                                                    //Группировка массива


$array = [
[customer => one, itemno => yellow, price => 2],
[customer => one, itemno => blue, price => 5],
[customer => two, itemno => red, price => 4]
];

$new_array = [];
foreach ($array as $value) {
  $new_array[$value['customer']][] = array('itemno' => $value['itemno'], 'price' => $value['price']);
}









?>