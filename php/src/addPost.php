<?php

include './dbConnect.php';

function validateUserInput(&$inputString) {
    if(!isset($inputString)){
        throw new \http\Exception\BadMessageException("POST data doesn't have required data");
    }
    return $inputString;
}

if(isset($db)){
    CheckConnection($db);

    $postTitle = validateUserInput($_POST["title"]);
    $postContent = validateUserInput($_POST["content"]);
    $date = date('Y-m-d');

    $query = $db->prepare('INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES (NULL, ?, ?, ?);');
    $query->bind_param('sss', $postTitle, $postContent, $date);
    $query->execute();

    $res = $query->get_result();
    header("Location: http://localhost:8000");
}