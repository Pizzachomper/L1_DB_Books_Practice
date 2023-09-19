<!DOCTYPE HTML>

<html lang="en">
	
		<?php
	
		session_start();
		include("config.php");
		include("functions.php"); //Include data sanitising
		
		//Connect to database
	
		$dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		
		if (mysqli_connect_error())
	
		{	
			echo "Connection failed:".mysqli_connect_error();
			exit;
		}	
	?>

<!--Main content goes here-->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Put Content Here">
    <meta name="keywords" content="Put keywords here">
    <meta name="author" content="Put your name here">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="book_style.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        <div class="box banner">
						 
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="images/coffee_logo.png" width="186" height="150" alt="coffee cup and beans illustration" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Book Reviews</h1>
																										 
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box side">
            <h2>Side Bar</h2>
				<p>items go here</p>
				
				<ul>
					<li>Here</li>
					<li>is</li>
					<li>a</li>
					<li>list</li>
				</ul>
							 
							 
        </div>    <!-- / nav -->        
        