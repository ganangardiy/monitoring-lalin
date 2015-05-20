<div class="span8" style="margin-left: 20pt;">
		<h4>System Log</h4>
			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>
							User
						</th>
						<th>
							Activity
						</th>
						<th>
							Time
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<?php 
				foreach($post as $table){?>
				<tbody>
					<tr>
						<td>
							<?php echo $table->user;?>
						</td>
						<td>
							<?php echo $table->aktifitas;?>
						</td>
						<td>
							<?php echo $table->tgl;?>
						</td>
						<td>
							<?php 
									if($table->status=='1'){
										echo '#Sukses';
									}else{
										echo '#Gagal';
									}
							?>
						</td>
					</tr>
				</tbody>
				<?php };?>
			</table>