<section class="contact-with-us">
	<div class="">	
<!-- FEATURE CIRCLE AREA START -->
<section class="feature-circle">
    <div class="container">	
        <div class="section-heading wow zoomIn">
            <h5>Know More About Us</h5>
            <div class="main-title">
                <h2><span>My</span> Home</h2>
				<h5>Build your dream house with us</h5>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        <div class="circle-items wow fadeInUp">
            <div class="wheel">
                <div class="feature-things">
                    <span>Safety <strong>Area</strong></span>
                    <span><a href="#"><i class="flaticon-shield"></i></a></span>
                </div>
                <div class="feature-things">
                    <span>Good <strong>Furniture</strong></span>
                    <span><a href="#"><i class="flaticon-armchair"></i></a></span>
                </div>
                <div class="feature-things">
                    <span><a href="#"><i class="flaticon-support"></i></a></span>
                    <span>24 Hours <strong>Support</strong></span>
                </div>
                <div class="feature-things">
                    <span><a href="#"><i class="flaticon-command"></i></a></span>
                    <span>Good <strong>Neighbour</strong></span>
                </div>
                <!-- <div class="border-circle"></div> -->
                <div class="feature-main-img">
                    <img src="assets/images/bg/feature-bg.png" alt="Feature">
                </div>
            </div> <!-- /.wheel -->
        </div> <!-- /.circle-items -->
    </div> <!-- /.container -->
</section> <!-- /.feature-circle -->
<!-- /FEATURE CIRCLE AREA END -->

<!-- TESTIMONIAL AREA START -->
<section class="testimonial">
    <div class="bg-img-over-effect"></div>
    <div class="container">
        <div class="section-heading if-bg-colorful">
            <h5>Look at Our</h5>
            <div class="main-title">
                <h2><span>Client</span> Testimonial</h2>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        <div class="row">
            <div id="testimonial-carousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2">
                    <div class="carousel-inner">
                        <!-- Carousel items -->
                        @isset($data['testimony']['approved'])
                            @foreach($data['testimony']['approved'] as $testi)
                                <div class="item active testi_message">
                                    <div class="client-opition">
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="client-thumb">
                                                <img src="{{url('/assets/faces/dummy-user-img.png')}}" alt="Client">
                                            </div>
                                        </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                <div class="client-focus">
                                                    <div class="client-mind">
                                                        <h4>{{$testi->fname." ".$testi->lname}}</h4>
                                                    </div>
                                                    <div class="designation">
                                                        <h5>{{$testi->email}}</h5>
                                                    </div>
                                                    <div class="feedback">
                                                        <img src="assets/images/icons/5star.png" alt="feedback">
                                                    </div>
                                                </div> <!-- /.client-focus -->
                                            </div>
                                        </div> <!-- /.row -->
                                    </div> <!-- /.client-opition -->
                                    <div class="client-said">
                                        <p>{{$testi->message}}</p>

                                        <div class="signature">
                                            <img src="assets/images/client/signature.png" alt="Signature">
                                        </div>
                                    </div> <!-- /.client-said -->
                                </div> <!-- /.item -->
                            @endforeach
                        @endisset
                    </div> <!-- /.carousel-inner -->
                </div> <!-- /.col- -->
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#testimonial-carousel" data-slide="prev">
                    <i class="fa fa-long-arrow-left"></i>
                </a>
                <a class="carousel-control right" href="#testimonial-carousel" data-slide="next">
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div> <!-- /#testimonial-carousel -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.testimonial-->
<!-- /TESTIMONIAL AREA END -->
	</div> <!-- /.container -->
</section> 