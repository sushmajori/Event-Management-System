<?php

$conn = new mysqli('localhost','root','','wtas5');

if($conn->connect_error)
{
    echo '<script>alert("not");</script>';
}
/*else{
    echo '<script>alert("");</script>';
}*/
?>