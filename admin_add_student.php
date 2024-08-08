<?php
extract($_POST);
session_start(); 
include("dbconnect.php");
if(isset($_POST['Submit'])) 
{ 
$name=$_REQUEST['name'];
$department=$_REQUEST['department'];
$year=$_REQUEST['year'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];

$phno=$_REQUEST['phno'];
$mailid=$_REQUEST['mailid'];
$address=$_REQUEST['address'];
$percentage=$_REQUEST['percentage'];
$age=$_REQUEST['age'];
 
 $photon=$_FILES['image']['name'];
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$qrys1="select id from  add_students ORDER BY id ASC";
$result = $conn->query($qrys1);
$sid=0;
 while($row = $result->fetch_assoc())
 {
 $sid=$row['id'];
 }
$id=$sid+1; 
$rdate=date("D-m-y");
  
 $qrys1="insert into add_students values($id,'$name','$rollno','$department','$address','$year','$fname','$mname','$phno','$mailid',$percentage,$age)";
  if ($conn->query($qrys1) === TRUE) {
  move_uploaded_file($_FILES['image']['tmp_name'],"Upload/".$photon);
  ?>					
	<script language="javascript">
	alert("Added Student  Successfully");
	window.location.href="admin_add_student.php";
	</script>
	<?php
 }
 else
{
    
 ?>					
<script language="javascript">
alert("Registration Failed");
</script>
<?php
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Training And Placement Cell Identification System</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Photo Bum Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//fonts-->

</head>
<body>

<!-- banner -->
<div id="home" class="w3ls-banner w3ls-banner-inner"> 
	<!-- header -->
	<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

				<h1>
					<a class="navbar-brand text-white" href="#"><i class="fab mr-2 fa-tripadvisor"></i>Training And Placement Cell </a>
				</h1>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-center">
						<li class="nav-item  mr-1">
							<a class="nav-link" href="admin_home.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item active mr-1">
							<a class="nav-link" href="admin_add_student.php">Add Student</a>
						</li>
						
						<li class="nav-item mr-1">
							<a class="nav-link" href="admin_invite_company.php">Invite Company</a>
						</li>
						<li  class="nav-item mr-1">
							<a  class="nav-link" href="admin_assign_cell.php">Assign Cell</a>
						</li>
						<li  class="nav-item mr-1">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>

			</nav>
	</header>
	<!-- //header -->
</div>
<!-- //banner -->

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Admin</li>
	</ol>
</nav>

<h3 class="heading text-center mb-sm-5 mb-3">Add  Students</h3>
<p>
 
</p>
<form name="form1" method="post" action="">
  
  <table width="449" height="480" border="0" align="center">
    <tr>
      <td><div align="left">Name : </div></td>
      <td><label>
        <input type="text" name="name">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Rollno : </div></td>
      <td><label>
        <input type="text" name="rollno">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Address : </div></td>
      <td><label>
        <input type="text" name="address">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Year of passing : </div></td>
      <td><label>
        <select name="year">
          <option value="2021">2021</option>
          <option value="2020" selected>2020</option>
          <option value="2019">2019</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Father name : </div></td>
      <td><label>
        <input type="text" name="fname">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Mother name : </div></td>
      <td><label>
        <input type="text" name="mname">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Phone no : </div></td>
      <td><label>
        <input type="text" name="phno">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Mail id : </div></td>
      <td><label>
        <input type="text" name="mailid">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Department : </div></td>
      <td><label>
       
        
        <br>
        <select name="department">
		<option value="">---select---</option>
        <option value="B.SC. MATHEMATICS">B.SC. MATHEMATICS</option>
        <option value="B.SC. PHYSICS">B.SC. PHYSICS</option>
        <option value="B.SC. CHEMISTRY">B.SC. CHEMISTRY</option>
        <option value="B.SC. ZOOLOGY">B.SC. ZOOLOGY</option>
        <option value="B.C.A. ">B.C.A. </option>
        <option value="B.SC. COMPUTER SCIENCE">B.SC. COMPUTER SCIENCE</option>
        <option value="M.SC. COMPUTER SCIENCE ">M.SC. COMPUTER SCIENCE </option>
        <option value="M.SC. INFORMATION TECHNOLOGY">M.SC. INFORMATION TECHNOLOGY</option>
        <option value="M.SC. MATHEMATICS ">M.SC. MATHEMATICS </option>
        <option value="M.SC. ZOOLOGY">M.SC. ZOOLOGY</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><div align="left">age : </div></td>
      <td><label>
        <input type="number" name="age">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Overall Percentage of marks : </div></td>
      <td><label>
        <input type="number" name="percentage">
        % </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit">
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p> 
  <!-- footer -->
</p>
<footer class="py-5">
	<div class="container py-md-3">
		<div class="row footer-grids">
			
		</div>
		<div class="copyright mt-5">
			<p class="text-center">© All Rights Reserved | Design by <a href="#"> Admin </a></p>
		</div>
	</div>
</footer>
<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->

	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
	<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- //move to top-js-files -->

	<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>