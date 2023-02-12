<?php 

header('Content-type: json/application');

require 'connect.php';
require 'function.php';

$method = $_SERVER['REQUEST_METHOD'];

$q = $_GET['q'];

$params = explode('/', $q);

$type = $params[0];
$id = $params[1];

if ($method === 'GET') {
    if ($type === 'posts') {

        if ($type === 'posts') {
            getPost($connection, $id);
        } else {
            getPosts($connection);
        }
    }
} else if ($method == 'POST') {
    if ($type === 'posts') {
        addPost($connection, $_POST);
    }
}