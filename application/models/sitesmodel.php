<?php
	class Sitesmodel extends CI_Model{
	
		function __contruct(){
			parent::__contruct();
		}
		
		function get_sites(){
			$query = $this->db->order_by('name','ASC')->get('sites');
			return $query->result();
		}
		
		function get_site($slug){
			$query = $this->db->where('slug',$slug)->get('sites');
			return $query->row();
		}
	
	}
?>