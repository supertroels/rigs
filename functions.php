<?

/* !THIS SHOULD BE DYNAMIC! */
error_reporting(E_WARNING | E_ERROR );
ini_set('display_errors', 'On');

/*
Include the main engine file, the rigs class file
and then make a new rigs object called...you guessed it...$rigs!
*/
require('base/engine/main.php');
require(get_engine('rigs.class'));
$rigs = new rigs();

/*
Call the main engine file which should require all other engine files.
*/
if($file = get_engine('main')){
	require($file);
}
unset($file);

?>