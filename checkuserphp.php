
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

?>


<html>
<head><title>CUSTOMER INFO PAGE</title></head>
<body> 
	<?php

 if(isset($_POST['submit'])){


	$id=$_POST['id'];

  $sql="select * from signin where id=$id";
  $res=mysqli_query($conn,$sql);
 if(!$res)
  {
  	die("queri failed");
  }
  if(is_null($res))
  {
  	die("data not found");
  }

  while($row=mysqli_fetch_assoc($res))
  {

  

  	foreach($row as $key=>$value)
  	{
  		echo" {$key}:"."{$value}";
  	      echo "||";
  	
  	}
    echo "<br /><br /><hr />"; 
  
  } 
}

  //mysqli_free_result($res);


	?>
</body>
</html>

<?php

mysqli_close($conn);
?>
