<?php
session_start();
include "controllers.php";
/**
 * Created by PhpStorm.
 * User: zelourt
 * Date: 28.03.16
 * Time: 19:42
 */

if (isset($_GET['logIn'])){
    $_SESSION['login'] = $_GET['login'];
} elseif (isset($_POST['signIn'])){
    $_SESSION['login'] = $_GET['logIn'];
}

if ($_GET['add']){
    add_post($_GET['add_name'], $_GET['add_textarea']);
}



header('Location: index.php');