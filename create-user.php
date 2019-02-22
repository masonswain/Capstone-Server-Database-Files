<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>South St. Paul Technology - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

	<h2>South St Paul Technology</h2>
	<div id="login">
		
		<?php
			
			//POST Data assignment
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$uname=$_POST['uname'];
			$authpw=$_POST['authpw'];
			$isadmin=$_POST['isadmin'];
						
			//USED FOR TESTING
			/*
			$fname="John";
			$lname="Deere";
			$uname="jdeere";
			$authpw="12345";
			$isadmin="Y";
			*/

			//DB CONNECTION CREDENTIALS
			$servername = "joelknutson.net";
			$username = "joelknut_csc450";
			$pw = "CSP@2019";
			$dbName = "joelknut_csc450";

			//BUILD CONNECTION STRING
			$conn = new mysqli($servername, $username, $pw, $dbName);

			//TRY CONNECTION
			if($conn->connect_error){

				die("Connection failed: ".$dbConn->connect_error);
			}
			
			//BUILD QUERY STRING
			$sql = "INSERT INTO USER (FNAME, LNAME, USERNAME, PASSWORD, ADMIN) VALUES ('".$fname."', '".$lname."', '".$uname."', '".$authpw."', '".$isadmin."')";
				
			//TRY CONNECTION
			if ($conn->query($sql) === TRUE) {
			echo "New user: ".$fname." ".$lname." created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

	?>
		
	</div>
	
	
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>