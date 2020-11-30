            <!-- start: Content -->
            <div id="content">
            	<div class="col-md-12 panel">
            		<div class="col-md-12 panel-heading">
            			<h4>Tambah Buku</h4>
            		</div>
            		<div class="col-md-12 panel-body">
            			<form action="<?php echo base_url(); ?>dashboard/tambah_buku_aksi" method="post" enctype="multipart/form-data">
            					<div class="form-group col-md-4">
            						<label for="kategori">Kategori Buku</label>
            						<select class="form-control" id="kategori" name="kategori">
            							<option value="">--Pilih Kategori--</option>
            							<?php foreach ($kategori as $k) { ?>
                            <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
                          <?php } ?>
            						</select>
                        <?php echo form_error('id_kategori'); ?>
            					</div>
            					<div class="form-group col-md-4">
            						<label for="judul_buku">Judul Buku</label>
            						<input type="text" class="form-control" id="judul_buku" name="judul_buku">
            					</div>
            					<div class="form-group col-md-4">
            						<label for="pengarang">Pengarang</label>
            						<input type="text" class="form-control" id="pengarang" name="pengarang">
            					</div>
            					<div class="form-group col-md-6">
            						<label for="penerbit">Penerbit</label>
            						<input type="text" class="form-control" id="penerbit" name="penerbit">
            					</div>
            					<div class="form-group col-md-6">
            						<label for="tahun_terbit">Tahun Terbit</label>
            						<input type="date" class="form-control" id="tahun_terbit" name="tahun_terbit">
            					</div>
            					<div class="form-group col-md-12">
            						<label for="isbn">ISBN</label>
            						<input type="text" class="form-control" id="isbn" name="isbn">
            					</div>
            					<div class="form-group col-md-3">
            						<label for="jumlah_buku">Jumlah Buku</label>
            						<input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku">
            					</div>
            					<div class="form-group col-md-3">
            						<label for="lokasi">Lokasi</label>
            						<select class="form-control" id="lokasi" name="lokasi">
            							<option value="Rak 1">Rak 1</option>
                          <option value="Rak 2">Rak 2</option>
                          <option value="Rak 3">Rak 3</option>
            						</select>
            					</div>
            					<div class="form-group col-md-3">
            						<label for="status_buku">Status Buku</label>
            						<select class="form-control" id="status_buku" name="status_buku">
            							<option value=1>Tersedia</option>
            							<option value=0>Tidak Tersedia</option>
            						</select>
            					</div>
            					<div class="form-group col-md-12">
            						<label for="gambar_buku">Gambar Buku</label>
            						<input type="file" class="form-control-file" id="gambar_buku" name="gambar_buku">
            					</div>
                      <div class="col-md-12">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="button" onclick="goBack()" class="btn">Cancel</button>
                        </div>          				
            			</form>
            		</div>
            	</div>
            </div>
            </div>
            </div>
            <!-- end: content -->
