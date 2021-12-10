<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Konfirmasi Bayar Add</h3>
            </div>
            <?php echo form_open_multipart('konfirmasi_bayar/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
            <label for="npm" class="control-label">NPM</label>
            <div class="form-group">
              <input type="text" name="npm" readonly="true" value="<?php echo $this->session->userdata('npm'); ?>" class="form-control" id="npm" />
            </div>
          </div>
          <div class="col-md-6">
						<label for="ijazah" class="control-label">Ijazah</label>
						<div class="form-group">
							<input type="file" name="ijazah" multiple="True" value="<?php echo $this->input->post('ijazah'); ?>" class="form-control" id="ijazah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bukti_bayar" class="control-label">Bukti Bayar</label>
						<div class="form-group">
							<input type="file" name="bukti_bayar" multiple="True" value="<?php echo $this->input->post('bukti_bayar'); ?>" class="form-control" id="bukti_bayar" />
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