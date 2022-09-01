		<!-- MAIN SLIDER AND PROPERTY SEARCH AREA START-->
		<section id="main-slider" class="carousel main-slider">
			<div class="carousel slide">
				<div class="carousel-inner">

					<div class="item active item-bg-1">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="slider-items">
										<div class="animation animated-item-4">
											<!-- Only Slider Top Style -->
											<div class="slider-head-style">
											</div>
										</div>
										<div class="mian-heading">
											<h2>Find Your <span class="typed-from-js"></span></h2>
											<div class="main-title">
												<h3>With Us</h3>
												<strong></strong> <!-- Use for heading after effect -->
											</div>
										</div>
									</div> <!-- /.slider-items -->
								</div>
							</div>
						</div>
					</div> <!--/.item--> 
					<div class="item item-bg-2">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="slider-items">
										<div class="animation animated-item-4">
											<!-- Only Slider Top Style -->
											<div class="slider-head-style">
											</div>
										</div>
										<div class="mian-heading">
											<h2>Find Your <span class="typed-from-js"></span></h2>
											<div class="main-title">
												<h3>With Us</h3>
												<strong></strong> <!-- Use for heading after effect -->
											</div>
										</div>
									</div> <!-- /.slider-items -->
								</div>
							</div>
						</div>
					</div> <!--/.item--> 
					<div class="item item-bg-3">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="slider-items">
										<div class="animation animated-item-4">
											<!-- Only Slider Top Style -->
											<div class="slider-head-style">
											</div>
										</div>
										<div class="mian-heading">
											<h2>Find Your <span class="typed-from-js"></span></h2>
											<div class="main-title">
												<h3>With Us</h3>
												<strong></strong> <!-- Use for heading after effect -->
											</div>
										</div>
									</div> <!-- /.slider-items -->
								</div>
							</div>
						</div>
					</div> <!--/.item--> 

					<!-- Property Search Area Start -->
					<div class="property-search-area container">
						<div class="property-search-form ">
							<div class="advanced-search-sec row">
								<form method="get" action="#">
									<div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-17 search-field">
				                    	<label for="property-location">Location</label>
				                        <select id="property-location" name="Cities">
				                            <option value="0">All Cities</option>
				                            <option value="1">Chicago</option>
				                            <option value="2">Phoenix</option>
				                            <option value="3">San Diego</option>
				                            <option value="4">Austin</option>
				                            <option value="5">Detroit</option>
				                        </select>
				                    </div>
									<div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-17 search-field">
										<label for="proeprty-type">Property Type</label>
										<select id="proeprty-type" name="Property-type">
											<option value="0">All Types</option>
											<option value="1">Apartment</option>
											<option value="2">House</option>
											<option value="3">Villa</option>
											<option value="4">Office</option>
											<option value="5">Condo</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field">
										<label for="property-room">Total Room</label>
										<select id="property-room" name="Total-room">
											<option value="0">Choose</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">+5</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field">
										<label for="property-bathroom">Bathroom</label>
										<select id="property-bathroom" name="Bathrooms">
											<option value="0">Choose</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">+5</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-me-29 col-lg-me-25 search-field">
										<div class="price-range">
											<div class="property-price">
												<label>Price Range</label>
												<div class="price-range">
													<div class="price-input-count">
														<input type="text" name="price min" id="price-min" />
													</div>
													<span class="price-money">-</span>
													<div class="price-input-count">
														<input type="text" name="price max" id="price-max" />
													</div>
												</div>
												<div class="price-range-select">
													<div class="priceSlider"></div>
												</div>
											</div> <!-- /.property-price -->
										</div> <!-- /.price-range -->
									</div>
									<div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-15 search-field">
										<div class="submit">
											<button type="submit" value="Search" class="dream-btn">Search</button>
										</div>
									</div>
								</form>
							</div> <!-- /.advanced-search-sec -->
							<!-- Show or Hide Property -->
							<a class="more-options close-element"></a>
						</div>
					</div> <!-- /.property-search-area -->
					<!-- Property Search Area End -->
				</div> <!-- /.carousel-inner -->
			</div> <!--/.carousel--> 
			<a class="prev hidden-xs" href="#main-slider" data-slide="prev"> 
				<i class="fa fa-long-arrow-left"></i>
			</a> 
			<a class="next hidden-xs" href="#main-slider" data-slide="next"> 
				<i class="fa fa-long-arrow-right"></i> 
			</a> 
		</section> <!-- /.main-slider -->
		<!-- /MAIN SLIDER AND PROPERTY SEARCH AREA START --> 
		@include('modals.index')
