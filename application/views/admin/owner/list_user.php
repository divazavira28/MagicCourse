    <section class="content">
    	<div class="container-fluid">
    		<div class="block-header">
    			<h2>MAGIC COURSE MANAJEMEN USER</h2>
    		</div>

    		<!-- Basic Examples -->
    		<div class="row clearfix">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="card">
    					<div class="header">
    						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
    							<center>LIST USER ADMIN MAGIC COURSE</center>
    						</h2> <br><br>
    						<a href="<?= base_url(); ?>admin/owner/add_user/">
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
    										<th>Nama</th>
    										<th>Username</th>
    										<th>Status</th>
    										<th>Create Date</th>
    										<th style="text-align: center;">ACTION</th>
    									</tr>
    								</thead>

    								<tbody>
    									<?php $i = 1;
										foreach ($list_admin as $admin) : ?>
    										<?php if ($admin['id_admin'] != 1) : ?>
    											<tr>
    												<td><?= $i++; ?></td>
    												<td><?= $admin['nama'] ?></td>
    												<td><?= $admin['username'] ?></td>
    												<td><?= ($admin['status'] == 1) ? 'admin' : 'owner'; ?></td>
    												<td><?= $admin['created_at'] ?></td>
    												<td style="text-align: center;vertical-align: middle;">
    													<center>
    														<a href="<?= base_url('admin/owner/edit_user/' . $admin['id_admin']) ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i style="color:#00b0e4;" class="material-icons">description</i></a>&nbsp;
    														<!-- <a href="#" id="btn_posisi" title="Delete" data-id="" data-toggle="modal" data-target="#deleteModal"><i style="color:red;" class="material-icons">delete</i></a> -->
    													</center>
    												</td>
    											</tr>
    									<?php endif;
										endforeach; ?>
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