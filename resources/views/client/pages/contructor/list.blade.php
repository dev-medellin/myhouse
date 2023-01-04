<!-- BLOG MAIN AREA START -->
<section class="main-blog">
    <div class="container">	
        <div class="section-heading">
            <h5>Check Out</h5>
            <div class="main-title">
                <h2><span>Our</span> Contractors</h2>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        @isset($data['list'])
            @if($data['list']->project_count == 0 )
            <section style="text-align: center">
                <div class="container">	
                    <h2>No project matched your search criteria.</h2> 
                    <p>Try removing some search options to see more results.</p>
                </div> <!-- /.container -->
            </section>
            @else
                @foreach($data['list'] as $contructor)
                    <div class="blog-each-item">
                        <div class="row">
                            <!-- post begin -->
                            <article class="post-item">
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                    <div class="shadow-bottom-items">
                                        <div class="post-media" style="max-height: 300px !important; max-width: 430px !important">
                                        <a href="{{url('/contractor/'.$contructor->comp_slug)}}">
                                            <img src="{{url('/uploads/profiles/'.$contructor->comp_profile.'')}}" alt="Featured" style="max-height:360px;max-width:430px;width:100%;height:100%">
                                        </a>
                                        </div>
                                    </div>
                                </div> <!-- /.col- -->		
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">		
                                    <div class="post-inner">
                                        <div class="post-content">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{url('/contractor/'.$contructor->comp_slug)}}">{{$contructor->comp_name}}</a>
                                                </h5>
                                            </div>
                                            <div class="post-metadata">
                                            <span class="comment">
                                                <i class="fa fa-envelope"></i>
                                                <a href="#">{{$contructor->comp_email}}</a>
                                            </span>
                                            <span class="view">
                                                <i class="fa fa-phone"></i>
                                                <a href="#">{{$contructor->comp_contact}}</a>
                                            </span>
                                        </div> <!-- /.post-metadata -->
                                            <div class="post-entry">
                                                <p style="inline-size: 178px;overflow-wrap: break-word;width: 100%;">{{substr($contructor->comp_desc,0,300).'...'}}</p>
                                            </div>
                                            <div class="post-about">
                                                <a href="{{url('/contractor/'.$contructor->comp_slug)}}" class="post-btn">Read More</a>
                                            </div>
                                        </div> <!-- /.post-content -->
                                    </div> <!-- /.post-inner -->
                                </div> <!-- /.col- -->
                            </article> <!-- /.post-item -->
                        </div> <!-- /.row -->
                    </div> <!-- /.blog-each-item -->
                @endforeach
            @endif
        @endisset
    </div> <!-- /.container -->
</section> <!-- /.main-blog -->
<!-- /BLOG MAIN AREA END -->
<!-- PAGINATION AREA START -->
{{ $data['list']->links('vendor.pagination.default')}}
<!-- /PAGINATION AREA END -->