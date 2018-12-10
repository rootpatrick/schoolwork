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
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
    background: #808080;
}
.header {
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #808080;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: #808080;
	
}
* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:#808080;
    color: white;
    text-align: center;
}
</style>

</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	
	<!-- The form -->
<form class="example" action="search.php"  method="POST">
  <input type="text"  placeholder="Search from database" name="search">
  <button type="submit" name="serch"><i class="fa fa-search"></i></button>
</form>

<form class="example" action="http://www.google.com/search"  method="$_POST">
  <input type="text"  placeholder="Search from google" name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

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
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
	<div class="footer">
  <p><strong>201611309 , 201511178</strong> </p>
</div>
</body>
</html>