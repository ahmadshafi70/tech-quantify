@extends('layouts.app')
@section('meta_title')
Professional Website Development Services in Lahore | Tech Host
@endsection
@section('meta_description')
Elevate your online presence with Tech Host's professional website development in Lahore. Our expert team specializes in creating stunning, high-performance websites tailored to meet your unique needs and goals. 
@endsection
@section('code')
{{!empty($cms->code)?$cms->code:''}}
@endsection
@section('content')
@push('css')
<style>
.logo {
    
}
.quote-link {
color:#454249 ;
}    
</style>

@endpush
<section class="xs-banner " style="min-height: 300px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="xs-banner-content">
                  
                    <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">Unlock Your Online Potential with Expert Website Development</h2>
                 
                    <div class="xs-btn-wraper wow fadeInUp" data-wow-duration="1.7s">
                        <a href="#request-quote" class="btn btn-primary">Get Started</a>
                        <a href="#know-more" class="btn btn-outline-primary">Know More</a>
                    </div>
                </div><!-- .xs-banner-content END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section>
<div class="xs-domain-search">
    <div class="container">
        <!--  Domain Plan  -->
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <h3 class="xs-title"><b>Business Website</b></h3>
                                        <!-- price details -->
                                        <div class="pricing-body">
                                            <div class="pricing-price">
                                            <!-- <p>Starting at</p> -->
                                                <h2 class="p"><sup>Rs.</sup>20,000</h2>
                                                <h6 class="discount-price">25% Discount<del>30,000</del></h6>
                                            </div>
                                        </div>
                                        <a href="#request-quote" class="btn btn-primary price-box-btn">Buy Now</a>
                                        <!-- .pricing-body END -->
                                        <!-- <h4 style="margin-top: 15px; color: #15095e;">Now 40% Off</h4> -->
                                        <ul class="pricing-card-list" style="text-align: left; padding: 7px;">
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>5 Custom Pages &nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" ></i>WordPress CMS&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>Responsive Design&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Speed Optimization&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Contact Form&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Slide Shows&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Images Optimization&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>SEO friendly URL Structure&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Eye Catchy Fonts & Color Scheme&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Website Security&nbsp;</li>
                                        </ul>
                                    </div>

                                    <div class="pricing-footer">
                                        <!-- <a href="#" class="btn btn-primary">Buy Now</a> -->
                                    </div><!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div id="most-popular-plan">
                                    <!-- <h4>Most Popular</h4>-->
                                    <div class="xs-single-pricing active">
                                    <div class="pricing-header">
                                        
                                        <h3 class="xs-title"><b>Ecommerce Store</b></h3>
                                        <div class="pricing-body">
                                            <div class="pricing-price">
                                            <!-- <p>Starting at</p> -->
                                            <h2 class="p"><sup>Rs.</sup>30,000</h2>
                                            <h6 class="discount-price">25% Discount<del>40,000</del></h6>
                                            </div>
                                        </div>
                                        <a href="#request-quote" class="btn btn-primary">Buy Now</a>
                                        <ul class="pricing-card-list" style="text-align: left; padding:7px;">
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>WooCommerce Integration&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>Product Listings and Management:&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>Unlimited Websites&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>Shopping Cart and Checkout&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>Customer Accounts&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>Inventory Management&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>E-commerce Analytics&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>Customer Information&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true" style="margin-right: 4px"></i>Payment Gateways&nbsp;</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                </div>
                                
                                <!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        
                                        <h3 class="xs-title"><b>Custom Website</b></h3>
                                        <div class="pricing-body">
                                            <div class="pricing-price">
                                            <!-- <p>Starting at</p> -->
                                            <h2 class="p"><sup>Rs.</sup>90,000</h2>
                                            <h6 class="discount-price">25% Discount <del>Rs.90,000</del></h6>
                                            </div>
                                        </div>
                                        <a href="#request-quote" class="btn btn-primary">Buy Now</a>
                                        <ul class="pricing-card-list" style="text-align: left; padding: 7px;">
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Highly customized design and functionality&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Complex Features&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Scalability and Flexibility&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Content Management System&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Scalability and Flexibility&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Custom Data Capture&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Advanced Analytics and Reporting&nbsp;
                                            </li> 
                                        </ul>
                                    </div>                                    
                                    <!-- .pricing-footer END -->
                                </div><!-- .xs-single-pricing END -->
                            </div>
                        </div>
                </div><!-- .container END -->
        </div>
