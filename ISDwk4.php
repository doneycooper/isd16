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
         <h1>Processing Input from HTML Forms</h1>
         <h2>Login Form using GET</h2>
         <form method="post" action="ISDwk4.php">
            <fieldset>
   		      <legend>Login</legend>
   		      <label for="email">Email: </label>
   		      <input type="text" name="txtEmail"/><br />
   		      <label for="passwd">Password: </label>
   		      <input type="password" name="txtPass" /><br />
   		      <input type="submit" value="Submit" name="loginSubmit"/>
   		      <input type="reset" value="Clear" />
	         </fieldset>
         </form>
         <?php
         if(isset($_POST['loginSubmit'])){
            //gather data from form
            $email=$_POST['txtEmail'];
            $password=$_POST['txtPass'];
            //echo data collected back to screen
            echo 'email: '.$email.' password: '.$password;
         }
         ?>
         <h2>Login Form with some basic validation</h2>
         <form method="post" action="ISDwk4.php">
            <fieldset>
   		      <legend>Comments</legend>
   		      <label for="name">Email: </label>
   		      <input type="text" name="txtEmail" value="<?php
   		      //if(isset($_POST['txtEmail'])){
   		         echo $_POST['txtEmail'];
   		      //}
   		      ?>" /><br />
   		      <textarea rows="4" cols="50" name="commentArea">What have you got to say. </textarea><br />
   		      <label for="confirm">Click to Confirm: </label>
   		      <input type="checkbox" name="chkConfirm" value="agree"><br />
   		      <input type="submit" value="Submit" name="commentSubmit"/>
   		      <input type="reset" value="Clear" />
	         </fieldset>
         </form>
         <?php
            if(isset($_POST['commentSubmit'])){
               //gather data from form
               if(!empty($_POST['txtEmail'])){
                  if(filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL)){
                     $email=$_POST['txtEmail'];
                     $comment=$_POST['commentArea'];
                     $agree=$_POST['chkConfirm'];
                     //echo data collected back to screen
                     echo 'name: '.$email.'<br />';
                     echo 'comment: '.$comment.'<br />';
                     if ($agree=='Agree'){
                        echo 'Agree: '.$agree.'<br />';
                     }else{
                        echo 'Agree: Not Agreed<br />';
                     }
                  }else{
                     echo 'email is not valid';
                  }
                  
               }else{
                  echo 'email cannot be empty';
               }
            }
         ?>
         <h2>Tax Calculator</h2>
   		<form method="post" action="ISDwk4.php">
   			<fieldset class="fieldset-width1">
   				<legend>
   					Without TAX calculator
   				</legend>
   				<label class="align" for="price">After Tax Price: </label>
   				<input type="text" name="price" value="<?php echo $_POST['price']; ?> "/>
   				<label class="align" for="rate">Tax Rate: </label>
   				<input type="text" name="rate" value="<?php echo $_POST['rate']; ?> "/>
   				<p>
   				<input type="submit" value="Submit" />
   				<input type="reset" value="Clear" />
   				</p>
   			</fieldset>
   		</form>
   		<?php
   		if (isset($_POST['price']) && isset($_POST['rate'])) {
   			$price = $_POST['price'];
   			$rate = $_POST['rate'];
   			if (empty($price) OR empty($rate)) {
   				echo '<h3>All field are required</h3>';
   			} else {
   				if (!filter_var($price, FILTER_VALIDATE_FLOAT)) {
   					echo '<h3>Please enter the price in the format 9.99</h3>';
   				} else {
   					if (!filter_var($rate, FILTER_VALIDATE_INT)) {
   						echo '<h3>Please enter a whole number for tax rate</h3>';
   					} else {
   						$before_tax = 100 * $price / (100 + $rate);
   						echo '<h3>Price before tax = &pound;' . number_format($before_tax, 2);
   
   					}
   				}
   			}
   		}
   		?>
         <h1>Passing Data Appended to an URL</h1>
            <h2>Pick a category</h2>
            <a href="ISDwk4.php?cat=Films">Films</a>
            <a href="ISDwk4.php?cat=Books">Books</a>
            <a href="ISDwk4.php?cat=Music">Music</a>
            <?php
            echo '<br /><b>You picked ' .$_GET['cat'].'</b>';
            ?>
      </section>
      <footer>   
         <small><a href="ISDwk1.html">Home</a></small>
      </footer>
   </body>
</html>
