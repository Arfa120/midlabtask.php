<?php
    session_start();
    require_once 'connection.php';
    if(!isset($_SESSION["loggedin"])){
        echo " You are not logged In";
    }
?>
<html>
    <head><title>Dashboard.php</title></head>

    <body>
        <h1 style ="display:inline">add new book </h1>
        <img src = "logo1.png" height = "80px" width = "80px"><br>
        <span>All User Data<Span>

        <table style ="float:center">
            <tr>
                <th>SL.NO</th>
				<tr>1</tr>
				<tr>2</tr>
				
				
				
                <th>NAME</th>
				<tr><h5>A dictonary of Architecture</h5></tr>
				<tr><h5>Elephant kingdom Sculptures fron indian Architecture</h5></tr>
				<tr><h5>Close to events -works of bikash Bhattacharjee </h5></tr>
				
				
				
                <th>PUBLISHER</th>
				<tr>The Book Shop</tr>
				<tr>Vikramjit Ram</tr>
				<tr>Manasji Majumder</tr>
				
                <th>ISBN</th>
				<tr>89564636</tr>
				<tr>81-88204-6</tr>
				<tr>978818973</tr>
				
				<th>PRICE</th>
				<tr>500</tr>
				<tr>1000</tr>
				<tr>2000</tr>
				
				
				<th>IMAGE</th>
				<tr><img src = "img07.png" height = "80px" width = "80px"></tr>
				<tr><img src = "img10.png" height = "80px" width = "80px"></tr>
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