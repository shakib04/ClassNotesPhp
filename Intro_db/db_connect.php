<?php
	$username="root";
	$servername="localhost";
	$password="";
	$db_name="fall_20-21";
	
	function execute($query){
		global $username,$servername,$password,$db_name;
		$conn = mysqli_connect($servername,$username,$password,$db_name);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		mysqli_query($conn,$query);
	}
	function get($query){
		global $username,$servername,$password,$db_name;
		$conn = mysqli_connect($servername,$username,$password,$db_name);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn,$query);
		$data=array();
		if( $result && mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;
		
	}
	
	
	
?>