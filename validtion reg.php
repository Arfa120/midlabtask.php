<?php
   $err_fullname="";
   $err_username = "";
   $err_pass = "";
   $err_cpass = "";
   $err_gender = "";
   $errMail = "";
   $err_phone = "";
   $r = "required*";
   $has_err = false;
   if (isset($_POST["ok"])) {	
   	 if(empty($_POST["fullname"])) {
   	   $err_name = $r;
   	   $has_err = true;
   	 }
   	 if (empty($_POST["username"])) {
   	   $err_uname = $r;
   	   $has_err = true;
   	 }
   	 if (empty($_POST["pass"])) {
   	   $err_pass = $r;
   	   $has_err = true;
   	 }
   	 else if (strlen($_POST["pass"]) < 8) {
        $err_pass = "Password must be 8 characters long";
   	 	$has_err = true;
   	 }
   	 else {
   	 	if (empty($_POST["cpass"])) {
   	 	  $err_cpass = $r;
   	 	  $has_err = true;
   	 	}
   	 	else if ($_POST["cpass"] != $_POST["pass"]) {
   	 	  $err_cpass = "[Password and confirm password must be same";
   	 	  $has_err = true;
   	 	}
   	 }
   	 if (empty($_POST["gender"])) {
   	 	 $err_gender = $r;
   	 	 $has_err = true;
   	 }
   	 if (empty($_POST["email"])) {
   	  	$errMail = "Mail address required*";
   	  }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $errMail = "Invalid mail format [wrong placcement]";
   	  	}
   	  	else $mail = htmlspecialchars($_POST["email"]);
   	  }
   	  else $errMail = "Invalid mail format [Missing characters]";
   	  if (empty($_POST["address"])) {
   	  	$address = "Address required*";
   	  }
   	  if (empty($_POST["phn"])) {
   	  	$has_err = true;
   	  	$err_contact = $r;
   	  }
   	  else if (!is_numeric($_POST["phn"])) {
   	  	$has_err = true;
   	  	$err_contact = "Contact number does not contain characters";
   	  }
   }
   if (!$has_err && isset($_POST["ok"])) {
   	 $newChild = simplexml_load_file("admins.xml");
   	 $child = $newChild->addChild("admin");
   	 $child->addChild("fullName", $_POST["fname"]);
   	 $child->addChild("userName", $_POST["uname"]);
   	 $child->addChild("password", $_POST["pass"]);
   	 $child->addChild("gender", $_POST["gender"]);
   	 $child->addChild("mail", $_POST["email"]);
   	 $child->addChild("contact", $_POST["phn"]);
   	 $child->addChild("city", $_POST["city"]);
   	 $file = fopen("admins.xml", "w");
   	 fwrite($file, $newChild->saveXML());
   	 header("Location: login.php");
   }
?>
