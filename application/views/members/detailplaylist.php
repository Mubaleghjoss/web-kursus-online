<?php
$leveluser = "";
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
		  <center><h5>Maaf, untuk mengakses modul ini </h5>
			  <h5>anda di haruskan Login sebagai Members</h5>
			  <h5>Jika Belum Punya Account, Silahkan <a href="<?php echo base_url(); ?>register">Register Dahulu !!!</a></h5><br>
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
			  <a style="width:130px" class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>upgrade">Upgrade Sekarang, klik disini </a>
			  <br/>
			  
		  </center>
	  
		  </div>
		 
		</div>
	  </div>
	</div>
	<!-- Modal -->
	
	<div class="image-info" style="margin-top:-45px; color:white;">
						
		<div class="rating" style="padding:10px;">
			<table class="table" style="margin:0;background:#2196F3 !important;" >
				<tr>
				<td align="center" style="padding:40px; width:34%; border-right: 1px solid lightgrey; border-top:none; background:none;"><span style="font-size:15pt;">Jenis Kelas</span><br/><span style="font-size:18pt; font-weight:bold;"><?php echo $rows['level']; ?></span></td>
				<td align="center" style="padding:40px; width:33%; border-right: 1px solid lightgrey; border-top:none; background:none;"><span style="font-size:15pt;">Jumlah Modul</span><br/><span style="font-size:18pt; font-weight:bold;"><?php echo $jumlah; ?></span></td>
				<td align="center" style="padding:40px; width:33%; border-right: 1px solid lightgrey; border-top:none; background:none;"><span style="font-size:15pt;">Durasi Belajar</span><br/><span style="font-size:18pt; font-weight:bold;"><?php echo $durasi; ?></span></td>
				
				
				</tr>
			</table>
			
		</div>
	</div>
	
	<div class="main-content--section pbottom--30">
		<div class="container">
			<div class="row">
				<div class="main--content col-md-12 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="page--title ptop--30" style="padding-bottom:20px;">
							<center><h2 class="h2"><?php echo "$rows[jdl_playlist]"; ?></h2></center>
						</div>
						<div class="post--items post--items-5 pd--30-0">
							<ul class="nav">
							
							<?php
							  foreach ($detailplaylist->result_array() as $r) {	
								  $tglr = tgl_indo($r['tanggal']);
								  $lihat = $r['dilihat']+1;
								  $judull = substr($r['jdl_video'],0,70); 
								  $isi_berita =(strip_tags($r['keterangan'])); 
								  $isi = substr($isi_berita,0,280); 
								  $isi = substr($isi_berita,0,strrpos($isi," "));
								  $total_komentar = $this->model_utama->view_where('komentarvid',array('id_video' => $r['id_video']))->num_rows();
							?>
							<li>
									<div class="post--item post--title-larger" style="padding:10px; border-bottom:1px solid lightgrey;">
										<div class="row">
											<div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
												<div class="post--img">
													<?php
													if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $r['youtube'], $match)) {
														$foto = "https://img.youtube.com/vi/$match[1]/0.jpg";
														?>
														<center><img class="img" style="width:75%; height:auto;" src="<?php echo $foto;?>" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" title=""></center>
														<?php
													} 
													?>
												</div>
											</div>
											<div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
												<div class="post--info">
													<div class="title">
													<?php
													if($leveluser == 'admin' or $leveluser == 'premium'){
													?>
														<h3 class="h4"><a href="<?php echo base_url()."playlist/watch/$r[video_seo]";?>" class="btn-link"><?php echo $judull;?></a></h3>
													<?php
													}else{?>
														<h3 class="h4"><?php echo $judull;?></h3>
													<?php													
													}
													?>
													</div>
												</div>
												<div class="post--content">
													<p><?php echo "$tglr | $r[jam]";?></p>
													<p><?php echo $isi;?></p>
												</div>
												<div class="post--action">
													<?php
													if($leveluser == 'admin' or $leveluser == 'premium'){
													?>
														<a href="<?php echo base_url()."playlist/watch/$r[video_seo]";?>">Continue Reading...</a>
													<?php
													}else{
														?>
														<a href="#" target="_blank" data-toggle="modal" data-target="#myModal2"">Continue Reading...</a>
													<?php
													}
													?>
												</div>
											</div>
										</div>
									</div>
								</li>
							<?php
							  }
						?>
											
														
						<div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
											
							<ul class="pagination float--right">
								<li>
								<?php echo $this->pagination->create_links(); ?>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
				
						
					