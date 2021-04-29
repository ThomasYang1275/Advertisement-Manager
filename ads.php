<?php 
    require_once 'dbconnect.php';
        session_start();
            $loggedIn = $_SESSION["loggedin"];
                if($loggedIn == false){
                    header("location: login.php");
                }
?>

<!--Jeremiah Barnes wrote this one-->
<!DOCTYPE html>
<html>
<title>View Ads</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="users.php">View Users and Moderators</a></li>
<li><a href="create_ad.php">Create Ad</a></li>
<li><a href="logout.php">Log Out</a></li>
</ul>
<h1>Ad Page</h1>

<?php

$sql = "SELECT Ad_Title, Ad_Details, Ad_Date_Time, Price, UserID FROM Ad";
$result = mysqli_query($connection, $sql);

echo "<table>
<tr>
<th>Title</th>
<th>Details</th>
<th>Date</th>
<th>Price</th>
<th>User</th>
</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo"<tr>";
     echo"<td>" . $row["Ad_Title"]. "</td>";
     echo"<td>" . $row["Ad_Details"]. "</td>";
     echo"<td>" . $row["Ad_Date_Time"]. "</td>";
     echo"<td>$" . $row["Price"]. "</td>";
     echo"<td>" . $row["UserID"]. "</td>";
     echo"</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

?>

</body>
</html>