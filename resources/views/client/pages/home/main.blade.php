<!-- RENEWAL AREA START -->
<section class="renewal">
    <div class="container">	
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="renewal-items">
                    <div class="renewal-icon">
                        <i class="flaticon-house"></i>
                    </div>
                    <div class="title">
                        <h3><a href="#">BEST HOME</a></h3>
                    </div>
                    <div class="content">
                        <p>My home will be your best home and it is for everyone, it exist to help the modest contractors and foreman to share their talent with you. My home will be the way for you to find your best home!</p>
                    </div>
                 <!--    <div class="renewal-btn">
                        <a href="#" class="fresh-btn">Read more</a>
                    </div> -->
                </div> <!-- /.renewal-items -->
            </div> <!-- /.col- -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="renewal-items">
                    <div class="renewal-icon">
                        <i class="flaticon-burj-al-arab-1"></i>
                    </div>
                    <div class="title">
                        <h3><a href="#">BEST PEOPLE</a></h3>
                    </div>
                    <div class="content">
                        <p>My home contractors and foreman are skilled even though they’re called modest, they have the best talent and we invite people who can testify how trustful and skillful our people, they rate them the best!</p>
                    </div>
               <!--      <div class="renewal-btn">
                        <a href="#" class="fresh-btn">Read more</a>
                    </div> -->
                </div> <!-- /.renewal-items -->
            </div> <!-- /.col- -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="renewal-items">
                    <div class="renewal-icon">
                        <i class="flaticon-mansion"></i>
                    </div>
                    <div class="title">
                        <h3><a href="#">BEST CHOICE</a></h3>
                    </div>
                    <div class="content">
                        <p>My home is giving everyone the best choice, you can save whatever home projects you love and you can also freely used it even without contacting our contractors. My Home is here to help everyone have the best choice and comfortable home.</p>
                    </div>
            <!--         <div class="renewal-btn">
                        <a href="#" class="fresh-btn">Read more</a>
                    </div> -->
                </div> <!-- /.renewal-items -->
            </div> <!-- /.col- -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="renewal-items">
                    <div class="renewal-icon">
                        <i class="flaticon-cityscape"></i>
                    </div>
                    <div class="title">
                        <h3><a href="#">BEST PLAN</a></h3>
                    </div>
                    <div class="content">
                        <p>My home have the best plan where you can see the 2D and 3D version of every floor plan, you can see the feature of the home project such as the number of bedrooms, bathrooms and we are also giving you home floor plans with 2 stories <3</p>
                    </div>
               <!--      <div class="renewal-btn">
                        <a href="#" class="fresh-btn">Read more</a>
                    </div> -->
                </div> <!-- /.renewal-items -->
            </div> <!-- /.col- -->
        </div> <!-- /.row -->  
    </div> <!-- /.container -->
</section> <!-- /.renewal -->
<!-- /RENEWAL AREA END -->

<!-- ROOM FEATURE AREA START -->
<section class="room-feature" style="
    min-height: 670px;
    max-height: 670px;
">
    <div class="bg-img-over-effect"></div>
    <div class="container">	
        <div class="section-heading if-bg-colorful">
            <h5>Recommended</h5>
            <div class="main-title">
                <h2><span>Our</span> Feature</h2>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        <div class="room-feature-all">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="feature-content wow fadeInLeft">
                        <h3>Our Awesome Feature</h3>
                        <p>Are you having a hard time thinking how you will going to build your new home? Find your dream home today by exploring variety of beautiful home designs and find the best fit for you.</p>
                  <!--       <div class="room-feature-btn">
                            <a href="#" class="dream-btn">Explore</a>
                        </div> -->
                    </div> <!-- /.feature-content -->
                </div> <!-- /.col- -->
                <!-- Room Slider Begin -->
                <?php if(!empty($data['project'])): ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="room-slider" class="carousel slide room-slider wow fadeInRight" data-ride="carousel" data-interval="3000" style="display: none !important;">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach ($data['project'] as $proj => $value)
                                <li data-target="#room-slider" data-slide-to="{{$proj}}" class="<?php echo ($proj != 1 ? 'active' :'') ?>"></li>
                            @endforeach
                        </ol>
                        <!-- Wrapper for slides (Vertical) -->
                        <div class="carousel-inner vertical" role="listbox">
                            @foreach ($data['project'] as $proj => $value)
                                <div class="item <?php echo ($proj != 1 ? 'active' :'') ?> item-bg-{{$proj+1}}" style='background-image: url({{url("thumbnail/$value->thumbnail")}});'>
                                    <div class="bg-img-over-effect"></div>
                                    <div class="slider-in-room">
                                        <div class="content">
                                            <h3>{{$value->proj_name}}</h3>
                                            <p>{{substr($value->proj_description,0,100).'...'}}</p>
                                        </div>
                                        <div class="slider-meta">
                                            <div class="info">
                                                <span class="building">
                                                    <img src="assets/images/icons/building.png" alt="icon">
                                                    <a href="#">50sqm</a>
                                                </span>
                                                <span class="technology">                                            
                                                    <img src="assets/images/icons/technology.png" alt="icon">
                                                    <a href="#">4</a>
                                                </span>
                                                <span class="technology">                                            
                                                    <img src="assets/images/icons/technology.png" alt="icon">
                                                    <a href="#">4</a>
                                                </span>
                                                <span class="technology">                                            
                                                    <img src="assets/images/icons/technology.png" alt="icon">
                                                    <a href="#">4</a>
                                                </span>
                                                <span class="bath"> 
                                                    <img src="assets/images/icons/bath.png" alt="icon">
                                                    <a href="#">2</a>
                                                </span>
                                            </div>
                                            <div class="price">
                                                <a href="#" class="price-btn">₱600K-₱1.6M</a>
                                            </div>
                                        </div> <!-- /.slider-meta -->
                                    </div> <!-- /.slider-in-room -->
                                </div> <!-- /.item -->
                            @endforeach
                        </div> <!-- /.carousel-inner -->
                    </div> <!-- /#room-slider -->
                </div> <!-- /.col- -->
                <?php endif;?>
            </div> <!-- /.row -->  
        </div> <!-- /.room-feature-all -->
    </div> <!-- /.container -->
