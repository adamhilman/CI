    <section class="content">
        <div class="container-fluid">
        <div class="flash-data" data-profile="<?php echo $this->session->flashdata('profile');?>"></div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Profil Ku
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url(); ?>user/profile/update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_admin" value="<?php echo $this->session->userdata("id_admin");?>">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="nama_lengkap" type="text" class="form-control" value="<?php echo $this->session->userdata("nama");?>">
                                                <label class="form-label">Nama Lengkap</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="switch">
                                            <div class="switch">
                                                <h4>Apakah ingin mengganti password?</h4>
                                                <label>Tidak<input type="checkbox" id="gantipassword" onchange="passwordBaru()"><span class="lever"></span>Ya</label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row clearfix" id="new_pass" style="display:none;">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="new_pass" type="password" class="form-control" >
                                                <label class="form-label">Password Baru</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required name="old_pass" type="password" class="form-control" >
                                                <label class="form-label">Password Lama</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   
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
            <!-- #END# Input -->
        </div>
    </section>