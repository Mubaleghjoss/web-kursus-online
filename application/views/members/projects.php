	<div class="main--breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo base_url(); ?>" class="btn-link"><i class="fa fm fa-home"></i>Home</a>
				</li>
				<li class="active">
					<span>Semua Project</span>
				</li>
			</ul>
		</div>
	</div>
	<div class="contact--section pd--30-0">
		<div class="container">
			<div class="row">
				<div class="main--content col-md-12 col-sm-12" data-sticky-content="true">
					<div class="sticky-content-inner">
						<br/>
						<div class="alert alert-success">
							Files Project Komunitas      
						</div>
						
						<table style="background:#fff; border-radius:6px;" class="table tblphpmu table-hover animated fadeIn">
							<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th class="hidden-xs">Tanggal Upload</th>
								<th>File Size</th>
								<th>Hits</th>
								<th>Revisi</th>
								<th>Action</th>
							</tr>
							</thead>
							<?php
							  $nomor = $this->uri->segment(3);
							  foreach ($project->result_array() as $r) {
								 
								  $nomor++;
								  $baca = $r['dibaca']+1;	
								  $isi_berita =(strip_tags($r['isi_project'])); 
								  $isi = substr($isi_berita,0,220); 
								  $isi = substr($isi_berita,0,strrpos($isi," ")); 
								  $judul = $r['judul']; 
								  $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_project']))->num_rows();
							?>
							<tbody>
							<tr>
								<td><?php echo $nomor; ?></td>
								<td><a style="color:#000" href="<?php echo base_url()."projects/detail/$r[judul_seo]";?>" class="btn-link"><?php echo $judul;?></a></td>
								<td class="hidden-xs"><?php echo "$r[tanggal] | $r[jam]"; ?></td>
								<td><?php echo $r['filesize']/1000 ;?> MB</td>
								<td align="center"><?php echo $r['dibaca'];?></td>
								<td align="center">0</td>
								<td width="85px" align="center">
									<a href="<?php echo base_url()."projects/detail/$r[judul_seo]";?>"><button class="btn btn-success btn-sm"><i class="fa fa-download fa-fw"></i></button></a>
								</td>
							</tr>
							</tbody>
							<?php
							  }
							?>
						</table>
						
									
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
