<?php

function getPosts ($connection) {
    $posts = mysqli_query($connection,"SELECT * FROM `posts`");

    $postList = [];

    while($post = mysqli_fetch_assoc($posts)) {
        $postList[] = $post;
    }

    echo json_encode($postList);
}

function getPost($connection, $id) {
    $post = mysqli_query($connection,"SELECT * FROM `posts` WHERE `id` = '$id'");
    $post = mysqli_fetch_assoc($post);
    echo json_encode($post);
}