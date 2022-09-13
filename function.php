<?php

function getPosts($connect){
        $posts = mysqli_query($connect, "SELECT * FROM `posts`");

        $postlist = [];

        while($post = mysqli_fetch_assoc($posts)){
        $postlist[] = $post;
        }

        echo json_encode($postlist);
    }

function getPost($connect, $id){
    $post = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id` = '$id'");
    if(mysqli_num_rows($post) === 0){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "Post not found"
        ];
        echo json_encode($res);
    }
    else{
        $post = mysqli_fetch_assoc($post);
        echo json_encode($post);
    }
}