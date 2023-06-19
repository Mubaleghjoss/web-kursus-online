		<div class="main-content--section pbottom--30">
		<div class="container">
			<div class="row">
				<div class="main--content col-md-12 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<section style="padding:20px;">
			<h2 style="margin-top:-5px; text-align:center;">Modul Belajar</h2>
			<div id="gallery" class="gallery">
				<?php
				$no=$this->uri->segment(4)+1;
				foreach ($tagvid->result_array() as $r) {	
					$total_video = $this->model_utama->view_where('video',array('id_playlist' => $r['id_playlist']))->num_rows();
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
						
						<h4 class="title"><?php echo $r['jdl_playlist'] ?></h4>
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
		
		