<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function index(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		// $this->title = "Yaaaaa";
		// $this->keywords = "arny, arnodo";
		
		// $this->_render('pages/home');

		//	$this->output->enable_profiler(TRUE);
		// get all the products
	//	$data['products'] = Product::get_products();


		//print_r($data['products']);
		// render the view
		//$this->load->view('home', $data);

		$this->_render('pages/home');

	}
	
}