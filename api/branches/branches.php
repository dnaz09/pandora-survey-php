<?php 
    require_once "../database/config.php";
    header('Content-Type: application/json');
    
    $data = array();
    $query = "SELECT * FROM company_branches WHERE imei is null";
        $query = $conn->query($query);
        while($row = $query->fetch_assoc()) {
            array_push($data, array(
                "branch" => $row['branch'], "details" => array(
                    "branch_code" => $row['branch_code'], 
                    "message" => "error"
                )));
     }
     echo json_encode($data, JSON_PRETTY_PRINT);
?>