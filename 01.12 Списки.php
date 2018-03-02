<?php
//Список - это ловкий способ сделать несколько присваиваний за один раз

// получение строки из БД в массив
$row = mysqli_fetch_row($link, $result);
list($id, $title) = $row; // $id = $row[0], $title = $row[1]
