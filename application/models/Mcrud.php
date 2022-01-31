<?php

class Mcrud extends CI_Model{

	public function get_all_data($table){
		$q = $this->db->get($table);
		return $q;
	}

	public function cek($table){
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get()->num_rows();
	}

	public function insert($table,$data){
		$this->db->insert($table,$data);
	}

	public function get_by_id($table,$id){
		return $this->db->get_where($table,$id);
	}

	public function update($table,$data,$pk,$id){
		$this->db->where($pk,$id);
		$this->db->update($table,$data);
	}

	public function deletekat($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function jointiga($t1,$t2,$t3,$id1,$id2){
		$this->db->select('*');
		$this->db->from($t1);
		$this->db->join($t2,$id1);
		$this->db->join($t3,$id2);
		return $this->db->get();
	}

	public function jointiga_where($t1,$t2,$t3,$id1,$id2,$w){
		$this->db->select('*');
		$this->db->from($t1);
		$this->db->join($t2,$id1);
		$this->db->join($t3,$id2);
		$this->db->where($w);
		return $this->db->get();
	}

	public function join4_where($t1,$t2,$t3,$t4,$id1,$id2,$id3,$w){
		$this->db->select('*');
		$this->db->from($t1);
		$this->db->join($t2,$id1);
		$this->db->join($t3,$id2);
		$this->db->join($t4,$id3);
		$this->db->where($w);
		return $this->db->get();
	}

	public function join($table1, $table2,$id){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join($table2,$id);
		return $this->db->get();
	}

	public function level($table,$where){
		$this->db->get_where($table,$where);
	}

	public function join_where($t1,$t2,$t3,$id1,$id2,$w1,$w2){
		$this->db->select('*');
		$this->db->from($t1);
		$this->db->join($t2,$id1);
		$this->db->join($t3,$id2);
		$this->db->where($w1);
		$this->db->where($w2);
		return $this->db->get();
	}

	public function get_joinwhere($t1,$t2,$id,$w){
		$this->db->select('*');
		$this->db->from($t1);
		$this->db->join($t2,$id);
		$this->db->where($w);
		return $this->db->get();
	}

	public function ads($t,$t2,$key,$id){
		$this->db->select($key);
		$this->db->from($t);
		$this->db->join($t2,$id);
		return $this->db->get();
	}

	public function cari($t,$id){
		$this->db->from($t);
		$this->db->like($id);
		return $this->db->get();
	}
}