 <?php
if(isset($_COOKIE['user']))
{
    header("location:index.php");
}
if(!isset($_POST['email']) && !isset($_POST['password']))
{
    header("location:index.php");
}
else
{
   $userid=$_POST['email'];
   $password=$_POST['password'];
   include 'dbconnection.php';
   $db=open();
   $query="SELECT Emailid FROM customer WHERE Emailid LIKE '$userid' AND password LIKE '$password'";
       $result = $db->query($query, MYSQLI_STORE_RESULT);
       
             
       if(mysqli_num_rows($result)==1) 
            {
                $cookievalue=$userid;
               setcookie('user',$cookievalue,time()+86400);  
               header("location:index.php");
            }
            else 
            {
                echo "User do not exist";
            }
            closeconn($db);
}
            ?>
