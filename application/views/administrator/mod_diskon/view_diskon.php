            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Diskon</h3>
				   <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url() . "$this->haladmin/"; ?>tambah_diskon'>Tambah Diskon</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>ID</th>
                        <th>Tanggal Mulai </th>
                        <th>Tanggal Akhir </th>
                        <th>Status</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($datadiskon as $row){
                    echo "<tr><td>$row[id]</td>
                             
                              <td>$row[tgl_mulai]</td>
                              <td>$row[tgl_akhir]</td>
                              <td>";
                              if($row['aktif'] == "Y"){
                                if(date('Y-m-d',strtotime($row['tgl_akhir'])) < date('Y-m-d')){
                                    echo "Expired";   
                                }elseif(date('Y-m-d',strtotime($row['tgl_mulai'])) > date('Y-m-d')){
                                    echo "Upcoming";  
                                }else{
                                    echo "Aktif" ;
                                }
                              }else{
                                echo "Non Aktif";    
                              }
                              echo "</td>
                              
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."$this->haladmin/edit_diskon/$row[id]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."$this->haladmin/hapus_diskon/$row[id]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>