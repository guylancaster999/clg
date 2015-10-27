<?php
function banner($ttl)
{
	print '
		<a id="top" name="top"></a>
		<h1>
			Chorlton Little Gems Childminders 
			
			<a href="#menu-toggle" class="btn btn-default  rt" id="menu-toggle" title="Menu Toggle">
				<span class="glyphicon glyphicon-align-justify"></span>
			</a>
		</h1>
		<h2>'.$ttl.'</h2>';
	return;
}
function menu()
{
	print 
	'	<br/> 
		<img src="images/diamondz.jpg" alt="chorlton Little Gems Child-Minders" width="120px"/>
       <br/> <br/>
		<div class="menu"><a href="index.php" title="Chorlton Little Gems Homepage">Homepage</a></div>
		<div class="menu"><a href="rates.php" title="Childminding Services and rates">Services</a></div>
		<div class="menu"><a href="vacancies.php" title="Childminding Vacancies">Vacancies</a></div>
		<div class="menu"><a href="premises.php" title="Childcare Premises">Premises</a></div>
		<div class="menu"><a href="garden.php" title="Child-friendly garden">Garden</a></div>
		<div class="menu"><a href="transport.php" title="Zero carbon child transport">Transport</a></div>
		<div class="menu"><a href="qualifications.php" title="Childminding Qualifications">Qualifications&nbsp;&nbsp;</a></div>
		<div class="menu"><a href="experience.php" title="Childminding and related Experience">Experience</a></div>
		<div class="menu"><a href="links.php" title="Childcare Links">Links</a></div>
		<div class="menu"><a href="policies.php" title="Child Minding Policies">Policies</a></div>
		<div class="menu"><a href="indoors.php" title="Inside Actifities">Inside</a></div>
		<div class="menu"><a href="outdoors.php" title="Outside Activities">Outside</a></div>
		<div class="menu"><a href="xmas.php" title="Gallery">Christmas</a></div>
		<div class="menu"><a href="contact.php" title="Chorlton Little Gems Contact Details">Contact</a></div>  ';
 return;
}
function head($ttl)
{
print '<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="rating" content="general" />
<meta name="revisit-after" content="90 Days" />
<meta name="expires" content="never" /> 
<meta name="robots" content="index" />
<meta name="keywords" content="Manchester, baby, Chorlton, Childminder,South Manchester, Whalley Range, Stretford , Tot, Childcare,'.$ttl.'"/>
<meta name="description" content="Manchester Chorlton Childminder - "'.$ttl.'/>
 <meta name="author" content="Guy Lancaster">
    <title>Chorlton Little Gems Childminders - '.$ttl.'</title>
	 <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css"/>
</head>';
return;
}
function foot()
{  
	print '<br/>
		<br/>
 
		<a href="#top" class="btn btn-info btn-lg  top_button">
          <span class="glyphicon glyphicon-arrow-up"></span> Up
        </a>';
	return;
}
function foot2()
{
	print '    <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
  (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,"script","//www.google-analytics.com/analytics.js","ga");
  ga("create", "UA-3773540-40", "auto");
  ga("send","pageview");
</script>';
	return;
}
function  photo($pic,$pic_tn,$picTtl,$ht_tn=150,$pgTtl,$fromUrl)
{
	print  '<a  href="displayPic.php?pic='.$pic.'&pgTtl='.$pgTtl.'&picTtl='.$picTtl.'&fromUrl='.$fromUrl.'" title="'.$pgTtl.'">
	             <img src = "images/'.$pic_tn.'" alt="'.$pgTtl.'" height="'.$ht_tn.' class="pic"/>
	        </a>  &nbsp; ';
    }
?>