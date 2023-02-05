<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Adult's Fitness</title>
</head>
<body>


	<section class="showcase">
		<header>
			<h2 class="logo">Admin Panel</h2>
		

			<div class="toggle"></div>
		</header>
		<video src="fitness.mp4" muted loop autoplay></video>
		<div class="overlay"></div>
		<div class="text">
			<h2>Excuses</h2>
			<h3> don't burn calories</h3>
			<p>"If you want something you've never had,<br>
			 you must be willing to do something<br>
			  you've never done"</p>
		<div class="text">
		
			
			  </div>
    
  </section>
  <div class="menu">
    <ul>
      <li><a href="delete.php">Remove Data</a></li>
      <li><a href="search.php">Search</a></li>
      <li><a href="schedule.php">Schedule</a></li>
      <li><a href="homepage.html">Home</a></li>
    
    </ul>
  </div>
		</div>
	</section>
	<script>
		const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
      })
	</script>
</body>
</html>

