
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

#table2{
height: 20px;
width: 100%;
text-align: center;
color: white;
background-color: green;
border:3px;
margin-top: 3px;
position: absolute;


}


  </style>
<body>
<div class="left_b">
<button onclick="window.location.href='homepage.html'">Home</button> </div>



<div class="container">
  <?php
$servername="localhost";
$username="root";
$password="";
$db="reservation";
$con=mysqli_connect($servername,$username,$password,$db);

if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql="SELECT * FROM reserved ORDER BY id";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
?>

<table id="table">
<tr>
<td><b>ID</b></td>
<td><b>Firstname</b></td>
<td><b>Lastname</b></td>
<td><b>Age</b></td>
<td><b>Phone Number</b></td>
<td><b>Gender</b></td>
<td><b>Time</b></td>
<td><b>Type</b></td>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['pnum'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['timee'];?></td>
<td><?php echo $row['type'];?></td>
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
$db="reservation";

$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql="DELETE FROM reserved WHERE id='$id'";
if (mysqli_query($con, $sql)) {
 echo "Deleted successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?><br>
</div>

<div class="box">
<form class="search" method="POST" action="">
<input type="text" name="input" placeholder="Enter Firstname">
<input type="submit" name="submit" value="Search"><br>
</form><br>
<?php

if(isset($_POST['input']))
{

$search=$_POST['input'];
$servername="localhost";
$username="root";
$password="";
$db2="reservation";
$conn=mysqli_connect($servername,$username,$password,$db);


if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql2="SELECT * FROM reserved WHERE fname='$search'";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
?>

<table border="3" id="table2">
  
<tr>

<td><?php echo $row['id'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['pnum'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['timee'];?></td>
<td><?php echo $row['type'];?></td>

 </tr>
</table>

<?php
}
}
else
{
echo "No file found";
}


mysqli_close($conn);
}
?>















<?php
 $url1=$_SERVER['REQUEST_URI'];
 header("Refresh: 5; URL=$url1");

?>



</div>  
  
</body>
</html>