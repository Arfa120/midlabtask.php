<?php
    
    $bookname ="";
	$category="";
    $descrption="";
	
	$publisher="";
    $edition= "";
    $isbn = "";
	$pages="";
	$price="";
	
    
    $err_bookname = "";
	$err_category="";
    $err_descrpition="";
	$err_publisher="";
    $err_edition = "";
    $err_isbn = "";
	$err_price="";
	
	$has_error=false;
	if(isset($_POST["add book"]))
	{
		if(empty($_POST["bookname"]))
		{
			$err_name = "bookname Required <br>";
			$has_error=true;
		}else{
            $bookname=$_POST["bookname"];
            $arr = str_split($bookname);
            foreach($arr as $char){
                if($char >='0' and $char<='9'){
                    $has_error = true;
                    $err_bookname = "Bookname can not contain Numbers";
                    $bookname = "";
                    break;
                }
            }
        }

        if(empty($_POST["category"]))
		{
			$err_username = "Category Required <br>";
			$has_error=true;
		}else{
            $category=$_POST["category"];
            if(strlen($category)<6){
                $err_category = "User Name must be at least 6 character ";
                $has_error = true;
                $category= "";
            }
            $arr = str_split($category);
            foreach($arr as $char){
                if($char ==" "){
                    $has_error = true;
                    $err_username = "category cannot contain blank space";
                    $category= "";
                }
            }

            $sql = "SELECT * FROM category where  = '$_category'";
        }
        
		if(empty($_POST["description]))
		{
			$err_description= "Desription Required <br>";
			$has_error=true;
		}else{
            $description=$_POST["description"];
            if(strlen($descriptin)<100){
                $err_description= "description must be 100 characters long";
                $has_error = true;
            }
        }
		
		
		 if(empty($_POST["publisher"]))
		{
			$err_publisher = "publisher Required <br>";
			$has_error=true;
		}else{
            $publisher=$_POST["publisher"];
            if(strlen($publisher)<6){
                $err_publisher = "publisher must be at least 8 character ";
                $has_error = true;
                $publisher= "";
            }
            $arr = str_split($publisher);
            foreach($arr as $char){
                if($char ==" "){
                    $has_error = true;
                    $err_publisher = "publisher cannot contain blank space";
                    $publisher= "";
                }
            }

   	  	
		

        if(isset ($_POST ['edition'])== true && empty($_POST["edition"])==false)
		{
			$err_edition = $_POST['edition'];
			if(filter_var($err_edition,FILTER_VALIDATION_Edition)==true){
				echo 'This is valid';
			}
		}else{
            echo 'Not a valid edition';
		}
		
		if(empty($_POST["isbn"]))
		{
			$err_isbn= "isbn No is Required <br>";
			$has_error=true;
		}else{
            $isbn=$_POST["isbn"];
            if(strlen($isbn)!=10){
                $has_error = true;
                $err_isbn = "isbn Number Should be 11 in length.";
            }
		}
		if(!isset($_POST["pages"])){
			$err_pages="Gender Required";
			$has_error = true;
		}
		else{
			$pages = $_POST["pages"];
		}
		if(!isset($_POST["pages"])){
			$err_pages] = "Atleast select 1 page";
			$has_error = true;
		}
		else{
			$pages=$_POST["pages"];
		}
		}
		if(!isset($_POST["price"])){
			$err_price="price Required";
			$has_error = true;
		}
		else{
			$price = $_POST["price"];
		}
		if(!isset($_POST["pages"])){
			$err_pages] = "Atleast select 1 page";
			$has_error = true;
		}
		else{
			$price=$_POST["price"];
		}

		if(!$has_error){
            $sql = "INSERT INTO users(Bookname, Category, Description,Isbn, Edition, Publisher,Pages,Price) VALUES ('$bookname','$publisher','$edition','$pages', '$price','$isbn', '$description','$category')";
            echo "add book Successfull click here to <a href = 'login.php'>Login</a>";
		}
	}
?>
<html>
	<head>
		<title> add book</title>
	</head>
	<body>
		<h2>add book.php</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>bookname:</span></td>
					<td><input type="text" bookname="name"value="<?php echo $bookname; ?>"> <?php echo $err_bookname; ?> </td>
				</tr>
				<tr>
					<td><span>description:</span></td>
					<td><input type="text" name="description"value="<?php echo $edition; ?>"> <?php echo $err_description; ?> </td>
				</tr>
				
				
				<tr>
					<td><span> pages:</span></td>
					<td><input type="password" name="pages"value="<?php echo $pages; ?>"> <?php echo $err_pages; ?> </td>
				</tr>
				
				
				
               
				<tr>
					<td><span>price:</span></td>
					<td><input type="password" name="price"value="<?php echo $price; ?>"> <?php echo $err_price; ?> </td>
				</tr>
               
				<tr>
						<td>isbn: <?php echo $err_isbn;?></td>
						<td>
							<input type="password" name="isbn" 
							<input type="password" name="isbn"
						</td>
					</tr>
					<tr>
					<td><span>edition:</span></td>
					<td><input type="text" name="edition"value="<?php echo $edition; ?>"> <?php echo $err_edition; ?> </td>
				</tr>
				
					
				<tr>
					<td><span>publisher:</span></td>
					<td><input type="text" publisher="name"value="<?php echo $publisher; ?>"> <?php echo $err_publisher; ?> </td>
				</tr>
					
					
				<tr><tr>
					<td><span>category:</span></td>
					<td><input type="text" category="name"value="<?php echo $category; ?>"> <?php echo $err_category; ?> </td>
				</tr>
					<td><input type="submit"</td>
				</tr>
			</table>
		</form>
	</body>
</html>