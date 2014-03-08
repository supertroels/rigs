<?
/* Set sails :) */
$rigs->sails();

/* First require the worker... */
if($rigs->worker){
	require($rigs->worker);
}

/* ...then the WP header. */
get_header();

/* Require the main view file */
if($rigs->view){
	require($rigs->view);
}

/* And finally the WP footer */
get_footer();
?>