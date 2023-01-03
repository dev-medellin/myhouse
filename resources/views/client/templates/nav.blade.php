<!-- BEGIN LOADING -->
    <!-- <div id="loader" class="loader">
    <div class="implode">
        <div class="implode-in">
            <div id="cover" class="acting"> 
                <span></span> 
                <span></span> 
                <span></span> 
                <span></span> 
                <span></span> 
                <span></span> 
                <span></span>
            </div>
        </div>
    </div> 
</div>  -->
<!-- /#loader -->
<!-- END LOADING -->
    
<!-- HEADER AREA START -->
<header class="header fixed">
    <!-- Header Top Begin -->
    <div class="header-top hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-5">
                    <div class="social-to">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div> <!-- /.social-to -->
                </div> <!-- /.col- -->
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-7">
                    <div class="contact-to">
                        <div class="contact-text">
                            <ul>
                                <li><a href="https://www.google.com/maps/search/?api=1&query=14.1699,121.2441" target="_blank"><i class="fa fa-map-marker"></i>Los Baños, Laguna, Philippines</a></li>
                                @if(!Auth::check())
                                    <li><a href="javascript:void(0)" class="loginBtn"><i class="fa fa-user"></i>Sign Up</a></li>
                                @endif
                            </ul>
                        </div>
                    </div> <!-- /.contact-to -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.header-top -->

    <!-- Main Menu Area Begin -->
    <div class="container">		
        <div class="main-menu-deputy">
            <!-- Navbar visibility controls (<800px) -->
            <div class="menu-when-collapse"></div>
            <div class="menu-collapse-after-effect"></div>
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('assets/images/logo/logo2.png') }}" alt="Logo">
                </a>
            </div><!-- /.logo -->
        </div><!-- /.main-menu-deputy -->
        <div class="main-menu">
            <div class="close-nav"></div> <!-- Close the menu for mobile -->				
            <ul class="main-nav">
                <li <?php echo $data['page'] == 'home' ? 'class="active"' : '';?> ><a href="{{url('/')}}">Home</a></li>
                <li <?php echo $data['page'] == 'about' ? 'class="active"' : '';?>><a href="{{url('/about')}}">About</a></li>
                <li <?php echo $data['page'] == 'project' ? 'class="active"' : '';?> ><a href="{{url('/projects')}}">Projects</a></li>
                <li <?php echo $data['page'] == 'list' ? 'class="active"' : '';?> ><a href="{{url('/contructor/list')}}">Contructor List</a></li>
                <!-- <li><a href="#" style="color:red">Pages</a>
                    <ul class="sub-nav">
                        <li><a href="overview.html">Overview</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="properties.html">Properties</a></li>
                        <li><a href="property-details.html">Property Details</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="single.html">Right Sidebar Page</a></li>
                        <li class="active"><a href="index.html">Home</a></li>
                    </ul>
                </li> -->
                <!-- <li <?php echo $data['page'] == 'contact' ? 'class="active"' : '';?>><a href="{{url('/contact')}}" >Contact</a></li> -->
                @if(Auth::check())
                @if(Auth::user()->role != "2")
                <li <?php echo $data['page'] == 'be_contructor' ? 'class="active"' : '';?>><a href="{{url('users/contructor/register')}}" >Be Our Contructor</a></li>
                @endif;
                <li><a href="#">Welcome, {{Auth::user()->fname}}</a>
                    <ul class="sub-nav" id="myNav">
                        <li><a href="javascript:void(0);" >My Page</a>
                            <ul class="sub-nav" id="myNav">
                                <li><a href="{{url('users/mypage')}}">My User Page</a></li>
                                <li><a href="{{url('contructor/dashboard')}}">Contructor Panel</a></li>
                            </ul>
                        </li>
                        @if(Auth::user()->role == 1)
                        <li><a href="{{url('admin/dashboard')}}" >Admin Panel</a></li>
                        @endif
                        <li><a href="javascript:void(0)" class="logoutBtn" >Logout</a></li>
                    </ul>
                </li>
                @endif
            </ul><!-- /.main-nav -->

            <!--  Header Top visibility controls (=<991px) -->
            <div class="header-top visible-xs visible-sm">
                <div class="visible-xs visible-sm">
                    <div class="social-to">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div> <!-- /.social-to -->
                </div> <!-- /.col- -->
                <div class="visible-xs visible-sm">
                    <div class="contact-to">
                        <div class="contact-text">
                            <ul>
                                <li><a href="#"><i class="fa fa-map-marker"></i>23 Aro Lane, NY, USA</a></li>
                                <li><a href="#"><i class="fa fa-mobile-phone"></i>+345-000-111-2222</a></li>
                                @if(!Auth::check())
                                    <li><a href="javascript:void(0)" class="loginBtn"><i class="fa fa-user"></i>Sign Up</a></li>
                                @endif
                            </ul>
                        </div>
                    </div> <!-- /.contact-to -->
                </div> <!-- /.col- -->
            </div> <!-- /.header-top -->
        </div><!-- /.main-menu -->
    </div><!-- /.container -->
    <!-- Main Menu Area End -->
</header><!-- /.header -->
<!-- /HEADER AREA END -->