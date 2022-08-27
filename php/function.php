<?php


// функция для красивой распечатки массива
function debug($data) {
	echo '<pre>' . print_r($data, 1) . '</pre>';
}

$users = range(-10, 10);

debug($users);


// Функция сортировки массива с помощью пользовательской функции и функции usort.

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

?>
