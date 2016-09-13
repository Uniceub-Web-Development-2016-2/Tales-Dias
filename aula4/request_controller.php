<?php


class RequestControler
{
	const VALID_METHODS = array('GET', 'POST', 'PUT', 'DELETE');
	const VALID_PROTOCOL = array('HTTP/1.0','HTTP/1.1','HTTPS/1.0');
	
	public function create_request($request_info)
	{
		//      $request_info['REMOTE_METHOD'];
		if(!self::is_valid_method($request_info['REQUEST_METHOD']))
		{
			return array("code" => "405", "message" => "Method Not Allowed");
			
		}
		//      $request_info['SERVER_ADDR'];
		if(!self::is_valid_protocol($request_info['SERVER_PROTOCOL']))
		{
			return array("code" => "505", "message" => "HTTP Version Not Supported");
		}
		//     $request_info['SERVER_PROTOCOL'];
	        if(!self::is_valid_protocol($request_info['SERVER_PROTOCOL']))
		{
	 		return array("code" => "505", "message" => "HTTP Version Not Supported");
		}	
		//      $request_info['REQUEST_URI'];
	 	if(!self::is_valid_uri($request_info['REQUEST_URI']))
 		{                       
		         return array("code" => "400", "message" => "Request with error"); 
		}
		//      $request_info['QUERY_STRING'];
		if(!self::is_valid_uri($request_info['QUERY_STRING']))
		{                                                               
		      return array("code" => "404", "message" => "Request not found");
		}

		
	//	return new Request();
		
	}
	
	public function is_valid_method($method)
	{
		if( is_null($method) || !in_array($method, self::VALID_METHODS))
			return false;
		
		return true;
	}

	public function is_valid_protocol($protocol)
	{
		if( is_null($protocol) || !in_array($protocol, self::VALID_PROTOCOL))
			return false;

		return true;
	}
















}
