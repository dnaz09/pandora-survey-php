<?php

    //fetch.php

    $connect = new PDO("mysql:host=localhost;dbname=db_pandora", "root", "");

    if($_POST["query"] != '') {
        $search_array = explode(",", $_POST["query"]);
        $search_text = "'" . implode("', '", $search_array) . "'";
        $query = "
        SELECT * FROM customers 
        WHERE branch IN (".$search_text.") 
        ORDER BY id DESC
        ";
    }

    else {
        $query = "SELECT * FROM customers ORDER BY id DESC";
    }

    $statement = $connect->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();

    $total_row = $statement->rowCount();

    $output = '';

    if($total_row > 0) {
        foreach($result as $row)
    {
    
            $output .= '
            <tr>
                <td>'.$row["branch"].' - '.$row["branch_code"].'</td>
                <td>'.$row["title"].' '.$row['firstname'].' '.$row["lastname"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["mobile"].'</td>
                <td>'.$row["birthday"].'</td>
                <td class="text-center">
                    <form method="POST">
                        <a href="fetch_survey.php?id='.$row['id'].'" class="btn btn-dark btn-sm">
                            View Details
                        </a>
                    </form>
                </td>
            </tr>
            ';
        }
    }
    else
    {
    $output .= '
    <tr>
        <td colspan="6" align="center">No Data Found</td>
    </tr>
    ';
    }

    echo $output;

?>