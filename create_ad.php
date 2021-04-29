<?php 
require_once 'dbconnect.php';
    session_start();
        $loggedIn = $_SESSION["loggedin"];
            if($loggedIn == false){
                header("location: login.php");
            }
?>

<html>    
<head>
    <title>Ad Mangaer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="ads.php">View Ads</a></li>
                    <li><a href="users.php">View Users and Moderators</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
    <div style="padding-left:16px">
        <h2>Create A New Ad</h2>
        <form method="post" action="add_ad.php">
        <table>
                <tr><td>Ad Title: </td><td><input type="varchar" name="Ad_Title"></td></tr>
                <tr><td>Ad Description: </td><td><input type="varchar" name="Ad_Details"></td></tr>
                <tr><td>Date: </td><td><input type="date" name="Ad_Date_Time"></td></tr>
                <tr><td>Price: </td><td><input type="double" name="Price"></td></tr>
                <tr><td>Category: </td><td><select name="CategID">
                <?php
                $sql = "SELECT Category_ID, Category_Name FROM Category";
                $result = mysqli_query($connection, $sql);
                
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<option value= " . $row["Category_ID" ] . ">" . $row["Category_Name" ] . "</option>";
  }
                } else {
                echo "0 results";
                }
                ?> </select> </td></tr>
                <!-- <tr><td>Username: </td><td><input type="varchar" name="UserID"></td></tr> -->
                <tr><td><input type="submit" value="Submit"></td><td></td>
            </table>
        </form>
    
    </div>

</body>

</html>