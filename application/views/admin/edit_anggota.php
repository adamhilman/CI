            <!-- start: Content -->
            <div id="content">
            	<div class="col-md-12 panel">
            		<div class="col-md-12 panel-heading">
            			<h4>Tambah Buku</h4>
            		</div>
            		<div class="col-md-12 panel-body">
					<?php foreach($anggota as $a){ ?>
					<?php echo validation_errors(); ?>
            			<form action="<?php echo base_url(); ?>dashboard/update_anggota" method="post" enctype="multipart/form-data">
						<div class="row">		
						<div class="form-group col-md-4">
						<input type="hidden" name="id_anggota" value="<?php echo $a->id_anggota;?>">
            						<label for="nama_lengkap">Nama Lengkap</label>
            						<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $a->nama_anggota;?>">
            					</div>
            					<div class="form-group col-md-3">
            						<label for="gender">Jenis Kelamin</label>
            						<select class="form-control" id="gender" name="gender">
            							<option value="Laki-laki" <?php if ($a->gender == "Laki-laki") echo "selected";?>>Laki - Laki</option>
										<option value="Perempuan" <?php if ($a->gender == "Perempuan") echo "selected";?>>Perempuan</option>
            						</select>
            					</div>
            					<div class="form-group col-md-5">
            						<label for="no_telp">No. Telepon</label>
            						<input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $a->no_telp;?>">
								</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="alamat">Alamat</label>
										<textarea class="form-control" id="alamat" name="alamat"><?php echo $a->alamat;?></textarea>
									</div>
								</div>
								<div class="row">
            					<div class="form-group col-md-6">
            						<label for="email">Email</label>
            						<input type="text" class="form-control" id="email" name="email" value="<?php echo $a->email;?>">
								</div>
								<div class="form-group col-md-6">
            						<label for="password">Password</label>
            						<input type="password" class="form-control" id="password" name="password">
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
