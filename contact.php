<?php 
  require_once 'includes/bootstrap.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Business Company - Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]><script type="text/javascript" src="unitpngfix.js"></script><![endif]-->
</head>
<body class="details">
<div class="wrap">
  <div class="header">
    <div class="logo"><a href="<?php echo get_domain(); ?>"><img src="images/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li><a href=".">Home</a></li>
        <li><a href="details.php">About us</a></li>
        <li><a href="privacy-policy.php">Privacy</a></li>
        <li class="selected"><a href="contact.php">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
  <!--End of header-->
  <div class="main_content">
    <div class="left_content">
      <h1>Contact Us</h1>
      <div class="contact_form">
        <div class="form_row">
          <label class="contact">name:</label>
          <input type="text" class="contact_input" />
        </div>
        <div class="form_row">
          <label class="contact">email:</label>
          <input type="text" class="contact_input" />
        </div>
        <div class="form_row">
          <label class="contact">phone:</label>
          <input type="text" class="contact_input" />
        </div>
        <div class="form_row">
          <label class="contact">message:</label>
          <textarea class="contact_textarea" rows="" cols="" ></textarea>
        </div>
        <div class="form_row">
          <input type="image" src="images/send.gif" class="send"/>
        </div>
      </div>
    </div>
    <!--End of left_content-->
    <div class="right_content">
      <h1>Contact Informations</h1>
      <div class="contact_info"> <span class="orange">Adress:</span>
        <p class="info_contact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      </div>
      <div class="contact_info"> <span class="orange">Email:</span>
        <p class="info_contact"> info@company.com </p>
      </div>
      <div class="contact_info"> <span class="orange">Phone:</span>
        <p class="info_contact"> 008 900 800 32   /    008 900 800 32 </p>
      </div>
      <div class="employe_box_left"> <span class="blue">Employe name</span><br />
        <span class="orange">Email:</span> info@company.com<br />
        <span class="orange">Phone:</span> 008 900 800 32 <br />
        <img src="images/contact_thumb1.gif" alt="" /> </div>
      <div class="employe_box_right"> <span class="blue">Employe name</span><br />
        <span class="orange">Email:</span> info@company.com<br />
        <span class="orange">Phone:</span> 008 900 800 32 <br />
        <img src="images/contact_thumb2.gif" alt="" /> </div>
    </div>
    <!--End of right_content-->
    <div class="clear"></div>
  </div>
  <!--End of main_content-->
</div>
<!--End of wrap-->
<div class="footer">
  <div class="footer_content">
    <div class="footer_tab1">
      <h2>Get in touch</h2>
      <span class="email">Email: info@company.com</span>
      <div class="footer_info"> <span class="orange">Adress:</span>
        <p class="info"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. </p>
      </div>
      <div class="footer_info"> <span class="orange">Phone:</span>
        <p class="info"> 008 900 800 32   /  008 900 800 32 </p>
      </div>
      <div class="footer_copyrights"> <img src="images/footer_logo.gif" alt="" /><br />
        &copy; 2009 All Rights Reserved<br />
        Template by: <a href="http://indeziner.com/">INDEZINER</a></div>
    </div>
    <!--End of footer_tab1-->
    <div class="footer_tab2">
      <h2>Favorites</h2>
      <div class="favorites_box"> <span class="fav_nr">1</span>
        <p class="favorites"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      </div>
      <div class="favorites_box"> <span class="fav_nr">2</span>
        <p class="favorites"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      </div>
      <div class="favorites_box"> <span class="fav_nr">3</span>
        <p class="favorites"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      </div>
    </div>
    <!--End of footer_tab2-->
    <div class="footer_tab3">
      <h2>Links</h2>
      <div class="footer_links">
        <ul>
          <li><a href="<?php echo get_domain(); ?>">Home</a></li>
          <li><a href="<?php echo get_domain(); ?>">Services</a></li>
          <li><a href="<?php echo get_domain(); ?>">Clients</a></li>
          <li><a href="<?php echo get_domain(); ?>">Work</a></li>
          <li><a href="<?php echo get_domain(); ?>">Terms &amp; conditions</a></li>
          <li><a href="<?php echo get_domain(); ?>">RSS</a></li>
          <li><a href="<?php echo get_domain(); ?>">Contact</a></li>
        </ul>
      </div>
    </div>
    <!--End of footer_tab3-->
    <div class="clear"></div>
  </div>
  <!--End of footer_content-->
</div>
<!--End of footer-->
<div align=center>This template  downloaded form <a href='<?php echo get_domain(); ?>'>free website templates</a></div></body>
</html>
