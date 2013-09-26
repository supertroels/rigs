<?
/* Set sails :) */
$rigs->sails();

/* First require the worker... */
if($rigs->worker){
	require($rigs->worker);
}

/* ...then the WP header. */
get_header();

/* If a custom head.view.php file exists, require that now. */
if($head = get_view($rigs->head)){
	require($head);
}

/* Require the main view file */
if($rigs->view){
	require($rigs->view);
}

/* Require any custom foot.view.php */
if($foot = get_view($rigs->foot)){
	require($foot);
}

/* And finally the WP footer */
get_footer();
?>