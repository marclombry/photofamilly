<?php
require_once('app/functions.php');
$content='';
$folderPath=[];
$pictures=[];
//I retrieve the file path//
$path ="app/assets/pictures";
// call a function for drop a all folder
$folderPath = recupContentInFolder($path);
// if folder find
if(!empty($folderPath)){
	// go through the files and recover the image path
	foreach ($folderPath as $key => $paths) {
		//insert in array data for pictures
		$pictures[] = recupContentInFolder($paths);
	}
}
require_once("app/view/index.view.php");