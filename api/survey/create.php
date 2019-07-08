<?php
    header('Content-Type: application/json');
    include_once '../database/db_connect.php';

	class User {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this->db = new DB_Connection();
			$this->connection = $this->db->getConnection();
        }
		
        public function does_survey_exist($cust_id, $social_media_id, $others, $product_id, $buying_for_others, $ads_id)
		{
            $query = "INSERT INTO customer_social_media (cust_id, social_media_id, others) 
            VALUES ('$cust_id', '$social_media_id', '$others');";

            $query .= "INSERT INTO customer_products (cust_id, product_id) 
            VALUES ('$cust_id', '$product_id');";

            $query .= "UPDATE customers SET buying_for_others = '$buying_for_others' WHERE id = '$cust_id'";
            
            $query .= "INSERT INTO ads (cust_id, ads_id)
            VALUES ('$cust_id', '$ads_id');";
            
            $inserted = mysqli_multi_query($this->connection, $query);
            $json = array();
            if ($inserted == 1) {
                $json['message'] = 'success';
                
            }
            else {
                $json['message'] = 'error';
            }
            echo json_encode($json);
            mysqli_close($this->connection);
        }	
	}
    
	$user = new User();
    if (isset($_POST['cust_id'], $_POST['social_media_id'], $_POST['others'], $_POST['product_id'], $_POST['buying_for_others'], $_POST['ads_id'])) {
        $cust_id = $_POST['cust_id'];
        $social_media_id = $_POST['social_media_id'];
        $others = $_POST['others'];
        $product_id = $_POST['product_id'];
        $buying_for_others = $_POST['buying_for_others'];
        $ads_id = $_POST['ads_id'];

		
        if(!empty($cust_id) || !empty($social_media_id) || !empty($others) || !empty($product_id) || !empty($buying_for_others) || !empty($ads_id)){
			
			$user->does_survey_exist($cust_id, $social_media_id, $others, $product_id, $buying_for_others, $ads_id);
		} 
		
		else {
			echo json_encode("you must type both inputs");
		}
		
	}
?>

