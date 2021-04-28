<?php 
require_once 'dbconnect.php';
?>

<html>    
<head>
    <title>Ad Mangaer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div style="padding-left:16px">
        <h2>Create A New Ad</h2>
        <form method="post" action="add_ad.php">
        <table>
                <tr><td>Ad Title: </td><td><input type="varchar" name="Ad_Title"></td></tr>
                <tr><td>Ad Description: </td><td><input type="varchar" name="Ad_Details"></td></tr>
                <tr><td>Date: </td><td><input type="date" name="Ad_Date_Time"></td></tr>
                <tr><td>Price: </td><td><input type="double" name="Price"></td></tr>
                <tr><td>Category: </td><td><input type="varchar" name="CategID"></td></tr>
                <tr><td>Username: </td><td><input type="varchar" name="UserID"></td></tr>
                <tr><td><input type="submit" value="Submit"></td><td></td>
            </table>
        </form>
    
    </div>

</body>

</html>