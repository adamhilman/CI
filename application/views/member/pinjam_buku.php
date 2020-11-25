            <!-- start: Content -->
            <div id="content">
            	<div class="col-md-12 panel">
            		<div class="col-md-12 panel-heading">
            			<h4>Data Buku</h4>
            		</div>
            		<div class="col-md-12 panel-body">
            			<?php foreach($buku as $b){ ?>
            			<form action="<?php echo base_url(); ?>member/pinjam_buku_aksi" method="post"
            				enctype="multipart/form-data">
            				<input type="hidden" name="id_buku" value="<?php echo $b->id_buku;?>">
            				<div class="form-group col-md-4">
            					<label for="kategori">Kategori Buku</label>
            					<input readonly type="text" class="form-control" id="kategori" name="kategori"
            						value="<?php echo $b->nama_kategori; ?>">
            					</select>
            					<?php echo form_error('id_kategori'); ?>
            				</div>
            				<div class="form-group col-md-4">
            					<label for="judul_buku">Judul Buku</label>
            					<input readonly type="text" class="form-control" id="judul_buku" name="judul_buku"
            						value="<?php echo $b->judul_buku;?>">
            				</div>
            				<div class="form-group col-md-4">
            					<label for="pengarang">Pengarang</label>
            					<input readonly type="text" class="form-control" id="pengarang" name="pengarang"
            						value="<?php echo $b->pengarang;?>">
            				</div>
            				<div class="form-group col-md-6">
            					<label for="penerbit">Penerbit</label>
            					<input readonly type="text" class="form-control" id="penerbit" name="penerbit"
            						value="<?php echo $b->penerbit;?>">
            				</div>
            				<div class="form-group col-md-6">
            					<label for="tahun_terbit">Tahun Terbit</label>
            					<input readonly type="date" class="form-control" id="tahun_terbit" name="tahun_terbit"
            						value="<?php echo $b->tahun_terbit;?>">
            				</div>
            				<div class="form-group col-md-12">
            					<label for="isbn">ISBN</label>
            					<input readonly type="text" class="form-control" id="isbn" name="isbn"
            						value="<?php echo $b->isbn;?>">
            				</div>
            				<div class="form-group col-md-3">
            					<label for="jumlah_buku">Jumlah Buku</label>
            					<input readonly type="number" class="form-control" id="jumlah_buku" name="jumlah_buku"
            						value="<?php echo $b->jumlah_buku;?>">
            				</div>
            				<div class="form-group col-md-3">
            					<label for="lokasi">Lokasi</label>
            					<input readonly type="text" class="form-control" id="lokasi" name="lokasi"
            						value="<?php echo $b->lokasi;?>">
            				</div>
            				<div class="form-group col-md-3">
            					<label for="status_buku">Status Buku</label>
            					<input readonly type="text" class="form-control" id="status_buku" name="status_buku"
            						value="<?php
										if($b->status_buku == "1"){
										echo "Tersedia";
										}else if($b->status_buku == "0"){
										echo "Sedang Dipinjam";} ?>">
            				</div>
            				<div class="row">
            					<div class="form-group col-md-3">
            						<label for="jumlah_pinjam">Jumlah Pinjam</label>
            						<input type="number" class="form-control" id="jumlah_pinjam" name="jumlah_pinjam"
            							value="1">
            					</div>
							</div>
							<div class="row">
            					<div class="form-group col-md-3">
            						<label for="tanggal_pinjam">Tanggal Pinjam</label>
            						<input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
								</div>
								<div class="form-group col-md-3">
            						<label for="tanggal_kembali">Tanggal Kembali</label>
            						<input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
            					</div>
            				</div>

            				<div class="col-md-12">
            					<button type="submit" class="btn btn-primary">Submit</button>
            					<button type="button" onclick="goBack()" class="btn">Cancel</button>
            				</div>
            			</form>
            			<?php } ?>
            		</div>
            	</div>
            </div>
            </div>
            </div>
            <!-- end: content -->
