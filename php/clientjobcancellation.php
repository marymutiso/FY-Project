<?php
include_once("../html/check.php");
echo $id = $_GET['id'];

$sql = "update tbljobOrders set clientJobStatus ='cancelled', workerJobStatus='cancelled' WHERE jobID ='$id'"; 

		   		mysqli_query($db,$sql);
		   		if (mysqli_query($db,$sql) == TRUE){
		   			echo  "New record created successfully";

		   			$sql1 = "SELECT jobID, clientID, clientFname, clientSname, totalCost, clientPhone FROM tbljobOrders WHERE jobID='$id' AND clientJobStatus='cancelled'";

		   			$result= mysqli_query($db,$sql1);


					
					/*$result= mysqli_query($db,$sql);

					/*if($result)
					{
						echo "not null";
					}
					else
						echo mysqli_error($db);*/

					$row= mysqli_fetch_assoc($result);
					
					
					if(mysqli_num_rows($result) > 0)
					{
						echo $jobID=$row['jobID'];
						echo $clientID=$row['clientID'];
						echo $clientFname=$row['clientFname'];
						echo $clientSname=$row['clientSname'];
						echo $totalCost=$row['totalCost'];	
						echo $clientPhone=$row['clientPhone']; 

						$sql2 = "INSERT INTO tblrefunds (clientID, clientFname, clientSname, jobID, refundAmount, clientPhone)
				   		VALUES ('$clientID','$clientFname','$clientSname','$jobID','$totalCost','$clientPhone')";

				   		if(mysqli_query($db,$sql2)==TRUE){
				   			echo  "New record created successfully";
				   			$sql = "SELECT * FROM tbljoborders WHERE jobID = '$id'";

							$result = mysqli_query($db,$sql);
							$row= mysqli_fetch_assoc($result);

							if ($row > 0) {

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
				   		}else{
				   			echo "Error: " . $sql2 . "<br>" . $db->error;
				   		}
				   	}


		   				//header("location: refundmail.php? jobid = $id");

		   			}else {
		   			echo "Error: " . $sql . "<br>" . $db->error;	
		   		}

		   


?>