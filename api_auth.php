<?php
session_abort();
/**
 * Created by PhpStorm.
 * User: zelourt
 * Date: 28.03.16
 * Time: 19:42
 */


if (isset($_POST['submit']) AND $_POST['submit'] == 'logIn'){
    $_SESSION['login'] = $_POST['login'];
} elseif (isset($_POST['submit']) AND $_POST['submit'] == "signIn"){
    $_SESSION['login'] = $_POST['login'];
}
