<?php 

require 'index.php';

$post = mysqli_query($connection,"SELECT * FROM `posts`");

print_r($post);