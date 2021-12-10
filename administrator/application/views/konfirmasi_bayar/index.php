<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Konfirmasi Bayar Listing</h3>
            	<div class="box-tools"> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Npm</th>
						<th>Ijazah</th>
						<th>Bukti Bayar</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($konfirmasi_bayar as $k){ ?>
                    <tr>
						<td><?php echo $k['npm']; ?></td>
						<td><?php echo $k['ijazah']; ?></td>
						<td><?php echo $k['bukti_bayar']; ?></td>
						<td>
                            <?php echo anchor('konfirmasi_bayar/download/'.$k['bukti_bayar'], 'Download'); ?>
                            <a href="<?php echo site_url('konfirmasi_bayar/remove/'.$k['npm']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
