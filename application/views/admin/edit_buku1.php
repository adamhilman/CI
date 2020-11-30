            <!-- start: Content -->
            <div id="content">
            	<div class="col-md-12 panel">
            		<div class="col-md-12 panel-heading">
            			<h4>Tambah Buku</h4>
            		</div>
            		<div class="col-md-12 panel-body">
					<?php foreach($buku as $b){ ?>
            			<form action="<?php echo base_url(); ?>dashboard/update_buku" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id_buku" value="<?php echo $b->id_buku;?>">
								<div class="form-group col-md-4">
            						<label for="kategori">Kategori Buku</label>
            						<select class="form-control" id="kategori" name="kategori">
            							<?php foreach ($kategori as $k) { ?>
                          				<option value="<?php echo $k->id_kategori; ?>" <?php if ($b->id_kategori == $k->id_kategori){
											  echo "SELECTED";
										  }?>><?php echo $k->nama_kategori; ?></option>
                          				<?php } ?>
            						</select>
                        		<?php echo form_error('id_kategori'); ?>
            					</div>
            					<div class="form-group col-md-4">
            						<label for="judul_buku">Judul Buku</label>
            						<input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $b->judul_buku;?>">
            					</div>
            					<div class="form-group col-md-4">
            						<label for="pengarang">Pengarang</label>
            						<input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $b->pengarang;?>">
            					</div>
            					<div class="form-group col-md-6">
            						<label for="penerbit">Penerbit</label>
            						<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $b->penerbit;?>">
            					</div>
            					<div class="form-group col-md-6">
            						<label for="tahun_terbit">Tahun Terbit</label>
            						<input type="date" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?php echo $b->tahun_terbit;?>">
            					</div>
            					<div class="form-group col-md-12">
            						<label for="isbn">ISBN</label>
            						<input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $b->isbn;?>">
            					</div>
            					<div class="form-group col-md-3">
            						<label for="jumlah_buku">Jumlah Buku</label>
            						<input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="<?php echo $b->jumlah_buku;?>">
            					</div>
            					<div class="form-group col-md-3">
            						<label for="lokasi">Lokasi</label>
            						<select class="form-control" id="lokasi" name="lokasi">
										<option value="<?php echo $b->lokasi;?>"><?php echo $b->lokasi;?></option>
            							<option value="Rak 1">Rak 1</option>
                          				<option value="Rak 2">Rak 2</option>
                          				<option value="Rak 3">Rak 3</option>
            						</select>
            					</div>
            					<div class="form-group col-md-3">
            						<label for="status_buku">Status Buku</label>
            						<select class="form-control" id="status_buku" name="status_buku">
										<option value="<?php echo $b->status_buku;?>"><?php
										if($b->status_buku == "1"){
										echo "Tersedia";
										}else if($b->status_buku == "0"){
										echo "Sedang Dipinjam";} ?></option>
            							<option value=1>Tersedia</option>
            							<option value=0>Sedang Dipinjam</option>
            						</select>
            					</div>
            					<div class="form-group col-md-12">
            						<label for="gambar_buku">Gambar Buku</label>
            						<input type="file" class="form-control-file" id="gambar_buku" name="gambar_buku"><?php echo $b->gambar;?>
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
