<?php


function StarRating($rating) {
    $rating = max(1, min(5, intval($rating))); // Ensure rating is between 1 and 5
    $starsHtml = '<div class="text-warning">';
    
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $starsHtml .= '<i class="fas fa-star"></i> '; // Filled star
        } else {
            $starsHtml .= '<i class="far fa-star"></i> '; // Empty star
        }
    }
    
    $starsHtml .= '</div>';
    
    return $starsHtml;
}




function get_vurl(){
	$crURL = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";	       
	$bs = base_url();
	return $vurl = str_replace($bs, '', $crURL);
}
function mycounts($dd){
	$dd = (array) $dd;
	return count($dd);
}
 

function mycount($obz){
    $arr = (array) $obz;
    return count($arr);
}

function convertNullToBlank($input) {
    // Convert object to array if input is an object
    if (is_object($input)) {
        $input = json_decode(json_encode($input), true);
    }

    // Ensure input is an array before processing
    if (is_array($input)) {
        return (object) array_map(function ($value) {
            if (is_array($value) || is_object($value)) {
                // Recursive call for nested arrays/objects
                return convertNullToBlank($value);
            }
            return $value === null ? "" : $value;
        }, $input);
    }

    // If input is neither object nor array, return it as-is
    return $input;
}

function empty_chk($input,$req_arr){
	extract($input);
	$err = 0;

	foreach ($req_arr as $rq) {
		if(!empty(${$rq})  ){}else{
			$err++;
		}
	}

	return $err;
}



function word_switcher($word,$indata=NULL)
{
		$ci =& get_instance();
		
		$data = $word;

		$vo =$data;
		preg_match_all("'{{%(.*?)%}}'si", $data, $matches);
		$uniq = array_unique($matches[0]);
		$r = implode('+', $uniq);
		$rv = explode('+', $r);

		foreach($rv as $u){
			$pp = $u;
			$u = str_replace('{{%', '', $u);
			$u = str_replace('%}}', '', $u); 		
			
			if($u!=''){					
				$orgdata =  (isset($indata->$u))?$indata->$u:'-:: '.$u.' ::-';
				$vo =  str_ireplace($pp, $orgdata, $vo);
			}	
		} 
		 
		return  html_entity_decode($vo);     
}
function valid_array($arr){
	return $r = isset($arr)?$arr:array();
}

function xxxxmake_webp($path,$file){
	

	$path2 =  $_SERVER["DOCUMENT_ROOT"].$path;
	$explode = explode('.', $file);
	$extn ='.'.end($explode);
	$fl_nm = str_replace($extn, '', $file);

	$jpg=imagecreatefromjpeg($path2.$file);
	$w=imagesx($jpg);
	$h=imagesy($jpg);
	$webp=imagecreatetruecolor($w,$h);
	imagecopy($webp,$jpg,0,0,0,0,$w,$h);
	$rx = imagewebp($webp, $path2.$fl_nm.'.webp', 80);
	imagedestroy($jpg);
	imagedestroy($webp);

	return $fl_nm.'.webp';
}


function make_webp($path, $file) {
    $path2 = $_SERVER["DOCUMENT_ROOT"] . $path;
    $explode = explode('.', $file);
    $extn = '.' . strtolower(end($explode));
    $fl_nm = str_replace($extn, '', $file);

    // Check file extension and create image accordingly
    if ($extn === '.jpeg' || $extn === '.jpg') {
        $src_img = imagecreatefromjpeg($path2 . $file);
    } elseif ($extn === '.png') {
        $src_img = imagecreatefrompng($path2 . $file);
        // Preserve transparency for PNGs
        imagealphablending($src_img, true);
        imagesavealpha($src_img, true);
    } else {
        return false; // Unsupported file format
    }

    $w = imagesx($src_img);
    $h = imagesy($src_img);

    $webp = imagecreatetruecolor($w, $h);

    // Handle transparency for PNGs
    if ($extn === '.png') {
        imagealphablending($webp, false);
        imagesavealpha($webp, true);
        $transparent = imagecolorallocatealpha($webp, 0, 0, 0, 127);
        imagefill($webp, 0, 0, $transparent);
    }

    imagecopy($webp, $src_img, 0, 0, 0, 0, $w, $h);
    $rx = imagewebp($webp, $path2 . $fl_nm . '.webp', 80);

    imagedestroy($src_img);
    imagedestroy($webp);

    if ($rx) {
        return $fl_nm . '.webp';
    } else {
        return false; // Failed to create WebP
    }
}

















function readxml($u){
 		$path = $_SERVER['DOCUMENT_ROOT'] .'/'. $u;
        $xml_file = file_get_contents($path); //exit;
        $new = simplexml_load_string($xml_file); 

         
        

        $b = (array) $new; 
        //print_result($b);    
        $basics = $b['@attributes'];
        


        $b_list =(array)  $b['list'];
        $list_attr = (isset($b_list['@attributes']))?$b_list['@attributes']:array();

            
        //////////////////////////////////////////////////////////////////
        $inputz = array();
        $i=0;
        $ask = $new->form->field;
        foreach($ask as $a){
            $p = (array) json_decode(json_encode($a));
            $inputz[$i]= $p['@attributes'];
            $i++;
        } 


        //////////////////////////////////////////////////////////////////        
        $lis = array();
        $ii=0;
        $lz = $new->list->col;
        foreach($lz as $l){
            $pl = (array) json_decode(json_encode($l));
            $lis[$ii]= $pl['@attributes'];
            $ii++;
        } 



        //////////////////////////////////////////////////////////////////        
        $lis_ac = array();
        $iic=0;
        $lzc = @$new->list->actions->item;
        if(mycount($lzc)>0){
	        foreach($lzc as $lc){
	            $plc = (array) json_decode(json_encode($lc));
	            $lis_ac[$iic]= $plc['@attributes'];
	            $iic++;
	        }
        } 







        $out['list_element']  = $lis;
        $out['list_actions']  = $lis_ac;
        $out['form_element']  = $inputz;
        $out['basics']  = (object) $basics;
        $out['list_attr']  = (object) $list_attr;


        // print_result($out);    
        // exit;   
        return $out;

}
 



