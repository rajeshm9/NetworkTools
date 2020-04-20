<?php
header('Content-Type: application/json');
$data['mobile']= '7837321235';
$data['name']='Rajesh Mahajan';
$data['id'] = uniqid(); 
$data['store'] = 'Vodafone Store'; 


echo json_encode($data);

?>
