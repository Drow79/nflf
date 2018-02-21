<!DOCTYPE html>
<html>
<head>
    <title>North Florida Literacy Festival</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="stylesheet.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script src="javascript.js" type="text/javascript"></script>
        
        
        
        </head>
<body>
   <div id="page-container">
      <div class="container vertical-align-middle">
         <h1 class="title"><img src="North Florida Literacy Festival.png" alt="North Florida Literacy Festival"></h1>
          <br />
           <!-- The overlay -->
            <div id="myNav" class="overlay">

                <!-- Button to close the overlay navigation -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <!-- Overlay content -->
                <div class="overlay-content">
                    <a href="index.html">Home</a>
                    <a href="authors.html">Authors</a>
                    <a href="events.html">Event Schedule</a>
                    <!-- <a href="tan.html">TAN</a> -->
                    <a href="about.html">About Us</a>
                    <!-- <a href="vendors.html">Vendor Info</a> -->
                    <!-- <a href="sponsors.html">Sponsors</a> -->
                </div>

            </div>

            <!-- Use any element to open/show the overlay navigation menu -->
           <center><button class="btn cyan-highlight" onclick="openNav()">&#9776; Open Navagation</button></center>
         <div class="hr"></div>
        
        `  <center>
          <p>Fill out the form below to send an email.</p>
		  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Name:<br />
			<input type="text" name="fname" value="Name" size="50" /><br />
			E-mail:<br />
			<input type="text" name="fmail" value="Your E-mail" size="50" /><br /><br />
			Comment:<br />
			<textarea name="ftext"  rows="20" cols="40">Your question or message here</textarea><br /><br />
			<input type="submit" value="Send" />
			<input type="reset" value="Reset" />
			</form></center>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of fields
                    $fname = $_POST['fname'];
                    $fmail = $_POST['fmail'];
                    $ftext = $_POST['ftext'];
                    //set destination
                    $to = "northfloridaliteracyfestival@gmail.com";
                    //make subject
                    $subject = $fname . " " . $fmail;
                    mail($to,$subject,$ftext,$fmail);
                    }
                ?>
         <div class="hr"></div>
       <p class="subtitle">Hosted by <img src="images/tan_banner.png" style="height: 5em"></p>
      </div>
	</div>
</body>
</html>