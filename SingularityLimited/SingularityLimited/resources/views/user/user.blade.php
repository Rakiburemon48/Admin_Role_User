@extends('user.layout')
@section('body')
    <!-- Header Section Start --> 
<header class="header-wrapper section">
    <div class="header-top bg-theme-two section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="header-top-info">
                        <p class="text-white">Call me -  <a href="tel:21548987658">01627809808</a></p>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="header-buttons">
                        <a class="header-btn btn" href="#">
                            {{$data->name}}
                        </a>
                        <a class="header-btn btn-border" href="#" >
                            @if ($data->role=='field_user')
                                Field User
                            @endif
                            </a>
                            <a class="header-btn" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                           </form>
                           </a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-2 col-6">
                    <div class="header-logo">
                        <a href="index.html"><img src="front/assets/images/logo.png" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-10 col-6">
                    <div class="header-mid_right-bar">
                        <nav class="main-menu d-lg-block d-none">
                            <ul>
                                <li class="has-dropdown"><a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home one</a></li>
                                        <li><a href="index-2.html">Home two</a></li>
                                        <li><a href="index-3.html">Home three</a></li>
                                        <li><a href="index-4.html">Home Four</a></li>
                                        <li><a href="index-5.html">Home Five</a></li>
                                        <li><a href="index-6.html">Home Six</a></li>
                                        <li><a href="index-7.html">Home Seven</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a href="service.html">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="single-service.html">Single Services</a></li>
                                    </ul>
                                </li>
                                <li><a href="features.html">Features</a></li>
                                <li class="has-dropdown"><a href="properties.html">Properties</a>
                                    <ul class="sub-menu">
                                        <li><a href="properties.html">Properties</a></li>
                                        <li><a href="properties-left-sidebar.html">Properties Left Sidebar</a></li>
                                        <li><a href="properties-right-sidebar.html">Properties Right Sidebar</a></li>
                                        <li><a href="properties-details.html">Properties Details</a></li>
                                        <li><a href="add-property.html">Add Propertie</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown menu-item-has-children"><a href="blog.html">Blog Page</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog Page</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Page</a></li>
                                        <li><a href="create-agency.html">Create agency</a></li>
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="register.html">Register Page</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a href="agent.html">Agent</a>
                                    <ul class="sub-menu">
                                        <li><a href="agent.html">Agent</a></li>
                                        <li><a href="agent-details.html">Agent Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div id="search-overlay-trigger" class="search-icon">
                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Section End -->
</header>


<!--  search overlay -->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of search overlay -->

<!-- Hero Section Start -->
<div class="hero-section section">

    <div class="hero-slider hero-slider-one">
        <div class="hero-slide-item" style="background-image: url(front/assets/images/hero/hero-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        
                        <div class="hero-content ">
                            <h1>Desilva De Villa</h1>
                            <h3 class="text-white mt-15">24 North Street, California, USA</h3>
                            <p>3520 sqft, 5 Bed, 3 Bath, 2 Garage</p>
                            <div class="hero-price">
                                <h2 class="text-white">For Sale $54,000</h2>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- Hero Section End -->

<!-- About Section Start -->
<div class="about-section section pt-65 pb-75 pt-md-55 pb-md-55 pt-sm-45 pb-sm-45 pt-xs-25 pb-xs-25">
    <div class="container">
        <div class="row align-items-center fix">
            
            <div class="col-lg-4 col-md-5 col-12 offset-lg-1 mb-15 mt-35">
                <div class="about-properties-area">
                    <div class="about-slider_bg"></div>
                    <div class="about-properties-slider">
                        <div class="about-properties-item">
                            <div class="image"><img src="front/assets/images/about/about-1.jpg" alt=""></div>
                        </div>

                        <div class="about-properties-item">
                            <div class="image"><img src="front/assets/images/about/about-2.jpg" alt=""></div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="about-content col-lg-6 col-md-7 col-12 ml-auto mt-35 pl-lg-0">
                <h2>We never compromize <br> with quality work...</h2>
                <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>
                
                <div class="row row-25">
                    
                    <div class="about-feature col-md-6 col-sm-6 col-12 mb-35">
                        <div class="icon"><img src="front/assets/images/icons/feature-1.png" alt=""></div>
                        <div class="content">
                            <h4>Minimum Cost</h4>
                            <p>Privide low cost that help all more build real estate</p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6 col-sm-6 col-12 mb-35">
                        <div class="icon"><img src="front/assets/images/icons/feature-2.png" alt=""></div>
                        <div class="content">
                            <h4>Best Marketing</h4>
                            <p>Privide low cost that help all more build real estate</p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6 col-sm-6 col-12 mb-35">
                        <div class="icon"><img src="front/assets/images/icons/feature-3.png" alt=""></div>
                        <div class="content">
                            <h4>Easy to Search</h4>
                            <p>You can find your property to simply and easy way</p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6 col-sm-6 col-12 mb-35">
                        <div class="icon"><img src="front/assets/images/icons/feature-4.png" alt=""></div>
                        <div class="content">
                            <h4>Secure</h4>
                            <p>You can find your property to simply and easy way</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            
        </div>
    </div>
