@include('client.pages.projects.area')
<!-- PROPERTIES BLOG AREA START -->
<section class="propertise-blog">
    <div class="container">	
        <div class="section-heading">
            <h5>Check Out</h5>
            <div class="main-title">
                <h2><span>Our</span> Projects</h2>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        <div class="row">
            <div class="blog-list">
                <h2>{{$data['projects']->project_count}} search {{$data['projects']->project_count > 1 ? 'results' : 'result'}}</h2>
                <div class="search_text_area">

                </div>
                @isset($data['projects'])
                    @if($data['projects']->project_count == 0 )
                    <section style="text-align: center">
                        <div class="container">	
                            <h2>No project matched your search criteria.</h2> 
                            <p>Try removing some search options to see more results.</p>
                        </div> <!-- /.container -->
                    </section>
                    @else
                        @foreach($data['projects'] as $proj)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <!-- post begin -->
                            <article class="post-item border-right shadow-bottom-items">
                                <div class="post-media">
                                <a href="{{url('/projects/'.$proj->proj_slug)}}">
                                    <img src="{{url('/thumbnail/'.$proj->thumbnail.'')}}" alt="Featured" style="max-height:360px;max-width:400px;width:100%;height:100%">
                                </a>
                                </div>
                                <div class="post-inner border-around">
                                    <div class="post-metadata">
                                        @if($proj->proj_area != NULL)
                                        <span class="total-place">
                                            <i class="flaticon-ten-commandment"></i>
                                            <a href="#">{{$proj->proj_area}} Sq Meter</a>
                                        </span>
                                        @endif

                                        @if($proj->bed_room != NULL)
                                        <span class="bedroom">
                                            <i class="flaticon-bed"></i>
                                            <a href="#">{{$proj->bed_room}} bedrooms</a>
                                        </span>
                                        @endif

                                        @if($proj->bath_room != NULL)
                                        <span class="bathroom"> 
                                            <i class="flaticon-bathtub"></i>
                                            <a href="#">{{$proj->bath_room}} Bathrooms</a>
                                        </span>   
                                        @endif

                                        @if($proj->stories != NULL)
                                        <span class="bathroom"> 
                                            <i class="flaticon-house"></i>
                                            <a href="#">{{$proj->stories}} Stories</a>
                                        </span>  
                                        @endif

                                        @if($proj->fence != NULL)
                                        <span class="bathroom"> 
                                             <i class="fa-regular fa-fence"></i>
                                             <?php
                                             $fence = str_replace('_', ' ', $proj->fence)
                                             ?>
                                            <a href="#"> {{ucwords($fence)}}</a>
                                        </span>
                                        @endif

                                        @if($proj->roof != NULL)
                                        <span class="bathroom"> 
                                             <i class="fa fa-fence"></i>
                                             <?php
                                             $roof = str_replace('_', ' ', $proj->roof)
                                             ?>
                                            <a href="#"> {{ucwords($roof)}}</a>
                                        </span>
                                        @endif
                                    </div> <!-- /.post-metadata -->
                                    <div class="post-content border-top">
                                        <div class="post-title">
                                            <h5><a href="{{url('/projects/'.$proj->proj_slug)}}">{{$proj->proj_name}}</a></h5>
                                        </div>
                                        <div class="post-entry" style="max-height: 76px;height: 76px;">
                                            <p>{{substr($proj->proj_description,0,50).'...'}}</p>
                                        </div>
                                        <div class="post-about border-top">
                                            <span>
                                            Estimated Price : <strong>₱{{number_format($proj->proj_est_price, 2, '.',',')}}</strong>
                                            </span>
                                        </div>
                                    </div> <!-- /.post-content -->
                                </div> <!-- /.post-inner -->
                            </article> <!-- /.post-item -->
                        </div> <!-- /.col- -->
                        @endforeach
                    @endif
                @endisset
            </div> <!-- /.blog-list -->
        </div> <!-- /.row -->  
    </div> <!-- /.container -->
</section> <!-- /.propertise-blog -->
<!-- /PROPERTIES BLOG AREA END -->	

<!-- PAGINATION AREA START -->
{{ $data['projects']->links('vendor.pagination.default')}}
<!-- /PAGINATION AREA END -->
