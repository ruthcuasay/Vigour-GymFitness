<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<style type="text/css">
		body{
		margin: 10px;
		margin-top: 30px;
	 	padding: 5px;
	 	background: #ddd;
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
		}td,th{
			padding-top: 10px;
			padding-left: 8px;
			padding-bottom: 5px;
		}th{
			background: #313232;		
		}


@import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700);
@import url(https://raw.github.com/FortAwesome/Font-Awesome/master/docs/assets/css/font-awesome.min.css);

#wrap {
  
  display: inline-block;
  position: relative;
  height: 60px;
  float: right;
  padding: 0;
  position: relative;
}

input[type="text"] {
  height: 40px;
  font-size: 20px;
  display: inline-block;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

input[type="text"]:focus:hover {
  border-bottom: 1px solid #BBB;
}

input[type="text"]:focus {
  width: 400px;
  z-index: 1;
  border-bottom: 1px solid #BBB;
  cursor: text;
}
input[type="submit"] {
  height: 50px;
  width: 50px;
  display: inline-block;
  color:red;
  float: right;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNQTFRFU1NT9fX1lJSUXl5e1dXVfn5+c3Nz6urqv7+/tLS0iYmJqampn5+fysrK39/faWlp////Vi4ZywAAABF0Uk5T/////////////////////wAlrZliAAABLklEQVR42rSWWRbDIAhFHeOUtN3/ags1zaA4cHrKZ8JFRHwoXkwTvwGP1Qo0bYObAPwiLmbNAHBWFBZlD9j0JxflDViIObNHG/Do8PRHTJk0TezAhv7qloK0JJEBh+F8+U/hopIELOWfiZUCDOZD1RADOQKA75oq4cvVkcT+OdHnqqpQCITWAjnWVgGQUWz12lJuGwGoaWgBKzRVBcCypgUkOAoWgBX/L0CmxN40u6xwcIJ1cOzWYDffp3axsQOyvdkXiH9FKRFwPRHYZUaXMgPLeiW7QhbDRciyLXJaKheCuLbiVoqx1DVRyH26yb0hsuoOFEPsoz+BVE0MRlZNjGZcRQyHYkmMp2hBTIzdkzCTc/pLqOnBrk7/yZdAOq/q5NPBH1f7x7fGP4C3AAMAQrhzX9zhcGsAAAAASUVORK5CYII=) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
}

input[type="submit"]:hover {
  opacity: 0.8;
}



	</style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

  <div id="wrap">
  <form action="searchdelete.php" autocomplete="on" method="post">
  <input id="search" name="search" type="text" placeholder="Search Name"><input name="submit" type="submit">
  </form>
	</div><br><br><br><br>
	<?php
if(isset($_POST['search']))
	{
		$search=$_POST['search'];

$servername= "localhost";
$username="root";
$password="";
$dbname="reservation";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
die("Connection failed:" . mysqli_connect_error());
}
$sql="SELECT * FROM reserved WHERE fname='$search'";
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
	}
?>
	
</body>
</html>