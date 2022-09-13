<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Admin New client</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="stylesheet" href="../css/clientReg.css">
        <style type="text/css">
          #map{ 
          	width: 580px; 
          	height: 350px;
          	border: 1px solid green;
          }
        </style>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiBRKFRQvYcetiPIotdfje3IVhQRIHcOc" type="text/javascript"></script>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GROOMING PARLOR</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
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
    <header id="header">
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
					    <li><a href="addclients.php">Add client</a></li>
					    <li><a href="addworkers.php">Add worker</a></li>
					    <!--<li><a href="#addorders.php">Add job order</a></li>-->
					    <!--<li><a href="#addpayment.php">Add new payment record</a></li>-->
					    <!--<li><a href="#addrefunds.php">Add new refund record</a></li>-->
					    <li role="separator" class="divider"></li>
					    <li><a href="adminpanel.php">Back to home page</a></li>
					  </ul>
					</div>
				</div>		
		    </div>
	    </div><!-- /.container -->
	</header>

	<section id="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="active">Create New Client</li>
			</ol>
		</div>
	</section>
		<div class="container">
			<div class="col-sm-6 col-md-6">
                <h4 align="center">Client Registration</h4>
                <p align="center">kindly enter the required personal information to register for our services</p>
                <p align="center">Each slot in the form below must be filled</p>
                <form action="../php/insertclient.php" method="post">
                    <fieldset>
                        <legend style="text-align: center">Personal info</legend>
                    <div class="form-group col-xs-3">
                        <label for="fName">First Name:</label>
                        <input type="text" class="form-control" id="fName" name="fName" autofocus required title="Please enter your first name">
                    </div>
                    <div class="form-group col-xs-3">
                        <label for="sName">Second Name:</label>
                        <input type="text" class="form-control" id="sName" name="sName" required title="Please enter your second name">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="userName">User name:</label>
                        <input type="text" class="form-control" id="userName" name="userName" required title="Please enter your preferred user name">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="email">Email address:</label>
                        <input type="text" class="form-control" id="email" name="email" required pattern="[a-zA-Z0-9]{3,}@[a-zA-z]{3,}[.]{1}[a-zA-Z]{3,}" title="please enter a valid email adress for example: jack@example.com">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="phoneNo">Phone Number:</label>
                        <input type="text" class="form-control" id="phoneNo" name="phone" minlength="10" maxlength="10" required title="Please enter phone number such as 07XX-XXXXXX">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="county">County:</label>
                        <input list="county" class="form-control" name="county" required title="Enter your county of residence">
                        <datalist id="county">
                            <option value="Baringo">
                            <option value="Bomet">
                            <option value="Bungoma">
                            <option value="Busia">
                            <option value="Elgeyo Marakwet">
                            <option value="Embu">
                            <option value="Garissa">
                            <option value="Homabay">
                            <option value="Isiolo">
                            <option value="Kajiado">
                            <option value="Kakamega">
                            <option value="Kericho">
                            <option value="Kiambu">
                            <option value="Kilifi">
                            <option value="Kirinyaga">
                            <option value="Kisii">
                            <option value="Kisumu">
                            <option value="Kitui">
                            <option value="Kwale">
                            <option value="Laikipia">
                            <option value="Lamu">
                            <option value="Machakos">
                            <option value="Makueni">
                            <option value="Mandera">
                            <option value="Meru">
                            <option value="Migori">
                            <option value="Marsabit">
                            <option value="Mombasa">
                            <option value="Muranga">
                            <option value="Nairobi">
                            <option value="Naivasha">
                            <option value="Nakuru">
                            <option value="Nandi">
                            <option value="Narok">
                            <option value="Nyamira">
                            <option value="Nyandarua">
                            <option value="Nyeri">
                            <option value="Samburu">
                            <option value="Siaya">
                            <option value="Taita Taveta">
                            <option value="Tana River">
                            <option value="Tharaka Nithi">
                            <option value="Trans Nzoia">
                            <option value="Turkana">
                            <option value="Uasin Gishu">
                            <option value="Vihiga">
                            <option value="Wajir">
                            <option value="West Pokot">
                           ">

                        </datalist>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="constituency">Constituency:</label>
                        <input list="constituency" class="form-control" name="constituency" required title="enter your constiturncy of residence">
                        <datalist id="constituency">
                            <option value="Baringo East">
                            <option value="Baringo West">
                            <option value="Baringo central">
                            <option value="Mochongoi">
                            <option value="Mogotio">
                            <option value="Eldama Ravine">
                            <option value="Mt Elgon">
                            <option value="Sirisia">
                            <option value="Kabuchia">
                            <option value="Bumula">
                            <option value="Kandunyi">
                            <option value="Webuye">
                            <option value="Bokoli">
                            <option value="Kimilili">
                            <option value="Tongaren">
                            <option value="Sotik">
                            <option value="Chepalungu">
                            <option value="Bomet East">
                            <option value="Bomet Central">
                            <option value="Konoin">
                            <option value="Teso North">
                            <option value="Teso South">
                            <option value="Nambale">
                            <option value="Matayos">
                            <option value="Butula">
                            <option value="Funyula">
                            <option value="Budalangi">
                            <option value="Marakwet East">
                            <option value="Marakwet West">
                            <option value="Keiyo East">
                            <option value="Keiyo South">
                            <option value="Manyatta">
                            <option value="Runyenjes">
                            <option value="Gachoka">
                            <option value="Siakago">
                            <option value="TaveDujis">
                            <option value="Balambala">
                            <option value="Lagdera">
                            <option value="Daadad">
                            <option value="Fafi">
                            <option value="Ijara">
                            <option value="Kasipul Kabondo">
                            <option value="Karachuonyo">
                            <option value="Rangwe">
                            <option value="Homabay Town">
                            <option value="Dhiwa">
                            <option value="Mbita">
                            <option value="Gwasii">
                            <option value="Isiolo North">
                            <option value="Isiolo South">
                            <option value="Lugari">
                            <option value="likuyani">
                            <option value="Malava">
                            <option value="Lurambi">
                            <option value="Makholo">
                            <option value="Mumias">
                            <option value="Mumias East">
                            <option value="Matungu">
                            <option value="Butere">
                            <option value="Khwisero">
                            <option value="Shinyalu">
                            <option value="Ikolomani">
                            <option value="Navakholo">
                            <option value="Ainamoi">
                            <option value="Belgut">
                            <option value="Kipkelion">
                            <option value="Gatundu South">
                            <option value="Gatundu North">
                            <option value="Juja">
                            <option value="Thika Town">
                            <option value="Ruiru">
                            <option value="Githunguri">
                            <option value="Kiambu">
                            <option value="Kiambaa">
                            <option value="Kabete">
                            <option value="Kikuyu">
                            <option value="Limuru">
                            <option value="Lari">
                            <option value="Kilifi North">
                            <option value="Kilifi South">
                            <option value="Kaloleni">
                            <option value="Rabai">
                            <option value="Ganze">
                            <option value="Kitui Town">
                            <option value="Mutitu">
                            <option value="Kitui South">
                            <option value="Msambweni">
                            <option value="Lunga Lunga">
                            <option value="Matuga">
                            <option value="Kinango">
                            <option value="Laikipia West">
                            <option value="Laikipia North">
                            <option value="Laikipia East">
                            <option value="Lamu East">
                            <option value="Lamu West">
                            <option value="Masinga">
                            <option value="Yatta">
                            <option value="Kangundo">
                            <option value="Matungulu">
                            <option value="Kathiani">
                            <option value="Mavoko">
                            <option value="Machakos Town">
                            <option value="Mwala">
                            <option value="Mbooni">
                            <option value="Kilome">
                            <option value="Kaiti">
                            <option value="Makueni">
                            <option value="Kibwezi West">
                            <option value="Kibwezi East">
                            <option value="Mandera West">
                            <option value="Mandera South">
                            <option value="Lafey">
                            <option value="Moyale">
                            <option value="North Horr">
                            <option value="Saku">
                            <option value="Laisamis">
                            <option value="Igembe South">
                            <option value="Igembe Central">
                            <option value="Igembe North">
                            <option value="Tigania West">
                            <option value="Tigania East">
                            <option value="North Imenti">
                            <option value="South Imenti">
                            <option value="Rongo">
                            <option value="Awendo">
                            <option value="Migori East">
                            <option value="Migori West">
                            <option value="Uriri">
                            <option value="Nyatike">
                            <option value="Kuria East">
                            <option value="Kuria West">
                            <option value="Changamwe">
                            <option value="Jomvu">
                            <option value="kisauni">
                            <option value="Nyali">
                            <option value="Likoni">
                            <option value="Mvita">
                            <option value="Kwale">
                            <option value="Kangema">
                            <option value="Mathioya">
                            <option value="Kiharu">
                            <option value="Kigumo">
                            <option value="Maragwa">
                            <option value="Kandara">
                            <option value="Gatanga">
                            <option value="Weastlands">
                            <option value="Parklands">
                            <option value="Dagoretti">
                            <option value="Karen">
                            <option value="Langata">
                            <option value="Kibra">
                            <option value="Roysambu">
                            <option value="Kasarani">
                            <option value="Ruaraka">
                            <option value="Karionangi">
                            <option value="Kayole">
                            <option value="Embakasi">
                            <option value="Mihango">
                            <option value="Nairobi West">
                            <option value="Makadara">
                            <option value="Kamukunji">
                            <option value="Starehe">
                            <option value="Mathare">
                            <option value="Molo">
                            <option value="Njoro">
                            <option value="Naivasha">
                            <option value="Gilgil">
                            <option value="Kuresoi South">
                            <option value="Kuresoi North">
                            <option value="Subukia">
                            <option value="Rongai">
                            <option value="Bahati">
                            <option value="Nakuru Town West">
                            <option value="Nakuru Town East">
                            <option value="Tinderet">
                            <option value="Aldai">
                            <option value="Nandi Hills">
                            <option value="Emgewen North">
                            <option value="Emgwen South">
                            <option value="Mosop">
                            <option value="Kilgoris">
                            <option value="Emurua Dikirr">
                            <option value="Narok North">
                            <option value="Kajiado East">
                            <option value="Kajiado West">
                            <option value="Kitutu Masaba">
                            <option value="North Mugirango">
                            <option value="West Mugirango">
                            <option value="Kinangop">
                            <option value="Kipipiri">
                            <option value="Ol-Kalou">
                            <option value="Ol-Jororok">
                            <option value="Ndaragwa">
                            <option value="Tetu">
                            <option value="Kieni">
                            <option value="Mathira">
                            <option value="Othaya">
                            <option value="Mukurwe-Ini">
                            <option value="Nyeri Town">
                            <option value="Samburu West">
                            <option value="Samburu North">
                            <option value="Samburu East">
                            <option value="Ugenya">
                            <option value="Ugunja">
                            <option value="Alego">
                            <option value="Usonga">
                            <option value="Gem">
                            <option value="Bondo">
                            <option value="Rarieda">
                            <option value="Tavete">
                            <option value="Wundanyi">
                            <option value="Mwatate">
                            <option value="Voi">
                            <option value="Garsen">
                            <option value="Galole">
                            <option value="Bura">
                            <option value="Niithi">
                            <option value="Maara">
                            <option value="Tharaka">
                            <option value="Kwanza">
                            <option value="Endebess">
                            <option value="Saboti">
                            <option value="Kiminini">
                            <option value="Cherenganyi">
                            <option value="Turkana North">
                            <option value="Turkana West">
                            <option value="Turkana Central">
                            <option value="Turkana East">
                            <option value="Turkana South">
                            <option value="Loima">
                            <option value="Eldoret East">
                            <option value="Eldoret North">
                            <option value="Eldoret South">
                            <option value="Vihiga">
                            <option value="Sabatia">
                            <option value="Hamisi">
                            <option value="Emuhaya">
                            <option value="Luanda">
                            <option value="Wajir North">
                            <option value="Wajir East">
                            <option value="Tarbaj">
                            <option value="Wajir West">
                            <option value="Eldas">
                            <option value="Wajir South">
                            <option value="Kapenguria">
                            <option value="Sigor">
                            <option value="Kacheliba">
                            <option value="Pokot South">
                        </datalist>
                    </div>

                    <div class="form-group col-xs-6">
                        <label for="passWord">Password:</label>
                        <input type="password" class="form-control" id="passWord" name="clientPassWord" required title="please enter a preferred user password">
                    </div>
                    <div class="form-group col-xs-9">
                        <label for="securityQuestion">Secuity question:</label>
                        <select class="form-control" id="securityQuestion" name="securityQuestion" required title="Please enter your first name">
                            <option>What was the house number and street name you lived in as a child?</option>
                            <option>What were the last four digits of your childhood telephone number?</option>
                            <option>What primary school did you attend?</option>
                            <option>In what town or city was your first full time job?</option>
                            <option>In what town or city did you meet your spouse/partner?</option>
                            <option>What is the middle name of your oldest child?</option>
                            <option>What are the last five digits of your driver's licence number?</option>
                            <option>What is your grandmother's (on your mother's side) maiden name?</option>
                            <option>What is your spouse or partner's mother's maiden name?</option>
                            <option>In what town or city did your mother and father meet?</option>
                            <option>What time of the day were you born? (hh:mm)</option>
                            <option>What time of the day was your first child born? (hh:mm)</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-3">
                        <label for="securityAnswer">Answer:</label>
                        <input type="text" class="form-control" id="securityAnswer" name="securityAnswer" required title="Please enter a secure answer for your security question.">
                    </div>
                    <br>
                    <br>
                    <div class="clearfix"></div>
                    <p>
                        <strong>Please pinpoint your location on the map for easy navigation to your premises</strong>
                    </p>
                    <div id="map"></div>
                    <br>
                    <br>
                    <div class="form-group col-xs-6">
                         <label for="lat">latitude:</label>
                         <input type="text" id="lat" readonly="yes" name="latitude" class="form-control"><br><br>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="lng">Longitude:</label>
                        <input type="text" id="lng" readonly="yes" name="longitude" class="form-control">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-info btn-block">Register</button>
                    </fieldset>
                </form>
                <script type="text/javascript" src="map.js"></script>
                <br>
                <br>
            </div>
        </div>
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>












