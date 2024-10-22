<?php
// src/controllers/post.php

require_once('src/lib/database.php');
require_once('src/model/comment.php');
require_once('src/model/post.php');

function post(string $identifier)
{
    $postRepository = new PostRepository();
    $commentRepository = new CommentRepository();
    $postRepository->connection = new DatabaseConnection();
    $commentRepository->connection = $postRepository->connection;
    $post = $postRepository->getPost($identifier);
    $comments = $commentRepository->getComments($identifier);

    require('templates/post.php');
}