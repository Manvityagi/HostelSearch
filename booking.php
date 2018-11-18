<?php
include 'dbconnection.php';
$db=open();
$email=$COOKIE['email'];
$offerid=$_GET['offerid'];
$query="SELECT offerid MAX(orderid) FROM offers WHERE offerid LIKE '$offerid'";
$result=$db->query($query,MYSQLI_STORE_RESULT);
while($row=$result->fetch_assoc())
{
    $offerid=$row['offerid'];
    $orderid=$row['orderid'];
    $orderid++;
    $sql="INSERT INTO bookings VALUES ('$email,'$offerid','$orderid','confirm')";
    $db->query($sql);
}

    ?>