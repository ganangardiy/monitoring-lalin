<div class="span8" style="margin-left: 20pt;">
<h4>Live view camera</h4>
<ul class="thumbnails">
	<?php foreach ($kamera as $dat){?>
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="http://192.168.1.1/shot.jpg" />
						<div class="caption">
							<center><h5><?php echo $dat->nama?></h5></center>
							<p><i>
								Latitude 	: <?php echo $dat->alamat?><br>
								Status		: Actived<br>
								Last Backup : 2 days ago<br>
								</i>
							</p>
							<p>
								<center><a class="btn" href="#" onclick="window.open('<?=base_url();?>index.php/welcome/stream/<?php echo $dat->ip;?>','','width=370,height=320')">Live view</a><center>
							</p>
						</div>
					</div>
				</li>
	<?php };?>
</ul>

					