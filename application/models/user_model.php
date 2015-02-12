<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class user_model extends CI_Model {
	
	public $tableName;
	
	function __construct(){
		parent::__construct();
		$this->tableName = 'user';
	}
	
	public function insertUser($data){
		$data['password'] = md5($data['password']);
		$insertData = array(
			'username' => $data['username'],
			'password' => $data['password'],
			'email' => $data['email']
		);
		
		$duplicateUsername = $this->db->get_where($this->tableName, array('username'=>$data['username']));
		if($duplicateUsername->num_rows()){
			return false;
		}
		
		$result = $this->db->insert($this->tableName, $insertData);
		
		if($result){
			$id = $this->db->insert_id();
			$query = $this->db->get_where($this->tableName, array('id'=>$id));
			return $query->row();
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
	
	
}