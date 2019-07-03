<?php

    require_once 'api/database/config.php';

    $q = $_GET['q'];

    $sql = $conn->query("SELECT * FROM customers WHERE branch = '$q'");

    if ($sql->num_rows > 0) {
        while ($row = $sql->fetch_assoc()) { 
            echo "
                <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['title'].' '.$row['firstname'].' '. $row['lastname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['mobile']."</td>
                    <td>".$row['birthday']."</td>
                    <td>".$row['created_at']."</td>
                    <td>".$row['updated_at']."</td>
                </tr>  
                ";
        }
    }
    else {
        echo "<td class='text-center' colspan='7'>No data available in table</td>";
    }

?>