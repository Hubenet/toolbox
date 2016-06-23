<?php
/** 
 * @author Theo Hubenet
 * @version 1.0
 * 
 * Toolbox class with easy to use handy public static methods.
 */

class tb
{
	public static function out($var,$htmlentities=0)
	{
		// output structured array or object
		echo '<pre>';
		if($htmlentities==1)
		{
			$var = htmlentities($var);
		}
		print_r( $var );
		echo '</pre>';
	}
}
