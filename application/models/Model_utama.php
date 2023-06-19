<?php 
class Model_utama extends CI_model{
    public function view($table){
        return $this->db->get($table);
    }

    public function view_where($table,$data){
        $this->db->where($data);
        return $this->db->get($table);
    }

    public function view_ordering_limit($table,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get($table);
    }

    public function view_where_ordering_limit($table,$data,$order,$ordering,$baris,$dari){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get($table);
    }

    public function view_single($table,$data,$order,$ordering){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        return $this->db->get($table);
    }

    public function view_join($table1,$table2,$field,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }

    public function view_join_one($table1,$table2,$field,$where,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }
	
	public function view_join_detail($kolom,$table1,$table2,$field,$where,$order,$ordering,$baris,$dari){
        $this->db->select($kolom);
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }
	
	public function view_join_detail2($kolom,$table1,$table2,$field,$order,$ordering,$baris,$dari){
        $this->db->select($kolom);
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }
	
	public function view_join_detail3($kolom,$table1,$table2,$table3,$field,$field1,$field2,$order,$ordering,$baris,$dari){
        $this->db->select($kolom);
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->join($table3, $table1.'.'.$field1.'='.$table3.'.'.$field2);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }
	
    public function view_joinn($table1,$table2,$table3,$field,$field1,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->join($table3, $table1.'.'.$field1.'='.$table3.'.'.$field1);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }
	
    public function view_join_two($table1,$table2,$table3,$field,$field1,$where,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->join($table3, $table1.'.'.$field1.'='.$table3.'.'.$field1);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }

    public function view_join_three($table1,$table2,$table3,$field,$field1,$field2,$where,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->join($table3, $table1.'.'.$field1.'='.$table3.'.'.$field2);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get();
    }

    function cari_berita($kata){
        $pisah_kata = explode(" ",$kata);
        $jml_katakan = (integer)count($pisah_kata);
        $jml_kata = $jml_katakan-1;
        $cari = "SELECT * FROM berita a join users b on a.username=b.username
                    join kategori c on a.id_kategori=c.id_kategori
                       WHERE a.status='Y' AND";
            for ($i=0; $i<=$jml_kata; $i++){
              $cari .= " a.judul LIKE '%".$pisah_kata[$i]."%'";
                if ($i < $jml_kata ){
                    $cari .= " OR "; 
                } 
            }
        $cari .= " ORDER BY a.id_berita DESC LIMIT 15";
        return $this->db->query($cari);
    }

    public function insert($table,$data){
        return $this->db->insert($table, $data);
    }

    public function update($table, $data, $where){
        return $this->db->update($table, $data, $where); 
    }

    public function polling_sum(){
        return $this->db->query("SELECT SUM(rating) as jml_vote FROM poling WHERE aktif='Y'"); 
    }

    function kunjungan(){
        $ip      = $_SERVER['REMOTE_ADDR'];
        $tanggal = date("Y-m-d");
        $waktu   = time(); 
        $cekk = $this->db->query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
        $rowh = $cekk->row_array();
        if($cekk->num_rows() == 0){
            $datadb = array('ip'=>$ip, 'tanggal'=>$tanggal, 'hits'=>'1', 'online'=>$waktu);
            $this->db->insert('statistik',$datadb);
        }else{
            $hitss = $rowh['hits'] + 1;
            $datadb = array('ip'=>$ip, 'tanggal'=>$tanggal, 'hits'=>$hitss, 'online'=>$waktu);
            $array = array('ip' => $ip, 'tanggal' => $tanggal);
            $this->db->where($array);
            $this->db->update('statistik',$datadb);
        }
    }
	
	public function view_pesan($penerima){
        return $this->db->query("SELECT pesan.username, pesan.isi_pesan, pesan.dibaca, users.nama_lengkap, users.foto FROM pesan JOIN users ON pesan.username = users.username  WHERE pesan.penerima = '" . $penerima . "' AND pesan.id_pesan IN (SELECT MAX(pesan.id_pesan) FROM pesan  WHERE pesan.penerima = '" . $penerima . "' GROUP BY pesan.username)  ORDER BY pesan.id_pesan DESC");
    }

	public function view_pesanku($penerima){
        return $this->db->query("SELECT pesan.username, pesan.isi_pesan, pesan.dibaca, users.nama_lengkap, users.foto, pesan.jam, pesan.tanggal FROM pesan JOIN users ON pesan.username = users.username  WHERE pesan.penerima = '" . $penerima . "' AND pesan.id_pesan IN (SELECT MAX(pesan.id_pesan) FROM pesan  WHERE pesan.penerima = '" . $penerima . "' GROUP BY pesan.username)  ORDER BY pesan.id_pesan DESC LIMIT 10");
     
    }
	public function view_pesanbaru($penerima){
        return $this->db->query("select pesan.username, users.nama_lengkap, users.foto from pesan JOIN users on pesan.username = users.username where dibaca = 'N' and penerima = '" . $penerima . "' group by username order by pesan.id_pesan desc");
       
    }
	public function view_pesan2($penerima, $pengirim){
        return $this->db->query("select pesan.username, users.nama_lengkap, pesan.isi_pesan, pesan.tanggal, pesan.jam, users.foto from pesan JOIN users on pesan.username = users.username where (penerima = '" . $penerima . "' and pesan.username = '". $pengirim ."') or (penerima = '" . $pengirim . "' and pesan.username = '". $penerima ."') order by id_pesan desc");
       
    }
	
}