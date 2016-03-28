<?php
session_start();

function open_database_connection(){
    $link = new PDO("mysql:host=eu-cdbr-azure-west-d.cloudapp.net;dbname=step-mysql-db", "bfa66b3b5d02fb", "a3bb67b4");
    return $link;
}

function close_database_connection($link){
    $link = null;
}

function get_all_posts(){
    $link = open_database_connection();
    $result = $link->query('SELECT id, title FROM post');
    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_database_connection($link);
    return $posts;
}

function get_post_by_id($id){
    $link = open_database_connection();
    $result = $link->query('SELECT title, text FROM post WHERE id = '.$id);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    close_database_connection($link);
    return $row;
}