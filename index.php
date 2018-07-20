<?php
include "curl.php";
// $message_count = $obj->{'unread_messages'};
?>


<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/ajax.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ NAV Bar---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">

  <nav class="navbar navbar-default nav-menu">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".button-menu">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Home Page</a>
	</div>

	<div class="collapse navbar-collapse button-menu">
		<ul class="nav navbar-nav ">
            <li><a href="#"><i class="fa fa-home"></i> HOME</a></li>
            <li><a href="#">BILLER</a></li>
            <li><a href="#">USERS</a></li>
            <li><a href="#">OFFICES</a></li>
		</ul>

        <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>Unread Notifications: <?php echo $obj->{'unread_messages'}?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Messages: <?php echo $obj->{'unread_messages'}?> </strong></p>
                                        <p class="text-left small">justdemo@gmail.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                        	<a href="#" class="btn btn-primary btn-block">My Profile</a>
                                            <a href="#" class="btn btn-danger btn-block">Change Password</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

	</div>

  </nav>
</div>


</head>
<body>
<!-- Header -->

<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <div class="intro-text">
              <h1>Beekeeper</h1>
              <p>Test Application 1</p>
              <a href="#portfolio" class="btn btn-custom btn-lg page-scroll">Portfolio</a> <a href="#contact" class="btn btn-custom btn-lg page-scroll"></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>


<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
function processFile() {
 var fileSize = 0;
 var theFile = document.getElementById("myFile").files[0];
 if (theFile) {
 var table = document.getElementById("myTable");
 var headerLine = "";
 var myReader = new FileReader();
 myReader.onload = function(e) {
 var content = myReader.result;
 var lines = content.split("\r");
 for (var count = 0; count < lines.length; count++) {
 var row = document.createElement("tr");
 var rowContent = lines[count].split(",");
 for (var i = 0; i < rowContent.length; i++) {
 if (count == 0) {
 var cellElement = document.createElement("th");
 } else {
 var cellElement = document.createElement("td");
 }
 var cellContent = document.createTextNode(rowContent[i]);
 cellElement.appendChild(cellContent);
 row.appendChild(cellElement);
 }
 myTable.appendChild(row);
 }
 }
 myReader.readAsText(theFile);
 }
 return false;
}
</script>
</body>
</html>
