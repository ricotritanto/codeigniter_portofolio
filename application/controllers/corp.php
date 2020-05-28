<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corp extends CI_Controller {

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->helper(array('form', 'url','string','text'));
		$this->load->model('model_corp');
		$this->load->library('session');
		$this->load->model('model_admin');	
	}
	public function index()
	{
		$data['news'] = $this->model_admin->get_news();
		$this->load->view('template/head', $data);
		$this->load->view('index', $data);
		$this->load->view('template/foot', $data);
	}

	public function about()
	{
		$data['about'] = $this->model_admin->get_about();
		$data['study'] = $this->model_admin->get_study();
		$this->load->view('template/head', $data);
		$this->load->view('aboutme', $data);
		$this->load->view('template/foot', $data);
	}	

	function services()
	{
		$data['myjob'] = $this->model_admin->get_myjob();
		$data['portfolio'] = $this->model_admin->get_portfolio();
		$this->load->view('template/head', $data);
		$this->load->view('services', $data);
		$this->load->view('template/foot', $data);
	}

	// public function myjob()
	// {
	// 	$data['myjob'] = $this->model_admin->get_myjob();
	// 	$this->load->view('template/header', $data);
	// 	$this->load->view('myjob', $data);
	// 	$this->load->view('template/footer', $data);
	// }

	// public function portfolio()
	// {
	// 	$data['portfolio'] = $this->model_admin->get_portfolio();
	// 	$this->load->view('template/header',$data);
	// 	$this->load->view('portfolio',$data);
	// 	$this->load->view('template/footer',$data);
	// }

	public function work()
	{
		$data['myjob'] = $this->model_corp->get_myjob();
		$this->load->view('template/head',$data);
		$this->load->view('work',$data);
		$this->load->view('template/foot',$data);
	}

	public function contact()
	{
		$this->load->view('template/head');
		$this->load->view('contact');
		$this->load->view('template/foot');
	}

	public function save_contact()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('email', 'email', 'required');
         $this->form_validation->set_rules('object', 'object', 'required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('message', 'message', 'required');

         if ($this->form_validation->run() == FALSE) 
         {
//            jika validasi gagal
         	$this->session->set_flashdata('pesan', 'Message failed...!!!');
			redirect('corp/contact');
	     } else 
	        {
	//            jika validasi berhasil
	            $data = array('username' => $this->input->post('name'),
							  'useremail' => $this->input->post('email'),
							  'object' => $this->input->post('object'),
							  'message' => $this->input->post('message'), );

					$this->model_corp->save_contact($data);
		
					$this->session->set_flashdata('pesan', 'Your message successfully..');
					redirect('corp/contact');
	        }


		// $data = array('username' => $this->input->post('name'),
		// 				  'useremail' => $this->input->post('email'),
		// 				  'object' => $this->input->post('object'),
		// 				  'message' => $this->input->post('message'), );

		// 		$this->model_corp->save_contact($data);
		// 		if ($data>1) {
		// 			# code...
		// 		}
		// 		$this->session->set_flashdata('something', 'Message successfully sent');
				redirect('corp/contact');
	}

	function v_news($a)
	{
		$data['news'] = $this->model_admin->get_newsid($a);
		$data['listnews'] = $this->model_admin->get_news();
		$date = $data['news'][0]->date;
		$data['tgl'] = date('D', strtotime($date));
		$data['day'] = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);
		$this->load->view('template/head',$data);
		$this->load->view('v_news',$data);
		$this->load->view('template/foot',$data);
	}
	

	function blog_sport()
	{
		$data['news'] = $this->model_corp->get_news();
		$data['blog'] = $this->model_corp->get_blog_sport();
		$data['traveling'] = $this->model_corp->get_blog_traveling();
		$data['it'] = $this->model_corp->get_blog_it();
		$data['other'] = $this->model_corp->get_blog_other();
		$this->load->view('template/head',$data);
		$this->load->view('blog_sport',$data);
		$this->load->view('template/foot',$data);
	}

	function blog_traveling()
	{
		$data['news'] = $this->model_corp->get_news();
		$data['blog'] = $this->model_corp->get_blog_traveling();
		$data['sport'] = $this->model_corp->get_blog_sport();
		$data['it'] = $this->model_corp->get_blog_it();
		$data['other'] = $this->model_corp->get_blog_other();

		$this->load->view('template/head',$data);
		$this->load->view('blog_traveling',$data);
		$this->load->view('template/foot',$data);
	}

	function blog_it()
	{
		$data['news'] = $this->model_corp->get_news();
		$data['blog'] = $this->model_corp->get_blog_it();
		$data['traveling'] = $this->model_corp->get_blog_traveling();
		$data['sport'] = $this->model_corp->get_blog_sport();
		$data['other'] = $this->model_corp->get_blog_other();
		$this->load->view('template/head',$data);
		$this->load->view('blog_it',$data);
		$this->load->view('template/foot',$data);
	}

	function blog_other()
	{
		$data['news'] = $this->model_corp->get_news();
		$data['blog'] = $this->model_corp->get_blog_other();
		$data['traveling'] = $this->model_corp->get_blog_traveling();
		$data['sport'] = $this->model_corp->get_blog_sport();
		$data['it'] = $this->model_corp->get_blog_it();
		$this->load->view('template/head',$data);
		$this->load->view('blog_other',$data);
		$this->load->view('template/foot',$data);
	}

	function news_detail($a)
	{
		$data['news'] = $this->model_corp->get_detail_news($a);
		$data['comment'] = $this->model_corp->get_news_comment($a);
		$date = $data['news'][0]->date;
		$data['tgl'] = date('D', strtotime($date));
		$data['day'] = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);
		$this->load->view('template/head',$data);
		$this->load->view('news_detail',$data);
		$this->load->view('template/foot',$data);
	}

	function comment()
	{
		$date= date('D, M-Y');
		$data = array('id_news' => $this->input->post('idnews'),
						'id_tutor' => $this->input->post('idtutor'),
						'name' => $this->input->post('nama'),
						  'email' => $this->input->post('email'),
						  'comment' => $this->input->post('pesan'),
						  'date'=>$date );
				$this->model_corp->insert_comment($data);
				echo "<script>alert('Your message successfully..!!');history.go(-2);</script>";
		
	}

	function pemrograman()
	{
		$data['tutorial'] = $this->model_corp->get_tutorial();
		$data['pemrograman'] = $this->model_corp->get_pemrograman();
		$data['network'] = $this->model_corp->get_network();
		$this->load->view('template/head',$data);
		$this->load->view('template/head',$data);
		$this->load->view('pemrograman',$data);
		$this->load->view('template/foot',$data);
	}

	function network()
	{
		$data['tutorial'] = $this->model_corp->get_tutorial();
		$data['pemrograman'] = $this->model_corp->get_pemrograman();
		$data['network'] = $this->model_corp->get_network();
		$this->load->view('template/head',$data);
		$this->load->view('template/head',$data);
		$this->load->view('network',$data);
		$this->load->view('template/foot',$data);
	}

	function tutorial_detail($a)
	{
		$data['tutorial'] = $this->model_corp->get_detail_tutorial($a);
		$data['comment'] = $this->model_corp->get_tutorial_comment($a);
		$date = $data['tutorial'][0]->date;
		$data['tgl'] = date('D', strtotime($date));
		$data['day'] = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);
		$this->load->view('template/head',$data);
		$this->load->view('tutorial_detail',$data);
		$this->load->view('template/foot',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */