<?php

include('httpful.phar');

$json = json_encode($_POST);

$post_request = 'http://172.22.51.134/aula8/user/create';

$response = \Httpful\Request::post($post_request)->sendsJson()->body($json)->send();
echo  $response->body;

