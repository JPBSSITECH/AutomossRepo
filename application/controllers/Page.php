<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {
	function __construct() 
	{
		parent::__construct(); 	
		$this->load->helper('string'); 
		$this->load->helper('cookie');

		$this->load->library('sendgridmail'); 
		$this->load->model('Api_model'); // Load the model


 
		$this->data['pg_bites'] = $this->db->query('SELECT * FROM  page_contents')->result();
		 
		$this->data['common']=$this->common = $cmn =  $this->db->query('SELECT * FROM common')->row();
		$this->data['mycity_id']=$this->mycity_id =  $mycity_id = (isset($_COOKIE['mycity_id']))?$_COOKIE['mycity_id']:19;
		$curct = $this->db->query('select * from city where id='.$mycity_id)->row(); 



		$this->data['car_man'] =   $this->car_man =  $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
		$this->data['car_model'] = $this->car_model =  $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
		$this->data['fuel_type'] = $this->fuel_type =  $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 





		$this->data['mycity_name']= $this->mycity_name =  $curct->name;
		$this->data['mycity_url']= $this->mycity_url =  $curct->urlslug;
		$this->data['allct']=$this->allct =  $allct = curl_get(api_link.'master/city');  


		$this->data['reviewz']  = $reviewz = $this->db->query('select * ,  (select thumb  from customer as cc WHERE cc.id =review_mst.cust_id) as cust_thumb
                                    ,  (select CONCAT(fname," ",lname) as ss  from customer as cc WHERE cc.id =review_mst.cust_id) as cust_name
			from review_mst ORDER BY rating DESC limit 3')->result();
		 
		

		////////////////////////// 
					$crURL = current_url();
					$crURL = str_replace('/index.php', '', $crURL);
					$crURL_sls = $crURL.'/';
					$q = 'SELECT * FROM seo_inputs where url="'.$crURL.'"  OR  url="'.$crURL_sls.'"  ';
					$seo_info = $this->db->query($q)->row();
					$this->data['master_info']= $cmn;	
					$sf = (array) $seo_info;		
					if(count($sf)>0){
						$this->data['super_title']=$seo_info->title;
						$this->data['super_key']=$seo_info->meta_key;
						$this->data['super_desc']=$seo_info->meta_desc;
						$this->data['super_otherinfo']=$seo_info->meta_otherinfo;
					}
		//////////////////////////


		if($this->session->userdata('loggedin')==1  && $this->session->userdata('user_type')=='Customer'){ 
				$this->data['myid']= $this->myid =  $myid = $_SESSION['id'];
				$this->data['myinfo']=$this->myinfo = $myinfo =  $this->db->query('SELECT * FROM customer where id='.$myid)->row();



				$qq = 'SELECT  SUM(quantity) as num from add_to_cart ac WHERE   ac.customer_id = '.$myid; 
                $crtt = $this->db->query($qq)->row();

                $this->data['mycart_count']=   $crtt->num; 
               $curcart = $this->db->query('SELECT  product_id from add_to_cart ac WHERE   ac.customer_id = '.$myid)->result();
                $this->data['cur_cart_prod']= $cur_cart_prod = array_column( $curcart, 'product_id');  







		}

		if($this->session->userdata('loggedin')==1  && $this->session->userdata('user_type')=='Mechanic'){
				$this->data['myid']= $this->myid =  $myid = $_SESSION['id'];
				$this->data['myinfo']=$this->myinfo = $myinfo =  $this->db->query('SELECT * FROM garage_mst where id='.$myid)->row();
		}
 

	}
	public function index($paramone=NULL,$paramtwo=NULL,$paramthree=NULL,$paramfour=NULL){
	              
	        //	 $this->db->query('SELECT * FROM pages where page_url="'.$paramone.'" and page_type="Page" ')->row();
	        
	         $ispg = array();	
 	             

	        $vurl = get_vurl();	        
	        if($vurl=='index.php'){
				redirect(base_url());
			}
			if($paramone==NULL)
			{
				$this->home(); 	
			}
			elseif (method_exists($this, $paramone)==true) {
			    $this->{$paramone}($paramtwo,$paramthree,$paramfour);
			}
			 
			elseif (mycounts($ispg)>0)
			{
			  	$this->innerpage($ispg);
			}
			else{
		 		$this->error404();
	  		}
	}





 
 
	public function home(){

		$param['limit'] = 3;
		$param['city_id'] = $this->mycity_id; 
		$gg = curl_post(api_link.'master/Packagemaster/list',$param);   
		$this->data['topservice']  = $topservice = @$gg->data;



		$this->data['cats'] = $cats = $this->db->query('select * from category where parent_id is null ORDER BY id ASC')->result();
		// print_result($cats);exit;
		

		$paramz['limit'] = 4;
		$spr = curl_post(api_link.'master/products/list',$paramz);  
		$this->data['prodz']  = $prodz = @$spr->data; 


		if($_POST){

			$data = $this->input->post();

			$this->session->set_userdata('mycardata', $data);

			redirect(base_url("service_details/{$this->mycity_url}/{$data['service']}"));


			
			// print_result($data);  exit;
			 			

		} 

		//print_result($topservice);  exit;
		 
 
		$this->load->view('front/index',$this->data);  
	}

	public function service_details($ct_url,$caturl){

		$this->data['ct'] = $ct = $this->db->query('select * from city WHERE urlslug= "'.$ct_url.'" AND status = 1')->row(); 
		$this->data['cat'] =  $cat = $this->db->query('select * from category WHERE urlslug= "'.$caturl.'" AND status = 1')->row(); 

		$this->data['gg'] = $gg = curl_post(api_link . 'master/Category/list', []);
		$this->data['x'] = $x = $gg->data;

		$this->load->view('front/servicedetails',$this->data);
	}



	public function spareparts(){
	
		$gg = curl_post(api_link . 'master/Ecomcategory/list', []);
		if ($gg && isset($gg->data) && is_array($gg->data)) {
			$this->data['gg'] = $gg;
			$this->data['x'] = $gg->data;
		} else {
			
			$this->data['gg'] = null;
			$this->data['x'] = [];
		}
	
	
		$brands = curl_post(api_link . 'master/ecombrand/list', []);
		if ($brands && isset($brands->data) && is_array($brands->data)) {
			$this->data['brands'] = $brands;
			$this->data['bb'] = $brands->data;
		} else {
			
			$this->data['brands'] = null;
			$this->data['bb'] = [];
		}
	
		
		$ftyp = curl_post(api_link . 'master/Fuel/list', []);
		if ($ftyp && isset($ftyp->data) && is_array($ftyp->data)) {
			$this->data['ftyp'] = $ftyp;
			$this->data['ff'] = $ftyp->data;
		} else {
			
			$this->data['ftyp'] = null;
			$this->data['ff'] = [];
		}
	
		
		$mm = curl_post(api_link . 'master/Manufacturer/list', []);
		if ($mm && isset($mm->data) && is_array($mm->data)) {
			$this->data['mm'] = $mm;
			$this->data['m'] = $mm->data;
		} else {
			
			$this->data['mm'] = null;
			$this->data['m'] = [];
		}
	
		
		$this->load->view('front/spareparts', $this->data);
	}
	
	// public function spareparts(){
	// 	$this->data['gg'] = $gg = curl_post(api_link . 'master/Ecomcategory/list', []); 
	// 	$this->data['x'] = $x = $gg->data;
	// 	$this->data['brands'] = $brands = curl_post(api_link . 'master/ecombrand/list', []);
	// 	$this->data['bb'] = $bb = $brands->data;
	// 	$this->data['ftyp'] = $ftyp = curl_post(api_link . 'master/Fuel/list', []);
	// 	$this->data['ff'] = $ff = $ftyp->data;
	// 	$this->data['mm'] = $mm = curl_post(api_link . 'master/Manufacturer/list', []);
	// 	$this->data['m'] = $m = $mm->data;
	// 	$this->load->view('front/spareparts',$this->data);   
	// }

	public function get_product_quantity_incart($product_id='') {
		if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
			echo json_encode(["status" => "error", "message" => "User not logged in"]);
			return;
		}
		$cid = $_SESSION['id'];
		$pid = spl_decode($product_id);
		$sql = "SELECT product_id, quantity FROM add_to_cart WHERE customer_id = ?";
		$params = [$cid];
		if (!empty($pid)) {
			$sql .= " AND product_id = ?";
			$params[] = $pid;
		}
		$query = $this->db->query($sql, $params);
		$cart_items = $query->result_array();
		
		// Convert array into [product_id => quantity] format
		$cart_quantities = [];
		foreach ($cart_items as $item) {
			$cart_quantities[$item['product_id']] = $item['quantity'];
		}
	
		echo json_encode(["status" => "success", "cart_quantities" => $cart_quantities]);
	}	

	public function product_details($eid=''){

		if($eid==''){
			redirect(base_url());  
		}else{
			 $id = spl_decode($eid); 
			 $inf =   curl_post(api_link.'master/products/list/'.$id); 
			 //print_result($inf);  exit; 
			 if($inf->status ==0){
			 	redirect(base_url('spareparts'));
			 }
			 $this->data['pdtl'] =  $pdtl =$inf->data;


			 $tt['related_product_id'] = $id;
			 $tt['city_id'] = $this->mycity_id;   
			 $tt['limit'] = 3;   
			 $infzz =   curl_post(api_link.'master/products/list/',$tt); 
			 $this->data['r_prd'] =  $r_prd = @$infzz->data;  

			//$this->get_product_quantity_incart($eid);
			$response = $this->Api_model->get_product_quantity_incart($eid);
			$this->data['cart_quantities'] = $response['cart_quantities'][$id] ?? 0;


			//$this->db->query('select * from ecom_product WHERE id= "'.$id.'" AND status = 1')->row(); 
			// print_result($inf);exit;
			
		}



		$this->load->view('front/product_details',$this->data);
	}



	public function addcart_bkp($id="",$t='') {

		if($id==""){
			redirect(base_url());
		} 

		// print_result($_SESSION); 		 
		// exit;






		if(isset($_SESSION['loggedin']) && $_SESSION['user_type']=='Customer'){

			$pid = spl_decode($id); 
			$prod = $this->db->query('SELECT * FROM ecom_product WHERE id = '.$pid)->row();
			if(mycounts($prod)>0){
			}else{
				redirect(base_url());
			}

  

				$cid = $_SESSION['id'];   
                $input['customer_id'] = $cid;
                $input['product_id'] = $pid;
                $input['quantity'] = 1;               

			 
			 
                $crt =  $this->db->query('SELECT * FROM add_to_cart WHERE customer_id = '.$cid.' AND product_id = '.$pid)->row();                
                if (mycount($crt) > 0){
                	$mdata = $input;
                    $mdata['quantity'] = $qn =  $crt->quantity+$input['quantity'];
                    if($t=='m'){
                    	$mdata['quantity'] =  $qn =  $crt->quantity-$input['quantity'];
                    }

                    if($qn >0){
                    	$in = $this->db->update('add_to_cart',$mdata, array('id'=>$crt->id));
                    }else{
                    	$in = $this->db->query('DELETE FROm add_to_cart WHERE id='.$crt->id);
                    }
                      
                    

                    redirect(base_url('cart')); 
                }else{
                    $in = $this->db->insert('add_to_cart',$input);  
                    redirect(base_url('cart')); 
                }

			
		}else{
			redirect(base_url('login'));
		}
		


	   // $this->load->view('front/cart',$this->data);
	}
	public function addcart($id = "", $t = '') {
		if ($id == "") {
			echo json_encode(["status" => "error", "message" => "Invalid product ID"]);
			return;
		}
	
		if (!isset($_SESSION['loggedin']) || $_SESSION['user_type'] != 'Customer') {
			echo json_encode(["status" => "error", "message" => "User not logged in"]);
			return;
		}
	
		$pid = spl_decode($id);
		$prod = $this->db->query("SELECT * FROM ecom_product WHERE id = " . $pid)->row();
	
		if (mycounts($prod) == 0) {
			echo json_encode(["status" => "error", "message" => "Product not found"]);
			return;
		}
	
		$cid = $_SESSION['id'];
		$input['customer_id'] = $cid;
		$input['product_id'] = $pid;
		$input['quantity'] = 1;
	
		$crt = $this->db->query("SELECT * FROM add_to_cart WHERE customer_id = $cid AND product_id = $pid")->row();
		
		if (mycount($crt) > 0) {
			$mdata = $input;
			$mdata['quantity'] = $crt->quantity + $input['quantity'];
	
			if ($t == 'm') {
				$mdata['quantity'] = $crt->quantity - $input['quantity'];
			}
	
			if ($mdata['quantity'] > 0) {
				$this->db->update("add_to_cart", $mdata, array("id" => $crt->id));
			} else {
				$this->db->query("DELETE FROM add_to_cart WHERE id=" . $crt->id);
			}
		} else {
			$this->db->insert("add_to_cart", $input);
		}
	
		// Fetch updated cart quantity
		$cart_items = $this->db->query("SELECT SUM(quantity) as total_items FROM add_to_cart WHERE customer_id = $cid")->row();
		$total_items = ($cart_items->total_items) ? $cart_items->total_items : 0;
	
		echo json_encode(["status" => "success", "message" => "Cart updated successfully", "cart_count" => $total_items, "item_id" => $pid]);
	}
	
	public function removecart($id="") {

		if($id==""){
			redirect(base_url());
		} 

		 




		if(isset($_SESSION['loggedin']) && $_SESSION['user_type']=='Customer'){

			 $pid = spl_decode($id); 
			$prod = $this->db->query('DELETE FROM add_to_cart WHERE id = '.$pid);
			redirect(base_url('cart')); 
                 

			
		}else{
			redirect(base_url('login'));
		}
		


	   // $this->load->view('front/cart',$this->data);
	}
	public function cart(){ 

		$vv = $this->session->userdata();
		if($this->session->userdata('loggedin')==1  && $this->session->userdata('user_type')=='Customer'){
			////do nothing



				$cid = $_SESSION['id'];                 

				$qq = 'SELECT ac.*,   pd.name ,  pd.thumb ,   pd.mrp_price ,   pd.offer_price 
                        from add_to_cart ac 
                        LEFT JOIN ecom_product pd ON pd.id = ac.product_id
                        WHERE   ac.customer_id = '.$cid; 
                $info =  $this->db->query($qq)->result();

                


                $this->data['cart'] = $cart =  $info;

               //print_result($cart);  exit;

               


		}else{
			redirect (base_url('login'));
		}




		if($_POST){

			$bi['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
			$bi['HTTP_X_REAL_IP'] = $_SERVER['HTTP_X_REAL_IP'];
			$bi['HTTP_REFERER'] = $_SERVER['HTTP_REFERER'];
			$bi['HTTP_USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
			 
			/////////////////////======
			

			if(isset($_POST['cart_total'])   &&   $_POST['cart_total']>0){
				$inf['order_id'] = $order_id =  random_string('alnum', 12);
				$inf['cust_id'] = $cid;
				$inf['created_on'] = date('Y-m-d H:i:s');
				$inf['cart_info'] = json_encode($cart);
				$inf['browser_info'] = json_encode($bi);
				$inf['amount'] = $amt = $_POST['cart_total'];

				$vf = $this->db->insert('preorder',$inf);
				$m_id = $this->db->insert_id();	

				if($vf){
					// $pmtz = $amt*100;
					// $vx['raz_order_id']=   $this->razor->createorder($order_id,$pmtz);
					// $this->db->update('preorder',$vx,array('p_id'=>$m_id));
					redirect(base_url('checkout/'.$order_id));
				}else{
					$this->session->set_flashdata('error','Error In process!');
					redirect(base_url('cart'));
				}
			}			

		}  
		 
		
		 	 
		$this->load->view('front/cart',$this->data);
	}
	public function checkout($ordid=NULL){	

			if($ordid==NULL){
				redirect(base_url());
			}
			if($this->session->userdata('id')){

			}else{
				redirect(base_url());
			}


			$gst_per = 18;

			$cid = $_SESSION['id'];              
			$qq = 'SELECT ac.*,   pd.name ,  pd.thumb ,   pd.mrp_price ,   pd.offer_price 
                    from add_to_cart ac 
                    LEFT JOIN ecom_product pd ON pd.id = ac.product_id
                    WHERE   ac.customer_id = '.$cid; 
            $info =  $this->db->query($qq)->result();

	                 



	        $this->data['cart'] = $cart =  $info;

	        //print_result($cart); 

	        $ttl = 0;
	        foreach ($cart as $kv) {
	        	$ttl += $kv->quantity*$kv->offer_price;
	        }


	        $this->data['cart_total'] = $ttl; 
	        $this->data['platform_fee'] = $p_fee =  round(($ttl*$this->common->platform_fee_percent)/100,2); 

	        $this->data['gst'] = $gst = 0; //round((($ttl+$p_fee)*$gst_per)/100,2);
	        $this->data['m_tot'] = $m_tot = $ttl+$p_fee+$gst; 




	        //exit;


			$this->data['sess'] = $sess = $vv = $this->session->userdata();		 
			$this->data['inf'] = $inf  = $this->db->query('SELECT * FROM customer where 
						cust_id = "'.$vv['id'].'"  ')->row();
			$this->data['odr_inf'] = $odr_inf  = $this->db->query('SELECT * FROM preorder where order_id = "'.$ordid.'"  ')->row();




			$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$cid)->row();  


			// $this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
			// $this->data['car_model'] = $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
			// $this->data['fuel_type'] = $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 


			$this->data['city'] = $city = $this->db->query('select * from city WHERE status = 1')->result(); 













			if($_POST)
			{
				$data = $this->input->post();

				$data['order_id']= $ordid;
				$data['cust_id']= $cid;




				//print_result($data);  exit;
				
				if($data['payment_method']==1){
					$data['payment_status']=1;
				}else if($data['payment_method']==2){
					$data['payment_status']=0;
				}


				$data['cust_id']= $cid;
				$data['order_id']=$ordid;


				/////////QR CODE=======
						 $b_link = base_url("thanks/".$ordid);
			        	 $rttt = $this->generate_qrcode($b_link,$ordid);  
			        	 $data['qrcode'] = $qr =  base_url().$rttt['file'];
				/////////QR CODE=======


			       $data['cart_total'] = $ttl; 
			       $data['platform_fee'] = $p_fee; 
			       $data['gst_amount'] = $gst; 
			       $data['gst_percent'] = $gst_per; 
			       $data['tot_amount'] = $m_tot; 


				//print_result($data); exit;  
				$r = $this->db->insert('ecom_order',$data);
				$mmj = $this->db->insert_id();		 
	                

	                $newarr_txt='';     
	                foreach ($cart as $kv) {
	                	$tt = array(); 
	                    $tt['order_id'] = $ordid; 
	                    $tt['product_id'] = $kv->product_id;

	                    $grg = $this->db->query('select created_by from ecom_product where id= '.$kv->product_id)->row();
	                    $tt['garage_id'] =  $grg->created_by;



	                    $tt['product_name'] = $kv->name;
	                    $tt['qty'] = $qq = $kv->quantity;
	                    $tt['price'] = $prc =  $kv->offer_price*$qq;
	                    

	                    $tt['platform_fee'] = $p_fee_n  = round(($prc*$this->common->platform_fee_percent)/100,2);  
			       		$tt['gst_amount'] = $gst_n = round((($prc+$p_fee_n)*$gst_per)/100,2);; 
			       		$tt['gst_percent'] = $gst_per;
			       		$tt['sub_total'] = $prc+$p_fee_n+$gst_n; 


			       		$tt['closer_otp'] = rand(100000,999999);  
			       		$tt['cancelation_otp'] = rand(1000,9999);  



	                    $rv = $this->db->insert('ecom_order_details', $tt);                         
	                }







				if($data['payment_method']==1){	
					// $this->cart->destroy();






	               $cartdel =  $this->db->query('DELETE FROM add_to_cart  WHERE customer_id = ' . $cid);

					////////////////EMAIL PROCESS-----|||||  ----->>>
						$body = nl2br("Hey ".$data['shipping_name'].",             	
				          	You have received your order with order id: ".$ordid." 
				          	------ORDER DETAILS-----
							".$newarr_txt." 

				          	Thanks for the order.
				          	Our Team with contact you shortly.
				          	"); 
						$m_sub = 'Your Order Created AT: AUTOMOSS | ORDER ID: '.$ordid;


						
								
						  $eu['subject'] = $m_sub;
						  $eu['to_email'] = $vv['cust_email'];
						  $eu['content'] = $body; 
						  $pp = $this->sendemail($eu);	


						  $euu['subject'] = $m_sub;
						  $euu['to_email'] = "melokanath@gmail.com"; 
						  $euu['content'] = $body; 
						  $pp = $this->sendemail($euu);
						  


						   
					////////////////EMAIL PROCESS-----|||||  ----->>>
					////////////////SMS PROCESS-----|||||  ----->>>
						/*
						if(sms_engine==1){
							$templ = sms_txt(vendor_id,'order',$ordid);
							$msg = $templ['message'];
							$template_id = $templ['template_id'];						
							$response = sms_engine($msg,$template_id,master_phone,vendor_id,$this->master->sms_sender_name);
							$response = sms_engine($msg,$template_id,$inf->cust_phone,vendor_id,$this->master->sms_sender_name);

						}
						*/
					////////////////SMS PROCESS-----|||||  ----->>>		 
					redirect(base_url("thanks/".$ordid));
				}else if($data['payment_method']==2){	
					redirect(base_url("razor_start/".$ordid));
				}	  


				
			}		
			$this->load->view('front/checkout',$this->data);
		}


			public function remove_cart_item($product_id) {

	    if ($this->session->userdata('loggedin') == 1 && $this->session->userdata('user_typ') == 'customer') {
	        $cid = $_SESSION['cust_id'];

	        $this->db->where('customer_id', $cid);
	        $this->db->where('product_id', $product_id);
	        
	        if ($this->db->delete('add_to_cart')) {
	            $this->session->set_flashdata('success', 'Item removed from cart successfully.');
	        } else {
	            $this->session->set_flashdata('error', 'Failed to remove item from cart.');
	        }
	    } else {
	        redirect(base_url('login'));
	    }
	    redirect(base_url('cart'));
	}

	public function thanks($bid=''){
		if($bid==''){
			redirect(base_url());  
		}

		
		$this->data['bid'] =  $bid; 

		$this->data['orderz'] = $orderz = $this->db->query('select * from ecom_order WHERE order_id="'.$bid.'" ')->row();
		$this->data['order_dtl'] = $order_dtl = $this->db->query('select * from ecom_order_details WHERE order_id="'.$bid.'" ')->result();  






		$this->load->view('front/thankyou',$this->data);
	}






	public function xcart(){

		$this->load->view('front/cart',$this->data);
	}
	public function xcheckout(){

		$this->load->view('front/checkout',$this->data);
	}
	

	



	public function createbooking($xid=''){
		if($xid==''){
			redirect(base_url());  
		}

		$sess = $_SESSION;
		if( isset($sess['loggedin']) && $sess['loggedin'] == 1 ){
			$typ = $_SESSION['user_type'];
			$cust_id = $_SESSION['id'];
			if($typ=='Customer'){

				if(isset($_SESSION['createbooking_id'])){
					unset($_SESSION['createbooking_id']);
				}
				
			}else{
				$vv['createbooking_id'] = $xid;
				$this->session->set_userdata($vv); 
				redirect(base_url("login"));
			}
		}else{
			$vv['createbooking_id'] = $xid;
			$this->session->set_userdata($vv); 
			redirect(base_url("login"));
		}


		 ///print_result($_SESSION); 





		 $id = spl_decode($xid);
		 $pkg_info = $this->db->query('select * from package_mst WHERE id='.$id)->row();
		 //print_result($pkg_info); 


		 $garage_info = $this->db->query('select * from garage_mst WHERE id='.$pkg_info->created_by)->row(); 
		 $cust_info = $this->db->query('select * from customer WHERE id='.$cust_id)->row(); 
		 


		$data['booking_id'] = $booking_id = random_string('alnum', 16); 
		$data['cust_id'] =  $cust_id; 
		$data['garage_id'] =  $pkg_info->created_by; 
		$data['package_id'] =  $pkg_info->id; 

		$data['quote_price'] =  $pkg_info->offer_price; 

		$data['cust_name'] =  $cust_info->fname.' '.$cust_info->lname; 
		$data['cust_phone'] =  $cust_info->phone; 
		$data['cust_email'] =  $cust_info->email; 
		 


		$data['garage_name'] =  $garage_info->garage_name; 
		$data['garage_phone'] =  $garage_info->garage_phone; 
		$data['garage_email'] =  $garage_info->garage_email; 
		$data['garage_lat'] =  $garage_info->garage_lat; 
		$data['garage_lon'] =  $garage_info->garage_lon; 

		$data['user_typ'] =  'Customer'; 
		$data['created_by'] =  $cust_id; 
		$data['status'] =  0; 

 
			$r = $this->db->insert('booking_mst',$data);
			if($rr)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= $rr->message;
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);
			redirect(base_url("booking/".$booking_id)); 
	}
	public function booking($bid=''){
		if($bid==''){
			redirect(base_url());  
		}
		$gst_per = 18;

		$sess = $_SESSION;
		if( isset($sess['loggedin']) && $sess['loggedin'] == 1 ){
			$typ = $_SESSION['user_type'];
			$cust_id = $_SESSION['id'];
			if($typ=='Customer'){
				if(isset($_SESSION['createbooking_id'])){
					unset($_SESSION['createbooking_id']);
				}				
			}else{				 
				redirect(base_url());
			}
		}else{			 
			redirect(base_url());
		}		 
		$this->data['book_info'] = $book_info = $this->db->query('select * from booking_mst WHERE booking_id="'.$bid.'"')->row();
		if($book_info && $book_info->package_id > 0){
			$this->data['pkg_info'] = $pkg_info = $this->db->query('select * from package_mst WHERE id='.$book_info->package_id)->row();

			//print_result($pkg_info); exit;
		}




		if (!empty($book_info)) {

		$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
		$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 


		$this->data['cart_total'] = $ttl = $book_info->quote_price; 
        $this->data['platform_fee'] = $p_fee =  round(($ttl*$this->common->platform_fee_percent)/100,2); 

        $this->data['gst'] = $gst =  round((($ttl+$p_fee)*$gst_per)/100,2);
        $this->data['m_tot'] = $m_tot = $ttl+$p_fee+$gst; 
	} else {
		$this->session->set_flashdata('error', 'Invalid booking ID.');
		redirect(base_url()); 
	}

		if($_POST){
			$data = $_POST;
			$data['status'] = 1;

			$data['platform_fee_percent'] = $this->common->platform_fee_percent;
			$data['platform_fee'] = $p_fee;

			
			$data['gst_percent'] = $gst_per;
			$data['gst_amount'] =$gst;
			$data['total_price'] = $m_tot; 


			 
			//$data['platform_fee'] = $p_fee;
			//$data['gst_amount'] = $p_fee;
			//print_result($data);

			if($cust_info->phone==''){
				$dm['phone'] = $data['cust_phone'];
				$dm['fname'] = $data['cust_name'];
				$mx = $this->db->update('customer',$dm,array('id'=>$book_info->cust_id));
			}

			/////////QR CODE=======
				 $b_link = base_url("bookingsuccess/".$bid);
	        	 $rttt = $this->generate_qrcode($b_link,$bid); 
	        	 $data['qrcode'] = $qr =  base_url().$rttt['file'];


	        	 $data['job_close_otp'] = $job_close_otp = rand(100000,999999); 



			/////////QR CODE=======
        	 


        	

			 
	        $m = $this->db->update('booking_mst',$data,array('booking_id'=>$bid));

	        if($m)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';

			 	///////////////EMAIL:::::
						$txt='Hi Team,<br>
						We have a Service Booked  in AUTOMOSS :<br> <br> 
						BOOKING ID: '.$bid.'<br> <br>
						<b>Find booking details Below:</b>
						<img src="'.$qr.'" /><br> 
						or Click Below Link: <br> 
						<a style=" padding: 8px 20px; color:#fff; background: #c23200; text-align:center; font-weight:bold; text-decoration:none; font-size: 22px; " href="'.$b_link.'">Booking Details</a>
						';
								 
								
					  	
					  $EmailUser['content'] = $txt; 
					  $EmailUser['subject'] =  'Admincopy: New Service Booked form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = 'melokanath@gmail.com';				     
					  $pp = $this->sendemail($EmailUser); 


					  $EmailUser['subject'] =  'Admincopy: New Service Booked form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = $this->common->email;				     
					  $pp = $this->sendemail($EmailUser);



					  $EmailUser['subject'] =  $cust_info->fname.' Your Service Booked form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = $cust_info->email;				     
					  $pp = $this->sendemail($EmailUser);



					  $EmailUser['subject'] =  $cust_info->fname.' has booked a Service form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = $garage_info->email;				     
					  $pp = $this->sendemail($EmailUser); 





			 	///////////////EMAIL:::::

			}
			 else
			{
			 	$smsg= "Error Occurs while adding data";
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);			
	        redirect(base_url('bookingsuccess/'.$bid));	  		 
		}



		$this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
		$this->data['car_model'] = $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
		$this->data['fuel_type'] = $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 


		 //print_result($pkg_info);



		


 
	 

		$this->load->view('front/booking',$this->data);
	}
	public function bookingsuccess($bid=''){
		if($bid==''){
			redirect(base_url());  
		}

		
		$this->data['bid'] =  $bid; 


		$this->data['book_info'] = $book_info = $this->db->query('
			select * ,
				(select name from car_manufacturer WHERE id = booking_mst.car_manufacturer_id) as car_manufacturer,
				(select name from car_model WHERE id = booking_mst.car_model_id) as car_model,
				(select name from fuel_type WHERE id = booking_mst.car_fuel_type_id) as fuel_type
			from booking_mst WHERE booking_id="'.$bid.'"


			')->row();


		if(mycounts($book_info)>0){}else{
			redirect(base_url());  
		}


		$this->data['pkg_info'] = $pkg_info = $this->db->query('select * from package_mst WHERE id='.$book_info->package_id)->row();
		$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
		$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 

 


		$this->data['car_man'] = $garage_info = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
		$this->data['car_model'] = $garage_info = $this->db->query('select * from car_model WHERE status = 1')->result(); 
		$this->data['fuel_type'] = $garage_info = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 


		 //print_result($pkg_info);



	 

		$this->load->view('front/bookingsuccess',$this->data); 
	}


	// Booking bll

	public function service_bill($bid=''){
		if($bid==''){
			redirect(base_url('mechanic/booking_list'));  
		}


		$this->data['book_info'] = $book_info = $this->db->query('select *,
			(SELECT name from car_manufacturer WHERE id = booking_mst.car_manufacturer_id) as m_nm,
			(SELECT name from car_model WHERE id = booking_mst.car_model_id) as car_model_nm,
			(SELECT name from car_model WHERE id = booking_mst.car_model_id) as fuel_nm

		 from booking_mst WHERE booking_id="'.$bid.'"')->row();

		$this->data['pkg_info'] = $pkg_info = $this->db->query('select * from package_mst WHERE id='.$book_info->package_id)->row();
		$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
		$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 
		
		// print_result($book_info);
		// exit;
		 $this->data['heading'] = "Service Bill";
		$this->load->view('front/service_bill',$this->data);
	} 




	public function product_bill($oid=''){
		if($oid==''){
			redirect(base_url());  
		}

		$this->data['pp'] = $pp = $this->db->query('select * from ecom_order_details WHERE order_id="'.$oid.'"')->row();		

		$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$pp->garage_id)->row(); 
		
		// print_result($pp);
		// print_result($garage_info);
		// exit;
		 $this->data['heading'] = "Product Bill";
		$this->load->view('front/product_bill',$this->data);
	} 









	///billl end  

	public function car(){

		$this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result();
		


		$this->load->view('front/car',$this->data);
	}

	public function cardetails($bid=''){
		if($bid==''){
			redirect(base_url());  
		}else{
			$this->data['carinfo'] = $carinfo = $this->db->query('select *,
				(select name from fuel_type where id = used_car.fuel_type_id) as fuel_nm
			 from used_car WHERE car_slno= "'.$bid.'" ')->row(); 
			$this->data['othercar'] = $othercar = $this->db->query('select * from used_car WHERE status =1 and  id <>  '.$carinfo->id.' LIMIT 3')->result(); 
			// print_result($othercar);exit;
			$this->data['bid'] = $bid; 
		}

		$this->load->view('front/cardetails',$this->data);
	}
	public function carenq($bid=''){
		if($bid==''){
			redirect(base_url());  
		}else{
			$this->data['carinfo'] = $carinfo = $this->db->query('select * from used_car WHERE car_slno= "'.$bid.'" ')->row(); 
			$this->data['bid'] = $bid; 

		}

		 
		$sess = $_SESSION;
		if( isset($sess['loggedin']) && $sess['loggedin'] == 1 ){
			$typ = $_SESSION['user_type'];
			$cust_id = $_SESSION['id'];
			if($typ=='Customer'){

				if(isset($_SESSION['carenq'])){
					unset($_SESSION['carenq']);
				}
				
			}else{
				$vv['carenq'] = $bid;
				$this->session->set_userdata($vv); 
				redirect(base_url("login"));
			}
		}else{
			$vv['carenq'] = $bid;
			$this->session->set_userdata($vv); 
			redirect(base_url("login"));
		}	





		 
		$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$cust_id)->row(); 
		 

		if($_POST){
			$data = $_POST;
			$data['status'] = 1;
			$data['tranid'] = $tranid = 'ACR-'.random_string('alnum', 16); 
			$data['car_id'] = $carinfo->id; 
			$data['buy_id'] = $cust_id;
			$data['created_by'] = $cust_id;
			// print_result($data);

			if($cust_info->phone==''){
				$dm['phone'] = $data['cust_phone'];
				$dm['fname'] = $data['cust_name'];
				$mx = $this->db->update('customer',$dm,array('id'=>$book_info->cust_id));
			}
			 
	        $m = $this->db->insert('used_car_leads',$data);
	        $lead_id = $this->db->insert_id();



	        if($m)
			{
			 	 
 

			    $vff['car_leads_id'] = $lead_id;
			    $vff['message'] = $data['description'];
			    $vff['chat_by'] = $cust_id;
			    $cc = $this->db->insert('used_car_leads_chat',$vff);


		        if ($cc) {
		            $smsg = "Data created successfully, and chat log added.";
		            $typ = 'success';
		        } else {
		            $smsg = "Data created successfully, but chat log could not be added.";
		            $typ = 'warning';
		        }



			 	///////////////EMAIL:::::
						$txt='Hi ,<br>
						You have a received a  Lead on your car ('.$carinfo->name.')  in AUTOMOSS :<br> <br> 

						Name: '.$data['cust_name'].'<br>	 					 
						Phone: '.$data['cust_phone'].'<br>						 
						<b>Find query details in your admin panel.</b>						 
						  
						';
								 
								
					  	
					  $EmailUser['content'] = $txt; 
					  $EmailUser['subject'] =  'Admincopy: Used Car Lead form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = 'melokanath@gmail.com';				     
					  $pp = $this->sendemail($EmailUser); 


					  $EmailUser['subject'] =  'Admincopy: Used Car Lead  form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = $this->common->email;				     
					  $pp = $this->sendemail($EmailUser);



					  $EmailUser['subject'] =  $cust_info->fname.' Used Car Lead  Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = $cust_info->email;				     
					  $pp = $this->sendemail($EmailUser);



					   


			 	///////////////EMAIL:::::

			}
			 else
			{
			 	$smsg= "Error Occurs while adding data";
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);			
	        redirect(base_url('carenq/'.$bid));	  		 
		}



		$this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
		$this->data['car_model'] = $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
		$this->data['fuel_type'] = $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 


		 //print_result($pkg_info);



	 

		$this->load->view('front/carenq',$this->data); 
	}
	public function carsuccess($bid=''){
		if($bid==''){
			redirect(base_url());  
		}

		
		$this->data['bid'] =  $bid; 


		 
	 

		$this->load->view('front/carsuccess',$this->data); 
	}


	










 








 



	public function getinfo($typ=''){

		if($typ=='dailybooking'){
				$query = $this->db->query("
		        SELECT 
		            DATE(created_on) as booking_date, 
		            COUNT(*) as booking_count 
		        FROM booking_mst 
		        WHERE created_on >= DATE(NOW() - INTERVAL 7 DAY)
		        GROUP BY DATE(created_on)
		        ORDER BY booking_date ASC
		    ");
		    

			$ct = (object) array();	
			$ct->data = $query->result_array();
		}

		if($typ=='city'){
				$ct = curl_get(api_link.'master/city'); 
		 		$out = array(); $o=0;
		 		foreach ($ct->data as $kv) {
		 			$out[$o]= $kv;
		 			$out[$o]->spl_encode= spl_encode($kv->id); 
		 			$out[$o]->ctlink= base_url('changecity/').spl_encode($kv->id); 
		 			$o++;
		 		}

		 		$ct->data = $out;

			 	
		}
		if($typ=='sc'){
				$ct = curl_get(api_link.'master/category'); 
		 		$out = array(); $o=0;
		 		foreach ($ct->data as $kv) {
		 			$out[$o]= $kv;
		 			$out[$o]->spl_encode= spl_encode($kv->id); 
		 			$o++;
		 		}
		 		$ct->data = $out;

			 	
		}
		if($typ=='servicepack'){

				// $param = array();
				// if(isset($_GET['city_id']) && $_GET['city_id']!='' ){
				// 	$param['city_id'] = $_GET['city_id'];  
				// }
				// if(isset($_GET['cat_id']) && $_GET['cat_id']>0 ){
				// 	$param['category_id'] = $_GET['cat_id']; 
				// }


				$param = array();
				if(isset($_GET['city_id']) && $_GET['city_id']!='' ){
					$param['city_id'] = $_GET['city_id'];  
				}
				if(isset($_GET['catz']) && $_GET['catz']!='' ){
					$param['cat_id'] = $_GET['catz']; //$ccid; 
				}
				if(isset($_GET['min']) && $_GET['min']>0 ){
					$param['min'] = $_GET['min']; //$ccid; 
				} 
				if(isset($_GET['max']) && $_GET['max']>0 ){
					$param['max'] = $_GET['max']; //$ccid; 
				} 



				// print_result($param);
				// echo api_link.'master/Packagemaster/list';

				// exit;



				$ct = curl_post(api_link.'master/Packagemaster/list',$param);   

		 		$out = array(); $o=0;
		 		if(isset($ct->data)){
			 		foreach ($ct->data as $kv) {
			 			$out[$o]= $kv;
			 			$out[$o]->spl_encode= spl_encode($kv->id); 
			 			$o++;
			 		}
		 		}
		 		$ct->data = $out;
		}

		if($typ=='usedcar'){

			$param = array();
				if(isset($_GET['city_id']) && $_GET['city_id']!='' ){
					$param['city_id'] = $_GET['city_id'];  
				}
				if(isset($_GET['carz']) && $_GET['carz']!='' ){
					$param['cat_id'] = $_GET['carz']; //$ccid; 
				}
				if(isset($_GET['min']) && $_GET['min']>0 ){
					$param['min'] = $_GET['min']; //$ccid; 
				} 
				if(isset($_GET['max']) && $_GET['max']>0 ){
					$param['max'] = $_GET['max']; //$ccid; 
				} 



				$ct = curl_get(api_link.'master/usedcar',$param); 
		 		$out = array(); $o=0;

		 		if(isset($ct->data)){
			 		foreach ($ct->data as $kv) {
			 			$out[$o]= $kv;
			 			$out[$o]->spl_encode= spl_encode($kv->id); 
			 			$o++;
			 		}
		 		}
		 		$ct->data = $out;
		}

		if($typ=='manufacturer'){
				$ct = curl_get(api_link.'master/manufacturer'); 
		 		$out = array(); $o=0;
		 		foreach ($ct->data as $kv) {
		 			$out[$o]= $kv;
		 			$out[$o]->spl_encode= spl_encode($kv->id); 
		 			$o++;
		 		}
		 		$ct->data = $out;
		}


		if($typ=='servicecat'){
				$ct = curl_get(api_link.'master/category'); 
		 		$out = array(); $o=0;
		 		foreach ($ct->data as $kv) {
		 			$out[$o]= $kv;
		 			$out[$o]->spl_encode= spl_encode($kv->id); 
		 			$o++;
		 		}
		 		$ct->data = $out;
		}

		if($typ=='sparepart'){

				$param = array();
				$param['city_id'] = $this->mycity_id;   
				if(isset($_GET['catz']) && $_GET['catz']!='' ){
					$param['cat_id'] = $_GET['catz']; //$ccid; 
				}
				if(isset($_GET['min']) && $_GET['min']>0 ){
					$param['min'] = $_GET['min']; //$ccid; 
				} 
				if(isset($_GET['max']) && $_GET['max']>0 ){
					$param['max'] = $_GET['max']; //$ccid; 
				} 



				$ct = curl_post(api_link.'master/products/list',$param);   
		 		$out = array(); $o=0;
		 		foreach ($ct->data as $kv) {
		 			$out[$o]= $kv;
		 			$out[$o]->spl_encode= spl_encode($kv->id); 
		 			$o++;
		 		}
		 		$ct->data = $out;
		}





		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($ct); 
		exit;
 
		 
	}
	




	public function login(){ 

		 

		if(isset($_SESSION['createbooking_id'])){
			 //echo base_url("createbooking/".$_SESSION['createbooking_id']);  
		}


		 

		if($_POST)
		{
			$data = $this->input->post();
			$this->session->set_userdata('uname', $data['uname']);
			//print_result($data);  


			//echo api_link.'auth/customer_verifyotp';

			$pp = curl_post(api_link.'auth/customer_verifyotp',$data);

			//print_result($pp); exit; 

			 if ($pp && isset($pp->status)) {
	            if ($pp->status == 1) {

	            	unset($_SESSION['uname']);


	                $pp->loggedin = 1;
	                $sess = (array) $pp; 
	                $this->session->set_userdata($sess); 
	                $typ = $pp->user_type; 

	                if($typ=='Customer'){
	                	

	                	if(isset($_SESSION['createbooking_id'])){
							 redirect(base_url("createbooking/".$_SESSION['createbooking_id']));  
						}

						elseif(isset($_SESSION['carenq'])){
							 redirect(base_url("carenq/".$_SESSION['carenq']));  
						}



						else{
							// redirect(base_url("customer/index")); 
							redirect(base_url()); 
						}


	                }
	                 
	            } else {
	                $this->session->set_flashdata('error', 'Wrong credentials');
	                redirect(base_url("login"), "refresh");
	            }
	        } else {
	            $this->session->set_flashdata('error', 'API request failed or returned an invalid response.');
	            redirect(base_url("login"), "refresh");
	        } 


			// if($rr->status==1)
			// {
			//  	$this->data['msg'] = $msg = "OTP sent successfully";
			//  	$typ='success';
			// }
			//  else
			// {
			//  	// $smsg= $rr->message;
			//  	 $this->data['msg'] = $msg = "Something went wrong. Try again later.";
			//  	$typ='error';
			// }
			// $this->data['rr'] = $rr;
			// $this->session->set_flashdata($typ,$smsg);
			// redirect(base_url("customer"));
		}






	 
		$this->load->view('front/login',$this->data); 
	}


	public function mechlogin(){ 

		 

		if($_POST)
		{
			$data = $this->input->post();
			// print_result($data); 

			$this->session->set_userdata('mech_uname', $data['uname']);


			

			$pp = curl_post(api_link.'auth/garage_verifyotp',$data);

			// print_result($pp); exit; 

			 if ($pp && isset($pp->status)) {
	            if ($pp->status == 1) {

	            	unset($_SESSION['mech_uname']);

	            	
	                $pp->loggedin = 1;
	                $sess = (array) $pp; 
	                $this->session->set_userdata($sess); 
	                $typ = $pp->user_type; 

	                 
	                
	                	redirect(base_url("mechanic/index"));
	                
	                 
	            } else {
	                $this->session->set_flashdata('error', 'Wrong credentials');
	                redirect(base_url("mechlogin"), "refresh");
	            }
	        } else {
	            $this->session->set_flashdata('error', 'API request failed or returned an invalid response.');
	            redirect(base_url("login"), "refresh");
	        } 

		}


	 
		$this->load->view('front/mechlogin',$this->data); 
	}










	public function terms(){ 
		 
		 
		  
 
		$this->load->view('front/terms',$this->data); 
	}
	public function privacypolicy(){ 
		 
		 
		  
 
		$this->load->view('front/privacypolicy',$this->data); 
	}

	public function returnpolicy(){ 
		 
		 
		  
 
		$this->load->view('front/returnpolicy',$this->data); 
	}
	public function shippingpolicy(){ 
		 
		 
		  
 
		$this->load->view('front/shippingpolicy',$this->data); 
	}
	public function cancellation(){ 
		 
		 
		  
 
		$this->load->view('front/cancellation',$this->data); 
	}
	public function changecity($xid=''){
		if($xid==''){
			// setcookie("mycityid", "", time() - 3600);
			// setcookie("mycityid_name", "", time() - 3600);
			setcookie("mycity_id", "", time() - 3600);
			setcookie("mycity_name", "", time() - 3600); 
			redirect(base_url()); 

		}else{
			$id = spl_decode($xid);
			$vv = $this->db->query('SELECT * FROM city where id='.$id)->row();

			 




			setcookie('mycity_id', $vv->id, time() + (86400 * 130), "/");
			setcookie('mycity_name', $vv->name, time() + (86400 * 130), "/");
			redirect(base_url()); 
		}
		
		 
	}




	


































  
	public function contact(){ 
		 if(isset($_GET['getcap'])){	

				////MATH--------
					$v1 = rand(11,19);
					$v2 = rand(3,9);
					$captcha = $v1.'+'.$v2;
					$_SESSION["captcha_res"] = $v1+$v2;
				////MATH ENDS::--------

				header ('Content-Type: image/png');
				$im = @imagecreatetruecolor(120, 40)
				      or die('Cannot Initialize new GD image stream');
				 
				$arr = array (
				  array(22, 86, 165),
				  array(92, 1, 1),
				  array(1, 81, 92),
				  array(38, 128, 3),
				  array(97, 63, 1),
				  array(28, 41, 59),
				  array(86, 6, 140),
				  array(125, 27, 83),
				  array(69, 168, 134),
				  array(114, 125, 14)
				);
				 
				$cn = rand(0,9);
				$arr_c = $arr[$cn];
				$bg = imagecolorallocate($im, $arr_c[0], $arr_c[1], $arr_c[2]);				 
				$fg = imagecolorallocate($im, 255, 255, 255);
				imagefill($im, 0, 0, $bg);
				imagestring($im, 7, 40, 12,  $captcha, $fg);				
				imagepng($im);
				imagedestroy($im);
				exit;
		}
		if(isset($_GET['verifycap'])){
				$cap =$_GET['verifycap'];
				 


				if(isset($_SESSION['captcha_res']) && $_SESSION['captcha_res']!=$cap){
					$out['status'] = 0;
					$out['message'] = '<p style="color:red; margin-bottom:0;"><i class="fa fa-times"></i>Sorry!!  Error in captcha. Please Try Again</p>';
				}else{
					$out['status'] = 1;
					$out['message'] = '';	
				}  
				header('Content-Type: application/json; charset=utf-8');
				echo json_encode($out);
				exit;
		}
		if($_POST)
		{
			$data = $inf =  $this->input->post();
			// print_result($inf);exit;
			$qr_id = 'QR-'.date('Ymd').'-'.rand(1000,9999);

 		 	// if(isset($_SESSION['captcha_res']) && $_SESSION['captcha_res']==$data['cap_ans']){

				$txt='Hi Team,<br>
				We have a new message form AUTOMOSS CONTACT FORM :<br> ';
				unset($data['cap_ans']);


				 
				 
				$data['Query ID'] = $qr_id;
				foreach ($data as $k => $v) {
					$txt .='<strong>'.$k.'<strong>:  '.$v.'<br>';
				}
				$txt .='<br><br>Many Thanks<br> AUTOMOSS';



				$subj = 'New message form AUTOMOSS| CONTACT FORM | '.$qr_id.' | '.$inf['name'].'  AUTOMOSS';
				 
				//echo $txt; exit;
					
			  $EmailUser['subject'] = $subj;


			  $EmailUser['to_email'] = 'melokanath@gmail.com';
			  $EmailUser['content'] = $txt;     
			  $pp = $this->sendemail($EmailUser); 

			  
			  $EmailUser['to_email'] = $this->common->email;				     
			  $pp = $this->sendemail($EmailUser);

			 // print_result($pp);  exit;
				

				if($pp) 
				{
				 	$smsg= "Email sent Successfully";
				 	$typ='success';
				}
				 else
				{
				 	$smsg= "Something went wrong.";
				 	$typ='error';
				}
				$this->session->set_flashdata($typ,$smsg);
				redirect(base_url("contact"));
			// }
		}
		 
		
		 	 
		$this->load->view('front/contact',$this->data);
	}
	

	
	public function innerpage($data){ 
		
		$this->data['info']=$data;
		$this->load->view('front/inner',$this->data);
	}

	// public function blog($url){ 
	// 	$this->data['rblog'] =$rblog=  $this->db->query('SELECT * from pages where page_type="Blog" and page_id NOT IN (SELECT page_id from pages where page_type="Blog" and page_url="'.$url.'") order by page_id desc limit 10')->result();
	// 	$this->data['bd'] = $info =  $this->db->query('SELECT * from pages where page_type="Blog" and page_url="'.$url.'" ')->row(); 


	// 	 $this->data['og']= base_url('uploads/vfn/thumb/'.$info->thumbnail);  
	// 	 $this->data['og_url']= base_url().$info->page_url;
	// 	 $this->data['url']= $url =  base_url().$info->page_url;
	// 	$this->data['title']= strip_tags($info->meta_title).' | Upcoming Projects';
	// 	$this->data['descp']= $info->meta_desc;

		

	// 	$this->load->view('front/blog_view',$this->data);
	// }
	// public function blogs(){ 
	// 	$this->data['ablog'] =  $this->db->query('SELECT * from pages where page_type="Blog" order by page_id desc')->result();
	// 	$this->load->view('front/blogs',$this->data);
	// }

	 






	public function robot(){
		echo nl2br($this->common->robot);
	}
	 
	public function error404(){

		$this->load->view('front/404',$this->data);
	}
	public function blog(){

		$this->load->view('front/blog',$this->data);
	}
	public function about(){

		$this->load->view('front/about',$this->data);
	}
	
	public function blog_details(){

		$this->load->view('front/blogdetails',$this->data);
	}
	
	public function register(){

		$this->load->view('front/register',$this->data);
	}
	public function from(){

		$this->load->view('front/from',$this->data);
	}
	public function pkfrom(){

		$this->load->view('front/pkfrom',$this->data);
	}
	public function thanku(){

		$this->load->view('front/thanku',$this->data);
	}
	public function pkthanku(){

		$this->load->view('front/pkthanku',$this->data);
	}








		public function reset_password($x='')
		{
			if($x==''){
				redirect(base_url());
			}


		    if ($_POST) {
		        $password = $this->input->post('password', TRUE);
		        $repeat_password = $this->input->post('repeat_password', TRUE);
		        $rand_key = $x;  


		        if (!empty($password) && !empty($repeat_password)) {
		            if ($password === $repeat_password) {
		                $api_data = [
		                    'rand_key' => $rand_key,
		                    'password' => $password,
		                ];

		                $dd = curl_post(api_link . 'auth/resetpass', $api_data);

		                if($dd->status==1)
						{
						 	$smsg= "Password Updated Successfully";
						 	$typ='success';
						}
						 else
						{
						 	$smsg= $rr->message;
						 	$typ='error';
						}
						$this->session->set_flashdata($typ,$smsg);
						redirect(base_url("backend"));
					}

		   		 $this->load->view('backend/reset_password', $this->data);
			}

		}

	}





}