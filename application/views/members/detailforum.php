<div class="container">
			<div class="row">
				<div class="main--content col-md-12" data-sticky-content="true">
					<div class="sticky-content-inner">
						<!-- Awal berita forum -->
						<table style="background:#fff; border-radius:6px; border:1px solid #cecece;" class="table table-hover animated fadeIn">
						<thead>
							<tr bgcolor="green"><td style="padding:10px; color:#fff; background:green; font-weight:bold" colspan="2"><i class="fa fa-volume-up fa-sw"></i>
							<?php echo $rows['judul'];?><span style="float:right;"><?php echo tgl_indo($rows['tanggal']) . ", $rows[jam] ";?></span></td></tr>
							<tr class="hidden-xs" bgcolor="#f4f4f4">
								<td valign="top" rowspan="2" width="100px">
									<a href="<?php echo base_url() . "members/" . $rows['username']; ?>">
									<?php
									if ($foto == ''){
										$foto = "blank.png";
									}else{
										$foto = $foto;
									}
									?>
										<img width="80px" style="height:80px" src="<?php echo base_url() . "asset/foto_user/" . $foto;?>" class="img-circle img-thumbnail" alt="User Image">
									</a>
									<center style="text-transform:capitalize; font-size:12px"><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><br>
									
									<?php if ($level == 'free'){ ?>
										<b style="color:red;">Members</b>
									<?php
									}else{?>
									<b style="color:green;">Members</b>
									<?php
									}	
									?>
									</center>
								</td>
							</tr>
							<tr bgcolor="#f4f4f4">
								<td valign="top"> 
									<i class="fa fa-user"></i> <a href="<?php echo base_url() . "members/" . $rows['username']; ?>"><?php echo $nama_lengkap ?></a> <i><small>Mengatakan :</small></i>
									<span class="visible-xs"><i class="fa fa-key"></i> 
									<?php if ($level == 'free'){ ?>
										<b style="color:red;">Free Members</b>
									<?php
									}else{?>
									<b style="color:green;">Premium Members</b>
									<?php
									}	
									?>
									- <i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i></span>
									
								
<pre><code class="php"><?php echo $rows['isi_forum']; ?></code></pre>
									</td>
								</tr>
							</thead>
						</table>
						
						<!-- komentar forum -->
						<?php
						$no = 1;
						$jumlah= $this->model_utama->view_join_one('komentarforum','users','username',array('komentarforum.id_forum' => $rows['id_forum'],'komentarforum.aktif' => 'Y'),'id_komentar','ASC',0,1000)->num_rows();
						$config['base_url'] = base_url().'forum/read/'. $this->uri->segment('3');;
						$config['total_rows'] = $jumlah;
						$config['per_page'] = 10; 
						
						if ($this->uri->segment('4')==''){
							$dari = 0;
						}else{
							$dari = $this->uri->segment('4');
						}
						$this->pagination->initialize($config);
						$komentar = $this->model_utama->view_join_one('komentarforum','users','username',array('komentarforum.id_forum' => $rows['id_forum'],'komentarforum.aktif' => 'Y'),'id_komentar','ASC',$dari,$config['per_page']);
						foreach ($komentar->result_array() as $kka) {
							$isian=nl2br($kka['isi_komentar']); 
							$komentarku = sensor($isian); 
							
							if ($kka['foto'] == ''){
								$fotokomen = "blank.png";
							}else{
								$fotokomen = $kka['foto'];
							}
						?>
										
						<table style="background:#fff; border-radius:6px; border:1px solid #cecece;" class="table table-hover animated fadeIn">
						<thead>
							<tr bgcolor="lightgreen"><td style="padding:10px; color:#000000; background:lightgreen;" colspan="2"><i class="fa fa-user fa-sw"></i>
							<?php echo $kka['nama_lengkap']; ?> Mengatakan :<span style="float:right;"><?php echo tgl_indo($kka['tgl']) . ", $kka[jam_komentar] ";?></span></td></tr>
							<tr class="hidden-xs" bgcolor="#f4f4f4">
								<td valign="top" rowspan="2" width="100px">
									<a href="<?php echo base_url() . "members/" . $kka['username']; ?>">
										<img width="80px" style="height:80px" src="<?php echo base_url() . "/asset/foto_user/" . $fotokomen;?>" class="img-circle img-thumbnail" alt="User Image">
									</a>
									<center style="text-transform:capitalize; font-size:12px"><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><i class="fa fa-star-o text-red"></i><br>
									<?php if ($kka['level'] != 'premium' or $kka['level'] != 'admin'){ ?>
									<b style="color:green;">Members</b>
									<?php
									}else{?>
									<b style="color:red;">Members</b>
									<?php
									}	
									?>
									</center>
								</td>
							</tr>
							<tr bgcolor="#f4f4f4">
								<td valign="top"> 
								
									
								
<pre><code class="php"><?php echo $komentarku; ?></code></pre>
									</td>
								</tr>
							</thead>
						</table>
												
								<?php
										
										$no++;
									}
								?>
						
						
						</div>
						
						<div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
											
							<ul class="pagination float--right">
								<li>
								<?php echo $this->pagination->create_links(); ?>
								</li>
							</ul>
							
						</div>
						<?php
						if	($this->session->username <> ''){
						?>
						<form action="<?php echo base_url(); ?>forum/kirim_komentar" method="POST" onSubmit="return validasi(this)" id="form_komentar">
						<input type="hidden" name='a' value='<?php echo "$rows[id_forum]"; ?>'>
						<div class="comment--form pd--30-0">
							<div class="post--items-title">
								<h2 class="h4">Tulis Komentar</h2>
								<i class="icon fa fa-pencil-square-o"></i>
							</div>
							<div class="comment-respond">
								<form action="#" data-form="validate">
									<div class="row">
										<div class="col-md-12 ">
											<label><span>Comment *</span><textarea name='d' class="form-control" required rows="5" cols="100%" minlength="20"></textarea></label>
										</div>
										<div class="col-sm-6">
										<p class="contact-form-message">
											<label for="c_message">
											<?php echo $image; ?><br></label>
											<input id="kodenya" name='secutity_code' maxlength=6 type="text" class="required" placeholder="Masukkkan kode ..">
										</p>
										</div>
										<div class="col-md-12">
											<input type="submit" name="submit" class="btn btn-primary" value="Post a Comment" onclick="return checkField()"/>
											
										</div>
									</div>
								</form>
							</div>
						</div>
						</form>
						<?php
						}else{
						?>
						<div class="alert alert-info">
					        <center>Maaf, Untuk Memberikan Komentar Anda Harus Login !!!</center>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
<script>
function checkField() {
    var x = document.getElementById("kodenya").value; 
    if (x === "") { 
        alert("Isi kode captcha dengan benar");
        return false;
    } else {
        return true;
    }
}
</script>