<?php

include_once('../config.php');
session_start();
$eid=$_SESSION['eid'];
$desig=$_POST['desig'];
$vacno=$_POST['vacno'];
$desc=$_POST['jobdesc'];
$exp=$_POST['exp'];
$money=$_POST['money'];
$salary=$_POST['pay'];
$fnarea=$_POST['fnarea'];
$countryid=$_POST['country'];
$stateid=$_POST['state'];
$cityid=$_POST['city'];
$indtype=$_POST['indtype'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$profile=$_POST['profile'];
$date=date('d-m-y');
$pay=$money." ".$salary;
mysqli_select_db($db2,"location");
$query1=mysqli_query($db2,"select name from countries WHERE id = '$countryid'")  or die("Wrong Query");
$row = mysqli_fetch_assoc($query1);
$country= $row['name'];

$query2=mysqli_query($db2,"select name from states WHERE id = '$stateid'")  or die("Wrong Query");
$row = mysqli_fetch_assoc($query2);
$state= $row['name'];

$query3=mysqli_query($db2,"select name from cities WHERE id = '$cityid'")  or die("Wrong Query");
$row = mysqli_fetch_assoc($query3);
$city= $row['name'];

$location=$country.",".$state.",".$city;
mysqli_close($db2);
mysqli_select_db($db1,"jobportal");
echo $eid;echo "     ";
echo $desig;echo "     ";
echo $desc;echo "     ";
echo $vacno;echo "     ";
echo $exp;echo "     ";
echo $pay;echo "     ";
echo $fnarea;echo "     ";
echo $location;echo "     ";
echo $indtype;echo "     ";
echo $ug;echo "     ";
echo $pg;echo "     ";
echo $profile;echo "     ";
echo $date;echo "     ";

$query4 = "INSERT INTO jobs (eid,title,jobdesc,vacno,experience,basicpay,fnarea,location,industry,ugqual,pgqual,profile,postdate ) 
VALUES ('$eid','$desig','$desc','$vacno','$exp','$pay','$fnarea','$location','$indtype','$ug','$pg','$profile','$date')";




if (!mysqli_query($db1, $query4)) {
    // If query execution fails, echo the error description
    echo "Error description: " . mysqli_error($db1);
} else {
    // If query execution is successful, redirect to profile.php with a success message
    header('Location: profile.php?msg=jobposted');
    exit; // Make sure to exit after redirecting to prevent further execution of the script
}

?>