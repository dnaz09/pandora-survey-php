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
		
        public function does_survey_exist($cust_id, $facebook, $instagram, $twitter, $snapchat, $others,
        $bracelet, $charm, $necklace, $ring, $earrings, $gifts, $newspaper, $magazine, $social_media, $billboard,
        $friend_family, $store_visit, $timestamps)
		{
            $query = "INSERT INTO survey_socials (cust_id, facebook, instagram, twitter, snapchat, others, created_at, updated_at) 
            VALUES ('$cust_id', '$facebook', '$instagram','$twitter','$snapchat','$others', '$timestamps','$timestamps');";

            $query .= "INSERT INTO survey_products (cust_id, bracelet, charm, necklace, ring, earrings, created_at, updated_at) 
            VALUES ('$cust_id', '$bracelet', '$charm', '$necklace', '$ring', '$earrings', '$timestamps', '$timestamps');";

            $query .= "INSERT INTO survey_gifts (cust_id, gifts, created_at, updated_at)
            VALUES ('$cust_id', '$gifts', '$timestamps', '$timestamps');";
            
            $query .= "INSERT INTO survey_collections (cust_id, newspaper, magazine, social_media, billboard, friend_family, store_visit, created_at, updated_at)
            VALUES ('$cust_id', '$newspaper', '$magazine', '$social_media', '$billboard', '$friend_family', '$store_visit', '$timestamps', '$timestamps')";
            
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
    if (isset($_POST['cust_id'],$_POST['facebook'], $_POST['instagram'],$_POST['twitter'],$_POST['snapchat'],$_POST['others'],
    $_POST['bracelet'],$_POST['charm'],$_POST['necklace'],$_POST['ring'],$_POST['earrings'],$_POST['gifts']
    ,$_POST['newspaper'],$_POST['magazine'],$_POST['social_media'],$_POST['billboard'],$_POST['friend_family']
    ,$_POST['store_visit'])) {
        $cust_id = $_POST['cust_id'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $twitter = $_POST['twitter'];
        $snapchat = $_POST['snapchat'];
        $others = $_POST['others'];
        $bracelet = $_POST['bracelet'];
        $charm = $_POST['charm'];
        $necklace = $_POST['necklace'];
        $ring = $_POST['ring'];
        $earrings = $_POST['earrings'];
        $gifts = $_POST['gifts'];
        $newspaper = $_POST['newspaper'];
        $magazine = $_POST['magazine'];
        $social_media = $_POST['social_media'];
        $billboard = $_POST['billboard'];
        $friend_family = $_POST['friend_family'];
        $store_visit = $_POST['store_visit'];
        $currentTimeinSeconds = time();
        $timestamps = date('Y-m-d', $currentTimeinSeconds).' '.date("H:i:s", $currentTimeinSeconds); 

		
        if(!empty($cust_id) || !empty($facebook) || !empty($instagram) || !empty($twitter) 
        || !empty($snapchat) || !empty($others) || !empty($bracelet) || !empty($charm) 
        || !empty($necklace) || !empty($ring) || !empty($earrings) || !empty($gifts)
        || !empty($newspaper) || !empty($magazine) || !empty($social_media) || !empty($billboard)
        || !empty($friend_family) || !empty($store_visit) || !empty($timestamps)){
			
			$user->does_survey_exist($cust_id, $facebook, $instagram, $twitter, $snapchat, $others,
            $bracelet, $charm, $necklace, $ring, $earrings, $gifts, $newspaper, $magazine, $social_media, $billboard,
            $friend_family, $store_visit, $timestamps);
			
		} 
		
		else {
			echo json_encode("you must type both inputs");
		}
		
	}
?>

