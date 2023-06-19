<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8"/>
    <title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/animate.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style-responsive.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/theme/default.css" rel="stylesheet" id="theme"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/essential.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/lokomedia.css" rel="stylesheet"/>
    <!-- ================== END BASE CSS STYLE ================== -->
	
	    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/isotope/isotope.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/lightbox/css/lightbox.css" rel="stylesheet"/>
    <!-- ================== END PAGE LEVEL STYLE ================== -->
	
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/hl/foundation.css">
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/hl/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
	
	
	<!-- ================== BEGIN SWEET ALERT JS ================== -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/sweetalert.min.js"></script>
    <!-- ================== END SWEET ALERT JS ================== -->  
	
</head>
<body>

<!-- Form Login -->
  <!-- Trigger the modal with a button -->

	<!-- Modal -->
	<form action="<?php echo base_url();?>login" method="post">
	<div class="modal fade animated bounceIn" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Form Login Member</h4>
		  </div>
		  <div class="modal-body">
			
	  <div class="form-group">
		  <label for="nama" class="col-sm-3 control-label">Email</label>
		  <div class="col-sm-8 input-group">
		  <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
		  <input type="email" class="form-control" name="a" requered ></div>
	</div>
	<div class="form-group">
		  <label for="nama" class="col-sm-3 control-label">Password</label>
		  <div class="col-sm-8 input-group">
		  <span class="input-group-addon"><i class="fa fa-qrcode fa-fw"></i></span>
		  <input type="password" class="form-control" name="b" requered ></div>
		  
	</div>
	<div class="form-group">
	<label class="col-sm-2"></label>
		  <div class="col-sm-10">
			<a href="<?php echo base_url() . "login/lupapassword";?>">Lupa Password ?</a> | Belum menjadi member?
			<a href="<?php echo base_url() . "register";?>">Daftar Member disini</a>
		  </div>
	</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" name="submit"class="btn btn-primary">LOGIN</button>
		  </div>
			 
		</div>
	  </div>
	</div>
	</form>
	<!-- Modal -->

<!-- Akhir Form Login -->



<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="page-container fade page-without-sidebar page-header-fixed page-with-top-menu">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin mobile sidebar expand / collapse button -->
            <div class="navbar-header">
				<?php	
				  $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
				  foreach ($logo->result_array() as $row) {
					echo "<a href='".base_url()."'><img style='max-height:50px;' src='".base_url()."asset/logo/$row[gambar]'/>";
				  }
				?></a>
				
				<button type="button" class="navbar-toggle" data-click="top-menu-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end mobile sidebar expand / collapse button -->

            <!-- begin header navigation right -->
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <?php
				if	($this->session->level<>''){
				?>
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        <i class="fa fa-envelope-o"></i>
						<?php
						$pesanbaru = $this->model_utama->view_pesanbaru($this->session->username)->num_rows();
						?>
                        <span class="label"><?php echo $pesanbaru; ?></span>
                    </a>
                    <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                        <li class="dropdown-header">Pesan Baru (<?php echo $pesanbaru; ?>)</li>
                        <?php
						$pesanku = $this->model_utama->view_pesanku($this->session->username);
						foreach ($pesanku->result_array() as $p) {
							$isi = substr($p['isi_pesan'],0,30); 
						    $isi = substr($p['isi_pesan'],0,strrpos($isi," "));
							if ($p['dibaca'] == "N"){
							?>
							<li class="media" style="background:#d8d7d7;">
								<a href="<?php echo base_url() . "messages/read/" . $p['username']?>">
									<div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
									<div class="media-body">
										<h6 class="media-heading"><?php echo $p['nama_lengkap'];?></h6>
										<div class="text-muted f-s-11"><?php echo $isi;?>..</div>
										<div class="text-muted f-s-11"><?php echo $p['tanggal'];?></div>
									</div>
								</a>
							</li>
							<?php
							}else{
							?>
							<li class="media">
								<a href="<?php echo base_url() . "messages/read/" . $p['username']?>">
									<div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
									<div class="media-body">
										<h6 class="media-heading"><?php echo $p['nama_lengkap'];?></h6>
										<div class="text-muted f-s-11"><?php echo $isi;?>..</div>
										<div class="text-muted f-s-11"><?php echo date("d-m-Y",strtotime($p['tanggal'])) . " " . $p['jam'];?></div>
									</div>
								</a>
							</li>
							<?php	
							}
						}
						?>
                        <li class="dropdown-footer text-center">
                            <a href="javascript:;">View more</a>
                        </li>
                    </ul>
                </li>
								
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
					<?php if ($this->session->foto <> ''){ ?>
                        <img src="<?php echo base_url(); ?>asset/foto_user/<?php echo $this->session->foto; ?>" alt=""/>
					<?php }else{?>	
                        <img src="<?php echo base_url(); ?>asset/foto_user/blank.jpg" alt=""/>
                    <?php } ?>
					 <span class="hidden-xs"><?php echo $this->session->nama_lengkap; ?></span> <b class="caret"></b>
					</a>
                    <ul class="dropdown-menu animated fadeInLeft">
                        <li class="arrow"></li>
                        <li><a href="<?php echo base_url(); ?>members/account/<?php echo $this->session->username;?>">Edit Profile</a></li>
                        <li><a href="<?php echo base_url(); ?>messages/read/LOKO000001"><span class="badge badge-danger pull-right"><?php echo $pesanbaru; ?></span> Inbox</a></li>
                        <li><a href="<?php echo base_url(); ?>invoice""><span class="badge badge-danger pull-right"></span>My Invoice</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>logout">Log Out</a></li>
                    </ul>
                </li>
				<?php
				}
				?>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end #header -->

    <!-- begin #top-menu -->
    <div id="top-menu" class="top-menu">
        <!-- begin top-menu nav -->
        <ul class="nav">
            <li class="has-sub">
                <a href="<?php echo base_url(); ?>">
                    <i class="fa fa-laptop"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="<?php echo base_url() . "playlist";?>">
                   <i class="fa fa-play fa-fw"></i>
				   <span>Online Course</span>
				</a>
            </li>
            <li class="has-sub">
                <a href="<?php echo base_url() . "artikel";?>">
                    <i class="fa fa-book"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="<?php echo base_url(); ?>forum">
                    <i class="fa fa-users fa-fw"></i>
                    <span>Forum</span>
                </a>
            </li>
			<?php
			if	($this->session->level == ''){
			?>
            <li class="has-sub">
                <a href="<?php echo base_url(); ?>register">
                    <i class="fa fa-user fa-fw"></i>
                    <span>Register</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-key fa-fw"></i>
                    <span>Login</span>
				</a>
            </li>
			<?php
			}
			
			if	($this->session->level <> ''){
				?>
			
			<li class="has-sub" id="keluar">
				<a href="<?php echo base_url(); ?>logout">
					<i class="fa fa-power-off"></i>
					<span>Logout</span>
				</a>
			</li>
			
			<li class="has-sub">
                <a href="#">
                     <i class="fa fa-users fa-fw"></i>
                    <span>My Profile</span>
				 </a>
				<ul class="sub-menu">
					<li><a href="<?php echo base_url(); ?>members/account/<?php echo $this->session->username;?>">Edit Profile</a></li>
					<li><a href="<?php echo base_url(); ?>messages/read/LOKO000001">Inbox</a></li>
					<li><a href="<?php echo base_url(); ?>invoice">Invoice</a></li>
				</ul>
            </li>
			<li class="has-sub">
                <a href="<?php echo base_url(); ?>invoice">
                    <i class="fa fa-credit-card"></i>
                    <span style="font-weight:bold;">My Invoice</span>
                </a>
            </li>
			<?php
			}
			
			//if	($this->session->level == 'free'){
			?>
			<li class="has-sub">
                <a href="<?php echo base_url(); ?>upgrade">
                    <i class="fa fa-diamond"></i>
                    <span style="font-weight:bold; color:#ccff00;">Upgrade Premium Members</span>
                </a>
            </li>
			<?php
			//}
			?>
            <li class="menu-control menu-control-left">
                <a href="#" data-click="prev-menu"><i class="fa fa-angle-left"></i></a>
            </li>
            <li class="menu-control menu-control-right">
                <a href="#" data-click="next-menu"><i class="fa fa-angle-right"></i></a>
            </li>
        </ul>
        <!-- end top-menu nav -->
    </div>
    <!-- end #top-menu -->
