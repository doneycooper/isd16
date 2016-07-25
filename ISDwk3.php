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
         <h1>Further Fundanentals of PHP</h1>
         <?php
            echo '<h2>Arrays</h2>';
            echo '<h3>Simple Arrays</h3>';
            $products=array('t-shirt','cap','mug');
            print_r($products);
            echo '<br />';
            $products[1]='shirt';
            print_r($products);
            echo '<br />';
            $products[]='skirt';
            print_r($products);
            echo '<br />';
            echo '<strong>Items in my <em>products</em> array</strong><br />';
            echo 'The item at index [2] is: '.$products[2].'<br />';
            echo 'The item at index [3] is: '.$products[3].'<br />';
            echo '<h3>Associative Arrays</h3>';
            $customer=array('CustID'=>12,'CustName'=>'Sarah','CustAge'=>'23','CustGender'=>'F');
            print_r($customer);
            echo '<br />';
            $customer['CustAge']=24;
            $customer['CustEmail']='sarah@gmail.com';
            print_r($customer);
            echo '<br />';
            echo '<h2>Loops</h2>';
            echo '<h3>While Loops</h3>';
            $counter=1;
            while($counter<6){
               echo 'count = '.$counter.'<br />';
               $counter++;
            }
            $shirt_price=9.99;
            $counter=1;
            echo '<table border=1><tr><th>Quantity</th><th>Price</th></tr>';
            while($counter<=10){
               echo '<tr><td>'.$counter.'</td><td>&pound;'.number_format($shirt_price*$counter,2).'</td></tr>';
               $counter++;
            }
            echo '</table>';
            echo '<h3>For Loops</h3>';
            $names=array('Peter', 'KAT', 'LAura');
            print_r($names);
            echo '<br />';
            for ($i=0; $i<count($names); $i++){
               $names[$i]=strtolower($names[$i]);
            }
            print_r($names);
            echo '<br />';
            echo '<h3>Foreach Loops</h3>';
            $names=array('Peter'=>'c123456','Kat'=>'c654321','Laura'=>'c987654');
            print_r($names);
            echo '<br />';
            foreach($names as $key=>$value){
               echo 'Name: '.$key.' ID: '.$value.'<br />';
            }
		   ?>
      </section>
      <footer>   
         <small><a href="ISDwk1.html">Home</a></small>
      </footer>
   </body>
</html>
