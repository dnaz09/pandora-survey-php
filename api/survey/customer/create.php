<?php
include_once '../../database/db_connect.php';
	
	class User {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this->db = new DB_Connection();
			$this->connection = $this->db->getConnection();
		}
		
		public function does_user_exist($branch, $branch_code, $title, $firstname, $lastname, $email, $mobile, $birthday, $buying_for_others, $timestamps)
		{
			$query = "SELECT *  FROM customers WHERE mobile='$mobile'";
			$result = mysqli_query($this->connection, $query);
			if (mysqli_num_rows($result)>0) {
				$json['message'] = 'Welcome';
				$json['id'] = mysqli_insert_id($this->connection);
				echo json_encode($json);
				mysqli_close($this->connection);
			}
			else {
				$query = "INSERT INTO customers (branch, branch_code, title, firstname, lastname, email, mobile, birthday, buying_for_others, created_at, updated_at) 
				VALUES ('$branch', '$branch_code', '$title', '$firstname','$lastname','$email','$mobile','$birthday', '$buying_for_others', '$timestamps','$timestamps')";
				$inserted = mysqli_query($this->connection, $query);
				if ($inserted == 1 ){
					$json['message'] = 'success';
					$json['id'] = mysqli_insert_id($this->connection);
				}
				else {
					$json['message'] = 'Wrong password';
				}
				echo json_encode($json, JSON_PRETTY_PRINT);
				mysqli_close($this->connection);
			}
		}	
	}
    
	$user = new User();
	if (isset(
		$_POST['branch'],
		$_POST['branch_code'],
		$_POST['title'],
		$_POST['firstname'],
		$_POST['lastname'],
		$_POST['email'],
		$_POST['mobile'],
		$_POST['birthday'],
		$_POST['buying_for_others']
	)) {
		$branch = $_POST['branch'];
		$branch_code = $_POST['branch_code'];
		$title = $_POST['title'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
		$birthday = $_POST['birthday'];
		$buying_for_others = $_POST['buying_for_others'];
        $currentTimeinSeconds = time();
        $timestamps = date('Y-m-d', $currentTimeinSeconds).' '.date("H:i:s", $currentTimeinSeconds); 

		
		if(!empty($branch) || !empty($branch_code) || !empty($title) || !empty($firstname) || !empty($lastname) || !empty($email) || !empty($mobile) || !empty($birthday || !empty($buying_for_others))){
			
			$user->does_user_exist($branch, $branch_code, $title, $firstname, $lastname, $email, $mobile, $birthday, $buying_for_others, $timestamps);
			
		} 
		
		else {
			echo json_encode("you must type both inputs");
		}
		
	}
?>