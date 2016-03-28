<?php
session_start();
require_once 'model.php';
require_once 'controllers.php';



if (isset($_SESSION['login'])){
    require 'templates/auth.php';
} else {
    echo "<h1> Hello " . $_SESSION["user"]. "</h1>";

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if ("/index.php" === $uri || "/" === $uri) {
        list_action();
    } else if ("/index.php/show/" === $uri && isset($_GET['id'])) {
        show_action($_GET['id']);
    } else {
        header('Status: 404 Not Found');
        echo "<html><body><h1>Page Not Found $uri</h1></body></html>";
    }
}




