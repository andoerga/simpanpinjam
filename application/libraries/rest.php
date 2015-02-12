<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rest
 *
 * @author Mogimogi
 */
class rest {
	//put your code here
	
	public function JSONHeader(){
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Content-type: application/json');
	}
	
	public function exportJSONSuccess($data, $message = null){
		$array = array(
			'success' => true,
			'data' => $data,
			'message' => $message
		);
		
		return json_encode($array);
	}
	
	public function exportJSONFail($message = null){
		$array = array(
			'success' => false,
			'message' => $message
		);
		
		return json_encode($array);
	}
	
}
