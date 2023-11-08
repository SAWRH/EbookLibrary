<?php
// Подключение к БД
	require_once "config.php";
	require_once "session.php";
	
//Определяем переменные для внесения информации в БД

if($_SERVER['REQUEST_METHOD'] =='POST')
	{
		$name_user=$_POST['name_user'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$country_user=$_POST['country_user'];
	}
	
	
//Ввод инфы в БД
	$sql_add="INSERT into log_in (name_user, email, password, country_user) 
	values ('$name_user', '$email', '$password', '$country_user')";
	$result_add=mysqli_query($db,$sql_add);
?>
