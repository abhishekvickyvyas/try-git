
<?php
$data['path']='/home/indiamart/public_html/10into/web/abhi/sonu.txt';
$data['type']='r';
$domain='serve.biztradeshows';
$mail=file_api($data,$domain);
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
var_dump($mail);
echo "</br></br>"  ;
$myJSON = json_decode($mail);
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

var_dump($myJSON);
echo "</br></br>"  ;
var_dump($cars);
?>