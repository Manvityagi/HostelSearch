<?php

function open()
{
   $db= new mysqli('localhost','root','','hackathon');
   return $db;           
}

function closeconn($db)
{
    $db->close();
}
?>