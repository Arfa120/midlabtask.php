<?php
  if (!isset($_COOKIE["username"])) {
    header("Location: login.php");
  }
?>

<style>
	table, tr, td {
		border: 1px solid black;
		padding: 5px;
	}
</style>
<html>
    <head><title>Dashboard.php</title></head>

    <body>
        <h1 style ="display:inline">add new book </h1>
        <img src = "logo1.png" height = "80px" width = "80px"><br>
		 $books = simplexml_load_file("books.xml");
        <span>All User Data<Span>

        <table style ="float:center">
		
            <tr>
                <th>SL.NO</th>
				<tr>1</tr><br>
				<tr>2</tr><br>
				<tr>3</tr>
				
				
				
                <th>NAME</th>
				<tr><h5>A dictonary of Architecture</h5></tr><br>
				<tr><h5>Elephant kingdom Sculptures fron indian Architecture</h5></tr><br>
				<tr><h5>Close to events -works of bikash Bhattacharjee </h5></tr>
				
				
				
                <th>PUBLISHER</th>
				<tr>The Book Shop</tr><br>
				<tr>Vikramjit Ram</tr><br>
				<tr>Manasji Majumder</tr>
				
                <th>ISBN</th>
				<tr>89564636</tr><br>
				<tr>81-88204-6</tr><br>
				<tr>978818973</tr>
				
				<th>PRICE</th>
				<tr>500</tr><br>
				<tr>1000</tr><br>
				<tr>2000</tr>
				
				
				<th>IMAGE</th>
				<tr><img src = "img07.png" height = "80px" width = "80px"></tr><br>
				<tr><img src = "img10.png" height = "80px" width = "80px"></tr><br>
				<tr><img src = "img03.png" height = "80px" width = "80px"></tr>
				
				<th>DELETE</th>
				<tr>
				<tr><img src = "drop.png" height = "80px" width = "80px"></tr><br>
				<tr><img src = "drop.png" height = "80px" width = "80px"></tr><br> 
				<tr><img src = "drop.png" height = "80px" width = "80px"></tr>
				
				
            </tr>
			
            <?php

                $sql = "SELECT * FROM users";

                $verify = getArray($sql);
                
                foreach($verify as $var){
                    echo "<tr>";
                    echo "<td>".$var['NAME']."</td>";
                    
                    echo "<td>".$var['PUBLISHER']."</td>";
                    
                    echo "<td>".$var['ISBN']."</td>";
                    echo "<td>".$var['PRICE']."</td>";
					 echo "<td>".$var['IMAGE']."</td>";
					  echo "<td>".$var['DELETE']."</td>";
                    echo "</tr>";
                }
                
            ?>
    </body>
</html>