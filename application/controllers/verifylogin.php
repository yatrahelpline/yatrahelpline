<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

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


               $this->load->helper(array('form', 'url'));
	       $this->load->library('form_validation');

               $this->form_validation->set_rules('username', 'Username', 'required');
               $this->form_validation->set_rules('password', 'Password', 'required');
               $username = $this->input->post('username');
               $password = $this->input->post('password');

          if ($this->form_validation->run() == FALSE)
                            {
                              $data['error']='';

              $this->load->view('header.php');
              $this->load->view('top.php');
	      $this->load->view('login/loginview.php',$data);
              $this->load->view('footer.php');


                            }else {

                $this->load->model('user');
                $result = $this->user->login($username, $password);
                if($result)
                   {
                  $sess_array = array();

                  foreach($result as $row)
                     {
                       $sess_array = array(
                         'id' => $row->id,
                         'username' => $row->username
                       );
                       $this->session->set_userdata('logged_in', $sess_array);
                     }

                  redirect('dashboard', 'refresh');
                   }
                   else{
                  $this->load->view('login');

                   }
                                
                                
                            }



             /*$this->load->view('header.php');
              $this->load->view('top.php');
	      $this->load->view('login/loginview.php',$data);
              $this->load->view('footer.php');
               */
        }
}