
<div class="box box-success">
    <div class="box-header">
    <i class="fa fa-th-list"></i>
    <h3 class="box-title">Data Upgrade Premium</h3>
        <div class="box-tools pull-right">
           <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
        </div>

<div class="box-body chat" id="chat-box">
<table class="table table-bordered table-striped dataTable no-footer" cellpadding="10">
    <thead>
        <tr>
            <th>Periode</th>
            <th>Jumlah</th>
            <th>Nominal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
			<td><? echo date('F Y'); ?></td>
			<?php
			$jumlah1 = $this->model_app->jumlah_upgrade(date('Y-m-01'), date('Y-m-t'));
            foreach ($jumlah1->result_array() as $rowx1){
				echo "<td>" . number_format($rowx1['jumlah']) . "</td>";
			}
			?>
			<?php
			$grafik1 = $this->model_app->nominal_upgrade(date('Y-m-01'), date('Y-m-t'));
            foreach ($grafik1->result_array() as $row){
				echo "<td>" . number_format($row['total']) . "</td>";
			}
			?>
		</tr>
		<tr>
			<?php 
			if(date('d') == 31){
				$waktu = "-31 days";
			}else{
				$waktu = "-1 Months";
			}
			?>
			<td><? echo date("F Y", strtotime($waktu)) ?></td>
			<?php
			$jumlah2 = $this->model_app->jumlah_upgrade(date('Y-m-01', strtotime($waktu)), date('Y-m-t', strtotime($waktu)));
            foreach ($jumlah2->result_array() as $rowx2){
				echo "<td>" . number_format($rowx2['jumlah']) . "</td>";
			}
			?>
			<?php
			$grafik2 = $this->model_app->nominal_upgrade(date('Y-m-01', strtotime($waktu)), date('Y-m-t', strtotime($waktu)));
            foreach ($grafik2->result_array() as $row2){
				echo "<td>" . number_format($row2['total']) . "</td>";
			}
			?>
		</tr>
		<tr>
			<td><? echo date("F Y", strtotime("-2 Months")) ?></td>
			<?php
			$jumlah3 = $this->model_app->jumlah_upgrade(date('Y-m-01', strtotime("-2 Months")), date('Y-m-t', strtotime("-2 Months")));
            foreach ($jumlah3->result_array() as $rowx3){
				echo "<td>" . number_format($rowx3['jumlah']) . "</td>";
			}
			?>
			<?php
			$grafik3 = $this->model_app->nominal_upgrade(date('Y-m-01', strtotime("-2 Months")), date('Y-m-t', strtotime("-2 Months")));
            foreach ($grafik3->result_array() as $row3){
				echo "<td>" . number_format($row3['total']) . "</td>";
			}
			?>
		</tr>
		<tr>
			<?php 
			if(date('d') == 31){
				$waktu3 = "-92 days";
			}else{
				$waktu3 = "-3 Months";
			}
			?>
			<td><? echo date("F Y", strtotime("-92 Days")) ?></td>
			<?php
			$jumlah4 = $this->model_app->jumlah_upgrade(date('Y-m-01', strtotime($waktu3)), date('Y-m-t', strtotime($waktu3)));
            foreach ($jumlah4->result_array() as $rowx4){
				echo "<td>" . number_format($rowx4['jumlah']) . "</td>";
			}
			?>
			<?php
			$grafik4 = $this->model_app->nominal_upgrade(date('Y-m-01', strtotime($waktu3)), date('Y-m-t', strtotime($waktu3)));
            foreach ($grafik4->result_array() as $row4){
				echo "<td>" . number_format($row4['total']) . "</td>";
			}
			?>
		</tr>
		<tr>
			<td><? echo date("F Y", strtotime("-4 Months")) ?></td>
			<?php
			$jumlah5 = $this->model_app->jumlah_upgrade(date('Y-m-01', strtotime("-4 Months")), date('Y-m-t', strtotime("-4 Months")));
            foreach ($jumlah5->result_array() as $rowx5){
				echo "<td>" . number_format($rowx5['jumlah']) . "</td>";
			}
			?>
			<?php
			$grafik5 = $this->model_app->nominal_upgrade(date('Y-m-01', strtotime("-4 Months")), date('Y-m-t', strtotime("-4 Months")));
            foreach ($grafik5->result_array() as $row5){
				echo "<td>" . number_format($row5['total']) . "</td>";
			}
			?>
		</tr>
		
		
		
    </tbody>
</table>
</div><!-- /.box (chat box) -->

