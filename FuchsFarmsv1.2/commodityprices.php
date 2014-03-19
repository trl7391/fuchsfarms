<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Commodity Prices</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
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
					Commodity Prices

				</p>
                <p>Updated Daily</p>
				
			</div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Menu</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                        <li >
							<a href="./index.html">Home</a>
						</li>
						<li>
							<a href="./aboutus.html">About Us</a>
						</li>
						<li class="active">
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
						
					</ul>
				</div>
				
			</nav>
			
			<div class="row clearfix">
				
				<div class="col-md-12 column">
                  <!--  $contents = file_get_contents('http://dtn.ilfb.org/index.cfm?show=31&mid=5');
print_r($contents);*/--> 
                 
                    <?php


//$contents = file_get_contents('http://dtn.ilfb.org/index.cfm?show=31&mid=5');
//print_r($contents);
//$contents = file_get_contents('http://growers-edge.com/gelocalcashprices.aspx?newzip=61479');
//print_r($contents);

 /*
 $data = file_get_contents('http://www.wics.com/shared/news/features/sunrise-farm/stories/');
 $regex = '/CASH PRICE (.+?) results/';
 preg_match($regex,$data,$match);
 var_dump($match); 
 echo $match[1];
 */

 
 function file_get_contents_curl($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$data = curl_exec($ch);
curl_close($ch);

return $data;
}
function DOMinnerHTML($element){ 
$innerHTML = ""; 
$children = $element->childNodes; 
foreach ($children as $child) 
{ 
    $tmp_dom = new DOMDocument(); 
    $tmp_dom->appendChild($tmp_dom->importNode($child, true)); 
    $innerHTML.=trim($tmp_dom->saveHTML()); 
} 
return $innerHTML; 
}
//http://growers-edge.com/gelocalcashprices.aspx?newzip=61479
//http://www.agweb.com/markets/cash_grain_bids.aspx
$url  = 'http://growers-edge.com/gelocalcashprices.aspx?newzip=61479';
$html = file_get_contents_curl($url);

//parsing begins here:
$doc = new DOMDocument();
@$doc->loadHTML($html);
$div_elements = $doc->getElementsByTagName('td');

if ($div_elements->length <> 0){
foreach ($div_elements as $div_element) {
    if ($div_element->getAttribute('class') == 'homepagebannermiddle'){
        //id-----CT_Main_1_pnlContent
        $reviews[] = DOMinnerHTML($div_element);
        //USE PHPQuery to grab exact data
        //PHPQuery
        //PHPQuery
        //PHPQuery
        //PHPQuery
        //PHPQuery
    }
}
}

print_r ($reviews);



?>

         
                 
				</div>
				
			</div>
		</div>
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
