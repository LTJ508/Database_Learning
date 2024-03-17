<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $semester = $_POST['semester'];
	 $cgpa= $_POST['cgpa'];
	 

 $sql_query = "INSERT INTO student_details(first_name,last_name,semester,cgpa)
	 VALUES ('$first_name','$last_name','$semester','$cgpa')";

	 
if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

