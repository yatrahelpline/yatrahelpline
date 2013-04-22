<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Displayrelation_model extends CI_Model {

function relation_getall(){

            //$this->load->database();
	    $query = $this->db->get('relation');
	    return $query->result();
	    }
}

?>
