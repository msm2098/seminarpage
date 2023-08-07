<?php
include 'dbinfo.php';
session_start();
$content = $_GET['content'];
$tname = $_SESSION['uid']."todo";
    /*$query = "INSERT INTO $tname (cotent,complete) VALUES ($content,0); ";*/
echo $content;


?>