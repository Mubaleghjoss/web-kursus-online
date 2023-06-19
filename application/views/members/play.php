<?php
$lihat = $rows['dilihat']+1;
$total_komentar = $this->model_utama->view_where('komentarvid',array('id_video' => $rows['id_video']))->num_rows();
?>	

<div class="container">
	<div class="row">
		<div class="main--content col-md-8" data-sticky-content="true">
			<div class="sticky-content-inner">
				<div class="post--item post--single post--title-largest pd--30-0">
					<div class="post--img">
					<?php 
						if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $rows['youtube'], $match)) {
						echo "<iframe width='100%' height='500px' src='https://www.youtube.com/embed/".$match[1]."' frameborder='0' allowfullscreen></iframe>";
						} 
					?>
					</div>
							<div class="post--info">
								<ul class="nav meta">
									<li>
										Diposting : <?php echo tgl_indo($rows['tanggal']).", $rows[jam]"; ?>   | Dilihat : <?php echo $rows['dilihat']; ?> kali
									</li>
								</ul>
								<div class="title">
									<h2 class="h4"><?php echo $rows['jdl_video'];?></h2>
								</div>
							</div>
							<div class="post--content">
								<?php
								echo "$rows[keterangan]"; 
								?>
							</div>
						</div>		
					
					</div>
				</div>
				
				
				<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
					<div class="sticky-content-inner">
						
							<table style="background:#fff; border-radius:6px;" class="table tblphpmu table-hover animated fadeIn">
								<tbody>
								<?php
								foreach ($related->result_array() as $r) {
								?>
								<tr>
								<?php
								if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $r['youtube'], $matchx)) {
									$foto = "https://img.youtube.com/vi/$matchx[1]/0.jpg";
								} 	
								?>
								<td width="55px"><img class="img" style="width:168px; height:94px;" src="<?php echo $foto;?>" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" title=""></td>
								
									<td style="vertical-align: middle"><span class="judul"><a style="color:#000" href="<?php echo base_url(); ?>playlist/watch/<?php echo $r['video_seo']; ?>"><?php echo $r['jdl_video'];?></a></span>
										</small><br>
								</tr>
							<?php 
								}
							?>
							</table>
						
					</div>
				</div>
				
				
			</div>
		</div>
