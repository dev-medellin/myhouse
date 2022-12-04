    	<footer class="footer" id="footer" <?php echo ($data['page'] == 'about') ? "style='margin-top:0 !important'" :'';?> >
		<div class="footer-widget-area">
				<div class="container">	
					<div class="footer-widgets">
	
					</div> <!-- /.footer-widgets -->
				</div> <!-- /.container -->
			</div> <!-- /.footer-widget-area -->
			<div class="copyright-designer">
				<div class="container">	
					<div class="row">
						<div class="widget-heading info-heading">
							<a href="index.html" class="logo-footer">
								<img src="{{ asset('assets/images/logo/logo-footer2.png') }}" alt="LogoFooter">
								</a>
						</div>
						<br>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="copyright">
								<p>&copy; Copyright <?php echo date("Y"); ?> My Home, All Rights Reserved</p>
							</div> <!-- /.copyright -->
						</div> <!-- /.col- -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="designer">
								<p>
									Designed and 
									<i class="fa fa-heart"></i> by 
									<a href="https://www.facebook.com/beerus03/">Arthur ♥</a>
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
			<input type="hidden" value="{{url('/')}}" id="url" name="url">
		</footer> <!-- /.footer -->	
	</div>
@isset($data['js'])
        @foreach ($data['js'] as $item)
        <script type="text/javascript" src="{{  url('assets/js/') }}/{{$item}}"></script>   
        @endforeach
    @endisset
	<script type="text/javascript" src="{{  url('assets/js/functional.js') }}"></script>   
</body>
</html>