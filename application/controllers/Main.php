<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function get_params($xss = TRUE)
	{
		$CI =& get_instance();
		$get = $CI->input->get(NULL, $xss) ? $CI->input->get(NULL, $xss) : array();
		$post = $CI->input->post(NULL, $xss) ? $CI->input->post(NULL, $xss) : array();
		$params = array_merge(array_merge($get, $post), $_FILES);

		return $params;
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function romeo()
	{
		$this->load->view('romeo_page');
	}

	public function sendEmail()
	{
		$CI =& get_instance();
		$params = $this->get_params();
		print_r($params);
		die;
	}
}
