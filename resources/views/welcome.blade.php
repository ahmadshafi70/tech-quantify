@extends('layouts.app')
@section('meta_title')
Domain Hosting & Website Development | Tech Host
@endsection
@section('met_description')
Get a stunning website and reliable hosting all in one place. We offer expert website development in Lahore and domain hosting services at affordable prices. Contact us today!
@endsection
@section('code')
{{!empty($cms->code)?$cms->code:''}}
@endsection
@section('canonical')
<link rel="canonical" href="https://techhost.pk/" />
@endsection
@section('content')
@push('css')

@endpush

<section class="xs-banner" style="min-height: 600px;">
    <div class="container">
        <div class="row">
            <div class="col-md-7 align-self-center">
                <div class="xs-banner-content">
                    <h1 class="banner-sub-title wow fadeInLeft">Now Everyone </h1>
                    <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">Have Stunning Website  That Generates Leads & Sales</h2>
                    
                    <div class="xs-btn-wraper wow fadeInUp slider-btn" data-wow-duration="1.7s">
                        <a href="#" class="btn btn-primary">Get Started</a>
                        <a href="#" class="btn btn-outline-primary">Know More</a>
                    </div>
                </div><!-- .xs-banner-content END -->
            </div>
            <div class="col-md-5" style="margin-top: 50px;">
                <div class="xs-banner-image" >
                    <img src="assets/images/top icon.svg">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section>

<section class="xs-section-padding xs-hosting-info">
    <div class="container">
        <div class="xs-heading wow fadeIn">
                    <h3 class="heading-title"><span>Why Choose Us</span></h3>
                    <h2 class="heading-sub-title">Hosting by the Experts, for the Experts</h2>
        </div><!-- .xs-heading END -->
        <div class="row">
            <div class="col-lg-6">
                <div class="hosting-info-img">
                    <img src="assets/images/newsvg/development proces.svg" alt="Hosting info image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper">
                    <div class="wow fadeInUp">
                        <h4 class="xs-title small">Agile development process</h4>
                        <p>Highly adaptable and flexible methodology that embraces change and continuous improvement.</p>

                        <h4 class="xs-title small">International quality assurance models</h4>
                        <p>Rigorous testing procedures that ensure your application meets the highest standards of quality and reliability.</p>
                        <h4 class="xs-title small">Full deployment support</h4>
                        <p>Seamless deployment process that ensures your application is launched smoothly and efficiently.</p>
                        <h4 class="xs-title small">Full after-sales support</h4>                        
                        <a href="{{route('website-development')}}" class="btn btn-primary">Get Started</a>
                    </div>
                </div><!-- .hosting-info-wraper END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">

                    <div class="media hosting-info-list">
                        
                        <div class="media-body">
                            <h4 class="xs-title small">New Plateforms for Hosting a Website</h4>
                             <p>It’s easy to make your website live when you get assistance from a team of professionals 24/7. Our clients Success team can assist with all stages related to your domains and web hosting plans.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                       
                        <div class="media-body">
                            <h4 class="xs-title small">No-Downtime website transfers </h4>
                            <p>Tech Host take care of the migration of your website from your existing web hosting company to our web hosting. Also, we don’t charge any website migration fees.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                       
                        <div class="media-body">
                            <h4 class="xs-title small">Deployment within few minutes </h4>
                            <p>You can install WordPress with single click. Resources are well managed according to  your website need</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <a href="{{route('shared-hosting')}}" class="btn btn-primary">Get Started</a>
                </div><!-- .hosting-info-wraper-2 END -->
            </div>
            <div class="col-lg-6">
                <div class="hosting-info-img wow fadeInRight" data-wow-duration="2s">
                    <img src="assets/images/home/247 support.svg" alt="Hosting info image">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section>


<section class="ai-services">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="centered section-pad">
          <h2 class="green-color text"><span style="color:#fff;">Our </span> Workflow </h2>
          <p class="light-blue-color">Tech Quantify, being a dominant software development company in the USA, follows a highly professional approach to delivering AI/ML-based and data-driven solutions to our valuable clients. We strongly encourage investing our efforts in every single step of our product engineering and development processes.</p>
        </div>
      </div>
    </div>
    <div class="row align-items-center justify-content-between justify-content-lg-center">
      <div class="col-3 d-none d-sm-block">
        <div class="timeline">
          <div class="entry" data-target="#tab1">
            <div class="dot"></div>
            <div class="time-title"><span>Analysis</span></div>
        </div>
          <div class="entry" data-target="#tab2">
            <div class="dot"></div>
            <div class="time-title"><span>Design</span></div>
          </div>
          <div class="entry" data-target="#tab3">
            <div class="dot"></div>
            <div class="time-title"><span>Extract</span></div>
          </div>
          <div class="entry" data-target="#tab4">
            <div class="dot"></div>
            <div class="time-title"><span>Automate</span></div>
          </div>
          <div class="entry" data-target="#tab5">
            <div class="dot"></div>
            <div class="time-title"><span>Develop</span></div>
          </div>
          <div class="entry" data-target="#tab6">
            <div class="dot"></div>
            <div class="time-title"><span>Accelerate</span></div>
          </div>
        </div>
      </div>
      <div class="col-8 col-lg-6 d-none d-sm-block">
        <div class="time-content" id="tab1">
          <div class="time-content-item">
            <img width="64" height="64" src="https://res.cloudinary.com/df7wauxv3/images/f_svg,q_auto/fl_sanitize/v1700484913/Group-39928-4/Group-39928-4.svg?_i=AA" alt="" class="wp-post-0 wp-image-7395">
            <h6 class="green-color py-2">Analysis</h6>
            <p class="light-blue-color">A thorough analysis is performed with the help of requirement elicitation and site reliability engineering to understand the features of the project in a better way.</p>
          </div>
        </div>
        <div class="time-content" id="tab2">
          <div class="time-content-item">
            <img width="64" height="64" src="https://res.cloudinary.com/df7wauxv3/images/f_svg,q_auto/fl_sanitize/v1700484921/Group-40232/Group-40232.svg?_i=AA" alt="" class="wp-post-0 wp-image-7400">
            <h6 class="green-color py-2">Design</h6>
            <p class="light-blue-color">We make use of all the UI/UX design principles to create well-crafted interfaces that are sure to catch the user’s attention within one glance and are also very user-friendly.</p>
          </div>
        </div>
        <div class="time-content" id="tab3">
          <div class="time-content-item">
            <img width="64" height="64" src="https://res.cloudinary.com/df7wauxv3/images/f_svg,q_auto/fl_sanitize/v1700484925/Group-40233_7399aaaaa/Group-40233_7399aaaaa.svg?_i=AA" alt="" class="wp-post-0 wp-image-7399">
            <h6 class="green-color py-2">Extract</h6>
            <p class="light-blue-color">We greatly value the data generated during the whole process and use it for extracting actionable insights with the help of ML and augmented AI.</p>
          </div>
        </div>
        <div class="time-content" id="tab4">
          <div class="time-content-item">
            <img width="64" height="64" src="https://res.cloudinary.com/df7wauxv3/images/f_svg,q_auto/fl_sanitize/v1700484929/Group-40234_73987e33f/Group-40234_73987e33f.svg?_i=AA" alt="" class="wp-post-0 wp-image-7398">
            <h6 class="green-color py-2">Automate</h6>
            <p class="light-blue-color">Automation is the key to success in product development. Therefore, we incorporate CI/CD pipelines and quality assurance engineering in our development process.</p>
          </div>
        </div>
        <div class="time-content" id="tab5">
          <div class="time-content-item">
            <img width="64" height="64" src="https://res.cloudinary.com/df7wauxv3/images/f_svg,q_auto/fl_sanitize/v1700484918/Group-40235_7397586a6/Group-40235_7397586a6.svg?_i=AA" alt="" class="wp-post-0 wp-image-7397">
            <h6 class="green-color py-2">Develop</h6>
            <p class="light-blue-color">We make sure to use AI/ML and data engineering-based platforms and services for product development to match our pace with the latest technology trends.</p>
          </div>
        </div>
        <div class="time-content" id="tab6">
          <div class="time-content-item">
            <img width="64" height="64" src="https://res.cloudinary.com/df7wauxv3/images/f_svg,q_auto/fl_sanitize/v1700484932/Group-40236/Group-40236.svg?_i=AA" alt="" class="wp-post-0 wp-image-7396">
            <h6 class="green-color py-2">Accelerate</h6>
            <p class="light-blue-color">We help enterprises and startups step up their business with AI/ML and data-driven technologies and gain unprecedented success in the business world.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="call-to-action-section wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="register-domain-md-8 mx-auto">
                <div class="call-to-action" ><h2 style="color:white;">Your One-Stop Shop: Domain, Hosting, & Website Development </h2>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .containe url END -->
    <div class="icon-bg" style="background-image: url(assets/images/icon-bg.png)"></div>