function arr_srch_getmulti($arr, $key, $val)
{
	$out= array();
	$o= 0;
	foreach($arr as $r){
		if($r->$key == $val){
			$out[$o]= $r;
			$o++;
		}
	}
	$out = (object) $out;
	return $out;
}
function array_search_multidim($m_array, $key, $val,$o='M'){
    $out = array();
    $i=0;
    $m_array= (object) $m_array;
  

    foreach($m_array as $a){
    	
    
    	
    	if(isset($a->$key)){
    		if($a->$key==$val){
	    		$out[$i]=$a;
	    		$i++;
	    	}
    	}else{
    		if($a[$key]==$val){
	    		$out[$i]=$a;
	    		$i++;
	    	}
    	}
    	

    }

    if($o=='M'){
    	return $out;
    }else if($o=='S'){
    	return @$out[0];
    }
    
}
function array_key_first_x(array $arr) {
        foreach($arr as $key => $unused) {
            return $key;
        }
        return NULL;
    }

function Getbite($myarray,$key,$value,$outkey){
	foreach($myarray as $k){
		if($k->{$key} ==$value){
			return $k->{$outkey};
			
		}
	}
}


function Bitebox($idx,$pg_bites,$isck=1){
	 
	
	$ci =& get_instance();
    $ci->load->library('session');
	$v = $ci->session->userdata();

	 
	

	$editorinline='';
	if($isck==1){
		$editorinline='editorinline';
	}

	if(isset($v['user_type'])  && $v['user_type']=='Admin'){
		echo $rr = '
		<div class="bitebox">
			<div class="'.$editorinline.'" id="editor_'.$idx.'" contenteditable="true">
				'.Getbite($pg_bites,'ed_id',$idx,'content').'
			</div>
			<button  style="color: #141d3c !important; padding:3px 13px !important; float:right;" onclick="ClickToSave(\'editor_'.$idx.'\','.$idx.')"><i style="color:#141d3c !important;" class="fa fa-check" aria-hidden="true"></i></button>
		</div>
		';
	}else{
		echo $rr = Getbite($pg_bites,'ed_id',$idx,'content');
	}
}

function Bitebox_XX($idx,$pg_bites,$isck=1){
	 
	
	$ci =& get_instance();
    $ci->load->library('session');
	$v = $ci->session->userdata();
	

	$editorinline='';
	if($isck==1){
		$editorinline='editorinline';
	}

	if(isset($v['user_typ'])  && $v['user_typ']=='Admin'){
		echo $rr = '
		<div class="bitebox">
			
			<textarea class="'.$editorinline.'" id="editor_'.$idx.'" >'.Getbite($pg_bites,'ed_id',$idx,'content').'</textarea>
			<button  style="color: #141d3c !important; padding:3px 13px !important; float:right;" onclick="ClickToSave(\'editor_'.$idx.'\','.$idx.')"><i style="color:#141d3c !important;" class="fa fa-check" aria-hidden="true"></i></button>
		</div>
		';
	}else{
		echo $rr = Getbite($pg_bites,'ed_id',$idx,'content');
	}
}
    

function removeqsvar($url, $varname)
{
    $parsedUrl = parse_url($url);
    $query = array();

    if (isset($parsedUrl['query'])) {
        parse_str($parsedUrl['query'], $query);
        unset($query[$varname]);
    }

    $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
    $query = !empty($query) ? '?'. http_build_query($query) : '';

    return $parsedUrl['scheme']. '://'. $parsedUrl['host']. $path. $query;
}

	

	// function spl_imgload($img,$basepath='N',$noimg=NULL) 
	// {
		
	// 	if(@getimagesize($img)){
	// 		if($basepath=='N'){
	// 			return $img;
	// 		}else if($basepath=='Y'){
	// 			return base_url().$img;
	// 		}else{
	// 			return $basepath.$img;
	// 		}
			
	// 	}else{
	// 		if($noimg==NULL){
	// 			return base_url('uploads/noimg.png');
	// 		}else{
	// 			return $noimg;
	// 		}
	// 	}
	// }


function percentage_calculate($ha, $la){

	$per=($ha - $la)/$ha *100;
    $percent=round($per);

	return $percent;
}


function remove_protection($arr){
	$pp= array();
	foreach($arr as $k=>$vc){
		$pp[$k]=$vc;
	}

	return $pp;
}


function spl_encode($item)
{
	$txt = $item.'-d012mAtpuchnac0dekY';
	return base64_encode($txt);
}
function spl_decode($item) 
{
	$item = base64_decode($item);
	$txt = str_replace("-d012mAtpuchnac0dekY","",$item); 
	return $txt;	
}


function timeslots($starttime,$endtime,$duration) 
{

	$array_of_time = array ();
	$start_time    = strtotime ($starttime); //change to strtotime
	$end_time      = strtotime ($endtime); //change to strtotime

	$add_mins  = $duration * 60;

	while ($start_time <= $end_time) // loop between time
	{
	   $array_of_time[] = date ("H:i", $start_time);
	   $start_time += $add_mins; // to check endtie=me
	} 

	return $array_of_time;
}

function spl_imgload($img,$basepath='N',$noimg=NULL) 
{
	
	if(@getimagesize($img)){
		if($basepath=='N'){
			return $img;
		}else if($basepath=='Y'){
			return base_url().$img;
		}else{
			return $basepath.$img;
		}
		
	}else{
		if($noimg==NULL){
			return base_url('uploads/noimg.png');
		}else{
			return $noimg;
		}
	}
}


function timediffer($date1,$date2=NULL) 
{
		/*$date1 = "2007-03-24";
		$date2 = "2009-06-26";*/
		if($date2==NULL){
		   	$date2 = date('Y-m-d H:i:s');
		}
		$diff = abs(strtotime($date2) - strtotime($date1));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		if($years>0){
			printf("%d years, %d months, %d days\n", $years, $months, $days);
		}else{
			if($months>0){
				printf("%d months, %d days\n", $months, $days);
			}else{
				printf("%d days\n", $days);
			}
		}
		
}






