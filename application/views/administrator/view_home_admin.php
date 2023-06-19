
  <a style='color:#000' href='<?php echo base_url() . "$this->haladmin/"; ?>halamanbaru'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-file"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Project</span>
        <?php $jmlb = $this->model_app->view('project')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmlb; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>

  <a style='color:#000' href='<?php echo base_url() . "$this->haladmin/"; ?>agenda'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Forum</span>
        <?php $jmlc = $this->model_app->view('forum')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmlc; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>

  <a style='color:#000' href='<?php echo base_url() . "$this->haladmin/"; ?>manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Users</span>
        <?php $jmld = $this->model_app->view('users')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmld; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>
  
<a style='color:#000' href='<?php echo base_url() . "$this->haladmin/"; ?>manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-blue"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">User Live Upgrade</span>
        <?php $jmle = $this->model_app->view_where('users', "expireddate > CURDATE()")->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmle; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>
  
  <a style='color:#000' href='<?php echo base_url() . "$this->haladmin/"; ?>manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Expired Upgrade</span>
        <?php $jmlf = $this->model_app->view_where('users', "expireddate < CURDATE()")->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmlf; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>
  
    <a style='color:#000' href='<?php echo base_url() . "$this->haladmin/"; ?>manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-purple"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Permanen Upgrade</span>
        <?php $jmlg= $this->model_app->view_where('users', "lastpackage = 9")->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmlg; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>

  <a style='color:#000' href='<?php echo base_url() . "$this->haladmin/"; ?>manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Invoice Pending</span>
        <?php $jmlh= $this->model_app->view_where('invoice', "status = 'pending'")->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmlh; ?></span>
		<?php
		$query = $this->db->query("SELECT SUM(nominal) AS jmlpending FROM invoice WHERE STATUS = 'pending'");
		foreach ($query->result_array() as $rowz){
				echo "<span class='info-box-number'>Rp ". number_format($rowz['jmlpending']) . "</span>";
		}

		?>
		
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>
  
  <a style='color:#000' href='<?php echo base_url() . "$this->haladmin/"; ?>manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon "><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Invoice Paid</span>
        <?php $jmlj= $this->model_app->view_where('invoice', "status = 'paid'")->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmlj; ?></span>
		<?php
		$query = $this->db->query("SELECT SUM(nominal) AS jmlpaid FROM invoice WHERE STATUS = 'paid'");
		foreach ($query->result_array() as $rowz){
				echo "<span class='info-box-number'>Rp ". number_format($rowz['jmlpaid']) . "</span>";
		}

		?>
		
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>
  
<section class="col-lg-7 connectedSortable">
  <?php 
    $jmlpesan = $this->model_app->view_where('hubungi', array('dibaca'=>'N'))->num_rows(); 
    $jmlberita = $this->model_app->view_where('komentar', array('aktif'=>'N'))->num_rows(); 
    $jmlvideo = $this->model_app->view_where('komentarvid', array('aktif'=>'N'))->num_rows(); 
  ?>
  <div class='box'>
    <div class='box-header'>
      <h3 class='box-title'>Application Buttons</h3>
    </div>
    <div class='box-body'>
      <p>Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola konten website anda 
          atau pilih ikon-ikon pada Control Panel di bawah ini : </p>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>identitaswebsite" class='btn btn-app'><i class='fa fa-th'></i> Identitas</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>menuwebsite" class='btn btn-app'><i class='fa fa-th-large'></i> Menu</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>halamanbaru" class='btn btn-app'><i class='fa fa-file-text'></i> Halaman</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>listberita" class='btn btn-app'><i class='fa fa-television'></i> Berita</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>kategoriberita" class='btn btn-app'><i class='fa fa-bars'></i> Kategori</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>tagberita" class='btn btn-app'><i class='fa fa-tag'></i> Tag Berita</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>komentarberita" class='btn btn-app'><span class='badge bg-green'><?php echo $jmlberita; ?></span><i class='fa fa-comments'></i> Komen. Berita</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>sensorkomentar" class='btn btn-app'><i class='fa fa-bell-slash'></i> Sensor</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>album" class='btn btn-app'><i class='fa fa-camera-retro'></i> Album</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>gallery" class='btn btn-app'><i class='fa fa-camera'></i> Gallery</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>playlist" class='btn btn-app'><i class='fa fa-caret-square-o-right'></i> Playlist</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>video" class='btn btn-app'><i class='fa fa-play'></i> Video</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>tagvideo" class='btn btn-app'><i class='fa fa-tags'></i> Tag Video</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>komentarvideo" class='btn btn-app'><span class='badge bg-blue'><?php echo $jmlvideo; ?></span><i class='fa fa-comments-o'></i> Komen. Video</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>iklanatas" class='btn btn-app'><i class='fa fa-file-image-o'></i> Ads Atas</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>iklansidebar" class='btn btn-app'><i class='fa fa-file-image-o'></i> Ads Sidebar</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>iklanhome" class='btn btn-app'><i class='fa fa-file-image-o'></i> Ads Tengah</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>logowebsite" class='btn btn-app'><i class='fa fa-circle-thin'></i> Logo</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>templatewebsite" class='btn btn-app'><i class='fa fa-file'></i> Template</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>background" class='btn btn-app'><i class='fa fa-circle'></i> Background</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>agenda" class='btn btn-app'><i class='fa fa-calendar-minus-o'></i> Agenda</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>agenda" class='btn btn-app'><i class='fa fa-calendar-minus-o'></i> Sekilas Info</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>jajakpendapat" class='btn btn-app'><i class='fa fa-bar-chart-o'></i> Polling</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>download" class='btn btn-app'><i class='fa fa-download'></i> Download</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>alamat" class='btn btn-app'><i class='fa fa-bed'></i> Alamat</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>pesanmasuk" class='btn btn-app'><span class='badge bg-yellow'><?php echo $jmlpesan; ?></span><i class='fa fa-envelope'></i> Pesan</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>manajemenuser" class='btn btn-app'><i class='fa fa-users'></i> Users</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>diskon" class='btn btn-app'><i class='fa fa-percent'></i> Diskon</a>
      <a href="<?php echo base_url() . "$this->haladmin/"; ?>invoice" class='btn btn-app'><i class='fa fa-usd'></i> Invoice</a>
      
    </div>
  </div>
</section><!-- /.Left col -->

<section class="col-lg-5 connectedSortable">
    <?php include "grafik.php"; ?>
</section><!-- right col -->
<section class="col-lg-5 connectedSortable">
    <?php include "grafik2.php"; ?>
</section><!-- right col -->
