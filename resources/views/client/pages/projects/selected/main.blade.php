@include('client.pages.projects.area')
		<!-- SHOWCASE FEATURE AREA START -->
		<section class="showcase-feature">
			<div class="container">	
				<div class="section-heading">
					<h5>Wish List</h5>
					<div class="main-title">
						<h2><span>Project</span> Details</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>.
				</div> <!-- /.section-heading -->
				<div id="showcase-main-thumb-slider-section">
					<!-- Showcase Slider Main -->
					<div id="showcase-main-area-slider">
								@forelse ($data['image'] as $image)
								<div class="items">
									<div class="img-pot" data-bg-img="{{url('/uploads/images/'.$image->image_path.'')}}"></div>
								</div>
								@empty
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
					</div> <!-- /#showcase-main-area-slider -->
					<!-- Showcase Slider Thumbnail -->
					<div id="showcase-thumb-slider">
								@forelse ($data['image'] as $image)
									<div class="items">
										<div class="img-pot" data-bg-img="{{url('/uploads/images/'.$image->image_path.'')}}"></div>
									</div>
								@empty
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
									<h3>{{$data['project']->proj_name}} <?php echo ($data['wish'] != false ? '<i class="fa fa-star"></i>' : '')?></h3>
									<a href="{{url('/contractor/'.$data['project']->comp_slug)}}">
										<p><i class="fa fa-building"></i> Project By : {{$data['project']->comp_name}}</p>
									</a>
								</div>
								<div class="awesome-footer">
									<p style="inline-size: 178px;overflow-wrap: break-word;width: 100%;">{{$data['project']->proj_description}}</p>
									@if(!$data['wish'])
									<div class="awesome-btn">
										<input type="hidden" value="{{$data['project']->id}}" id="projectID" name="projectID">
										<a href="javascrtipt:void(0);" id="wishList" class="dream-btn">Add to Wishlist</a>
									</div>
									@endif
								</div>
							</article> <!-- /.awesome-content -->
						</div> <!-- /.col- -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="total-package shadow-bottom-items">
								<strong>Estimated Price : ₱{{number_format($data['project']->proj_est_price, 2, '.',',')}}</strong>
								<div class="price-list">
									<ul>
										<li>
											<span>Total area</span>
											<span>{{$data['project']->proj_area}}sqm</span>
										</li>
										<!-- <li>
											<span>Total rooms</span>
											<span>{{$data['project']->bed_room}}</span>
										</li> -->
										@if($data['project']->bed_room != NULL)
										<li>
											<span>Bed rooms</span>
											<span>{{$data['project']->bed_room}}</span>
										</li>
										@endif

										@if($data['project']->bath_room != NULL)
										<li>
											<span>Bath room</span>
											<span>{{$data['project']->bath_room}}</span>
										</li>
										@endif

										@if($data['project']->stories != NULL)
										<li>
											<span>Stories</span>
											<span>{{$data['project']->stories}}</span>
										</li>
										@endif

										@if($data['project']->fence != NULL)
										<?php
                                             $fence = str_replace('_', ' ', $data['project']->fence)
                                             ?>
										<li>
											<span>Fence</span>
											<span>{{ucwords($fence)}}</span>
										</li>
										@endif

										@if($data['project']->roof != NULL)
										<?php
                                             $roof = str_replace('_', ' ', $data['project']->roof)
                                             ?>
										<li>
											<span>Roof</span>
											<span>{{ucwords($roof)}}</span>
										</li>
										@endif
									</ul>
								</div>
							</div> <!-- /.total-package -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->  
                    <div class="mt-5" id="display_materials">
                        @isset($data['materials_exp'])
							<div class="awesome-btn" style="float: right !important;">
								<a href="{{url('users/generate-pdf/'.$data['project']->project_id)}}" style="background-color:#0089e9 !important" class="dream-btn">PDF Download</a>
							</div>

							@include('client.pages.projects.selected.table')
						@endisset
                    </div>
				</div> <!-- /.awesome-items -->
			</div> <!-- /.container -->
		</div> <!-- /.properties-things -->
		<!-- /AWESOME PROPERTIES AREA END -->