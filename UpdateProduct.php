<?php
//Make connection to database
include 'connection.php';
//Gather data sent from AmendProducts.php page
$id=$_POST['hideProductID'];
$name=$_POST['txtProductName'];
$price=$_POST['txtProductPrice'];
$image=$_POST['txtProductImage'];
//Produce an update query to update product record for the id provided
$query="UPDATE Products
SET ProductName='$name',ProductPrice='$price',ProductImageName='$image'
WHERE ProductID='$id'";
//run query 
mysqli_query($connection, $query);
//Redirect to ManageProducts.php page
header( 'Location: ISDwk8.php' ) ;
?>
