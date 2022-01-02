<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	</head>
<body>
    <header>
		<div class="container">
			<div class="nav">
				<h2>
					<i class="fas fa-camera" style="color: lightskyblue;"></i> Image Collections
				</h2>
				<div class="search-box">
					<input type="text" name="" id="input" placeholder="Search..."><i class="fas fa-search" onclick="loadImg()"></i>
				</div>
				<div class="user" id="user-dropdown" onclick="dropdown()">
					<p>Hello, <?php echo $_SESSION['username'] ?></p>
				</div>
				<a href="logout.php" class="dropdown-items" id="dropdown-item" style="display: block;">Logout</a>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="grid">
		</div>
	</div>
	<script src="js/script.js"></script>
	<script>
		const user = document.getElementById('user-dropdown')
		const item = document.getElementById('dropdown-item')
		function dropdown() {
			if (user.style.display === 'none'){
				item.style.display = 'block'
			} else {
				item.style.display = 'none'
			}
		}
	</script>
</body>	
</html>