<!DOCTYPE HTML>

<html>
	<head>
		<title>NSTU Online Admission</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/default.css" />
		
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
								<li class="current"><a href="s_list.php">Students List</a></li>
								<li ><a href="result.php">Result</a></li>
								<li ><a href="pay.php">Payment</a></li>
								<li ><a href="login.php">Login</a></li>
							</ul>
						</nav>

				</div>

			 <form  class="register" >
            <h1>Students List</h1>

<?php 
include 'db_connect.php';
//$sear=$_POST['search'];
if (isset($_POST['search'])) {
$src=$_POST['search'];
$data="SELECT * FROM students WHERE admission_roll='$src'";
$data_qury=mysql_query($data);

while($row=mysql_fetch_assoc($data_qury)) {
echo "<table border=2 >
<tr>
<th>Admission Roll</th>
<th>Quota</th>
<th>Student Name</th>
<th>Blood</th>
<th>Age</th>
<th>Religion</th>
<th>Gender</th>
<th>Father Name</th>
<th>Mother Name</th>
<th>Father Ocupation</th>
<th>Father contact</th>
<th>Student Contact</th>
<th>present Address</th>
<th>parmanent Address</th>
<th>Email</th>
</tr>";

echo "<tr>";
echo "<td>" . $row['admission_roll'] . "</td>";
echo "<td>" . $row['quota'] . "</td>";
echo "<td>" . $row['s_name'] . "</td>";
echo "<td>" . $row['blood_group'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['religion'] . "</td>";
echo "<td>" . $row['sex'] . "</td>";
echo "<td>" . $row['f_name'] . "</td>";
echo "<td>" . $row['m_name'] . "</td>";
echo "<td>" . $row['f_ocup'] . "</td>";
echo "<td>" . $row['f_contact'] . "</td>";
echo "<td>" . $row['s_contact'] . "</td>";
echo "<td>" . $row['pres_add'] . "</td>";
echo "<td>" . $row['parm_add'] . "</td>";
echo "<td>" . $row['email'] . "</td>";

echo "<tr>";
}
echo "</table>";
}
?>
            <fieldset class="row1">
                
                
             <form action="s_list.php" method='POST' >
                <div class="form-group">
                <p>	Enter Admission Roll:</p>
                 <input type="text" name="search"  placeholder="Search by roll"/>
                </div>
              
               <p>
                 <div><button class="button">Search &raquo;</button></div>
               </p>
             </form>
                
                
    
             
        </form>

			
				

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