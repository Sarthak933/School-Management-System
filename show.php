<?php

$dir = "uploads/";

if ($opendir = opendir($dir)) {
	while (($file = readdir($opendir)) !== FALSE) {
		if ($file!="."&&$file!="..") 
			echo "<a href='$dir/$file' data-lightbox='mygallery'><img src='$dir/$file'></a>";
	}
}

?>