<?php
require_once "config.php";
require_once "session.php";

if($_SERVER['REQUEST_METHOD'] =='POST')
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
	}
if(mb_strlen($email) < 5 || mb_strlen($email) > 90){
	$_SESSION['message_sign_in'] = "Недопустимая длина логина";
    header('Location: auth.php');
	exit();
}
$sql="SELECT * FROM log_in WHERE email='$email'";
$result=mysqli_query($db,$sql);

if(mysqli_num_rows($result) > 0)
{
	
	$user = mysqli_fetch_assoc($result);
    
    if (md5($password."wwvfdfv") == $user['password']) 
    {
        $_SESSION['user'] = 
        [
            'id_user' => $user['id_user'],
            'name_user' => $user['name_user'],
            'email' => $user['email'],
            'country_user' => $user['country_user']
        ];
        
        header("Location: index.php");
    } 
    else {
        $_SESSION['message_sign_in'] = "Неправильный пароль";
        header('Location: auth.php');
    }
}
else{
    $_SESSION['message_sign_in'] = "Пользователь не найден";
    header('Location: auth.php');
}

?>