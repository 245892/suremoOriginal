 <?php include "database.php"; ?>

<?php

  $query="select * from shouts order by time desc limit 100";
  $shouts = mysqli_query($con, $query);

 ?>

 <?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chatting Friends Shout</title>
	<link rel="stylesheet" type="text/css" href="datacss/style.css">
</head>
<body>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<h1 style="text-align: center; color:red; "><b>Welcome</b> <strong><?php echo $_SESSION['username']; ?></strong></h1>
			<button style="font-size: 30px; border-radius: 10px; text-decoration: none;"><p> <a href="index.php?logout='1'" style="color: brown; text-align: center;">Logout</a> </p></button>
		<?php endif ?>
	</div>

	<div id="container">
		<header>
		<h1>Chatting Friends Shout</h1>	
		</header>

		<div id="shouts">
      <ul>
    <?php while ($row=mysqli_fetch_assoc($shouts)): ?>
            <li class="shout">
        <span><?php echo $row['time'];  ?> - </span><strong><?php echo $row['user'];  ?>:</strong> <?php echo $row['message'];  ?>
      </li>
    <?php endwhile; ?>
        </ul>
      </div>
		
	 <div id="input">
        <?php if (isset($_GET['error'])) : ?>
        <div class="error"><?php echo $_GET['error'];  ?></div>
  <?php endif; ?>
		<form method="post" action="process.php">
			<br>
		<input type="text" name="user" placeholder="Enter your name">
		
		<input type="text" name="message" placeholder="Enter your message">
		
		 <input class="shout-btn"type="submit" name="submit" value="Submit" />
		<button class="logout" style="text-align: center;"><a href="index2.php">Home</a></button>
		 


	</form>
</div>
</body>
</html>