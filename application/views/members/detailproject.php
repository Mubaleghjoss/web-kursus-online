<?php
	$baca = $rows['dibaca']+1;	
	$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $rows['id_berita'], 'aktif' => 'Y'))->num_rows();

	$queryuser = $this->model_utama->view_where('users', array('username' => $this->session->username));
	foreach ($queryuser->result_array() as $usr) {
		$leveluser = $usr['level'];
	}
	
?>	


	<!-- Modal -->
	<div class="modal fade animated bounceIn" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Pemberitahuan !!!</h4>
		  </div>
		  <div class="modal-body">
		  <center><h5>Maaf, untuk mengakses File ini </h5>
			  <h5>anda di haruskan Login sebagai Members</h5>
			  <h5>Jika Belum Punya Account, Silahkan <a href="https://members.lokomedia.web.id/register">Register Dahulu !!!</a></h5><br>
		  </center>
	  
		  </div>
		 
		</div>
	  </div>
	</div>
	<!-- Modal -->

	<!-- Modal -->
	<div class="modal fade animated bounceIn" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" style="color:red;" id="myModalLabel">Pemberitahuan !!!</h4>
		  </div>
		  <div class="modal-body">
		  <center><h5>Mohon Maaf, </h5>
				<h5>file ini hanya bisa didownload </h5>
			  <h5>Oleh <span style="color:green;">Premium Member</span></h5>
			  <br/>
			  <a style="width:130px" class="btn btn-sm btn-primary" href="https://members.lokomedia.web.id/upgrade">Upgrade Sekarang</a>
			  <br/>
			  Jika ada pertanyaan, bisa hubungi admin via WA 0857.1612.9917
		  </center>
	  
		  </div>
		 
		</div>
	  </div>
	</div>
	<!-- Modal -->

