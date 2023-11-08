<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap" rel="stylesheet">
    <title>Ebook</title>
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
                        <li><a class="nav_link list" id="menu" href="auth.php" >
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
                                <li><a href="account.php">Личный кабинет</a></li>
                                <li><a href="exit.php">Выйти</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="intro">
        <div class="container">
            <div class="intro_inner">
                <h1 class="intro_title">Welcome</h1>
                <a class="btn" href="auth.php">Create an accaunt</a>
            </div>
            
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="section_header">
                <h3 class="section_subtitle">What we do</h3>
                <h2 class="section_title">Story about us</h2>
                <div class="section_text">
                    <p>Lorem ipsum dolor sit, amet consectetur 
                        adipisicing elit. Ut culpa omnis exercitationem 
                        sit quisquam atque voluptates, pariatur libero molestiae,
                        alias possimus facere iure quae dolore perspiciatis nemo. 
                        Ratione, eveniet nam!</p>
                </div>
            </div>
            <div class="about">
                <div class="about_item">
                    <div class="about_img">
                        <img src="img/book_background.jpg">
                    </div>
                    <div class="about_text">Text</div>
                </div>
                <div class="about_item">
                    <div class="about_img">
                        <img src="img/book_background.jpg">
                    </div>
                    <div class="about_text">Text</div>
                </div>
                <div class="about_item">
                    <div class="about_img">
                        <img src="img/book_background.jpg">
                    </div>
                    <div class="about_text">Text</div>
                </div>
            </div>
        </div>
    </section>
    <div class="statistic">
        <div class="container">
            <div class="stat">
                <div class="stat_item">
                    <div class="stat_content">Text</div>
                </div>
                <div class="stat_item">
                    <div class="stat_content">Text</div>
                </div>
                <div class="stat_item">
                    <div class="stat_content">Text</div>
                </div>
                <div class="stat_item">
                    <div class="stat_content">Text</div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>