<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
								<li class="current"><a href="regi.php">Registration</a></li>
								<li ><a href="choice.php">Choice Form</a></li>
								<li ><a href="s_list.php">Students List</a></li>
								<li ><a href="result.php">Result</a></li>
								<li ><a href="pay.php">Payment</a></li>
								<li ><a href="login.php">Login</a></li>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				
<body>    
        <form action="" class="register">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend>Personal information
                </legend>
                <p>
                    <label>Student Name *
                    </label>
                    <input type="text"/>
                    <label>Admission Roll *
                    </label>
                    <input type="text"/>
                
                <p>
                    <label>Quota*
                    </label>
                    <select name="quota" required="1" exclude=" ">
         <option value=" ">--Select quota-- </option>
                                  <option value="Freedom Fighter">Freedom Fighter</option>
                                  <option value="Tribal">Tribal</option>
                                  <option value="Physical Disorder">Physical Disorder</option>
                                  <option value="Null">Null</option>
       </select>

                    <label>Blood Gropu*
                    </label>
                    <select name="blood" required="1" exclude=" ">
         <option value=" ">--Select group-- </option>
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="O+">O+</option>
                                  <option value="O-">O-</option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>

       </select>
       <p>
                    <label>Age *
                    </label>
                    <input type="text"/>
                    <label>Religion *
                    </label>
                    <select name="religion" required="1" exclude=" ">
             <option value=" ">Select religion--</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Buddish">Buddish</option>
                                  <option value="Khristain">Khristain</option>
           </select>
       </p>
       <p>
                    <label>Gender *
                    </label>
                    <select name="sex" required="1" exclude=" ">
          <option value=" ">Select gender-- </option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
         </select>
                    <label>Contact *
                    </label>
                    <input type="text"/>
       </p>
       <p>
                    <label>Email *
                    </label>
                    <input type="text"/>
       

                    <label class="obinfo">* obligatory fields
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Parents Information
                </legend>
                <p>
                    <label> Father Name *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Ocupation *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Mother Name *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Father Cell *
                    </label>
                    <input type="text" maxlength="11"/>
                </p>
                
                
                
            </fieldset>
            <fieldset class="row3">
                <legend>Address
                </legend>
                <p>
                     <label>Present *
                    </label>
                    <input type="text" class="long"/>
                     <label>Parmanent *
                    </label>
                    <input type="text" class="long"/>
                </p>
                
                
            </fieldset>
            <fieldset class="row4">
                <legend>Educational Information
                </legend>
                <p>
                	
                     <strong>SSC</strong> <br>
                     <label>Degree *
                    </label>
                   <select name="degree" required="1" exclude=" ">
            <option value=" ">--Select degree--</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
         </select>
                </p>
                <p>
                   <label>Board *
                    </label>
                    <select name="board" required="1" exclude=" ">
            <option value=" ">--Select board--</option>
                                  <option value="Dhaka">Dhaka</option>
                                  <option value="Chittagong">Chittagong</option>
                                  <option value="Rajshahi3">Rajshahi</option>
                                  <option value="Barishal">Barishal</option>
                                  <option value="Comilla">Comilla</option>
                                  <option value="Dinajpur">Dinajpur</option>
                                  <option value="Jossor">Jossor</option>
                                  <option value="Sylhet">Sylhet</option>
                                  <option value="Madrasha">Madrasha</option>
                                  <option value="TEC">TEC</option>

          </select> 
                </p>
                <p>
                    <label>Institute *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>GPA *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Passing Year *
                    </label>
                    <select  name="hyear"  required="1" exclude=" ">
                                  <option value=" ">--Select year--</option>
                                  <option value="2010">2010</option>
                                   <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                </select> 
                </p>
                <p>
                    <label>Certificate *
                    </label>
                    <input type="file" name = "hcerti" required="1">
                </p>
            </fieldset>
             <fieldset class="row5">
                
                
                <p>
                	
                     <strong>HSC</strong> <br>
                     <label>Degree *
                    </label>
                   <select name="degree" required="1" exclude=" ">
            <option value=" ">--Select degree--</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
         </select>
                </p>
                <p>
                   <label>Board *
                    </label>
                    <select name="board" required="1" exclude=" ">
            <option value=" ">--Select board--</option>
                                  <option value="Dhaka">Dhaka</option>
                                  <option value="Chittagong">Chittagong</option>
                                  <option value="Rajshahi3">Rajshahi</option>
                                  <option value="Barishal">Barishal</option>
                                  <option value="Comilla">Comilla</option>
                                  <option value="Dinajpur">Dinajpur</option>
                                  <option value="Jossor">Jossor</option>
                                  <option value="Sylhet">Sylhet</option>
                                  <option value="Madrasha">Madrasha</option>
                                  <option value="TEC">TEC</option>

          </select> 
                </p>
                <p>
                    <label>Institute *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>GPA *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Passing Year *
                    </label>
                    <select  name="hyear"  required="1" exclude=" ">
                                  <option value=" ">--Select year--</option>
                                  <option value="2010">2010</option>
                                   <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                </select> 
                </p>
                <p>
                    <label>Certificate *
                    </label>
                    <input type="file" name = "hcerti" required="1">
                </p>
    
            
            <div><button class="button">Register &raquo;</button></div>
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
			

			

			<!-- Footer -->
				<div id="footer">
				
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
			<script src="assets/js/jsval.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>