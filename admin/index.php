<?php 
	
	require_once '../includes/bootstrap.php';
  require_once 'adminfunctions.php';


	if(!is_admin()){
  	header("Location: login.php");
  	exit;
	}

  if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page_id = $_GET['page'];
  }else{
    $page_id = "";
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo get_title(); ?> - <?php echo get_slogan(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Le styles -->
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        min-width: 1120px;
      }
      .admin-sidebar{
        /*float: left;*/
        min-width: 250px;
      }

      .admin-notice{
        width: 70%;
        box-shadow: 0 0 2px gray;
        margin-left: 15px;
        /*border:1px black groove;*/
        float: left;
      }

      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <!-- <link href="bootstrap/bootstrap-responsive.css" rel="stylesheet"> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <!-- <link rel="shortcut icon" href="bootstrap/ico/favicon.png"> -->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="brand" href="#">Project name</a> -->
          <div class="nav-collapse collapse">
            <!-- <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p> -->
            <ul class="nav">
              <li><a href="../">Home</a></li>                            
              <li class="active"><a href="index.php">Admin Panel</a></li>
            </ul>
          </div>

            <?php 
              if (is_admin()) {
            ?>
	            <a class="btn" href="logout.php">
                Logout
              </a>
            <?php
                }
            ?>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well admin-sidebar">
          <?php     
            echo "Welcome Admin"; 
          ?>
          </div>
          <div class="well sidebar-nav admin-sidebar">
            <ul class="nav nav-list">
              <li class="nav-header">Options</li>
              <li><a href="?page=photos">Photos</a></li>
              <li><a href="?page=videos">Videos</a></li>
              <li><a href="?page=events">Events</a></li>              
              <li class="divider"></li>
              <li class="nav-header">Other</li>
              <li><a href="?page=stats">Statistics</a></li>
              <li><a href="?page=users">Users</a></li>
              <!-- <li><a href="?page=settings">Settings</a></li>               -->

            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="well admin-notice">
          <?php 

            switch ($page_id) {

              case 'events':
                require_once 'events.php';
                break;

              case 'settings':
                require_once 'settings.php';
                break;

              case 'stats':
                require_once 'stats.php';
                break;

              case 'photos':
                require_once 'photos.php';
                break;

              case 'users':
                require_once 'users.php';
                break;

              case 'videos':
                require_once 'videos.php';
                break;

              default:
                echo "Nothing to show.";
                break;
            }
            exit;

        ?>

        </div>