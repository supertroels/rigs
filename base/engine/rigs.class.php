<?

class rigs {


	/**
	 * Runs on class construction
	 *
	 * @author Troels Abrahamsen
	*/
	
	function __construct(){
		$this->view 	= false;
		$this->header 	= 'header';
		$this->footer 	= 'footer';
		$this->worker 	= false;
		$this->page 	= false;
	}



	/**
	 * The initial function to start up rigs.
	 * Designed to run at the beginning of the index file.
	 *
	 * @author Troels Abrahamsen
	*/
	
	function sails(){

		$this->interpret_request();

	}


	/**
	 * This function interprets which view and worker to load
	 * from the 'site' folder
	 *
	 * @author Troels Abrahamsen
	 * @param $param
	 * @return return type
	*/
	
	function interpret_request(){

		global $post;

		if(is_front_page() and $this->view = get_view('front-page')){
			$this->page = 'front-page';
			$this->worker = get_worker('front-page');
		}
		elseif(is_404() and $this->view = get_view('404')){
			$this->page = '404';
			$this->worker = get_worker('404');
		}
		elseif(is_search() and $this->view = get_view('search')){
			$this->page = 'search';
			$this->worker = get_worker('search');
		}
		elseif(is_single() or is_page()){
			if(is_page() and $this->view = get_view('page-'.$post->post_name)){
				$this->page = 'page-'.$post->post_name;
				$this->worker = get_worker('page-'.$post->post_name);
			}
			elseif(is_page() and $this->view = get_view('page')){
				$this->page = 'page';
				$this->worker = get_worker('page');
			}
			elseif($this->view = get_view('single-'.get_post_type())){
				$this->page = 'single-'.get_post_type();
				$this->worker = get_worker('single-'.get_post_type());
			}
			elseif($this->view = get_view('single')){
				$this->page = 'single';
				$this->worker = get_worker('single');
			}
		}
		elseif(is_archive()){

			$post_type = get_query_var('post_type');

			if($this->view = get_view('archive-'.$post_type)){
				$this->page = 'archive-'.$post_type;
				$this->worker = get_worker('archive-'.$post_type);
			}
			elseif($this->view = get_view('archive')){
				$this->page = 'archive';
				$this->worker = get_worker('archive');
			}
		}
		else{
			if($this->view = get_view('index')){
				$this->page = 'index';
				$this->worker = get_worker('index');
			}
			else{
				die('You need at least an index.view.php file!');
			}
		}

	}



}


?>