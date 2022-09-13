<?php
include_once("../html/check.php");
echo $id = $_GET['id'];

		$sql = "update tbljobOrders set workerJobStatus ='confirmed' WHERE jobID ='$id'"; 

	   	//mysqli_query($db,$sql);
	   if (mysqli_query($db,$sql) == TRUE) 
     {
           echo "New record created successfully";

           $sql1 = "SELECT  jobID, workerID, workerFname, workerSname, totalCost, workerPhone FROM tbljobOrders WHERE jobID='$id' AND (clientJobStatus='confirmed' AND workerJobStatus='confirmed')";

           $result = mysqli_query($db, $sql1);

           $row = mysqli_fetch_assoc($result);


           if (mysqli_num_rows($result) > 0) {
               echo $jobID = $row['jobID'];
               echo $workerID = $row['workerID'];
               echo $workerFname = $row['workerFname'];
               echo $workerSname = $row['workerSname'];
               echo $totalCost = $row['totalCost'];
               echo $workerPhone = $row['workerPhone'];

               $sql2 = "INSERT INTO tblpayment (workerID, workerFname, workerSname, jobID, paymentAmount, workerPhone)
		   		     VALUES ('$workerID','$workerFname','$workerSname','$jobID','$totalCost','$workerPhone')";

               if(mysqli_query($db, $sql2)==TRUE) {
                echo "paymenttable table updated";
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
                    header("location: ../html/workerpendingjobs.php");
                  }

               }else{
                   header("location: ../html/workerpendingjobs.php");
               }
            }else{
              header("location: ../html/workerpendingjobs.php");
            } 
      }
      else
      {
          header("location: ../html/workerpendingjobs.php");
      }      
?>