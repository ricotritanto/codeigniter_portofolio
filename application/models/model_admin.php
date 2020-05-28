<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Model_admin extends CI_Model
{
	
	public function save_portfolio($data)
	{
		$this->db->insert('tbl_portfolio',$data);
		return TRUE;

	}

	function get_portfolio()
	{
		$this->db->from('tbl_portfolio');
  		$query = $this->db->get();
        return $query->result();
	}

	function get_portfolioid($id)
	{
		$cari=$this->db->query("select * from tbl_portfolio where id_portfolio='".$id."'");
		return $cari->result();
	}

	function get_network()
	{
		$cari=$this->db->query("select * from tbl_portfolio where `place` = 'network'");
		return $cari;
	}

	function update_portfolio($id,$data)
	{
		$this->db->where('id_portfolio',$id);
		$this->db->update('tbl_portfolio',$data);
	}

	function delete_portfolio($id)
	{
		$this->db->where('id_portfolio',$id);
		$this->db->delete('tbl_portfolio');
	}

	function data_portfolio($number,$offset)
	{
		return $query = $this->db->get('tbl_portfolio',$number,$offset)->result();		
	}
	function jumlah_portfolio()
	{
		return $this->db->get('tbl_portfolio')->num_rows();
	}
	//========================================================//

	function save_myjob($data)
	{
		$this->db->insert('tbl_myjob',$data);
		return TRUE;
	}

	function get_myjob()
	{
		$this->db->from('tbl_myjob');
  		$query = $this->db->get();
        return $query->result();
	}

	function get_myjobid($id)
	{
		$cari=$this->db->query("select * from tbl_myjob where id_job='".$id."'");
		return $cari;
	}

	function update_myjob($kondisi,$data)
	{
		$this->db->where('id_job',$kondisi);
		$this->db->update('tbl_myjob',$data);
	}

	function delete_myjob($id)
	{
		$this->db->where('id_job',$id);
		$this->db->delete('tbl_myjob');
	}

	function data_myjob($number,$offset)
	{
		return $query = $this->db->get('tbl_myjob',$number,$offset)->result();		
	}

	function jumlah_myjob()
	{
		return $this->db->get('tbl_myjob')->num_rows();
	}
	//========================================================//

	function insert_about($data)
	{
		$this->db->insert('tbl_aboutme',$data);
		return TRUE;
	}

	function get_about()
	{
		$this->db->from('tbl_aboutme');
  		$query = $this->db->get();
        return $query->result();
	}

	function get_aboutid($id)
	{
		$cari=$this->db->query("select * from tbl_aboutme where id_me='".$id."'");
		return $cari;
	}

	function update_about($kondisi, $data)
	{
		$this->db->where('id_me',$kondisi);
		$this->db->update('tbl_aboutme',$data);
	}

	function delete_about($id)
	{
		$this->db->where('id_me',$id);
		$this->db->delete('tbl_aboutme');
	}
	//========================================================//

	public function get_contact()
	{
		$contact=$this->db->query("select * from tbl_contact");
		return $contact->result();
	}

	//========================================================//
	function insert_news($data)
	{
		$this->db->insert('tbl_news',$data);
		return TRUE;
	}

	function get_news()
	{
		$query = $this->db->query('SELECT * FROM tbl_news ORDER BY id_news DESC limit 4');
		return $query->result();
	}

	function get_newsid($a)
	{
		// $cari=$this->db->query("select * from tbl_news where id_news='".$id."'");
		// return $cari->result();
		$query = $this->db->get_where('tbl_news', array('slug' => $a));
		return $query->result();
	}

	function update_news($id, $data)
	{
		$this->db->where('id_news',$id);
		$this->db->update('tbl_news',$data);
	}

	function delete_news($id)
	{
		$this->db->where('id_news',$id);
		$this->db->delete('tbl_news');
	}

	function get_newsone()
	{
		$query = $this->db->query('select * from tbl_news order by id_news desc limit 20');
		//lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			//Mengirimkan data array hasil query
			return $query->result();
			//Function result() hampir sama dengan function mysql_fetch_array()
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}
	}

	function jumlah_news()
	{
		return $this->db->get('tbl_news')->num_rows();
	}

	function data_news($number,$offset)
	{
		return $query = $this->db->get('tbl_news',$number,$offset)->result();		
	}
