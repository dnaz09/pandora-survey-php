<?php
    include '../database/config.php';

    $mobile = $_POST['mobile'];
    $query = "SELECT * FROM customers WHERE mobile = '$mobile'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $mobile = $row['mobile'];
            $birthday = $row['birthday'];
            
            echo "id: " . $row["id"]."
            <br> Name: " . $row["firstname"].' '.$row["lastname"]."
            <br> Mobile: " . $row["mobile"]."
            <br> Birthday: " . $row['birthday'];

        } 
    }

    else {
        echo 'Not Found!';
    }
?>