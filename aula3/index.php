<?php
include 'request.php';
/*
var_dump($_SERVER);
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_SERVER['SERVER_PROTOCOL']);
var_dump($_SERVER["SERVER_ADDR"]);
var_dump($_SERVER["REMOTE_ADDR"]);
*/
$method = $_SERVER['REQUEST_METHOD'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$server_ip = $_SERVER["SERVER_ADDR"];
$remote_ip = $_SERVER["REMOTE_ADDR"];
$resource = substr( $_SERVER["REQUEST_URI"],1,5);
$parameters = substr($_SERVER["REQUEST_URI"],8);

$request = new Request($method, $protocol, $server_ip, $remote_ip, $resource, $parameters);
var_dump($request);

