<?php
//Make connection to database
include 'connection.php';
//Gather id sent from ISDwk8.php page
$id=$_GET['id'];
//Produce query to select the product record for the id provided
$query="SELECT * FROM Products WHERE ProductID='$id'";
//run query and store result
$result=Mysqli_query($connection, $query);
//extract row from result using mysqli_fetch_assoc()and store $row
$row=mysqli_fetch_assoc($result);
?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<title>Result</title>
	</head>
	<body>
		<form method="post" action="UpdateProduct.php">

			<fieldset class="fieldset-width">
				<legend>
					Enter Product Details
				</legend>
				<input type="hidden" name="hideProductID" value="<?php echo $row['ProductID']; ?>" />
				<label for="txtProductName">Product Name: </label>
				<input type="text" name="txtProductName"  value="<?php echo $row['ProductName']; ?>"/>
				<br />
				<br />
				<label for="txtProductPrice">Price: </label>
				<input type="text" name="txtProductPrice" value="<?php echo $row['ProductPrice']; ?>" />
				<br />
				<br />
				<label for="txtProductImage">Image Filename: </label>
				<input type="text" name="txtProductImage"  value="<?php echo $row['ProductImageName']; ?>"/>

			</fieldset>

			<input type="submit" value="Submit" name='submit' />
			<input type="reset" value="Clear" />
		</form>
	</body>
</html>