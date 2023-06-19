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
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/hl/foundation.css">
	
	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
	
	
</head>
<body>
<div id="posts">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="post text">
					
					
					<div class="col-md-8">
			<?php 	foreach ($invoice1->result_array() as $r2) { ?> 
						<!-- begin invoice -->
						<div class="invoice" style="border: 1px solid;">
							<div class="invoice-company">
								<span class="pull-right hidden-print">
								<?php  
								if($r2['status'] == 'pending'){
								?>
									<a href="<?php echo base_url() . "invoice/cancel/" . $r2['id_invoice'];?>" class="btn btn-sm btn-default m-b-10"><i class="fa fa-warning m-r-5"></i> Cancel Invoice</a> 
								<?php
								}
								?>
								<a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-success m-b-10"><i class="fa fa-print m-r-5"></i> Print</a>
								</span> 
								INVOICE # <?php echo $r2['id_invoice']; ?>
							</div>
							<div class="invoice-header">
								<div class="invoice-from">
									<small>from</small><address class="m-t-5 m-b-5"><strong><?php echo $iden['nama_website'] ?></strong>									<br/> Mob. Phone: <?php echo $iden['no_telp'] ?><br/></address>
								</div>
								<div class="invoice-to">
									<small>to</small><address class="m-t-5 m-b-5"><strong><?php echo $r2['nama_lengkap'];?></strong><br/><?php echo $r2['alamat'];?>
									<br/> Mob. Phone: <?php echo $r2['no_telp'];?></address>
								</div>
								<div class="invoice-date">
									<div class="date m-t-5">
									<?php echo $r2['tgl_invoice'];?></div>
									<div class="invoice-detail">
										 INVOICE #<?php echo $r2['id_invoice'];?>
										<br/>
									</div>
								</div>
							</div>
							<div class="invoice-content">
								<div class="table-responsive">
									<table class="table table-invoice">
									<thead>
									<tr>
										<th>No. INV</th>
										<th>TANGGAL</th>
										<th>NOMINAL</th>
										<th>DESKRIPSI ORDER</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>
										<?php echo $r2['id_invoice'];?></td>
										<td>
										<?php echo $r2['tgl_invoice'];?></td>
										<td>
											Rp <?php echo number_format($r2['nominal']);?></td>
										<td>
										<?php echo $r2['deskripsi'];?></td>
									</tr>
									</tbody>
									</table>
								</div>
								<div class="invoice-price">
									<div class="invoice-price-left">
										 STATUS INVOICE: 
										 <?php 					    					   
										 if($r2['status'] == "pending"){
												echo "BELUM DIBAYAR";
											 }elseif($r2['status'] == "paid"){
												echo "LUNAS";
											 }elseif($r2['status'] == "cancel"){
												 echo "CANCEL";
											 }
										 ?>
									</div>
									<div class="invoice-price-right">
										<small>TOTAL</small>
										Rp <?php echo number_format($r2['nominal']);?>
									</div>
								</div>
							</div>
							<div class="invoice-note">
								<span style="color : #999;"># Akun premium members aktif dari tanggal ( <?php echo ($r2['tgl_dibayar']);?> ) s/d tanggal ( <?php echo ($r2['tgl_expired']);?> )</span><br/>
								* Pembayaran ditransfer ke rekening :<br/> BANK &nbsp;&nbsp; : MANDIRI 
								<br/> No. Rek : 9000019999805 
								<br/> a/n WILDAN AGISSA RUSADI 
							</div>
							<div class="invoice-note">
								 ATAU :<br/> BANK &nbsp;&nbsp; : BCA 
								<br/> No. Rek : 4860157689 
								<br/> a/n WILDAN AGISSA RUSADI 
							<div class="invoice-note">
								* Konfirmasi pembayaran via SMS/WA ke : 
								<br/><?php echo $iden['no_telp'] ?>
							</div>
							<div class="invoice-footer text-muted">
								<p class="text-center m-b-5">
									 Lekas beritahu Kami jika ada pertanyaan mengenai Invoce ini. Terimakasih
								</p>
								<p class="text-center">
									<span class="m-r-10"><i class="fa fa-globe"></i> <?php echo $iden['url']; ?></span>
									<span class="m-r-10"><i class="fa fa-phone"></i> T:<?php echo $iden['no_telp']; ?></span>
									<span class="m-r-10"><i class="fa fa-envelope"></i> <?php echo $iden['email_admin']; ?></span>
								</p>
							</div>
						</div>
						<!-- end invoice -->
						<?php
		}
		?></div>
					<style>
						.foo { 
							position: fixed;
							bottom: 0;
							width: 1170px;
							text-align: center;
							padding: 0px 0 10px;
							margin-bottom: 0px;
						}
					</style>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>