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
    
    if (mysqli_num_rows($post) === 0) {
        http_response_code(404);
        
        $res = [
            "status" => false,
            "message" => "Пост не найден"
        ];
        echo json_encode($res);
    }else {
        $post = mysqli_fetch_assoc($post);
        echo json_encode($post);
    }
}

function addPost($connection, $data) {
    $title = $data['title'];
    $body = $data['body'];
    mysqli_query($connection, "INSERT INTO `posts`(`title`,`body`) VALUES ('$title','$body')");
    
    http_response_code(201);
    
    $res = [
        "status" => false,
        "post_id" => mysqli_insert_id($connection)
    ];

    echo json_encode($res);
}