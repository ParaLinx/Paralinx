<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="ParaLinx Technologies provides affordable and personalized computer/smartphone repair and other I.T. services located in Cortland, OH | ParaLinxTech.com">
<meta name="keywords" content="PC Repair,smartphone repair,iphone,ipad,samsung,galaxy,nexus,networking,cortland,niles,warren,youngstown, girard,ohio,networking,web,design,graphic,design">
<title>ParaLinx Technologies</title>
<link href="CSS_TEST.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body style="background:white;">

<?php
function spamcheck($field) {
	$field = filter_var($field, FILTER_SANITIZE_EMAIL);
	if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
	return TRUE;
	} else {
		return FALSE;
	}
}
?>

<div id="wrapper">
	
	<div id="Head">
  	  <img src="Pictures/PLname_ltgray.svg" class="PLname" alt="PL_Name">
      <img src="Pictures/head_gradient.png" class="PLfade" alt"gradient">
        
      <ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a href="index.html">Home</a></li>
          
          <li><a href="REPAIR.html" class="MenuBarItemSubmenu">Repair Services</a>
          	<ul>              
              <li><a href="PCREPAIR.html" class="MenuBarItemSubmenu">PC Services</a>
                <ul>
                  <li><a href="PCREPAIR_TUNEUP.html">PC Tune-Up</a></li>
                  <li><a href="PCREPAIR_VIRUS.html">Virus, Spyware, Malware Removal</a></li>
                  <li><a href="PCREPAIR_HW.html">Hardware Repair</a></li>
                  <li><a href="PCREPAIR_BUILD.html">Custom PC Builds</a></li>
                </ul>
              </li>
              
              <li><a href="SPREPAIR.html" class="MenuBarItemSubmenu">Smartphone Repair</a>
                <ul>
                  <li><a href="SPREPAIR_APPLE.html">Apple iPhone and iPad</a></li>
                  <li><a href="SPREPAIR_OTHER.html">Other Smartphones</a></li>
                </ul>
              </li>
              
              <li><a href="ELECREPAIR.html">Electronics Repair</a></li>
            
            </ul>
          </li>
          
          <li><a href="DESIGN.html" class="MenuBarItemSubmenu">Design Services</a>
            <ul>
              <li><a href="DESIGN_GRAPH.html">Graphics Design</a></li>
              <li><a href="DESIGN_WEB.html">Web Development</a></li>
            </ul>          
          </li>
          
          <li><a href="NETWORK.html">Networking</a></li>
          
          <li><a href="CONTACT.php"class="MenuBarItemSubmenu">Contact Us</a>
          	<ul>
              <li><a href="ABOUT.html">About Us</a></li>
              <li><a href="CONTACT.php">Contact Us</a></li>
            </ul>
      	 </li>
      
      </ul>
	<script type="text/javascript">
	var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"	
	});
	</script>  
  
  </div>

  <div class="main_container">

    <div class="main_wrapper"> 
      <section id="main">
        <article class="page">
          <h1 id="CONTACT_h1">Contact Us</h1>
          <p id="CONTACT_p">We’re happy to answer any questions you have or provide you with an estimate. Just send us a message in the form below</p>

          <div class="form_box">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <!-- The YOUR NAME form Box -->
                <div class="form_row">
                  <label for="your-name">YOUR NAME (required)</label>
                  <br>
                  <span class="wpcf7-form-control-wrap">
                    <input type="text" name="your-name" value="" size="40" class="input-text" aria-required="true">
                  </span>
                </div>
                <!-- The YOUR EMAIL form box -->
                <div class="form_row">
                  <label for="your-email">YOUR EMAIL (required)</label>
                  <br>
                  <span class="wpcf7-form-control-wrap">
                    <input type="email" name="your-email" value="" size="40" class="input-text" aria-required="true">
                  </span>
                </div>
                <!-- The SUBJECT form box -->
                <div class="form_row">
                  <label for="your-subject">SUBJECT</label>
                  <br>
                  <span class="wpcf7-form-control-wrap">
                    <input type="text" name="your-subject" value="" size="40" class="input-text">
                  </span>
                </div>
                <!-- The YOUR MESSAGE form box -->
                <div class="form_row" id="msg_text_box">
                  <label for="your-message">YOUR MESSAGE</label>
                  <br>
                  <span class="wpcf7-form-control-wrap">
                    <textarea name="your-message" cols="40" rows="10" class="input-textarea"></textarea>
                  </span>
                </div>
                <!-- The SUBMIT button -->
                <div class="form_row_submit">
                  <input type="submit" value="Send" class="btn-submit">

                </div>

            </form>
            <?php {
			if($_SERVER["REQUEST_METHOD"] == 'POST') {
				$mailcheck = spamcheck($_POST["your-email"]);
				if ($mailcheck ==FALSE) {
					echo"Invalid input";
				} else {
					$from = $_POST["your-email"];
					$name = $_POST["your-name"];
					$subject = $_POST["your-subject"];
					$message = $_POST["your-message"];
					$message = wordwrap($message, 70);
					mail("contact@paralinxtech.com",$subject, $name.'\n'.$message,"From: $from\n");
					echo "Thank you for contacting us";
				}
			}
		}
		?>
          </div>
          
        </article>
        
      </section>  

      <section id="sidebar">

        <div class="section">
          <div class="title">EMAIL</div>
          <div class="content">
            <a href="mailto:Contact@ParaLinxTech.com">Contact@ParaLinxTech.com</a>
          </div>
          <div class="line_break"></div>
        </div>


        <div class="section">
          <div class="title">PHONE</div>
          <div class="content">
            <a href="tel:330.219.3223">330.219.3223</a>
          </div>
          <div class="line_break"></div>
        </div>


        <div class="section">
          <div class="title">ON THE WEB</div>
          <div class="content">
            <a href="https://www.facebook.com/paralinxtech">Facebook</a>
            <br>
            <a href="https://twitter.com/ParaLinxTech">Twitter</a>
          </div>
          <div class="line_break"></div>
        </div>
        
        
      </section> 

    </div>

  </div>
 

</div>

</body>
</html>
