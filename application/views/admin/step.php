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

							<h2>
								Validation Wizard Form
							</h2>
							<p>
								This example show how to use Steps with jQuery Validation plugin.
							</p>

							<form id="form" action="#" class="wizard-big">
								<h1>Account</h1>
								<fieldset>
									<h2>Account Information</h2>
									<div class="row">
										<div class="col-lg-8">
											<div class="form-group">
												<label>Username *</label>
												<input id="userName" name="userName" type="text" class="form-control required">
											</div>
											<div class="form-group">
												<label>Password *</label>
												<input id="password" name="password" type="text" class="form-control required">
											</div>
											<div class="form-group">
												<label>Confirm Password *</label>
												<input id="confirm" name="confirm" type="text" class="form-control required">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="text-center">
												<div style="margin-top: 20px">
													<i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
												</div>
											</div>
										</div>
									</div>

								</fieldset>
								<h1>Profile</h1>
								<fieldset>
									<h2>Profile Information</h2>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label>First name *</label>
												<input id="name" name="name" type="text" class="form-control required">
											</div>
											<div class="form-group">
												<label>Last name *</label>
												<input id="surname" name="surname" type="text" class="form-control required">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Email *</label>
												<input id="email" name="email" type="text" class="form-control required email">
											</div>
											<div class="form-group">
												<label>Address *</label>
												<input id="address" name="address" type="text" class="form-control">
											</div>
										</div>
									</div>
								</fieldset>

								<h1>Warning</h1>
								<fieldset>
									<div class="text-center" style="margin-top: 120px">
										<h2>You did it Man :-)</h2>
									</div>
								</fieldset>

								<h1>Finish</h1>
								<fieldset>
									<h2>Terms and Conditions</h2>
									<input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
								</fieldset>
							</form>








							<p>
								This is basic example of Step
							</p>
							<div id="wizard">
								<h1>First Step</h1>
								<div class="step-content">
									<div class="text-center m-t-md">
										<h2>Hello in Step 1</h2>
										<p>
											This is the first content.
										</p>
									</div>
								</div>

								<h1>Second Step</h1>
								<div class="step-content">
									<div class="text-center m-t-md">
										<h2>This is step 2</h2>
										<p>
											This content is diferent than the first one.
										</p>
									</div>
								</div>


								<h1>Second Step</h1>
								<div class="step-content">
									<div class="text-center m-t-md">
										<h2>This is step 2</h2>
										<p>
											This content is diferent than the first one.
										</p>
									</div>
								</div>

								<h1>Third Step</h1>
								<div class="step-content">
									<div class="text-center m-t-md">
										<h2>This is step 3</h2>
										<p>
											This is last content.
										</p>
									</div>
								</div>
							</div>
							<form id="form1" method="post" action="<?php echo base_url(); ?>Admin/ad" enctype="multipart/form-data">
								<div class="form-group">
									<label for=""></label>
									<input type="text" class="form-control-file" name="dokumen" id="dokumen" placeholder="" aria-describedby="fileHelpId">
									<small id="fileHelpId" class="form-text text-muted">Help text</small>
								</div>
								<button id="bt" class="btn">
									submit <span class="badge badge-primary">!</span>
								</button>
							</form>

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

		$("#wizard").steps();

		$("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });

	});
</script>