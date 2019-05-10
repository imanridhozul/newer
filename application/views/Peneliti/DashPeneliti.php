<div id="wrapper">
	<div id="page-wrapper" class="gray-bg dashbard-1">
		<?php $this->load->view('admin/bagianStatic/header'); ?>
		<div class="wrapper wrapper-content">
		<?php echo $this->session->flashdata('msg'); ?>
			<div class="row">
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Penelitian</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins"><?php echo $jpenelitian; ?></h1>
							<small>Total Penelitian</small>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Pengabdian</h5>
						</div>
						<div class="ibox-content">
							<!-- <?php
									include("config/koneksi.php");
									$qpn = mysql_query("SELECT COUNT(id_pengabdian) AS jpengabdian FROM pengabdian");
									$rqpn = mysql_fetch_array($qpn);

									?> -->
							<h1 class="no-margins"><?php echo $rqpn['jpengabdian']; ?></h1>
							<small>Total Pengabdian</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Dosen Peneliti</h5>
						</div>
						<div class="ibox-content">
							<!-- <?php
									include("config/koneksi.php");
									$qpn = mysql_query("SELECT COUNT(id_peneliti) AS jpeneliti FROM peneliti");
									$rqpn = mysql_fetch_array($qpn);

									?> -->
							<h1 class="no-margins"><?php echo $rqpn['jpeneliti']; ?></h1>
							<small>Total Dosen Peneliti</small>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Pengunjung</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">106,120</h1>
							<small>Jumlah Pengunjung</small>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('admin/bagianStatic/footer'); ?>
	</div>
</div>