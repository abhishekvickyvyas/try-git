<?php
include '/home/indiamart/public_html/serve-biztradeshows-com/domaindetect.php';

// $start_row = 5; //define start row
$i = 1; //define row count flag
$data['path']='/home/indiamart/public_html/10into/web/neg.csv';


$data['type']='r';
$mail=file_api($data,$domain);
$neg_key=explode("\n",$mail);

// $file = fopen("/home/indiamart/public_html/10into/web/neg.csv", "r");
foreach ($neg_key as $key => $value) 
{
    // echo $neg_key[$key]; exit;
 if($i==count($neg_key))
     break;
 $exploded_neg=explode(',', $neg_key[$key]); 
 $j=0;
 
 foreach ($exploded_neg as $key1 => $value1) 
 {
    if(isset($value1) && $value1!="")
    {
        $negative1[$j]=$value1;   
        $j++;
    }

 }

$negative[$i]=$negative1;
unset($negative1);
$i++;    

} 
 $json=json_encode($negative,true);
 // var_dump(json_encode($negative)); exit;
// $negative=json_encode($negative);
// var_dump($mising_data); exit;
//  $mising_data=json_encode($negative);
//  var_dump($mising_data); exit;
 if($json)
 {
$data['path']='/home/indiamart/public_html/10into/web/json/manage/neg_keywords.json';
$data['type']='w';
$data['fileType']='json';
$data['data']=json_encode($negative);
$data['dataType']="json";
$mail=file_api($data,$domain);
$status=json_decode($mail,true);
if($status['status']['code']==1)
$msg="Executed";
else
$msg=$status['status']['message'];
$ret=array("status"=>$status['status']['code'],"msg"=>$msg);
echo json_encode($ret,true);

}
// if(isset($json_data))
// {
//  $data['path']='/home/indiamart/public_html/10into/web/json/manage/neg_keywords.json';
//         $data['type']='w';
//         $data['fileType']='json';
//         $data['data']=$json_data;
//         $mail=file_api($data,$domain);
//         var_dump($mail); exit;
// }
// $fp = fopen('/home/indiamart/public_html/10into/web/json/manage/neg_keywords.json', 'w');
// fwrite($fp, $json_data);
// fclose($fp); 



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