<div class="container">
			<div class="row">
				<div class="main--content col-md-8" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="alert alert-success"><b><i class="fa fa-volume-up fa-sw"></i><?php echo $rows['judul'];?></b></div>
						
						<div class="post--item post--single post--title-largest pd--30-0">
							<div class="post--img">
							<?php 
								if ($rows['gambar'] !=''){ echo "<a href='#' class='thumb'><img style='width:100%' src='".base_url()."asset/foto_project/$rows[gambar]' alt='$rows[judul]' /></a>"; }
								if ($rows['keterangan_gambar'] !=''){ echo "<center><p><i><b>Keterangan Gambar :</b> $rows[keterangan_gambar]</i></p></center><br>"; }
							
								if ($rows['youtube']!=''){
									echo "<h4>Video Terkait:</h4>";
									if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $rows['youtube'], $match)) {
										echo "<iframe width='100%' height='350px' id='ytplayer' type='text/html'
											src='https://www.youtube.com/embed/".$match[1]."?rel=0&showinfo=1&color=white&iv_load_policy=3'
											frameborder='0' allowfullscreen></iframe><div class='garis'></div><br/>";
									} 
								}
							?>
								
							</div>
							
							
							<div class="panel-body">
								<div class="form-horizontal">
								<div class="form-group has-success has-feedback">
									<label class="col-md-2 control-label" style="padding-top:0;"><b>Nama File</b></label>
									<div class="col-md-9">
										<label><?php echo $rows['judul'];?></label>
									</div>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="col-md-2 control-label" style="padding-top:0;"><b>File Size</b></label>
									<div class="col-md-9">
										<label><?php echo $rows['filesize']/1000;?> MB</label>
									</div>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="col-md-2 control-label" style="padding-top:0;"><b>Kategori</b></label>
									<div class="col-md-9">
										<label><?php echo $rows['nama_kategori'];?></label>
									</div>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="col-md-2 control-label" style="padding-top:0;"><b>Tanggal Upload</b></label>
									<div class="col-md-9">
										<label><?php echo $rows['tanggal'];?></label>
									</div>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="col-md-2 control-label" style="padding-top:0;"><b>Total Download</b></label>
									<div class="col-md-9">
										<label><?php echo $rows['dibaca'];?> kali</label>
									</div>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="col-md-2 control-label" style="padding-top:0;"><b>&nbsp;</b></label>
									<div class="col-md-9">
										<?php 
										if ($rows['linkdownload'] <> '' and ($leveluser == 'admin' or $leveluser == 'premium')){
										?>
											<a style="width:100px" class="btn btn-sm btn-primary" href="<?php echo $rows['linkdownload'] ?>">Download</a>
										<?php 
										}elseif ($rows['linkdownload'] <> '' and $leveluser <> ''  and $rows['free'] == 'Y'){
										?>
											<a style="width:100px" class="btn btn-sm btn-primary" href="<?php echo $rows['linkdownload'] ?>" target="_blank">Download</a>
										<?php 
										}elseif($rows['linkdownload'] <> '' and ($leveluser == 'free') and $rows['free'] = 'N'){
										?>	
											<a style="width:100px" class="btn btn-sm btn-primary" href="#" target="_blank" data-toggle="modal" data-target="#myModal3">Download</a>
										<?php	
										}else{
										?>	
											<a style="width:100px" class="btn btn-sm btn-primary" href="#" target="_blank" data-toggle="modal" data-target="#myModal2">Download</a>
										<?php	
										}
										if ($rows['linkdemo'] <> ''){
										?>
											<a style="width:100px" class="btn btn-sm btn-danger" href="<?php echo $rows['linkdemo'] ?>" target="_blank">Demo</a>
										<?php 
										}
										?>
									</div>
								</div>
								</div>
							</div>
							
							
							
							<div class="post--content">
								<?php
								echo "$rows[isi_project]"; 
								?>
							</div>
							<br/>
							<div class="alert alert-info">Ada <?php echo $total_komentar; ?> Data Revisi</div>
						</div>
						
						
						<br/>
						<div class="comment--list pd--30-0">
							
							<ul class="comment--items nav">
								<?php
									$no = 1;
									$komentar = $this->model_utama->view_where_ordering_limit('komentar',array('id_berita' => $rows['id_berita'],'aktif' => 'Y'),'id_komentar','ASC',0,100);
			  						foreach ($komentar->result_array() as $kka) {
										$isian=nl2br($kka['isi_komentar']); 
										$komentarku = sensor($isian); 
										
										if(($no % 2)==0){ $warna="#ffffff;"; }else{ $warna="#e3e3e3"; }
										$gravatar = md5(strtolower(trim($kka['url'])));	
										?>
										<li>
									<div class="comment--item clearfix">
										<div class="comment--img float--left">
										<?php
										if ($kka['url'] == ''){
											echo "<img class='setborder' src='".base_url()."asset/foto_user/blank.png'/>";
										}else{
											echo "<img class='setborder' src='http://www.gravatar.com/avatar/$gravatar.jpg?s=100'/>";
										}
										?>
										</div>
										<div class="comment--info">
											<div class="comment--header clearfix">
												<p class="name"><?php echo $kka['nama_komentar']; ?></p>
												<p class="date"><?php echo tgl_indo($kka['tgl']) . ", $kka[jam_komentar] ";?></p>
											</div>
											<div class="comment--content">
												<p>
													<?php echo $komentarku; ?>
												</p>
											</div>
										</div>
									</div>
								</li>
								<?php
										
										$no++;
									}
								?>
								
								
							</ul>
						</div>
						<?php
						if	($leveluser == 'admin'){
						?>
						<form action="<?php echo base_url(); ?>projects/kirim_komentar" method="POST" onSubmit="return validasi(this)" id="form_komentar">
						<input type="hidden" name='a' value='<?php echo "$rows[id_berita]"; ?>'>
						<div class="comment--form pd--30-0">
							<div class="post--items-title">
								<h2 class="h4">Tulis Revisi</h2>
								<i class="icon fa fa-pencil-square-o"></i>
							</div>
							<div class="comment-respond">
								<form action="#" data-form="validate">
									<div class="row">
										<div class="col-md-12 ">
											<label><span>Comment *</span><textarea name='d' class="form-control" required rows="5" cols="100%"></textarea></label>
										</div>
										<div class="col-sm-6">
										<p class="contact-form-message">
											<label for="c_message">
											<?php echo $image; ?><br></label>
											<input name='secutity_code' maxlength=6 type="text" class="required" placeholder="Masukkkan kode ..">
										</p>
										</div>
										<div class="col-md-12">
											<input type="submit" name="submit" class="btn btn-primary" value="Post a Comment" onclick="return confirm('Haloo, Pesan anda akan tampil setelah kami setujui?')"/>
											
										</div>
									</div>
								</form>
							</div>
						</div>
						</form>
						<?php
						}
						?>
					</div>
				</div>
				<?php include "sidebar_kanan.php";  ?>
			</div>
		</div>
