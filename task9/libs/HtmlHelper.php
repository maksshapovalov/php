<?php
class HtmlHelper
{
	public static function getMultiple($name, $array)
	{
		$multiple = '<select multiple name="'.$name.'">';
		foreach ($array as $key => $option)
		{
			$multiple .= '<option>'.$option.'</option>';
		}
		$multiple .= '</select>';
		return $multiple;
	}
	
	public static function getRadio($name, $array)
	{
		foreach ($array as $option)
		{
			$radio .= '<input type="radio" name="'.$name.'" value="'.$option.'">'.$option.'<br>';
		}
		return $radio;
	}
	
	public static function getCheckBox($name, $array)
	{
		foreach ($array as $option)
		{
			$checkBox .= '<input type="checkbox" name="'.$name.'" value="'.$option.'">'.$option.'<br>';
		}
		return $checkBox;
	}
	
	public static function getTable($array)
	{
		$table = '<table cellpadding="5" cellspacing="0" border="1">';
		foreach ($array as $key => $value) {
			$table .= "<tr>";
			foreach ($value as $data)
				$table .= "<td>".$data."</td>";
			$table .= "</tr>";
		}
		$table .= "</table>";
		return $table;
	}
	
	public static function getList ($type, $array)
	{
		$list = '<'.$type.'>';
		foreach ($array as $value)
		{
			if (is_array($value))
			{
				$list .= '<'.$type.'>';
				foreach ($value as $valueNew)
				{
					$list .= '<li>'.$valueNew.'</li>';
				}
				$list .= '</'.$type.'>';
			}
			else
			{
				$list .= '<li>'.$value.'</li>';
			}
		}
		$list .= '</'.$type.'>';
		return $list;
	}
	
	public static function getDescriptionList($array)
	{
		$list = '<dl>';
		foreach ($array as $key=>$value)
		{
			$list .= '<dt>'.$key.'</dt><dd>'.$value.'</dd>';
		}
		$list .= '</dl>';
		return $list;
	}
}