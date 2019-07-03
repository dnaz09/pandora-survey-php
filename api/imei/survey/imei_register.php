<?php
    require_once '../../database/config.php';

    $data = array();
    $imei = $_POST['imei'];
    $branch_code = $_POST['branch_code'];

    $qry = "UPDATE company_branches SET imei = $imei WHERE branch_code = $branch_code";
    $up = $conn->query($qry);

    if ($up === TRUE) {
        array_push($data,array("message" => "success"));
    }

    else {
        array_push($data,array("message" => "error"));
    }

    echo json_encode($data);

?>