<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="<?php echo base_url(); ?>static/img/user.png" style="width: 52px; height: 50px;" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('nama') ?></strong>
                            </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata('status') ?> <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    LPPM
                </div>
            </li>            
            <li>
                <a href="<?php echo base_url(); ?>admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>admin/dataPeneliti"><i class="fa fa-th-large"></i> <span class="nav-label">Data Peneliti</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Daftar Usulan</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?php echo base_url(); ?>admin/programPenelitian">Program Penelitian</a></li>
                    <li><a href="?page=21">Program Pengabdian</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Laporan Penelitian</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="?page=30">Catatan Harian</a></li>
                    <li><a href="?page=30">Laporan Akhir</a></li>
                    <li><a href="?page=31">Laporan Anggaran</a></li>
                    <li><a href="?page=32">Berkas Seminar Hasil</a></li>
                </ul>
            </li>
            <li>
                <a href="x1r.php"><i class="fa fa-th-large"></i> <span class="nav-label">Data Arsip</span></a>
            </li>
        </ul>
    </div>
</nav>