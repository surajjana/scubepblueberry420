<?php 
  require_once 'includes/bootstrap.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo get_title()." - ".get_slogan(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]><script type="text/javascript" src="unitpngfix.js"></script><![endif]-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function hideall() {
	$("#tab").hide();
	$("#tab1").hide();
	$("#tab2").hide();
	$("#tab3").hide();
	$("#tab4").hide();			
}
$(document).ready(function(){

$("#icon1").mouseover(function () {
hideall();
$("#tab1").css("display","block");     
});

$("#icon2").mouseover(function () {
hideall();
$("#tab2").css("display","block");     
});

$("#icon3").mouseover(function () {
hideall();
$("#tab3").css("display","block");     
});  

hideall();
$("#tab").show();       

  });
</script>
</head>
<body>
<div class="wrap">
  <div class="header">
    <div class="logo"><a href="<?php echo get_domain(); ?>"><img src="images/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li class="selected"><a href=".">Home</a></li>
        <li><a href="details.php">About us</a></li>
        <li><a href="privacy-policy.php">Privacy</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
  <!--End of header-->
  <div class="home_center_content">
    <div class="home_center_content">
      <div class="box1" id="tab">
        <div class="center_text">
          <div class="big_title">We <span>grow</span> your Business <span>!</span></div>
          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <div class="right_img"><img src="images/pic1.jpg" alt=""/></div>
      </div>
      <div class="box1" id="tab1">
        <div class="center_text">
          <div class="big_title">We <span>grow</span> your Business <span>!</span></div>
          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <div class="right_img"><img src="images/pic1.jpg" alt="" /></div>
      </div>
      <div class="box1" id="tab2">
        <div class="center_text">
          <div class="big_title">Best <span>clients</span> and work <span>!</span></div>
          <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
        <div class="right_img"><img src="images/pic2.jpg" alt="" /></div>
      </div>
      <div class="box1" id="tab3">
        <div class="center_text">
          <div class="big_title">Well <span>organized</span> team <span>!</span></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="right_img"><img src="images/pic3.jpg" alt="" /></div>
      </div>
      <ul class="center_button_icons tabset">
        <li id="icon1"> <a href="#tab1" class="tab"> <img src="images/icon_news.gif" border="0" alt="" /> </a> </li>
        <li id="icon2"> <a href="#tab2" class="tab"> <img src="images/icon_work.gif" border="0"  alt=""/> </a> </li>
        <li id="icon3"> <a href="#tab3" class="tab"> <img src="images/icon_team.gif" border="0" alt="" /> </a> </li>
        <li> <a href="#tab" class="tab active"></a> </li>
      </ul>
    </div>
  </div>
  <!--End of home_center_content-->
  <div class="main_content">
    <div class="left_content">
      <h1>About us</h1>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br />
        <br />
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <h1>Email Newsletter</h1>
      <p> Subscribe to our newsletter to stay up to date with us.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed </p>
      <div class="newsletter">
        <input type="text" class="input" value="email" onclick="this.value=''"/>
        <input type="image" src="images/subscribe.gif" class="subscribe" />
      </div>
    </div>
    <!--End of left_content-->
    <div class="right_content">
      <h1>Featured projects</h1>
      <div class="project_box"> <a href="<?php echo get_domain(); ?>"><img src="images/latest_project.jpg" alt="" border="0" class="feat_project" /></a>
        <div class="project_details"> <span class="left">project details</span> <a href="<?php echo get_domain(); ?>" class="view">view project</a> </div>
      </div>
      <h1 class="orange">News &amp; Updates</h1>
      <div class="news_box"> <img src="images/news_thumb1.gif" class="news_thumb" alt="" />
        <p class="news_content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      </div>
      <div class="news_box"> <img src="images/news_thumb2.gif" class="news_thumb" alt="" />
        <p class="news_content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      </div>
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
        <p class="info"> 008 900 800 32   /    008 900 800 32 </p>
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
