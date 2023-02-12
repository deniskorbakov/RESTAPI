<?php 

require 'connect.php';

$post = mysqli_query($connection,"SELECT * FROM `posts`");

print_r($post);