</div><!-- About Section End -->

<!-- Featured Properites Start -->   
<div class="featured-properites-section section">
    <div class="container">
      
        <div class="row">
            <div class="section-title text-center col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>Property for Sale</h2>
                <p> one of the most popular real estate company all around USA. You <br> can find your dream property or build property with us</p>
            </div>
        </div>
       
        <div class="row">
           
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/01.jpg" alt="">
                        </a>
                        <span class="level-stryker">FOR RENT</span>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                        <p>
                            <span class="location">22 First street, Chicago, USA</span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $1,25,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/02.jpg" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                        <p>
                            <span class="location">132 Future Street, Boston, USA</span>
                            <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $70,250</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/03.jpg" alt="">
                        </a>
                        <span class="level-stryker-2">FOR RENT</span>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                        <p>
                            <span class="location">1 DE Silicon Tower, Denver</span>
                            <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $1,50,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/04.jpg" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                        <p>
                            <span class="location">22 First street, Chicago, USA</span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $92,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
           
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/05.jpg" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                        <p>
                            <span class="location">22 First street, Chicago, USA</span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $1,90,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/06.jpg" alt="">
                        </a>
                        <span class="level-stryker-2">FOR RENT</span>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                        <p>
                            <span class="location">132 Future Street, Boston, USA</span>
                            <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $70,250</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/07.jpg" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                        <p>
                            <span class="location">1 DE Silicon Tower, Denver</span>
                            <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $2,25,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/08.jpg" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                        <p>
                            <span class="location">22 First street, Chicago, USA</span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $1,05,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
        </div>
        
    </div>
</div><!-- Featured Properites End -->  

  
<!-- Choose Section Start -->
<div class="choose-section section pt-100 pb-80 pt-md-75 pb-md-65 pt-sm-65 pb-sm-45 pt-xs-60 pb-xs-20">
    <div class="container">
        <div class="row align-items-center">
           
            <div class="col-lg-5 col-md-12 col-12">
                <div class="choose-properties">
                   
                    <div class="choose-provide">
                        
                        <span class="discount-stryker">35% Discount</span>
                        
                        <div class="image-1">
                            <img src="front/assets/images/propertes/choose-02.jpg" alt="">
                            <div class="price-box">
                                <p>Price $1,53,000</p>
                            </div>
                        </div>
                        <div class="image-2">
                            <img src="front/assets/images/propertes/choose-01.jpg" alt="">
                            <div class="price-box">
                                <p>Price $89,000</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="about-content col-lg-7 col-md-12 col-12 ">
                <h2>We never compromize <br> with quality work...</h2>
                <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>
                
                <div class="row row-25">
                    
                    <div class="about-feature col-md-6 col-sm-12 col-12 mb-35">
                        <div class="icon"><img src="front/assets/images/icons/feature-5.png" alt=""></div>
                        <div class="content-two">
                            <h4>Royel touch paint</h4>
                            <p>Paint is the mirron of beautifull house build property with us </p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6  col-sm-12 col-12 mb-35">
                        <div class="icon"><img src="front/assets/images/icons/feature-6.png" alt=""></div>
                        <div class="content-two">
                            <h4>Fully Furnished</h4>
                            <p>Well decorated and fully fuhed properties is available for all</p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6 col-sm-12 col-12 mb-35">
                        <div class="icon"><img src="front/assets/images/icons/feature-7.png" alt=""></div>
                        <div class="content-two">
                            <h4>Latest Interior design</h4>
                            <p>All interior are latest and luxus mirron of beauty dream </p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6 col-sm-12 col-12 mb-35">
                        <div class="icon"><img src="front/assets/images/icons/feature-8.png" alt=""></div>
                        <div class="content-two">
                            <h4>Non stop security</h4>
                            <p>Security in our property area is the main priority for our all</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            
        </div>
    </div>
</div><!-- Choose Section End -->
 
<!-- Featured Properites Start -->   
<div class="featured-properites-section section">
    <div class="container">
      
        <div class="row">
            <div class="section-title text-center col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>Property for Rent</h2>
                <p> one of the most popular real estate company all around USA. You <br> can find your dream property or build property with us</p>
            </div>
        </div>
       
        <div class="row">
           
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/01.jpg" alt="">
                        </a>
                        <span class="level-stryker">FOR RENT</span>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                        <p>
                            <span class="location">22 First street, Chicago, USA</span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $ 1,59,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/02.jpg" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                        <p>
                            <span class="location">132 Future Street, Boston, USA</span>
                            <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $ 1,59,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/03.jpg" alt="">
                        </a>
                        <span class="level-stryker-2">FOR RENT</span>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                        <p>
                            <span class="location">1 DE Silicon Tower, Denver</span>
                            <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $2,32,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="front/assets/images/propertes/04.jpg" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                        <p>
                            <span class="location">22 First street, Chicago, USA</span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Rent $32,00/m</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
        </div>
        
    </div>
</div><!-- Featured Properites End -->  
 
<!-- Ortiz Banner Area Start-->
<div class="ortiz-banner-area section pt-110 pt-md-90 pt-sm-70 pt-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-inner-box">
                    <img src="front/assets/images/banner/banner-01.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ortiz Banner Area End-->
  
   
<!-- Our Agents Section Start -->    
<div class="our-agents-section section pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-40 pb-sm-40 pb-xs-20">
    <div class="container">
       
        <div class="row">
            <div class="section-title text-center col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>Our Agents</h2>
                <p>  one of the most popular real estate company all around USA. You 
                <br> can find your dream property or build property with us</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mt-30">
                <!-- Our Agents Start -->
                <div class="our-agents">
                    <div class="agents-image">
                        <img src="front/assets/images/agents/agents-01.jpg" alt="">
                        
                        <div class="agents-info">
                            <h3>View Details</h3>
                            <div class="agents-social">
                                <ul>
                                    <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="agents-contents">
                        <h4>Jassica Thomson</h4>
                        <p>Real Estate Agent</p>
                    </div>
                </div><!-- Our Agents End -->
            </div>
            
            <div class="col-lg-3 col-md-6 mt-30">
                <!-- Our Agents Start -->
                <div class="our-agents">
                    <div class="agents-image">
                        <img src="front/assets/images/agents/agents-06.jpg" alt="">
                        
                        <div class="agents-info">
                            <h3>View Details</h3>
                            <div class="agents-social">
                                <ul>
                                    <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="agents-contents">
                        <h4>Thomas Eilliams</h4>
                        <p>Real Estate Agent</p>
                    </div>
                </div><!-- Our Agents End -->
            </div>
            
            <div class="col-lg-3 col-md-6 mt-30">
                <!-- Our Agents Start -->
                <div class="our-agents">
                    <div class="agents-image">
                        <img src="front/assets/images/agents/agents-03.jpg" alt="">
                        
                        <div class="agents-info">
                            <h3>View Details</h3>
                            <div class="agents-social">
                                <ul>
                                    <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="agents-contents">
                        <h4>Sayana Sarlin</h4>
                        <p>Real Estate Agent</p>
                    </div>
                </div><!-- Our Agents End -->
            </div>
            
            <div class="col-lg-3 col-md-6 mt-30">
                <!-- Our Agents Start -->
                <div class="our-agents">
                    <div class="agents-image">
                        <img src="front/assets/images/agents/agents-04.jpg" alt="">
                        
                        <div class="agents-info">
                            <h3>View Details</h3>
                            <div class="agents-social">
                                <ul>
                                    <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="agents-contents">
                        <h4>Kuddus Boyati</h4>
                        <p>Real Estate Agent</p>
                    </div>
                </div><!-- Our Agents End -->
            </div>
            
        </div>
        
    </div>
    
</div><!-- Our Agents Section End -->    
   
   
<!-- Testimonial Section Start -->
<div class="testimonial-section section pt-90 pt-md-70 pt-xs-60 pt-sm-70 testimonial-bg">
    <div class="container">
        <div class="row testimonial-slider section-mb-inner">
            <div class="col-lg-6">
                <div class="single-testimonial">
                    <div class="testimonial-author">
                        <div class="image">
                            <img src="front/assets/images/testimonial/outher-01.jpg" alt="">
                        </div>
                        <div class="outhor-info">
                            <h4>Lora Momen Smith</h4>
                            <p>CEO, Momens Group</p>
                        </div>
                    </div>
                    <div class="testimonial-dec">
                        <p>one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-testimonial">
                    <div class="testimonial-author">
                        <div class="image">
                            <img src="front/assets/images/testimonial/outher-02.jpg" alt="">
                        </div>
                        <div class="outhor-info">
                            <h4>Zakuline Fernandez </h4>
                            <p>CEO, Momens Group</p>
                        </div>
                    </div>
                    <div class="testimonial-dec">
                        <p>one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-testimonial">
                    <div class="testimonial-author">
                        <div class="image">
                            <img src="front/assets/images/testimonial/outher-01.jpg" alt="">
                        </div>
                        <div class="outhor-info">
                            <h4>Lora Momen Smith</h4>
                            <p>CEO, Momens Group</p>
                        </div>
                    </div>
                    <div class="testimonial-dec">
                        <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Testimonial Section End -->
    
    
