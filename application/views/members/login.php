

<?php 
if($this->input->post('email')!='' or $this->input->post('a')!=''){
  if ($this->input->post('email')!=''){
	  
	echo "<div class='alert alert-warning'><center>$title</center></div>";
  }elseif($this->input->post('a')!=''){
	echo "<div class='alert alert-danger'><center>$title</center></div>";
  }

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post text">
				<div class="alert alert-success">
					<strong>Maaf Gagal Login! -</strong>
				</div>
				<center style="padding:50px">
				<style>.lupa {
					width:50%;
				}</style>
				<h2>Gagal Login !!!</h2>
				 Password yang Anda masukkan salah . Silakan coba lagi (pastikan caps lock tidak aktif).<br>
				 Anda Lupa Password? <a href="login/lupapassword" title="Lupa Password Members">Reset Password Disini.</a><br>
				<br>
				<br></center>
			</div>
		</div>
	</div>
</div>
<?php  
}else{  
	redirect('main');
}
?>
