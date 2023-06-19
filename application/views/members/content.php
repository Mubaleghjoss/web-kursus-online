<!-- begin #content -->
    <div id="content" class="content">
		<section style="padding:20px;">
			<h2 style="margin-top:-5px; text-align:center;">Modul Belajar Terbaru</h2>
			<div id="gallery" class="gallery">
				<?php
				foreach($playlist->result_array() as $r){
					$sql_vid = $this->model_utama->view_where('video',array('id_playlist' => $r['id_playlist']));
					$total_video = $sql_vid->num_rows();
					$sql_vid2 = $this->db->query("select sum(durasi) as dura from video where id_playlist = $r[id_playlist]");
					$vid2 = $sql_vid2->row_array();
					$durasi = $vid2['dura'];
					if($durasi >= 60){
						$durasi = $durasi / 60;
						$durasi = round($durasi) . " jam";
					}else{
						$durasi = round($durasi) . " menit";
					}
				?>
				<div class="image gallery-group-2">
					<div class="image-inner">
						<a href="<?php echo base_url() . "playlist/detail/". $r['playlist_seo']; ?>">
							<?php 
							if($r['gbr_playlist'] == ""){
								echo "<img src='". base_url() ."asset/img_playlist/no-image.jpg'/>";
							}else{
							?>
								<img src="<?php echo base_url(). "asset/img_playlist/".$r['gbr_playlist']; ?>" alt=""/>
							<?php
							}	
						?>	
						</a>
						<p class="image-caption">
							<?php 
							if($r['level'] == 'Premium'){
								echo "<span style='color:#FFD700;'>$r[level]</span>";
							}else{
								echo $r['level'];
							}
							
							
							?>
						</p>
					</div>
					<div class="image-info">
						
						<div class="rating">
							<table class="table" style=" padding:none; margin:0;">
								<tr>
								<td align="center" style="width:50%; border-right: 1px solid lightgrey; border-top:none"><?php echo $total_video; ?> modul</td>
								<td align="center" style=" border-top:none"><?php echo $durasi; ?></td>
								</tr>
							</table>
							
						</div>
					</div>
					<div class="image-info">
						
						<a href="<?php echo base_url() . "playlist/detail/". $r['playlist_seo']; ?>"><h4 class="title"><?php echo $r['jdl_playlist'] ?></h4></a>
						<div class="desc">
							<?php echo $r['detail_playlist']; ?>
						</div>
					</div>
				</div>
				<?php
				}
				?>
				
				
			</div>
			
		</section>
		
		<section style="padding:20px;">
		<div id="posts">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="post text">
							<div class="col-md-4">
							<a class="pull-right" href="<?php echo base_url()?>playlist">All Module</a>
								<h3 style="margin-top:10px">Update Modul Terbaru</h3>
								<table style="background:#fff; border-radius:6px;" class="table tblphpmu table-hover animated fadeIn">
									<tbody>
									<?php
									foreach ($video->result_array() as $r) {
									?>
									<tr>
										<td><span class="judul"><a style="color:#000" href="<?php echo base_url(); ?>playlist/watch/<?php echo $r['video_seo']; ?>"><?php echo $r['jdl_video'];?></a></span>
											</small><br>
											<small><a href="<?php echo base_url(); ?>playlist/watch/<?php echo $r['video_seo']; ?>"><i class="fa fa-volume-down fa-fw"></i>  <?php echo $r['tanggal'] . ", " . $r['jam'];?>, - <?php echo $r['dilihat'];?> dilihat</a></small></td>
										<td align="center"><a href="<?php echo base_url(); ?>playlist/watch/<?php echo $r['video_seo']; ?>"><button class="btn btn-success btn-sm"><i class="fa fa-desktop fa-fw"></i></button></a></td>
									</tr>
								<?php 
									}
								?>
								</table>
							</div>

							<div class="col-md-4">
								<a class="pull-right" href="https://members.lokomedia.web.id/forum">All Discussion</a>
								<h3 style="margin-top:10px">Diskusi Terbaru</h3>
								<table style="background:#fff; border-radius:6px;" class="table tblphpmu table-hover animated fadeIn">
									<tbody>
									<?php
									foreach ($forum->result_array() as $s) {
										$total_komentar = $this->model_utama->view_where('komentarforum',array('id_forum' => $s['id_forum']))->num_rows();
										if ($s['id_kategori'] == 1){
											$kategori = "<span style='color:green; font-weight:bold;'>[ SHARE ] </span>";
										}elseif($s['id_kategori'] == 2){
											$kategori = "<span style='color:blue; font-weight:bold;'>[ TANYA ] </span>";
										}elseif($s['id_kategori'] == 3){
											$kategori = "<span style='color:red; font-weight:bold;'>[ LOWKER ] </span>";
										}elseif($s['id_kategori'] == 4){
											$kategori = "<span style='color:purple; font-weight:bold;'>[ PROJECT ] </span>";
										}else{
											$kategori = "";
										}
										if($s['level'] == "free"){
											$level = "<span style='color:red;'>Free Member</span>";
										}else{
											$level = "<span style='color:green;'>Premium Member</span>";
										}
									?>
									
									<tr>
									<?php
									if($s['foto'] <> ''){									
										$foto = base_url() . "asset/foto_user/" . $s['foto'];	
									}else{
										$foto = base_url() . "asset/foto_user/blank.jpg";	
									}	
									?>
									<td width="55px"><img class="img-circle" style="width:55px; height:49px;" src="<?php echo $foto;?>" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" title="" data-content="<?php echo $level; ?>" data-original-title="<b><?php echo $s['nama_lengkap'];?></b>"></td>
									<td><b><?php echo $kategori;?></b> - <a style="color:#000" href="<?php echo base_url() . "forum/read/" . $s['judul_seo']; ?>"><?php echo $s['judul']?></a> <br>
										<small> <a style="color:#000" href="<?php echo base_url() . "forum/read/" . $s['judul_seo']; ?>"><i class="fa fa-comment fa-fw"></i> <?php echo $total_komentar;?> Comment</a> </small> 
										<small style="text-transform:capitalize"><a style="color:#000" href="<?php echo base_url(); ?>members/account/<?php echo $s['username'];?>" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" title="" data-content="<?php echo $level; ?>" data-original-title="<b><?php echo $s['nama_lengkap'];?></b>"><i class="fa fa-user fa-fw"></i> <?php echo $s['nama_lengkap'];?></a></small></td></tr>
									<tr>
									<?php 
									}
									?>
								</table>
							</div>

							<div class="col-md-4">
								<h3 style="margin-top:10px">Kategori Materi</h3>
								<table style="background:#fff; border-radius:6px;" class="table tblphpmu table-hover animated fadeIn">
									<tbody>
									<?php
									foreach ($tagvid->result_array() as $r) {
									?>
									<tr>
									<?php
									if($r['gambar'] <> ''){									
										$foto = base_url() . "asset/img_tagvid/" . $r['gambar'];	
									}else{
										$foto = base_url() . "asset/img_tagvid/blank.jpg";	
									}	
									?>
									<td width="55px"><img class="img" style="width:55px; height:49px; border-radius:6px;" src="<?php echo $foto;?>" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" title=""></td>
									
										<td style="vertical-align: middle"><span class="judul"><a style="color:#000" href="<?php echo base_url(); ?>tagvid/detail/<?php echo $r['tag_seo']; ?>"><?php echo $r['nama_tag'];?></a></span>
											</small><br>
									</tr>
								<?php 
									}
								?>
								</table>
							</div>

							<div style="clear:both"></div>
							<hr style="margin-top:10px; margin-bottom:10px;">

						</div>  
					</div>    
				</div>
			</div>
		</div>
	</section>
    <!-- end #content -->