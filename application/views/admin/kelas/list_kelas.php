    <section class="content">
    	<div class="container-fluid">
    		<div class="block-header">
    			<h2>MAGIC COURSE RUANG KELAS</h2>
    		</div>

    		<!-- Basic Examples -->
    		<div class="row clearfix">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="card">
    					<div class="header">
    						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
    							<center>LIST RUANG KELAS</center>
    						</h2> <br><br>
    						<a href="<?= base_url(); ?>admin/kelas/add_kelas">
    							<button type="button" class="btn btn-info waves-effect">
    								<i class="material-icons">add</i>
    								<span>TAMBAH</span>
    							</button>
    						</a>
    					</div>

    					<div class="body">
    						<div class="table-responsive">
    							<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    								<thead>
    									<tr>
    										<th>No</th>
    										<th>Kode</th>
    										<th>Paket</th>
    										<th>Jadwal</th>
    										<th>Pendaftaran</th>
    										<th>Harga</th>
    										<th>Jumlah</th>
    										<th>Deskripsi</th>
    										<th style="text-align: center;">ACTION</th>
    									</tr>
    								</thead>

    								<tbody>

    									<?php $i = 1;
										foreach ($list_kelas as $kelas) : ?>
    										<tr>
    											<td><?= $i++; ?></td>
    											<td><?= $kelas['kode_kelas'] ?></td>
    											<td><?= $kelas['judul_kelas'] ?></td>
    											<td><?= $kelas['jadwal_kelas'] ?></td>
    											<td>Rp. <?= number_format($kelas['biaya_pendaftaran']) ?></td>
    											<td>Rp. <?= number_format($kelas['harga_kelas']) ?></td>
    											<td><?= get_total_siswa($kelas['id_kelas']) ?> Siswa</td>
    											<td><?= $kelas['deskripsi_kelas'] ?></td>
    											<td style="text-align: center;vertical-align: middle;">
    												<center>
    													<a href="<?= base_url(); ?>admin/kelas/kelas_siswa/<?= $kelas['id_kelas']; ?>" data-toggle="tooltip" data-placement="top" title="View"><i style="color:#00b0e4;" class="material-icons">visibility</i></a>&nbsp;
    													<a href="<?= base_url(); ?>admin/kelas/edit_kelas/<?= $kelas['id_kelas']; ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i style="color:#00b0e4;" class="material-icons">description</i></a>&nbsp;
    													<a href="#" id="btn_posisi" title="Delete" data-id="<?= $kelas['id_kelas'] ?>" data-toggle="modal" data-target="#deleteModal"><i style="color:red;" class="material-icons">delete</i></a>
    												</center>
    											</td>
    										</tr>
    									<?php endforeach; ?>

    								</tbody>
    							</table>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- #END# Basic Examples -->
    	</div>
    	</div>
    </section>

    <!-- Logout Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
    				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">×</span>
    				</button>
    			</div>
    			<div class="modal-body">Apakah anda yakin ingin menghapus kelas ini ?</div>
    			<div class="modal-footer">
    				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    				<a id="hapus_nyo" class="btn btn-primary" href="#">Delete</a>
    			</div>
    		</div>
    	</div>
    </div>
