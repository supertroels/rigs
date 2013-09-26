<?

class rigs {


	/**
	 * Runs on class construction
	 *
	 * @author Troels Abrahamsen
	*/
	
	function __construct(){
		$this->view 	= false;
		$this->head 	= 'head';
		$this->foot 	= 'foot';
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
	 * function description
	 *
	 * @author Troels Abrahamsen
	 * @param $param
	 * @return return type
	*/
	
	function interpret_request(){

		global $post;

		if(is_front_page() and $this->view = get_view('front-page')){
			$this->page = 'front-page';
			if($this->worker = get_worker('front-page')){
			}
		}
		elseif(is_404() and $this->view = get_view('404')){
			$this->page = '404';
			if($this->worker = get_worker('404')){
			}
		}
		elseif(is_single() or is_page()){
			if(is_page() and $this->view = get_view('page-'.$post->post_name)){
				$this->page = 'page-'.$post->post_name;
				if($this->worker = get_worker('page-'.$post->post_name)){
				}
			}
			elseif(is_page() and $this->view = get_view('page')){
				$this->page = 'page';
				if($this->worker = get_worker('page')){
				}
			}
			elseif($this->view = get_view('single-'.get_post_type())){
				$this->page = 'single-'.get_post_type();
				if($this->worker = get_worker('single-'.get_post_type())){
				}
			}
			elseif($this->view = get_view('single')){
				$this->page = 'single';
				if($this->worker = get_worker('single')){
				}
			}
		}
		elseif(is_archive()){

			$post_type = get_query_var('post_type');

			if($this->view = get_view('archive-'.$post_type)){
				$this->page = 'archive-'.$post_type;
				if($this->worker = get_worker('archive-'.$post_type)){
				}
			}
			elseif($this->view = get_view('archive')){
				$this->page = 'archive';
				if($this->worker = get_worker('archive')){
				}
			}
		}
		else{
			if($this->view = get_view('index')){
				$this->page = 'index';
				if($this->worker = get_worker('index')){
				}
			}
			else{
				die('You need an index file');
			}
		}

	}



}


?>