<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function index(){
		if ($this->session->username <> ''){
				redirect('main');
		}
		if (isset($_POST['submit'])){
			$email = $this->input->post('a');
			$password = $this->input->post('b');
			$cek = $this->model_app->cek_loginmail($email);
		    $row = $cek->row_array();
			$total = $cek->num_rows();
			
			if ($total > 0){
				$hash = $row['password'];
				if (password_verify($password, $hash)) {
					if($row['level'] == 'admin'){
					$this->session->set_userdata('upload_image_file_manager',true);
					}
					$this->session->set_userdata(array('username'=>$row['username'],
													   'email'=>$row['email'],
													   'nama_lengkap'=>$row['nama_lengkap'],
													   'foto'=>$row['foto'],
													   'level'=>$row['level'],
													   'id_session'=>$row['id_session']));
				    if ($row['level'] <> 'admin'){
						if (($row['expireddate']) < date('Y-m-d')){
							$datax = array('last_login'=>date("Y-m-d H:i:s"),
										   'level' => "free");
							$this->session->set_userdata(array('username'=>$row['username'],
													   'email'=>$row['email'],
													   'nama_lengkap'=>$row['nama_lengkap'],
													   'foto'=>$row['foto'],
													   'level'=>'free',
													   'id_session'=>$row['id_session']));
						}else{
							$datax = array('last_login'=>date("Y-m-d H:i:s"));
							echo "expired date : " . $row['expireddate'];
						}
					}else{
						$datax = array('last_login'=>date("Y-m-d H:i:s"));
					}
                    $where = array('username' => $row['username']);
					$this->model_app->update('users', $datax, $where);
					
					redirect('main');
				} else {
					$data['title'] = 'Password salah!';
					$this->template->load(template().'/template',template().'/login',$data);
				}
				
			}else{
				$data['title'] = 'Email salah atau akun anda sedang diblokir';
				$this->template->load(template().'/template',template().'/login',$data);
			}
		}else{
			$data['title'] = 'Administrator &rsaquo; Log In';
			$this->template->load(template().'/template',template().'/login',$data);
		}
	}
	
	function resetpassword(){
		if(substr($this->uri->segment(4),0,8) == date("Ymd")){
			$usr = $this->model_app->edit('users', array('username' => $this->uri->segment(3)));
			if ($usr->num_rows() == 1){
				$row = $usr->row_array();
				if($this->uri->segment(4) == date("Ymd") . md5("bismillah" . $row['id_session'])){
					
					if (isset($_POST['submit'])){
						if($this->input->post('pass1') != $this->input->post('pass2')){
							?>
							<script>history.back(alert("Maaf, password dan konfirmasi password tidak sama."));</script>
							<?php
						}else{
							echo "update selesai";
							$data = array('password'=>password_hash($this->input->post('pass1'),PASSWORD_DEFAULT));
							$where = array('username' => $this->uri->segment(3));
							$this->model_app->update('users', $data, $where);
							?>
							<script>
								alert('Password berhasil direset. silahkan login menggunakan password baru anda.');
								window.location = '<?php echo base_url()?>';
							</script>
							<?php
						}
					}else{
						$this->session->set_userdata(array('id_session'=>$this->uri->segment(3)));
						$data['title'] = 'Reset Password';
						$this->template->load(template().'/template',template().'/resetpassword',$data);
					}
				}else{
					echo date("Ymd") . md5($row['id_session']);
					echo "<br/>";
					redirect('main');
				}
			}else{
				redirect('main');
			}
		}else{
			echo "Mohon maaf, permintaan reset password anda telah kadaluarsa, silahkan buat permintaan reset password yang baru <a href='". base_url() ."/login/lupapassword/'>disini</a>";	
		}
    }

    function lupapassword(){
        if (isset($_POST['email'])){
            $email = strip_tags($this->input->post('email'));
            $cekemail = $this->model_app->edit('users', array('email' => $email))->num_rows();
            if ($cekemail <= 0){
                $data['title'] = 'Alamat email tidak ditemukan';
				 $this->template->load(template().'/template',template().'/lupapassword',$data);
            }else{
                $iden = $this->model_app->edit('identitas', array('id_identitas' => 1))->row_array();
                $usr = $this->model_app->edit('users', array('email' => $email))->row_array();
                $this->load->library('email');

                $tgl = date("d-m-Y H:i:s");
                $subject      = 'Lupa Password ...';
                $message      = "<html><body>
                                    <table style='margin-left:25px'>
                                        <tr><td>Halo $usr[nama_lengkap],<br>
                                        Seseorang baru saja meminta untuk mengatur ulang kata sandi Anda di <span style='color:red'>$iden[url]</span>.<br>
                                        Klik link dibawah ini untuk mengganti kata sandi Anda.<br>
                                        Atau Anda dapat copas (Copy Paste) url dibawah ini ke address Bar Browser anda :<br>
                                        <a href='".base_url()."login/resetpassword/". $usr['username'] ."/". date("Ymd") . md5("bismillah" . $usr['id_session']) ."'>".base_url()."login/resetpassword/". $usr['username'] ."/". date("Ymd") . md5("bismillah" . $usr['id_session']) . "</a><br><br>

                                        Tidak meminta penggantian ini?<br>
                                        Jika Anda tidak meminta kata sandi baru, segera beri tahu kami.<br>
                                        Email. $iden[email], No Telp. $iden[no_telp]</td></tr>
                                    </table>
                                </body></html> \n";
                
                $this->email->from($iden['email'], $iden['email_sender']);
                $this->email->to($usr['email']);
                $this->email->cc('');
                $this->email->bcc('');

                $this->email->subject($subject);
                $this->email->message($message);
                $this->email->set_mailtype("html");
                $this->email->send();
                
                $config['protocol'] = 'sendmail';
                $config['mailpath'] = '/usr/sbin/sendmail';
                $config['charset'] = 'utf-8';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';
                $this->email->initialize($config);

                $data['title'] = 'pesan permintaan reset password telah dikirim ke email anda';
				 $this->template->load(template().'/template',template().'/lupapassword',$data);
            }
        }else{
			$data['title'] = 'Reset Password Email';
            $this->template->load(template().'/template',template().'/lupapassword',$data);
        }
    }
	
	function logout(){
		$this->session->sess_destroy();
		redirect('main');
	}
}
