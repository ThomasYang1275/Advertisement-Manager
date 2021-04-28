<?php 
require_once 'dbconnect.php';

$AdTitle=isset($_POST['Ad_Title'])?$_POST['Ad_Title']:"";
$AdDetails=isset($_POST['Ad_Details'])?$_POST['Ad_Details']:"";
$AdDate=isset($_POST['Ad_Date_Time'])?$_POST['Ad_Date_Time']:"";
$AdPrice=isset($_POST['Price'])?$_POST['Price']:"";
$AdCategory=isset($_POST['CategID'])?$_POST['CategID']:"";
$UserID=isset($_POST['UserID'])?$_POST['UserID']:"";
/*$ModID=isset($_POST['ModID'])?$_POST['ModID']:"";
$AdStatus=isset($_POST['StatusID'])?$_POST['StatusID']:"";*/

$SQL = "INSERT INTO Ad (Ad_Title, Ad_Details, Ad_Date_Time, Price, CategID, UserID, ModID, StatusID) VALUES(";
$SQL.="'".$AdTitle."', '".$AdDetails."', '".$AdDate."', '".$AdPrice."', '".$AdCategory."', '".$UserID."', Null, 'PN')";
$result = mysqli_query($connection,$SQL);

if (!$result) //if the query fails
    die("Database access failed: " . mysqli_error($connection));

    if($AdTitle !=''&& $AdDetails !='' && $AdDate !=''&& $AdPrice !=''&& $AdCategory !=''&& $UserID !='')
    {
    /*echo "Ad is successfully added to the database!";*/
    $message = "Ad is successfully added to the database!"; // link to where I got the alert message https://stackoverflow.com/questions/13851528/how-to-pop-an-alert-message-box-using-php
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='home.php';</script>";
    }
?>

