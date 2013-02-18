<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">

<?php

include_once(dirname(__FILE__).'/php/check_status.php');

?>



<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Kaltura Video Platform - Home Page</title>
		<link rel="stylesheet" rev="stylesheet" media="screen" href="./css/style.css">
		<style type="text/css">
			
			h1 { padding:0; margin:0; margin-bottom:10px; font:Arial; font-size:22px; color:#000; }
			h2 { padding:0; margin:0; margin-top:40px; font:Arial; font-size:48px; color:#206f87; }
			h3 { padding:0; margin:0; margin-top:30px; margin-bottom:10px; font:Arial; font-size:16px; color:#000; }
			h4.thumbdsec { background-color:#000;color:#fff;display:block;margin:0;padding:4px;width:252px;font-weight:bold;font-size:14px; }
			
			.strongs { padding:0; margin:0; padding-top:10px; padding-bottom:10px; font-weight:bold; }
			
			#pageWrap #insideWrap {  }
			#pageWrap #insideWrap #content { margin:auto;padding:0; }
			
			a.console-image {
				color:transparent;
				display:block;
				position:relative;
				float:left;
				border:none;
				width:260px;
				height:175px;
				padding:0;
				margin:0;
			}
			a.console-image-kmc { background-image:url(images/kmc_content_icon.png); }
			a.console-image-admin { background-image:url(images/admin_console_icon.png); }
			a.console-image:hover {
				background-position:0 175px;
			}
		</style>
	</head>


<body>

	<div id="pageWrap">
	<div id="insideWrap" style="margin-top:10px;margin-bottom:10px;">
	<img src="images/home-icon.png" alt="home" style="position:relative;display:block;float:left;width:22px;height:22px;margin-right:10px;"/>
	<h1>
	Welcome to Kaltura On-Prem&trade; Video Platform
	<?php
		$parts = explode(' ', kConf::get('kaltura_version'));
		$addition = "";
		if (count($parts) > 3)
			$addition = $parts[3];
        echo ' '.$parts[2].' '.$addition;
	?>
	</h1>
	
	<a name="top"></a>
	
	<div id="content">
		
		<div id="systemStatus">

			<?php echo $status_div; ?>
			
		</div> <!-- systemStatus -->
		
		<a name="start"></a>
		<h2>Get Started!</h2>
		<p>
		Please login to the <a href="/admin_console" target="_blank">Kaltura Administration Console</a>, go to the <a href="/admin_console/index.php/partner/create" target="_blank">Add New Publisher</a> page and create your first publisher account.<br/>
		You will then receive an email with the <a href="/kmc" target="_blank">Kaltura Management Console (KMC)</a> login credentials to access &amp; manage any publisher media. 
		</p>
		
		<a name="goto"></a>
		<h3>Click on the thumbnails below to manage the media or system:</h3>
		<div style="width:540px;height:305px;padding:5px;font-size:1.2em;margin-bottom:60px;">
		<div style="margin:0;padding:0;width:540px;height:175px;">
			<a title="Go to the KMC (Kaltura Management Console)" class="console-image console-image-kmc" style="margin-right:20px;" href="/kmc" target="_blank">
			</a>
			<a title="Go to the Kaltura Administration Console" class="console-image console-image-admin" href="/admin_console" target="_blank">
			</a>
			<div style="clear:both;"></div>
		</div>
		<div style="margin:0;padding:0;width:540px;height:175px;">
<div style="width:260px;height:130px;display:block;position:relative;float:left;margin-right:20px;">
			<h4 class="thumbdsec">Publisher Tools (Content Admins)</h4>
			<div class="strongs">How do I manage my rich-media content?</div>
Use the <a target="_blank" href="/kmc">Kaltura Management Console (KMC)</a>!<br />The KMC supports content ingestion, media and playlist management, wyswyg application studio for creating media players, rich-media syndication, advertising and more.<br />Learn more in the <a target="_blank" href="/content/docs/KMC_Quick_Start_Guide.pdf">KMC quick start guide.</a>
</div>
<div style="width:260px;height:130px;display:block;position: relative;float:left;">
<h4 class="thumbdsec">Server Admin Tools (IT technicians)</h4>
<div class="strongs">How can I administer &amp; monitor my server?</div>
Use the <a target="_blank" href="/admin_console">Kaltura Administration Console</a>!<br />The console supports multi-publisher management, user management and batch process control and monitoring.</a>
</div>
<div style="clear:both;"></div>
</div>
		</div>
		
		<a name="samples"></a>
		<h3>How do I integrate Kaltura On-Prem media into my website?</h3>
			<ul>
			<li>Use the Preview &amp; Embed feature within KMC to embed Kaltura Media Players on your website.</li>
			<li>Use a CMS extension for known Content or Learning Management Systems - Browse <a href="http://exchange.kaltura.com/category/application-category/extensions" target="_blank">extensions on the Kaltura Exchange</a>.</li>
			<li>Write your own: Use the <a href="/api_v3/testme/client-libs.php?hideMenu=true" target="_blank">client libraries</a>, Kaltura <a href="/api_v3/testmeDoc" target="_blank">REST APIs</a> &amp; <a href="/api_v3/testme" target="_blank">API test console</a>.</li>
			</ul>
		<br />
		<h3>Join the Kaltura Exchange to share your applications, get audience and make money!</h3>
		<div>
			<a href="http://exchange.kaltura.com" alt="Kaltura Exchange" target="_blank" style="color:transparent;" ><img src="images/exchange.png" style="display: block; float: left;margin-right:10px;margin-bottom :2px;" /></a>
			<p style="max-width:800px;">The <a href="http://exchange.kaltura.com" target="_blank" >Kaltura Application Exchange</a> is a virtual marketplace for publishers, developers, integrators and web shops to "trade" in video applications & Kaltura Services. The Exchange is geared towards saving time and money for those looking to expand upon the core Kaltura platform for their own specific use case, and on the flip side to allow developers to publish and potentially generate revenue from their own Kaltura-related contributions.</p>
			<br />
			<p style="max-width:800px;">On the Kaltura Exchange you can find an audience for your Kaltura applications as well as offer your services to Kaltura publishers looking for additional services, support, and solutions.</p>
			<ul style="margin:0;padding:0;">
				<li style="display: inline; font-weight: bold;margin:0 20px 0 0;padding:0;" ><a href="http://exchange.kaltura.com/Kaltura_Exchange_Introduction" target="_blank">Exchange Introduction</a></li>
				<li style="display: inline; font-weight: bold;margin:0 20px 0 0;padding:0;" ><a href="http://exchange.kaltura.com/Kaltura_Exchange_Getting_Started" target="_blank">Get Started with the Kaltura Exchange</a></li>
				<li style="display: inline; font-weight: bold;margin:0 20px 0 0;padding:0;" ><a href="http://exchange.kaltura.com/Join_Kaltura_Exchange" target="_blank">Join the Kaltura Exchange</a></li>
			</ul>
			<div style="clear:both;"></div>
		</div>
	</div> <!-- content -->
	
	</div> <!-- insideWrap -->
	</div> <!-- pageWrap -->

</body>
</html>