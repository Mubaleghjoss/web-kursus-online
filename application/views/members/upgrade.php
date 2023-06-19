<script>
function konfirm(x, y){
swal("Anda memilih upgrade premium member untuk waktu \n" + y, {
  buttons: {
    cancel: "Cancel",
    next: {
      text: "Lanjutkan",
      value: "next",
    }
  },
})
.then((value) => {
  switch (value) {
 
    case "next":
      swal("Permintaan diproses", "Invoice telah disubmit ke sistem", "success")
	  .then(
	  function() {
		window.location = "upgrade/order/"+x;
	  });
 
  }
});
}
</script>

<style>
#countdown{
	width:auto;
	max-width: 465px;
	height: 160px;
	text-align: center;
	background: #444;
	background-image: -webkit-linear-gradient(top, #222, #333, #333, #222); 
	background-image:    -moz-linear-gradient(top, #222, #333, #333, #222);
	background-image:     -ms-linear-gradient(top, #222, #333, #333, #222);
	background-image:      -o-linear-gradient(top, #222, #333, #333, #222);
	border: 1px solid #111;
	border-radius: 5px;
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
	margin: auto;
	padding: 24px 0;
	position: relative;
  top: 0; bottom: 0; left: 0; right: 0;
}

#countdown:before{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; left: -10px;
}

#countdown:after{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; right: -10px;
}

#countdown #demo{
	position: relative;
	z-index: 1;
}

#countdown #demo > span{
	width: 92px;
	max-width: 92px;
	font: bold 48px 'Droid Sans', Arial, sans-serif;
	text-align: center;
	color: #111;
	background-color: #ddd;
	background-image: -webkit-linear-gradient(top, #bbb, #eee); 
	background-image:    -moz-linear-gradient(top, #bbb, #eee);
	background-image:     -ms-linear-gradient(top, #bbb, #eee);
	background-image:      -o-linear-gradient(top, #bbb, #eee);
	border-top: 1px solid #fff;
	border-radius: 3px;
	box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
	margin: 0 7px;
	padding: 18px 0;
	display: inline-block;
	position: relative;
}

#countdown #demo > span:before{
	content:"";
	width: 100%;
	height: 13px;
	background: #111;
	display: block;
	padding: 0 3px;
	position: absolute;
	top: 41%; left: -3px;
	z-index: -1;
}

#countdown #demo > span:after{
	content:"";
	width: 100%;
	height: 1px;
	background: #eee;
	border-top: 1px solid #333;
	display: block;
	position: absolute;
	top: 48%; left: 0;
}

#countdown .labels{
	width: 100%;
	height: 25px;
	text-align: center;
	position: absolute;
	bottom: 8px;
}

