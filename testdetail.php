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
	 $contact = $_POST['contact'];
	 $address1 = $_POST['address1'];
     $car  = $_POST['car'];
     $model = $_POST['model'];
     $datee  = $_POST['datee'];

	 
	 $sql_query = "INSERT INTO testdetails (fullname,email,contact,address1,car,model,datee)
	               VALUES ('$fullname','$email','$contact','$address1','$car','$model','$datee')";

	 if (mysqli_query($conn, $sql_query)) 
	 header("location: index.php");
}
?>