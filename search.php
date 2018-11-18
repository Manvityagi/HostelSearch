<head>
    <link rel="stylesheet" href="hack1.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container1 {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: 2; /* Sit on top */
   top:20%;
   left:5%;
    width: 60%; /* Full width */
    height: 60%;
    overflow: auto; /* Enable scroll if needed */
    padding-top: 50px;
    margin-left: 15%;
    margin-right: 15%;
}

/*Modal background*/
.modal-background
{
    background-image: url("image/WEDDING.jpg");
  /* Control the height of the image */
  min-height: 80%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: block;
     
}/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 90%;
    }
   
}
</style>

</head>

    
<header> 
<div class="top">
    <div>
    <img src="logo.png" height="40" width="150" style="float:left;margin-left:1%;border-radius: 15%"> 
        <form action='search.php' method='GET' >
            <input type="search" id="searchbox"  placeholder="Search" name="search" style="font-size: 26px;margin-top: 3px;">
            </form>
            <div style='float:right; margin-top: 0%;'>
                    <form action="clogin.php" method="POST">
                            <table>
                                <tr><th>Email Id</th><th>Password</th></tr>
                                <tr><td><input  type='text' placeholder='Enter here' name='email' style="height:1px"; required></td><td><input type='password' placeholder="Enter here" name='pass' style="height:1px" required></td></tr>
                            </table>
                             </form>
                    </div>
            
    </div>
</div>
</header>


<NAV class="navbar navbar-content ">
<UL id="navbar-content">
    
  </div></LI>
    <LI><a href="home.php">HOME</a></LI>
    <LI><a href="aboutus.html">ABOUTUS</a></LI>
    <LI><a href="services.php">MARKET PLACE</a></LI>
    <LI><a href="investors.php">INVESTORS</a></LI>
    <LI><a href="contact.html">CONTACT US</a></LI>
    <LI><a href="owner.php">REGISTER YOUR HOSTEL</a></LI>
</UL>
</NAV>

<?php
$search=$_GET['search'];
include 'dbconnection.php';
$db=open();
$count=1;
$str=explode('+',$search);
$search=implode($str);
$search = preg_replace('/\s+/', '', $search);
$query="SELECT name,path,hostelid FROM $search LIMIT 30";
 $result = $db->query($query, MYSQLI_STORE_RESULT);
    echo "<main><table><tr>";
 while($row = $result->fetch_assoc())
    {   $name=$row['name'];
        $hostelid=$row['hostelid'];
        $path=$row['path'];
                        if($count/5==0)
            {
                echo"</tr><tr>";
                $count=1;     
            }
            else
            {
                if($count==1)
                {
                 echo "<td><a href=hosteldetail.php?hostelid=$hostelid&location=$search><img src='$path' stlye='margin-left:30%;' id='category'></a></td><td>$name</td>";             
                }
                else
                {
                 echo "<td><a href=hosteldetail.php?hostelid=$hostelid&location=$search><img src='$path' stlye='margin-left:5%;' id='category'></a></td>";
                }
            }
    $count++;
    }
    echo "</table>"; 
closeconn($db);
?>