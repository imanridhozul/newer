<div id="wrapper">
	<div id="page-wrapper" class="gray-bg dashbard-1">
		<?php $this->load->view('admin/bagianStatic/header'); ?>
		<div class="wrapper wrapper-content">
		<?php echo $this->session->flashdata('msg'); ?>
			<div class="row">			
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