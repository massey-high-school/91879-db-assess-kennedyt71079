<!DOCTYPE HTML>

<html lang="en">

    <?php

    session_start();
    include("config.php");
    include("functions.php"); // include data sanitising...
    
    // Connect to database...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if(mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
        exit; 
    }
    
?>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Food Review Database">
    <meta name="keywords" content="Food, Review, Database, Breakfast,
                                   Lunch, Dinner, Desert, Ratings">
    <meta name="author" content="Troy Kennedy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>The Bites Review</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/foo.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Click here to go to the Home Page">
            <img class="img-circle" src="images/berry_cool.jpg" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>The Bites Review</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box nav">
            <a href="index.php">Home</a> | 
            <a href="page1.php">Breakfast</a> | 
            <a href="page2.php">Lunch</a> | 
            <a href="page3.php">Dinner</a> | 
            <a href="page4.php">Dessert</a> |
            <a href="contact.php">Contact</a>
        </div>    <!-- / nav -->        
        
        
        <div class="box side">
           <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>
            
            <i>Type part of the Name if desired</i>
            
            <hr />
            
            Name Search<br />
            Vegetarian Serach<br />
            Rating Search<br />
            Type Search<br />
        </div>
        