</url>
</section>
<div class="xs-feature-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="xs-feature-group wow fadeInLeft">
                    <div class="media">
                       
                        <div class="media-body feature-content">
                            <h4 class="xs-title">6 Days money back guarantee</h4>
                            <p>Share processes an data secure lona need <br> to know basis without the need.</p>
                            <div class="xs-btn-wraper">
                                <a href="#" class="btn btn-secondary">Know More</a>
                            </div>
                        </div>
                    </div>
                    <span class="icon icon-dollar watermark-icon"></span>
                </div><!-- .xs-feature-group END -->
            </div>       
            <div class="col-lg-6">
                <div class="xs-feature-group wow fadeInRight">
                    <div class="media">
                        
                        <div class="media-body feature-content">
                            <h4 class="xs-title">Build and protect your brand</h4>
                            <p>Share processes an data secure lona need <br> to know basis without the need.</p>
                            <div class="xs-btn-wraper">
                                <a href="#" class="btn btn-secondary">Know More</a>
                            </div>
                        </div>
                    </div>
                    <span class="icon icon-key3 watermark-icon"></span>
                </div><!-- .xs-feature-group END -->
            </div>       
        </div><!-- .row END -->
    </div><!-- .container END -->
</div>
<!-- shared hosting details section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h3 class="heading-title">Shared Hosting in Pakistan</h3>
                    <h2 class="heading-sub-title">Hosting by the Experts, for the Experts</h2>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row" >
            <p>
                Shared hosting is a popular web hosting option for small businesses and individuals who are just starting out with their website. It allows multiple websites to share a single server and its resources, making it an affordable option for those on a tight budget. If you are looking for shared hosting in Pakistan, there are many web hosting providers that offer this service.
            </p>
            <p>
                One of the most popular shared hosting providers in Pakistan is Tech Host. Based in Lahore, Tech Host offers shared hosting plans starting at just PKR 400 per year. Tech Host's plans come with unlimited disk space, bandwidth, and email accounts, making it an attractive option for small businesses and individuals who need a simple and affordable web hosting solution.
            </p>
             <p>
                When choosing a shared hosting provider in Pakistan, it's important to consider factors such as uptime guarantees, customer support, and security features. It's also a good idea to read customer reviews and compare plans and pricing to find the best option for your needs. With so many web hosting providers offering shared hosting in Pakistan, you're sure to find a plan that meets your needs and fits your budget.
            </p>   
        </div>
    </div>
    <!-- .container END -->
</section>
<!-- END shared hosting details section -->

<!-- faq section -->
<section class="xs-testimonial-section wow fadeIn">
    <div class="container">
        <h3 class="heading-title" style="color:white;text-align:center;">Clients Reviews</span></h3>
        <div class="xs-testimonial-slider owl-carousel">
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Best Hosting Providers in Pakistan. I am using there hosting plans for three years and i have faced no issue at all</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/home/user-icon.webp" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Syed Ali Kazmi</h4>
                            <p class="commentor-info">Founder & CEO Of Tanrica</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Professional Website Development services 100% satisfied!</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/home/user-icon.webp" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Touseef Iram</h4>
                            <p class="commentor-info">Proprieter Markitpolo</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Very Dedicated and Professional Company. Services are good and cost effective . Tech Host's support is super fast !</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/home/user-icon.webp" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Muhammad Waseem</h4>
                            <p class="commentor-info">Founder & CEO of Hayat Star Group Of Companies</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container END -->
</section>
<!-- Technologies -->

