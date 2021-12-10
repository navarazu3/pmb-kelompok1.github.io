<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List Mahasiswa</h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Npm</th>
						<th>Password</th>
						<th>Email</th>
						<th>Nama</th>
						<th>Ttl</th>
						<th>Alamat</th>
						<th>Nohp</th>
						<th>Asal Sekolah</th>
						<th>Nama Ortu</th>
						<th>Nohp Ortu</th>
						<th>Agama</th>
						<th>Is Activated</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($mhs as $m){ ?>
                    <tr>
						<td><?php echo $m['npm']; ?></td>
						<td><?php echo $m['password']; ?></td>
						<td><?php echo $m['email']; ?></td>
						<td><?php echo $m['nama']; ?></td>
						<td><?php echo $m['ttl']; ?></td>
						<td><?php echo $m['alamat']; ?></td>
						<td><?php echo $m['nohp']; ?></td>
						<td><?php echo $m['asal_sekolah']; ?></td>
						<td><?php echo $m['nama_ortu']; ?></td>
						<td><?php echo $m['nohp_ortu']; ?></td>
						<td><?php echo $m['agama']; ?></td>
						<td><?php echo $m['is_activated']; ?></td>
						<td>
                            <a href="<?php echo site_url('mh/edit/'.$m['npm']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('mh/remove/'.$m['npm']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
