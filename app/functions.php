<?php

function recupContentInFolder($paths){
	$contentDir=[];
		if(is_dir('/')){
			
			if($folder = @opendir($paths))
    		{
    			while(false !== ($file = readdir($folder)))
    			{
    				$extension = pathinfo($file, PATHINFO_EXTENSION);
			        if($extension != 'db' && $extension != 'txt' && $extension != 'js' && $extension != 'php')
			        {
			            if($file != '.' && $file != 'db' && $file != '..' && $file != 'index.php')
			            {
			              // encoding en utf-8 the name of image for avoid display bug;
			              $file = utf8_encode ($file);
			             //add in array the folderPath
			              array_push($contentDir,$paths.'/'.$file);    
			            }
			        }
    			}
    			closedir($folder);
    		}
		}
	return $contentDir;
}