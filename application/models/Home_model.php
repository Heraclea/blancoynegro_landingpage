<?php
Class Home_model extends CI_Model {

	function get_banner() {
		$this->db->select('*');
		$this->db->from('banner');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_services() {
		$this->db->select('*');
		$this->db->from('servicios');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_portfolio() {
		$this->db->select('*');
		$this->db->from('portafolio');
		$this->db->order_by('record_order');
		$query = $this->db->get();
		return $query->result();
	}

	function get_experience() {
		$this->db->select('*');
		$this->db->from('experiencia');
		$query = $this->db->get();
		return $query->row();
	}

	function get_about() {
		$this->db->select('*');
		$this->db->from('nosotros');
		$query = $this->db->get();
		return $query->result();
	}

	function get_footer() {
		$this->db->select('*');
		$this->db->from('footer');
		$query = $this->db->get();
		return $query->row();
	}

	function get_seo() {
		$this->db->select('*');
		$this->db->from('configuration');
		$this->db->where('id', 1);
		$query = $this->db->get();
		return $query->row();
	}
}