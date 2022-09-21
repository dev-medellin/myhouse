@include('client.pages.projects.area')
<!-- PROPERTIES BLOG AREA START -->
<section class="propertise-blog">
    <div class="container">	
        <div class="section-heading">
            <h5>Check Out</h5>
            <div class="main-title">
                <h2><span>Our</span> Properties</h2>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        <div class="row">
            <div class="blog-list">
                @isset($data['projects'])
                    @foreach($data['projects'] as $proj)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <!-- post begin -->
                        <article class="post-item border-right shadow-bottom-items">
                            <div class="post-media">
                                <img src="assets/images/featured/1.jpg" alt="Featured">
                            </div>
                            <div class="post-inner border-around">
                                <div class="post-metadata">
                                    <span class="total-place">
                                        <i class="flaticon-ten-commandment"></i>
                                        <a href="#">13K Sq Ft</a>
                                    </span>
                                    <span class="bedroom">
                                        <i class="flaticon-bed"></i>
                                        <a href="#">4 bedrooms</a>
                                    </span>
                                    <span class="bathroom"> 
                                        <i class="flaticon-bathtub"></i>
                                        <a href="#">3 Bathrooms</a>
                                    </span>    
                                </div> <!-- /.post-metadata -->
                                <div class="post-content border-top">
                                    <div class="post-title">
                                        <h5><a href="{{url('/projects/'.$proj->proj_slug)}}">{{$proj->proj_name}}</a></h5>
                                    </div>
                                    <div class="post-entry">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
                                    </div>
                                    <div class="post-about border-top">
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            530 B.I.D.C Road, Khulna
                                        </span>
                                        <span>
                                            <strong>$1500</strong>/month
                                        </span>
                                    </div>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-inner -->
                        </article> <!-- /.post-item -->
                    </div> <!-- /.col- -->
                    @endforeach
                @endisset
            </div> <!-- /.blog-list -->
        </div> <!-- /.row -->  
    </div> <!-- /.container -->
</section> <!-- /.propertise-blog -->
<!-- /PROPERTIES BLOG AREA END -->	

<!-- PAGINATION AREA START -->
<!-- /PAGINATION AREA END -->