<section class="xs-section-padding xs-hosting-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hosting-info-img">
                    <img src="assets/images/development/web development icon-01.jpg" alt="Website responsiveness devices">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper">
                    <div class="wow fadeInUp">
                        <h2 class="content-title">Innovative Design</h2>
                        <p>Creativity knows no bounds. Our design team crafts visually appealing interfaces that combine aesthetics with functionality, delivering an unforgettable user experience.</p>
                        <ul class="xs-list check">
                            <li>We believe in tailor-made solutions. Our website development services are tailored to your requirements, ensuring your website stands out amidst the digital crowd.</li>
                        </ul>
                        <h2 class="content-title">Content Management Systems (CMS)</h2>
                        <p>Update your website content effortlessly with a user-friendly CMS. Whether it's WordPress, Joomla, or another platform, we create CMS-driven websites that empower you to manage your content with ease.</p>
                       
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div><!-- .hosting-info-wraper END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">
                    <h2 class="content-title">Custom Web Development</h2>
                    <div class="media hosting-info-list">
                    
                        <div class="media-body">
                            <h4 class="xs-title small">Performance Optimization</h4>
                            <p>Slow-loading websites drive away visitors. Our performance optimization techniques ensure your website loads swiftly, keeping users engaged and encouraging them to explore further.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        
                        <div class="media-body">
                            <h4 class="xs-title small">E-Commerce Solutions</h4>
                            <p>In the realm of online shopping, user experience is paramount. Our e-commerce solutions are designed to provide seamless navigation, secure transactions, and a platform that converts visitors into loyal customers.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        
                        <div class="media-body">
                            <h4 class="xs-title small">Responsive Design</h4>
                            <p>With the majority of users accessing websites via mobile devices, responsiveness is crucial. Our responsive design approach ensures that your website looks and functions flawlessly across all screen sizes and devices.

                            </p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div><!-- .hosting-info-wraper-2 END -->
            </div>
            <div class="col-lg-6">
                <div class="hosting-info-img wow fadeInRight" data-wow-duration="2s">
                    <img src="assets/images/development/web development icon-02.jpg" alt="programming with teamwork">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section>
<section class="call-to-action-secti on wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="call-to-action-content">
                    <h2>We don’t compromise with the best Website Development Solution</h2>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
    <div class="icon-bg" style="background-image: url(assets/images/icon-bg.png)"></div>
</section>

<style type="text/css">
    
