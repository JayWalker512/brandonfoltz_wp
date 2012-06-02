<meta name="keywords" content="Brandon,Foltz,Programming,C,Web,Templates,Download,SpacePong,Pong,Blue,Portfolio,Resume,TCAMMA,Websites,Designer,Developer,Clients,Webmaster,1080p,Server" /><meta name="description" content="Homepage and portfolio of Brandon Foltz. I offer a wide variety of computer and web related services at very competitive rates." />
<base href="/" />
<link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/> 
<?php 

/* Do IP logging and such before the rest of the page draws. */
require_once('scripts/IPlogger.class.php');

$ipLog = new IPlogger('db/iplog.csv');
if ($ipLog->getError() != "")
	echo $ipLog->getError();
	
$ipLog->logUser();
$ipLog->enforceBan("banned.html");

if(isset($page_title))
	echo "<title>Brandon Foltz - ".$page_title."</title>";
else
	echo "<title>Brandon Foltz</title>";
?>

