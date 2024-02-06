<?php
$username="root";
$password="";
$host="localhost";
$database="career_db"; //database name

$con=mysqli_connect("$host","$username","$password","$database") or die("Server Error");
//mysqli_select_db("$database") or die("Database error");

if($con==true)
{
    echo "Success";
}
else
{
    mysql_close($con);
}

?>

