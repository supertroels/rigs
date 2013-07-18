<?

/*
********************************
FUNCTIONS
********************************
*/

/* Basic base functions */
function get_base_dir($url = false){
	if($url){
		return get_template_directory_uri().'/base';
	}
	return get_template_directory().'/base';
}

function get_base_script_dir($url = true){
	return get_base_dir($url).'/resources/scripts';
}

function get_base_style_dir($url = true){
	return get_base_dir($url).'/resources/styles/css';
}

function get_base_worker_dir(){
	return get_base_dir().'/workers';
}

function get_base_view_dir(){
	return get_base_dir().'/views';
}

function get_base_engine_dir(){
	return get_base_dir().'/engine';
}

/* Basic site functions */
function get_site_dir($url = false){
	if($url){
		return get_template_directory_uri().'/site';
	}
	return get_template_directory().'/site';
}

function get_site_script_dir($url = true){
	return get_site_dir($url).'/resources/scripts';
}

function get_site_style_dir($url = true){
	return get_site_dir($url).'/resources/styles/css';
}

function get_site_worker_dir(){
	return get_site_dir().'/workers';
}

function get_site_view_dir(){
	return get_site_dir().'/views';
}

function get_site_engine_dir(){
	return get_site_dir().'/engine';
}


/* Get helper functions */


/**
 * Retreives the views dir if the file is present
 *
 * @author Troels Abrahamsen
 * @param $view
 * @return string
*/

function get_view($view){

	$file 			= get_site_view_dir().'/'.$view.'.view.php';
	$second_file	= get_base_view_dir().'/'.$view.'.view.php';
	if(file_exists($file)){
		return $file;
	}
	elseif(file_exists($second_file)){
		return $second_file;
	}
	return false;

}

/**
 * Retreives the views dir if the file is present
 *
 * @author Troels Abrahamsen
 * @param $view
 * @return string
*/

function get_worker($worker){

	$file 			= get_site_worker_dir().'/'.$worker.'.worker.php';
	$second_file	= get_base_worker_dir().'/'.$worker.'.worker.php';
	if(file_exists($file)){
		return $file;
	}
	elseif(file_exists($second_file)){
		return $second_file;
	}
	return false;

}

/**
 * Retreives the views dir if the file is present
 *
 * @author Troels Abrahamsen
 * @param $view
 * @return string
*/

function get_style($style){

	$file 			= get_site_style_dir().'/'.$style.'.css';
	$second_file	= get_base_style_dir().'/'.$style.'.css';
	$cfile 			= get_site_style_dir(false).'/'.$style.'.css';
	$csecond_file	= get_base_style_dir(false).'/'.$style.'.css';
	if(file_exists($cfile)){
		return $file;
	}
	elseif(file_exists($csecond_file)){
		return $second_file;
	}
	return false;

}

/**
 * Retreives the views dir if the file is present
 *
 * @author Troels Abrahamsen
 * @param $view
 * @return string
*/

function get_script($script){

	$file 			= get_site_script_dir().'/'.$script.'.js';
	$second_file	= get_base_script_dir().'/'.$script.'.js';
	$cfile 			= get_site_script_dir(false).'/'.$script.'.js';
	$csecond_file	= get_base_script_dir(false).'/'.$script.'.js';
	if(file_exists($cfile)){
		return $file;
	}
	elseif(file_exists($csecond_file)){
		return $second_file;
	}
	return false;

}


/**
 * Retreives the views dir if the file is present
 *
 * @author Troels Abrahamsen
 * @param $view
 * @return string
*/

function get_engine($function){

	$file 			= get_site_engine_dir().'/'.$function.'.php';
	$second_file	= get_base_engine_dir().'/'.$function.'.php';
	if(file_exists($file)){
		return $file;
	}
	elseif(file_exists($second_file)){
		return $second_file;
	}
	return false;

}


?>