<script>
function confirm_approve(x){
	swal({
  title: "Anda Yakin?",
  text: "Invoice nomor " + x + " akan di approve",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willApprove) => {
  if (willApprove) {
    swal("Invoice nomor " + x + " berhasil di Approve!", {
      icon: "success",
    })
	.then(
	function() {
		window.location = "approveinvoice/"+x;
	});
  }
});
}
</script>

            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manajemen Invoice</h3>
                 
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
						<th class="sorting_desc">id_inv</th>
						<th style='width:70px'>Action</th>
                        <th>WA</th>
                        <th>Nominal</th>
                        <th>Nama Lengkap</th>
                        <th>email</th>
						<th>Username</th>
                        <th>paket</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
					$no = 1;
                    foreach ($invoice->result_array() as $row){										$paket = $row['deskripsi'];
					$telpon = $row['no_telp'];
					if(substr($telpon,0,1) == "0"){
						$telpon = "62" . substr($telpon,1,15);
					}
					
                    echo "<tr><td>$row[id_invoice]</td>";
					if($row['status'] == "pending"){
					?>
						<td><center><a class='btn btn-default  btn-xs' onclick="return confirm_approve(<?php echo $row['id_invoice'];?>)">Approve</a> &nbsp;</center></td>
                    <?php 
						
						if($row['statustelpon'] == 'invalid'){
							echo "<td>invalid ";
								
								echo "</td>";
						}elseif($row['statustelpon'] == 'ok'){
							echo "<td>ok &nbsp;";
							echo "<a target='_blank' href='https://api.whatsapp.com/send?phone=". $telpon . "'><img style='width:20px;' src='". base_url() . "asset/images/wa.png'></a>";
						}else{
							/* This sets the $time variable to the current hour in the 24 hour clock format */
							$time = date("H");
							/* Set the $timezone variable to become the current timezone */
							$timezone = date("e");
							/* If the time is less than 1200 hours, show good morning */
							if ($time < "12") {
								$greetings = "Selamat pagi";
							} else
							/* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
							if ($time >= "12" && $time < "17") {
								$greetings =  "Selamat siang";
							} else
							/* Should the time be between or equal to 1700 and 1900 hours, show good evening */
							if ($time >= "17" && $time < "19") {
								$greetings =  "Selamat sore";
							} else
							/* Finally, show good night if the time is greater than or equal to 1900 hours */
							if ($time >= "19") {
								$greetings =  "Selamat malam";
							}
							
							echo "<td><a target='_blank' href='https://api.whatsapp.com/send?phone=". $telpon . "&text=Selamat%20siang%20pak%20". $row['nama_lengkap'] ."%2C%0A%0Asaya%20wildan%2C%20admin%20members.lokomedia.web.id%0AApakah%20bapak%20masih%20berminat%20untuk%20upgrade%20ke%20premium%20member%20lokomedia%3F'><img style='width:20px;' src='". base_url() . "asset/images/wa.png'></a>";
							echo "<a href='". base_url() ."$this->haladmin/phone_ok/$row[username]' class='btn btn-success' style='font-size:8pt;'>OK</a><a href='". base_url() ."$this->haladmin/phone_invalid/$row[username]' class='btn btn-danger' style='font-size:8pt;'>Invalid</a></td>";
						}
							
					}else{
						echo "<td></td>";
						echo "<td></td>";
					}		
						echo " 
						<td align='right'>Rp ". number_format($row['nominal']) . "</td>
						<td>$row[nama_lengkap]</td>
						<td>$row[email]</td>";
						if($row['level'] == 'premium'){
							echo "<td style='color:green'>$row[username]</td>";
						}else{
							echo "<td style='color:red'>$row[username]</td>";
						}
						echo "<td>$paket</td>
						<td>$row[status]</td>
                             
                              
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>