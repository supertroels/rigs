<?

/**
 * Initiates the boilerplate with the settings
 * defined in init.php in the site/ folder
 *
 * @author Troels Abrahamsen
 * @param $param
 * @return return type
*/

function boilerplate_init(){
	global $settings;
	if($settings->jquery){
		wp_enqueue_script('jquery');
	}
}
add_action('wp_head', 'boilerplate_init', 0);

?>