<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Displayspot_model extends CI_Model {

function spot_getall(){

            //$this->load->database();
	    $query = $this->db->get('spot');
	    return $query->result();
	    }



            function spot_getedit($id){

            $query = $this->db->query("select * from spot where spotid =$id");

             $row = $query->row();

  return $row;




	    }
            
}

?>
