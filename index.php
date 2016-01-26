<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shorten your URL">
    <meta name="author" content="Bhaskar Jha">
    <link rel="icon" href="Pictures/logo.ico">

    <title>Shorten your URL to a yocto URL at yoctOn9 ;)</title>
    <link href="Scripts/css/bootstrap.min.css" rel="stylesheet">
    <script src="Scripts/js/ie-emulation-modes-warning.js">	</script>
    <link href="Scripts/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">yoctOn9</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" role="menu">
                <li class="active"><a href="index.php">Home</a></li>
				<li><a href="Tutorial">Tutorial</a></li>
                <li><a href="About">About</a></li>
                <li><a href="Contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Social Media <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="http://www.facebook.com/yoctOn9">Facebook</a></li>
                    <li><a href="http://www.twitter.com/yoctOn9">Twitter</a></li>
                    <li><a href="#">Google Plus</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Facebook</li>
                    <li><a href="#">We just got x likes</a></li>
                    <li><a href="#">include yours like button</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>	
      </div>
    </div>
	



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
	
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>  <div class="mymain">
	<br><br><br><br>
	<div class="container" align="center">
	<?php
	session_start();
	if(!empty($_SESSION['yocto'])&& !empty($_SESSION['yocto']))
	{
		
		$yocto = $_SESSION['yocto'];
		session_destroy();
		$yotta_file = fopen("$yocto/url.txt", "r") or die("Unable to open file!");
		$yotta = fgets($yotta_file);
		echo "<font size=\"4\" color=\"white\">
				<textarea class=\"yottaurl\">$yotta</textarea>
				<span> <br>has now become http://www.yoctOn9.com/$yocto<br><a href=\"index.php\" role=\"button\" class=\"btn btn-lg btn-primary\">Shorten more</a></span></font>";
		
	}
	else
	{
		ob_start();
		include 'Scripts/php/convert.php';
	}
	?>	</div></div>
      <div class="carousel-inner" role="listbox">
	 
        <div class="item active">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Shorten your Website in a go</h1>
              <p>Just enter your URL to be converted into small-yocto URLs... You can also View the tutorial whenever you want.</p>
              <p><a class="btn btn-lg btn-primary" href="Tutorial" role="button">Tutorial</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>As small as yocto</h1>
              <p>Yocto (symbol y) is a unit prefix in the metric system denoting a factor of 10−24 or 0.000000000000000000000001. So yoctOn9 is here to create a smallest possible URL of the URL you give.</p>
              <p><a class="btn btn-lg btn-primary" href="http://en.wikipedia.org/wiki/Yocto-" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Validity</h1>
              <p>Every URL is checked for number of views. If the URLs is not vied for more than 30days, the URL will expire...</p>
			  <p><a class="btn btn-lg btn-primary" href="Terms" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row"><h1>How do I do???</h1><br>
        <div class="col-lg-4">
          <img class="img-circle" src="Pictures/Ctrl+V.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Ctrl+V</h2>
          <p>Paste the bulky Website's Address</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="Pictures/Type.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Type</h2>
          <p>Type your Desired URL</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="Pictures/Click.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Click</h2>
          <p>Click on Get yoctOn9</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- FOOTER -->
      <footer>
        <font size="2"><p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013-15 psyCHOder, Inc. &middot; <a href="Privacy">Privacy</a> &middot; <a href="Terms">Terms</a></font></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="Scripts/js/bootstrap.min.js"></script>
    <script src="Scripts/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Scripts/js/ie10-viewport-bug-workaround.js"></script>
  </body>
 </html>