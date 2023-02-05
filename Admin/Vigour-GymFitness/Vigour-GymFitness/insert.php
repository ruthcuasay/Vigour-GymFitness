<?php

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phnum = $_POST['phnum'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];

  include 'connect.php';
  
  
    //insert query
    mysqli_query($conn,"INSERT INTO signup(fname,lname,email,phnum,age,gender)VALUES('$fname','$lname','$email','$phnum','$age','$gender')") or die('Query Error');  


echo "Success";
?>

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
$sql="SELECT * FROM signup ORDER BY ID";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
?>

<table border="1" id="table">
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
 
