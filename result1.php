<?php include 'database.php';

$id=$_POST['id'];
$pwd=$_POST['pwd'];


//Execute the query
$result = mysqli_query($connect, "select * from login_creds where EMAIL = '$id';");
 if (mysqli_num_rows($result) > 0) {
 	echo "User already registered. Please Login to continue.";
 }
 else
 {
 	mysqli_query($connect, "INSERT INTO login_creds (ID, EMAIL, PASSWORD) VALUES (NULL, '$id', '$pwd');");
 	if(mysqli_affected_rows($connect) > 0) {
 		echo "User added succesfully. Kindly Login to continue.";
 	}
 }

 ?>