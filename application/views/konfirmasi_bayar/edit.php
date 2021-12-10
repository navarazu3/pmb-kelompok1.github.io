<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Konfirmasi Bayar Edit</h3>
            </div>
			<?php echo form_open('konfirmasi_bayar/edit/'.$konfirmasi_bayar['npm']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ijazah" class="control-label">Ijazah</label>
						<div class="form-group">
							<input type="text" name="ijazah" value="<?php echo ($this->input->post('ijazah') ? $this->input->post('ijazah') : $konfirmasi_bayar['ijazah']); ?>" class="form-control" id="ijazah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bukti_bayar" class="control-label">Bukti Bayar</label>
						<div class="form-group">
							<input type="text" name="bukti_bayar" value="<?php echo ($this->input->post('bukti_bayar') ? $this->input->post('bukti_bayar') : $konfirmasi_bayar['bukti_bayar']); ?>" class="form-control" id="bukti_bayar" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>