<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relation extends CI_Controller {

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
		
		$this->add();
		
	}


       public function add()
	{




                        $this->load->helper(array('form', 'url'));
		        $this->load->library('form_validation');

                        $this->form_validation->set_rules('xvalue', 'xvalue', 'required');
                        $this->form_validation->set_rules('yvalue', 'yvalue', 'required');
                        $this->form_validation->set_rules('latitude', 'latitude', 'required');
                        $this->form_validation->set_rules('longitude', 'longitude', 'required');
                        $this->form_validation->set_rules('howtoreach', 'howtoreach', 'required');



						$add['table']='relation';
						$add['data']['xvalue']           = $this->input->post('xvalue');
						$add['data']['yvalue']         = $this->input->post('yvalue');
						$add['data']['latitude']           = $this->input->post('latitude');
						$add['data']['longitude']            = $this->input->post('longitude');
						$add['data']['howtoreach']      = $this->input->post('howtoreach');
						
						
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
		$this->load->view('relation/content.php');
		$this->load->view('footer.php');



        }
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
