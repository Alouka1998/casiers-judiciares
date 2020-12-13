<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		header("Access-Control-Allow-Origin: *");
	    header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	    header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');
	    $this->load->model('User_model'); //load model
	  $this->load->library('form_validation'); //load form_validation library
	  $this->load->library('session'); 
      $this->load->helper('url'); 
      // call the session librairie

		
	}
	public function index()
	{

	$this->load->view('login.php');
		
	}
	public function welcome()
	{
		if(!$this->session->username){
			$this->load->view('login.php');
		}else{
			$this->load->view('welcome.php');
		}

	
		
	}
	function login(){
		 
			$log=$this->input->post('username');
	 		$pass=$this->input->post('password');
		 	$data=$this->User_model->log_in($log,$pass,'users');
		 	if($data){
      			$newdata = array(
      					
				        'username'  => $log,
				        'logged_in' => TRUE
				);

				$this->session->set_userdata($newdata);
		 		
		 		$this->load->view('welcome.php');
		 	}else{
		 		$this->session->set_flashdata('error',"Compte introuvable");
		 		$this->load->view('login.php');
		 	}
		      
			
		}
		public function addcasierView()
	{
		if(!$this->session->username){
			$this->load->view('login.php');
		}else{
			$this->load->view('addcasier.php');
		}

	
		
	}
	  function addcasier(){ // add user to database
	 	$nom_prenom=$this->input->post('nom_prenom');
	 	$pere=$this->input->post('pere');
	 	$mere=$this->input->post('mere');
	 	$lieu=$this->input->post('lieu');
	 	$domicile=$this->input->post('domicile');
	 	$profession=$this->input->post('profession');
	 	$situation_famille=$this->input->post('situation_famille');
	 	$num_acte=$this->input->post('num_acte');
	 	$date_naissance=$this->input->post('date_naissance');
	   
	 	
	 	$date_condam=$this->input->post('date_condam');
	 	$juridiction=$this->input->post('juridiction');
	 	$date_crime=$this->input->post('date_crime');
	 	$nature_crime=$this->input->post('nature_crime');
	 	$peine=$this->input->post('peine');
	 	$date_mandat=$this->input->post('date_mandat');

	 	$data = array(  //gather data from form
  			'full_name'=>$nom_prenom,
				'father_name'=>$pere,
				'mother_name'=>$mere,
				'place_birth'=>$lieu,
				'family_situation'=>$situation_famille,
				'num_acte'=>$num_acte,
				'date_birth'=>$date_naissance,			
				'house'=>$domicile,
				'created_at'=>date('y-m-d H:i:s'),
				'profession'=>$profession
			);
	 	
      			$last_id=$this->User_model->insert_data('peoples',$data);
      	
		 	if($last_id){
		 		$datas = array(  //gather data from form
  			'date_condam'=>$date_condam,
				'juridiction'=>$juridiction,
				'date_crime'=>$date_crime,
				'nature_crime'=>$nature_crime,
				'date_mandat'=>$date_mandat,
				'peine'=>$peine,
				'id_people'=>$last_id,
			);
	 	
      			$insert=$this->User_model->insert_data('casiers',$datas);
                  if($insert){
                  	$this->session->set_flashdata('success',"Casier enregistré avec succès");
                  	$this->load->view('welcome.php');
                  	$this->session->set_flashdata('error',"erreur veuillez reéssayer");
                  }else{
                  	$this->session->set_flashdata('error',"erreur veuillez reéssayer");
                  	$this->load->view('addcasier.php');
                  }
                
		 		
		 	}else{
		 		$this->session->set_flashdata('error',"erreur veuillez reéssayer");
		 		$this->load->view('addcasier.php');
		 	}  
       }
       function listcasier(){
       	if(!$this->session->username){
			$this->load->view('login.php');
		}else{
			$this->getCasierList();
       	$data['casiers']=$this->getCasierList();
		$this->load->view('listcasier',$data);
		}
       	
       }
	function getCasierList(){
	    	
	    $data=$this->User_model->get_two_wheretablec('peoples','casiers','id','id_people');
		 	return $data;     
	   }
	   function search(){
	   	if(!$this->session->username){
			$this->load->view('login.php');
		}else{
			$this->load->view('search.php');
		}
	   	
	   }
	   function loadsearch(){
	   	$acte=$this->input->post('num_acte');
	 	$date=$this->input->post('date_acte');
	 	$centre=$this->input->post('centre');
	   	$data['casier']=$this->User_model->getCasierBysearch($acte,$date,$centre);
	   	$this->session->set_flashdata('info',"Aucun resultat");
		$this->load->view('search',$data);
         //echo json_encode($data['casiers']);
	   }
	   function addcourt(){
	   	if(!$this->session->username){
			$this->load->view('login.php');
		}else{
			$this->load->view('addcourt.php');
		}
	   }
	   public function savecourt()
	   {
	   	$name=$this->input->post('name');
	 	$phone=$this->input->post('phone');
	 	$adress=$this->input->post('adress');
	 	$email=$this->input->post('email');
	 	$region=$this->input->post('region');
	 	$commune=$this->input->post('commune');
	   $datas = array(  //gather data from form
  			    'name'=>$name,
				'tel'=>$phone,
				'adress'=>$adress,
				'email'=>$email,
				'commune'=>$commune,
				'region'=>$region,
			);
	 	
      	    $insert=$this->User_model->insert_data('courts',$datas);
      	    if($insert){
                  	$this->session->set_flashdata('success',"Casier enregistré avec succès");
                  	$this->load->view('welcome.php');
                  	$this->session->set_flashdata('error',"erreur veuillez reéssayer");
                  }else{
                  	$this->session->set_flashdata('error',"erreur veuillez reéssayer");
                  	$this->load->view('addcourt.php');
                  }
	   }
	   function listcourt(){
       	if(!$this->session->username){
			$this->load->view('login.php');
		}else{
			
       	$data['casiers']=$this->User_model->get_table('courts');
		$this->load->view('listcourt',$data);
		}
       	
       }
       public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('flash_message',"Vous êtes deconnecté avec succès");
        redirect('./');
    }
    function do(){
    	$this->load->view('do.php');
    }
    public function savedo()
    {
    	$num_acte=$this->input->post('num_acte');
	 	$date_acte=$this->input->post('date_acte');
	 	$centre=$this->input->post('centre');
	 	$mode=$this->input->post('mode');
	 	$buy=$this->input->post('buy');
	   $datas = array(  //gather data from form
  			    'num_acte'=>$num_acte,
				'date_acte'=>$date_acte,
				'centre'=>$centre,
				'mode'=>$mode,
				'paid_mode'=>$buy,
				'date'=>date('y-m-d H:i:s'),
			);
	 	
      	    $insert=$this->User_model->insert_data('do',$datas);
      	    if($insert){
                  	$this->session->set_flashdata('success',"votre demande de Casier a été enregistré avec succès \nVous allez recevoir votre casier par ".$mode);
                  	 redirect('./');
                  }else{
                  	$this->session->set_flashdata('error',"erreur veuillez reéssayer");
                  	$this->load->view('do.php');
                  }
    }
    function adduser(){
       	if(!$this->session->username){
			$this->load->view('login.php');
		}else{
			
		$this->load->view('adduser.php');
		}
       	
       }
       function saveuser(){
       	$this->load->view('welcome.php');
       }
       function listuser(){
       		if(!$this->session->username){
			$this->load->view('login.php');
		}else{
			
       	$data['users']=$this->User_model->get_table('users');
		$this->load->view('listuser',$data);
		}
       }

   

	
  
}
