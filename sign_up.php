<?php 
require_once "config.php";
require_once "session.php";

if($_SERVER['REQUEST_METHOD'] =='POST')
	{
		$name_user=$_POST['name_user'];
		$email=$_POST['email'];
		$country_user=$_POST['country_user'];
		$password=$_POST['password'];
        $conf_passw=$_POST['conf_passw'];
	}
if(mb_strlen($email) < 5 || mb_strlen($email) > 90){
	$_SESSION['message'] = "Недопустимая длина логина";
    header('Location: /auth.php');
	exit();
}
else if(mb_strlen($name_user) < 2){
	$_SESSION['message'] = "Недопустимая длина имени";
    header('Location: auth.php');
	exit();
} 

$sql="SELECT * FROM log_in WHERE email='$email'";
$result=mysqli_query($db,$sql);

if(mysqli_num_rows($result) > 0)
{
	$_SESSION['message'] = "Данный логин уже используется";
    header('Location: auth.php');
	exit();
}
else
{
	
	if($password == $conf_passw)
	{
		$password = md5($password."wwvfdfv");
		$db->query("INSERT into log_in (id_user, name_user, email, password, country_user) 
		values (NULL, '$name_user', '$email', '$password', '$country_user')");
		$user = mysqli_fetch_assoc($result);
    	$db->close();
		setcookie('name', $name_user, time() + 36000);
		setcookie('email', $email, time() + 36000);
		setcookie('country', $country_user, time() + 36000);
		$_SESSION['user'] = 
		[
			
			'id_user' => $id_user,
            'name_user' => $name_user,
            'email' => $email,
            'country_user' => $country_user
			
		];
		
		header("Location: index.php");
	}
	else
	{
		$_SESSION['message'] = "Пароли не совпадают";
    	header('Location: auth.php');
	}
    
}

?>
