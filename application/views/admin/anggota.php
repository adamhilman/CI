<section class="content">
<div class="flash-data" data-sukses="<?php echo $this->session->flashdata('sukses');?>"></div>

	<div class="container-fluid">
		<!-- Exportable Table -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Daftar Anggota
						</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">more_vert</i>
								</a>
								<ul class="dropdown-menu pull-right">
									<li><a href="<?php echo base_url();?>admin/data/anggota/tambah">Tambah Anggota</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="js-sweetalert table table-bordered table-striped table-hover" id="data_anggota">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Email</th>
										<th>Jenis Kelamin</th>
										<th>Nomor Telepon</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Email</th>
										<th>Jenis Kelamin</th>
										<th>Nomor Telepon</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
                                            $no = 1;
                                            foreach ($anggota as $a){
                                                ?>
									<tr>
                                        <td><?php echo $no++; ?></td>
										<td><?php echo $a->nama_anggota ?></td>
										<td><?php echo $a->alamat ?></td>
										<td><?php echo $a->email ?></td>
										<td><?php echo $a->gender ?></td>
										<td><?php echo $a->no_telp ?></td>
										<td>
											<a href="<?php echo base_url().'dashboard/edit_anggota/'.$a->id_anggota;?>">
												<button type="button" class="btn bg-amber waves-effect">
													<i class="material-icons">edit</i>
													<span>Edit</span>
												</button>
											</a>
											<button class="btn bg-blue waves-effect" type="button"
												onclick="hapus(<?php echo $a->id_anggota;?>)"><i
													class="material-icons">delete</i>
												<span>Delete</span></button>
										</td>

									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Exportable Table -->
	</div>
</section>
