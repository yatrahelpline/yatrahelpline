<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header.php');
                $this->load->view('top.php');
		$this->load->view('gallery/content.php');
		$this->load->view('footer.php');


		
	}


         public function add()
	{




                        $this->load->helper(array('form', 'url'));
		        $this->load->library('form_validation');

                        $this->form_validation->set_rules('title', 'Title', 'required');
                        $this->form_validation->set_rules('keyword', 'Keyword', 'required');
                        $this->form_validation->set_rules('descr', 'Description', 'required');
                        $this->form_validation->set_rules('name', 'Name', 'required');
                        


                        $add['table']='gallery';
			$add['data']['title']           = $this->input->post('title');
			$add['data']['keyword']           = $this->input->post('keyword');
			$add['data']['descr']           = $this->input->post('descr');
			$add['data']['name']           = $this->input->post('name');
			

                           if ($this->form_validation->run() == FALSE)
                            {
                                    //$this->load->view('spot/content.php');
                            }
                            else
                            {
                                     insert($add);
                            }






              $this->load->view('header.php');
              $this->load->view('top.php');
	      $this->load->view('gallery/content.php');
              $this->load->view('footer.php');



        }
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */