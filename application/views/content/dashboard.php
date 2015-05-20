<div class="span8" style="margin-left: 20pt;">
			<div class="hero-unit well">
				<h1>
					Selamat datang !
				</h1>
				<p>
					Ini adalah dashboard dari Sistem Monitoring Lalu Lintas Universitas Negeri Semarang. Silahkan mengakses fungsi sistem dari menu navbar sebelah kiri.
				</p>
			</div>
		<div class="row">
		<div class="span8">
			<ul class="thumbnails">
				<li class="span4">
					<div class="thumbnail">
						<div class="caption">
							<h3>
								You have
							</h3>
				<table class="table">
					<tr>
						<td>
							<?php echo $jumlahkameraaktif; ?>
						</td>
						<td>
							Camera Actived
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $jumlahkameradeaktif; ?>
						</td>
						<td>
							Camera Deactived
						</td>
					</tr>
					<tr>
						<td>
							5
						</td>
						<td>
							Backup File
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $jumlahdisk; ?>
						</td>
						<td>
							Disk Device
						</td>
					</tr>
					<tr>
						<td>
							<?php echo $internet; ?>
						</td>
						<td>
							Internet Access
						</td>
					</tr>

				</table>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<div class="caption">
							<h3>
								System
							</h3>
			<table class="table">
					<tr>
						<td>
							Board
						</td>
						<td>
							<?php echo $board; ?>
						</td>
					</tr>
					<tr>
						<td>
							Machine
						</td>
						<td>
							<?php echo $machine; ?>
						</td>
					</tr>
					<tr>
						<td>
							CPU model
						</td>
						<td>
							<?php echo $cpumodel; ?>
						</td>
					</tr>
					<tr>
						<td>
							Memory
						</td>
						<td>
							<?php echo $used; ?> / <?php echo $total; ?> kB
						</td>
					</tr>
					<tr>
						<td>
							Space
						</td>
						<td>
							<?php echo $dused; ?> / <?php echo $dtotal; ?> kB
						</td>
					</tr>
					<tr>
						<td>
							Uptime
						</td>
						<td>
							<?php echo "$hours:$minutes:$seconds" ?>
						</td>
					</tr>
					
				</table>
			</ol>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>