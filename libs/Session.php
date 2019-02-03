<?php
class Session
{
	public static function init()
	{
		@session_start();	
	}
	
	public static function set($key, $values)
	{
		$_SESSION[$key] = $values;	
	}
	
	public static function get($key)
	{
		if (isset($_SESSION[$key])){
		return $_SESSION[$key];
		}
	}
	
	public static function destroy($key)
	{
		//unset $_SESSION
		session_destroy();
	}
}
?>