<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Internet Systems Development</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Paul Doney C123457</h1> 
      </header>
      <section>
        <?php
        //Make connection to database
        include 'connection.php';
        //Display heading
        echo '<h2>Manage products</h2>';
        //construct and run query to select all records from customer table
        //store the result of the query in a variable called $result
        $query="SELECT * FROM Products";
        $result=mysqli_query($connection, $query);
        //Use a while loop to iterate through your $result array and display
        //each field wrapped in appropriate HTML table tags.
        echo '<table border=1>';
        while ($row=mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'.$row['ProductName'].'</td>';
            echo '<td>'.$row['ProductPrice'].'</td>';
            echo '<td><img src="images/'.$row['ProductImageName'].'" /></td>';
            echo '<td><a href="AmendProduct.php?id='. $row['ProductID'].'">Amend</a></td>';
            echo '<td><a href="DeleteProduct.php?id='. $row['ProductID'].'">Delete</a></td>';

            echo '</tr>';
        }
        echo '</table>';
        ?>
        </section>
        <section>
        <br />
        <form method="post" action="InsertProduct.php">

				<fieldset class="fieldset-width1">
					<legend>
						Enter New Product Details
					</legend>
					<label class="align" for="txtProductName">Product Name: </label>
					<input type="text" name="txtProductName"  />
					<br />
					<br />
					<label class="align"for="txtProductPrice">Price: </label>
					<input type="text" name="txtProductPrice"  />
					<br />
					<br />
					<label class="align" for="txtProductImage">Image Filename: </label>
					<input type="text" name="txtProductImage"  />
					<br />
					<br />

					<input type="submit" value="Submit" name='submit' />
					<input type="reset" value="Clear" />
			</form>
            
        </section>
        <footer>   
         <small><a href="ISDwk1.html">Home</a></small>
        </footer>
   </body>
</html>