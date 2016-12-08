<!DOCTYPE html>
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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Star Wars</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Weapons</a>
                    </li>
                    <li>
                        <a href="#">Planets</a>
                    </li>
					<li>
						<a href = "#">Characters</a>					
						
					</li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
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
	<textarea name ="textform" width = "190px" height = "200px"></textarea><br>
	<input type = "button" name = "commentButton" method = "post" value = "submit">
	
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