#countdown .labels li{
	width: 102px;
	font: bold 15px 'Droid Sans', Arial, sans-serif;
	color: #f47321;
	text-shadow: 1px 1px 0px #000;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post text">
				<!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel --> 
                <div style="border:1px solid #999" class="panel panel-inverse"  data-sortable-id="table-basic-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Upgrade Premium Members</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>PAKET</th>
                                    <th>HARGA</th>
                                    <th>NETT</th>
                                    <th>UPGRADE</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
								
								foreach ($pricelist->result_array() as $r) {
								if ($discount > 0){
									$diskon = number_format($r['jum_diskon']);
									$nett = $r['nett'];
								}else{
									$diskon = "-";
									$nett = $r['harga'];
								}
								
								echo "<tr>";
								echo "<td style='vertical-align:middle;'>". $r['deskripsi'] ."</td>";
								if ($r['diskon'] == 'Y' and $discount > 0){
									echo "<td style='vertical-align:middle; font-size:14px;'>";
									if($r['deskripsi'] == "Permanen"){
										echo "<img style='height:50px; width:auto;' src='". base_url() . "asset/images/30persen.jpg" ."'>";
									}else{
										echo "<img style='height:50px; width:auto;' src='". base_url() . "asset/images/30persen.jpg" ."'>";
									}	
									echo "&nbsp;<b><strike>". number_format($r['harga']) ."</strike></b></td>";
								}else{
									echo "<td style='vertical-align:middle;'><b>". number_format($r['harga']) ."</b></td>";
								}
								//if ($r['diskon'] == 'Y'){
								//	if($r['deskripsi'] == "Permanen"){
								//	echo "<td><span style='color:red;'>-". $diskon ." <b>(35%)</b></span></td>";
								//}	
								//else{
								//	echo "<td><span style='color:red;'>-". $diskon ."</span></td>";
								//}
								//}else{
								//	echo "<td>-</td>";
								//}
								echo "<td style='vertical-align:middle;'><b>". number_format($nett) ."</b></td>";
								echo "<td style='vertical-align:middle;'>";
								if($this->session->username <> ''){
								?>
									<a onclick="konfirm(<?php echo $r['id_harga']; ?>, '<?php echo $r['deskripsi'];?>')" class="btn btn-primary btn-xs m-r-5">&nbsp;Pilih Paket&nbsp;</a>
								<?php
								}else{
									echo "silahkan login untuk pilih paket";
								}
								echo "</td>";
								echo "</tr>";
								}
								?>
                               
								</tbody>
                            </table>
                        </div>					</div>
				</div>
                <!-- end panel -->
               
            </div>
            <!-- end col-6 -->
			
			
			<!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="ui-media-object-3" style="border:1px solid #999">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Rekening Bank</h4>
                    </div>
                    <div class="panel-body">
                        
                        <div class="media">
                            <a class="media-left" href="javascript:;">
                                <img src="<?php echo base_url();?>asset/images/logo_bankmandiri.png" alt="" class="media-object"/>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Bank Mandiri</h4>
                                Nomor Rekening : <b>9000019999805</b><br/>
								Atas Nama : Wildan Agissa Rusadi<br/>
								Cabang : Tambun Selatan, Kab. Bekasi<br/>
								Swift Code : BMRIIDJA
                            </div>
                        </div>
						<div class="media">
                            <a class="media-left" href="javascript:;">
                                <img src="<?php echo base_url();?>asset/images/bca_bank.png" alt="" class="media-object"/>
                            </a>
							<div class="media-body">
                                <h4 class="media-heading">Bank BCA</h4>
                                Nomor Rekening : <b>4860157689 </b><br/>
								Atas Nama : Wildan Agissa Rusadi<br/>
								Cabang : Kawasan Industri MM 2100, Kab. Bekasi<br/>
								Swift Code : CENAIDJA
                            </div>
                        </div>
						
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
				<!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel --> 
                <div style="border:1px solid #999" class="panel panel-inverse"  data-sortable-id="table-basic-1">
                    <div class="panel-heading">
                        <h4 class="panel-title"><b>Diskon : </b>(Akan Berakhir / Sisa Waktu)</h4>
                    </div>
					
                    <div class="panel-body">
					<div id="countdown">
					  <div id="demo">
					  <?php 
						if (date("Y-m-d H:i:s", date()) > date("Y-m-d H:i:s", $tgl_akhir)){
						?>
							<span>00</span><span>00</span><span>00</span><span>00</span>
						<?php
						}
						?>
					  </div>
					  <div class="labels">
						<li>Hari</li>
						<li>Jam</li>
						<li>Menit</li>
						<li>Detik</li>
					  </div>
					</div>
						<?php 
						if (date("Y-m-d H:i:s") < $tgl_akhir){
						?>
							<script>
							// Set the date we're counting down to
							var countDownDate = new Date("<?php echo $tgl_akhir; ?>").getTime();

							// Update the count down every 1 second
							var x = setInterval(function() {

							  // Get todays date and time
							  var now = new Date().getTime();

							  // Find the distance between now an the count down date
							  var distance = countDownDate - now;

							  // Time calculations for days, hours, minutes and seconds
							  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

							  // Display the result in the element with id="demo"
							  document.getElementById("demo").innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>"
							  + minutes + "</span><span>" + seconds + "</span>";

							  // If the count down is finished, write some text 
							  if (distance < 0) {
								clearInterval(x);
								document.getElementById("demo").innerHTML = "EXPIRED";
							  }
							}, 1000);
							</script>
						<?php
						}else{
						?>
							<script>
							// Set the date we're counting down to
							var countDownDate = new Date("<?php echo $tgl_akhir; ?>").getTime();

							// Update the count down every 1 second
							var x = setInterval(function() {

							  // Get todays date and time
							  var now = new Date().getTime();

							  // Find the distance between now an the count down date
							  var distance = countDownDate - now;

							  // Time calculations for days, hours, minutes and seconds
							  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

							  // Display the result in the element with id="demo"
							  document.getElementById("demo").innerHTML = "<span>" + 0 + "</span><span>" + 0 + "</span><span>"
							  + 0 + "</span><span>" + 0 + "</span>";

							  // If the count down is finished, write some text 
							  if (distance < 0) {
								clearInterval(x);
								document.getElementById("demo").innerHTML = "EXPIRED";
							  }
							}, 1000);
							</script>
						<?php
						}
						?>
						
                    </div>
					
                </div>
                
            </div>
            <!-- end col-6 -->
					
			
			<!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="ui-media-object-3" style="border:1px solid #999">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Konfirmasi Pembayaran</h4>
                    </div>
                    <div class="panel-body">
                        
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="<?php echo base_url();?>asset/images/whatsapp.png"  style="width:70px;" alt="" class="media-object"/>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Whatsapp</h4>
                                <h4><?php echo $iden['no_telp']; ?></h4>
                            </div>
                        </div>
						
                        
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->			

			<!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="ui-media-object-3" style="border:1px solid #999">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Langkah Upgrade ke Premium Members</h4>
                    </div>
                    <div class="panel-body">
                        
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="<?php echo base_url();?>asset/images/upgrade.png"  style="width:70px;" alt="" class="media-object"/>
                            </a>
                            <div class="media-body">
                                <p>1. Anda sudah registrasi member di <a href=<?php echo $iden['url'];?>/register"><?php echo $iden['url']; ?>/register</a></p>
								<p>2. Verifikasi akun anda. Akan ada pesan konfirmasi ke alamat email anda. Klik link tombol verifikasinya di email tersebut.</p>
								<p>3. Login kembali ke akun anda, lalu di halaman upgrade ini, pilih/klik salah satu paket upgrade diatas.</p>
								<p>5. Akan muncul halaman invoice yang harus segera dibayarkan.</p>
								<p>6. Konfirmasikan pembayaran ke alamat whatsapp diatas.</p>
								<p>7. Account anda segera diupgrade ke premium member oleh tim kami.</p>
                            </div>
                        </div>
						
                        
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->		
			
			</div>
		</div>
	</div>
</div>

