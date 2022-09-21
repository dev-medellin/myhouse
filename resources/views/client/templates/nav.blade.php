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
                                <li><a href="#"><i class="fa fa-map-marker"></i>23 Aro Lane, NY, USA</a></li>
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
                <li><a href="overview.html" style="color:red"></a></li>
                <!-- <li><a href="#" style="color:red">Dropdown</a>
                    <ul class="sub-nav">
                        <li><a href="#">Dropdown Menu 1</a></li>
                        <li><a href="#">Dropdown Menu 2</a></li>
                        <li><a href="#">Dropdown Menu 3</a></li>
                        <li><a href="#">Dropdown Menu 4</a></li>
                        <li><a href="#">Dropdown Menu 5</a></li>
                        <li><a href="#">View Right Submenu</a>
                            <ul class="sub-nav">
                                <li><a href="#">More Right Submenu</a>
                                    <ul class="sub-nav">
                                        <li><a href="#">Submenu Item 1</a></li>
                                        <li><a href="#">Submenu Item 2</a></li>
                                        <li><a href="#">Submenu Item 3</a></li>
                                        <li><a href="#">Submenu Item 4</a></li>
                                        <li><a href="#">Submenu Item 5</a></li>
                                        <li><a href="#">Submenu Item 6</a></li>
                                        <li><a href="#">Submenu Item 7</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Many Right Submenu</a>
                                    <ul class="sub-nav">
                                        <li><a href="#">Another Item 1</a></li>
                                        <li><a href="#">Another Item 2</a></li>
                                        <li><a href="#">Another Item 3</a></li>
                                        <li><a href="#">Another Item 4</a></li>
                                        <li><a href="#">Another Item 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">More Right Submenu</a>
                                    <ul class="sub-nav">
                                        <li><a href="#">Submenu Item 1</a></li>
                                        <li><a href="#">Submenu Item 2</a></li>
                                        <li><a href="#">Submenu Item 3</a></li>
                                        <li><a href="#">Submenu Item 4</a></li>
                                        <li><a href="#">Submenu Item 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Many Right Submenu</a>
                                    <ul class="sub-nav">
                                        <li><a href="#">Submenu Item 1</a></li>
                                        <li><a href="#">Submenu Item 2</a></li>
                                        <li><a href="#">Submenu Item 3</a></li>
                                        <li><a href="#">Submenu Item 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Look Right Submenu</a>
                            <ul class="sub-nav">
                                <li><a href="#">More Right Submenu</a>
                                    <ul class="sub-nav">
                                        <li><a href="#">Submenu Item 1</a></li>
                                        <li><a href="#">Submenu Item 2</a></li>
                                        <li><a href="#">Submenu Item 3</a></li>
                                        <li><a href="#">Submenu Item 4</a></li>
                                        <li><a href="#">Submenu Item 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Many Right Submenu</a>
                                    <ul class="sub-nav">
                                        <li><a href="#">Another Item 1</a></li>
                                        <li><a href="#">Another Item 2</a></li>
                                        <li><a href="#">Another Item 3</a></li>
                                        <li><a href="#">Another Item 4</a></li>
                                        <li><a href="#">Another Item 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">More Right Submenu</a>
                                    <ul class="sub-nav">
                                        <li><a href="#">Submenu Item 1</a></li>
                                        <li><a href="#">Submenu Item 2</a></li>
                                        <li><a href="#">Submenu Item 3</a></li>
                                        <li><a href="#">Submenu Item 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Many Right Submenu</a>
                                    <ul class="sub-nav">
                                        <li><a href="#">Submenu Item 1</a></li>
                                        <li><a href="#">Submenu Item 2</a></li>
                                        <li><a href="#">Submenu Item 3</a></li>
                                        <li><a href="#">Submenu Item 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <li <?php echo $data['page'] == 'project' ? 'class="active"' : '';?> ><a href="{{url('/projects')}}">Projects</a></li>
                <li><a href="#" style="color:red">Pages</a>
                    <ul class="sub-nav">
                        <li><a href="overview.html">Overview</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="properties.html">Properties</a></li>
                        <li><a href="property-details.html">Property Details</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="single.html">Right Sidebar Page</a></li>
                        <li class="active"><a href="index.html">Home</a></li>
                    </ul>
                </li>
                <li><a href="single.html" style="color:red">Single</a></li>
                <li><a href="blog.html" style="color:red">Blog</a></li>
                @if(Auth::check())
                <li><a href="#">Welcome, {{Auth::user()->fname}}</a>
                    <ul class="sub-nav" id="myNav">
                        <li><a href="{{url('users/mypage')}}" >My Page</a></li>
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