</section> <!-- /.room-feature -->
<!-- /ROOM FEATURE AREA END -->

<!-- SHOWCASE FEATURE AREA START -->
<section class="showcase-feature">
    <div class="container">	
        <div class="section-heading">
            <h5>Look At</h5>
            <div class="main-title">
                <h2><span>Our</span> Showcase</h2>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        <div id="showcase-main-thumb-slider-section">
            <!-- Showcase Slider Main -->
            <div id="showcase-main-area-slider">
            @foreach ($data['project'] as $proj => $value)
                @if($value->thumbnail != "")
                    <div class="items">
                        <div class="img-pot" data-bg-img="{{url('thumbnail/'.$value->thumbnail.'')}}"></div>
                    </div>
                @endif
            @endforeach
            </div> <!-- /#showcase-main-area-slider -->
            <!-- Showcase Slider Thumbnail -->
            <div id="showcase-thumb-slider">
            @foreach ($data['project'] as $proj => $value)
                @if($value->thumbnail != "")
                    <div class="items">
                        <div class="img-pot" data-bg-img="{{url('thumbnail/'.$value->thumbnail.'')}}"></div>
                    </div>
                @endif
            @endforeach
            </div> <!-- /#showcase-thumb-slider -->
        </div> <!-- /#showcase-main-thumb-slider-section --> 
    </div> <!-- /.container -->
</section> <!-- /.showcase-feature -->
<!-- /SHOWCASE FEATURE AREA END -->

<!-- FEATURES AREA START -->
<section class="features">
    <div class="bg-img-over-effect"></div>
    <div class="container">	
        <div class="features-items">
            <ul>
                <li class="wow fadeInLeft">
                    <a href="#"><i class="flaticon-armchair"></i></a>
                    <h5>Good Furniture</h5>
                </li>
                <li class="wow zoomIn">
                    <a href="#"><i class="flaticon-shield"></i></a>
                    <h5>Safety Area</h5>
                </li>
                <li class="wow zoomIn">
                    <a href="#"><i class="flaticon-support"></i></a>
                    <h5>24 Hours Support</h5>
                </li>
                <li class="wow fadeInRight">
                    <a href="#"><i class="flaticon-command"></i></a>
                    <h5>Skilled Workers</h5>
                </li>
            </ul>
        </div> <!-- /.features-items -->
    </div> <!-- /.container -->
</section> <!-- /.features -->
<!-- /FEATURES AREA END -->

<!-- BLOG AREA START -->
<section class="blog">
    <div class="container">	
        <div class="section-heading">
            <h5>Some of</h5>
            <div class="main-title">
                <h2><span>Our</span> Blog</h2>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        <div class="row">
            <div class="blog-list" style="display:flex;flex-wrap:wrap">
            @foreach ($data['project'] as $proj => $value)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <!-- post begin -->
                    <article class="post-item border-right shadow-bottom-items">
                        <div class="post-media">
                            <img src="{{url('thumbnail/'.$value->thumbnail.'')}}" alt="Featured" style="max-height:360px;max-width:400px;width:100%;height:100%;min-height: 260px;">
                        </div>
                        <div class="post-inner border-around">
                            <div class="post-metadata">
                            <span class="total-place">
                                <i class="flaticon-ten-commandment"></i>
                                <a href="#">{{$value->proj_area}} Sq Meter</a>
                            </span>
                            <span class="bedroom">
                                <i class="flaticon-bed"></i>
                                <a href="#">{{$value->bed_room}} bedrooms</a>
                            </span>
                            <span class="bathroom"> 
                                <i class="flaticon-bathtub"></i>
                                <a href="#">{{$value->bath_room}} Bathrooms</a>
                            </span>   
                            <span class="bathroom"> 
                                <i class="flaticon-house"></i>
                                <a href="#">{{$value->stories}} Stories</a>
                            </span>  
                            </div> <!-- /.post-metadata -->
                            <div class="post-content border-top">
                                <div class="post-title">
                                    
                                    <h5><a href="{{url('/projects/'.$value->proj_slug)}}">{{$value->proj_name}}</a></h5>
                                </div>
                                <div class="post-entry">
                                    <p>{{substr($value->proj_description,0,100).'...'}}</p>
                                </div>
                                <div class="post-about border-top">
                                    <a href="{{url('/projects/'.$value->proj_slug)}}" class="read-more">Read More</a>
                                </div>
                            </div> <!-- /.post-content -->
                        </div> <!-- /.post-inner -->
                    </article> <!-- /.post-item -->
                </div> <!-- /.col- -->
            @endforeach
            </div> <!-- /.blog-list -->
        </div> <!-- /.row -->  
    </div> <!-- /.container -->
</section> <!-- /.blog -->
<!-- /BLOG AREA END -->