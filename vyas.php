<?php
include '/home/indiamart/public_html/serve-biztradeshows-com/domaindetect.php';
$data['path']='/var/tmp/task1usedata.json';
$data['type']='r';
$data['fileType']='json';
$data['dataType']="json";
//var_dump($domain);
$mail=file_api($data,$domain);

$x=json_decode($mail,true);
 

$new = array("firstName"=>"sonu", "lastName"=>"goutam", "age"=>"56");



$y=array_merge($x,$new);


$data['type']='w';

$z=json_encode($y);
$data['data']=$z;

$mail=file_api($data,$domain);
var_dump($mail);

function file_api($data,$domain)
{

$options = array('http' =>
        array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $mail = file_get_contents('http://'.$domain.'/index.php/v1/crm/readWriteFile', false, $context);
    return $mail;

}
?>