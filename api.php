<?php
function url_get_contents ($Url) {
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    $datas = json_decode($output,TRUE);
	
	if($_GET['debug']==1)
	{
		echo "<pre>";
		print_r($datas);
		echo "</pre>";
	}
	
    return $datas;
}

function gethome()
{
	$gethome = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&itemId=2780383&fields=pictures";
	$banner = url_get_contents($gethome);
	return 	$banner;
}

function getartconsulting()
{
	$gethome = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&itemId=2781998&fields=pictures";
	$banner = url_get_contents($gethome);
	return 	$banner;
}
function getshippingapproval()
{
	$gethome = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&itemId=2782114&fields=pictures";
	$banner = url_get_contents($gethome);
	return 	$banner;
}
function getcommision()
{
	$gethome = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&itemId=2782241&fields=pictures";
	$banner = url_get_contents($gethome);
	return 	$banner;
}

function loadallartist()
{
	$gethome = "https://api.masterpiecesolutions.org/v1/artists/?key=9GMIe191f6jo81LGPHpWsA==&compare=firstName|CMS|!=&limit=100";
	$banner = url_get_contents($gethome);
	return 	$banner;	
}
function loadallitem($limit)
{

	$gethome = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&compare=firstName|CMS|!=&limit=$limit";
	if($_GET['page']!='')
	{
		$page = $_GET['page'] - 1;
		$offset = $page * $_GET['limit'];
	    $gethome .= "&offset=".$offset;
	}
	$banner = url_get_contents($gethome);
	return 	$banner;	
}

function loadfirst()
{
$itemid = $_GET['itemId'];
$artistid = $_GET['artistId'];
$api = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&sortOptions=title|asc&artistId=$artistid&limit=1";	
$result = url_get_contents($api);
return $result['items']['0']['itemId'];
}
function loadlast()
{
$itemid = $_GET['itemId'];
$artistid = $_GET['artistId'];
$api = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&sortOptions=title|desc&artistId=$artistid&limit=1";	
$result = url_get_contents($api);
return $result['items']['0']['itemId'];
}

function loaditemnext()
{
$itemid = $_GET['itemId'];
$artistid = $_GET['artistId'];
$api = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&compare=itemId|$itemid|>&artistId=$artistid&limit=1";	
$result = url_get_contents($api);
if($result['items']['0']['itemId']=='')
{
	return loadfirst();
}
return $result['items']['0']['itemId'];
}

function loaditemprev()
{
$itemid = $_GET['itemId'];
$artistid = $_GET['artistId'];
$api = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&compare=itemId|$itemid|<&artistId=$artistid&limit=1";	
$result = url_get_contents($api);
if($result['items']['0']['itemId']=='')
{
	return loadlast();
}
return $result['items']['0']['itemId'];
}

function loadallitembyartist($limit,$artistId)
{

	$gethome = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&artistId=$artistId&limit=$limit";
	if($_GET['page']!='')
	{
		$page = $_GET['page'] - 1;
		$offset = $page * $_GET['limit'];
	    $gethome .= "&offset=".$offset;
	}
	$banner = url_get_contents($gethome);
	return 	$banner;	
}









function loadartist($artistid)
{
	$gethome = "https://api.masterpiecesolutions.org/v1/artists/?key=9GMIe191f6jo81LGPHpWsA==&artistId=".$artistid;
	$banner = url_get_contents($gethome);
	return 	$banner;		
}
function loaditem($itemid)
{
	$gethome = "https://api.masterpiecesolutions.org/v1/items/?key=9GMIe191f6jo81LGPHpWsA==&itemId=".$itemid;
	$banner = url_get_contents($gethome);
	return 	$banner;
}







function pageurl() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}


?>