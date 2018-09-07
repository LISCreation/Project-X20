<?php
define('DATABASE_USER', 'LIGHTIX');
define('DATABASE_PASS', 'hello.bear28');
$login = $_POST['login'];
$pass = $_POST['pass'];
if(isset($login) && isset($login)) :
	if(empty($login) && empty($pass)) {
		echo "Пусто";
	}
	else if(empty($login)) {
		echo "Не введён ник";
	} else if(empty($pass)) {
		echo "Не введён пароль";
	} else {
		if($login == DATABASE_USER && $pass == DATABASE_PASS) echo "Доступ разрешён";
		else echo "Доступ запрещён";
	}
else :
	header("Location: index.html");
endif;
?>
<pre>
	<?php print_r($GLOBALS);?>
</pre>