<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Adult's Fitness</title>
</head>
<style>

	body {
		background-color: #1e1b18;
		background-position: center;
		
	
	}
		

	
	.container {
  position: relative;
  height: 5px;
  
  margin-top: 0;
  
  width:100%;
  
}

.container .box {
  position: relative;
  width: calc(300px - 20px);
  height: calc(100px - 20px);
  background: white;
  float: left;
  margin:15px;
  box-sizing: border-box;
  opacity: 0.7;
  border-radius: 10px;


}



.update {
  width:150px;
    height:40px;
    font-size: 16px;
    border-radius: 100px;
    background-color: white;    
    margin-left: 108px;
    margin-top: 105px;
    border: 1px solid #1260cc;
}

.left_b button{
    width:150px;
    height:40px;
    font-size: 16px;
    border-radius: 100px;
    background-color: black;    
    border: 1px solid black;
    position:absolute; 
    color:white;
    top:21px;
    left:1180px;
 
}

td {
  height: 20px;
  text-align: center;
  vertical-align: middle;
  border: 1px solid gray;


}
 table{
  
  position: absolute;
  font-size: 14px;
 top: 2px;
  color: #ccc;
  margin-top:140px ;
  width: 100%;



 }

 .box input {
 	margin-left: 27px;
 	margin-top:10px;
 	text-align: center;
 	width: 80%;
 }

 .left_b button{
    width:150px;
    height:40px;
    font-size: 16px;
    border-radius: 100px;
    background-color: black;    
    border: 1px solid black;
    position:absolute; 
    color:white;
    top:50px;
    right:20px;
 
}

	</style>
<body>
<div class="left_b">
<button onclick="window.location.href='admin.php'">Main</button> </div>



<div class="container">
  <?php
$servername="localhost";
$username="root";
$password="";
$db="registerform";
$con=mysqli_connect($servername,$username,$password,$db);

if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql="SELECT * FROM signup ORDER BY id";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
?>

<table id="table">
<tr>
<td><b>ID</b></td>
<td><b>Firstname</b></td>
<td><b>Lastname</b></td>
<td><b>Email</b></td>
<td><b>Phone Number</b></td>
<td><b>Age</b></td>
<td><b>Gender</b></td>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phnum'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
 </tr>
<?php
}
}
else
{
echo "No file found";
}
mysqli_close($con);
?>
<br>
 
<div class="box">
  
 <form method="POST" action="">
<input type="text" name="id" placeholder="Enter the ID">
<input type="submit" name="delete" value="DELETE">
</form>
<br>
<?php
  if(isset($_POST['delete']))
{
$id=$_POST['id'];
$servername="localhost";
$username="root";
$password="";
$db="registerform";

$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql="DELETE FROM signup WHERE id='$id'";
if (mysqli_query($con, $sql)) {
 echo "Deleted successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?><br>
<?php
 $url1=$_SERVER['REQUEST_URI'];
 header("Refresh: 5; URL=$url1");

?>
</div>


</div>	
  
</body>
</html>