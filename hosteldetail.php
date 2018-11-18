<?php
$location=$_GET['location'];
$hostelid=$_GET['hostelid'];
include 'dbconnection.php';
$db=open();
$query="SELECT name,phoneno,path FROM $location WHERE hostelid LIKE '$hostelid'";
$result=$db->query($query,MYSQLI_STORE_RESULT);
while($row=$result->fetch_assoc())
{
    $name=$row['name'];
    $phone=$row['phoneno'];
    $path=$row['path'];
    echo "<img src='$path' height='50px' width='50px'>";
}

$query="SELECT name,price,description,availability,offerid from offers WHERE hostelid LIKE '$hostelid'";
$result=$db->query($query,MYSQLI_STORE_RESULT);
while($row=$result->fetch_assoc())
{   $offerid=$row['offerid'];
    
    $offerid=$row['offerid'];
    $name=$row['name'];
    $price=$row['price'];
    $description=$row['description'];
    $availability=$row['availability'];
    echo "<table><tr><th>Name</th><th>Price</th><th>Description</th><th>Availability</th><th>Booking</th></tr>";
    echo "<tr><td>$name</td><td>$price</td><td>$description</td><td>$availability</td><td><a href='booking.php?offerid=$offerid'>Book now</a></td></tr>";
}
echo "</table>";
?>

