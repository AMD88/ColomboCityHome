<?php
class user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->database();
		$this->load->model('user_model');
	}
	
	function index()
	{
		$this->register();
	}

    function register()
    {
		//set validation rules
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		//$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
	//	$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');
		
		//validate form input
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('user_registration_view');
        }
		else
		{
			//insert the user registration details into database
			$data = array(
				'username' => $this->input->post('fname'),
				//'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				//'password' => $this->input->post('password')
			);
			
			// insert form data into database
			if ($this->user_model->insertUser($data))
			{
				// send email
				if ($this->user_model->sendEmail($this->input->post('email')))
				{
					// successfully sent mail
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
					redirect('user/register');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Error in sending you verification email.  Please try again later!!!</div>');
					redirect('user/register');
				}
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('user/register');
			}
		}
	}
	
	function verify($hash=NULL)
	{
		if ($this->user_model->verifyEmailID($hash))
		{
			$this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
			redirect('user/register');
		}
		else
		{
			$this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
			redirect('user/register');
		}
	}
}