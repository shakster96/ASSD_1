<?php 
   Class celebModel extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
      } 

      public function insert($data) { 
         if ($this->db->insert("celeb", $data)) { 
            return true; 
         } 
      } 
      public function getAllCelebs(){
      	$this->db->select("name,imgURL,vote");
      	$this->db->order_by('vote', 'DESC');
  		$this->db->from('celeb');
  		$query = $this->db->get();
  		return $query->result();
      }

      public function getTwoCelebs(){
      	$this->db->select("id,name,imgURL,vote");
      	$this->db->order_by('id', 'RANDOM');
      	$this->db->limit(2); 
      	$this->db->from('celeb');
  		$query = $this->db->get();
  		return $query->result();
      }

      public function increaseVote($id){

      	$this->db->set('vote', 'vote+1');
		    $this->db->where('id', $id);
		    $this->db->update('celeb');
      	return true;

      }
   } 
?> 