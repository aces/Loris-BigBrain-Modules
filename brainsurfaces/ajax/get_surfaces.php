<?php
/**
   Based on get_file.php; Pierre Rioux, May 2013
 */


// Load config file and ensure paths are correct
set_include_path(
    get_include_path() . ":../project/libraries:../php/libraries"
);
// Since we're sending binary data, we don't want PHP to print errors or warnings 
// inline. They'll still show up in the Apache logs.
ini_set("display_errors", "Off");

/*
// Ensures the user is logged in, and parses the config file.
require_once "NDB_Client.class.inc";
$client = new NDB_Client();
$client->initialize("../project/config.xml");
*/

// Checks that config settings are set
$config =& NDB_Config::singleton();

// Basic config validation
$filePaths  = $config->getSetting('paths');
$volumePath = $filePaths['bigbrainReleaseRoot'] . $_GET['release']  . '/3D_Surfaces';

// Now get the file and do file validation
$File = $_GET['file'];

// File validation
if (! (preg_match('/^\w[\w\-]+\.(obj)$/', $File) === 1)) {
    error_log("ERROR: Wrong file.");
    header("HTTP/1.1 400 Bad Request");
    exit(3);
}

// Find the extension
$pieces  = preg_split('/\./', basename($File));
array_shift($pieces);
$FileExt = join(".", $pieces);
unset($pieces);

// Make sure that the user isn't trying to break out of the $path by
// using a relative filename.
// No need to check for '/' since all downloads are relative to $imagePath,
// $DownloadPath or $mincPath
if (strpos("..", $File) !== false) {
    error_log("ERROR: Invalid filename");
    header("HTTP/1.1 400 Bad Request");
    exit(4);
}

$FullPath = $volumePath . '/' . $File;

switch($FileExt) {
case 'obj':
    $MimeType = "text/plain";
    $DownloadFilename = basename($File);
    break;
default:
    $MimeType = 'application/octet-stream';
    $DownloadFilename = basename($File);
    break;
}

if (!file_exists($FullPath)) {
    error_log("ERROR: File $File does not exist");
    header("HTTP/1.1 404 Not Found");
    exit(5);
}

header("Content-type: $MimeType");
if (!empty($DownloadFilename)) {

    header("Content-Disposition: attachment; filename=$DownloadFilename");
}

$fp = fopen($FullPath, 'r');
header("Content-Length: " . filesize($FullPath));
while(!feof($fp)) {
    print fread($fp, 1024);
}
fclose($fp);
?>
