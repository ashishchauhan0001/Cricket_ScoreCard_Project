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
	<title>Home</title>
	<style>
		/* General styling for the entire page */
		body {
		    font-family: Arial, sans-serif;
		    background: linear-gradient( rgb(143, 212, 212),rgb(133, 133, 226),rgb(130, 10, 130));
  
		    margin: 0;
		    padding: 0;
		}

		.header {
		    /* background-color:rgb(100, 10, 100); */
		    color: white;
		    text-align: center;
		    padding: 10px;
			font-size: larger;
		}

		.header h3 {
		    margin: 0;
		}

		.content {
		    padding: 20px;
		    margin: 20px;
		}

		.content p {
		    font-size: 28px;
		    text-align: center;
		}

		.error {
		    background-color: #f2dede;
		    color: #a94442;
		    padding: 10px;
		    margin-bottom: 10px;
		    border-radius: 5px;
		}

		.success {
		    background-color: #dff0d8;
		    color: #3c763d;
		    padding: 10px;
		    margin-bottom: 10px;
		    border-radius: 5px;
		}

		.data {
		    
		    padding: 30px;
		    margin: 20px;
		    
		}

		.data h3 {
		    margin-bottom: 15px;
		}

		.data span {
		    margin: 0 10px;
		}

		.data a {
		    text-decoration: none;
		    color: #333;
		    padding: 8px 16px;
		    border: 1px solid #333;
		    border-radius: 5px;
		}

		.data a:hover {
		    background-color: #5d086e;
		    color: #fff;
		}

		.data center {
		    margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="header">
	<a href="../index.php" style="text-decoration: none; color:black"><h3><span style='font-size:30px;'>&#128072;</span>Go To Home Page</Go></h3></a>
</div>

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
    	<p>Welcome!! <strong><?php echo $_SESSION['username'];?></strong> Choose what Action You want to perform</p>
    	<p> <a href="index.php?logout='1'" style="color: red; font-size:30px"><center>logout</center></a> </p>
    <?php endif ?>
</div>
<div class="data">
<center>
    <h3>For Batsman</h3>
<span>
   <a href="../Insert/Batsman.php" >Insert</a>
	</span>
	<span>
   <a href="../update/update.php">Update</a>
	</span>
	<span>
   <a href="../delete/delete.php"  >Delete</a>
	</span>
	</center>
	<center>
		<h3>For Bowler</h3>
<span>
   <a href="../Insert/Batsman.php"  >Insert</a>
	</span>
	<span>
   <a href="#" >Update</a>
	</span>
	<span>
   <a href="#" " >Delete</a>
	</span>
	</center>
	<center>
		<h3>For Allrounder</h3>
<span>
   <a href="../Insert/Batsman.php" >Insert</a>
	</span>
	<span>
   <a href="#">Update</a>
	</span>
	<span>
   <a href="#">Delete</a>
	</span>
	</center>
	</div>
</body>
</html>
