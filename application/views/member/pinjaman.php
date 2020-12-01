<section class="content">
	<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('approved');?>"></div>
	<div class="container-fluid">
		<!-- Exportable Table -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Daftar Pinjaman
						</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">more_vert</i>
								</a>
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
                          <th>Judul Buku</th>
                          <th>Jumlah Buku</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Status</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
									<th>No</th>
                          <th>Kode Pinjam</th>
                          <th>Judul Buku</th>
                          <th>Jumlah Buku</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Status</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
                      $no = 1;
                      foreach ($pinjaman as $p){
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td>PJM00<?php echo $p->id_pinjam ?></td>
                          <td><?php echo $p->judul_buku ?></td>
                          <td><?php echo $p->jumlah_pinjam ?></td>
                          <td><?php echo $p->tanggal_pinjam ?></td>
                          <td><?php echo $p->tanggal_kembali ?></td>
                          <td>
                            <?php if ($p->status_peminjaman == '0'){
                              echo "Menunggu Approval Admin";
                            }elseif ($p->status_pengembalian == '0' && $p->status_peminjaman == '1'){
                              echo "Dipinjam";
                            }else{
                              echo "Sudah Dikembalikan";
                            } ?>
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