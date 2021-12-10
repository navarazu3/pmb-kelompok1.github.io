<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>pmb</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
</head>

<body>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Mh Add</h3>
            </div>
            <?php echo form_open('mh/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
          			<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ttl" class="control-label">Tempat Tanggal Lahir</label>
						<div class="form-group">
							<input type="date" name="ttl" value="<?php echo $this->input->post('ttl'); ?>" class="has-datepicker form-control" id="ttl" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nohp" class="control-label">Nomor HP</label>
						<div class="form-group">
							<input type="text" name="nohp" value="<?php echo $this->input->post('nohp'); ?>" class="form-control" id="nohp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asal_sekolah" class="control-label">Asal Sekolah (SMA sederajat)</label>
						<div class="form-group">
							<input type="text" name="asal_sekolah" value="<?php echo $this->input->post('asal_sekolah'); ?>" class="form-control" id="asal_sekolah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_ortu" class="control-label">Nama Ayah/Ibu/Wali</label>
						<div class="form-group">
							<input type="text" name="nama_ortu" value="<?php echo $this->input->post('nama_ortu'); ?>" class="form-control" id="nama_ortu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nohp_ortu" class="control-label">Nomor HP Orang Tua/Wali</label>
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
						<div class="form-group">
							<input type="hidden" name="is_activated" value="1" class="form-control" id="is_activated" />
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
</body>

</html>