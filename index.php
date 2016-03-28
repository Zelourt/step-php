<?php
session_start();


if (!isset($_SESSION["user"])){
    require 'templates/auth.php';
}


if (isset($_POST['submit']) AND $_POST['submit'] == "logIn"){
    echo $_POST['login'];
}

require_once 'model.php';
require_once 'controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ("/index.php" === $uri || "/" === $uri) {
    list_action();
} else if ("/index.php/show/" === $uri && isset($_GET['id'])) {
    show_action($_GET['id']);
} else {
    header('Status: 404 Not Found');
    echo "<html><body><h1>Page Not Found $uri</h1></body></html>";
}