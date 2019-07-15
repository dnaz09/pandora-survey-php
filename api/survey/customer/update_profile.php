<?php

    require_once '../../database/config.php';
    header('Content-Type: application/json');

    $data = array();

    $id = $_POST['id'];
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $birthdy = $_POST['birthday'];

    $query = "UPDATE customers SET 'mobile' = $mobile, 'title' = $title, 'firstname' = $firstname, 
    'lastname' = $lastname, 'email' = $email, 'birthday' = $birthday WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        array_push($data, array("message" => "success"));
    }

    else {
        array_push($data, array("message" => "error"));
    }
?>n