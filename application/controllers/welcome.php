<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index($type="")
	{
		$data = array(
			'title' => 'Test page',
		);
		$this->template('global/front_page', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */