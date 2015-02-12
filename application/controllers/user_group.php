<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_group extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('user_group_model');
		$this->module = $this->router->fetch_class();
		$this->method = $this->router->fetch_method();
		$this->layout = 'default';
	}
	
	protected function render_view($data){
		$output['template'] = 'templates/'.$this->module.'/'.$this->method;
		$output['data'] = $data;
		$this->load->view('layouts/'.$this->layout, $output);
	}
	
	public function index()
	{
		$this->render_view(array());
	}
	
	public function get_list($type = 'html')
	{
		$data = $this->user_group_model->get();
		switch($type){
			case 'json' : 
				$this->rest->JSONHeader();
				if(count($data) > 0){
					echo $this->rest->exportJSONSuccess($data);
				}else{
					echo $this->rest->exportJSONFail('No Data');
				}
				break;
			
			case 'html' :
			default :
				$this->load->view('templates/'.$this->module.'/'.$this->method, array('data'=>$data));
				break;
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */