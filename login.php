<?php 

//include 'db_connect.php';
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("admission", $con);

if (isset($_POST['login'])) {
	
$email=addslashes(strip_tags($_POST['email']));
$pass=addslashes(strip_tags($_POST['pass']));
if (!$email && !$pass) {

	echo "<script>alert('Enter correct email and password');</script>";
}
elseif (!$email) {
	echo "<script>alert('Enter correct email ');</script>";
}
elseif (!$pass) {
	echo "<script>alert('Enter correct  password');</script>";
}
else{
	$login=mysql_query("SELECT * FROM login WHERE e_mail='$email'");
	if (mysql_num_rows($login)==false) {
		
		echo "no such user";
	}
	else{
		while ($logrow=mysql_fetch_assoc($login)) {
			# code...
			$db_pass=$logrow['password'];
			//$pass=md5($pass);
			if ($pass!=$db_pass) {
				# code...
				echo "Your passwor is incorrect ";
			} else {
				# code...
				// $active=$logrow['active'];
				// $mail=$logrow['mail'];
				// if ($active==0) {
				// 	# code...
				// 	echo "You haven't activeted your account";
				// } else {
				// 	# code...
				// 	$_SESSION['user']=$user;
					header("Location:admin.php");
				}
				
			}
			
		}
	}
}

 ?>



<html>
	<head>
		<title>NSTU Online Admission</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">NSTU<em> Online Admission System</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="http://www.nstu.edu.bd" class="nstu"><strong>NSTU</strong></a></li>
								<li ><a href="index.php">Home</a></li>
								<li ><a href="regi.php">Registration</a></li>
								<li><a href="choice.php">Choice Form</a></li>
								<li ><a href="s_list.php">Students List</a></li>
								<li ><a href="result.php">Result</a></li>
								<li ><a href="pay.php">Payment</a></li>
								<li class="current"><a href="login.php">Login</a></li>
							</ul>
						</nav>

				</div>

			<div class="container">
	<section id="content">
		<form action="login.php" method="POST">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="email"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="pass"/>
			</div>
			<div>
				<input type="submit" value="Log in" name="login" />
				<a href="#">Lost your password?</a>
				<a href="regi.html">Register</a>
			</div>
		</form><!-- form -->
		
		
	</section><!-- content -->
</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Prothomrobi</li><li><a href="http://html5up.net">CSTE, NSTU</a></li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/jquery.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/index.js"></script>


	</body>
</html>