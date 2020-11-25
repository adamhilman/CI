            <!-- start: Content -->
            <div id="content">
            	<div class="col-md-12 panel">
            		<div class="col-md-12 panel-heading">
            			<h4>My Profile</h4>
            		</div>
            		<div class="col-md-12 panel-body">
					<?php echo validation_errors(); ?>
            			<form action="<?php echo base_url(); ?>dashboard/update_profile" method="post" enctype="multipart/form-data">
						<div class="row">		
						<div class="form-group col-md-4">
						<input type="hidden" name="id_admin" value="<?php echo $this->session->userdata("id_admin");?>">
            						<label for="nama_lengkap">Nama Lengkap</label>
            						<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $this->session->userdata("nama");?>">
            					</div>
            				
								</div>
								
								<div class="row">
            					<div class="form-group col-md-6">
            						<label for="new_pass">Password Baru</label>
            						<input type="password" class="form-control" id="new_pass" name="new_pass">
								</div>
								<div class="form-group col-md-6">
            						<label for="old_pass">Password Lama</label>
            						<input type="password" class="form-control" id="old_pass" name="old_pass">
								</div>
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

 