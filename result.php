<!DOCTYPE HTML>

<html>
	<head>
		<title>NSTU Online Admission</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/default.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	
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
								<li ><a href="choice.php">Choice Form</a></li>
								<li ><a href="s_list.php">Students List</a></li>
								<li class="current"><a href="result.php">Result</a></li>
								<li ><a href="pay.php">Payment</a></li>
								<li ><a href="login.php">Login</a></li>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				
<body>    
        <form action="" class="register">
            <h1>Result</h1>
            <fieldset class="row1">
                
                <p>
                    <label>Unit *
                    </label>
                    <select name="unit" required="1" exclude=" ">
                                  <option value=" ">--Select unit--</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                  <option value="D">D</option>
                                  </select>
                 </p>
                  <p>                   
                   <label>Admission Roll *
                    </label>
                    <input type="text"/>
                
                </p>
    
              <p>
            <div><button class="button">Search &raquo;</button></div>
            </p>
        </form>
    

<?php
$rand = rand(0,1000000000);
if (isset($_POST['name'])&& isset($_POST['roll'])&& isset($_POST['quota'])&& isset($_POST['blood'])&& isset($_POST['age'])&& isset($_POST['religion'])&& isset($_POST['sex'])&& isset($_POST['fname'])&& isset($_POST['mname'])&& isset($_POST['focup'])&& isset($_POST['fcont'])&& isset($_POST['scont'])&& isset($_POST['padd'])&& isset($_POST['pradd'])&& isset($_POST['email'])&& isset($_POST['degree'])&& isset($_POST['board'])&& isset($_POST['inst'])&& isset($_POST['grade'])&& isset($_POST['year'])&& isset($_POST['certi'])&& isset($_POST['hdegree'])&& isset($_POST['hboard'])&& isset($_POST['hinst'])&& isset($_POST['hgrade'])&& isset($_POST['hyear'])&& isset($_POST['hcerti'])) {

  include 'db_connect.php';
    $sql="INSERT INTO student_infos(s_name,admission_roll,quota,blood_group,age,
      religion,sex,f_name,m_name,f_ocup,f_contact,s_contact,pres_add,parm_add,email,s_degree,s_board,
      s_institute,s_grade,s_pass_year,s_certificate,h_degree,h_board,h_institute,h_grade,h_pass_year,h_certificate,value)
    VALUES
     ('$_POST[name]','$_POST[roll]','$_POST[quota]','$_POST[blood]','$_POST[age]','$_POST[religion]','$_POST[sex]','$_POST[fname]','$_POST[mname]','$_POST[focup]','$_POST[fcont]','$_POST[scont]','$_POST[padd]','$_POST[pradd]','$_POST[email]','$_POST[degree]','$_POST[board]','$_POST[inst]','$_POST[grade]','$_POST[year]','$_POST[certi]','$_POST[hdegree]','$_POST[hboard]','$_POST[hinst]','$_POST[hgrade]','$_POST[hyear]','$_POST[hcerti]','$rand')";
  if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo '<script>alert("Entered data successfully");</script>';
}
?>
			

			<!-- CTA -->
				

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							
							<section class="6u 12u(narrower)">
								
							</section>
						</div>
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>