<?php 
   class CelebVotingController extends CI_Controller {

   	 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 

         $this->load->model('celebModel');
      } 
  

      public function index() { 
         //echo "Hello World!"; 

      	$query = $this->celebModel->getTwoCelebs();
			  $data['VOTE'] = null;
			  if($query){
			   $data['VOTE'] =  $query;
			  }
      	$this->load->view('VoteForCelebView.php',$data);

      	 //$this->load->view("AddCelebView"); 


      } 
      //methods go here
      public function load_new_celeb(){
         $this->load->view('AddCelebView.php');
      }

      public function load_leaderboard(){
         //uncomment below one 
           $query = $this->celebModel->getAllCelebs();
           //$query = $this->celebModel->getTwoCelebs();
           $data['CELEB'] = null;
           if($query){
            $data['CELEB'] =  $query;
           }

           $this->load->view('LeaderboardView.php', $data);
      }

      public function add_celeb() { 

         $data = array( 
            'name' => $this->input->post('name'), 
            'imgURL' => $this->input->post('imgURL') 
         ); 
			
         $this->celebModel->insert($data); 
   
         /*$query = $this->db->get("celeb"); 
         $data['records'] = $query->result(); 
         $this->load->view('AddCelebView',$data);*/ 

		} 

		public function vote_celeb() { 
			 # to check all inputs are comming.
    			print_r($_POST);
			// call celeb voting 
            $id = $this->input->post('btnVote');
			 	//$id = $this->input->post('id');
			 	
			 	//doesnt work
			 	//echo var_dump($id);
			 	//echo "<script>console.log(\"$id\")</script>" ;

			 	//$this->celebModel->increaseVote($id); 

 				//echo $id;
 				//echo "<script>console.log(\"$id\")</script>" 
 				//$this->model->function($id);
 				//return $id;


 				$this->db->set('vote', 'vote+1', FALSE);
				$this->db->where('id', $id);
				$this->db->update('celeb');
				//return'One /record incremented Successfully';
            redirect('CelebVotingController');
		}


}

    
?>