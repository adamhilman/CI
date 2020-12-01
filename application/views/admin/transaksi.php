<section class="content">
	<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('approved');?>"></div>
	<div class="container-fluid">
		<!-- Exportable Table -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Daftar Transaksi
						</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">more_vert</i>
								</a>
								<ul class="dropdown-menu pull-right">
									<li><a href="<?php echo base_url();?>dashboard/tambah_buku">--</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="data_peminjam"
								class="js-sweetalert table table-bordered table-striped table-hover">
								<thead>
									<tr>
									<th>No</th>
										<th>Kode Pinjam</th>
										<th>Nama Peminjam</th>
										<th>Judul Buku</th>
										<th>Jumlah Buku</th>
										<th>Tanggal Pinjam</th>
										<th>Tanggal Kembali</th>
										<th>Tanggal Pengembalian</th>
										<th>Total Denda</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Kode Pinjam</th>
										<th>Nama Peminjam</th>
										<th>Judul Buku</th>
										<th>Jumlah Buku</th>
										<th>Tanggal Pinjam</th>
										<th>Tanggal Kembali</th>
										<th>Tanggal Pengembalian</th>
										<th>Total Denda</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
                                            $no = 1;
                                            foreach ($transaksi as $trx){
                                                ?>
									<tr class=<?php if ($trx->judul_buku == NULL){ echo "danger";}?>>
										<td><?php echo $no++; ?></td>
										<td>PJM00<?php echo $trx->id_pinjam ?></td>
										<td><?php echo $trx->nama_anggota ?></td>
										<td><?php if ($trx->judul_buku == NULL){
                                                echo "Buku Sudah Dihapus";
                                            }else{echo $trx->judul_buku;}?></td>
										<td><?php echo $trx->jumlah_pinjam ?></td>
										<td><?php echo $trx->tanggal_pinjam ?></td>
										<td><?php echo $trx->tanggal_kembali ?></td>
										<td><?php echo $trx->tanggal_pengembalian ?></td>
										<td><?php echo $trx->total_denda ?></td>
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