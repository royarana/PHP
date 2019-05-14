<?php
include 'db.php';

function showData() {
	global $connection;

	$query = "SELECT * FROM users";
	$result = mysqli_query($connection,$query);
	if($result){
		while($row = mysqli_fetch_assoc($result)){
				$id = $row['id'];
				$username = $row['username'];
					echo "<option value='$id'>$id . $username</option>";
		}
	} else {
		die('Query failed' . mysqli_error());
	}
}

?>