<?php 
class Model_app extends CI_model{
    public function view($table){
        return $this->db->get($table);
    }

    public function insert($table,$data){
        return $this->db->insert($table, $data);
    }

    public function edit($table, $data){
        return $this->db->get_where($table, $data);
    }
 
    public function update($table, $data, $where){
        $this->db->where($where); 
        return $this->db->update($table, $data); 
    }

    public function delete($table, $where){
        return $this->db->delete($table, $where);
    }

    public function view_where($table,$data){
        $this->db->where($data);
        return $this->db->get($table);
    }
	
	public function view_sum_where($table,$kolom,$data){
		 $this->db->select_sum($kolom);
        $this->db->where($data);
        return $this->db->get($table);
    }

    public function view_ordering_limit($table,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get($table);
    }
    
    public function view_ordering($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_where_ordering($table,$data,$order,$ordering){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function view_join_one($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_join_where($table1,$table2,$field,$where,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    function umenu_akses($link,$id){
        return $this->db->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'")->num_rows();
    }

    public function cek_login($username,$password,$table){
        return $this->db->query("SELECT * FROM $table where email='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."' AND blokir='N'");
    }
	
	public function cek_loginmail($email){
        return $this->db->query("SELECT * FROM users where email='".$this->db->escape_str($email)."' AND blokir='N'");
    }
	
    public function cek_user($username){
        return $this->db->query("SELECT * FROM users where username='".$this->db->escape_str($username)."' AND blokir='N'");
    }

    public function cek_userverif($username){
        return $this->db->query("SELECT * FROM users where username='".$this->db->escape_str($username)."' AND blokir='Y'");
    }
	
	public function cek_userreg($email){
        return $this->db->query("SELECT * FROM users where email='".$this->db->escape_str($email)."'");
    }
	
	public function cek_lastuser(){
        return $this->db->query("SELECT * FROM users order by username desc limit 1");
    }
	
    function grafik_kunjungan(){
        return $this->db->query("SELECT count(*) as jumlah, tanggal FROM statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10");
    }
	function grafik_registrasi(){
        return $this->db->query("SELECT count(*) as jumlah, startjoin FROM users GROUP BY startjoin ORDER BY startjoin DESC LIMIT 10");
    }
	function grafik_registrasi2($tanggal){
        return $this->db->query("SELECT count(*) as jumlah FROM users where startjoin = '".$tanggal."'");
    }
	function nominal_upgrade($datestart, $dateend){
		return $this->db->query("SELECT SUM(nominal) AS total FROM invoice WHERE STATUS = 'paid' AND tgl_dibayar BETWEEN '". $datestart ."' AND '". $dateend ."'");
	}
	function jumlah_upgrade($datestart, $dateend){
		return $this->db->query("SELECT COUNT(nominal) AS jumlah FROM invoice WHERE STATUS = 'paid' AND tgl_dibayar BETWEEN '". $datestart ."' AND '". $dateend ."'");
	}
}