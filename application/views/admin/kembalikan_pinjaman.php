<section class="content">
	<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('approved');?>"></div>
	<div class="container-fluid">
		<!-- Exportable Table -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Pengembalian Buku
						</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<form action="<?php echo base_url();?>/dashboard/kembalikan_pinjaman_aksi" method="post">
							<table id="data_kembali"
								class="js-sweetalert table">
								<thead>
									<tr>
										<th>Kode Pinjam</th>
										<th>Nama Peminjam</th>
										<th>Judul Buku</th>
										<th>Jumlah Buku</th>
										<th>Tanggal Pinjam</th>
										<th>Tanggal Kembali</th>
										<th>Status Peminjaman</th>
										<th>Status Pengembalian</th>
										<th>Denda /hari</th>
										<th>Total Denda</th>
										<th>Keterangan Terlambat</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                            $no = 1;
                                            foreach ($pinjaman as $p){
												?>
												<?php 
										$tanggal_sekarang = date("Y-m-d");
										$denda = $p->denda;
										$tanggal_kembali=date_create($p->tanggal_kembali);
										$tanggal_pengembalian=date_create($tanggal_sekarang);
										$diff=date_diff($tanggal_kembali,$tanggal_pengembalian);?>
									<tr class=<?php if ($p->judul_buku == NULL){ echo "danger";}?>>
									<input name="id_pinjam" type="hidden" value="<?php echo $p->id_pinjam;?>">

										<td>PJM00<?php echo $p->id_pinjam ?></td>
										<td><?php echo $p->nama_anggota ?></td>
										<td><?php if ($p->judul_buku == NULL){
                                                echo "Buku Sudah Dihapus";
                                            }else{echo $p->judul_buku;}?></td>
										<td><?php echo $p->jumlah_pinjam ?></td>
										<td><?php echo $p->tanggal_pinjam ?></td>
										<td><?php echo $p->tanggal_kembali ?></td>
										<td>
											<?php if ($p->status_peminjaman == '0'){
                                                echo "Menunggu Approval Admin";
                                                }else{
                                                echo "Approved";
                                                }
                                                ?>
										</td>
										<td>
											<?php if ($p->status_pengembalian == '0' && $p->status_peminjaman == '0'){
                                                echo "Belum di Approve";
                                                }elseif ($p->status_pengembalian == '0' && $p->status_peminjaman == '1'){
                                                echo "Belum Dikembalikan";
                                                }else{
                                                echo "Sudah Dikembalikan";
                                                } ?>
										</td>
										<td><?php echo $p->denda ?></td>
										<td><?php
										if ($diff->format("%R") == "+"){ $terlambat = $diff->format("%a");
										$total_denda = $denda * $terlambat;?>
										<label><?php echo $total_denda;?></label>
										<input name="total_denda" type="hidden" value="<?php echo $total_denda;?>">
										<?php }else{ ?>
										<label>0</label>
										<input name="total_denda" type="hidden" value="0">
										<?php } ?>
										</td>
										<td>
											<?php if ($diff->format("%R") == "+"){
												echo "Anda terlambat selama ".$diff->format("%a Hari");
											}else{echo "Tidak Terlambat";}
											?>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<button type="submit" class="btn bg-orange waves-effect">
                                        <i class="material-icons">input</i>
                                        <span>SUBMIT</span>
									</button>							
									<button type="button" onclick="goBack()" class="btn bg-blue waves-effect">
                                        <i class="material-icons">arrow_back</i>
                                        <span>BACK</span>
                                    </button>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Exportable Table -->
	</div>
</section>