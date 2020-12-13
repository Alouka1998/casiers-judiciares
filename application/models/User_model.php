<?php 
class User_model extends CI_Model{
		public function log_in($login,$pass,$table){ // login data 
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('username',$login);
		$this->db->where('password',md5($pass));
		$query=$this->db->get();
		if ($query->num_rows()==1) {
	  	return $query->row(); //exist
	  } else{
	  	return false; // not found
	  }
	}
		public function get_two_wheretablec($table1,$table2,$column1,$column2){ //join two table
	     $query=$this->db->query(" select * from $table1 ,$table2
	                             WHERE $table1.$column1=$table2.$column2 
	                             ");
					if( $query->num_rows() >0) { //found data				          
				        return  $query->result(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }
	      public function getCasierBysearch($acte,$date,$centre){ 
	      
			 $this->db->select('*'); //sql request
               $this->db->from('casiers');
               $this->db->from('peoples');
               $this->db->where('num_acte',$acte);
               $this->db->where('date_birth',$date);
               $this->db->where('place_birth',$centre);
                $this->db->limit(1);        
				   $query=$this->db->get();   
					if( $query->num_rows() ==1) { //found data  
				        return  $query->row(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }
	//vqliddation usernqme
	public function validationUsername($log){
		$this->db->where('login',$log);
		$query=$this->db->get('users');   
		if( $query->num_rows() >0) {
			return false;
		} else return true;

	}
	public function insert_data($table,$data){ // methode to save data into database 
		$this->db->get($table); //get table name 
		$this->db->insert($table,$data);// insert data 
        return $this->db->insert_id();
	}
	public function get_table_where($table,$column,$limit){ 
			 $this->db->select('*'); //sql request
               $this->db->from($table);
               $this->db->where($column,$limit);
               $this->db->order_by('id', 'RANDOM');       
				   $query=$this->db->get();   
					if( $query->num_rows() >0) { //found data  
				        return  $query->result(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }
	    
	 public function set_update($data,$table,$column,$limit){ //data , table, columm , wehere limit
 		$this->db->select('*');
 		$this->db->from($table);
 		$this->db->where($column,$limit);
 		if($this->db->update($table,$data)){
 			return true;
 		}
		return false;
		

 	 } 
 	 	public function get_table($table){
			 $this->db->select('*'); //sql request
               $this->db->from($table); 
               $this->db->order_by('id', 'RANDOM');        
				   $query=$this->db->get();   
					if( $query->num_rows() >0) { //found data
						foreach ($query->result() as $rows) {
							$data [] = $rows;
						}
				          
				        return  $data; //retun all the data found
                     } else{
                     	return false;
                     }
	     }
	     function getTopAlBum(){
	     	$this->db->select('*'); //sql request
               $this->db->from('albums'); 
                $this->db->limit(12);   
               $this->db->order_by('id', 'RANDOM');        
				   $query=$this->db->get();   
					if( $query->num_rows() >0) { //found data
						foreach ($query->result() as $rows) {
							$data [] = $rows;
						}
				          
				        return  $data; //retun all the data found
                     } else{
                     	return false;
                     }

	     }
	// public function insert_donne($table,$data){ // methode to save data into database 
	// 	//$this->db->get($table); //get table name 
	// 	$this->db->insert($table,$data);// insert data 
 //        return true;
	// }
	// public function getReference($ref){
 //  $q=$this->db->get_where('reference',array('id' =>1),1);
 //  return $ref.'/'.$q->row();
 // 	}
	// public function addAchat($data,$items){
	// 	$this->db->insert('achats',$data);// insert data 
		
 //        $id_ahat= $this->db->insert_id();
 //        foreach ($items as $item) {
 //        	$item['idachats']=$id_ahat;
 //        	$this->db->insert('achats_item',$item);// insert data 
            
 //        }
 //        $this->updateReference('art');
 //         return true;
	// }


     public function get_table1($table){
			 $this->db->select('*'); //sql request
               $this->db->from($table);
                 $this->db->limit(1);       
				   $query=$this->db->get();   
					if( $query->num_rows() >0) { //found data
						
				          
				        return $query->row(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }
	     	
	     public function get_table_whereById($table,$limit){ 
			 $this->db->select('*'); //sql request
               $this->db->from($table);
               $this->db->where('id',$limit);       
				   $query=$this->db->get();   
					if( $query->num_rows() >0) { //found data

				          
				        return  $query->row(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }
	     public function getCurrentUser($table,$limit){ 
			 $this->db->select('*'); //sql request
               $this->db->from($table);
               $this->db->where('login',$limit);       
				   $query=$this->db->get();   
					if( $query->num_rows() >0) { //found data

				          
				        return  $query->row(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }

	     public function get_two_table($table1,$table2){
			 $this->db->select('*'); //sql request
               $this->db->from($table1);
               $this->db->from($table2);
               $this->db->distinct();     
				   $query=$this->db->get();   
					if( $query->num_rows() >0) { //found data

				          
				        return  $query->result(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }                                                                  //decission
	    public function get_two_wheretable($table1,$table2,$column1,$column2,$etat){ //join two table
	     $query=$this->db->query(" select * from `$table1` ,`$table2`
	                             WHERE `$table1`.`$column1`=`$table2`.`$column2`
	                             AND `$table1`.`etat` = '$etat'  "); // etat de la  decission en attente 
					if( $query->num_rows() >0) { //found data				          
				        return  $query->result(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }
	     public function delete_data($table,$data,$column){ // delete user by id as data
		$this->db->get($table);
	    $this->db->where($column,$data)->delete($table);
	      return true;

	   }

	public function Online($etat,$id){
 	$this->db->set('online',$etat);
    $this->db->where('id',$id);
    $this->db->update('articles');
     return true;
 	}
 	public function set_decission($avis,$id){
 	// $this->select('*');
 	// $this->from('demmande');
    $this->db->set('etat',$avis);
    $this->db->where('iddemmande',$id);
    $this->db->update('demmande');
     return true;
 	}
 	public function set_solde($user_email,$nbr){
 		// // get the actual solde first 
 		$this->db->select('*');
 		$this->db->from('user');
 		$this->db->where('email',$user_email);
 		$query=$this->db->get();
 		// //
// $query=$this->db->query("select solde as solde from user where email=$user_email ");
//   $row=$query->row();

 		//
 		$solde=$query->row()->solde; //current solde
 		if($nbr > $solde){ // check if solde is enough
 			return false;
 		}else{
 			$newsolde=$solde-$nbr; // substract the nbr jour 
 			$this->db->set('solde',$newsolde);
		    $this->db->where('email',$user_email);
		    $this->db->update('user');
            return true;
 		}

 	}
    public function activate_user($id){
	$this->db->set('statut','1'); // 1 to active 0 to desactive
	$this->db->where('iduser', $id);
	$this->db->update('user');
	return true;	
}
 
	     //get admin mail
	     public function getmail($type){
	     	$this->db->select('email');
	     	$this->db->from('user');
	     	$this->db->where('type',$type);
	     	$query=$this->db->get();
    	$rows=$query->result();
    	return $rows;
	     }
     public function  get_admin(){
    $query=$this->db->query("SELECT * FROM admins WHERE actif='1' ");
          return $query->result();
  }
  // new methods on the model
  public function getReference($field){
  $q=$this->db->get_where('reference',array('id' =>1),1);
  if($q->num_rows()>0){
  	$ref=$q->row();
  	 switch ($field) {
    	case 'art':
    		$pre='ART';
    		break;
    	case 'cmd':
    		$pre='CMD';
    		break;
    	case 'ach':
    		$pre='ACH';
    		break;
		case 'dmtroc':
    		$pre='DMDTRC';
    		break;
		case 'an':
    		$pre='DMDAN';
    		break;
		case 'troc':
    		$pre='TROC';
    		break;
    	default:
    		$pre='';
    		break;
    }
    $ref_no=$pre.'/'.sprintf("%04s",$ref->{$field});
    return $ref_no;
  }
   
  return $ref.'/'.$q->row();
 	}
 	 function updateReference($field){
    $q=$this->db->get_where('reference',array('id' =>1),1);
     if($q->num_rows()>0){
     	$ref=$q->row();
     	$this->db->update('reference',array($field =>(int)$ref->{$field}+1 ));
     	return true;
     }
 	}
 	public function get_requests($table,$column,$limit){ 
			 $this->db->select('*'); //sql request
               $this->db->from($table);
               $this->db->where($column,$limit); 
               $this->db->where('treat',0);      
				   $query=$this->db->get();   
					if( $query->num_rows() >0) { //found data

				          
				        return  $query->result(); //retun all the data found
                     } else{
                     	return false;
                     }
	     }

    public function get_article_pulish(){ 
		$this->db->select('*'); //sql request
	    $this->db->from('articles');
       	$this->db->where('online',1);
	    //$this->db->group_by('category');
	    $this->db->order_by('id','DESC');  
	   	$query=$this->db->get();   
		if( $query->num_rows() >0) { //found data
         
	        return  $query->result(); //retun all the data found
         } else{
         	return false;
         }
	}
	 public function get_count() 
	{
		$this->db->where('online',1);
        return $this->db->count_all("articles");
    }
	public function get_new_article($limit){ 
		$this->db->select('*'); //sql request
	    $this->db->from('articles');
       	$this->db->where('online',1);
	    //$this->db->group_by('category');
	    //$this->db->order_by('id', 'RANDOM');
	    $this->db->order_by('created_at','DESC');
	    $this->db->limit($limit);

	   	$query=$this->db->get();   
		if( $query->num_rows() >0) { //found data
         
	        return  $query->result(); //retun all the data found
         } else{
         	return false;
         }
	}
	public function get_liste_article($limit){ 
		$this->db->select('*'); //sql request
	    $this->db->from('articles');
       	$this->db->where('online',1);
	    //$this->db->group_by('category');
	    $this->db->order_by('id', 'RANDOM');
	    //$this->db->order_by('created_at','DESC');
	    $this->db->limit($limit);

	   	$query=$this->db->get();   
		if( $query->num_rows() >0) { //found data
         
	        return  $query->result(); //retun all the data found
         } else{
         	return false;
         }
	}
	public function get_Pagination($limit, $start) 
	{
		$this->db->where('online',1);
        $this->db->limit($limit, $start);
        $this->db->order_by('id','DESC');
       
        $query = $this->db->get("articles");
        return $query->result();
    }
    public function get_count_search($key,$categories,$prix) 
	{
		$this->db->where('online',1);
		if($key){
		$this->db->like('nom',$key);
		$this->db->or_like('marque',$key);
		}
		if($categories){
        $this->db->where('category',$categories);}
        if($prix){
        $this->db->where('prix <=',$prix); }
        return $this->db->count_all("articles");
    }
    public function get_search($key, $categories,$prix,$limit,$start) 
	{
		$this->db->where('online',1);
		$this->db->limit($limit, $start);
		if($key){
		 $this->db->like('nom',$key);
		 $this->db->or_like('marque',$key);
		}
        if($categories){
        	$this->db->where('category',$categories);
        }
        if($prix){
        	 $this->db->where('prix <=',$prix);
        }
        
       
        
        //$this->db->order_by('id','DESC');
       
        $query = $this->db->get("articles");
        return $query->result();
    }
    public function get_Pagination_catg($limit, $start, $category) 
	{
		$tab = array('online' => 1, 'category'=> $category);
		$this->db->where($tab);
		//$this->db->where('category', $category);
        $this->db->limit($limit, $start);
        $this->db->order_by('created_at','DESC');
       
        $query = $this->db->get("articles");
        return $query->result();
    }
    public function get_count_catg($category) 
	{
		
		$this->db->where('online',1);
		$this->db->or_where('category', $category);
        return $this->db->count_all("articles");
    }
    public function get_category($limit){ 
		$this->db->select('*'); //sql request
	    $this->db->from('categories');
	    $this->db->order_by('id', 'RANDOM');
	    $this->db->limit($limit);
       	//$this->db->where('online',1);
	    //$this->db->group_by('category');
	    $this->db->order_by('nom','ASC');  
	   	$query=$this->db->get();   
		if( $query->num_rows() >0) { //found data
			foreach ($query->result() as $value) {
				$data[]=$value;
			}
         
	        return $data;  //retun all the data found
         } else{
         	return false;
         }
	}
	public function get_category_footer($limit){ 
		$this->db->select('*'); //sql request
	    $this->db->from('categories');
	     $this->db->order_by('id', 'RANDOM');
	    $this->db->limit($limit);
       	//$this->db->where('online',1);
	    //$this->db->group_by('category');
	    $this->db->order_by('nom','ASC');  
	   	$query=$this->db->get();   
		if( $query->num_rows() >0) { //found data
			foreach ($query->result() as $value) {
				$data[]=$value;
			}
         
	        return $data;  //retun all the data found
         } else{
         	return false;
         }
	}
	
	//validation e;ail subscribes
	public function validationSubscriber($log){
		$this->db->where('email',$log);
		$query=$this->db->get('subscriber');   
		if( $query->num_rows() >0) {
			return false;
		} else return true;

	}
	// select du marque et category
		function fetch_marque($category)
	 {
	  $this->db->where('image', $category);
	  $this->db->order_by('nom', 'ASC');
	  $query = $this->db->get('marque');
	  $output = '<option value="">Selectione la marque</option>';
	  
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->nom.'">'.$row->nom.'</option>';
	  }
	  $output .='<option value="Autres">Autres</option>';
	  return $output;
	 }
	 function getUsers($searchTerm=""){

     // Fetch users
     $this->db->select('*');
     $this->db->where("nom like '%".$searchTerm."%' ");
     $fetched_records = $this->db->get('categories');
     $categories = $fetched_records->result_array();

     // Initialize Array with fetched data
     $data = array();
     foreach($categories as $categorie){
        $data[] = array("id"=>$categorie['nom'], "text"=>$categorie['nom']);
     }
     return $data;
  }




}
?>