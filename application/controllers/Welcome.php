<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function generateSlug($name, $date)
	{
		$name_slug = strtolower(trim($name));
		$name_slug = preg_replace('/[^a-z0-9-]/', '-', $name_slug);
		$name_slug = preg_replace('/-+/', '-', $name_slug);

		$date_slug = date('dmYHis', strtotime($date));

		$combined_slug = $name_slug . "-" . $date_slug;

		return $combined_slug;
	}

	public function login()
	{

		$this->load->view('login');
	}

	public function login_user()
	{
		$this->form_validation->set_rules('email', ' Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', ' Password', 'trim|required|min_length[3]');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'errors' => validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect('login');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$arr = array(
				'email' => $email,
				'password' => $password
			);
			$result = $this->User_model->get_data_by_id_multiple("users", $arr);
			if ($result == 0) {
				$data = array(
					'errors' => 'Email and Password are Invalid'
				);
				$this->session->set_flashdata($data);
				redirect('login');
			} else {
				if ($result) {

					$user_data = array(
						'id' => $result[0]->id,
						'email' => $result[0]->email,
						'logged_in' => true,
						'username' => $result[0]->username,
						// 'brinton_cards_type' => $result[0]->type,
						// 'brinton_division_id' => $result[0]->division_id
					);
					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('login', 'success');
					redirect('dashboard');
				} else {
					$data = array(
						'errors' => 'Email and Password are Invalid'
					);
					$this->session->set_flashdata($data);
					redirect('login');
				}
			}
		}
	}

	public function logout()
	{

		$user_data = array(
			'id' => "",
			'name' => "",
			'logged_in' => false,
			'username' => "",
		);
		$this->session->set_userdata($user_data);
		redirect('login');
	}

	public function user_signup()
	{
		$data = array(
			'deleted_time' => NULL
		);

		$data['user'] = $this->User_model->read_data_where('users', $data);
		$this->load->view('header');
		$this->load->view("user_signup", $data);
		$this->load->view("footer");
	}

	public function signup()
	{
		$this->form_validation->set_rules('email', "Email", 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', "Password", 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_pass', "Confirm Password", 'trim|required|min_length[3]|matches[password]');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'errors' => validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect('user_signup');
		} else {
			$name = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');


			$insert_array = array(
				"username" => $name,
				"email" => $email,
				"password" => $password,
				"created_by" => $this->id,
				"created_date" => $this->current_date,
				"created_time" => $this->current_time
			);
			$this->User_model->insert_data("users", $insert_array);
			redirect('user_signup');
		}
	}


	public function user_delete()
	{
		$id = $this->uri->segment(2);
		//echo "$id";

		$insert_array = array(
			"deleted_by" => $this->id,
			"deleted_at" => $this->current_date,
			"deleted_time" => $this->current_time,
		);
		$this->User_model->update_user($insert_array, $id);
		redirect('user_signup');
	}

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Kolkata');

		$this->id = $this->session->userdata('id');
		$this->current_date = date('d-m-Y');
		$this->current_time = date('h:i:s');


		$d = date_parse_from_format("d-m-Y", $this->current_date);
		$this->date = $d["day"];
		$this->month = $d["month"];
		$this->year = $d["year"];
	}

	public function dashboard()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	public function orders()
	{
		$this->load->view('header');
		$this->load->view('orders');
		$this->load->view('footer');
	}
	public function order_details()
	{
		$this->load->view('header');
		$this->load->view('order_details');
		$this->load->view('footer');
	}

	// Candidates controller

	public function candidates()
	{

		$data['candidates'] = $this->User_model->get_data('candidate');
		$this->load->view('header');
		$this->load->view('candidates', $data);
		$this->load->view('footer');
	}

	public function candidate_details()
	{
		$data['candidate_id'] = $this->uri->segment('2');
		$data['candidate_data'] = $this->User_model->get_data_by_id("candidates", $data['candidate_id'], "id");

		$data['expected_locations'] = $this->User_model->get_data_by_id("expected_locations", $data['candidate_id'], "candidate_id");

		// $product_id = $this->uri->segment(2);
		// $data['res'] = $this->User_model->get_product_by_id($product_id);
		$this->load->view('header');
		$this->load->view('candidate_details', $data);
		$this->load->view('footer');
	}



	public function candidate_edit()
	{
		$product_id = $this->uri->segment(2);
		$data['re'] = $this->User_model->get_product_by_id($product_id);
		$this->load->view('header');
		$this->load->view('candidate_edit', $data);
		$this->load->view('footer');
	}

	public function update_candidate()
	{

		$id = $this->input->post('id');
		$name = $this->input->post('candidate_name');
		$candidate_email = $this->input->post('candidate_email');
		$candidate_mobile = $this->input->post('candidate_mobile');
		$candidate_company = $this->input->post('candidate_company');
		$current_ctc = $this->input->post('current_ctc');
		$expected_ctc = $this->input->post('expected_ctc');
		$skills = $this->input->post('skills');
		$experience = $this->input->post('experience');
		$current_loc = $this->input->post('current_loc');
		$loc_1 = $this->input->post('loc_1');
		$loc_2 = $this->input->post('loc_2');
		$loc_3 = $this->input->post('loc_3');
		$offer = $this->input->post('offer');
		$notice_period = $this->input->post('notice_period');
		$last_working_day = $this->input->post('last_working_day');
		$notice_negotiable = $this->input->post('notice_negotiable');


		if (!empty($_FILES['uploading_document']['name'])) {
			$image_path = "./uploads/";
			$config['allowed_types'] = 'gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe';
			$config['upload_path'] = $image_path;
			$config['file_name'] = $_FILES['uploading_document']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('uploading_document')) {
				$uploadData = $this->upload->data();
				$picture4 = $uploadData['file_name'];
			} else {
				$picture4 = '';
				echo "no 1";
			}
		} else {
			$picture4 = '';
			echo "no 2";
		}

		$insert_array = array(
			"name" => $name,
			"email" => $candidate_email,
			"mobile" => $candidate_mobile,
			"company" => $candidate_company,
			"current_ctc" => $current_ctc,
			"expected_ctc" => $expected_ctc,
			"skills" => $skills,
			"experience" => $experience,
			"current_loc" => $current_loc,
			"loc_2" => $loc_2,
			"loc_3" => $loc_3,
			"offer" => $offer,
			"notice_period" => $notice_period,
			"last_working_day" => $last_working_day,
			"notice_negotiable" => $notice_negotiable,
			"resume" => $picture4,
			"created_by" => $this->id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time
		);


		$candidate_id = $this->User_model->update_candidate($insert_array, $id);
		if ($candidate_id) {

			$delete_city = array("candidate_id" => $id);
			$this->User_model->delete_city($delete_city);
		}
		foreach ($loc_1 as $l) {
			$my_array = array("candidate_id" => $id, "city_id" => $l);
			$this->User_model->insert_candidate("expected_locations", $my_array);
		}

		redirect("candidates");

		// $data['re'] = $this->User_model->get_full_product_by_table_name('candidates');
		// $this->load->view('header');
		// $this->load->view('candidates', $data);
		// $this->load->view('footer');
	}

	public function add_candidate()
	{
		$this->load->view('header');
		$this->load->view('add_candidate');
		$this->load->view('footer');
	}

	public function add_candidates()
	{

		$name = $this->input->post('candidate_name');
		$candidate_email = $this->input->post('candidate_email');
		$candidate_mobile = $this->input->post('candidate_mobile');
		$candidate_company = $this->input->post('candidate_company');
		$current_ctc = $this->input->post('current_ctc');
		$expected_ctc = $this->input->post('expected_ctc');
		$skills = $this->input->post('skills');
		$experience = $this->input->post('experience');
		$current_loc = $this->input->post('current_loc');
		$loc_1 = $this->input->post('loc_1');
		$loc_2 = $this->input->post('loc_2');
		$loc_3 = $this->input->post('loc_3');
		$offer = $this->input->post('offer');
		$notice_period = $this->input->post('notice_period');
		$last_working_day = $this->input->post('last_working_day');
		$notice_negotiable = $this->input->post('notice_negotiable');
		// print_r($loc_1);


		if (!empty($_FILES['uploading_document']['name'])) {
			$image_path = "./uploads/";
			$config['allowed_types'] = 'gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe';
			$config['upload_path'] = $image_path;
			$config['file_name'] = $_FILES['uploading_document']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('uploading_document')) {
				$uploadData = $this->upload->data();
				$picture4 = $uploadData['file_name'];
			} else {
				$picture4 = '';
				echo "no 1";
			}
		} else {
			$picture4 = '';
			echo "no 2";
		}

		$insert_array = array(
			"name" => $name,
			"email" => $candidate_email,
			"mobile" => $candidate_mobile,
			"company" => $candidate_company,
			"current_ctc" => $current_ctc,
			"expected_ctc" => $expected_ctc,
			"skills" => $skills,
			"experience" => $experience,
			"current_loc" => $current_loc,
			"loc_2" => $loc_2,
			"loc_3" => $loc_3,
			"offer" => $offer,
			"notice_period" => $notice_period,
			"last_working_day" => $last_working_day,
			"notice_negotiable" => $notice_negotiable,
			"resume" => $picture4,
			"created_by" => $this->id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time
		);

		$candidate_id = $this->User_model->insert_candidate("candidates", $insert_array);
		if ($candidate_id) {
			foreach ($loc_1 as $l) {
				$my_array = array(
					"candidate_id" => $candidate_id,
					"city_id" => $l
				);
				$y = $this->User_model->insert_candidate("expected_locations", $my_array);
			}
		}

		redirect('candidates');
	}


	public function candidate_delete()
	{
		$id = $this->uri->segment(2);
		//echo "$id";

		$insert_array = array(
			"deleted_by" => $this->id,
			"deleted_at" => $this->current_date,
			"deleted_time" => $this->current_time,
		);
		$this->User_model->update_candidate($insert_array, $id);
		redirect('candidates');
	}

	public function allot_job_delete()
	{
		$candidate_id = $this->uri->segment(3);
		$id = $this->uri->segment(2);
		$insert_array = array(
			"deleted_by" => $this->id,
			"deleted_at" => $this->current_date,
			"deleted_time" => $this->current_time,
		);
		$this->User_model->update_allot_candidate($insert_array, $candidate_id, $id);
		redirect('allot_job/' . $candidate_id);
	}

	public function allot_candidate_delete()
	{
		echo "hi";
		$candidate_id = $this->uri->segment(3);
		echo $candidate_id;
		$id = $this->uri->segment(2);
		echo $id;
		$insert_array = array(
			"deleted_by" => $this->id,
			"deleted_at" => $this->current_date,
			"deleted_time" => $this->current_time,
		);
		$this->User_model->update_allot_candidate($insert_array, $candidate_id, $id);
		redirect('allot_candidate/' . $id);
	}

	public function product_delete()
	{

		$product_id = $this->uri->segment(2);


		$this->User_model->delete_row($product_id);
		redirect('candidates');
	}

	public function allot_job()
	{

		$data['candidate_id'] = $this->uri->segment('2');
		$data['candidate_data'] = $this->User_model->get_data_by_id("candidates", $data['candidate_id'], "id");

		$data['candidate_job'] = $this->User_model->get_data_by_id('candidate_jobs', $data['candidate_id'], "candidate_id");

		$this->load->view('header');
		$this->load->view('allot_job', $data);
		$this->load->view('footer');
	}


	// Cities controller
	public function cities()
	{
		$data = array(
			'deleted_time' => NULL
		);

		$data['results'] = $this->User_model->read_data_where('cities', $data);

		$this->load->view('header');
		$this->load->view('cities', $data);
		$this->load->view('footer');
	}

	public function add_city()
	{

		$name = $this->input->post('city');

		$insert_array = array(
			"city" => $name,
			"created_by" => $this->id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time,
		);
		$this->User_model->insert_city("cities", $insert_array);
		redirect('cities');
	}

	public function city_delete()
	{
		$id = $this->uri->segment(2);
		//echo "$id";

		$insert_array = array(
			"deleted_by" => $this->id,
			"deleted_at" => $this->current_date,
			"deleted_time" => $this->current_time,
		);
		$this->User_model->update_city($insert_array, $id);
		redirect('cities');
	}

	public function add_candidate_job()
	{

		$candidate_id = $this->input->post('candidate_id');
		$job_id = $this->input->post('job_id');

		$insert_array = array(
			"candidate_id" => $candidate_id,
			"job_id" => $job_id,
			"created_by" => $this->id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time

		);

		$check = $this->User_model->read_data_where('candidate_jobs', $insert_array);
		if ($check != 0) {

			$data = array(
				'errors' => 'This Filed Already Exists , Please try to add  with Filed Name',
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->User_model->insert_data("candidate_jobs", $insert_array);
			$data = array(
				'success' => $candidate_id . ' Added  !',
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		}
		// if($result)
		// {
		// 	echo "datbase aded";
		// }
		// else
		// {
		// 	echo "error";
		// }
		redirect('allot_job/' . $candidate_id);
	}

	// Jobs controlles

	public function jobs()
	{

		$data['job'] = $this->User_model->get_data('jobs');
		$data['company'] = $this->User_model->get_data('company');
		$this->load->view('header');
		$this->load->view('jobs', $data);
		$this->load->view('footer');
	}

	public function add_job()
	{
		$this->load->view('header');
		$this->load->view('add_job');
		$this->load->view('footer');
	}

	public function add_jobs()
	{

		$name = $this->input->post('title');
		$description = $this->input->post('description');
		$skills = $this->input->post('skills');
		$min_exp = $this->input->post('min_exp');
		$max_exp = $this->input->post('max_exp');
		$min_salary = $this->input->post('min_salary');
		$max_salary = $this->input->post('max_salary');
		$notice_period = $this->input->post('notice_period');
		$location = $this->input->post('location');
		$company_id = $this->input->post('company_id');

		$insert_array = array(
			"title" => $name,
			"description" => $description,
			"skills" => $skills,
			"min_exp" => $min_exp,
			"max_exp" => $max_exp,
			"min_salary" => $min_salary,
			"max_salary" => $max_salary,
			"notice_period" => $notice_period,
			"company_id" => $company_id,
			"created_by" => $this->id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time
		);

		$job_id = $this->User_model->insert_job("jobs", $insert_array);
		if ($job_id) {
			foreach ($location as $l) {
				$my_array = array(
					"job_id" => $job_id,
					"city_id" => $l
				);
				$this->User_model->insert_candidate("job_locations", $my_array);
			}
		}
		redirect('jobs');
	}

	public function allot_candidate()
	{
		$data['job_id'] = $this->uri->segment('2');
		$data['jobs_data'] = $this->User_model->get_data_by_id("jobs", $data['job_id'], "id");

		$data['candidate_job'] = $this->User_model->get_data_by_id('candidate_jobs', $data['job_id'], "job_id");
		$this->load->view('header');
		$this->load->view('allot_candidate', $data);
		$this->load->view('footer');
	}

	public function allot_candidate_to_job()
	{

		$candidate_id = $this->input->post('candidate_id');
		$job_id = $this->input->post('job_id');

		$insert_array = array(
			"candidate_id" => $candidate_id,
			"job_id" => $job_id,
			"created_by" => $this->id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time
		);
		$check = $this->User_model->read_data_where('candidate_jobs', $insert_array);
		if ($check != 0) {

			$data = array(
				'errors' => 'This Filed Already Exists , Please try to add  with Filed Name',
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->User_model->insert_data("candidate_jobs", $insert_array);
			$data = array(
				'success' => $job_id . ' Added  !',
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		}


		// if($result)
		// {
		// 	echo "datbase aded";
		// }
		// else
		// {
		// 	echo "error";
		// }
		redirect('allot_candidate/' . $job_id);
	}

	public function job_details()
	{
		$product_id = $this->uri->segment(2);
		$data['resu'] = $this->User_model->get_job_by_id($product_id);
		$this->load->view('header');
		$this->load->view('job_details', $data);
		$this->load->view('footer');
	}

	public function job_edit()
	{
		$product_id = $this->uri->segment(2);
		$data['resu'] = $this->User_model->get_job_by_id($product_id);

		$this->load->view('header');
		$this->load->view('job_edit', $data);
		$this->load->view('footer');
	}



	public function job_delete()
	{
		$id = $this->uri->segment(2);
		//echo "$id";

		$insert_array = array(
			"deleted_by" => $this->id,
			"deleted_at" => $this->current_date,
			"deleted_time" => $this->current_time,
		);
		$this->User_model->update_job($insert_array, $id);
		redirect('jobs');
	}



	// Companies controlles

	public function companies()
	{

		$data['results'] = $this->User_model->get_data('company');
		$this->load->view('header');
		$this->load->view('companies', $data);
		$this->load->view('footer');
	}

	public function add_company()
	{

		$name = $this->input->post('company_name');
		$address = $this->input->post('company_address');
		$pan = $this->input->post('pan');
		$gst = $this->input->post('gst');
		$contract_start = $this->input->post('contract_start');
		$contract_end = $this->input->post('contract_end');
		$commission_rate = $this->input->post('commission_rate');

		$insert_array = array(
			"name" => $name,
			"contract_start" => $contract_start,
			"contract_end" => $contract_end,
			"commission_rate" => $commission_rate,
			"created_by" => $this->id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time
		);
		$this->User_model->insert_city("company", $insert_array);
		redirect('companies');
	}

	public function company_edit()
	{
		$product_id = $this->uri->segment(2);
		$data['result'] = $this->User_model->get_company_by_id($product_id);

		$this->load->view('header');
		$this->load->view('company_edit', $data);
		$this->load->view('footer');
	}

	// public function update_company()
	// {
	// 	$company_id = $this->uri->segment(2);

	// 	$id = $this->input->post('id');
	// 	$company_name = $this->input->post('company_name');
	// 	$address = $this->input->post('company_address');
	// 	$pan = $this->input->post('pan');
	// 	$gst = $this->input->post('gst');
	// 	$contract_start = $this->input->post('contract_start');
	// 	$contract_end = $this->input->post('contract_end');
	// 	$commission_rate = $this->input->post('commission_rate');

	// 	$this->User_model->update_data([
	// 		"company_name" => $company_name,
	// 		"address" => $address,
	// 		"pan" => $pan,
	// 		"gst" => $gst,
	// 		"contract_start" => $contract_start,
	// 		"contract_end" => $contract_end,
	// 		"commission_rate" => $commission_rate,
	// 		"created_by" => $this->id,
	// 		"created_date" => $this->current_date,
	// 		"created_time" => $this->current_time
	// 	], $company_id);

	// 	// $data['result'] = $this->User_model->get_full_product_by_table_name('company');

	// 	redirect('companies');
	// }




	public function company_delete()
	{
		$id = $this->uri->segment(2);
		//echo "$id";

		$insert_array = array(
			"deleted_by" => $this->id,
			"deleted_at" => $this->current_date,
			"deleted_time" => $this->current_time,
		);
		$this->User_model->update_company($insert_array, $id);
		redirect('companies');
	}

	// Website Functions
	public function home()
	{
		// $this->load->view('header');
		$this->load->view('home');
		// $this->load->view('footer');
	}
	public function website_job_details()
	{
		$this->load->view('job-details');
	}
	public function job_list()
	{
		$data['jobs'] = $this->User_model->get_jobs_descending_order('jobs');
		$data['company'] = $this->User_model->get_data('company');
		$this->load->view('job-list', $data);
	}
	public function job_post()
	{
		$this->load->view('job-post');
	}
	public function job_description()
	{
		$description_id = $this->uri->segment(2);
		$data['job_description'] = $this->User_model->get_job_by_slug($description_id);
		$this->load->view('job-description', $data);
	}
	public function job_description_blank()
	{

		$this->load->view('job-description');
	}
	public function company_description()
	{
		$company_description_id = $this->uri->segment('2');
		$data['company_description'] = $this->User_model->get_data_by_id("company", $company_description_id, "id");
		$this->load->view('company-description', $data);
	}
	public function applied_job_candidates()
	{
		$applied_job_id = $this->uri->segment('2');
		$data['applied_job_details'] = $this->User_model->get_data_by_id("job_candidate", $applied_job_id, "job_id");
		$data['job_details'] = $this->User_model->get_data_by_id("jobs", $applied_job_id, "id");

		$this->load->view('header');
		$this->load->view('applied-job-candidates', $data);
		$this->load->view('footer');

	}
	public function applied_jobs()
	{
		$this->load->view('applied-jobs');
	}
	public function candidate_profile()
	{
		$this->load->view('candidate-profile');
	}
	public function candidate_dashboard()
	{
		$this->load->view('candidate-dashboard');
	}
	public function company_post()
	{
		$this->load->view('company_post');
	}

	public function create_jobs()
	{

		$name = $this->input->post('title');
		$description = $this->input->post('description');
		$skills = $this->input->post('skills');
		$min_experience = $this->input->post('min_experience');
		$max_experience = $this->input->post('max_experience');
		$min_salary = $this->input->post('min_salary');
		$max_salary = $this->input->post('max_salary');
		$notice_period = $this->input->post('notice_period');
		$location = $this->input->post('location');
		$no_of_openings = $this->input->post('no_of_openings');
		$qualifiation = $this->input->post('qualification');
		$gender = $this->input->post('gender');
		$role = $this->input->post('role');
		$category = $this->input->post('category');
		$job_type = $this->input->post('job_type');
		$deadline = $this->input->post('deadline');
		$short_desc = $this->input->post('short_desc');
		$work_mode = $this->input->post('work_mode');
		$company_id = $this->input->post('company_id');
		$created_date = date('Y-m-d H:i:s');
		$slug = $this->generateSlug($name, $created_date);
		$skillString = implode(', ', $skills);

		$insert_array = array(
			"title" => $name,
			"description" => $description,
			"skills" => $skillString,
			"location" => $location,
			"no_of_openings" => $no_of_openings,
			"qualification" => $qualifiation,
			"gender" => $gender,
			"role" => $role,
			"category" => $category,
			"job_type" => $job_type,
			"deadline" => $deadline,
			"short_desc" => $short_desc,
			"work_mode" => $work_mode,
			"min_experience" => $min_experience,
			"max_experience" => $max_experience,
			"min_salary" => $min_salary,
			"max_salary" => $max_salary,
			"notice_period" => $notice_period,
			"company_id" => $company_id,
			"slug" => $slug,
			"created_date" => $created_date,
		);

		$job_id = $this->User_model->insert_job("jobs", $insert_array);

		redirect('jobs');
	}
	public function update_job()
	{

		$id = $this->input->post('id');
		$name = $this->input->post('title');
		$description = $this->input->post('description');
		$skills = $this->input->post('skills');
		$min_experience = $this->input->post('min_experience');
		$max_experience = $this->input->post('max_experience');
		$min_salary = $this->input->post('min_salary');
		$max_salary = $this->input->post('max_salary');
		$notice_period = $this->input->post('notice_period');
		$location = $this->input->post('location');
		$no_of_openings = $this->input->post('no_of_openings');
		$qualifiation = $this->input->post('qualification');
		$gender = $this->input->post('gender');
		$role = $this->input->post('role');
		$category = $this->input->post('category');
		$job_type = $this->input->post('job_type');
		$deadline = $this->input->post('deadline');
		$short_desc = $this->input->post('short_desc');
		$work_mode = $this->input->post('work_mode');
		$company_id = $this->input->post('company_id');
		$skillString = implode(', ', $skills);
		$created_date = date('Y-m-d H:i:s');
		$slug = $this->generateSlug($name, $created_date);


		$insert_array = array(
			"title" => $name,
			"description" => $description,
			"skills" => $skillString,
			"min_experience" => $min_experience,
			"max_experience" => $max_experience,
			"min_salary" => $min_salary,
			"max_salary" => $max_salary,
			"notice_period" => $notice_period,
			"location" => $location,
			"no_of_openings" => $no_of_openings,
			"qualification" => $qualifiation,
			"gender" => $gender,
			"role" => $role,
			"category" => $category,
			"job_type" => $job_type,
			"deadline" => $deadline,
			"short_desc" => $short_desc,
			"work_mode" => $work_mode,
			"company_id" => $company_id,
			"slug" => $slug,
			"created_date" => $created_date,

		);

		$candidate_id = $this->User_model->update_job($insert_array, $id);


		// $data['re'] = $this->User_model->get_full_product_by_table_name('jobs');
		redirect('jobs');
	}

	public function create_company()
	{

		$company_name = $this->input->post('company_name');
		$description = $this->input->post('description');
		$website = $this->input->post('website');
		$linkedin = $this->input->post('linkedin');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$twitter = $this->input->post('twitter');
		$glassdoor = $this->input->post('glassdoor');
		// $logo = $this->input->post('logo');
		$location = $this->input->post('location');
		$establishedin = $this->input->post('establishedin');
		$employee_size = $this->input->post('employee_size');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$primary_contact_person_designation = $this->input->post('primary_contact_person_designation');
		$primary_contact_person_name = $this->input->post('primary_contact_person_name');
		$primary_contact_person_number = $this->input->post('primary_contact_person_number');
		$primary_contact_person_email = $this->input->post('primary_contact_person_email');

		if (!empty($_FILES['logo']['name'])) {
			$image_path = "./uploads/";
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = 2048;
			$config['upload_path'] = $image_path;
			$config['file_name'] = uniqid() . $_FILES['logo']['name'];

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('logo')) {
				$uploadData = $this->upload->data();
				$logo = $uploadData['file_name'];
			} else {
				$logo = '';
				echo "Upload failed!";
			}
		} else {
			$logo = '';
			echo "No file selected!";
		}


		$insert_array = array(
			"company_name" => $company_name,
			"description" => $description,
			"website" => $website,
			"linkedin" => $linkedin,
			"facebook" => $facebook,
			"instagram" => $instagram,
			"twitter" => $twitter,
			"glassdoor" => $glassdoor,
			"logo" => $logo,
			"location" => $location,
			"establishedin" => $establishedin,
			"employee_size" => $employee_size,
			"email" => $email,
			"phone" => $phone,
			"primary_contact_person_designation" => $primary_contact_person_designation,
			"primary_contact_person_name" => $primary_contact_person_name,
			"primary_contact_person_number" => $primary_contact_person_number,
			"primary_contact_person_email" => $primary_contact_person_email,
			"created_by" => $this->id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time

		);

		$job_id = $this->User_model->insert_job("company", $insert_array);

		redirect('companies');
	}
	public function update_company()
	{
		$company_id = $this->uri->segment(2);
		if (!empty($_FILES['logo']['name'])) {
			$image_path = "./uploads/";
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = 2048;
			$config['upload_path'] = $image_path;
			$config['file_name'] = uniqid() . $_FILES['logo']['name'];

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('logo')) {
				$uploadData = $this->upload->data();
				$logo = $uploadData['file_name'];
			} else {
				$logo = '';
				echo "Upload failed!";
			}
		} else {
			$logo = $this->input->post('logo_existing'); // Assuming you have a hidden field with the current logo name
		}


		$data = array(
			"company_name" => $this->input->post('company_name'),
			"description" => $this->input->post('description'),
			"website" => $this->input->post('website'),
			"linkedin" => $this->input->post('linkedin'),
			"facebook" => $this->input->post('facebook'),
			"instagram" => $this->input->post('instagram'),
			"twitter" => $this->input->post('twitter'),
			"glassdoor" => $this->input->post('glassdoor'),
			"logo" => $logo,
			"location" => $this->input->post('location'),
			"establishedin" => $this->input->post('establishedin'),
			"employee_size" => $this->input->post('employee_size'),
			"email" => $this->input->post('email'),
			"phone" => $this->input->post('phone'),
			"primary_contact_person_designation" => $this->input->post('primary_contact_person_designation'),
			"primary_contact_person_name" => $this->input->post('primary_contact_person_name'),
			"primary_contact_person_number" => $this->input->post('primary_contact_person_number'),
			"primary_contact_person_email" => $this->input->post('primary_contact_person_email'),
			// "created_by" => $this->id,
			// "created_date" => $this->current_date,
			// "created_time" => $this->current_time
		);

		$this->User_model->update_data('company', $data, $company_id);

		redirect('companies');
	}
	public function update_companies()
	{
		// Check if the form is submitted
		if ($this->input->post()) {
			// Form submitted, perform update

			$id = $this->input->post('id');
			$company_name = $this->input->post('company_name');
			$address = $this->input->post('company_address');
			$pan = $this->input->post('pan');
			$gst = $this->input->post('gst');
			$contract_start = $this->input->post('contract_start');
			$contract_end = $this->input->post('contract_end');
			$commission_rate = $this->input->post('commission_rate');

			$this->User_model->update_company([
				"company_name" => $company_name,
				"address" => $address,
				"pan" => $pan,
				"gst" => $gst,
				"contract_start" => $contract_start,
				"contract_end" => $contract_end,
				"commission_rate" => $commission_rate,
				"created_by" => $this->id,
				"created_date" => $this->current_date,
				"created_time" => $this->current_time
			], $id);

			redirect('companies');
		} else {
			// Form not submitted, load edit view

			$product_id = $this->uri->segment(2);
			$data['result'] = $this->User_model->get_company_by_id($product_id);

			$this->load->view('header');
			$this->load->view('companies', $data);
			$this->load->view('footer');
		}
	}

	public function add_job_candidates()
	{
		// $job_id = $this->uri->segment(2);

		$job_id = $this->input->post('job_id');
		$fname = $this->input->post('candidate_fname');
		$lname = $this->input->post('candidate_lname');
		$candidate_email = $this->input->post('candidate_email');
		$candidate_phone = $this->input->post('candidate_phone');



		if (!empty($_FILES['upload_resume']['name'])) {
			$pdf_path = "./uploads/resume";
			$config['allowed_types'] = 'doc|docx|pdf';
			$config['upload_path'] = $pdf_path;
			$config['file_name'] = uniqid() . $_FILES['upload_resume']['name'];

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('upload_resume')) {
				$uploadData = $this->upload->data();
				$resume = $uploadData['file_name'];
			} else {
				$resume = '';
				$this->session->set_flashdata('error_message', 'Upload Failed!');
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			$resume = '';
			$this->session->set_flashdata('error_message', 'No File Selected!');
			redirect($_SERVER['HTTP_REFERER']);
		}

		$insert_array = array(
			"candidate_fname" => $fname,
			"candidate_lname" => $lname,
			"candidate_email" => $candidate_email,
			"candidate_phone" => $candidate_phone,
			"candidate_resume" => $resume,
			"created_datetime" => date('Y-m-d H:i:s'),
		);

		$candidate_id = $this->User_model->insert_candidate("candidate", $insert_array);

		$job_candidate_data = array(
			"candidate_id" => $candidate_id,
			"job_id" => $job_id,
		);
		$this->User_model->insert_candidate("job_candidate", $job_candidate_data);
		$this->session->set_flashdata('success_message', 'Applied to job successfully!');
		redirect($_SERVER['HTTP_REFERER']);
	}


}
