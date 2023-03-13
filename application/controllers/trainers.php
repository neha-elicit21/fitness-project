<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Trainers extends CI_Controller {

	public function __construct()

    {

		parent::__construct();

		$this->load->helper('url');

		$this->load->model('My_model');

        $this->load->library('session');

		if (!$this->session->userdata('logged_in'))

		{
        redirect('/welcome');
    	}

		

	}

	public function index()

	{
		 $id = array('trainersID' =>$this->session->userdata['login_id']);
		 $userid = array('ID' =>$this->session->userdata['login_id']);
		 $data['userdata']=$this->My_model->getMultipleData('vg_users',$userid);
		 $data['customer']=$this->My_model->getMultipleData('vg_users',$id);
		 $this->load->view('trainers/tainers_header',$data);

		 $this->load->view('trainers/tainers_dashbord');

		 $this->load->view('trainers/tainers_footer');

	}



	public function users()
	{
		 $id = array('trainersID' =>$this->session->userdata['login_id']);
		 $data['customer']=$this->My_model->getMultipleData('vg_users',$id);
		 $this->load->view('trainers/tainers_header',$data);

		 $this->load->view('trainers/users');

		 $this->load->view('trainers/tainers_footer');

	}

public function add_trainee()
	{
		// $data['trainers']=$this->My_model->get_trainer();
		$this->load->view('trainers/tainers_header');

		$this->load->view('trainers/add_trainee');

		$this->load->view('trainers/tainers_footer');
	}

   public function submit_trainee()
	{ 
		if($_POST){
			   $this->form_validation->set_rules('trainee_name','Trainee Name','required');
			   $this->form_validation->set_rules('trainee_email','Trainee email','required|valid_email|max_length[128]|trim');
			   $this->form_validation->set_rules('trainee_number','Trainee Phone number','required');
			   $this->form_validation->set_rules('trainee_address','Trainee Address','required');
			   $this->form_validation->set_rules('trainee_password','Trainee Password','required');
			if ($this->form_validation->run()==TRUE)
			 {
			      if(!empty($_FILES['trainee_file']['name'])){
                  $config['upload_path'] = 'img';
                  $config['allowed_types'] = 'jpg|jpeg|png|gif';
                  $config['file_name'] = $_FILES['trainee_file']['name'];
                  $this->load->library('upload',$config);
                  $this->upload->initialize($config);
                  if($this->upload->do_upload('trainee_file')){
                      $uploadData = $this->upload->data();
                      $Profile_img = $uploadData['file_name'];
                  }
                  else{
                      $Profile_img = '';
                  } 

              }
            else{

                 $Profile_img = $this->input->post('trainee_file');
              }

              $data=array(

              	'UserName' =>$this->input->post('trainee_name'),

              	 'UserPhone'=>$this->input->post('trainee_number'),

              	 'UserEmail'=>$this->input->post('trainee_email'),

              	 'UserType'=>2,

              	 'UserPassword'=>md5($this->input->post('trainee_password')),

              	 'UserAddress'=>$this->input->post('trainee_address'),
              	 'trainersID'=>$this->session->userdata['login_id'],

                 'UserProfile'=>$Profile_img
              	);
              $res=$this->My_model->Insert('vg_users',$data);
              if ($res==true)
              {
              		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>Success!</strong>
							trainer add successfully !
							</div>');

              	  redirect('trainers/users');

              }
			}
									
	}

}
 public function edit_trainee()
	{
		$traineeId = $this->uri->segment(3);
		$id=array('ID'=>$traineeId);
		$result['data']=$this->My_model->getSingleData('vg_users',$id);
		$this->load->view('trainers/tainers_header');
		$this->load->view('trainers/edit_trainee',$result);
		$this->load->view('trainers/tainers_footer');
	}

 public function submit_edit_trainee()
	{ 
		if($this->input->post('ID')){
			   $this->form_validation->set_rules('trainee_name','Trainee Name','required');
			   $this->form_validation->set_rules('trainee_email','Trainee email','required|valid_email|max_length[128]|trim');
			   $this->form_validation->set_rules('trainee_number','Trainee Phone number','required');
			   $this->form_validation->set_rules('trainee_address','Trainee Address','required');
			   // $this->form_validation->set_rules('trainee_password','Trainee Password','required');
			if ($this->form_validation->run()==TRUE)
			 {
			    if(!empty($_FILES['trainee_file']['name'])){
                  $config['upload_path'] = 'img';
                  $config['allowed_types'] = 'jpg|jpeg|png|gif';
                  $config['file_name'] = $_FILES['trainee_file']['name'];
                  $this->load->library('upload',$config);
                  $this->upload->initialize($config);
                  if($this->upload->do_upload('trainee_file')){
                      $uploadData = $this->upload->data();
                      $Profile_img = $uploadData['file_name'];
                  }
                  else{
                      $Profile_img = '';
                  } 

              }
            else{

                 $Profile_img = $this->input->post('trainee_file');
              }
              $data=array(
              	 'UserName' =>$this->input->post('trainee_name'),
              	 'UserPhone'=>$this->input->post('trainee_number'),
              	 'UserEmail'=>$this->input->post('trainee_email'),
              	 'UserType'=>2,
              	 // 'UserPassword'=>$this->input->post('trainee_password'),
              	 'UserAddress'=>$this->input->post('trainee_address'),
                 'UserProfile'=>$Profile_img
              	);
              $id=array('ID'=>$this->input->post('ID'));
              $res=$this->My_model->Update('vg_users',$data,$id);
              if ($res==true)
              {
              		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>Success!</strong>
							trainer update successfully !
							</div>');

              	 redirect('trainers/users');

              }
			}
									
	}
 }

  public function delete_trainee($value='')
 {
 	$id=array('ID'=>$this->uri->segment(3));
 	 $res=$this->My_model->Delete('vg_users',$id);
 	 if ($res==true) {
      		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong>Success!</strong>
					trainer deleted successfully !
					</div>');

      	  redirect('trainers/users');

      }
 }

 public function workout()
 {
 	  $result['data'] =$this->My_model->getAllRecord('vg_workout');
	  $this->form_validation->set_rules('name', 'Name', 'required');
	  $this->form_validation->set_rules('description', 'Description', 'required');
	  $this->form_validation->set_rules('img', 'Image', 'required');
                if ($this->form_validation->run() == FALSE)
                {
  
					$this->load->view('trainers/tainers_header');
					$this->load->view('trainers/workout',$result);
					$this->load->view('trainers/tainers_footer');
                }
                else
                {
                     $data=array('name'=>$this->input->post('name'),
                     	'description'=>$this->input->post('description'));
                     if(!empty($data)){
                     			$this->session->set_flashdata('error_message','<div class="alert alert-custom alert-dismissible my_message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right" style="text-align:right">×</button>Invalid name or Description !</div>');

				        $this->load->view('trainers/tainers_header');
						$this->load->view('trainers/workout',$result);
						$this->load->view('trainers/tainers_footer');
                     }


                }

	 }
	 public function workout_submit()
	{

		if($_POST){
			   $this->form_validation->set_rules('name','workout Name','required');
			   $this->form_validation->set_rules('description','workout description','required');
			   // $this->form_validation->set_rules('img','workout Image','required');
			if ($this->form_validation->run()==TRUE)
			 {
			      if(!empty($_FILES['img']['name'])){
                  $config['upload_path'] = 'img';
                  $config['allowed_types'] = 'jpg|jpeg|png|gif';
                  $config['file_name'] = $_FILES['img']['name'];
                  $this->load->library('upload',$config);
                  $this->upload->initialize($config);
                  if($this->upload->do_upload('img')){
                      $uploadData = $this->upload->data();
                      $Profile_img = $uploadData['file_name'];
                  }
                  else{
                      $Profile_img = '';
                  } 

              }
            else{

                 $Profile_img = $this->input->post('img');
              }

              $data=array(
              	'name' =>$this->input->post('name'),
              	 'description'=>$this->input->post('description'),
                'img'=>$Profile_img
              	);
              // print_r($data);
              // die();
              $res=$this->My_model->Insert('vg_workout',$data);
              if ($res==true)
              {
              		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>Success!</strong>
							workoput add successfully !
							</div>');

              	 redirect('trainers/workout');

              }
			}
				else
		{
              		$this->session->set_flashdata('error_message','<div class="alert alert-warning" id="warning-alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>Warning!</strong>
							Something went Wrong !
							</div>');

              	 redirect('trainers/workout');	
		}
									
	}
	}
	public function edit_workout()
	{
		$workoutId = $this->uri->segment(3);
		$id=array('id'=>$workoutId);
		$result['data']=$this->My_model->getSingleData('vg_workout',$id);
		$this->load->view('trainers/tainers_header');
		$this->load->view('trainers/edit_workout',$result);
		$this->load->view('trainers/tainers_footer');
	}

public function workout_edit_submit()
	{

		if($this->input->post('id')){
			   $this->form_validation->set_rules('name','workout Name','required');
			   $this->form_validation->set_rules('description','workout description','required');
			   // $this->form_validation->set_rules('img','workout Image','required');
			if ($this->form_validation->run()==TRUE)
			 {
			      if(!empty($_FILES['img']['name'])){
                  $config['upload_path'] = 'img';
                  $config['allowed_types'] = 'jpg|jpeg|png|gif';
                  $config['file_name'] = $_FILES['img']['name'];
                  $this->load->library('upload',$config);
                  $this->upload->initialize($config);
                  if($this->upload->do_upload('img')){
                      $uploadData = $this->upload->data();
                      $Profile_img = $uploadData['file_name'];
                  }
                  else{
                      $Profile_img = '';
                  } 

              }
            else{

                 $Profile_img = $this->input->post('img');
              }

              $data=array(
              	'name' =>$this->input->post('name'),
              	 'description'=>$this->input->post('description'),
                'img'=>$Profile_img
              	);
              // print_r($data);
              // die();
              $id =array('id'=>$this->input->post('id'));
              $res=$this->My_model->Update('vg_workout',$data,$id);
              if ($res==true)
              {
              		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>Success!</strong>
							workoput add successfully !
							</div>');

              	 redirect('trainers/workout');

              }
			}
		else
		{
              		$this->session->set_flashdata('error_message','<div class="alert alert-warning" id="warning-alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>Warning!</strong>
							Something went Wrong !
							</div>');

              	 redirect('trainers/workout');	
		}
									
	}
	
	}

 public function delete_workout()
 {
 	$id=array('id'=>$this->uri->segment(3));
 	 $res=$this->My_model->Delete('vg_workout',$id);
 	 if ($res==true) {
      		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong>Success!</strong>
					workout deleted successfully !
					</div>');

      	 redirect('trainers/workout');

      }
 }

	public function report()
	{
		$this->load->view('trainers/tainers_header');
		$this->load->view('trainers/report');
		$this->load->view('trainers/tainers_footer');
	}

	public function custom_workout()
	{
		 $type=array('UserType'=>2);
		 $data['trainee']=$this->My_model->getMultipleData('vg_users',$type);
		 $data['workout']=$this->My_model->getAllRecord('vg_workout');
			$this->load->view('trainers/tainers_header');
			$this->load->view('trainers/custom_workout',$data);
			$this->load->view('trainers/tainers_footer');
	}

	public function submit_workoutPlan()
 {
    $this->form_validation->set_rules('traineeID','trainee Name','required');
    $this->form_validation->set_rules('day','workout day','required');
    $this->form_validation->set_rules('workoutID','workout Name','required');
	  if ($this->form_validation->run()==TRUE)
		 {
		 	  $data=array('traineeID'=>$this->input->post('traineeID'),
		 	 'day'=>$this->input->post('day'),
		 	 'workoutID'=>implode( "_" ,$this->input->post('workoutID')),
		 	 'how_many'=>implode( "_" ,$this->input->post('how_many')));  
        $res=$this->My_model->Insert('vg_workout_plan',$data);
        if ($res==true)
        {
        		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>Success!</strong>
				workout plan add successfully !
				</div>');

        	 redirect('trainers/custom_workout');

        }
		 }
		 else
		 {
		 	$this->session->set_flashdata('error_message','<div class="alert alert-danger" id="danger-alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>Warning!</strong>
						    Something went wrong ..!
							</div>');
		 }
 }

// functions for workout module 

 function workout_plan()
 {
 	echo "test";
 }

}

?>