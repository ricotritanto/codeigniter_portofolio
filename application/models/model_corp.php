<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Model_corp extends CI_Model
{
	
	public function save_contact($data)
	{
		$this->db->insert('tbl_contact',$data);

	}

	public function get_contact()
	{
		$contact=$this->db->query("select * from tbl_contact");
		return $contact->result();
	}

	function get_blog_sport()
	{
		$cari=$this->db->query("select * from tbl_news where category='Sport'");
		return $cari->result();
	}

	function get_blog_traveling()
	{
		$cari=$this->db->query("select * from tbl_news where category='Traveling'");
		return $cari->result();
	}

	function get_blog_it()
	{
		$cari=$this->db->query("select * from tbl_news where category='IT'");
		return $cari->result();
	}

	function get_blog_other()
	{
		$cari=$this->db->query("select * from tbl_news where category='other'");
		return $cari->result();
	}

	function get_news()
	{
		$query = $this->db->query('SELECT * FROM tbl_news ORDER BY id_news DESC limit 4');
		return $query->result();
	}
	function data_news($number,$offset)
	{
		return $query = $this->db->get('tbl_news ORDER BY id_news DESC',$number,$offset)->result();		
	}
	function jumlah_news()
	{
		return $this->db->get('tbl_get_news')->num_rows();
	}

	function get_myjob()
	{
		$this->db->from('tbl_myjob');
  		$query = $this->db->get();
        return $query->result();
	}

	function get_detail_news($a)
	{
		// $cari=$this->db->query("select * from tbl_news where id_news='".$id."'");
		// return $cari->result();
		$query = $this->db->get_where('tbl_news', array('slug' => $a));
		return $query->result();
	}

	function get_news_comment($a)
	{
		$query = $this->db->query("select * from tbl_news, tbl_comment WHERE tbl_news.id_news=tbl_comment.id_news AND tbl_news.slug like '%$a%'");
		return $query->result();
	}

	function insert_comment($data)
	{
		$this->db->insert('tbl_comment',$data);
	}

	function get_pemrograman()
	{
		$cari=$this->db->query("select * from tbl_tutorial, tbl_category where tbl_tutorial.id_category=tbl_category.id_category AND name_category='Pemrograman'");
		return $cari->result();

	}

	function get_network()
	{
		$cari=$this->db->query("select * from tbl_tutorial, tbl_category where tbl_tutorial.id_category=tbl_category.id_category AND name_category='Network'");
		return $cari->result();
	}

	function get_tutorial()
	{
		$query = $this->db->query('SELECT * FROM tbl_tutorial ORDER BY id_tutor DESC limit 4');
		return $query->result();
	}

	function get_detail_tutorial($a)
	{
		$query = $this->db->query("select * from tbl_tutorial, tbl_category WHERE tbl_tutorial.id_category=tbl_category.id_category AND tbl_tutorial.slug like '%$a%'");
		return $query->result();
	}

	function get_tutorial_comment($a)
	{
		$query = $this->db->query("select * from tbl_tutorial, tbl_comment WHERE tbl_tutorial.id_tutor=tbl_comment.id_tutor AND tbl_tutorial.slug like '%$a%'");
		return $query->result();
	}
}