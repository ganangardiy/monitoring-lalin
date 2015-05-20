<div class="span8" style="margin-left: 20pt;">
<div class="container">
	<div class="row">
		<div class="span12">
			<?php foreach ($tagline as $dat) {?>
			<?php echo form_open('welcome/setting/tagline');?>
			<form>
				<fieldset>
					 <legend>Konfigurasi Tagline</legend> <?php $input = array('name' => 'tagline', 'class' => 'form-control input-lg', 'type'=>'text', 'id'=>'lat', 'value'=>$dat->tagline); echo form_input($input); ?> <span class="help-block"></span>
				</fieldset>
				<?php echo form_submit('submit','Simpan','class="btn btn-primary"','type="submit"')?>
			</form>
			<?php echo form_close(); ?>
			<?php } ?>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<?php foreach ($web as $dat) {?>
			<?php echo form_open('welcome/setting/jadwal');?>
			<form>
				<fieldset>
					 <legend>Konfigurasi Backup</legend> <?php $input = array('name' => 'jam', 'class' => 'form-control input-lg', 'type'=>'text', 'id'=>'lat', 'value'=>$dat->jam); echo form_input($input); ?> : <?php $input = array('name' => 'menit', 'class' => 'form-control input-lg', 'type'=>'text', 'id'=>'lat', 'value'=>$dat->menit); echo form_input($input); ?><span class="help-block">*Isi Jam dan Menit</span>
				</fieldset>
				<?php echo form_submit('submit','Simpan','class="btn btn-primary"','type="submit"')?>
			</form>
			<?php echo form_close(); ?>
			<?php } ?>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<legend>Konfigurasi Kamera</legend>
			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>
							Nama
						</th>
						<th>
							Alamat
						</th>
						<th>
							Ip
						</th>
						<th>
							Aksi
						</th>
					</tr>
				</thead>
				<?php 
				foreach($kamera as $dat){?>
				<tbody>
					<tr>
						<td>
							<?php echo $dat->nama;?>
						</td>
						<td>
							<?php echo $dat->alamat;?>
						</td>
						<td>
							<?php echo $dat->ip;?>
						</td>
						<td>
							<center><a class="btn" href="#" onclick="window.open('<?=base_url();?>index.php/welcome/setting/settingkamera/<?php echo $dat->id;?>','','width=370,height=320')">Edit</a><center>
						</td>
					</tr>
				</tbody>
				<?php };?>
			</table>
		</div>
	</div>
</div>
</div>