ul.tech-list li {
    display: inline-block;
    width: 115px;
    text-align: center;
    margin: 40px 5px 20px;
}
ul.tech-list li .icon {
    margin-bottom: 15px;
}
</style>
<div class="container" id="know-more">
                <div class="section-title" >
                    
                    <div class="xs-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    <h1 class="heading-title"><span>Website Development Company</span></h1>
                    <h2 class="heading-sub-title">Elevate Your Online Presence with Professional Website Development in Pakistan</h2>
                </div>
                <p>Tech Host isn't just a <strong>website development company</strong>; we're your partners in digital transformation. With a team of seasoned experts, we've been crafting exceptional web solutions for businesses of all sizes, from startups to enterprises. Our mission is simple: to deliver innovative, user-centric websites that drive results.</p>
                <p>At Tech Host, we're passionate about helping businesses and individuals establish a digital footprint that reflects the rich diversity and potential of Pakistan. From dynamic corporate websites to engaging e-commerce platforms and personal blogs, our website development services are finely tuned to cater to your unique needs and vision.</p>
                <p>In a rapidly changing digital landscape, staying ahead requires a blend of innovation and cultural understanding. Our website development services combine cutting-edge technology with a deep appreciation for the Pakistani market.</p>

                <p>Whether you're a startup with big ambitions, an established brand seeking to expand online, or an individual sharing your passion with the world, we're here to transform your vision into a captivating digital reality. Join us on a journey of digital transformation and experience how professional website development in Pakistan can amplify your online presence. Your success is our inspiration!</p>
                <p>In today's digital age, your website is often the first point of contact between you and your audience. To make a lasting impression, you need a website that's not just functional but captivating, responsive, and tailored to your unique goals. Welcome to the world of expert website development – where your digital dreams become a reality.
                </p>    
                <p> In the ever-evolving digital landscape, your website is your digital storefront, your brand ambassador, and your salesperson, all rolled into one. Our website development services blend creative innovation with technical expertise to create a digital presence that stands out.</p>
                <p>Whether you're a business looking to expand your online reach, an entrepreneur with a big idea, or an individual showcasing your portfolio, we're here to bring your vision to life. Join us on a journey of digital transformation and discover how a professionally developed website can unlock your online potential. Your success is our mission!
                    </p>
                    
                        <div class="text-center">
                            <ul class="tech-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/js.png')}}" alt="Javascript logo" class="m-0">
                                    </div>
                                    <p>Javascript</p>
                                </li>

                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/angular.png')}}" alt="Angular logo" class="m-0">
                                    </div>
                                    <p>Angular 6</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/ajax.png')}}" alt="Ajax logo" class="m-0">
                                    </div>
                                    <p>AJAX</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/react.png')}}" alt="React logo" class="m-0">
                                    </div>
                                    <p>React</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/jquery.png')}}" alt="jQuery logo"  class="m-0">
                                    </div>
                                    <p>jQuery</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/php.png')}}" alt="PHP logo" class="m-0">
                                    </div>
                                    <p>PHP</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/laravel.png')}}" alt="Laravel logo" class="m-0">
                                    </div>
                                    <p>Laravel</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/icons/mongodb.png')}}" alt="Mongo DB Logo" class="m-0">
                                    </div>
                                    <p>Mongo DB</p>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Common FAQs</h2>
                    <h3 class="heading-title">GENERAL <span>QUESTION</span></h3>
                </div><!-- .xs-heading END -->
            </div> 
        </div><!-- .row END -->        
        <div class="row">
            <div class="col-lg-6">
                <div id="accordion" class="xs-accordion" role="tablist">
                    <div class="card isActive">
                        <div class="card-header" role="tab" id="headingOne">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What's the difference between web design and web development? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Web design focuses on the aesthetics and user interface of a website, including layout, colors, and graphics. Web development involves the technical aspects of building a website, including coding, server configuration, and functionality.
                                </p>
                            </div>
                        </div>
                    </div><!-- .card .isActive END -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the essential steps in website development?<i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                The key steps in website development include planning, designing, coding, testing, launching, and ongoing maintenance. Each step is crucial to create a successful website.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What technologies are commonly used in website development?<i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                               Common technologies used in website development include HTML, CSS, JavaScript for front-end development, and server-side scripting languages like PHP, Python, or Ruby, along with databases like MySQL or PostgreSQL for back-end development.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 What is a Content Management System (CMS)? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                               A Content Management System is a software platform that allows users to easily create, edit, and manage website content without needing advanced technical skills. Popular CMSs include WordPress, Joomla, and Drupal.
                            </div>
                        </div>
                    </div>
                   
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How long does it take to develop a website? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                               The timeline for website development varies depending on the complexity of the project. Simple websites can be developed in a few weeks, while more complex e-commerce or enterprise sites may take several months.
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div id="accordion-two" class="xs-accordion" role="tablist">
                     <div class="card">
                        <div class="card-header" role="tab" id="headingSix">
                            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseFive">
                                What is responsive web design? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                Responsive web design is an approach that ensures a website's layout and content adapt and look good on various screen sizes and devices, including desktop computers, tablets, and smartphones.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSeven">
                            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                 What is the importance of SEO in website development? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="collapseSeven" data-parent="#accordion">
                            <div class="card-body">
                                 Search Engine Optimization (SEO) is vital for website visibility on search engines like Google. Website developers need to consider SEO best practices during development to ensure the site ranks well in search results.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingEight">
                            <a data-toggle="collapse" class="collapsed" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Do I need ongoing maintenance for my website after it's developed? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="headingEight" class="collapse" role="tabpanel" aria-labelledby="collapseEight" data-parent="#accordion-two">
                            <div class="card-body">
                                <p> Yes, websites require regular maintenance to stay secure and up-to-date. This includes software updates, security checks, content updates, and fixing any issues that may arise.</p>
                            </div>
                        </div>
                    </div><!-- .card END -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingNine">
                            <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Can I update my website's content after it's built? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="collapseNine" data-parent="#accordion-two">
                            <div class="card-body">
                                Yes, most websites, especially those built with a CMS, are designed for easy content updates. You can add, edit, or remove content, images, and pages as needed.
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END faq section -->
<section class="container" id="request-quote">
    <div class="row deep-shadow rounded-2 bg-white mt-30 p-3">
        <div class=" col-md-6 p-3"> 
            
                <h3 class="heading-title">Let's get started</h3>
                <p><strong>Experienced Developers:</strong> Our team of experts has 10 years of experience crafting successful websites for various industries.</p>
                <p><strong>Custom Solutions:</strong>We don't believe in one-size-fits-all approaches. We build websites that are unique to your business needs and goals.</p>
                <p><strong>Focus on Results:</strong>We prioritize increasing your online visibility, lead generation, and overall online business success.</p> 
                <p><strong>Tech Host Advantage:</strong>Leverage our reliable website development expertise for a seamless experience.</p>
            
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('assets/quote/location.png')}}" alt="">
                </div>
                <div class="col-md-10" style="text-align:left;">
                    <h6>Address</h6>
                    <p>Lahore</p>
                </div>
                <div class="col-md-2">
                    <img src="{{asset('assets/quote/phone.svg')}}" alt="">
                </div>
                <div class="col-md-10" style="text-align:left;">
                    <h6>Phone</h6>
                    <p><a class="quote-link" href="tel:+923244959666">+92324 4959 666</a></p>
                </div>
                <div class="col-md-2">
                    <img src="{{asset('assets/quote/envelope.png')}}" alt="">
                </div>
                <div class="col-md-10" style="text-align:left;">
                    <h6>Email</h6>
                    <p><a class="quote-link" href="mailto:sales@techhost.pk">sales@techhost.pk</a></p>
                </div>
            </div>
        </div>   
        <div class="col-md-6 p-3">
                <h3 class="heading-title">REQUEST A<span> QUOTE</span></h3>
                <p>Simply fill out the form below and receive a tailored proposal</p>
                    
            <form action="{{route('qoutemail')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-2">
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                    <label class="form-label"  for="form6Example1">First Name</label>
                    <input type="text" name="fname" id="form6Example1" class="form-control" />
                    
                  </div>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form6Example2">Last Name</label>
                    <input type="text" name="lname" id="form6Example2" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form6Example1">Email</label>
                    <input type="text" name="email" id="form6Example1" class="form-control" />
                  </div>
                   @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form6Example2">Phone</label>
                    <input type="text" name="phone" id="form6Example2" class="form-control" />
                  </div>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                    <div class="col-12">
                        <label class="form-label" for="form6Example2">Project Type</label>
                        <select name="project_type" data-mdb-select-init class="select">
                          <option value="">Select Option</option>
                          <option value="Basic">Basic</option>
                          <option value="Ecommerce">Ecommerce</option>
                          <option value="Custom">Custom</option>
                        </select>
                      </div>
                        
                </div>
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form6Example2">Budget</label>
                    <input type="text" name="budget" id="form6Example2" class="form-control" />
                    
                  </div>
                </div>
              </div>
              
              <div class="row mb-2" >
                <div class="col">
                  <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form6Example2">Upload Document</label>
                    <input type="file" class="form-control" id="customFile" />
                  </div>
                </div>
              </div>
              <!-- Text input -->
              <div data-mdb-input-init class="form-outline mb-2">
                 <label class="form-label" for="form6Example3">Project Description</label>
                 <textarea name="description" class="form-control" for="form6Example3"></textarea>
                
              </div>

              
              <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
            
    </div>
</section>
@include('components.question-about')

@endsection