//============================================//

	function data_study($number,$offset)
	{
		return $query = $this->db->get('tbl_study',$number,$offset)->result();		
	}
	function get_study()
	{
		$query = $this->db->query('SELECT * FROM tbl_study ORDER BY id_study DESC');
		return $query->result();
	}

	function get_studyid($id)
	{
		$cari=$this->db->query("select * from tbl_study where id_study='".$id."'");
		return $cari->result();
	}


	function insert_study($data)
	{
		$this->db->insert('tbl_study',$data);
		return TRUE;
	}

	function update_study($id,$data)
	{
		$this->db->where('id_study',$id);
		$this->db->update('tbl_study',$data);
	}

	function delete_study($id)
	{
		$this->db->where('id_study',$id);
		$this->db->delete('tbl_study');	
	}

	function jumlah_study()
	{
		return $this->db->get('tbl_study')->num_rows();
	}
//========================================//
	function get_category()
	{
		$query = $this->db->query('SELECT * FROM tbl_category ORDER BY id_category ASC');
		return $query->result();
	}

	function get_categoryid($id)
	{
		$cari=$this->db->query("select * from tbl_category where id_category='".$id."'");
		return $cari->result();
	}


	function insert_category($data)
	{
		$this->db->insert('tbl_category',$data);
		return TRUE;
	}

	function update_category($id,$data)
	{
		$this->db->where('id_category',$id);
		$this->db->update('tbl_category',$data);
	}

	function delete_category($id)
	{
		$this->db->where('id_category',$id);
		$this->db->delete('tbl_category');	
	}
//========================================//

	function data_comment($number,$offset)
	{
		$q = $this->db->query("select * from tbl_news, tbl_comment WHERE tbl_news.id_news=tbl_comment.id_news LIMIT  $offset,$number");
		return $q->result();
	}

	function jumlah_comment()
	{
		return $this->db->get('tbl_comment')->num_rows();
	}

	function reply_comment($id,$data)
	{
		$this->db->where('id_comment',$id);
		$this->db->update('tbl_comment',$data);
	}

	function delete_comment($id)
	{
		$this->db->where('id_comment',$id);
		$this->db->delete('tbl_comment');	
	}

	//========================================//

	function data_tutorial($number,$offset)
	{
		$q = $this->db->query("select * from tbl_tutorial, tbl_category WHERE tbl_tutorial.id_category=tbl_category.id_category LIMIT  $offset,$number");
		return $q->result();
	}

	function jumlah_tutorial()
	{
		return $this->db->get('tbl_tutorial')->num_rows();
	}

	function insert_tutorial($data)
	{
		$this->db->insert('tbl_tutorial',$data);
		return TRUE;
	}

	function get_tutorialid($id)
	{
		// $cari=$this->db->query("select * from tbl_news where id_news='".$id."'");
		// return $cari->result();
		// $query = $this->db->get_where('tbl_tutorial', array('slug' => $a));
		// return $query->result();
		$query = $this->db->query("select * from tbl_tutorial, tbl_category WHERE tbl_tutorial.id_category=tbl_category.id_category AND tbl_tutorial.id_tutor ='".$id."'");
		return $query->result();
	}

	function update_tutorial($id, $data)
	{
		$this->db->where('id_tutor',$id);
		$this->db->update('tbl_tutorial',$data);
	}

	function delete_tutorial($id)
	{
		$this->db->where('id_tutor',$id);
		$this->db->delete('tbl_tutorial');
	}

}