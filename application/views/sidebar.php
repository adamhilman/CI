<div class="container-fluid mimin-wrapper">
  
  <!-- start:Left Menu -->
    <div id="left-menu">
      <div class="sub-left-menu scroll">
        <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
              <h1 class="animated fadeInLeft">21:00</h1>
              <p class="animated fadeInRight">Sat,October 1st 2029</p>
            </li>
            <li class="active ripple">
              <a href="<?php echo base_url(); ?>"><span class="fa-home fa"></span> Dashboard 
              </a>
            </li>
            <?php if ($this->session->userdata("level") == 'admin'){ ?>
            <li class="ripple"><a href="<?php echo base_url();?>dashboard/data_buku"><span class="fa fa-book"></span> Data Buku  </a>
            </li>
            <li class="ripple"><a href="<?php echo base_url();?>dashboard/data_anggota"><span class="fa fa-users"></span> Data Anggota </a>
            </li>
            <li class="ripple"><a href="<?php echo base_url();?>dashboard/data_peminjam/<?php echo $this->session->userdata("id_member");?>"><span class="fa fa-book"></span> Data Pinjaman  </a>
            </li>
            <?php }; ?>
            <?php if ($this->session->userdata("level") == 'member'){ ?>
            <li class="ripple"><a href="<?php echo base_url();?>member/data_buku"><span class="fa fa-book"></span> Data Buku  </a>
            </li>
            <li class="ripple"><a href="<?php echo base_url();?>member/data_pinjaman/<?php echo $this->session->userdata("id_member");?>"><span class="fa fa-book"></span> Data Pinjaman  </a>
            </li>
            <?php }; ?>
          </ul>
        </div>
    </div>
  <!-- end: Left Menu -->
