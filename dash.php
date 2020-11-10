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
				
                <th>NAME</th>
                <th>PUBLISHER</th>
                <th>ISBN</th>
				<th>PRICE</th>
				<th>IMAGE</th>
				<th>DELETE</th>
            </tr>
            <?php

                $sql = "SELECT * FROM users";

                $verify = getArray($sql);
                
                foreach($verify as $var){
                    echo "<tr>";
                    echo "<td>".$var['Name']."</td>";
                    
                    echo "<td>".$var['UserName']."</td>";
                    
                    echo "<td>".$var['Email']."</td>";
                    echo "<td>".$var['Phone']."</td>";
                    echo "</tr>";
                }
                
            ?>
    </body>
</html>