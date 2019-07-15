<?php
    require_once '../../database/config.php';
    header('Content-Type: application/json');
    
    $data = array();

    $mobile = $_POST['mobile'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $sql = "SELECT * FROM customers WHERE mobile = '$mobile' AND firstname = '$firstname' AND lastname = '$lastname'";
    $result = $conn->query($sql);

    if ($result->num_rows >= 1) {
        while($row = $result->fetch_assoc()) {
            array_push($data, array("message" => "success", "details" => array(
                "title" => $row['title'],
                "email" => $row['email'],
                "birthday" => $row['birthday'],
            )));
        }
    }

    else {
        // array_push($data, array("message" => "error"));
        array_push($data, array("message" => "error", "details" => array(
            "title" => "",
            "email" => "",
            "birthday" =>"",
        )));
    }
    echo json_encode($data, JSON_PRETTY_PRINT);
?>