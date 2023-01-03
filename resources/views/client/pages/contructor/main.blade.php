<section class="contact-with-us">
	<div class="">	
		<div class="section-heading">
			<h5>Learn more and be with us</h5>
			<div class="main-title">
				<h2><span>Contructor</span> Registration</h2>
				<strong></strong> <!-- Use for heading after effect -->
			</div>
		</div> <!-- /.section-heading -->
		<!-- Contact Everything Here -->
		<div class="contact-everything">
			<div class="boundary">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-2">
						<!-- Contact Information Begin -->
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info">
									<div class="contact-img">
										<img src="../../assets/images/contact/1.jpg" alt="CEO">
									</div> <!-- /.contact-img -->
									<div class="contact-content">
										<div class="title">
											<h3>MyHouse</h3>
										</div>
										<p>We are more than happy to hear your thoughts, we are waiting for your ideas and suggestions! Let’s help each other to develop the best version of My Home ♥ </p>
										<div class="mail-phone">
											<span>
												<i class="fa fa-envelope-o"></i>
												<a href="#">email@gmail.com</a>
											</span>
											<span>
												<i class="fa fa-phone"></i>
												<a href="#">0123456789</a>
											</span>
										</div>
									</div> <!-- /.contact-content -->
								</div> <!-- /.contact-info -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
						<!-- Conatact Form Begin -->
						<div class="row" style="margin-top:5%">
							<div class="contact-form">
								<form id="contructorForm">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<label>Company Name</label>&nbsp;<span class="empty_text text-danger"></span>
														<input class="form-control" id="comp_name" name="comp_name" value="" placeholder="Enter your company name here!" required title="This field should not be left blank." data-inputmask="'alias': 'text'" />
														<div class="input-icon">
															<i class="fa fa-building"></i>
														</div>
													</div>
												</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<label>Company Email</label>&nbsp;<span class="empty_text text-danger"></span>
														<input class="form-control" id="comp_email" name="comp_email" value="<?php echo (auth()->user() != null ? auth()->user()->email : '');?>" required title="This field should not be left blank." data-inputmask="'alias': 'email'" />
														<div class="input-icon">
															<i class="fa fa-envelope"></i>
														</div>
													</div>
												</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<label>Company Contact Number</label>&nbsp;<span class="empty_text text-danger"></span>
														<input class="form-control" id="comp_num" name="comp_num" value="<?php echo (auth()->user() != null ? auth()->user()->contact : '');?>" required title="This field should not be left blank."  data-inputmask-alias="(+63) 9999-9999-99" />
														<div class="input-icon">
															<i class="fa fa-phone"></i>
														</div>
													</div>
												</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<label>Company Address</label>&nbsp;<span class="empty_text text-danger"></span>
														<input class="form-control" id="comp_address" name="comp_address" value="" placeholder="Enter your company address here!" required title="This field should not be left blank." />
														<div class="input-icon">
															<i class="fa fa-car"></i>
														</div>
													</div>
												</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<div class="text-area">
													<label>Company Description</label>&nbsp;<span class="empty_text text-danger"></span>
													<textarea name="comp_desc" required minlength="300" id="comp_desc" class="form-control" placeholder="Text"></textarea>
												</div>
											</div>
										</div> <!-- /.col- -->
									<div class="form-group col-xs-12 col-md-12 col-lg-12">
										<div class="form-btn">
											<button type="submit" name="submit" class="contact-form-btn gen-btn">Apply Now</button>
										</div>
									</div>
								</form>
							</div> <!-- /.contact-form -->
						</div> <!-- /.row -->
						<!-- Office Time Begin -->
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
								<div class="office-time wow zoomIn">
									<div class="opening">
										<span>Opening</span> Time:
									</div>
									<div class="opening-time">
										<p>
											<span>Monday-Friday:</span>
											<span>10:00am - 08:00 pm</span>
										</p>
										<p>
											<span>Monday-Friday:</span>
											<span>10:00am - 08:00 pm</span>
										</p>
									</div>
								</div> <!-- /.office-time -->
							</div> <!-- /col- -->
						</div> <!-- /.row -->
					</div> <!-- /.col -->
				</div> <!-- /.row -->
			</div> <!-- /.boundary -->
			<div class="bottom-style"><strong></strong></div>
		</div> <!-- /.contact-everything -->
	</div> <!-- /.container -->
</section> 