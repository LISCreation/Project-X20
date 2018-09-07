<?php
define('DATABASE_USER', 'LIGHTIX');
define('DATABASE_PASS', 'hello.bear28');
$login = $_POST['login'];
$pass = $_POST['pass'];

if(isset($login) && isset($pass)) {
	if($login == DATABASE_USER && $pass == DATABASE_PASS) : echo "Доступ разрешён";
} else if(empty($pass)) {
	echo "Введите пароль";
} else if(empty($login)) {
	echo "Введите ник";
} else {
	echo "Недостаточно данных! Введите логин и пароль";
}