<!-- begin #content -->
    <div id="content" class="content">
        <div id="posts">
        <div class="container">
            <div class="row">
        <div class="col-md-12">
                    <div class="post text">
                        <div class="col-md-4">
	<a class="pull-right" href="https://members.lokomedia.web.id/projects">All Projects</a>
	<h3 style="margin-top:-5px">New Projects</h3>
	

<div class="col-md-4">
	<h3 style="margin-top:-5px">Fresh Members</h3>
	<table style="background:#fff; border-radius:6px;" class="table tblphpmu table-hover animated fadeIn">
		<tbody>
		<?php
		foreach ($users->result_array() as $t) {
		$date1 = date($t['startjoin']);
		$date2 = date("Ymd");

		$diff = abs(strtotime($date2) - strtotime($date1));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		if ($years > 0){
			$join = $years . " Tahun"; 
		}else{
			$join = $months . " Bulan";
		}
		$foto = base_url() . "asset/foto_user/blank.png";
		if($t['foto'] <> ''){									
			$foto = base_url() . "asset/foto_user/" . $t['foto'];	
		}else{
			@$xml=simplexml_load_file("http://picasaweb.google.com/data/entry/api/user/$t[email]");
			if (false === $xml) {
				%foto = base_url() . "asset/foto_user/blank.png";	
			}else{			
				@$foto = $xml->children('gphoto', true)->thumbnail;	
			}
		}	
		
		if($t['level'] == "free"){
			$level = "<span style='color:red;'>Free Member</span>";
		}else{
			$level = "<span style='color:green;'>Premium Member</span>";
		}
	?>
		<tr>
		<td width="55px"><img class="img-circle" style="width:55px; height:49px; border:1px solid #8a8a8a" src="<?php echo $foto;?>" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" title="" data-content="<?php echo $level;?>" data-original-title="<b><?php echo $t['nama_lengkap'];?></b>"></td>
		<td><span style="text-transform:capitalize"><?php echo $t['nama_lengkap'];?></span> 
			<small style="color:#428bca" class="pull-right">Join <?php echo $join;?> lalu</small> <br>
			<small style="text-transform:capitalize"> <a href=" <?php echo base_url();?>members/account/<?php echo $t['username'];?>" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" title="" data-content="<?php echo $level; ?>" data-original-title="<b><?php echo $t['nama_lengkap'];?></b>"><i class="fa fa-key fa-fw"></i> View Recent Activities</a></small>
			<span class="pull-right"><i class="fa fa-star text-yellow"></i><i class="fa fa-star text-yellow"></i><i class="fa fa-star text-yellow"></i><i class="fa fa-star-o text-yellow"></i><i class="fa fa-star-o text-yellow"></i><i class="fa fa-star-o text-yellow"></i><i class="fa fa-star-o text-yellow"></i></span><br>
		</td></tr>
		<?php 
		}
		?>
		</tbody>
	</table>
</div>

<div style="clear:both"></div>
<hr style="margin-top:10px; margin-bottom:10px;">

               </div>  
            </div>    
        </div>
  </div>
    </div>
    <!-- end #content -->