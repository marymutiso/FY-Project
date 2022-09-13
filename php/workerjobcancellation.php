<?php
include_once("../html/check.php");
echo $id = $_GET['id'];

$sql = "update tbljobOrders set workerJobStatus ='cancelled', clientJobStatus='cancelled' WHERE jobID ='$id'"; 

		   		mysqli_query($db,$sql);
		   		if (mysqli_query($db,$sql) == TRUE){
		   			echo  "New record created successfully";
		   		$sql3 = "SELECT * FROM tbljoborders WHERE jobID = '$id'";

                $result = mysqli_query($db,$sql3);
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
                        echo "Error: " . $sql3 . "<br>" . $db->error;  
                  }


?>