<?php
$jmlmember = $this->model_utama->view('users')->num_rows();
$jmlproject = $this->model_utama->view('project')->num_rows();
$jmlforum = $this->model_utama->view('forum')->num_rows();
$jmlkategori = $this->model_utama->view('kategoriforum')->num_rows();
$jmlkomentar = $this->model_utama->view('komentarforum')->num_rows();
?>	
<?php 
if($this->uri->segment(1) <> 'invoice' and $this->uri->segment(1) <> 'Invoice'){
?><header class="sb-page-header">

<div class="container text-left">
	<h1 class="animated fadeIn"  style="color: #ffffff;">RuangCoding</h1>
	<h3 class="animated fadeIn"  style="color: #ffffff;">Media belajar online yang akan membantumu <br/>mengembangkan keahlianmu dalam bidang pemrograman</h3>
	<h3 class="animated fadeIn"  style="color: #ffffff; weight:bold;">#staysafe #dirumahaja</h3>
	<h3 class="animated fadeIn"><a href="<?php base_url() ?>upgrade" class="btn btn-success form-control" style="width: 20%; min-width:150px;  margin: 0 auto;">Daftar Sekarang</a></h3>
	
	
</div>
</header>
<?php
}
?>
    	<?php echo $contents; 
		$this->model_utama->kunjungan(); 
		?>

<?php 
if($this->uri->segment(1) <> 'invoice'){
?>		
<br/><br/><br/><br/><br/>
<footer style="background:#f4f4f4; border-top:5px solid #e3e3e3">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p style="text-align:center; padding-top:5px;">
				  Members Area - Komunitas Private Training Web Development.
					<br>Copyright © 2017, Develop by <a href="https://www.facebook.com/dankrez48">Wildan Agissa Rusadi</a> | <a href="http://members.lokomedia.web.id/page/statis/kebijakan-privasi">Privacy Policy</a> | <a href="https://members.lokomedia.web.id/page/statis/syarat-dan-ketentuan">Terms of Service</a>.

				</p>
			</div>
		</div>
	</div>

</footer>

<?php
}
?>		
    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
            class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
	
	

<!-- ================== BEGIN BASE JS ================== -->
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/crossbrowserjs/html5shiv.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/crossbrowserjs/respond.min.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery-cookie/js.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/app.js"></script>


<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/isotope/jquery.isotope.min.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/gallery_demo.js"></script>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/app.js"></script>

<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
		Gallery.init();
    });
</script>
<script>
	if ($(window).width() > 500) {
		var x = document.getElementById("keluar");
		x.style.display = "none";
		  
	}
</script>
</body>
</html>