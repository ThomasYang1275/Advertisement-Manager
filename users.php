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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="ads.php">View Ads</a></li>
                    <li><a href="create_ad.php">Create Ad</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </body>
    </html>

<?php
    $displayUsers = 'SELECT User_FName, User_LName 
                     FROM AdUser
                     WHERE User_ID NOT IN (SELECT * FROM Moderator);';

    $displayMod = 'SELECT User_FName, User_LName 
                   FROM AdUser as au
                   INNER JOIN Moderator m on au.User_ID = m.User_ID;';

    $queryOne = mysqli_query($connection, $displayUsers);
    $queryOneResults = mysqli_num_rows($queryOne);

    if($queryOneResults > 0){
        echo "<p>Users</p>
        <table>
        <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        </tr>
        </thead>
        <tbody>";
        while ($row = mysqli_fetch_assoc($queryOne)){
            echo "<tr>
            <td>".$row['User_FName']."</td>
            <td>".$row['User_LName']."</td>
            </tr>";
        }

        echo"</tbody>
        </table>";
    }
    else{
        echo "No Users.";
    }

    $queryTwo = mysqli_query($connection, $displayMod);
    $queryTwoResults = mysqli_num_rows($queryTwo);

    if($queryTwoResults > 0){
        echo "<p>Moderators</p>
        <table>
        <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        </tr>
        </thead>
        <tbody>";
        while ($row = mysqli_fetch_assoc($queryTwo)){
            echo "<tr>
            <td>".$row['User_FName']."</td>
            <td>".$row['User_LName']."</td>
            </tr>";
        }

        echo"</tbody>
        </table>";
    }
    else{
        echo "No Moderators.";
    }

?>
