<?php

include_once ('../model/request.php');
include_once ('../model/db_manager.php');

class ResourceController
{	
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}
	private function search($request) {
		
		if(empty($request->getParameters())){
				$query = 'SELECT * FROM bd_web.'.$request->getResource();
		
		$result = (new DBConnector())->query($query);
		
		return $result->fetchAll(PDO::FETCH_ASSOC);
		}else{
			$query = 'SELECT * FROM bd_web.'.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		
		$result = (new DBConnector())->query($query);
		
		return $result->fetchAll(PDO::FETCH_ASSOC);	
		}
		
		
	}
		
	private function queryParams($params) {
		$query = "";		
		
		foreach($params as $key => $value) {
			$query .= $key.' = '.'"'.$value.'"'.' AND ';	
		}
		$query = substr($query,0,-5);
		
		return $query;
	}	
}




