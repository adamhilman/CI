	          <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">Dashboard Admin</h3>
                        <p class="animated fadeInDown">Selamat Datang, <?php echo $this->session->userdata("nama"); ?></h2></p>
                    </div>
                  </div>                    
                </div>

                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Data Mahasiswa</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>51181</h1>
                                        <p>Mahasiswa</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Data Buku</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="fa fa-book text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1><?php echo $query->num_rows();?></h1>
                                        <p>Total Buku</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
      		  </div>
          <!-- end: content -->

 