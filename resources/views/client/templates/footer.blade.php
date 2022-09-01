    	<footer class="footer" id="footer">
			<div class="footer-widget-area">
				<div class="container">	
					<div class="footer-widgets">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
								<div class="single-widget">
									<div class="widget-heading info-heading">
										<a href="index.html" class="logo-footer">
											<img src="{{ asset('assets/images/logo/logo-footer2.png') }}" alt="LogoFooter">
    										</a>
									</div>
									<div class="widget-info">
										<p>Duis autem vel eum iriure dolor in hen drerit in vulputate velit esse mo lestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
									</div> <!-- /.widget-info -->
								</div> <!-- /.single-widget -->
							</div> <!-- /.col- -->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
								<div class="single-widget">
									<div class="widget-heading">
										<h3>Important Links</h3>
									</div>
									<div class="widget-link">
										<ul>
											<li><a href="#">Themeforest</a></li>
											<li><a href="#">Videohive</a></li>
											<li><a href="#">Graphicriver</a></li>
											<li><a href="#">Audio Jungle</a></li>
											<li><a href="#">Photodune</a></li>
										</ul>
									</div> <!-- /.widget-link -->
								</div> <!-- /.single-widget -->
							</div> <!-- /.col- -->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
								<div class="single-widget">
									<div class="widget-heading">
										<h3>Quick Link</h3>
									</div>
									<div class="widget-link">
										<ul>
											<li><a href="#">FAQ</a></li>
											<li><a href="#">Support</a></li>
											<li><a href="#">Sitemap</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Pricing</a></li>
										</ul>
									</div> <!-- /.widget-link -->
								</div> <!-- /.single-widget -->
							</div> <!-- /.col- -->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
								<div class="single-widget">
									<div class="widget-heading">
										<h3>Quics Links</h3>
									</div>
									<div class="widget-address">
										<address>
											<ul>
												<li>
													<div class="address-left">
														<p>Head Office:</p>
													</div>
													<div class="address-right">
														<p>21/D, Redwood City, CA 94872, USA</p>
													</div>
												</li>
												<li>
													<div class="address-left">
														<p>Phone:</p>
													</div>
													<div class="address-right">
														<p>
															+88-000-1111-2225 <br />
															+88-000-1111-2226
														</p>
													</div>
												</li>
												<li>
													<div class="address-social">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-instagram"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</address>
									</div> <!-- /.widget-address -->
								</div> <!-- /.single-widget -->
							</div> <!-- /.col- -->

						</div> <!-- /.row -->  
					</div> <!-- /.footer-widgets -->
				</div> <!-- /.container -->
			</div> <!-- /.footer-widget-area -->
			<div class="copyright-designer">
				<div class="container">	
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="copyright">
								<p>&copy; Copyright 2016 Dream House, All Rights Reserved</p>
							</div> <!-- /.copyright -->
						</div> <!-- /.col- -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="designer">
								<p>
									Designed and 
									<i class="fa fa-heart"></i> by 
									<a href="https://graphicriver.net/user/themexriver">Themexriver</a>
								</p>
							</div> <!-- /.designer -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.copyright-designer -->

			<!-- Go to the page top  -->
			<div class="go-top">
				<a href="#" class="back-to-top dream-btn">
					<i class="fa fa-angle-up"></i>
				</a>
			</div> <!-- /.go-top -->
		</footer> <!-- /.footer -->	
	</div>
@isset($data['js'])
        @foreach ($data['js'] as $item)
        <script type="text/javascript" src="assets/js/{{$item}}"></script>   
        @endforeach
    @endisset
	<script type="text/javascript" src="assets/js/functional.js"></script>   
</body>
</html>