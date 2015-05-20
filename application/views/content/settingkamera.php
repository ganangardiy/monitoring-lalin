<?php foreach ($kamera as $dat) {?>
			<?php echo form_open('welcome/setting/settingkamera/'.$dat->id);?>
			<form>
				<fieldset>
					 <legend>Penjadwalan Backup File</legend> <?php $input = array('name' => 'nama', 'class' => 'form-control input-lg', 'type'=>'text', 'id'=>'lat', 'value'=>$dat->nama); echo form_input($input); ?>
					 <?php $input = array('name' => 'alamat', 'class' => 'form-control input-lg', 'type'=>'text', 'id'=>'lat', 'value'=>$dat->alamat); echo form_input($input); ?>
					 <?php $input = array('name' => 'ip', 'class' => 'form-control input-lg', 'type'=>'text', 'id'=>'lat', 'value'=>$dat->ip); echo form_input($input); ?>
				</fieldset>
				<?php echo form_submit('submit','Simpan','class="btn btn-primary"','type="submit"')?>
			</form>
	<?php echo form_close(); ?>
<?php } ?>