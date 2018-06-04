<?php
function upload_file($filename, $direction){
	if ($_FILES["$filename"]['error'] == UPLOAD_ERR_OK) {
		$dir = $direction . $_FILES["$filename"]['name'];
		if (move_uploaded_file($_FILES["$filename"]['tmp_name'], $dir)) {
			return UPLOAD_SUCCESS_CONFIG;
		} else {
			return UPLOAD_ERROR_CONFIG;
		}
	} else {
		switch ($_FILES["$filename"]['error']) {
			case UPLOAD_ERR_FORM_SIZE:
				echo ERROR_SIZE_CONFIG;
				break;
			case UPLOAD_ERR_INI_SIZE:
				echo ERROR_SIZE_CONFIG;
				break;
			case UPLOAD_ERR_NO_FILE:
				echo ERROR_NO_FILE_CONFIG;
				break;
			default:
				echo ERROR_DEF_CONFIG;
		}
	}
}

function delete_file($file){
	if (is_file($file)){
		unlink($file);
		return DELETE_SUCCESS_CONFIG;
	}else return DELETE_FAIL_CONFIG;
}

function get_files($direction){
	$files = array_slice(scandir($direction),2);
	return  array_combine($files,array_map(get_file_size, array_map(get_full_path, $files)));
}

function get_full_path($file){
	return dirname(__file__) . DIR_CONFIG."$file";
}

function get_file_size($file){
	if(!file_exists($file)) return false;
	$filesize = filesize($file);
	if($filesize > 1024){
		$filesize = ($filesize/1024);
		if($filesize > 1024){
			$filesize = ($filesize/1024);
			if($filesize > 1024) {
				$filesize = ($filesize/1024);
				$filesize = round($filesize, 1);
				return $filesize." ГБ";       
			} else {
				$filesize = round($filesize, 1);
				return $filesize." MБ";   
			}       
		} else {
			$filesize = round($filesize, 1);
			return $filesize." Кб";   
		}  
	} else {
		$filesize = round($filesize, 1);
		return $filesize." байт";   
	}
}
?>
