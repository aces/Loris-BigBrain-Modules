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
$content_type = 'application/octet-stream';



// instead of making local config obj, parse the config file here...
// cannot use NDB_Config class b/c of path to xml file in the class' load() method
// Checks that config settings are set
$config =& NDB_Config::singleton();

// Basic config validation
$filePaths    = $config->getSetting('paths');
$mincpath     = $filePaths['bigbrainReleaseRoot'] . $_REQUEST['release']  . "/2D_Final_Sections/Coronal/Minc";
$sliceID      = $_REQUEST['sliceID'];
$basename     = "pm" . str_pad($sliceID,4,"0", STR_PAD_LEFT) . "o.mnc";
$file         = $mincpath . "/" . $basename;

header("Content-type: $content_type");
header("Content-Disposition: attachment; filename=" . $basename);

// test the file name format and the path
if (  strrpos($file, '.mnc') !== false && strpos($file, '.mnc') == strlen($file)-4)
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
