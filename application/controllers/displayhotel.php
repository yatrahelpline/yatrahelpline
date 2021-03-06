<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Displayhotel extends CI_Controller {

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
		$this->load->model('displayhotel_model');
	        $data['query']=$this->displayhotel_model->hotel_getall();
                $this->load->view('header.php');
                $this->load->view('top.php');
		$this->load->view('hotel/display.php',$data);
		$this->load->view('footer.php');


	}



         public function edit($id=0)
	{




                        $this->load->helper(array('form', 'url'));
		        $this->load->library('form_validation');
                        $this->form_validation->set_rules('title', 'Title', 'required');
                        $this->form_validation->set_rules('keyword', 'Keyword', 'required');
                        $this->form_validation->set_rules('descr', 'Description', 'required');
                        $this->form_validation->set_rules('data', 'Data', 'required');
                        $this->form_validation->set_rules('relationalid', 'Relation Id', 'required');
                        $this->form_validation->set_rules('category', 'Category', 'required');
                        $this->form_validation->set_rules('roomrate', 'roomrate', 'required');
                        $this->form_validation->set_rules('contactinfo', 'Contactinfo', 'required');
                        $this->form_validation->set_rules('faclitiies', 'Faclitiies', 'required');
                        $this->form_validation->set_rules('peakseason', 'Peakseason', 'required');


                        $add['table']='hotel';
			$add['data']['title']           = $this->input->post('title');

			$add['data']['keyword']           = $this->input->post('keyword');
			$add['data']['descr']           = $this->input->post('descr');
			$add['data']['data']           = $this->input->post('data');
			$add['data']['relationid']        = $this->input->post('relationalid');
			$add['data']['roomrate']           = $this->input->post('roomrate');

                        $add['data']['contactinfo']           = $this->input->post('contactinfo');
                        $add['data']['faclitiies']           = $this->input->post('faclitiies');
                        $add['data']['peakseason']           = $this->input->post('peakseason');
                        $add['data']['category']             = $this->input->post('category');


                              $data['error']='sss';
                              $data['id']=intval($id);
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
                           $data['msg']='You have Updated successfully';
                           }




                           }



                           $this->load->model('displayhotel_model');
	                   $data['query']=$this->displayhotel_model->hotel_getedit($id);


              $this->load->view('header.php');
              $this->load->view('top.php');
	      $this->load->view('hotel/contentedit.php',$data);
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

?>
