<!DOCTYPE html>
<?php
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$db = 'users';
		//creating the connetion
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
		//checking the connection
		if($conn->connect_error){
			die('connection failed: ' . $conn->connect_error);
		}
		if(isset($_POST['comment'])){
		$name = $_POST['name'];
		$comment = $_POST['textform'];
		
		
		$sql = "INSERT INTO usertable (Name, comment)
		VALUES ('$name', '$comment')";
		if($conn->query($sql) === true){
			echo "<script> alert('Comment has been queried thank you for your support!')</script>";
			
		}
		else{
			echo "<script>alert('the connection could not been established please reload the page and try again!')</script>";
		}
		}
	$conn->close();
	
	?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Start Wars Fansite</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link href = "StarWarsStyles.css" rel = "stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
	<script>
		function searchFunction(obj)
		{
			obj.q.value = obj.qfront.value;

		}
		
	</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

      <?php
	include"header.php";
   ?>
	
    <!-- Page Content -->
	<div class = "center">
	<h1>About Us</h1>
	<h4> we are a non-profit orgnization. Our mission is to bring the most information about start wars universe and the universes multiple legends. </h4>
	<br>
	<br>
	<br>
	<p>search the web for related content</p>
	<form action = "http://www.google.com/search" method= "get" onSubmit = "searchFunction(this)">
	<input name="q" type="hidden" />
	<input name="qfront" type="text" style="width: 180px" /> <input type="submit" value="Search" />
	</form>
	<br>
	<br>
	<br>
	<!--php post method-->	
	<p>Send Feedback</p>
	<form action = "" method = "POST">
	Name: <input type = "text" name = "name" id = "name"/><br><br>
	Comments:<br> <textarea name="textform" rows = "10" cols = "30" id = "textform"></textarea><br><br>
	<input type = "submit" name = "comment" value = "submit"/>
	</form>
	<p>Recent Comments:</p>
	<?php
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$db = 'users';
		//creating the connetion
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
		//checking the connection
		if($conn->connect_error){
			die('connection failed: ' . $conn->connect_error);
		}		
		if(isset($_POST['comment'])){
		$sql = "SELECT Name, comment from usertable ORDER BY Name DESC LIMIT 8";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "name: " . $row["Name"]. "<br>". " " . $row["comment"]. "<br><hr>";
			}
		}
		else {
		echo "0 results";
		}
		}
	$conn->close();
	?>
	</div>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> 

</body>


<!--going to better added later-->
<footer><small>
Copyright&copy; 2016 Austin Winters
</small></footer>

</html>
