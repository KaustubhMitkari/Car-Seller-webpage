<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="maxwheels";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $fullname = $_POST['fullname'];
	 $email = $_POST['email'];
	 $subj = $_POST['subj'];
	 $discription = $_POST['discription'];
	 

	 $sql_query = "INSERT INTO contact_us (fullname,email,subj,discription)
	               VALUES ('$fullname','$email','$subj','$discription')";

	 if (mysqli_query($conn, $sql_query)) 
	 header("location: index.php");
}
?>