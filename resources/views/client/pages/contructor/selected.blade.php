<!-- SINGLE AREA START -->
<div class="single">
    <div class="container">	
        <div class="section-heading">
            <h5>Know more</h5>
            <div class="main-title">
                <h2><span>About</span> {{$data['contructor']['comp_name']}}</h2>
                <strong></strong> <!-- Use for heading after effect -->
            </div>
        </div> <!-- /.section-heading -->
        <div class="row">
            <!-- SINGLE POST START -->
            <div class="single">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <!-- post begin -->
                    <article class="post-item single-item">
                        <div class="shadow-bottom-items">
                            <div class="post-media">
                                <img src="{{url('/uploads/profiles/'.$data['contructor']['comp_profile'].'')}}" alt="Featured" style="max-height:400px;width:100%;height:100%">
                            </div>
                        </div>
                        <div class="post-inner">
                            <div class="post-metadata">
                                <span class="author">
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:{{$data['contructor']['comp_email']}}"><span>Email Us: </span> {{$data['contructor']['comp_email']}}</a>
                                </span>
                                <span class="posted-date">
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:{{$data['contructor']['comp_contact']}}"><span>Call Us: </span> {{$data['contructor']['comp_contact']}}</a>
                                </span>    
                            </div> <!-- /.post-metadata -->
                            <div class="post-content">
                                <div class="post-title">
                                    <h5><a href="mailto:{{$data['contructor']['comp_email']}}"><span></span> {{$data['contructor']['comp_name']}}</a></h5>
                                </div>
                                <div class="post-entry">
                                    <p style="inline-size: 178px;overflow-wrap: break-word;width: 100%;">{{$data['contructor']['comp_desc']}}</p>
                            </div> <!-- /.post-content -->
                        </div> <!-- /.post-inner -->
                    </article> <!-- /.post-item -->
                    <!-- Comment Area -->
                    
                    <div class="cooment-area">
                        <!-- Comment Form -->
                        <div  class="comment-form">
                            <div class="title">
                                <h3>Message Us here</h3>
                            </div>
                            <div class="row">
                                <form id="contactForm">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <input type="hidden" value="{{$data['contructor']['comp_email']}}" name="cont_email" id="cont_email">
                                            <textarea class="form-control" id="message" name="message" placeholder="Text" required></textarea>
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="form-group col-xs-12 col-md-12 col-lg-12">
                                        <button type="submit" name="submit" class="comment-form-btn gen-btn">Send Message!</button>
                                    </div>
                                </form>
                            </div> <!-- /.row -->
                        </div> <!-- /.comment-form -->


                    </div> <!-- /.cooment-area -->
                </div> <!-- /.col- -->
            </div> <!-- /.single -->
            <!-- /SINGLE POST END -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.single -->
<!-- /SINGLE AREA END -->