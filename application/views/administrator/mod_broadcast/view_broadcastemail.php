            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Broadcast Email</h3>
				   <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url() . "$this->haladmin/"; ?>tambah_broadcastemail'>Broadcast Baru</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Nama Pengirim </th>
                        <th>Email Pengirim </th>
                        <th>Subjek</th>
                        <th>Penerima</th>
                        <th>Tanggal</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    $tgl = tgl_indo($row['tanggal']);
                    if ($row['dibaca']=='N'){ $bold = 'bold'; }else{ $bold = 'none'; }
                    echo "<tr style='font-weight:$bold'><td>$no</td>
                              <td>$row[nama_sender]</td>
                              <td>$row[email_sender]</td>
                              <td>$row[subject]</td>
                              <td>$row[penerima]</td>
                              <td>$row[tgl_kirim]</td>
                              
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."$this->haladmin/detail_pesanmasuk/$row[id_hubungi]'><span class='glyphicon glyphicon-send'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."$this->haladmin/delete_pesanmasuk/$row[id_hubungi]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>