function api_url($lnk){
	$cf = config_item('api_url');
	return $dd = $cf.$lnk;
}
function btn_duplicate($url)   
{
	return anchor($url, '<i class="fa fa-fw fa-copy"></i>','title="Duplicate"');
}
function btn_edit($url) 
{
	return anchor($url, '<span class="glyphicon glyphicon-pencil"></span>','title="Edit"');
}
function btn_edit_link($url)
{
	return anchor($url, 'Edit','title="Edit" style="font-size:11px;"');
}
function btn_change_password($url)
{
	return anchor($url, '<span class="glyphicon glyphicon-flash"></span>','title="Reset Password"');
}
function btn_view($url)
{
	return anchor($url, '<span class="glyphicon glyphicon-expand"></span> View',array('class'=>"btn btn-success btn-rounded-lg"),'title="View"');
}
function btn_delete($url)
{
	return anchor($url,'<span class="glyphicon glyphicon-trash"></span>', array('onclick'=>"return confirm('You are about to delete a record')",'title'=>"Delete"));
}
function btn_cancel($url)
{
	return anchor($url,'<span class="glyphicon glyphicon-remove"></span>', array('onclick'=>"return confirm('You are about to Cancel an Advertisement')",'title'=>"Cancel",'class'=>"btn btn-danger btn-rounded-lg"));
}
function btn_escalation($url)
{
	return anchor($url,'<span class="glyphicon glyphicon-share"></span> Escalation','title="Escalation" class="btn btn-primary btn-rounded-lg"');
}
function btn_reopen($url)
{
	return anchor($url,'<span class="glyphicon glyphicon-share"></span> Re-Open','title="Re-Open" class="btn btn-info btn-rounded-lg"');
}
function btn_active($url)
{
	return anchor($url,'<span class="glyphicon glyphicon-ok"></span>','title="Approve" class="btn btn-success btn-rounded-lg"');
}
function btn_back($url=NULL,$extra_class=NULL)
{
	if($url)
		return anchor($url,'<i class="fa fa-arrow-left"></i> Back','title="Back" class="btn btn-info btn-xs '.$extra_class.'" style="font-size: 14px; padding: 1px 12px;"');
	else
		return '<button onclick="window.history.go(-1)" class="btn btn-primary '.$extra_class.'">Back</button>';
}
function btn_viewdetail($url)
{
	return anchor($url, '<span class="fa fa-eye"></span>','title="View Details"');
}
function btn_back2()
{
	return '<span onclick="window.history.go(-1);" style="font-size: 16px; padding: 1px 12px;" class="btn btn-info btn-xs"><i class="fa fa-arrow-left"></i> Back</span>';
	//return anchor($url, '<span class="glyphicon glyphicon-search"></span>','title="View Details"');
}
function format_name($name)
{
	return ucwords($name);
}
function print_result($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}


	function curl_get_XX($link,$data=NULL,$decode=TRUE,$print='N')
	{    
		$uri_str='?key=FREIyYPzs7dw0e&&salt=sIgTZQWmtEoka6XifU1CFd';
		
	    if($data != NULL)
	    {
	    	///////print_result($data); exit;
			foreach($data as $key=>$val)
			{
				$uri_str.='&'.$key.'='.$val;
			}
		}

		$link .= $uri_str;
		if($print=='Y'){
			echo $link; exit;
		}else{
		}
					  
		
		$curl_handle = curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL, $link);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    //curl_setopt($curl_handle, CURLOPT_POST, 1);
		//curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
	     //Optional, delete this line if your API is open
	    //curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
	    $buffer = curl_exec($curl_handle);
	    //print_result($buffer);
	    curl_close($curl_handle);
		 
		 if($decode==TRUE){
			return $result = json_decode($buffer); 
		 }
		 else{
			return $buffer; 
		 }
	}
 	

	function curl_post_XX($link,$data=NULL,$decode=TRUE)
	{   
	   
		$data['key']= 'FREIyYPzs7dw0e';  	
		$data['salt']= 'sIgTZQWmtEoka6XifU1CFd';  	


	    $curl_handle = curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL, $link);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
	     

	    $buffer = curl_exec($curl_handle);
	    curl_close($curl_handle);
		

		 if($decode==TRUE){
			return $result = json_decode($buffer); 
		 }else{
			return $buffer; 
		 }
	}

function curl_get($link,$data=NULL,$decode=TRUE)
{ 	 
    // $curl_handle = curl_init();
    // curl_setopt($curl_handle, CURLOPT_URL, $link);
    // curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($curl_handle, CURLOPT_POST, 1);
	// curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data); 
    // $buffer = curl_exec($curl_handle);
    // curl_close($curl_handle);


		$jdata = '';
		if($data != NULL)
	    {
	    	$jdata = json_encode($data);
		}


		////////////////////////////////////////////////////
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $link,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		  CURLOPT_POSTFIELDS => $jdata,
		  CURLOPT_HTTPHEADER => array(
		    'Content-Type: application/json',
		    'Cookie: ci_session=bnmfkkps01a12laec44uik62ofiih0ec'
		  ),
		));
		$buffer = curl_exec($curl);
		curl_close($curl);	
		////////////////////////////////////////////////////
		 


	 if($decode==TRUE){
		return $result = json_decode($buffer); 
	 }else{
		return $buffer; 
	 }
}
function curl_del($link,$decode=TRUE)
{   
		   
		 
		 
			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => $link,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'DELETE',
			));

			$buffer = curl_exec($curl);

			curl_close($curl);
			 



	 if($decode==TRUE){
		return $result = json_decode($buffer); 
	 }else{
		return $buffer; 
	 }
}
function curl_post_N_OLD($link,$data=NULL,$decode=TRUE)
{ 


		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://upcomingprojects.in/api/project/add',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => json_encode($data),		   
		));
		$buffer = curl_exec($curl);
		curl_close($curl);
		// echo $response;

		if($decode==TRUE){
			return $result = json_decode($buffer); 
		}else{
			return $buffer; 
	    }
} 

function curl_del_token($link,$data=NULL,$decode=TRUE,$print='N')
	{

			if(isset($_SESSION['token'])){
					$tok = $_SESSION['token'];

						if($print=='Y'){
								print_result($data); exit;
						}
					 
 						$curl = curl_init();
						curl_setopt_array($curl, array(
						  CURLOPT_URL => $link,
						  CURLOPT_RETURNTRANSFER => true,
						  CURLOPT_ENCODING => '',
						  CURLOPT_MAXREDIRS => 10,
						  CURLOPT_TIMEOUT => 0,
						  CURLOPT_FOLLOWLOCATION => true,
						  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						  CURLOPT_CUSTOMREQUEST => 'DELETE',
						  CURLOPT_HTTPHEADER => array(
							    'Authorization: '.$tok,
							    'Content-Type: text/plain'
							),
						));

						$response = curl_exec($curl);
						curl_close($curl);
						 


						if($decode==TRUE){
							return $result = json_decode($response); 
						}else{
							return $response; 
						}

			}
	}




function curl_post($link,$data=NULL,$decode=TRUE)
{   
   
	 

	//print_result($data);  
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $link);
    
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
	curl_setopt($curl_handle, CURLOPT_POSTFIELDS, json_encode($data));
     

    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
	//print_result($buffer); exit;

	 if($decode==TRUE){
		return $result = json_decode($buffer); 
	 }else{
		return $buffer; 
	 }
}
	
