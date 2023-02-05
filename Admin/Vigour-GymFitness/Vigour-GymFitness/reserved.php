
<!DOCTYPE html>
<html>
<head>
  <h1> RESERVATION</h1>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Adult's Fitness</title>
</head>
<style>

  body {

    background-color: #1e1b18;
    background-position: center;
    
  
  }
    h1{
    	color: white;
    	text-align:center;
	margin-top: 20px;
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
  margin-top:110px ;
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
    top:23px;
    right:20px;
 
}


</style>

<body>
  <div class="left_b">
<button onclick="window.location.href='index.html'">Home</button> </div>
</body>
	<?php 
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$pnum = $_POST['pnum'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$timee = $_POST['timee'];
	$type = $_POST['type'];

	$servername= "localhost";
	$uname="root";
	$pw="";
	$dbname="reservation";

$conn=mysqli_connect($servername,$uname,$pw,$dbname);
if (!$conn) {
die("Connection failed:" . mysqli_connect_error());
}
echo "Connected!";

$sql= "INSERT INTO reserved (fname, lname, age, pnum, email, gender, timee, type ) VALUES ('$fname','$lname','$age','$pnum','$email','$gender','$timee','$type')";
if (mysqli_query($conn, $sql)) {
echo "<br>Registered Successfully!";
} 
?>
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