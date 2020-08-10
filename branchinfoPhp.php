<?php 

$host="localhost";
$dbuser="root";
$pass="";
$dbname="agriculture";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if($conn){
  echo "connection successful ";
}else{
  echo "no connection";
}




$branch_name = $_POST['branch_name'];
$branch_address = $_POST['branch_address'];
$branch_PhoneNumber1 = $_POST['branch_PhoneNumber1'];
$branch_PhoneNumber2 = $_POST['branch_PhoneNumber2'];
$branch_specialist_for_farmer = $_POST['branch_specialist_for_farmer'];
$branch_specialist_for_fisherman = $_POST['branch_specialist_for_fisherman'];
$branch_seed_amount = $_POST['branch_seed_amount'];
$branch_fish_amount = $_POST['branch_fish_amount'];
$branch_training_time = $_POST['branch_training_time'];

$sql = "INSERT INTO branch (branch_name,branch_address,branch_PhoneNumber1,branch_PhoneNumber2,branch_specialist_for_farmer,branch_specialist_for_fisherman,branch_seed_amount,branch_fish_amount,branch_training_time) VALUES ('$branch_name','$branch_address','$branch_PhoneNumber1','$branch_PhoneNumber2','$branch_specialist_for_farmer','$branch_specialist_for_fisherman','$branch_seed_amount','$branch_fish_amount','$branch_training_time')";

if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>