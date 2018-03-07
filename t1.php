<?php
$data['path']='/home/indiamart/public_html/10into/web/abhi/task1usedata.json';
$data['type']='r';
$domain='serve.biztradeshows';
$mail=file_api($data,$domain);
echo $mail;

function file_api($data,$domain)
{
	//print_r($domain);exit;
$options = array('http' =>
        array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $mail = file_get_contents('http://'.$domain.'/index.php/v1/crm/readWriteFile', false, $context);
    print_r($mail);exit;
    return $mail;
}
?>