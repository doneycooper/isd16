<?php
//Make connection to database
include 'connection.php';
//Gather from $_POST[]all the data submitted and store in variables
$firstName=$_POST['FirstName'];
$lastName=$_POST['LastName'];
$email=$_POST['Email'];
$password=$_POST['Password'];
$gender=$_POST['Gender'];
$age=$_POST['Age'];
$image=$_POST['Image'];
//Construct INSERT query using variables holding data gathered
$query="INSERT INTO `Customer` (`FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`) VALUES ('$firstName', '$lastName', '$email', '$password', '$gender', '$age')";
//Temporarily echo $query for debugging purposes	
//echo $query;
//exit();
//run $query
mysqli_query($connection, $query);		
?>
