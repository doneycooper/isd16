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
      <section id="container">
         <form method="post" action="InsertRecord.php">
            <fieldset class="fieldset-width1">
				   <legend>
					   Enter Customer Details
				   </legend>
   				<label class="align" for="FirstName">First Name: </label>
   				<input type="text" name="FirstName" />
   				<br />
   				<br />
   				<label class="align" for="LastName">Surname: </label>
   				<input type="text" name="LastName"  />
   				<br />
   				<br />
   				<label class="align" for="Email">Email: </label>
   				<input type="text" name="Email"  />
   				<br />
   				<br />
   				<label class="align" for="Password">Password: </label>
   				<input type="password" name="Password"  />
   				<p>
   					<label class="align">Gender:</label>
   					<select name = "Gender">
   						<option value="M" >Male</option>
   						<option value="F">Female</option>
   					</select>
   				</p>
   				<label class="align" for="Age">Age: </label>
   				<input type="text" name="Age"  />
   				<br />
   				<br />
   				<label class="align" for="Image">Image: </label>
   				<input type="text" name="Image"  />
   			</fieldset>
			   <input type="submit" value="Submit" name='submit' />
			   <input type="reset" value="Clear" />
		   </form>
		   <?php
         //Make connection to database
         include 'connection.php';
         //Display heading
         echo '<h2>Select ALL from the Customer Table</h2>';
         //run query to select all records from customer table
         $query="SELECT * FROM Customer";
         $result=mysqli_query($connection, $query);
         //store the result of the query in a variable called $result
         
         //Use a while loop to iterate through your $result array and display
         //the first name, last name and email for each record
         while ($row=mysqli_fetch_assoc($result)){
            echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
         }
         ?>

      </section>
      <footer>   
         <small><a href="ISDwk1.html">Home</a></small>
      </footer>
   </body>
</html>
