<?php 
require_once 'dbconnect.php';
?>

<style>
.h1 {
    text-align: center;
    vertical-align: top;
}

.h2{
    position: absolute;
    top: 350px;
    left: 640px;
    width: 300px;
    height: 100px;
}

.center {
    text-align: center
}

a:link, a:visited {
    background-color: black;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

a:hover, a:active {
    background-color: white;
    color: black;
    text-decoration: none;
}

.div{
    position: fixed;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 150px;
    border: 10px solid white;
    padding: 25px;
    margin: 10px;
}

/*Website that contains the css code for this neat background, https://codepen.io/CubicB/pen/jqQoVB*/
body {
background: linear-gradient(90deg, red, orange, yellow, lime, cyan, blue, indigo, violet);
background-size: 10000% 10000%;
animation: bg-gradient 30s infinite; /*DO NOT EVER SET THE TIME BETWEEN COLORS TO A NUMBER LOWER THAN TEN, IT MAY CAUSE EPILEPSY!*/
}

@keyframes bg-gradient { 
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
</style>

<!DOCTYPE html>
<html>
<head>
<link href = "Style.css" rel = "stylesheet">
</head>
<title> Ad Manager </title>
<body>
<h1 class="h1"> Welcome to the Ad Mangaer </h1>
<p class="center"> Please log in to create and view more ads </p>
<div style="text-align:center;">
<a href="login.php">Log In</a>
</div>
</body>
</html>

<?php
    $sql = 'select Ad_Title, Ad_Details, Price from Ad where ad_id = 1;';
    $query = mysqli_query($connection, $sql) or die(mysql_error());
    $queryOutput = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);

    if($queryOutput > 0){
        echo "<h2 class = 'h2'>Ad made by one of our users</h2>
        <div class='div'>
        <h3 class='h1'>".$row['Ad_Title']."</h3>
        <p class='center'>".$row['Ad_Details']."</p>
        <p class='center'>$".$row['Price']."</p>
        </div>";
    }
    else{
        echo "Ad not found";
    }
?>