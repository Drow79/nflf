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
    <link href="sponbtn.css" rel="stylesheet">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script src="javascript.js" type="text/javascript"></script>
        
        
        
</head>
<body>
   <div id="page-container">
      <div id="page" class="container vertical-align-middle">
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
                    <a href="contest.html">Contest Rules</a>
                    <a href="about.html">About Us</a>
                    <!-- <a href="vendors.html">Vendor Info</a> -->
                    <!-- <a href="sponsors.html">Sponsors</a> -->
                    <a href="http://tanfl.webs.com">TAN Website</a>
                </div>

            </div>

            <!-- The overlay -->
            <div id="mySponBtn" class="sponoverlay">

                <!-- Button to close the overlay navigation -->
                <a href="javascript:void(0)" class="closebtnspon" onclick="closeSponBtn()">&times;</a>

                <!-- Overlay content -->
                <div class="sponoverlay-content">
                    <img src="North Florida Literacy Festival.png" alt="North Florida Literacy Festival">
                    <br /><br />
                    <h1>SPONSORSHIP LEVELS</h1>
                    <br /><br />
                    <h2>Level 6: $250 Plus</h2>
                    <br />
                    <h4>Individual/Business name listed as sponsor onNorth  Florida Literacy Festival (NFLF) promotional materials.</h4>
                    <br /><br />
                    <h2>Level 5: $500 Plus</h2>
                    <br />
                    <h4>Individual/Business name listed as sponsor on NFLF promotional materials along with the individual/business logo, and a link to your website on the North Florida Literacy Festival website.</h4>
                    <br /><br />
                    <h2>Level 4: $1,000 Plus</h2>
                    <br />
                    <h4>Individual/Business name listed as sponsor on NFLF promotional materials along with the individual/business logo, and a link to your website on the North Florida Literacy Festival website, and your promotional materials distributed at the festival.</h4>
                    <br /><br />
                    <h2>Level 3: $2,500 Plus</h2>
                    <br />
                    <h4>Individual/Business name listed as sponsor on NFLF promotional materials along with the individual/business logo, a link to your website on the North Florida Literacy Festival website, and your promotional materials distributed at a free table during the festival.  Additionally, you will recieve a Quarter page ad in the North Florida Literacy Festival pamphlet.  The Tallahassee Authors Network (TAN) will assist you with one mutually agreed upon community activity.</h4>
                    <br /><br />
                    <h2>Level 2: $5,000 Plus</h2>
                    <br />
                    <h4>Individual/Business name listed as sponsor on NFLF promotional materials along with the individual/business logo, a link to your website on the North Florida Literacy Festival website, and your promotional materials distributed at a free table during the festival.  Additionally, you will receive a Half page ad in the North Florida Literacy Festival pamphlet. The Tallahassee Authors Network (TAN) will assist you with one mutually agreed upon community activity.</h4>
                    <br /><br />
                    <h2>Level 1: $10,000 Plus</h2>
                    <br />
                    <h4>Individual/Business name listed as sponsor on NFLF promotional materials along with the individual/business logo, a link to your website on the North Florida Literacy Festival website, and your promotional materials distributed at a free table during the festival.  Additionally, you will receive a Full page ad in the North Florida Literacy Festival pamphlet.  The Tallahassee Authors Network (TAN) will assist you with one mutually agreed upon community activity.</h4>
                    <br /><br /><br /><br />
                    <h3>When you donate please indicate if you wish to have your donor level displayed.</h3>
                    <br /><br /><br /><br />
                    <p>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="PGS7GK4KFE9E4">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    </p>
                </div>
            </div>
            <!-- Use any element to open/show the overlay navigation menu -->
            <center>
                <button class="btn cyan-highlight" onclick="openNav()">&#9776; Open Navagation</button>
                &nbsp;&nbsp;
                <button class="btnspon cyan-highlight" onclick="openSponBtn()">&#9776; Want to become a Sponsor?</button>
            </center>
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