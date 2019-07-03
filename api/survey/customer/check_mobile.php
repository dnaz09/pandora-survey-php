<?php
    require_once '../../database/config.php';
    header('Content-Type: application/json');
    
    $data = array();

    $mobile = $_POST['mobile'];

    $sql = "SELECT * FROM customers WHERE mobile = '$mobile'";
    $result = $conn->query($sql);

    if ($result->num_rows >= 1) {
        while($row = $result->fetch_assoc()) {
            array_push($data, array("message" => "success", "details" => array(
                "title" => $row['title'],
                "firstname" => $row['firstname'], 
                "lastname" => $row['lastname'],
                "email" => $row['email'],
                "birthday" => $row['birthday'],
            )));
        }
    }

    else {
        // array_push($data, array("message" => "error"));
        array_push($data, array("message" => "error", "details" => array(
            "title" => "",
            "firstname" => "", 
            "lastname" => "",
            "email" => "",
            "birthday" =>"",
        )));
    }
    echo json_encode($data, JSON_PRETTY_PRINT);
?>