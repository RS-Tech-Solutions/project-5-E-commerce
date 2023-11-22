<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message']; 
}
$con = new mysqli('localhost','root','','test');
if($con)
{
    //echo "connection successful";
    $sql="insert into `contact`(Name,Email,Message)values('$name','$email','$message')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "Data Inserted Successufully";
    }
    else
    {
        die(mysqli_error($con)); 
    }
}
else
{
    die(mysqli_error($con));
}
?>