<!-- Latest Blog Section Start -->
<div class="latest-blog-section section pt-160 pt-md-140 pt-sm-120 pt-xs-110 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
    <div class="container">
       
        
        <div class="row">
            <div class="section-title text-center col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>Latest Blog Post</h2>
                <p> one of the most popular real estate company all around USA. You <br> can find your dream property or build property with us</p>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-30">
                <!-- Single latest blog Start -->
                <div class="single-latest-blog">
                    <div class="latest-blog-image">
                        <a href="blog-details.html"><img src="front/assets/images/blog/blog-s-01.jpg" alt=""></a>
                    </div>
                    <div class="latest-blog-contents">
                        <h4><a href="blog-details.html">Duplex Appartment Latest Design</a></h4>
                        <p><span>May 10, 2019</span> / <span>10 pm</span></p>
                        <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                        <a class="read-more" href="blog-details.html">Read More</a>
                    </div>
                </div><!-- Single latest blog End -->
            </div>
            <div class="col-lg-4 col-md-6 mt-30">
                <!-- Single latest blog Start -->
                <div class="single-latest-blog">
                    <div class="latest-blog-image">
                        <a href="blog-details.html"><img src="front/assets/images/blog/blog-s-02.jpg" alt=""></a>
                    </div>
                    <div class="latest-blog-contents">
                        <h4><a href="blog-details.html">Real Estate Fesitval - 2020</a></h4>
                        <p><span>May 08, 2019</span> / <span>03 pm</span></p>
                        <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                        <a class="read-more" href="blog-details.html">Read More</a>
                    </div>
                </div><!-- Single latest blog End -->
            </div>
            <div class="col-lg-4 col-md-6 mt-30">
                <!-- Single latest blog Start -->
                <div class="single-latest-blog">
                    <div class="latest-blog-image">
                        <a href="blog-details.html"><img src="front/assets/images/blog/blog-s-03.jpg" alt=""></a>
                    </div>
                    <div class="latest-blog-contents">
                        <h4><a href="blog-details.html">Latest Architectural Real Estate</a></h4>
                        <p><span>May 10, 2019</span> / <span>4 pm</span></p>
                        <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                        <a class="read-more" href="blog-details.html">Read More</a>
                    </div>
                </div><!-- Single latest blog End -->
            </div>
        </div>
    </div>
</div><!-- Latest Blog Section End -->
    
<!-- Footer Section Start --> 
<footer class="footer-section section ">
   
    <div class="footer-top footer-bg pt-70 pt-md-50 pt-sm-30 pt-xs-20 pb-100 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">
           <div class="row">
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>About</h3>
                        </div>
                        <div class="footer-info">
                            <p>Ortiz is the best and popular real estate to you how all this mistaolt cing pleasure and praising ained wasnad pain was prexplain</p>
                            <div class="newsletter-box">
                                
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Email for Newsletter" />
                                    <button id="mc-submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                            
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Popular Post</h3>
                        </div>
                        <div class="footer-info">
                            <div class="single-list">
                                <h4>Duplex Villa Design</h4>
                                <p>Lorem ipsum dolor sit amet, tur acinglit sed do eius </p>
                            </div>
                            <div class="single-list">
                                <h4>Duplex Villa Design</h4>
                                <p>Lorem ipsum dolor sit amet, tur acinglit sed do eius </p>
                            </div>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Quick Link</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li><a href="service.html">Sercives</a></li>
                                <li><a href="agent.html">Agent</a></li>
                                <li><a href="properties.html">Properties</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="blog.html">From Blog</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-placeholder"></i> 
                                        <p>256, 1st AVE, Manchester <br>125 , Noth England</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-call"></i> 
                                        <p>
                                            <span>Telephone : <a href="tel:1234566789"> +88 (012) 356 958 45</a></span>
                                            <span>Telephone : <a href="tel:1234566789"> +88 (012) 356 958 45</a></span>
                                        </p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-earth"></i>
                                        <p>
                                            <span>Email : <a href="mailto:info@example.com">info@example.com</a></span>
                                            <span>Web : <a href="https://hasthemes.com/">www.example.com</a></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Hastech. <a href="https://hasthemes.com/">All rights reserved.</a> </p>
                </div>
            </div>
        </div>
    </div>
    
</footer><!-- Footer Section End --> 
@endsection