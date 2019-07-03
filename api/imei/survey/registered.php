<?php
    require_once '../../database/config.php';
    header('Content-Type: application/json');

    $imei = $_POST['imei'];
    $data = array();

    $query = "SELECT * FROM company_branches WHERE imei = $imei";
    $stmt = $conn->query($query);

    if ($stmt->num_rows > 0) {
        while ($row = $stmt->fetch_assoc()) {
            array_push($data, array(
                "branch_code" => $row['branch_code'], 
                "branch" => $row['branch'], 
                "message"=> "success",
            ));
        }
    }

    else {
        array_push($data, array("message" => "not found"));
    }
    
    echo json_encode($data, JSON_PRETTY_PRINT);

?>