function curl_post_token($link,$data=NULL,$decode=TRUE,$print='N')
	{

			if(isset($_SESSION['token'])){
					$tok = $_SESSION['token'];

						if($print=='Y'){
								print_result($data); exit;
						}
					 

						$curl = curl_init();
						curl_setopt_array($curl, array(
							  CURLOPT_URL => $link,
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => '',
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 0,
							  CURLOPT_FOLLOWLOCATION => true,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => 'POST',
							  CURLOPT_POSTFIELDS =>json_encode($data),
							  CURLOPT_HTTPHEADER => array(
							    'Authorization: '.$tok,
							    'Content-Type: text/plain'
							  ),
						));

						$response = curl_exec($curl);

						curl_close($curl); 


						if($decode==TRUE){
							return $result = json_decode($response); 
						}else{
							return $response; 
						}


			}
	}
	function curl_get_token($link,$data=NULL,$decode=TRUE)
	{
			if(isset($_SESSION['token'])){
					 $tok = $_SESSION['token'];

						$curl = curl_init();
						curl_setopt_array($curl, array(
							  CURLOPT_URL => $link,
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => '',
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 0,
							  CURLOPT_FOLLOWLOCATION => true,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => 'GET',
							  CURLOPT_POSTFIELDS =>json_encode($data),
							  CURLOPT_HTTPHEADER => array(
							    'Authorization: '.$tok,
							    'Content-Type: text/plain'
							  ),
						));

						$response = curl_exec($curl);

						curl_close($curl);


						if($decode==TRUE){
							return $result = json_decode($response); 
						}else{
							return $response; 
						}


			}
	}


 
function max_of_arr_key($data)
{
	$max=0;
	if(isset($data['line'])){
		foreach($data['line'] as $l){
			if(isset($l['box'])){
				$ccc= $l['box'];
				foreach($ccc as $b){
					if(isset($b['Column']) && $max < trim($b['Column'])){
						$max = trim($b['Column']);
					}
				}
			}
		}	
	}
	
	return $max;
}
function myarr_out($boxs,$row,$col,$single_arr=false) {
	   $out=array();
	   if($single_arr==true){
		   if(trim($boxs['Row'])==$row  && trim($boxs['Column'])==$col){
			 $out =$boxs;
		   }
	   }else{
		  foreach ($boxs as $key => $val) 
		  {
		   if(isset($val['Row']) && isset($val['Column']) && trim($val['Row'])==$row  && trim($val['Column'])==$col){
			   $out['RowSpan']=$val['RowSpan'];
			   $out['ColumnSpan']=$val['ColumnSpan'];
			   $out['SeatNo']=$val['SeatNo'];
		   }
		 } 
	   }
	   
	   return $out;
	}

	


function CheckArrayByKey($myarray,$key,$value,$wildcard='N',$short=''){
	$m=array();
	$r=0;
	////$myarray = (array) $myarray;

	
	foreach($myarray as $k){
			$k = (array) $k;
			if($wildcard=='N'){
				if($k[$key] ==$value){
					$m[$r]=$k;
					$r++;
				}
			}elseif($wildcard=='Y'){
				if (strpos($k[$key], $value) == false) {
				}else{
					$m[$r]=$k;
					$r++;
				}				
			}
			elseif($wildcard=='DT'){
				$dtz = date('Y-m-d',strtotime($k[$key]));
				if($dtz ==$value){
					$m[$r]=$k;
					$r++;
				}				
			}		
		
	}
	if($short!=''){
		$ppp = array_column($m, $key);
		if($short=='ASC'){
			$data=array_multisort($ppp,SORT_ASC, $m);
		}else{
			$data=array_multisort($ppp,SORT_DESC, $m);	
		}
	}	
	return $m;
}

function draw_seat_layout_checkbox_OO($id){  
	/*
	/// $id is the seat layout id...
	*/
	$ci =& get_instance();
	$ci->load->database();
	$out=$ci->db->query('SELECT * from bus_seat_layout where id='.$id)->row();
	$data=simplexml_load_string($out->layout);
	$m='';

	foreach($data as $v){	

	$m .= '<div class="floor '.$v->btype.'" btype="'.$v->btype.'"><span class="floorspan">'.$v->btype.'</span>';
	$line= $v->line;
	$row=0;
	foreach($line as $ln){
		$row++;
		$m .= '<ul class="floor_row">';
		$boxs=$ln->box;
		$col=0;
		$vv_max = max_of_arr_key($data->berth);
		foreach($boxs as $bx){
			$col++;
			$b_col =trim($bx->Column);
			
			//$m .=trim($bx->RowSpan);
			
			
			if(trim($bx->RowSpan)==2){
				$stt='slipper';   
			}else{
				$stt='st';
			}
			if($row==$bx->Row  && $col==$b_col ){
				$m .= '<li style="background:none;  min-width:50px; border:none !important;"  class="'.$stt.'"><div class="checkbox" style="margin-top:3px;"><label style="padding-left:0;"><input class="form-control" type="checkbox" name="seat_'.$stt.'[]" value="'.$bx->SeatNo.'"><span class="text">'.$bx->SeatNo.'</span><label></div></li>';
			}
			else{
				for($i=$col;  $i<$b_col; $i++){
					$m .= '<li   class="blank"></li>';	
				}
				$m .= '<li  style="background:none;  min-width:50px; border:none !important; "  class="'.$stt.'"><div class="checkbox" style="margin-top:3px;" ><label style="padding-left:0;"><input class="form-control" type="checkbox" name="seat_'.$stt.'[]" value="'.$bx->SeatNo.'"><span class="text">'.$bx->SeatNo.'</span><label></div></li>';
			}
		}
		$m .= '</ul>';
	}
	
	$m .= '</div>';
	}

	return $m;

}

function char_limiter($x, $length)
{
  if(strlen($x)<=$length)
  {
    return $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    return $y;
  }
}






