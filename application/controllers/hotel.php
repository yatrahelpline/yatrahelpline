<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotel extends CI_Controller {

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
		$this->load->view('hotel/content.php');
		$this->load->view('footer.php');
		
		
		
	}


       public function add()
	{




                        $this->load->helper(array('form', 'url'));
		        $this->load->library('form_validation');

                        $this->form_validation->set_rules('title', 'Title', 'required');
                        $this->form_validation->set_rules('keyword', 'Keyword', 'required');
                        $this->form_validation->set_rules('descr', 'Description', 'required');
                        $this->form_validation->set_rules('data', 'Data', 'required');
                        $this->form_validation->set_rules('relationid', 'Relation Id', 'required');
                        $this->form_validation->set_rules('roomrate', 'Room Rate', 'required');
                        $this->form_validation->set_rules('contactinfo', 'Contact Info', 'required');
                        $this->form_validation->set_rules('faclitiies', 'Faclitiies', 'required');
                        $this->form_validation->set_rules('peakseason', 'Peak Season', 'required');


						$add['table']='hotel';
						$add['data']['title']           = $this->input->post('title');
						$add['data']['keyword']         = $this->input->post('keyword');
						$add['data']['descr']           = $this->input->post('descr');
						$add['data']['data']            = $this->input->post('data');
						$add['data']['relationalid']      = $this->input->post('relationid');
						
						$add['data']['roomrate']        = $this->input->post('roomrate');
						$add['data']['contactinfo']     = $this->input->post('contactinfo');
						$add['data']['facilities']      = $this->input->post('faclitiies');
						$add['data']['peakseason']      = $this->input->post('peakseason');

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
	      $this->load->view('hotel/content.php');
              $this->load->view('footer.php');



        }
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
