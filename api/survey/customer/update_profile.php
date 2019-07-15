<?php

    require_once '../../database/config.php';
    header('Content-Type: application/json');

    $data = array();

    $id = $_POST['id'];
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $birthday = $_POST['birthday'];

    $query = "UPDATE customers SET title = '$title', firstname = '$firstname', 
    lastname = '$lastname', email = '$email', mobile = '$mobile', birthday = '$birthday' WHERE id = '$id'";

    if ($conn->query($query) === TRUE) {
        $data = array("message" => "success");
    }

    else {
        $data = array("message" => "error");
    }
    echo json_encode($data, JSON_PRETTY_PRINT)
?>