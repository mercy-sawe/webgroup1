<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator</title>
</head>
<header> 
        <div class="lgbtns" style="background-color: #000000; padding: 10px; margin:0;">
	<a href="logout.php"><button name="logoutindex" type="Submit" class="btn" style="color:var(--primary);">Logout</button></a>

		</div>
	</header>

	<style type="text/css">
		.navigate{
	position: fixed;
	margin-right: 50px;
	margin-left: 250px;
}
	ul li a:hover{
	background-color: #808080;
	width: 200px;
	height: 40px;
}

.btn{
		background:var(--dark);
		color: var(--light);
		padding: 0.6rem 1.3rem;
		text-decoration: none;
		border: 0;
	}
	.btn:hover{
		background-color:var(--light);
		color: var(--dark);
	}
	:root{
		--primary:#808080;
		--dark:#000000;
		--light:#ffffff;
		--shadow:0 1px 5px rgba(104,104,104,0.8);
	}
	.sidenav{
		height: 100%;
		width: 250px;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #000000;
		overflow-x: hidden;
		padding-top: 20px;
		margin-top: 55px;
		padding-left: 15px;
	}
	h3{
		color: #ffffff;
	}
	body{
		margin:0;
	}
</style>
</head>
<body>
	<div class="sidenav">
		<h3>Rooms</h3><br>
	<a href="addroom.php">Add rooms</a><br>
	<a href="">Delete rooms</a><br>
	<a href="">View rooms</a><br>
	<a href="">Delete reservation</a><br>
	<h3> Conference Rooms</h3><br>
	<a href="conf_addroom.php">Add conference rooms</a><br>
	<a href="">View rooms</a><br>
	<a href="">Delete conference rooms</a><br>
	<a href="">Delete reservation</a><br>
	<h3> Manage Users</h3><br>
	<a href="">View users</a><br>
	<a href="">Add users</a><br>
	<a href="">Delete users</a><br>

</div>
</body>
</html>
