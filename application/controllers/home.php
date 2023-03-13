<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	 public function __construct()
    {
		parent::__construct();

		$this->load->helper('url');

		$this->load->model('My_model');

		$this->load->library('session');

		$this->load->model('Api_model');

	}
	public function index()
	{

    $this->load->view('front_end/header');
    $this->load->view('front_end/index');
    $this->load->view('front_end/footer');
	
	}


	public function about()
	{

    $this->load->view('front_end/header');
    $this->load->view('front_end/about');
    $this->load->view('front_end/footer');
	
	}

	public function course()
	{

    $this->load->view('front_end/header');
    $this->load->view('front_end/course');
    $this->load->view('front_end/footer');
	
	}

	public function trainer()
	{

    $this->load->view('front_end/header');
    $this->load->view('front_end/trainer');
    $this->load->view('front_end/footer');
	
	}

	public function pricing()
	{

    $this->load->view('front_end/header');
    $this->load->view('front_end/pricing');
    $this->load->view('front_end/footer');
	
	}

	public function service()
	{

	    $this->load->view('front_end/header');
	    $this->load->view('front_end/service');
	    $this->load->view('front_end/footer');
	
	}

   public function contact()
	{

	    $this->load->view('front_end/header');
	    $this->load->view('front_end/contact');
	    $this->load->view('front_end/footer');
	
	}

	public function blog()
	{

	    $this->load->view('front_end/header');
	    $this->load->view('front_end/blog');
	    $this->load->view('front_end/footer');
	
	}



 }