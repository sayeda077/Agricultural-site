<?php 

$host="localhost";
$user="root";
$password="";
$db="agriculture";

$con=mysqli_connect($host,$user,$password,$db);
if(mysqli_connect_errno())
{
	die("connection failed".mysqli_connect_errno());
}


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
  
    $result=mysqli_query($con,$sql);

    
    if(mysqli_num_rows($result)==1){
       echo "you have logged in" ; 
       exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>




