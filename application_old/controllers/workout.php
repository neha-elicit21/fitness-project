<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class workout extends CI_Controller {

	public function __construct()

    {

		parent::__construct();

		$this->load->helper(array('form', 'url'));

		$this->load->model('My_model');

        $this->load->library(array('session','form_validation'));

		if (!$this->session->userdata('logged_in'))

		{

        redirect('/welcome');

    	}		
	}
	public function index()
	{
       $result['data'] =$this->My_model->getAllRecord('vg_workout');
	  $this->form_validation->set_rules('name', 'Name', 'required');
	  $this->form_validation->set_rules('description', 'Description', 'required');
	  $this->form_validation->set_rules('img', 'Image', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                       	    $this->load->view('admin_header');
						$this->load->view('workout', $result);
					    $this->load->view('admin_footer');
                }
                else
                {
                     $data=array('name'=>$this->input->post('name'),
                     	'description'=>$this->input->post('description'));
                     if(!empty($data)){
                     			$this->session->set_flashdata('error_message','<div class="alert alert-custom alert-dismissible my_message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right" style="text-align:right">×</button>Invalid name or Description !</div>');

        		       $this->load->view('admin_header');
						$this->load->view('workout', $result);
					    $this->load->view('admin_footer');
                     }


                }

	

	}

	public function dashboard()
	{
		 $this->load->view('admin_header');

		 $this->load->view('dashboard');

		 $this->load->view('admin_footer');
	}

	public function workout_add()

	{
		 $this->load->view('admin_header');

		 $this->load->view('workout_add');

		 $this->load->view('admin_footer');

	}

	public function workout_submit()
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

              	 redirect('workout');

              }
			}
									
	}
	}
    /**
	 * @param null
	 * @method workout_plan
	 * @return void 
	*/
	public function workout_plan()
	{
		// trainees
		$data['trainees']=$this->My_model->getWorkOutPlan();
		// days
		$data['days']=['1'=>'Day 1','Day 2', 'Day 3', 'Day 4','Day 5'];
        // echo "<pre>"; print_r($data); die();
		 $this->load->view('admin_header');

		 $this->load->view('workout_plan',$data);

		 $this->load->view('admin_footer');
	}
    /**
	 * @param null
	 * @method workout_plan_create
	 * @return void 
	*/
	public function workout_plan_create()
	{
		// trainees
		$data['trainees']=$this->My_model->get_customer();
		// workouts
		$data['workouts']=$this->My_model->getAllRecord('vg_workout');
		// days
		$data['days']=['1'=>'Day 1','Day 2', 'Day 3', 'Day 4','Day 5'];
         
		 $this->load->view('admin_header');

		 $this->load->view('workout_form',$data);

		 $this->load->view('admin_footer');
	}

	/**
	 * @param null
	 * @method workout_plan_add
	 * @return void 
	*/
    
    public function workout_plan_add(){
      
       $workout_id = $this->input->post('workout_id');
       $repetition = $this->input->post('repetition');
       $data=array(
           'trainee_id' =>$this->input->post('trainee_id'),
      	   'day'=>$this->input->post('day'),
           'workout_id'=> implode(',', $workout_id),
           'repetition'=> implode(',', $repetition),
      	);

       $res=$this->My_model->Insert('vg_workout_plan',$data);
       if ($res==TRUE){
      		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong>Success!</strong>
					Workout plan added successfully !
					</div>');

      	 redirect('workout/workout_plan');

      }

    }

    /**
	 * @param int $workout_plan_id
	 * @method workout_plan_edit
	 * @return void 
	*/
    
    public function workout_plan_edit($workout_plan_id=""){

       // trainees
		$data['trainee_row']=$this->My_model->getRecordById('vg_workout_plan',$workout_plan_id);
		if (empty($data['trainee_row'])) {
       	   redirect('workout/workout_plan');
		}
       //workout_plan_id
        $data['workout_plan_id'] = $workout_plan_id;
        // trainees
		$data['trainees']=$this->My_model->get_customer();
		// workouts
		$data['workouts']=$this->My_model->getAllRecord('vg_workout');
		// days
		$data['days']=['1'=>'Day 1','Day 2', 'Day 3', 'Day 4','Day 5'];
		 $this->load->view('admin_header');

		 $this->load->view('workout_form',$data);

		 $this->load->view('admin_footer');
    }


    /**
	 * @param int $workout_plan_id
	 * @method workout_plan_update
	 * @return void 
	*/
    
    public function workout_plan_update($workout_plan_id=''){


    	 $workout_id = $this->input->post('workout_id');
         $repetition = $this->input->post('repetition');
         $data=array(
           'trainee_id' =>$this->input->post('trainee_id'),
      	   'day'=>$this->input->post('day'),
           'workout_id'=> implode(',', $workout_id),
           'repetition'=> implode(',', $repetition),
      	 );
		 $res=$this->My_model->updateRecordById('vg_workout_plan',$data,$workout_plan_id);
	      if ($res==true)
	      {
	      		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
						<button type="button" class="close" data-dismiss="alert">x</button>
						<strong>Success!</strong>
						Workout plan updated successfully !
						</div>');

	      	 redirect('workout/workout_plan');

	      }
        
    }
    /**
	 * @param int $workout_plan_id
	 * @method workout_plan_delete
	 * @return void 
	*/
    public function workout_plan_delete($workout_plan_id='')
	 {
	 	 $res=$this->My_model->Delete('vg_workout_plan',['id'=>$workout_plan_id]);
	 	 if ($res==true) {
	      		$this->session->set_flashdata('success_message','<div class="alert alert-success" id="success-alert">
						<button type="button" class="close" data-dismiss="alert">x</button>
						<strong>Success!</strong>
						Workout plan deleted successfully !
						</div>');

	      	 redirect('workout/workout_plan');

	      }
	 }


	public function report()
	{
		
		 $this->load->view('admin_header');

		 $this->load->view('report');

		 $this->load->view('admin_footer');
	}

	public function edit_workout()
	{
		$workoutId = $this->uri->segment(3);
		$id=array('id'=>$workoutId);
		$result['data']=$this->My_model->getSingleData('vg_workout',$id);
		$this->load->view('admin_header');
		$this->load->view('edit_workout', $result);
		$this->load->view('admin_footer');
	}

	public function workout_edit_submit()
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
							workout update successfully !
							</div>');

              	 redirect('workout');

              }
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

      	 redirect('workout');

      }
 }

}