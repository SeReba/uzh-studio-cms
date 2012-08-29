<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
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
	
	<div class="container">

	 <form class="horizontal-form">
        <div class="control-group">
          <label class="control-label" for="">Email</label>
          <div class="controls">
            <input type="text" placeholder="Email">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="">Password</label>
          <div class="controls">
            <input type="password" placeholder="Password">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn">Form action</button>
          </div>
        </div>
      </form>

	</div>

   	<script src="../assets/jquery/jquery.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