<section class="service-section xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading wow fadeIn">
                    
                    <h3 class="heading-title"><span>Technology Stack</h3>
                    <h2 class="heading-sub-title">We have dedicated resources of latest stack</h2>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp">
                    <div class="service-img">
                        <img src="{{asset('assets/icons/js.png')}}"  class="m-0" >
                        <h4 class="xs-title">Javascript</h4>
                    </div>
                   
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="1.5s">
                    <img src="{{asset('assets/icons/laravel.png')}}"  class="m-0">
                    <h4 class="xs-title">Laravel</h4>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2s">
                    <div class="service-img">
                        <img src="{{asset('assets/icons/ajax.png')}}" class="m-0">
                        <h4 class="xs-title">Ajax</h4>
                    </div>
                   
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2.5s">
                    <div class="service-img">
                        <img src="{{asset('assets/icons/react.png')}}" class="m-1">
                        <h4 class="xs-title">React</h4>
                    </div>

                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3s">
                    <div class="service-img">
                        <img src="{{asset('assets/icons/jquery.png')}}" class="m-0">
                        <h4 class="xs-title">JQuery</h4>
                    </div>
                    
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3.5s">
                    <div class="service-img">
                        <img src="{{asset('assets/icons/php.png')}}" class="m-0">
                        <h4 class="xs-title">PHP</h4>
                    </div>
                </div><!-- .xs-service-block END -->
            </div>
        </div>
        <!-- second line technologies -->
        <div class="row">
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3s">
                    <div class="service-img">
                        <img src="{{asset('assets/images/home/mysql.png')}}" class="m-0">
                        <h4 class="xs-title">MySQL</h4>
                    </div>
                    
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3.5s">
                    <div class="service-img">
                        <img src="{{asset('assets/images/home/python.png')}}" class="m-0">
                        <h4 class="xs-title">Python</h4>
                    </div>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2.5s">
                    <div class="service-img">
                        <img src="{{asset('assets/icons/vuejs.png')}}" class="m-1">
                        <h4 class="xs-title">Vue.js</h4>
                    </div>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 xs-mb-8 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp">
                    <div class="service-img">
                        <img src="{{asset('assets/images/home/wordpress.png')}}" class="m-0" >
                        <h4 class="xs-title">WordPress</h4>
                    </div>
                   
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 xs-mb-8 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="service-img">
                        <img src="{{asset('assets/images/home/shopify.png')}}" class="m-0">
                        <h4 class="xs-title">Shopify</h4>
                    </div>
                   
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-2 col-md-6 xs-mb-8 col-xs-6 tech-box">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2s">
                    <div class="service-img">
                        <img src="{{asset('assets/images/home/magento.png')}}" class="m-0">
                        <h4 class="xs-title">Magento</h4>
                    </div>
                   
                </div><!-- .xs-service-block END -->
            </div>
        </div>
    </div>
    <!-- .container END -->
</section>

<!-- End Techno -->
<!-- info section -->
<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="language-content">
                <p>Switch The Language</p>
                <ul class="flag-lists">
                    <li><a href="#"><img src="assets/images/flags/006-united-states.svg" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/002-canada.svg" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/003-vietnam.svg" alt=""><span>Vietnamese</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/004-france.svg" alt=""><span>French</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/005-germany.svg" alt=""><span>German</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="xs-search-panel">
                <form action="#" method="POST" class="xs-search-group">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-logo-wraper">
                    <img src="assets/images/blue_logo.png" alt="sidebar logo">
                </div>
                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of  </p>
                <ul class="sideabr-list-widget">
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/home/images/location.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>759 Pinewood Avenue</p>
                                <span>Marquette, Michigan</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/mail.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="mailto:info@domain.com">info@domain.com</a>
                                <span>Online Support</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/phone.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>906-624-2565</p>
                                <span>Mon-Fri 8am-5pm</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                </ul><!-- .sideabr-list-widget -->
                <div class="subscribe-from">
                    <p>Get Subscribed!</p>
                    <form action="#" method="POST" id="subscribe-form" class="subscribe-form">
                        <label for="sub-input"></label>
                        <div class="form-group">
                            <input type="email" name="email" id="sub-input" placeholder="Enter your mail here" class="form-control">
                            <button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="social-list version-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul><!-- .social-list -->
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div>  
<!-- jQuery script for tab functionality -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Initially hide all time-content elements
    $('.time-content').hide();
    
    // Show the first tab content by default
    $('.time-content').first().show();
    
    // Handle tab click events
    $('.entry').on('click', function() {
        // Remove 'show' class from all entries and hide all content
        $('.entry').removeClass('show');
        $('.time-content').hide();
        
        // Add 'show' class to the clicked entry
        $(this).addClass('show');
        
        // Show the corresponding content
        $($(this).data('target')).show();
    });
});
</script>
@endsection