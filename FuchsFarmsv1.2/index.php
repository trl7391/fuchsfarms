<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fuchs Farms LLC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	<link href="css/maps.css" rel="stylesheet" type="text/css">

	<script src="js/maps.js" type="text/javascript"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<!--<div class="page-header">
				<h1>
					The Family Farm of Albert Fuchs
				</h1>
			</div>-->
			<div class="jumbotron">
				<h1>
					Fuchs Farms LLC.
				</h1>
				<p>
					Welcome to our site!  Please look around at the many features.

				</p>
                <p>We have a weather api, Google map api, and daily commodity prices from local elevators</p>
				
			</div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Menu</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                        <li class="active">
							<a href="./index.html">Home</a>
						</li>
						<li>
							<a href="./aboutus.html">About Us</a>
						</li>
						<li>
							<a href="./commodityprices.php">Commodity Prices</a>
						</li>
						
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			<div class="row clearfix">
				
				<div class="col-md-12 column">
					<div class="carousel slide" id="carousel-77811">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-77811">
							</li>
							<li data-slide-to="1" data-target="#carousel-77811">
							</li>
							<li data-slide-to="2" data-target="#carousel-77811">

							</li>
                            <li data-slide-to="3" data-target="#carousel-77811">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="#" src="./img/overhead.jpg">
								<div class="carousel-caption">
									<h2>
										Our Home
									</h2>
									<p>
										Lived in Princeville and Dunlap area for over 100 years
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="#" src="./img/3bins.jpg">
								<div class="carousel-caption">
									<h2>
										My Pride and Joy
									</h2>
									<p>
										
                                        Spent Last Year's Soybean proceed's on this one
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="#" src="./img/cleaningthefields.jpg">
								<div class="carousel-caption">
									<h2>
										My Second Favorite Tractor
									</h2>
									<p>
										Greatest Harvester EVER!
									</p>
								</div>
							</div>
                            <div class="item">
								<img alt="" src="./img/4010deere.jpg">
								<div class="carousel-caption">
									<h2>
										4010 Deere
									</h2>
									<p>
										Been around awhile
									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-77811" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-77811" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-6 column">
					<!-- This is the canvas for the Google map. -->
		       <div id="mapCanvas"></div>
               <!-- The JavaScript initializeMap() function is invoked when the Google Maps API is loaded. -->
                <script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initializeMap" type="text/javascript">
                </script>
					 <a id="modal-9009" href="#modal-container-9009" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
					
					<div class="modal fade" id="modal-container-9009" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                     
									<!--<h4 class="modal-title" id="myModalLabel">
										Modal title
									</h4>-->
								</div>
								<div class="modal-body">
									
	
								</div>
								<div class="modal-footer">
									 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
                <div class="col-md-4 column">
					
				</div>
				<div class="col-md-4 column">
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
  $.ajax({
  url : "//api.wunderground.com/api/49f2480a14f5ebb1/features/settings/q/query.format",
  dataType : "jsonp",
  success : function(parsed_json) {
  var location = parsed_json['location']['city'];
  var temp_f = parsed_json['current_observation']['temp_f'];
  alert("Current temperature in " + location + " is: " + temp_f);
  }
  });
});
</script>
              <!--  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/49f2480a14f5ebb1/geolookup/conditions/q/IL/Speer.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
  echo "Current temperature in ${location} is: ${temp_f}\n";
?>-->
					<table class="table">
						<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Product
								</th>
								<th>
									Payment Taken
								</th>
								<th>
									Status
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									01/04/2012
								</td>
								<td>
									Default
								</td>
							</tr>
							<tr class="active">
								<td>
									1
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									01/04/2012
								</td>
								<td>
									Approved
								</td>
							</tr>
							<tr class="success">
								<td>
									2
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									02/04/2012
								</td>
								<td>
									Declined
								</td>
							</tr>
							<tr class="warning">
								<td>
									3
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									03/04/2012
								</td>
								<td>
									Pending
								</td>
							</tr>
							<tr class="danger">
								<td>
									4
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									04/04/2012
								</td>
								<td>
									Call in to confirm
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
        <!--<div id="mapCanvas"></div>-->

		                                <!-- The JavaScript initializeMap() function is invoked when the Google Maps API is loaded. -->
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initializeMap" type="text/javascript">
</script>-->
	</div>
     <div id="footer" align="center" style="background-color: #457842; height: 30px; margin-top: 10px;" >
   <script type="text/javascript">
now=new Date();
year=now.getFullYear(); 
</script>&copy; Copyright Fuchs Farms LLC. 2013-<script type="text/javascript">
document.write(year);
</script>
   </div>
</div>
   
</body>
</html>
