            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pricelist</h3>
				   <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url() . "$this->haladmin/"; ?>tambah_pricelist'>Tambah Pricelist</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>ID</th>
                        <th>Harga </th>
                        <th>Deskripsi </th>
                        <th>Jml. Diskon</th>
                        <th>Diskon Status</th>
                        <th>Harga Nett</th>
                        <th>Active</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($datapricelist as $row){
                    echo "<tr><td>$row[id_harga]</td>
                             
                              <td>$row[harga]</td>
                              <td>$row[deskripsi]</td>
                              <td>$row[jum_diskon]</td>
                              <td>$row[diskon]</td>
                              <td>$row[nett]</td>
							  <td>$row[aktif]</td>
                              <td><center>
							  <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."$this->haladmin/edit_pricelist/$row[id_harga]'><span class='glyphicon glyphicon-edit'></span></a>
                              <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."$this->haladmin/delete_pricelist/$row[id_harga]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>