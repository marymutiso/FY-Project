<?php	

			include('bookjob.php');

			$clientlocationlink = "https://www.google.com/maps/dir/?api=1&destination= $clientLocLatitude','$clientLocLongitude"

			$messageclient= "Hello Mr/Mr.$clientFname,
            <br /> <br />
            Thank you, for choosing us to serve you,
            <br/> <br />
            This mail sent to you to notify that the your match has been found kindly complete the payment procedure for your order to be finalized.
            <br /> <br />
            Thankyou.";

            $messageworker= "Hello Mr/Mr.$workerFname,
            <br /> <br />
            Thank you, for choosing us to work with us,
            <br/> <br />
            This mail sent to you to notify that the you have been chosen to attend to our client $clientFname $clientSname.
            The job description is: $jobDescription. You are required to deliver the servive on $jobDate.<br><br>
            After completion of the task kindly login to your account and confirm the duty.<br>
            If you are facing any issues that might prevent you from delivering the service then ensure that you will login to your account and cancel the job order before the specified date.a<br><br> 
            You can navigate to the clients premises using the following link:<br><br>$clientlocationlink
            
            <br /> <br />
            Thankyou."
?>					

