<div class="span8" style="margin-left: 20pt;">
		<h4>System Backup</h4>
			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>
							File Backup
						</th>
						<th>
							Status
						</th>
						<th>
							Streaming
						</th>
					</tr>
				</thead>
				<?php 
				foreach($post as $table){?>
				<tbody>
					<tr>
						<td>
							<?php echo $table->tgl;?>
						</td>
						<td>
							<?php 
									if($table->status=='1'){
										echo '#Deleted by System';
									}else if($table->status=='2'){
										?><a href="http://192.168.1.1/backup/<?php echo $table->file; ?>/movie.mp4";>#Ready For Download</a><?php 
									}else{
										echo '#Deleted';
									}
								?>
							
						</td>
						<td>
							<center><a class="btn" href="#" onclick="window.open('<?=base_url();?>index.php/welcome/storage/<?php echo $table->file; ?>','','width=370,height=320')">View</a><center>
						</td>
					</tr>
				</tbody>
				<?php };?>
			</table>