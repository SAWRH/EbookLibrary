<?php
require_once "session.php";

if($_SESSION['user'])
{
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap" rel="stylesheet">
    
    <title>Account</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="header_logo">Ebook Library</div>
                <nav class="nav">
                    <ul>
                        <li><a class="nav_link" href="#">Главная</a></li>
                        <li><a class="nav_link" href="#">Подборка книг</a></li>
                        <li><a class="nav_link" href="#">Работа</a></li>
                        <li><a class="nav_link" href="#">О нас</a></li>
                        <li><a class="nav_link list" id="menu" href="account.php" >
                            <?php
                                if($_SESSION['user'])
                                {
                                    echo $_SESSION['user']['name_user'];
                                }
                                else{
                                    echo "Войти";
                                }
                                
                            ?>&bigtriangledown;
                        </a>
                            <ul>
                                <li><a href="#">Личный кабинет</a></li>
                                <li><a href="exit.php">Выйти</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                    
                    
                </nav>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="container">
            <div class="main_inner">
                <p>Name: 
                    <?php
                        if($_SESSION['user'])
                        {
                            echo $_SESSION['user']['name_user'];
                        }
                        else
                        {
                            echo "Войти";
                        }                                    
                                
                    ?>
                </p>
                <p>Email:
                    <?php
                        if($_SESSION['user'])
                        {
                            echo $_SESSION['user']['email'];
                        }
                        else
                        {
                            echo "Войти";
                        }                                    
                                
                    ?>  
                </p>
                <p>County:
                    <?php
                        if($_SESSION['user'])
                        {
                            echo $_SESSION['user']['country_user'];
                        }
                        else
                        {
                            echo "Войти";
                        }                                    
                                
                    ?>  
                </p>
                <form action="upload_book.php" method="post">
                    <input type="text" name="name_book" placeholder="Name of the book" required/>
                    <input type="text" name="genre_book" placeholder="Genre" required/>
                    <input type="submit"  placeholder="Upload" required>
                </form>
                
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php
}
else{
    header('Location: auth.php');
}
?>
