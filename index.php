<!DOCTYPE html>
<html>
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
                    <form action="test.php" method="POST">
                            <table>
                                <tr><th>Email Id</th><th>Password</th></tr>
                                <tr><td><input  type='text' placeholder='Enter here' name='email' style="height:1px"; required></td><td><input type='password' placeholder="Enter here" name='password' style="height:1px" required></td></tr>
                                <tr><td colspan="2"><input type="submit" value="Login"></td></tr>
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

  <div id="headings">
<h2>New to the city,find your second home anywhere in the city.</h2>
<h3>Now no need to wander all around in search of a good hostel, Just enter the locality and connect to the hostel owners directly.</h3>
<h4>Choose the right hostel based on its ratings provided by its residents only.</h4>
  </div>  
    <marquee BGCOLOR=YELLOW style="margin-top:6%;" onmouseover="this.stop()" onmouseout="this.start()">
        <a href="#"> <img class = "mid" src='H1.jpg'> </a>
        <a href="#"> <img class = "mid" src='H2.jpg'> </a>
        <a href="#"> <img class = "mid" src='H3.jpg'> </a>
        <a href="#"> <img class = "mid" src="H4.jpg"> </a>
        <a href="#"> <img class = "mid" src="H5.jpg"> </a>
    
        <p id="para"><a href="url"> Accomodation in Rohini</a> <a href="url">Accomodation in North Campus</a> <a href="url">Accomodation in Noida</a>  <a href="url">Accomodation in Kamla Nagar</a> <a href="url">Accomodation in Ghaziabad</a></p>
    </marquee>

        
    
<div id="id01" class="modal modal-background" >
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="newaccount.php" method="POST">
    <div class="container1">
      <h1>Sign Up</h1>
      <hr>
      <label for="fname"><b>First name</b></label>
      <input type="text" placeholder="Enter first name" name="fname" required>
      
      <label for="lname"><b>Last name</b></label>
      <input type="text" placeholder="Last name" name="lname" required>
      
      <label for="pno"><b>Phone number</b></label>
      <input type="text" placeholder="Enter phone number" name="pno" required>
      
      <label for="Addr"><b>Address</b></label>
      <input type="text" placeholder="House_no" name="hno" required>
      <input type="text" placeholder="Enter locality" name="locality" required>
      <input type="text" placeholder="Enter city" name="city" required>
      <input type="text" placeholder="Enter state" name="state" required>
      <input type="text" placeholder="Enter Pincode" name="pcode" required>
      <input type="text" placeholder="Enter Cpuntry" name="country" required>
      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>

      <label for="passre"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="passre" required>
      <p>By creating an account you agree to our <a href="Terms&privacy.php" style="color:dodgerblue">Terms & Privacy</a>.</p>
        <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>

    </div>


</html>

