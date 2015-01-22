<?php
/**
* This file displays the jpog images in the browser
* It checks the image name format and the path to make sure that only allowed images (from dirs defined in the config file) are displayed.
* @version $Id: view_files.php,v 3.6 2007/03/16 16:35:20 sebas Exp $
* @package mri
*/

require_once 'NDB_Client.class.inc';
$client = new NDB_Client;
$client->initialize();

   
/**
* display jpg image
*/
$content_type = 'image/png';
header("Cache-Control: must-revalidate");
header("Pragma: private");

function getUrlETag($url) {
    return md5($url);
};
$etag = getUrlEtag($_SERVER['REQUEST_URI']);
if(isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) { 
        header("HTTP/1.1 304 Not Modified"); 
        exit; 
}
header("Etag: " . md5($_SERVER['REQUEST_URI']));


// instead of making local config obj, parse the config file here...
// cannot use NDB_Config class b/c of path to xml file in the class' load() method
// Checks that config settings are set
$config =& NDB_Config::singleton();

// Basic config validation
$filePaths    = $config->getSetting('paths');
$toenailspath = $filePaths['bigbrainReleaseRoot'] . $_REQUEST['release'] . "/2D_Final_Sections/Coronal/Png/Full_Resolution";


// define which configuration file we're using for this installation
$sliceID = $_REQUEST['sliceID'];
header("Content-type: $content_type");
header("Content-Disposition: attachment; filename=pm" . str_pad($sliceID,4,"0", STR_PAD_LEFT) . "o.png");
// load the configuration data into a global variable $config
$file = $toenailspath . "/pm" . str_pad($sliceID,4,"0", STR_PAD_LEFT) . "o.png";
unset($configObj, $root, $configFile);

// test the file name format and the path
if (  strrpos($file, '.png') !== false && strpos($file, '.png') == strlen($file)-4)
{
  $filename = $file;
  $size = filesize($filename);
  header("Accept-Range: bytes");
  header("Content-Length: $size");
  header("Content-Range: 0-$size");
  $handle = fopen ($filename, "r");
  $contents = fread ($handle, filesize ($filename));
  fclose ($handle);
  echo $contents;
 }else {
  echo "NO FILE";
 }
?>
