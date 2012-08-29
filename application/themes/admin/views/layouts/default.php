<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $template['title'] ;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- styles -->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href='../assets/bootstrap/css/bootstrap-responsive.min.css' rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  
  <body>
  
  	<?php echo $template['partials']['header']; ?>
	
	<?php echo $template['partials']['sidebar']; ?>
	<?php echo $template['body']; ?>
	
	<?php echo $template['partials']['footer']; ?>
	
	<script src="../assets/jquery/jquery.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
 </html> 