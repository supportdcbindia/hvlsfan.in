<?php
session_start();
error_reporting(0);

$contact_page = "https://hvlsfan.in";
$subject_line= "New Enquiry From HVLS Fan Website";
$from_email = "support@hvlsfan.in";
$to_email = "sales@marutair.com";
$to_email1 = "cs@marutair.com";
$to_email2 = "info@marutair.com";
$to_email3 = "ops1@marutair.com";
$to_email4 = "ops6@marutair.com";


$thanks_page = "https://hvlsfan.in/thankyou.php";

function send_request($data){
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://dcbindia.in/akismetcurl/akismet_check.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $data,
  ));
  $response = json_decode(curl_exec($curl));
  curl_close($curl);
  return $response;
}
$fname= htmlspecialchars(stripslashes(trim($_POST['name'])));
$email= htmlspecialchars(stripslashes(trim($_POST['email'])));
$phone= htmlspecialchars(stripslashes(trim($_POST['number'])));
$cname= htmlspecialchars(stripslashes(trim($_POST['cname'])));
$products= htmlspecialchars(stripslashes(trim($_POST['products'])));


// $resArr = array();
// $resArr["name"] = htmlspecialchars(stripslashes(trim($_POST['name'])));
// $resArr["mobile"] = htmlspecialchars(stripslashes(trim($_POST['number'])));
// $resArr["phone"] = htmlspecialchars(stripslashes(trim($_POST['number'])));
// $resArr["email_from" ]= htmlspecialchars(stripslashes(trim($_POST['email'])));
// $resArr["city" ]= "";
// $resArr["contact_name" ]= htmlspecialchars(stripslashes(trim($_POST['name'])));
// $resArr["inq_source" ]= "website lp";
// $resArr["reequired_product" ]= htmlspecialchars(stripslashes(trim($_POST['products'])));
// $resArr["QUERY_ID" ]= time();



// $curl1 = curl_init();

// curl_setopt_array($curl1, array(
//   CURLOPT_URL => 'https://crm.marutair.com/marutAir/lead/add',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>json_encode($resArr),
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/json'
//   ),
// ));

// $response = curl_exec($curl1);
// curl_close($curl1);

// ==========


// curl_setopt_array($curl, array(
// CURLOPT_URL => 'https://crm.marutair.com/marutAir/lead/add',
// CURLOPT_RETURNTRANSFER => true, 
// CURLOPT_HTTPHEADER => array(
//             'postman-token' => 'a403d56e-550e-1a6a-8288-17c6a0c137f9',
//               'cache-control' => 'no-cache',
//               'content-type' => 'application/json'
//         ),
// CURLOPT_ENCODING => '',
// CURLOPT_MAXREDIRS => 10,
// CURLOPT_TIMEOUT => 0,
// CURLOPT_FOLLOWLOCATION => true,
// CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// CURLOPT_CUSTOMREQUEST => 'POST',
// CURLOPT_POSTFIELDS => json_encode($resArr),
// ));
// $res = curl_exec($curl);

// $response = json_decode(curl_exec($curl));
// curl_close($curl);

