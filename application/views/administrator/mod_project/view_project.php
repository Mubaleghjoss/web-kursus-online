            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Semua project</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url() . "$this->haladmin/"; ?>tambah_listproject'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Judul project</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Free / Premium</th>
                        <th style='width:75px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    $tgl_posting = tgl_indo($row['tanggal']);
                    if ($row['status']=='Y'){ $status = '<span style="color:green">Published</span>'; }else{ $status = '<span style="color:red">Unpublished</span>'; }
					if ($row['free']=='Y'){ $status = '<span style="color:green">Free</span>'; }else{ $status = '<span style="color:#f39c12">Premium</span>'; }
                    echo "<tr><td>$no</td>
                              <td>$row[judul]</td>
                              <td>$tgl_posting</td>
                              <td>$status</td>
                              <td>$row[free]</td>
                              <td><center>
                                <a class='btn btn-primary btn-xs' title='Edit Data' href='".base_url()."$this->haladmin/publish_listproject/$row[id_project]/$row[status]'><span class='glyphicon glyphicon-ok'></span></a>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."$this->haladmin/edit_listproject/$row[id_project]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."$this->haladmin/delete_listproject/$row[id_project]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>