<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$sql1 = "SELECT jobID, clientID, clientUsername, clientFname, clientSname, clientEmail, workerID, workerUsername, workerFname, workerSname, workerEmail, jobDescription, jobDate, totalCost, paymentCode, clientLocLatitude, clientLocLongitude, clientJobStatus, workerJobStatus, clientPhone, workerPhone FROM tbljoborders ORDER BY jobID DESC"; // using mysqli_query instead
	$result= mysqli_query($db,$sql1);
?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.error{
		color:red;
		font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
		font-size:16px;
	}
	table {
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
	<title>Admin Orders</title>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="adminpanel.php">GROOMING PARLOR</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="adminpanel.php">Dashboard</a></li>
            <li><a href="#about">pages</a></li>
            <li><a href="#contact">posts</a></li>
            <li><a href="#contact">users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Welcome Joxide</a></li>
            <li><a href="#about"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br>
    <br>
    <header style="position: fixed;" id="header">
	    <div class="container">
		    <div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>site management</small></h1>
				</div>
				<div class="col-md-2">
					<div class="dropdown create">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    Create content
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="#">Add Order</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="adminpanel.php">Back to home page</a></li>
					  </ul>
					</div>
				</div>		
		    </div>
	    </div><!-- /.container -->
	</header>
	<br>
	<br>
	<br>
	<br>
<!--<a href="add.html">Add New Data</a><br/><br/>-->
	<!--<legend style="text-align: center; position: relative;">Clients List</legend>-->
	<table width='100%' style="border: ">
		<caption><legend style="text-align: center; position: relative;">Orders List</legend></caption>
	<tr bgcolor='#CCCCCC'>
		<th>jobID</td>
		<th>Client's ID</td>
		<th>Client's Username</td>
		<th colspan="2">client's name</td>
		<th>Client's Email</td>
		<th>WorkerID</td>
		<th>Worker's Username</td>
		<th colspan="2">Worker's Name</td>
		<th>Worker Email</td>
		<th>Description</td>
		<th>Date</td>
		<th>Cost</td>
		<th>M-pesa Code</td>
		<th colspan="2">Client coordinates</td>
		<th>client Job Status</td>
		<th>worker Job Status</td>
		<th>Client Phone no.</td>
		<th>Worker Phone</td>
		<th colspan="2">options</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['jobID']."</td>";
		echo "<td>".$res['clientID']."</td>";
		echo "<td>".$res['clientUsername']."</td>";
		echo "<td>".$res['clientFname']."</td>";
		echo "<td>".$res['clientSname']."</td>";
		echo "<td>".$res['clientEmail']."</td>";
		echo "<td>".$res['workerID']."</td>";
		echo "<td>".$res['workerUsername']."</td>";	
		echo "<td>".$res['workerFname']."</td>";	
		echo "<td>".$res['workerSname']."</td>";	
		echo "<td>".$res['workerEmail']."</td>";	
		echo "<td>".$res['jobDescription']."</td>";
		echo "<td>".$res['jobDate']."</td>";
		echo "<td>".$res['totalCost']."</td>";	
		echo "<td>".$res['paymentCode']."</td>";	
		echo "<td>".$res['clientLocLatitude']."</td>";
		echo "<td>".$res['clientLocLongitude']."</td>";
		echo "<td>".$res['clientJobStatus']."</td>";
		echo "<td>".$res['workerJobStatus']."</td>";
		echo "<td>".$res['clientPhone']."</td>";
		echo "<td>".$res['workerPhone']."</td>";				
		echo "<td width='30'><a href=\"editorders.php?id=$res[jobID]\">Edit</a> | <a href=\"deleteorders.php?id=$res[jobID]\" onClick=\"return confirm('Are you sure you want to delete the order from the list?')\">Delete</a></td>";
		echo "</tr>";		
	}/*else{
		 printf("Error: %s\n", mysqli_error($db));
	}*/
	?>
	</table>
	<br>
	<br>
	<br>
	<footer class=" site-footer navbar navbar-inverse container-fluid">
	    <div id="theContent">
	        <div class="col-md-12 col-sm-12">

	        </div>
	        <div class="gridInfo col-md-3 col-sm-3">
	            <h5>Help & support</h5>
	            <ul >
	                <li><a href="#">Home</a></li>
	                <li><a href="#">How it works</a></li>
	                <li><a href="#">About Us</a></li>
	                <li><a href="#">Contact US</a></li>
	            </ul>
	        </div>

	        <div class="gridInfo col-md-3 col-sm-3">
	            <h5>Social Media</h5>
	        </div>
	    </div>    
	</footer>
</div>
</body>
</html>