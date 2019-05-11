<div id="wrapper">
	<div id="page-wrapper" class="gray-bg dashbard-1">
		<?php $this->load->view('admin/bagianStatic/header'); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		<div class="wrapper wrapper-content">
			<div class="row">

				<div class="col-lg-8">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Penelitian</h5>
						</div>
						<div class="ibox-content">						
						


						</div>
					</div>
				</div>


			</div>
		</div>
		<?php $this->load->view('admin/bagianStatic/footer'); ?>
	</div>
</div>


<script>
	$(document).ready(function() {

		$('#bt').click(function(e) {
			alert('berhasil');
			// $.post($('#form1').attr('action'), $('#form1').serializeArray(), function(data, status) {
			// 	console.log(data);
			// });


		});
	});
</script>