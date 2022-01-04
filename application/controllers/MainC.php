<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('pages/index');
	}

	public function about()       //About page
	{
		$this->load->view('pages/about');
	}

	public function pro_pack()       //Process & Product page
	{
		$this->load->view('pages/pro&pack');
	}

	public function my404()
	{
		$this->output->set_status_header('404');
		$this->load->view('pages/404');
	}

	public function products()       //Products page
	{
		$this->load->model('Users_model');
		$dehydrate = $this->Users_model->return_products('DehydratedPro');
		$SprayDriedPro = $this->Users_model->return_products('SprayDriedPro');
		$Spices = $this->Users_model->return_products('Spices');
		$this->load->view('pages/products', compact('dehydrate', 'SprayDriedPro', 'Spices'));
	}

	public function product_view()       //product_view page
	{
		$this->load->model('Users_model');
		$id = $this->input->get('id');
		$result = $this->Users_model->getProducts($id);
		if (count($result)==0) 
        {
           return redirect('/ProductNotFound');
        }
        else {
        	return $this->load->view('pages/product_view', compact('result'));
        }
	}

	public function contact()       //Contact page
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone_no', 'Phone No.', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
		$this->form_validation->set_rules('massage', 'Massage', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('pages/contact');
		} else {
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['email'] = $this->input->post('email');
			$formArray['phone_no'] = $this->input->post('phone_no');
			$formArray['massage'] = $this->input->post('massage');
			$formArray['submited_at'] = date('Y-m-d');
			$this->Users_model->insert_contact_data($formArray);
			$this->session->set_flashdata('resp_msg', 'Contact form Successfully Submitted.!!');
			redirect(base_url('contact'));
		}
	}

	//changed

	public function forgetpass()       //Forget Password page
	{
		$this->load->view('pages/forgetpass');
	}
}
