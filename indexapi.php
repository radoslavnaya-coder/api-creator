<?php 
    header('Content-type: json/application');
    require 'connect.php';

    $posts = mysqli_query($connect, "SELECT * FROM `posts`");

    $postlist = [];

    while($post = mysqli_fetch_assoc($posts)){
        $postlist[] = $post;
    }

    echo json_encode($postlist);
?>