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

    $postId = validateUserInput($_POST["postId"]);

    $query = $db->prepare('DELETE FROM `posts` WHERE id = ?;');
    $query->bind_param('i', $postId);
    $query->execute();

    $res = $query->get_result();
    header("Location: http://localhost:8000");
}