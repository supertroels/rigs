<?
require('site/init.php');
require('base/engine/main.php');
if($file = get_function('main')){
	require($file);
}	
?>