$allowed_origins = array('https://hvlsfan.in/', 'https://www.hvlsfan.in/', 'http://hvlsfan.in/', 'http://www.hvlsfan.in/','https://hvlsfan.in', 'https://www.hvlsfan.in', 'http://hvlsfan.in', 'http://www.hvlsfan.in');
if (!in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header('location:'.$contact_page);
}
$curlArr = array_merge($_POST,$_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
/*$curlArr['type'] = "catalogue";*/
$curlArr['save'] = false;
$response = send_request($curlArr);
if($response->result){
  $curlArr = array_merge($_POST,$_SERVER);
  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
  $curlArr['save'] = true;
  $curlArr['bcoz'] = "API CONDITION FAIL";
  $curlArr['status'] = "FAIL";
  $response = send_request($curlArr);
  header('location:'.$contact_page);
}else{
  try{
  if(isset($fname) && trim($fname)!=='' && isset($email) && trim($email)!==''  && isset($phone) && trim($phone)!=='' && isset($cname) && trim($cname)!==''){
      if ($_SESSION["code"]==$_POST['captcha'] && $_POST['captcha'] != "!UNKNOWN_TYPE!" && $_POST['captcha'] != "" && $_SESSION["code"] !="" ){
          if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
              //echo "ERROR junk email detact";
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "JUNK DETACT";
              $curlArr['status'] = "FAIL";
              $response = send_request($curlArr);
              header('location:'.$contact_page);
              
          } else {
              
              //print_r($msg_match_email[0]);
              //echo count($msg_match_email[0]);exit;
              if (0) {
                  //echo "ERROR junk msg";
                  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                  $curlArr['save'] = true;
                  $curlArr['bcoz'] = "JUNK DETACT";
                  $curlArr['status'] = "FAIL";
                  $response = send_request($curlArr);
                  header('location:'.$contact_page);
              } else {
                  require_once ('phpmailer/class.phpmailer.php');
                  $message_body='<div class="">
	<div class="aHl"></div>
	<div id=":th" tabindex="-1"></div>
	<div id=":148" class="ii gt"
		>
		<div id=":12l" class="a3s aiL msg-4316071257868613285">
			
			<div style="height:100%;margin:0;padding:0;width:100%;background-color:#e9eaec">
			
				<center>
					<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
						id="m_-4316071257868613285bodyTable"
						style="border-collapse:collapse;height:100%;margin:0;padding:0;width:100%;background-color:#e9eaec">
						<tbody>
							<tr>
								<td align="center" valign="top" id="m_-4316071257868613285bodyCell"
									style="height:100%;margin:0;padding:50px 50px;width:100%">


									<table border="0" cellpadding="0" cellspacing="0" width="100%"
										class="m_-4316071257868613285templateContainer"
										style="border-collapse:collapse;border:0;max-width:600px!important">
										<tbody>
											<tr>
												<td valign="top" id="m_-4316071257868613285templateBody"
													style="background-color:#ffffff;border-top:0;border:1px solid #c1c1c1;padding-top:0;padding-bottom:0px">
													<table border="0" cellpadding="0" cellspacing="0" width="100%"
														style="min-width:100%;border-collapse:collapse">
														<tbody>
															<tr>
																<td valign="top">
																	<table align="left" border="0" cellpadding="0"
																		cellspacing="0" width="100%"
																		style="min-width:100%;border-collapse:collapse"
																		class="m_-4316071257868613285mcnTextContentContainer">
																		<tbody>
																			<tr>
																				<td valign="top"
																					style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"
																					class="m_-4316071257868613285mcnTextContent">
																					<table align="left" border="0"
																						cellpadding="0" cellspacing="0"
																						width="100%"
																						style="display:block;min-width:100%;border-collapse:collapse;width:100%">
																						<tbody>
																							<tr>
																								<td
																									style="color:#333333;padding-top:20px;padding-bottom:3px">
																									<strong>Name</strong>
																								</td>
																							</tr>
																							<tr>
																								<td
																									style="color:#555555;padding-top:3px;padding-bottom:20px">'.$fname.'</td>
																							</tr>
																						</tbody>
																					</table>
																					<table align="left" border="0"
																						cellpadding="0" cellspacing="0"
																						width="100%"
																						style="border-top:1px solid #dddddd;display:block;min-width:100%;border-collapse:collapse;width:100%">
																						<tbody>
																							<tr>
																								<td
																									style="color:#333333;padding-top:20px;padding-bottom:3px">
																									<strong>Company
																										name</strong>
																								</td>
																							</tr>
																							<tr>
																								<td
																									style="color:#555555;padding-top:3px;padding-bottom:20px">'.$cname.'</td>
																							</tr>
																						</tbody>
																					</table>
																					<table align="left" border="0"
																						cellpadding="0" cellspacing="0"
																						width="100%"
																						style="border-top:1px solid #dddddd;display:block;min-width:100%;border-collapse:collapse;width:100%">
																						<tbody>
																							<tr>
																								<td
																									style="color:#333333;padding-top:20px;padding-bottom:3px">
																									<strong>Product</strong>
																								</td>
																							</tr>
																							<tr>
																								<td
																									style="color:#555555;padding-top:3px;padding-bottom:20px">'.$products.'</td>
																							</tr>
																						</tbody>
																					</table>
																					<table align="left" border="0"
																						cellpadding="0" cellspacing="0"
																						width="100%"
																						style="border-top:1px solid #dddddd;display:block;min-width:100%;border-collapse:collapse;width:100%">
																						<tbody>
																							<tr>
																								<td
																									style="color:#333333;padding-top:20px;padding-bottom:3px">
																									<strong>Phone</strong>
																								</td>
																							</tr>
																							<tr>
																								<td
																									style="color:#555555;padding-top:3px;padding-bottom:20px">
																									'.$phone.'</td>
																							</tr>
																						</tbody>
																					</table>
																					<table align="left" border="0"
																						cellpadding="0" cellspacing="0"
																						width="100%"
																						style="border-top:1px solid #dddddd;display:block;min-width:100%;border-collapse:collapse;width:100%">
																						<tbody>
																							<tr>
																								<td
																									style="color:#333333;padding-top:20px;padding-bottom:3px">
																									<strong>Email</strong>
																								</td>
																							</tr>
																							<tr>
																								<td
																									style="color:#555555;padding-top:3px;padding-bottom:20px">'.$email.'
																								</td>
																							</tr>
																						</tbody>
																					</table>

																				</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr>
												<td valign="top" id="m_-4316071257868613285templateFooter"
													style="background-color:#e9eaec;border-top:0;border-bottom:0;padding-top:12px;padding-bottom:12px">
													<table border="0" cellpadding="0" cellspacing="0" width="100%"
														style="min-width:100%;border-collapse:collapse">
														<tbody>
															<tr>
																<td valign="top">
																	<table align="left" border="0" cellpadding="0"
																		cellspacing="0" width="100%"
																		style="min-width:100%;border-collapse:collapse"
																		class="m_-4316071257868613285mcnTextContentContainer">
																		<tbody>
																			<tr>
																				<td valign="top"
																					class="m_-4316071257868613285mcnTextContent"
																					style="padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#aaa;font-family:Helvetica;font-size:12px;line-height:150%;text-align:center">


																					Sent from <a
																						href="https://hvlsfan.in/"
																						style="color:#bbbbbb"
																						target="_blank"
																						>HVLS Fan</a>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>


								</td>
							</tr>
						</tbody>
					</table>
				</center>
				<div class="yj6qo"></div>
				<div class="adL">
				</div>
			</div>
			<div class="adL">

			</div>
		</div>
	</div>
</div>
';
                  $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
                  $mail->IsSMTP(); // telling the class to use SMTP
                  try {
                    $mail->Host= "mail.smtp2go.com"; // SMTP server
                    $mail->SMTPDebug= 0;                     // enables SMTP debug information (for testing)
                    $emailArr = array("dcbindia@dcbindia.in","dcb@dcbindia.in");
                    if(in_array($email,$emailArr)){
                        $mail->AddAddress('dcbrainsinquiry@gmail.com', $subject_line);
                        $mail->SetFrom($from_email, $subject_line);
                        $mail->addReplyTo($email, $subject_line);
                        
                    }else{
                      $mail->AddAddress($to_email, $subject_line);
                      $mail->AddAddress($to_email1, $subject_line);
                      $mail->AddAddress($to_email2, $subject_line);
                      $mail->AddAddress($to_email3, $subject_line);
                      $mail->AddAddress($to_email4, $subject_line);
                        $mail->SetFrom($from_email, $subject_line);
                        // $mail->AddCC($to_email3, $subject_line);
                        $mail->AddBCC('dcbrainsinquiry@gmail.com', $subject_line);
                        $mail->addReplyTo($email, $subject_line);
                    }

                    
                    $mail->Port = 465;
                    $mail->Subject = $subject_line;
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
                    $mail->Username = "marutair";  
                    $mail->Password = "SpMxvP7eqwhsYwVU"; 
                    $mail->MsgHTML($message_body);
                    //$mail->AddAttachment('images/phpmailer.gif');      // attachment
                   // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
                    $mail->Send();
                    $cookie_name = "inquierymodel";
                    $cookie_value = "inquiryset";
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
                    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                    $curlArr['save'] = true;
                    $curlArr['bcoz'] = "MAIL SEND SUCCUSS";
                    $curlArr['status'] = "SUCCESS";
                    $response = send_request($curlArr);
                    header('location:'.$thanks_page);
                    //echo "Message Sent OK<p></p>\n";
                  }
                  catch(phpmailerException $e) {
                      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                      $curlArr['save'] = true;
                      $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
                      $curlArr['Exception'] = $e->errorMessage();
                      $curlArr['status'] = "FAIL";
                      $response = send_request($curlArr);
                      echo $e->errorMessage(); //Pretty error messages from PHPMailer
                      
                  }
                  catch(Exception $e) {
                    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                      $curlArr['save'] = true;
                      $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
                      $curlArr['Exception'] = $e->getMessage();
                      $curlArr['status'] = "FAIL";
                      $response = send_request($curlArr);
                      echo $e->getMessage(); //Boring error messages from anything else!
                      
                  }
              }
          }
      } else { 
        $curlArr = array_merge($_POST,$_SERVER);
        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
        $curlArr['save'] = true;
        $curlArr['bcoz'] = "CAPTCHA MISMATCH";
        $curlArr['status'] = "FAIL";
        $response = send_request($curlArr);
        ?>
      <script>
          if (confirm("You have enter Wrong Captcha.....Please Enter Correct Captcha Code")) {
              window.location.href = "<?=$contact_page;?>";
          } else {
              window.location.href = "<?=$contact_page;?>";
          }
      </script>
      <?php
      }
  } else { 
    $curlArr = array_merge($_POST,$_SERVER);
    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";
    $curlArr['status'] = "FAIL";
    $response = send_request($curlArr);
    
    ?>
          <script>
              if (confirm("Please Enter All Details Correct..")) {
                  window.location.href = "<?=$contact_page;?>";
              } else {
                  window.location.href = "<?=$contact_page;?>";
              }
          </script>

          <?php
  }
 }catch(Exception $e) {
      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
      $curlArr['save'] = true;
      $curlArr['bcoz'] = "PHPMAILER NOT WORKING OR 500 INTERNAL ERROR";
      $curlArr['Exception'] = $e->getMessage();
      $curlArr['status'] = "FAIL";
      $response = send_request($curlArr);
      //echo $e->getMessage(); //Boring error messages from anything else!
      
  }
}
?>