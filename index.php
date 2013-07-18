<?
if(is_front_page() and $file = get_view('front-page')){
	if($worker = get_worker('front-page')){
	}
}
elseif(is_404() and $file = get_view('404')){
	if($worker = get_worker('404')){
	}
}
elseif(is_single() or is_page()){
	if(is_page() and $file = get_view('page-'.$post->post_name)){
		if($worker = get_worker('page-'.$post->post_name)){
		}
	}
	elseif(is_page() and $file = get_view('page')){
		if($worker = get_worker('page')){
		}
	}
	elseif($file = get_view('single-'.get_post_type())){
		if($worker = get_worker('single-'.get_post_type())){
		}
	}
	elseif($file = get_view('single')){
		if($worker = get_worker('single')){
		}
	}
}
elseif(is_archive()){

	$post_type = get_query_var('post_type');

	if($file = get_view('archive-'.$post_type)){
		if($worker = get_worker('archive-'.$post_type)){
		}
	}
	elseif($file = get_view('archive')){
		if($worker = get_worker('archive')){
		}
	}
}
else{
	if($file = get_view('index')){
		if($worker = get_worker('index')){
		}
	}
	else{
		die('You need an index file');
	}
}



/* First require the worker... */
if($worker){
	require($worker);
}

/* ...then the WP header. */
get_header();

/* If a custom head.view.php file exists, require that now. */
if($head = get_view('head')){
	require($head);
}

/* Require the main view file */
if($file){
	require($file);
}

/* Require any custom foot.view.php */
if($foot = get_view('foot')){
	require($foot);
}

/* And finally the WP footer */
get_footer();
?>