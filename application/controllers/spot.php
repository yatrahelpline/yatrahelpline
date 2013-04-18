<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spot extends CI_Controller {

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
                        $this->form_validation->set_rules('title', 'Title', 'required');

                        $this->form_validation->set_rules('title', 'Title', 'required');
                        $this->form_validation->set_rules('keyword', 'Keyword', 'required');
                        $this->form_validation->set_rules('descr', 'Description', 'required');
                        $this->form_validation->set_rules('data', 'Data', 'required');
                        $this->form_validation->set_rules('relationid', 'Relation Id', 'required');
                        $this->form_validation->set_rules('primary', 'Primary', 'required');

                        $add['table']='spot';
			$add['data']['title']           = $this->input->post('title');

			$add['data']['keyword']           = $this->input->post('keyword');
			$add['data']['descr']           = $this->input->post('descr');
			$add['data']['data']           = $this->input->post('data');
			$add['data']['relationid']        = $this->input->post('relationid');
			$add['data']['primary']           = $this->input->post('primary');
                        

                              $data['error']='sss';
                              $data['msg']='';




                        if ($this->form_validation->run() == FALSE)
                            {

                              $data['error']='';

                            //$this->load->view('spot/content.php');
                            }
                            else
                            {
                                   //  insert($add);

                              $data['error']= $this->do_upload('imageid1');
                              $data1['error']= $this->do_upload('imageid2');
                              $data2['error']= $this->do_upload('imageid3');
                            
                        

                           $add['data']['imageid1']   = $data['error']['upload_data']['file_name'];
                           $add['data']['imageid2']   = $data1['error']['upload_data']['file_name'];
                           $add['data']['imageid3']   = $data2['error']['upload_data']['file_name'];
                           $ins=insert($add);
                           $data['msg']='';
                           if($ins)
                           {
                           $data['msg']='You have submitted successfully';
                           }



                           }






              $this->load->view('header.php');
              $this->load->view('top.php');
	      $this->load->view('spot/content.php',$data);
              $this->load->view('footer.php');



        }

  function do_upload($field="")
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($field))
		{
			$error = array('error' => $this->upload->display_errors());

			return $error;

                        //echo $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			return $data;

                       // echo $data;
		}
	}


	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */