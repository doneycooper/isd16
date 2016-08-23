<?php
//Make connection to database
include 'connection.php';
//Gather from $_POST[]all the data submitted and store in variables
$name=$_POST['txtProductName'];
$price=$_POST['txtProductPrice'];
$image=$_POST['txtProductImage'];
//Construct INSERT query using variables holding data gathered
$query="INSERT INTO Products 
        (ProductName, ProductPrice, ProductImageName)
        VALUES
        ('$name','$price','$image')";
//run $query
mysqli_query($connection, $query);
//return to calling page(stored in the server variables)
header("Location: {$_SERVER['HTTP_REFERER']}");

?>
