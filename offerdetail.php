<?php
$offerid=$_GET['offerid'];
include 'dbconnection.php';
$db=open();
$count=0;
$query="SELECT price description availability FROM offers where offerid LIKE '$offerid'";
$result=$db->query($query, MYSQLI_STORE_RESULT);
$sql="SELECT path from offerimage WHERE offer_id LIKE '$offerid'";
$result2=$db->query($sql,MYSQLI_STORE_RESULT);
echo "<div style='width:45%; float:left;margin-left:50;margin-top:50;'>";
while($row=$result->fetch_assoc())
{
    $availability=$row['availability'];
    if($availability>=1)
    {
        $count=1;

    }
    while($row=$result2->fetch_assoc())
{
    $path=$row['path'];
    
    echo "<img class='mySlides' src='$path' style='width:45%'>";echo "</div>";
}
while($row2=$result->fetch_assoc())
{
$price=$row['price'];
$description=$row['description'];
echo "<section style='float:right;width:45%;font-weight:bold;margin-right:45;margin-top:50;'>$description";
if($count==1)
echo "Availability:$availability";
else {echo "Not available";}
echo "<a href='booking.php?offerid=$offerid' style='text-decoration:none;'>Book now</a>";
}
}    

closeconn($db);
?>
