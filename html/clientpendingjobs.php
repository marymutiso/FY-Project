<?php
//including the database connection file
include_once("check.php");
echo $curruser = $_SESSION['username'];

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$sql = "SELECT jobID, workerFname, workerSname, jobDescription, jobDate, totalCost, clientJobStatus FROM tbljoborders WHERE clientUsername='$curruser' AND (clientJobStatus ='pending' OR workerJobStatus = 'pending' OR clientJobStatus ='confirmed' OR workerJobStatus = 'confirmed') ORDER BY jobID DESC"; // using mysqli_query instead
	$result= mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="../css/background.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>User account Home</title>
	<style type="text/css">
		.error{
		color:red;
		font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
		font-size:16px;
	}

	able {
	    font-family: arial, sans-serif !important;
	    border-collapse: collapse !important;
	    width: 100% !important;
	}

	td, th {
	    border: 1px solid #dddddd !important;
	    text-align: center !important;
	    padding: 8px !important;

	}

	tr:nth-child(even) {
	    background-color: #dddddd !important;
	}
	</style>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<title>Homepage</title>
</head>

<body>
<div class="container">
<nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../index.php">Grooming Parlor</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="../index.php">Home</a></li>
				<li><a href="#">about Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
				<!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
				<li><a title = "click to views your profile" href="#"><span class="glyphicon glyphicon-user"></span><span class="userloggedin"><strong> <?php echo $login_user;?></strong></span><span ></span></a></li>

				<li><a href="workerlogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout<span></span></a></li>
			</ul>
		</div>
	</div>

</nav>
<br/>
<br/>
<!--<a href="add.html">Add New Data</a><br/><br/>-->
	<legend style="text-align: center;">Pending Orders List</legend>
	<table width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Order number</td>
		<td colspan="2">Served by</td>
		<td>Description </td>
		<td>Date</td>
		<td>Cost</td>
		<td>Current Status</td>
		<td>Decision Status</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td width='10%'>".$res['jobID']."</td>";
		echo "<td>".$res['workerFname']."</td>";
		echo "<td>".$res['workerSname']."</td>";
		echo "<td>".$res['jobDescription']."</td>";
		echo "<td>".$res['jobDate']."</td>";
		echo "<td>".$res['totalCost']."</td>";
		echo "<td>".$res['clientJobStatus']."</td>";	
		echo "<td><a href=\"../php/clientjobconfirmation.php?id=$res[jobID]\">Confirm Bookng</a> | <a href=\"../php/clientjobcancellation.php?id=$res[jobID]\" onClick=\"return confirm('Are you sure you want to cancel the and get a refund?')\">Clear Booking</a></td>";
		echo "</tr>";		
	}
	?>
	</table>
	<footer class=" site-footer navbar navbar-fixed-bottom navbar-inverse container-fluid">
	    <div id="theContent">
	        <div class="col-md-12 col-sm-12">

	        </div>
	        <div class="gridInfo col-md-3 col-sm-3">
	            <h5>Help & support</h5>
	            <ul >
	                <li><a href="#">Home</a></li>
	                <li><a href="#">About Us</a></li>
	                <li><a href="#">Contact US</a></li>
	            </ul>
	        </div>

	        <div class="gridInfo col-md-3 col-sm-3">
	            <h5>Social Media</h5>
	            <ul>
					<li><img src="../icons/Facebook_32.png"></span></li>
					<li><img src="../icons/Twitter_32.png"></span></li>
				<ul>
	        </div>
	    </div>    
	</footer>
</div>
</body>
</html>