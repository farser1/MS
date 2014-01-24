<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Thu Jan 23 2014 13:01:03 GMT+0000 (UTC) -->
<html data-wf-site="52c2a99786cae7086200012d">
<head>
  <meta charset="utf-8">
  <title><?php echo $pageTitle; ?> - MyTeam</title>
  <meta name="description" content="<?php echo $pageDesc; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/myteam.webflow.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,400,600,700,800"]
      }
    });
  </script>
  <script>
    if (/mobile/i.test(navigator.userAgent)) document.documentElement.className += ' w-mobile';
  </script>
  <link rel="shortcut icon" type="image/x-icon" href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script><![endif]-->
 <?php include_once("mixpanel.php") ?>
</head>
<body>
  <?php include_once("analyticstracking.php") ?>
	 <header class="w-nav header" data-collapse="small" data-animation="default" data-duration="400" data-contain="1">
    <div class="w-container">
      <a class="w-nav-brand" href="index.php">
        <div class="logo">
          <img src="images/MyTeam%20Home%20Page%20S2-04.png" alt="52c2ace286cae70862000160_MyTeam%20Home%20Page%20S2-04.png">
        </div>
      </a>
      <nav class="w-nav-menu" role="navigation"><a class="w-nav-link color" href="index.php">Home</a><a class="w-nav-link color" href="courses.php">Courses</a><a class="w-nav-link color" href="http://joinmyteam.co/blog">Blog</a>
      </nav>
      <div class="w-nav-button nav_menu">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </header>