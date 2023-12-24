<?php
// print_r($_POST);

$name = $_POST['username'];
$em = $_POST['email'];
$pass = $_POST['password'];

if (trim($name) == "") {
    echo 'Вы не ввели имя пользователя';
} 
elseif(strlen(trim($name)) <= 1){
    echo 'Такого имени не существует';
}
elseif(trim($em)== "" || trim($pass) == "" || trim($_POST['message'])){
    echo 'Введите все данные';
}
else{
    $pass = md5($pass);
    echo "<h1>Данные:</h1><p>$name<p/><p>$em<p/><p>$pass<p/>";
}