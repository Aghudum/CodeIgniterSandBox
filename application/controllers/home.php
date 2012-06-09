<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	protected $global_data = 'Gudus';
	
	public function __construct()
    {
    	parent::__construct();
        // Your own constructor code
        $this->global_data = 'Wadatah!';
    }
       
	public function index()
	{
		/*$this->load->model('Person');
		$user = new Person("Aghudum", "Okowa",28);
		
		$data2 = array(
               	'firstName' => $user.GetFirstName(),
               	'lastName' => $user.GetLastName,
				'age' => $user.GetAge(),
               	'message' => $this->global_data
          );*/
          
		$data = array(
               	'title' => 'My Title',
               	'heading' => 'My Heading',
               	'message' => $this->global_data
          );
          
        
		$this->load->view('home', $data);
	}
}
