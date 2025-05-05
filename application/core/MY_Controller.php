<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();

        $this->load->library('sendgridmail'); 
   
		
		
		
	}

   

public function doupload($nm_of_file){
		$config['upload_path'] = './upload/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx';
			$config['max_size']             = 10024;			
			$config['encrypt_name']           = true;
			$this->load->library('upload', $config);
			$out=array();
			if ($this->upload->do_upload($nm_of_file))
			{
				$data = array('upload_data' => $this->upload->data());
				$out=array("status"=>"Success","info"=>$data,"ext"=>$data['upload_data']['file_ext'], "fl_nm"=>$data['upload_data']['file_name']);
			}else{
				$out=array("status"=>'Err');
			}
			return $out;
}



    public function sendemail($eml){

        $email_engine = $this->db->query('SELECT * FROM email_engine WHERE is_default = 1')->row(); 


        if($email_engine->name =='Sendgrid'){
            $pp = $this->sendgridmail->mail($eml); 
        }elseif ($email_engine->name =='AWS_SES'){
            $pp = $this->sendSES($eml);  
        }         
    }

    public function sendSES($eml) {
        // AWS Credentials
        $accessKey = "AKIATQPD7JBIP3KAPC24";
        $secretKey = "s2woiC57hSYYmvapaAWG9/5rFp4NXqHEDeWI2zeF";
        $region = "us-east-1"; // Change based on your AWS region

         
        
        $fromEmail = "Dev Automoss SES <info@automoss.in>"; 
        $toEmail = $eml['to_email'];
        $subject = 'SES-'.$eml['subject'];
        $bodyText = $eml['content'];

        
        $response = $this->sendSESEmail($accessKey, $secretKey, $region, $toEmail, $fromEmail, $subject, $bodyText);
        
        // Print response
        return json_encode($response); 
    }

    private function sendSESEmail($accessKey, $secretKey, $region, $toEmail, $fromEmail, $subject, $bodyText) {
        $host = "email.$region.amazonaws.com";
        $endpoint = "https://$host/";
        $service = "ses";
        $date = gmdate('Ymd');
        $timestamp = gmdate('Ymd\THis\Z');

        $canonicalUri = "/";
        $canonicalQueryString = "";
        $canonicalHeaders = "content-type:application/x-www-form-urlencoded\nhost:$host\nx-amz-date:$timestamp\n";
        $signedHeaders = "content-type;host;x-amz-date";

        // Email parameters
        $emailParams = http_build_query([
            'Action' => 'SendEmail',
            'Source' => $fromEmail,
            'Destination.ToAddresses.member.1' => $toEmail,
            'Message.Subject.Data' => $subject,
            // 'Message.Body.Text.Data' => $bodyText,
            'Message.Body.Html.Data' => $bodyText, 
        ]);

        $hashedPayload = hash('sha256', $emailParams);
        $canonicalRequest = "POST\n$canonicalUri\n$canonicalQueryString\n$canonicalHeaders\n$signedHeaders\n$hashedPayload";

        // String to sign
        $credentialScope = "$date/$region/$service/aws4_request";
        $stringToSign = "AWS4-HMAC-SHA256\n$timestamp\n$credentialScope\n" . hash('sha256', $canonicalRequest);

        // Signature function
        

        $dateKey = $this->sign("AWS4$secretKey", $date);
        $regionKey = $this->sign($dateKey, $region);
        $serviceKey = $this->sign($regionKey, $service);
        $signingKey = $this->sign($serviceKey, "aws4_request");
        $signature = bin2hex($this->sign($signingKey, $stringToSign));

        // Authorization header
        $authorizationHeader = "AWS4-HMAC-SHA256 Credential=$accessKey/$credentialScope, SignedHeaders=$signedHeaders, Signature=$signature";

        // cURL request
        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/x-www-form-urlencoded",
            "X-Amz-Date: $timestamp",
            "Authorization: $authorizationHeader",
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $emailParams);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return ["status" => $httpCode, "response" => $response];
    }

    public function sign($key, $msg) {
            return hash_hmac('sha256', $msg, $key, true);
    }


    public function testrunemail(){
          

        $url = "https://api.resend.com/emails";
        $apiKey = "re_Nmrzcyo3_GpS8TyfwdyjC9KoYYEBpGZoy"; // Replace with your actual API key

        $data = [
            "from" => "info@automoss.in",
            "to" => "melokanath@gmail.com",
            "subject" => "Hello World",
            "html" => "<p>Congrats on sending your <strong>first email</strong>!</p>"
        ];

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $apiKey",
            "Content-Type: application/json"
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);
        curl_close($ch);

        echo $response;
    }


public function exportcsvdata($data,$filename,$filtered_fields=NULL)
    {
        $array = array();
        

        //ADDED THIS FOR ADDING THE FIRST COLUMN
        if($filtered_fields==NULL){
            $po = $data[1];
            $lineh = array();
            foreach ($po as $k=>$v)
            {
                $lineh[] = $k;  
                //echo $k; exit;                    
            }
            $array[] = $lineh;
        }else{
            foreach ($filtered_fields as $ff)
            {
                $lineh[] = $ff->name;   
                //echo $k; exit;                    
            }
            $array[] = $lineh;
        }
            
        //ADDED THIS FOR ADDING THE FIRST COLUMN

        if(mycount($data)>0){
            foreach ($data as $kk => $vvx)
            {

                if($filtered_fields==NULL){
                   $row = $vvx;
                }else{
                    $xpp= array();
                    foreach ($filtered_fields as $ff) { 
                        $xpp[$ff->field] = $vvx->{$ff->field};
                    }
                    $row = $xpp;
                }


                $line = array();
                foreach ($row as $item)
                {
                    //$item = str_replace(",","~",$item);
                    $item = trim(preg_replace('/\s\s+/', ' ', $item));
                    $item = '"'.$item.'"';
                    $line[] = $item;
                    //$line[] = str_replace(",","~",$item);
                    
                }
                $array[] = $line;
            }
        }
       // echo '------';
       //  print_result($array); exit;

        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=\"$filename".".csv\"");
        header("Pragma: no-cache");
        header("Expires: 0");
        $handle = fopen('php://output', 'w');

        $ns = count($array);
        $t = 0;
        foreach ($array as $array) 
        {
            $t++;
            if($t==$ns){
                echo implode(',',$array);
            }else{
                echo implode(',',$array)."\r\n";
            }                                  
        }
        fclose($handle);
        exit;              
    }



public function generate_qrcode($data,$nm ='')
	{
        /* Load QR Code Library */
        $this->load->library('ciqrcode'); 
        
        /* Data */
        $hex_data   = bin2hex($data);
        $save_name  = $hex_data.'.png';
        // $save_name  = $nm.'.png';

        /* QR Code File Directory Initialize */
        $dir = 'uploads/qrcode/';
        if (!file_exists($dir)) {
            mkdir($dir, 0775, true);
        }

        /* QR Configuration  */
        $config['cacheable']    = true;
        $config['imagedir']     = $dir;
        $config['quality']      = true;
        $config['size']         = '1024';
        $config['black']        = array(255,255,255);
        $config['white']        = array(255,255,255);
        $this->ciqrcode->initialize($config);
  
        /* QR Data  */
        $params['data']     = $data;
        $params['level']    = 'L';
        $params['size']     = 10;
        $params['savename'] = FCPATH.$config['imagedir']. $save_name;
        
        $this->ciqrcode->generate($params);

        /* Return Data */
        $return = array(
            'content' => $data,
            'file'    => $dir. $save_name
        );
        return $return;
    }






}
?>