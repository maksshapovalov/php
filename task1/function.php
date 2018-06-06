<?php
function uploadFile($filename, $direction)
{
	if ($_POST)
	{
		if (checkDir($direction))
		{
			if (UPLOAD_ERR_OK == $_FILES["$filename"]['error']) 
			{
				$fileDir = $direction . $_FILES["$filename"]['name'];
				if (move_uploaded_file($_FILES["$filename"]['tmp_name'], $fileDir))
				{
					chmod($fileDir, 0777);
					return UPLOAD_SUCCESS_CONFIG;
				}
				else 
					return UPLOAD_ERROR_CONFIG;
			}
			else 
			{
				switch ($_FILES["$filename"]['error']) {
					case UPLOAD_ERR_FORM_SIZE:
						return ERROR_SIZE_CONFIG;
					case UPLOAD_ERR_INI_SIZE:
						return ERROR_SIZE_CONFIG;
					case UPLOAD_ERR_NO_FILE:
						return ERROR_NO_FILE_CONFIG;
					default:
						return ERROR_DEF_CONFIG;
				}
			}
		}
		else return DIR_ERROR_CONFIG;
	}
	else return POST_ERROR_CONFIG;
}

function checkDir($direction)
{
	if (is_dir($direction) && is_writable($direction)) return true;
		else return false;
}

function deleteFile($direction, $file)
{
	if (checkDir($direction))
	{	
		if (is_file($direction.$file))
		{
			unlink($direction.$file);
			return DELETE_SUCCESS_CONFIG;
		}
		else return DELETE_FAIL_CONFIG;
	}
	else return DIR_ERROR_CONFIG;
}

function getFiles($direction)
{
	if (is_dir($direction))
	{
		$files = array_slice(scandir($direction),2);
		return  array_combine($files,array_map(getFileSize, array_map(getFullPath, $files)));
	}
	else return false;
}

function getFullPath($file)
{
	return dirname(__file__) . DIR_CONFIG."$file";
}

function getFileSize($file)
{
	if(!file_exists($file)) return false;
	$filesize = filesize($file);
	if($filesize > 1024)
	{
		$filesize = ($filesize/1024);
		if($filesize > 1024)
		{
			$filesize = ($filesize/1024);
			$filesize = round($filesize, 1);
			return $filesize." MБ";   
			       
		} else 
		{
			$filesize = round($filesize, 1);
			return $filesize." Кб";   
		}  
	} else 
	{
		$filesize = round($filesize, 1);
		return $filesize." байт";   
	}
}
?>
