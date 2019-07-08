<?php
    
    require_once '../database/config.php';
    header('Content-Type: application/json');

    $data = array();
    $sql = "SELECT * FROM social_media;";
    $sql .= "SELECT * FROM products;";
    $sql .= "SELECT * FROM ads;";

    // Execute multi query
    if ($conn->multi_query($sql))
    {
        
        if ($result = $conn->store_result()) {
            // Fetch one and one row
            while ($row = $result->fetch_row()) {
                array_push($data, array(
                    "id" => $row[0],
                    "category" => $row[1],
                ));
            }
            $result->free();
        }

        if ($conn->next_result()) {
            $result = $conn->store_result();
            while ($row = $result->fetch_row()) {
                array_push($data, array(
                    "id" => $row[0],
                    "category" => $row[1],
                ));
            }
        }

        if ($conn->next_result()) {
            $result = $conn->store_result();
            while ($row = $result->fetch_row()) { 
                array_push($data, array(
                    "id" => $row[0],
                    "category" => $row[1],
                ));

            } 
        }
    }
    echo json_encode($data, JSON_PRETTY_PRINT);

?>