function bus_seat_check_logic($arry){


	$jrny_time=$arry['journey_dt']." ".$arry['departure'];
	$nowtm = strtotime(date('Y-m-d h:i:s a'));
	$departure_tm = strtotime($jrny_time); 
	$time_diff= ($departure_tm - $nowtm)/60; 


	
	$ci =& get_instance();
	$ci->load->database();
	$outm=$ci->db->query('SELECT * from bus_master where bus_id = '.$arry['bus_id'])->row();
	$qr = '
		SELECT * FROM bus_stoppage WHERE bus_id in
		(SELECT bus_id FROM bus_running_dates where running_date="'.$arry['journey_dt'].'"
		 AND bus_id = '.$arry['bus_id'].' ) 
		AND from_id = '.$arry['SrcID'].' 
		AND to_id = '.$arry['DestID'].'
		';


	////----------seat chk start
	$all_sel_st = explode(',',rtrim($arry['seater_selected'].$arry['sleeper_selected'],','));

	$busz = $outm;
	if($busz->duration!=''  || $busz->duration!=NULL){
			if($time_diff > $busz->duration){
				if($busz->ad_seater_seats!=''){
					$sit = unserialize($busz->seater_seats);
					$ad_sit = unserialize($busz->ad_seater_seats);
					$seater_st=array_unique(array_merge($sit,$ad_sit));
				}else{
					$seater_st= unserialize($busz->seater_seats);
				}
				if($busz->ad_sleeper_seats!=''){
					$slp = ($busz->sleeper_seats!='')?unserialize($busz->sleeper_seats):array();
					$ad_slp = ($busz->ad_sleeper_seats!='')?unserialize($busz->ad_sleeper_seats):array();


					$sleeper_st=array_unique(array_merge($slp,$ad_slp));



				}else{
					$sleeper_st= unserialize($busz->sleeper_seats);
				}			
				
			}else{
				$seater_st=  unserialize($busz->seater_seats);
				$sleeper_st= unserialize($busz->sleeper_seats);
			}
		}else{
			$seater_st=  unserialize($busz->seater_seats);
			$sleeper_st= unserialize($busz->sleeper_seats);
		}
		//echo 'ooo';
		//print_result($sleeper_st);

	$bus_mst_all_st = $seater_st;
	if($outm->sleeper_seats!=''   ||  $outm->ad_sleeper_seats!=''){
		$bus_mst_all_st = array_merge($seater_st,$sleeper_st); 
	}


	

	//////-/-/-/-/
	$cnc_avl_q = 'SELECT * from bus_seat_cncl_avl where bus_id='.$arry['bus_id'].' AND cncl_dt= "'.$arry['journey_dt'].'"';
		$cncl_avl=$ci->db->query($cnc_avl_q)->result(); 

		$m_st_add=array();
		$m_slp_add=array();
		$m_st_rmv=array();
		$m_slp_rmv=array();

		foreach ($cncl_avl as $c) {
			if($c->type==1){				
				if($c->str_no!=''){
					$nn_st_rmv = unserialize($c->str_no);
					$m_st_rmv = array_merge($m_st_rmv,$nn_st_rmv);
					$m_st_rmv = array_unique($m_st_rmv);
				}
				if($c->slpr_no!=''){
					$nn_slp_rmv = unserialize($c->slpr_no);
					$m_slp_rmv = array_merge($m_slp_rmv,$nn_slp_rmv);
					$m_slp_rmv = array_unique($m_slp_rmv);
				}
				
			}
			if($c->type==2){				
				if($c->str_no!=''){
					$nn_st_add = unserialize($c->str_no);
					$m_st_add = array_merge($m_st_add,$nn_st_add);
					$m_st_add = array_unique($m_st_add);
				}
				if($c->slpr_no!=''){
					$nn_slp_add = unserialize($c->slpr_no);
					$m_slp_add = array_merge($m_slp_add,$nn_slp_add);
					$m_slp_add = array_unique($m_slp_add);
				}				
			}
		}

		$bus_mst_all_st = array_merge($bus_mst_all_st,$m_st_add,$m_slp_add);
		$bus_mst_all_st = array_unique($bus_mst_all_st);
		$bus_mst_all_st = array_diff($bus_mst_all_st,$m_st_rmv);
		$bus_mst_all_st = array_diff($bus_mst_all_st,$m_slp_rmv);

	//////-/-/-/-/

		


	$ff = array_intersect($all_sel_st,$bus_mst_all_st);
	if(count($ff)==count($all_sel_st)){   // logic for st chk..		
		////////////////
			$arry_out='';
			$out=$ci->db->query($qr)->row();
			if(count($out)>0){
				$arry['s_out']=$out;
				//$arry['qr']=$qr;
				///////----------------
				$check='Y';
				$out_msg ='';


				//**//-----
					
					

					$b_points = unserialize($out->brd_pts_tm);
					$b_points = $b_points['pointn'];
					$d_points = unserialize($out->drp_pts_tm);
					$d_points = $d_points['pointn'];
				if(in_array($arry['boardings'], $b_points)){	
					if(in_array($arry['dropping'], $d_points)){
						///////////////----SEAT VALIDATION ----///

						


						

						if($arry['seater_selected']==''  || $arry['seater_selected']==NULL ){
							$st_got=  array();
						}else{
							$st_got=  explode(',', rtrim($arry['seater_selected'],','));
						}
						if($arry['sleeper_selected']==''  || $arry['sleeper_selected']==NULL ){
							$slp_got=  array();
						}else{
							$slp_got=  explode(',', rtrim($arry['sleeper_selected'],','));
						}

						$bus = $arry['bus_id'];
						$j_dt = $arry['journey_dt'].' '.$arry['departure'];
						$from_loc=$arry['SrcID'];
						$to_loc=$arry['DestID'];

						//print_result($arry);


						 $tot_seat_fare = 0;
						 $tot_slip_fare =0;

						if(count($st_got)>0){
							$seat_arr = validate_seat_getprice($st_got,$bus,$j_dt,$from_loc,$to_loc);
							$tot_seat_fare =   $seat_arr['gross_seater_fare'];
						}else{
							$seat_arr = array();					
						}
						if(count($slp_got)>0){
							$sleeper_arr = validate_seat_getprice($slp_got,$bus,$j_dt,$from_loc,$to_loc);
							$tot_slip_fare = $sleeper_arr['gross_slipper_fare'];
						}else{
							$sleeper_arr = array();					
						}


						




						$arry_out['tot_fares']= $tot_slip_fare+$tot_seat_fare;
						




						///////////////----SEAT VALIDATION ENDS----///
					}else{
						$check='N';
						$out_msg .=' DROPPING POINT ISSUE...';
					}	
				}else{
					$check='N';
					$out_msg .=' BOARDING POINT ISSUE...';
				}
				
				////////------------
			}else{
				$check='N';
				$out_msg =' BUS NOT VALID FOR THE DATE AND ROUTE';
			}
			$arry_out['seat_arr']= $seat_arr;
			$arry_out['sleeper_arr']= $sleeper_arr;		
			$arry_out['seater_selected']= $arry['seater_selected'];
			$arry_out['sleeper_selected']= $arry['sleeper_selected'];		
			$arry_out['boardings']= $arry['boardings'];
			$arry_out['dropping']= $arry['dropping'];
			$arry_out['SrcID']= $arry['SrcID'];
			$arry_out['DestID']= $arry['DestID'];
			$arry_out['journey_dt']= $arry['journey_dt'];
			$arry_out['dep_time']= $out->dep_time;
			$arry_out['arr_time']= $out->arr_time;
			$arry_out['dont_need']= $arry;
		/////////////////////////
	}else{
		$check='N';
		$out_msg =' Selected Seats no longer available.';
	}	

		$arry_out['chk_sts']= $check;
		$arry_out['chk_msg']= $out_msg;

	return $arry_out; 
}



