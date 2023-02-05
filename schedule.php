<!DOCTYPE html>
<html>
<head>
	

	<style type="text/css">
		body{
		margin: 10px;
		margin-top: 30px;
	 	padding: 5px;
	 	background-color: #1e1b18;
	 	color: #fff;
	 	font-family: 'Work Sans', sans-serif;
		
	 }table{
			height: 10%;
			width: 100%;
			table-layout: fixed;
			text-align: left;
			border: .5px solid #000;
			border-radius: 10px;
			background: #616161;
			color: #fff;
			margin-top: 10px;
		}td,th{
			padding-top: 10px;
			padding-left: 8px;
			padding-bottom: 5px;
		}th{
			background: #313232;		
		}




#wrap {
  
  display: inline-block;
  position: relative;
  height: 60px;
  float: right;
  padding: 0;
  position: relative;
}




h1 {
	text-align:center;
	margin-top: 1px;
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
    top:30px;
    right:20px;
 
}

	</style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="left_b">
<button onclick="window.location.href='admin.php'">Main</button> </div>
	<h1> SCHEDULE OF SESSION</h1>
  

	<?php


$servername= "localhost";
$username="root";
$password="";
$dbname="reservation";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
die("Connection failed:" . mysqli_connect_error());
}
$sql="SELECT * FROM reserved";
$result=mysqli_query($conn,$sql);
?>			
			<table border="1px" >
			<th width="25px">ID</th>
			<th width="80px">FIRSTNAME</th>
			<th width="80px">LASTNAME</th>
			<th width="15px">AGE</th>
			<th width="80px">PNUM</th>
			<th width="100px">EMAIL</th>
			<th width="50px">GENDER</th>
			<th width="80px">TIME</th>
			<th width="80px">TYPE</th>
	
			</table>
			<?php 
	if(mysqli_num_rows($result)>0)
	{

		while($row=mysqli_fetch_assoc($result))
		{ ?>
			
<table border="1px">
	 	   		<tr>
	 	   			<td width="25px" ><?php echo $row['id']; ?></td>
	 	   			<td width="80px" ><?php echo $row['fname']; ?></td>
	 	   			<td width="80px"><?php echo $row['lname']; ?></td>
	 	   			<td width="15px"><?php echo $row['age']; ?></td>
	 	   			<td width="80px"><?php echo $row['pnum']; ?></td>
	 	   			<td width="100px" ><?php echo $row['email']; ?></td>	
	 	   			<td width="50px"><?php echo $row['gender']; ?></td>
	 	   			<td width="80px" ><?php echo $row['timee']; ?></td>	
	 	   			<td width="80px"><?php echo $row['type']; ?></td>
	 	   		</tr>
	 	   	</table>
	 	   	<?php 
	 	}
	 }
else
	{
		echo "No data found";
	}
	mysqli_close($conn);
	
?>


	
</body>
</html>