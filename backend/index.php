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
}  else if ($method == 'PATCH') {
    if ($type === 'posts') {
        if (isset($id)) {
            $data = file_get_contents('php://input');
            $data = json_decode($data);
            updatePost($connection, $id, $data);
        }
    }
}