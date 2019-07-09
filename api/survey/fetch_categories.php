<?php
    
    require_once '../database/config.php';
    header('Content-Type: application/json');

    $sql = "SELECT * FROM social_media;";
    $sql .= "SELECT * FROM products;";
    $sql .= "SELECT * FROM ads;";

    // Execute multi query
    if ($conn->multi_query($sql))
    {
        
        if ($result = $conn->store_result()) {
            // Fetch one and one row
            
            while ($row = $result->fetch_row()) {
                $social_media[] = array(
                    "id" => (int)$row[0],
                    "category" => $row[1],
                );
                
            }
            $result->free();
        }

        if ($conn->next_result()) {
            $result = $conn->store_result();
            while ($row = $result->fetch_row()) {
               $products[] = array(
                    "id" => (int)$row[0],
                    "category" => $row[1],
               );
            }
        }

        if ($conn->next_result()) {
            $result = $conn->store_result();
            while ($row = $result->fetch_row()) { 
                $ads[] = array(
                    "id" => (int)$row[0],
                    "category" => $row[1],
                );
            } 
            
        }
        $data = array("Social Media" => $social_media, "Products" => $products, "Ads" => $ads);

    }
    echo json_encode($data, JSON_PRETTY_PRINT);
?>