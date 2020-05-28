<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	 
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->helper(array('form', 'url','string','text'));
		$this->load->model('model_admin');	

	}
	public function index()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/index');
		$this->load->view('template/admin/footer');
	}

	public function about()
	{
		$data['about'] = $this->model_admin->get_about();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/v_about',$data);
		$this->load->view('template/admin/footer', $data);
	}

	function add_aboutme()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/about');
		$this->load->view('template/admin/footer');
	}	

	function edit_about($id)
	{
		$data['about'] = $this->model_admin->get_aboutid($id);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/update_about',$data);
		$this->load->view('template/admin/footer', $data);
	}

	function update_about()
	{
			
			$config['upload_path']   = './uploads/'; 
         	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	       /* $config['max_size']      = 2048; 
	        $config['max_width']     = 1288; 
	        $config['max_height']    = 768; */ 
	        $filename=$_FILES['filefoto']['name'];
         	$this->load->library('upload', $config);
            if(!empty($filename))
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	                $file = $this->upload->data();
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'desc' =>$this->input->post('desc'),
	                  'file_name' =>$file['file_name'],
	                  'type_file' =>$file['file_type']
	                   
	                );

	                $kondisi=$this->input->post('id');
	                $this->model_admin->update_about($kondisi,$data); //akses model untuk menyimpan ke database

	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './uploads/resize/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 1200; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 800; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 

	                if ( !$this->image_lib->resize())
	                 {
                		$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              		 }

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-success' id='alert'>Upload gambar berhasil !!</div></div>");
	                redirect('akses/index/about'); //jika berhasil maka akan ditampilkan view vupload
	            }else
	            {
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-danger' id='alert'>Gagal upload gambar !!</div></div>");
	                redirect('akses/index/add_aboutme'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	        elseif(empty($filename))
	        {
	        	    $kondisi=$this->input->post('id');
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'desc' =>$this->input->post('desc')
	                   
	                );
	               
	                $this->model_admin->update_about($kondisi,$data); //akses model untuk menyimpan ke database

	                redirect('akses/index/about'); //jika berhasil maka akan ditampilkan view vupload
	            
	        }
	}

	function save_aboutme()
	{
			$config['upload_path']   = './uploads/'; 
         	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	       /* $config['max_size']      = 2048; 
	        $config['max_width']     = 1288; 
	        $config['max_height']    = 768; */ 
         	$this->load->library('upload', $config);
            if($_FILES['filefoto']['name'])
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	                $file = $this->upload->data();
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'desc' =>$this->input->post('desc'),
	                  'file_name' =>$file['file_name'],
	                  'type_file' =>$file['file_type']
	                  
	                   
	                );
	                $this->model_admin->insert_about($data); //akses model untuk menyimpan ke database

	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './uploads/resize/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 1200; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 800; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 

	                if ( !$this->image_lib->resize())
	                 {
                		$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              		 }

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-success' id='alert'>Upload gambar berhasil !!</div></div>");
	                redirect('akses/index/about'); //jika berhasil maka akan ditampilkan view vupload
	            }else
	            {
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-danger' id='alert'>Gagal upload gambar !!</div></div>");
	                redirect('akses/index/add_aboutme'); //jika gagal maka akan ditampilkan form upload
	            }
	        }

	}

	function delete_about($id)
	{
		$this->model_admin->delete_about($id);
		redirect('akses/index/about');
	}
	//==================================================================//
	public function myjob()
	{
		$jumlah_data = $this->model_admin->jumlah_myjob();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/akses/index/myjob/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

		$config['full_tag_open'] = '<div id="pagination">';
  		$config['full_tag_close'] = '</div>';

  		$config['first_link'] = '&laquo; First';

  		$config['last_link'] = 'Last &raquo;';

  		$config['next_link'] = 'Next &rarr;';
 
        $config['prev_link'] = '&larr; Prev';
        
		$config['uri_segment'] = 4;
		$from = ($this->uri->segment(4))?$this->uri->segment(4):0;
		$this->pagination->initialize($config);		
		$data['myjob'] = $this->model_admin->data_myjob($config['per_page'],$from);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/myjob', $data);
		$this->load->view('template/admin/footer', $data);
	}

	function add_job()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/add_myjob');
		$this->load->view('template/admin/footer');
	}

	function insert_myjob()
	{
			$config['upload_path']   = './uploads/'; 
         	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	       /* $config['max_size']      = 2048; 
	        $config['max_width']     = 1288; 
	        $config['max_height']    = 768; */ 
	        $this->load->library('upload', $config);
	        $filename=$_FILES['filefoto']['name'];        
         	
            if(!empty($filename))
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	                $file = $this->upload->data();
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'client' =>$this->input->post('client'),
	                  'file_name' =>$file['file_name'],
	                  'type_file' =>$file['file_type'],
	                  'descone' =>$this->input->post('descone'),
	                  'desctwo' =>$this->input->post('desctwo')
	                   
	                );
	                $this->model_admin->save_myjob($data); //akses model untuk menyimpan ke database

	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './uploads/resize/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 400; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 250; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 

	                if ( !$this->image_lib->resize())
	                 {
                		$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              		 }

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-success' id='alert'>Upload gambar berhasil !!</div></div>");
	                redirect('akses/index/myjob'); //jika berhasil maka akan ditampilkan view vupload
	            }else
	            {
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-danger' id='alert'>Gagal upload gambar !!</div></div>");
	                redirect('akses/index/add_myjob'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	        elseif(empty($filename))
	        {
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'client' =>$this->input->post('client'),
	                  'descone' =>$this->input->post('descone'),
	                  'desctwo' =>$this->input->post('desctwo')
	                   
	                );
	               
	                $this->model_admin->save_myjob($data); //akses model untuk menyimpan ke database

	                redirect('akses/index/myjob'); //jika berhasil maka akan ditampilkan view vupload
	            
	        }
	}

	function edit_myjob($id)
	{
		$data['myjob'] = $this->model_admin->get_myjobid($id);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/update_myjob',$data);
		$this->load->view('template/admin/footer', $data);
	}

	function update_myjob()
	{
		$config['upload_path']   = './uploads/'; 
         	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	       /* $config['max_size']      = 2048; 
	        $config['max_width']     = 1288; 
	        $config['max_height']    = 768; */ 
	        $this->load->library('upload', $config);
	        $filename=$_FILES['filefoto']['name'];        
         	
            if(!empty($filename))
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	                $file = $this->upload->data();
	                $kondisi=$this->input->post('id');
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'client' =>$this->input->post('client'),
	                  'file_name' =>$file['file_name'],
	                  'type_file' =>$file['file_type'],
	                  'descone' =>$this->input->post('descone'),
	                  'desctwo' =>$this->input->post('desctwo')
	                   
	                );
	                $this->model_admin->update_myjob($kondisi,$data); //akses model untuk menyimpan ke database

	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './uploads/resize/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 400; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 250; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 

	                if ( !$this->image_lib->resize())
	                 {
                		$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              		 }

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-success' id='alert'>Upload gambar berhasil !!</div></div>");
	                redirect('akses/index/myjob'); //jika berhasil maka akan ditampilkan view vupload
	            }else
	            {
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-danger' id='alert'>Gagal upload gambar !!</div></div>");
	                redirect('akses/index/add_myjob'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	        elseif(empty($filename))
	        {
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'client' =>$this->input->post('client'),
	                  'descone' =>$this->input->post('descone'),
	                  'desctwo' =>$this->input->post('desctwo')
	                   
	                );
	               	$kondisi=$this->input->post('id');
	                $this->model_admin->update_myjob($kondisi,$data); //akses model untuk menyimpan ke database

	                redirect('akses/index/myjob'); //jika berhasil maka akan ditampilkan view vupload
	            
	        }
	}

	function delete_myjob($id)
	{
		$this->model_admin->delete_myjob($id);
		redirect('akses/index/myjob');
	}

	//==================================================================//

	public function portfolio()
	{
		$jumlah_data = $this->model_admin->jumlah_portfolio();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/akses/index/portfolio/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

		$config['full_tag_open'] = '<div id="pagination">';
  		$config['full_tag_close'] = '</div>';

  		$config['first_link'] = '&laquo; First';

  		$config['last_link'] = 'Last &raquo;';

  		$config['next_link'] = 'Next &rarr;';
 
        $config['prev_link'] = '&larr; Prev';
        
		$config['uri_segment'] = 4;
		$from = ($this->uri->segment(4))?$this->uri->segment(4):0;
		$this->pagination->initialize($config);		
		$data['portfolio'] = $this->model_admin->data_portfolio($config['per_page'],$from);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/portfolio',$data);
		$this->load->view('template/admin/footer',$data);
	}

	function add_portfolio()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/add_portfolio');
		$this->load->view('template/admin/footer');
	}

	function insert_portfolio()
	{
	   $data = array(
	                'title' =>$this->input->post('title'),
	                  'category' =>$this->input->post('place'),
	                  'description_picture' =>$this->input->post('desc_picture'),
	                  'description_portofolio' =>$this->input->post('desc') 
	                );
	                $this->model_admin->save_portfolio($data); //akses model untuk menyimpan ke database
					redirect('akses/index/portfolio'); //jika gagal maka akan ditampilkan form upload	            
	}

	function edit_portfolio($id)
	{
		$data['portfolio'] = $this->model_admin->get_portfolioid($id);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/update_portfolio',$data);
		$this->load->view('template/admin/footer', $data);
	}

	function update_portfolio()
	{
			
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'category' =>$this->input->post('place'),
	                  'description_picture' =>$this->input->post('desc_picture'),
	                  'description_portofolio' =>$this->input->post('desc')
	                   
	                );

	                $id=$this->input->post('id');
	                $this->model_admin->update_portfolio($id,$data); //akses model untuk menyimpan ke database
					redirect('akses/index/portfolio'); //jika gagal maka akan ditampilkan form upload	            
	}

	function delete_portfolio($id)
	{
		$this->model_admin->delete_portfolio($id);
		redirect('akses/index/portfolio');
	}
	//==================================================================//

	public function contact()
	{
		$this->load->view('template/header');
		$this->load->view('contact');
		$this->load->view('template/footer');
	}

	//==================================================================//
	function news()
	{
		$jumlah_data = $this->model_admin->jumlah_news();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/akses/index/news/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

		$config['full_tag_open'] = '<div id="pagination">';
  		$config['full_tag_close'] = '</div>';

  		$config['first_link'] = '&laquo; First';

  		$config['last_link'] = 'Last &raquo;';

  		$config['next_link'] = 'Next &rarr;';
 
        $config['prev_link'] = '&larr; Prev';
        
		$config['uri_segment'] = 4;
		$from = ($this->uri->segment(4))?$this->uri->segment(4):0;
		$this->pagination->initialize($config);		
		$data['news'] = $this->model_admin->data_news($config['per_page'],$from);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/news',$data);
		$this->load->view('template/admin/footer',$data);
	}

	function add_news()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/add_news');
		$this->load->view('template/admin/footer');
	}

	function save_news()
	{
		$config['upload_path']   = './uploads/'; 
         	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	       /* $config['max_size']      = 2048; 
	        $config['max_width']     = 1288; 
	        $config['max_height']    = 768; */ 
         	$this->load->library('upload', $config);
            if($_FILES['filefoto']['name'])
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	                $file = $this->upload->data();
	                $slug = url_title($this->input->post('title'), 'dash', TRUE);
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'slug'		=> $slug,
	                  'category' =>$this->input->post('category'),
	                  'file_name' =>$file['file_name'],
	                  'type_file' =>$file['file_type'],
	                  'desc' =>$this->input->post('desc'),
	                  'date' =>$this->input->post('date'),
	                  'source' =>$this->input->post('source')
	                   
	                );
	                $this->model_admin->insert_news($data); //akses model untuk menyimpan ke database

	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './uploads/resize/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 400; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 250; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 

	                if ( !$this->image_lib->resize())
	                 {
                		$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              		 }

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-success' id='alert'>Upload gambar berhasil !!</div></div>");
	                redirect('akses/index/news'); //jika berhasil maka akan ditampilkan view vupload
	            }else
	            {
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-danger' id='alert'>Gagal upload gambar !!</div></div>");
	                redirect('akses/index/add_news'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	    }

	function edit_news($id)
	{
		$data['news'] = $this->model_admin->get_newsid($id);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/update_news',$data);
		$this->load->view('template/admin/footer', $data);
	}

	function update_news()
	{
		$config['upload_path']   = './uploads/'; 
         	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	       /* $config['max_size']      = 2048; 
	        $config['max_width']     = 1288; 
	        $config['max_height']    = 768; */ 
	        $filename=$_FILES['filefoto']['name'];
         	$this->load->library('upload', $config);
            if(!empty($filename))
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	                $file = $this->upload->data();
	                $slug = url_title($this->input->post('title'), 'dash', TRUE);
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'slug' =>$slug,
	                  'category' =>$this->input->post('category'),
	                  'file_name' =>$file['file_name'],
	                  'type_file' =>$file['file_type'],
	                  'desc' =>$this->input->post('desc'),
	                  'date' =>$this->input->post('date'),
	                  'source' =>$this->input->post('source')
	                );

	                $id=$this->input->post('id');
	                $this->model_admin->update_news($id,$data); //akses model untuk menyimpan ke database

	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './uploads/resize/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 400; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 250; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 

	                if ( !$this->image_lib->resize())
	                 {
                		$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              		 }

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-success' id='alert'>Upload gambar berhasil !!</div></div>");
	                redirect('akses/index/news'); //jika berhasil maka akan ditampilkan view vupload
	            }else
	            {
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-danger' id='alert'>Gagal upload gambar !!</div></div>");
	                redirect('akses/index/update_news'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	        elseif(empty($filename))
	        {
	        	    
	                 $id=$this->input->post('id');
	                 $slug = url_title($this->input->post('title'), 'dash', TRUE);
	                 $data = array(
	                  'title' =>$this->input->post('title'),
	                  'slug' =>$slug,
	                  'category' =>$this->input->post('category'),
	                  'desc' =>$this->input->post('desc'),
	                  'date' =>$this->input->post('date'),
	                  'source' =>$this->input->post('source'),
	                   
	                );
	                $this->model_admin->update_news($id,$data); //akses model untuk menyimpan ke database

	                redirect('akses/index/news'); //jika berhasil maka akan ditampilkan view vupload
	            
	        }
	}

	function delete_news($id)
	{
		$this->model_admin->delete_news($id);
		redirect('akses/index/news');
	}

	function study()
	{
		$jumlah_data = $this->model_admin->jumlah_study();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/akses/index/study/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

		$config['full_tag_open'] = '<div id="pagination">';
  		$config['full_tag_close'] = '</div>';

  		$config['first_link'] = '&laquo; First';

  		$config['last_link'] = 'Last &raquo;';

  		$config['next_link'] = 'Next &rarr;';
 
        $config['prev_link'] = '&larr; Prev';
        
		$config['uri_segment'] = 4;
		$from = ($this->uri->segment(4))?$this->uri->segment(4):0;
		$this->pagination->initialize($config);		
		$data['study'] = $this->model_admin->data_study($config['per_page'],$from);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/study',$data);
		$this->load->view('template/admin/footer',$data);
	}

	function add_study()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/add_study');
		$this->load->view('template/admin/footer');

	}

	function save_study()
	{
		$data = array(
	                'name' =>$this->input->post('title'),
	                  'desc' =>$this->input->post('desc')
	                );
	                $this->model_admin->insert_study($data); //akses model untuk menyimpan ke database
					redirect('akses/index/study'); //jika gagal maka akan ditampilkan form upload	
	}
	function edit_study($id)
	{
		$data['study'] = $this->model_admin->get_studyid($id);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/update_study',$data);
		$this->load->view('template/admin/footer', $data);
	}

	function update_study()
	{
		$data = array(
	                'name' =>$this->input->post('title'),
	                  'desc' =>$this->input->post('desc')
	                );
		$id=$this->input->post('id');
	    $this->model_admin->update_study($id,$data); //akses model untuk menyimpan ke database
	    redirect('akses/index/study'); 
	}

	function delete_study($id)
	{
		$this->model_admin->delete_study($id);
		redirect('akses/index/study');
	}

	function category()
	{
		$data['category'] = $this->model_admin->get_category();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/category',$data);
		$this->load->view('template/admin/footer',$data);
	}

	function add_category()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/add_category');
		$this->load->view('template/admin/footer');

	}

	function save_category()
	{
		$data = array(
	                'name_category' =>$this->input->post('title')
	                );
	                $this->model_admin->insert_category($data); //akses model untuk menyimpan ke database
					redirect('akses/index/category'); //jika gagal maka akan ditampilkan form upload	
	}
	function edit_category($id)
	{
		$data['category'] = $this->model_admin->get_categoryid($id);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/update_category',$data);
		$this->load->view('template/admin/footer', $data);
	}

	function update_category()
	{$data = array(
	                'name_category' =>$this->input->post('title')
	                );
		$id=$this->input->post('id');
	    $this->model_admin->update_category($id,$data); //akses model untuk menyimpan ke database
	    redirect('akses/index/category'); 
	}

	function delete_category($id)
	{
		$this->model_admin->delete_category($id);
		redirect('akses/index/category');
	}




	function comment()
	{
		$jumlah_data = $this->model_admin->jumlah_comment();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/akses/index/comment/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

		$config['full_tag_open'] = '<div id="pagination">';
  		$config['full_tag_close'] = '</div>';

  		$config['first_link'] = '&laquo; First';

  		$config['last_link'] = 'Last &raquo;';

  		$config['next_link'] = 'Next &rarr;';
 
        $config['prev_link'] = '&larr; Prev';
        
		$config['uri_segment'] = 4;
		$from = ($this->uri->segment(4))?$this->uri->segment(4):0;
		$this->pagination->initialize($config);		
		$data['comment'] = $this->model_admin->data_comment($config['per_page'],$from);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/comment',$data);
		$this->load->view('template/admin/footer',$data);
	}

	function delete_comment($id)
	{
		$this->model_admin->delete_comment($id);
		redirect('akses/index/comment');
	}

	function tutorial()
	{
		$jumlah_data = $this->model_admin->jumlah_tutorial();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/akses/index/tutorial/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

		$config['full_tag_open'] = '<div id="pagination">';
  		$config['full_tag_close'] = '</div>';

  		$config['first_link'] = '&laquo; First';

  		$config['last_link'] = 'Last &raquo;';

  		$config['next_link'] = 'Next &rarr;';
 
        $config['prev_link'] = '&larr; Prev';
        
		$config['uri_segment'] = 4;
		$from = ($this->uri->segment(4))?$this->uri->segment(4):0;
		$this->pagination->initialize($config);		
		$data['tutorial'] = $this->model_admin->data_tutorial($config['per_page'],$from);
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/tutorial',$data);
		$this->load->view('template/admin/footer', $data);
		
	}

	function add_tutorial()
	{
		$data['category']= $this->model_admin->get_category();
		$this->load->view('template/admin/header',$data);
		$this->load->view('admin/add_tutorial',$data);
		$this->load->view('template/admin/footer',$data);
	}

	function save_tutorial()
	{
		$config['upload_path']   = './uploads/'; 
         	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	       /* $config['max_size']      = 2048; 
	        $config['max_width']     = 1288; 
	        $config['max_height']    = 768; */ 
         	$this->load->library('upload', $config);
            if($_FILES['filefoto']['name'])
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	                $file = $this->upload->data();
	                $slug = url_title($this->input->post('title'), 'dash', TRUE);
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'slug'		=> $slug,
	                  'id_category' =>$this->input->post('category'),
	                  'file_name' =>$file['file_name'],
	                  'type_file' =>$file['file_type'],
	                  'desc' =>$this->input->post('desc'),
	                  'date' =>$this->input->post('date'),
	                  'source' =>$this->input->post('source')
	                   
	                );
	                $this->model_admin->insert_tutorial($data); //akses model untuk menyimpan ke database

	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './uploads/resize/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 400; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 250; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 

	                if ( !$this->image_lib->resize())
	                 {
                		$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              		 }

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-success' id='alert'>Upload gambar berhasil !!</div></div>");
	                redirect('akses/index/tutorial'); //jika berhasil maka akan ditampilkan view vupload
	            }else
	            {
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-danger' id='alert'>Gagal upload gambar !!</div></div>");
	                redirect('akses/index/add_tutorial'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	}

	function edit_tutorial($id)
	{
		$data['tutorial'] = $this->model_admin->get_tutorialid($id);
		$data['category'] = $this->model_admin->get_category();
		$this->load->view('template/admin/header', $data);
		$this->load->view('admin/update_tutorial', $data);
		$this->load->view('template/admin/footer', $data);
	}

	function update_tutorial()
	{
		$config['upload_path']   = './uploads/'; 
         	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	       /* $config['max_size']      = 2048; 
	        $config['max_width']     = 1288; 
	        $config['max_height']    = 768; */ 
	        $filename=$_FILES['filefoto']['name'];
         	$this->load->library('upload', $config);
            if(!empty($filename))
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	                $file = $this->upload->data();
	                $slug = url_title($this->input->post('title'), 'dash', TRUE);
	                $data = array(
	                  'title' =>$this->input->post('title'),
	                  'slug'		=> $slug,
	                  'id_category' =>$this->input->post('category'),
	                  'file_name' =>$file['file_name'],
	                  'type_file' =>$file['file_type'],
	                  'desc' =>$this->input->post('desc'),
	                  'date' =>$this->input->post('date'),
	                  'source' =>$this->input->post('source')
	                );

	                $id=$this->input->post('id');
	                $this->model_admin->update_tutorial($id,$data); //akses model untuk menyimpan ke database

	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './uploads/resize/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 400; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 250; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 

	                if ( !$this->image_lib->resize())
	                 {
                		$this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
              		 }

	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-success' id='alert'>Upload gambar berhasil !!</div></div>");
	                redirect('akses/index/tutorial'); //jika berhasil maka akan ditampilkan view vupload
	            }else
	            {
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class='col-md-12'><div class='alert alert-danger' id='alert'>Gagal upload gambar !!</div></div>");
	                redirect('akses/index/update_tutorial'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	        elseif(empty($filename))
	        {
	        	    
	                 $id=$this->input->post('id');
	                 $slug = url_title($this->input->post('title'), 'dash', TRUE);
	                 $data = array(
	                 'title' =>$this->input->post('title'),
	                  'slug'		=> $slug,
	                  'id_category' =>$this->input->post('category'),
	                  'desc' =>$this->input->post('desc'),
	                  'date' =>$this->input->post('date'),
	                  'source' =>$this->input->post('source')
	                   
	                );
	                $this->model_admin->update_tutorial($id,$data); //akses model untuk menyimpan ke database

	                redirect('akses/index/tutorial'); //jika berhasil maka akan ditampilkan view vupload
	            
	        }
	}

	function delete_tutorial($id)
	{
		$this->model_admin->delete_tutorial($id);
		redirect('akses/index/tutorial');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */