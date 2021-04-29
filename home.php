<?php 
    require_once 'dbconnect.php';
        session_start();
            $loggedIn = $_SESSION["loggedin"];
                if($loggedIn == false){
                    header("location: login.php");
                }
?>

<!DOCTYPE html>
    <html>
        <title>Home</title>
            <head>
                <link rel="stylesheet" type="text/css" href="style.css">
            </head>
            <body>
                <ul>
                    <li><a href="ads.php">View Ads</a></li>
                    <li><a href="users.php">View Users and Moderators</a></li>
                    <li><a href="create_ad.php">Create Ad</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            <h1>Welcome to the Ad Mangaer</h1>
            <p>You can view a wide variety of ads created by our users or see all the users and moderators here by using the navigation bar located on the top left!</p>
            </body>
    </html>