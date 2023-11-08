<?php
require_once "config.php";
require_once "session.php";

if($_SERVER['REQUEST_METHOD'] =='POST')
	{
		$name_book=$_POST['name_book'];
		$genre_book=$_POST['genre_book'];
        $db->query("INSERT into books (id_book, name_book, genre_book) 
        values (NULL, '$name_book', '$genre_book')");
        $db->close();
	}
?>