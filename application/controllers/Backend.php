<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Backend extends Admin_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->model('User_m');
		
		
        $this->load->library('email');
        $this->load->library('pagination');	

	}
	
	



	// public function index()
	// {
	// 	$rules = $this->User_m->rule_login;
	// 	$this->form_validation->set_rules($rules);
	// 	if($this->form_validation->run() == TRUE)
	// 	{
	// 		if($this->User_m->login() == TRUE)
	// 		{
	// 			$typ =$this->session->userdata('user_typ');
								
	// 			if($typ=='Admin'){
	// 				redirect(base_url("admin/index"));
	// 			}
				 
				
	// 		}
	// 		else
	// 		{				
	// 			$this->session->set_flashdata('error','Email ID / Password Combination Doesn\'t Exist');
	// 			redirect(base_url("backend"), "refresh");
	// 		}
	// 	}
	// 	if($this->User_m->isLoggedin() == TRUE)
	// 	{
	// 			$typ =$this->session->userdata('user_typ');
	// 			if($typ=='Admin'){
	// 				redirect(base_url("admin/index"));
	// 			}
				 
	// 	}	
		
	// 	$this->data['sub_view']='';
	// 	$this->load->view('backend/login',$this->data);
	// }


	//////////////////////////////////////////////////////LOGIN USING API


	public function index()
	{
	    if ($_POST) {
	        $rr = $_POST;  

	        $data['email'] = $rr['email'];
	        $data['password'] = $rr['password'];

	        $pp = curl_post(api_link . 'auth/login', $data); 

	        if ($pp && isset($pp->status)) {
	            if ($pp->status == 1) {
	                $pp->loggedin = 1;
	                $sess = (array) $pp; 
	                $this->session->set_userdata($sess); 
	                $typ = $pp->user_type; 
	                redirect(base_url("admin/index")); 
	            } else {
	                $this->session->set_flashdata('error', 'Email ID / Password Combination Doesn\'t Exist');
	                redirect(base_url("backend"), "refresh");
	            }
	        } else {
	            $this->session->set_flashdata('error', 'API request failed or returned an invalid response.');
	            redirect(base_url("backend"), "refresh");
	        }
	    }

	    $this->data['sub_view'] = '';
	    $this->load->view('backend/login', $this->data);
	}



	// public function forget_password()
	// {


	// 		if($_POST)
	// 		{
	// 			$ro = $this->input->post(); 
	// 			$eml = $ro['email'];

	// 			$vf = $this->db->query('SELECT * FROM user_mst where  user_email="'.$eml.'"  and status = 1  ')->row();			 
	// 			if(mycounts($vf)>0)
	// 			{				
				 
	// 				$dd['fpass_link_code']= $fpass_link_code = random_string('alnum', 25);				 
	// 				$vfzz = $this->db->update('user_mst',$dd, array('user_id'=>$vf->user_id));
	// 				$vlink = base_url('reset_password/'.$fpass_link_code);
					


	// 				$body_customer = nl2br("Hey ".$vf->user_name.",             	
	// 	          	We got your password reset request.
		          	 
	// 	          	 Please click below link to reset password.:
	// 	          	 <a href='".$vlink."'>Reset Password Link</a>

	// 	          	 If its not you please ignore this email.
		          	 

	// 	          	Thanks you.
	// 	          	TEAM SSBVENTURES.
	// 	          	"); 


				
						
	// 			  $EmailUser['subject'] = 'Forget password request AT: SSBVENTURES';
	// 			  $EmailUser['to_email'] = $vf->user_email;
	// 			  $EmailUser['content'] = $body_customer;  
	// 			  $pp = $this->sendgridmail->mail($EmailUser);	

	// 			  // print_result($pp);  exit;


					 


				  
	// 			  $this->session->set_flashdata('success','Reset password request received.!');


	// 			  redirect(base_url('fpass_thanks'));
	// 			}
	// 		}





	// 	$this->data['sub_view']='';
	// 	$this->load->view('backend/forget_password',$this->data);
	// }






		public function forget_password()
		{
		    if ($_POST) {
		        $email = $this->input->post('email', TRUE);

		        if (!empty($email)) {
		            $api_data = ['email' => $email];

		            $api_response = curl_post(api_link . 'auth/forgetpass', $api_data);

		            if ($api_response && isset($api_response->status)) {
		                if ($api_response->status == 1) {
		                    redirect(base_url('backend/fpass_thanks'));
		                } else {
		                    $this->session->set_flashdata('error', $api_response->message);
		                }
		            } else {
		                $this->session->set_flashdata('error', 'Failed to process your request. Please try again later.');
		            }
		        } else {
		            $this->session->set_flashdata('error', 'Please provide a valid email address.');
		        }
		        redirect(base_url('backend/forget_password'));
		    }

		    $this->load->view('backend/forget_password', $this->data);
		}




 


	public function fpass_thanks()
	{
		 
		 
		 
		
		$this->load->view('backend/fpass_thanks',$this->data);
	}



 


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('backend'),'refresh');
	} 
	 
	 
	  
}