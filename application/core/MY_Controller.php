<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public $master_template_file = 'global/html';
	private $page_title = SITE_NAME;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('parser');
	}

	/*
	 * Master templating functionality, parse the master template view and replace with predifinied values
	 */
	public function template($view, $view_data = array(), $return = FALSE)
	{
		// set the name of the view file to be loaded within the master template
		$data['current_view_file'] = $view;
		// set base url for templates
		$data['base_url'] = base_url();
		$data['current_url'] = $data['base_url'] . uri_string();
		// Set metadata for google, twitter and facebook.
		$data['meta_description'] = '';
		$data['meta_keywords'] = '';
		$data['meta_title'] = '';
		$data['meta_image'] = '';

		// Merge data passed from the controller with what we define here
		$view_data = array_merge($data, $view_data);
		// set title to default one if it wasnt set
		if (empty($view_data['title']))
		{
			$view_data['title'] = $this->page_title;
		}

		// load parser library
		$this->load->library('parser');
		// parse master template
		$this->parser->parse($this->master_template_file, $view_data, $return);
	}
}
