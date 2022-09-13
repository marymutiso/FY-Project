<?php
include('../html/check.php');
echo $passedjobid=$_GET['jobid'];
echo 'welcome';

		//$sql = "SELECT clientID,clientFname,clientSname,clientEmail,workerID,workerFname,workerSname,workerEmail,jobDescription,jobDate,totalCost,clientLocLatitude,clientLocLongitude,clientPhone,workerPhone FROM tbljoborders WHERE jobID = '$passedjobid'";
			$sql = "SELECT * FROM tbljoborders WHERE jobID = '$passedjobid'";

			$result = mysqli_query($db,$sql);
			$row= mysqli_fetch_assoc($result);

			if ($row > 0){

					echo $jobID = $row['jobID'];
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
				}else {
				   		echo "Error: " . $sql . "<br>" . $db->error;	
				}
?>