<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pendaftaran Mahasiswa Baru</h3> 
            </div>
            <?php echo form_open('mh/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ttl" class="control-label">Ttl</label>
						<div class="form-group">
							<input type="text" name="ttl" value="<?php echo $this->input->post('ttl'); ?>" class="has-datepicker form-control" id="ttl" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nohp" class="control-label">Nohp</label>
						<div class="form-group">
							<input type="text" name="nohp" value="<?php echo $this->input->post('nohp'); ?>" class="form-control" id="nohp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asal_sekolah" class="control-label">Asal Sekolah</label>
						<div class="form-group">
							<input type="text" name="asal_sekolah" value="<?php echo $this->input->post('asal_sekolah'); ?>" class="form-control" id="asal_sekolah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_ortu" class="control-label">Nama Ortu</label>
						<div class="form-group">
							<input type="text" name="nama_ortu" value="<?php echo $this->input->post('nama_ortu'); ?>" class="form-control" id="nama_ortu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nohp_ortu" class="control-label">Nohp Ortu</label>
						<div class="form-group">
							<input type="text" name="nohp_ortu" value="<?php echo $this->input->post('nohp_ortu'); ?>" class="form-control" id="nohp_ortu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="agama" class="control-label">Agama</label>
						<div class="form-group">
							<input type="text" name="agama" value="<?php echo $this->input->post('agama'); ?>" class="form-control" id="agama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_activated" class="control-label">Is Activated</label>
						<div class="form-group">
							<input type="text" name="is_activated" value="<?php echo $this->input->post('is_activated'); ?>" class="form-control" id="is_activated" />
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