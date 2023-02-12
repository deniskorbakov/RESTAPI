<?php 

header('Content-type: json/application');

require 'connect.php';
require 'function.php';

$q = $_GET['q'];

$params = explode('/', $q);

$type = $params[0];
$id = $params[1];

if ($type === 'posts') {

    if ($type === 'posts') {
        getPost($connection, $id);
    } else {
        getPosts($connection);
    }
}
