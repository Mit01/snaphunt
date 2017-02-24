<!-- META -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="keywords" content="MVP in 30 Days, MVP for Startup, Startup Pixel, Website App in 30 days, MVP in 7777 USD, Get Minimum Viable Product by StartupPixel, India based MVP Startup">
<meta name="description" content="The StartupPixel is a creative team of designers, developers & innovators that build your beautiful MVP(Minimum Viable Product) in just 30 Days.">
<head prefix="og: http://ogp.me/ns#">
<meta property="og:locale" content="en_US">
<meta property="og:title" content="Get Your MVP in 30 Days | StartupPixel" />
<meta property="og:site_name" content="StartupPixel.com" />
<meta property="og:url" content="http://www.startuppixel.com/" />
<meta property="og:description" content="The StartupPixel is a creative team of designers, developers & innovators that build your beautiful MVP(Minimum Viable Product) in just 30 Days." />
<meta property="og:image" content="http://www.startuppixel.com/img/socialshare.png" />
<meta property="og:image:type" content="image/png" />

<!-- CSS/LESS -->
<?php

	require_once 'css/Less/Autoloader.php';
	Less_Autoloader::register();

	try{
		$options = array( 'compress'=>false );
		$parser = new Less_Parser($options);
		$parser->parseFile( 'css/style.less' );
		$css = $parser->getCss();
		file_put_contents('css/style.css', $css);
	}catch(Exception $e){
	    $error_message = $e->getMessage();
			echo '<pre>'.$error_message.'</pre>';
	}

?>

<link rel="shortcut icon" href="img/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link href='//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
