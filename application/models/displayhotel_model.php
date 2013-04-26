<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Displayhotel_model extends CI_Model {

function hotel_getall(){

            //$this->load->database();
	    $query = $this->db->get('hotel');
	    return $query->result();
	    }



            function hotel_getedit($id){

            $query = $this->db->query("select * from hotel where hotelid =$id");

             $row = $query->row();

             return $row;




	    }

}

?>
