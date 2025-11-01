
<?php




$curl = curl_init();
$resArr = array();
$resArr["name"] = "paras";
$resArr["mobile"] = "8899889988";
$resArr["phone"] = "8899889988";
$resArr["email_from" ]= "paras@gmail.com";
$resArr["city" ]= "";
$resArr["contact_name" ]= "paras";
$resArr["inq_source" ]= "website lp";
$resArr["reequired_product" ]= "HVLS Fans";
$resArr["QUERY_ID" ]= time();


$curl = curl_init();
echo json_encode($resArr);
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://crm.marutair.com/marutAir/lead/add',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>json_encode($resArr),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>