<?php
include('bookjob.php');


			$sql = "SELECT clientID,clientFname,clientSname,clientEmail,workerID,workerFname,workerSname,workerEmail,jobDescription,jobDate,totalCost,clientLocLatitude,clientLocLongitude,clientPhone,workerPhone FROM tbljoborders WHERE clientUsername = '$curruser' ORDER BY jobID DESC";

			$result = mysqli_query($db,$sql);

			$row = mysqli_fetch_assoc($result);

		if (mysqli_fetch_assoc($result) > 0) {

			echo $clientID = $row['clientID'];
			echo $clientFname = $row['clientFname'];
			echo $clientSname = $row['clientSname'];
			echo $clientEmail = $row['clientEmail'];
			echo $workerID = $row['workerID'];
			echo $workerFname = $row['workerFname'];
			echo $workerSname = $row['workerSname'];
			echo $workerEmail = $row['workerEmail'];
			echo $jobDescription = $row['jobDescription'];
			echo $jobDate = $row['jobDate'];
			echo $totalCost = $row['totalCost'];
			echo $clientLocLatitude = $row['clientLocLatitude'];
			echo $clientLocLongitude = $row['clientLocLongitude'];
			echo $clientPhone = $row['clientPhone'];
			echo $workerPhone = $row['workerPhone']; 
		}else{

		}

header("location: ../html/home.php");
?>