@include('client.pages.projects.area')
		<!-- SHOWCASE FEATURE AREA START -->
		<section class="showcase-feature">
			<div class="container">	
				<div class="section-heading">
					<h5>Wish List</h5>
					<div class="main-title">
						<h2><span>Project</span> Details</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<div id="showcase-main-thumb-slider-section">
					<!-- Showcase Slider Main -->
					<div id="showcase-main-area-slider">
						@isset($data['image'])
							@if($data['image'])
								@foreach($data['image'] as $image)
								<div class="items">
									<div class="img-pot" data-bg-img="{{url('storage/').$image->image_path}}"></div>
								</div>
								@endforeach
							@else
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/1.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/2.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/3.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/4.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/5.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/6.jpg"></div>
							</div>
							@endif
						@endisset
						<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/1.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/2.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/3.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/4.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/5.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/6.jpg"></div>
							</div>
					</div> <!-- /#showcase-main-area-slider -->
					<!-- Showcase Slider Thumbnail -->
					<div id="showcase-thumb-slider">
						@isset($data['image'])
							@if($data['image'])
								@foreach($data['image'] as $image)
								<div class="items">
									<div class="img-pot" data-bg-img="{{url('storage/').$image->image_path}}"></div>
								</div>
								@endforeach
							@else
						@endif
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/1.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/2.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/3.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/4.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/5.jpg"></div>
							</div>
							<div class="items">
								<div class="img-pot" data-bg-img="../assets/images/slider/showcase/6.jpg"></div>
							</div>
						@endisset
					</div> <!-- /#showcase-thumb-slider -->
				</div> <!-- /#showcase-main-thumb-slider-section --> 
			</div> <!-- /.container -->
		</section> <!-- /.showcase-feature -->
		<!-- /SHOWCASE FEATURE AREA END -->

		<!-- AWESOME PROPERTIES AREA START -->
		<div class="properties-things">
			<div class="container">	
				<div class="awesome-items stylist-bottom-left">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<article class="awesome-content">
								<div class="awesome-header stylist-bottom-right">
									<h3>{{$data['project']->proj_name}}</h3>
									<!-- <p><i class="fa fa-map-marker"></i> 530, Khan A Sabur Road, Khulna, Bangladesh</p> -->
								</div>
								<div class="awesome-footer">
									<p>{{$data['project']->proj_description}}</p>
									<div class="awesome-btn">
										<a href="#" class="dream-btn">Book Now</a>
									</div>
								</div>
							</article> <!-- /.awesome-content -->
						</div> <!-- /.col- -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="total-package shadow-bottom-items">
								<strong>Est. Price  ₱{{$data['project']->proj_est_price}}</strong>
								<div class="price-list">
									<ul>
										<li>
											<span>Total area</span>
											<span>{{$data['project']->proj_area}}m</span>
										</li>
										<!-- <li>
											<span>Total rooms</span>
											<span>{{$data['project']->bed_room}}</span>
										</li> -->
										<li>
											<span>Bed rooms</span>
											<span>{{$data['project']->bed_room}}</span>
										</li>
										<li>
											<span>Bath room</span>
											<span>{{$data['project']->bath_room}}</span>
										</li>
										<li>
											<span>Stories</span>
											<span>{{$data['project']->stories}}</span>
										</li>
									</ul>
								</div>
							</div> <!-- /.total-package -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->  
                    <div class="mt-5 " id="display_materials">
                        @isset($data['materials']->materials_desc)
							{!!$data['materials']->materials_desc!!}
						@endisset
                    </div>
				</div> <!-- /.awesome-items -->
			</div> <!-- /.container -->
		</div> <!-- /.properties-things -->
		<!-- /AWESOME PROPERTIES AREA END -->