function check_pre_tran($busid,$journey_dt,$sel_seat_arr){

		$sel_seat_arr = array_filter($sel_seat_arr);
		$ci =& get_instance();
		$ci->load->database();
		$mstr=$ci->db->query('SELECT * from pre_transaction where bus_id='.$busid.' AND  
			journey_dt="'.$journey_dt.'"')->result();
		$mstr_ff=$ci->db->query('SELECT * from final_booking where bus_id='.$busid.' AND  status=1 AND  
			jrny_dt="'.$journey_dt.'"')->result();
		$allst='';
		foreach ($mstr as $m) {
			$stt='';
			$slpp='';
			if($m->seater_seats!=''){
				$stt=$m->seater_seats.',';
			}
			if($m->sleeper_seats!=''){
				$slpp=$m->sleeper_seats.',';
			}
			$allst .=$stt.$slpp;
		}
		foreach ($mstr_ff as $mf) {
			$stt_f='';
			$slpp_f='';
			if($mf->str_seats!=''){
				$stt_f=$mf->str_seats.',';
			}
			if($mf->slpr_seats!=''){
				$slpp_f=$mf->slpr_seats.',';
			}
			$allst .=$stt_f.$slpp_f;
		}




		$allst= rtrim($allst,',');
		$allst= explode(',',$allst);


		/*
		print_result($sel_seat_arr);
		print_result($allst);
		*/

		$ints = array_intersect($sel_seat_arr,$allst);
		if(count($ints)>0){
			$out =1;
		}else{
			$out =0;
		}


		//echo $out;  exit;
		return $out;

}


function validate_seat_getprice($all_seat,$busid,$departure,$from_loc,$to_loc)
{
		//echo $busid;
		$travel_dt = date('Y-m-d',strtotime($departure));

		
		$ci =& get_instance();
		$ci->load->database();
		$mstr=$ci->db->query('SELECT service_charge from site_master')->row();
		/////////////////----- Price Calculator
		$link=base_url().'api/data/GetBusListing';	
		$data['searchbyid'] = $busid;
		$data['from_loc'] = $from_loc;
		$data['to_loc'] = $to_loc;
		$data['travel_date'] =   date('Y-m-d',strtotime($departure));
		$result = curl_get($link,$data);
		$listing = $result->result[0]; 



		/////print_result($listing);


		//---~~~~~
		$seat_fare= $listing->seat_fare; 
		$sleeper_fare= $listing->sleeper_fare; 
		//---~~~~~
		$add_str_fare= ($listing->add_str_fare==NULL  || $listing->add_str_fare=='')?'':unserialize($listing->add_str_fare);
		$add_slpr_fare= ($listing->add_slpr_fare==NULL  || $listing->add_slpr_fare=='')?'':unserialize($listing->add_slpr_fare);
		//---~~~~~
		$api_str_prc=($listing->api_str_prc==NULL)?0:$listing->api_str_prc;		
		$api_slpr_prc=($listing->api_slpr_prc==NULL)?0:$listing->api_slpr_prc;

		$od_str_prc=($listing->od_str_prc==NULL)?0:$listing->od_str_prc;
		$od_slpr_prc=($listing->od_slpr_prc==NULL)?0:$listing->od_slpr_prc;






		$master_price= $mstr->service_charge;


		$global_seater_fare = $seat_fare + $master_price + $api_str_prc + $od_str_prc;
		$global_sleeper_fare = $sleeper_fare + $master_price + $api_slpr_prc +$od_slpr_prc;
		
		////////////////////----- Price Calculator ends





		$nowtm = strtotime(date('Y-m-d h:i:s a'));
		$departure_tm = strtotime($departure); 
		$time_diff= ($departure_tm - $nowtm)/60; 
				
		///$out=$ci->db->query('SELECT layout from bus_seat_layout where id='.$id)->row();

		$dy_q= 'SELECT bus_id, duration, seater_seats,sleeper_seats,    
			ad_seater_seats, ad_sleeper_seats
			from bus_master where bus_id='.$busid;

		$busz=$ci->db->query($dy_q)->row();


		//print_result(unserialize($busz->ad_seater_seats));
		//print_result(unserialize($busz->seater_seats));
		

		$seater_st=array();
		$sleeper_st= array();
		if($busz->duration!=''  || $busz->duration!=NULL){
			if($time_diff > $busz->duration){
				if($busz->ad_seater_seats!=''){
					$sit = unserialize($busz->seater_seats);
					$ad_sit = unserialize($busz->ad_seater_seats);
					$seater_st=array_unique(array_merge($sit,$ad_sit));
				}else{
					$seater_st= unserialize($busz->seater_seats);
				}
				if($busz->ad_sleeper_seats!=''){
					$slp = ($busz->sleeper_seats!='')?unserialize($busz->sleeper_seats):array();
					$ad_slp = ($busz->ad_sleeper_seats!='')?unserialize($busz->ad_sleeper_seats):array();
					$sleeper_st=array_unique(array_merge($slp,$ad_slp));
				}else{
					$sleeper_st= unserialize($busz->sleeper_seats);
				}			
				
			}else{
				$seater_st=  unserialize($busz->seater_seats);
				$sleeper_st= unserialize($busz->sleeper_seats);
			}
		}else{
			$seater_st=  unserialize($busz->seater_seats);
			$sleeper_st= unserialize($busz->sleeper_seats);
		}


		///////////////////////ADDED ON 4th july by lok | after dinesh detect issue..

		if (is_array($sleeper_st)){}else{
			$sleeper_st=array();
		} 


		$cnc_avl_q = 'SELECT * from bus_seat_cncl_avl where bus_id='.$busid.' AND cncl_dt= "'.$travel_dt.'"';
		$cncl_avl=$ci->db->query($cnc_avl_q)->result();

		$m_st_add=array();
		$m_slp_add=array();
		$m_st_rmv=array();
		$m_slp_rmv=array();

		foreach ($cncl_avl as $c) {
			if($c->type==1){				
				if($c->str_no!=''){
					$nn_st_rmv = unserialize($c->str_no);
					$m_st_rmv = array_merge($m_st_rmv,$nn_st_rmv);
					$m_st_rmv = array_unique($m_st_rmv);
				}
				if($c->slpr_no!=''){
					$nn_slp_rmv = unserialize($c->slpr_no);
					$m_slp_rmv = array_merge($m_slp_rmv,$nn_slp_rmv);
					$m_slp_rmv = array_unique($m_slp_rmv);
				}
				
			}
			if($c->type==2){				
				if($c->str_no!=''){
					$nn_st_add = unserialize($c->str_no);
					$m_st_add = array_merge($m_st_add,$nn_st_add);
					$m_st_add = array_unique($m_st_add);
				}
				if($c->slpr_no!=''){
					$nn_slp_add = unserialize($c->slpr_no);
					$m_slp_add = array_merge($m_slp_add,$nn_slp_add);
					$m_slp_add = array_unique($m_slp_add);
				}				
			}
		}
		$seater_st = array_merge($seater_st,$m_st_add);
		$seater_st = array_unique($seater_st);
		$seater_st = array_diff($seater_st,$m_st_rmv);

		$sleeper_st = array_merge($sleeper_st,$m_slp_add);
		$sleeper_st = array_unique($sleeper_st);
		$sleeper_st = array_diff($sleeper_st,$m_slp_rmv);

		////////////////////////////ADDED ON 4th july by lok








		
		$i=0;
		$seater_fare=0;
		$failed_seat=0;
		$out_z=array();

		$gross_seater_fare=0;
		$gross_slipper_fare=0;
		

		

		foreach($all_seat as $nm)
		{
			


			if(in_array($nm, $seater_st)){ 
				///---PRICE LOGIC PART 2 ////
				if($add_str_fare!=''){
					$s_out= CheckArrayByKey($nm,$add_str_fare,'ST','price');
					if($s_out=='' || $s_out==NULL){
						$seater_fare=$global_seater_fare;						
					}else{
						$seater_fare=$s_out + $master_price + $api_str_prc + $od_str_prc;					
					}
				}else{					
					$seater_fare=$global_seater_fare;					
				}
				///---PRICE LOGIC PART 2 ends////

				$out_z[$i]['name']=$nm;
				$out_z[$i]['status']='Y';
				$out_z[$i]['price']=$seater_fare;

				$gross_seater_fare= $gross_seater_fare+$seater_fare;
			}
			elseif(in_array($nm, $sleeper_st))
			{
				///---PRICE LOGIC PART 2 ////
				if($add_slpr_fare!=''){
					$s_out= CheckArrayByKey($nm,$add_slpr_fare,'SL','price');
					if($s_out==''){
						$sleeper_fare=$global_sleeper_fare;
					}else{
						$sleeper_fare=$s_out + $master_price + $api_slpr_prc + $od_slpr_prc;
					}
				}else{
					$sleeper_fare=$global_sleeper_fare;
				}
				///---PRICE LOGIC PART 2 ends////
				$out_z[$i]['name']=$nm;
				$out_z[$i]['status']='Y';
				$out_z[$i]['price']=$sleeper_fare;



				$gross_slipper_fare= $gross_slipper_fare+$sleeper_fare;
			}
			else
			{
				$out_z[$i]['name']=$nm;
				$out_z[$i]['status']='N';
				$out_z[$i]['price']='NA';

				$failed_seat++;
			}
			$i++;
		}

		$out_z['failed_seat']=$failed_seat;
		$out_z['gross_slipper_fare']=$gross_slipper_fare;
		$out_z['gross_seater_fare']=$gross_seater_fare;



		

		return $out_z;

}

function get_side_seat_info($seat,$bus_id,$rowspan,$j_date, $givblankseat=FALSE)
{
	$ci =& get_instance();
	$ci->load->database();
	$ly =$ci->db->query('SELECT seat_layout_id from bus_master where bus_id='.$bus_id)->row();

	$out=$ci->db->query('SELECT layout from bus_seat_layout where id='.$ly->seat_layout_id)->row();

	$data=simplexml_load_string($out->layout);
	$json = json_encode($data);
	$data_o = json_decode($json,TRUE);

	$main_arr= array();


	//////---main array---
	$i=0;
	if(isset($data_o['berth'])){
		foreach($data_o['berth'] as $b){
			if(isset($b['line'])){
				foreach($b['line'] as $l){	
					foreach($l as $ln){
						if(is_array($ln)){
							foreach($ln as $lln){
								$main_arr[$i]=$lln;
								$i++;
							}
						}
						
					}
				}
			}



		}
	}
	/////////print_result($main_arr);

	
	//////---main array---
	$my_row=0; $my_Column=0;
	foreach($main_arr as $ma){
		if( isset($ma['SeatNo']) && isset($ma['Row']) && isset($ma['Column']) && $ma['SeatNo']==$seat){
			$my_row= $ma['Row'];
			$my_Column= $ma['Column'];
		}
	}
	

	////////-----find side seat one
	$nxtrow = $my_row+1;
	$nxtcol =$my_Column;
	$nxt_seat='NA';
	foreach($main_arr as $mb){
		if(isset($mb['Row'])){
			$this_row = $mb['Row']+0;
			$this_col = $mb['Column']+0;
			$this_rowspan= $mb['RowSpan']+0;
			if($nxtrow==$this_row  && $nxtcol==$this_col  && $this_rowspan == $rowspan ){
				$nxt_seat= $mb['SeatNo'];
			}				
		}
	}


	////////-----find side seat two //prev seat
	$prevrow = $my_row-1;
	$prevcol =$my_Column;
	$prev_seat='NA';
	foreach($main_arr as $mc){
		if(isset($mc['Row'])){
			$thisz_row = $mc['Row']+0;
			$thisz_col = $mc['Column']+0;
			$thisz_rowspan= $mc['RowSpan']+0;
			if($prevrow==$thisz_row  && $prevcol==$thisz_col && $thisz_rowspan == $rowspan){
				$prev_seat= $mc['SeatNo'];
			}				
		}
	}	

	$outx=array();
	if($nxt_seat!='NA'){
		$ly =$ci->db->query('SELECT pass_gender from final_booking_detail 
			where seat_no = "'.$nxt_seat.'" AND jrny_dt ="'.$j_date.'"  AND status=1 AND  bus_id='.$bus_id)->row();
		if(count($ly)>0){
		 	$outx['nxt_seat_gender']=$ly->pass_gender;
		}
	}

	if($prev_seat!='NA'){
		$lyp =$ci->db->query('SELECT pass_gender from final_booking_detail 
			where seat_no = "'.$prev_seat.'" AND jrny_dt ="'.$j_date.'"  AND  bus_id='.$bus_id)->row();
		 
		 if(count($lyp)>0){
		 	$outx['prev_seat_gender']=$lyp->pass_gender;
		}
	}

	if($givblankseat==TRUE){
		$outx['nxt_seat']=$nxt_seat;
		$outx['prev_seat']=$prev_seat;
	}

		
	return $outx;
}




function draw_seat_layout_front_XX($id,$busid,$departure,$from_loc,$to_loc)
{
		
		




		//return $sleeper_st; exit;

		$data=simplexml_load_string($out->layout);
		$json = json_encode($data);
		$data_o = json_decode($json,TRUE);

		if(array_key_exists('btype',$data_o['berth'])){
			$pp= $data_o;
		}else{
			
			$pp= $data_o['berth'];
		}
		

		/////////////////////////////////-----------------------
		$m='';
		foreach($pp as $v){
			
			if(trim($v['btype'])=='Sleeper'){
	              $drv_icon='driver-sle.png';
	              $bxclas='sle_seat_row';
	          }else{
	              $drv_icon='driver-seat.png';
	              $bxclas='seat_row';
	          }

			$m .= 
			'
			<div type="'.$v['btype'].'" class="clearfix"></div>
	                  <div class="seat seats_layout_bg ">
	                    <div class="col-sm-1">
	                      <div class="driver"> 
	                      <img src="'.base_url("frontassets").'/images/'.$drv_icon.'" >  
	                        </div>
	                    </div>
	                    <div class="col-sm-11" style="padding-left:50px;">
	                      <div class="slepper">
	               ';
			$line= $v['line'];
			$row=0;
			foreach($line as $ln){
				$row++;
				$m .= '<div class="'.$bxclas.'">';
				$vv_max = max_of_arr_key($v);
				if($v['btype']=='Sleeper'){
					$vv_max =$vv_max*2;
				}
				if(isset($ln['box'])){
					$boxs=$ln['box'];
					for($i=1;$i<=$vv_max;$i++)
					{
						$col=$i;
						$il=$i-1;
						if(array_key_exists('Row',$boxs)){
							$xs= myarr_out($boxs,$row,$col,true);
						}else{
							$xs= myarr_out($boxs,$row,$col);
						}
						if(count($xs)>0){
							if(trim($xs['RowSpan'])==2){
								$stt='slepper_set';
								$bk_sts='slepper_booked';   //slepper_available
							}else{
								$stt='seat_bg';
								$bk_sts='seat_booked ';  //seat_available
							}
							if(is_array($xs['SeatNo'])){
								$nm = '';
							}else{
								$nm = $xs['SeatNo'];
							}


							///---- Seat Status Change Logic-----
							if(in_array($nm, $sleeper_st)){


								///---PRICE LOGIC PART 2 ////
								if($add_slpr_fare!=''){
									$s_out= CheckArrayByKey($nm,$add_slpr_fare,'SL','price');
									if($s_out==''){
										$sleeper_fare=$global_sleeper_fare;
										$prc_brk = $global_sleeper_fare_brk;
									}else{
										$sleeper_fare=$s_out + $master_price + $api_slpr_prc;
										$prc_brk =' ('.$s_out.'+'.$master_price.'+'.$api_slpr_prc.') ';
									}
								}else{
									$sleeper_fare=$global_sleeper_fare;
									$prc_brk = $global_sleeper_fare_brk;
								}
								///---PRICE LOGIC PART 2 ends////





								$bk_sts='slepper_available';  
								$m .='
								<input class="busbay" type="checkbox" styp="Sleeper" fare="'.$sleeper_fare.'" bus="'.$busid.'" name="selectorz" 
									id="'.$busid.'-'.$nm.'" seat="'.$nm.'" >
								<label fare="'.$sleeper_fare.'"  title="SeatNo: '.$nm.'  Price: '.$sleeper_fare.$prc_brk.'"  for="'.$busid.'-'.$nm.'"></label>
								';
							}
							elseif(in_array($nm, $seater_st)){ 

								
								///---PRICE LOGIC PART 2 ////
								if($add_str_fare!=''){
									$s_out= CheckArrayByKey($nm,$add_str_fare,'ST','price');
									if($s_out=='' || $s_out==NULL){
										$seater_fare=$global_seater_fare;
										$prc_brk = $global_seater_fare_brk;
									}else{
										$seater_fare=$s_out + $master_price + $api_str_prc;
										$prc_brk = '('.$s_out.'+'.$master_price.'+'.$api_str_prc.') ';
									}
								}else{
									
									$seater_fare=$global_seater_fare;
									$prc_brk = $global_seater_fare_brk;
								}
								///---PRICE LOGIC PART 2 ends////

								





								$bk_sts='seat_available'; 
								$m .='<input type="checkbox" styp="Seater" fare="'.$seater_fare.'" bus="'.$busid.'" class="busbay"  name="selectorz" id="'.$busid.'-'.$nm.'" seat="'.$nm.'" >
								<label title="SeatNo: '.$nm.'  Price: '.$seater_fare.$prc_brk.'"    fare="'.$seater_fare.'" class="seat" for="'.$busid.'-'.$nm.'"></label>'; 
							}else{
								$m .='<a href="#" style="float:left; margin-left:0;" class="'.$stt.' '.$bk_sts.'"  title="'.$nm.'" ></a>';
							}


								
							///---- Seat Status Change Logic ENDS-----




						}else{
							$m .= '<span style="float:left; width:25px; height:25px; margin-right:10px;" ></span>'; 
						}
					}
					
				}else{
					$m.=' ';
				}
				$m .= '</div>';
			}
			$m .= '</div>
	                    </div>
	                  </div>';
		}
		/////////////////////////------------------------------

		return $m;
}



function number_to_words($number) {
    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = [
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety',
        100 => 'hundred',
        1000 => 'thousand',
        1000000 => 'million',
        1000000000 => 'billion'
    ];

    if (!is_numeric($number)) {
        return false;
    }

    if ($number < 0) {
        return $negative . number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= number_to_words($remainder);
            }
            break;
    }

    if ($fraction !== null && is_numeric($fraction)) {
        $string .= $decimal;
        $words = [];
        foreach (str_split((string) $fraction) as $digit) {
            $words[] = $dictionary[$digit];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}





?>