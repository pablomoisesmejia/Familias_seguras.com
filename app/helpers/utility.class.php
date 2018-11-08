<?php
class Utility{
    public static function saveFile($file, $path, $name){
		if(file_exists($path)){
			if(move_uploaded_file($file['tmp_name'], $path.$name)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
  	}
    
	public static function deleteFile($path, $name){
		if(file_exists($path)){
			if(unlink($path.$name)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}
?>