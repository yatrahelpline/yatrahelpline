<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Displayhomestay_model extends CI_Model {

function homestay_getall(){

            //$this->load->database();
	    $query = $this->db->get('homestay');
	    return $query->result();
	    }



            function homestay_getedit($id){

            $query = $this->db->query("select * from homestay where homestayid =$id");

             $row = $query->row();

             return $row;




	    }

}

?>
