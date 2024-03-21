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
@section('content')
@push('css')

@endpush
<style type="text/css">
    #lab {
    width: 1000px;
    overflow: hidden;
    padding-bottom: 70px;
    position: relative;
    margin: 0 auto;
    margin-bottom: 2.5em;
    background: rgb(236, 236, 236);

    -webkit-transition: all ease 500ms;
    -moz-transition: all ease 500ms;
    -o-transition: all ease 500ms;
    -ms-transition: all ease 500ms;
    transition: all ease 500ms;
}

h1 {
    font-family: bebas_neueregular ,sans-serif;
    font-size: 1.75em;
    padding: 0.2em 0 0.2em 0.2em;
    color: white;
    text-shadow: 0 0.06em 0 #424242;
    position: relative;
}

#lab h1 {
    background: #B0DAD4;
}

.beaker {
    -webkit-filter: drop-shadow(#424242 0px 1px 0px);
    border-bottom: 2em solid #FFF;
    border-left: 1em solid transparent;
    border-right: 1em solid transparent;
    border-radius: .5em;
    height: 0;
    width: 1em;
    position: absolute;
    right: 0.7em;
    bottom: 22%;
    font-size: 0.6em;
}

.beaker::before {
    border-left: .25em solid #FFF;
    border-radius: .25em;
    border-right: .25em solid #FFF;
    content: '';
    height: .25em;
    left: -.25em;
    position: absolute;
    top: -1em;
    width: 1em;
}

.beaker::after {
    border-left: .25em solid #FFF;
    border-right: .25em solid #FFF;
    content: '';
    height: 1em;
    left: 0;
    position: absolute;
    top: -1em;
    width: .5em;
}

.sectionheader {
    position: relative;
}

.lab_item {
    width: 200px;
    height: 230px;
    position: relative;
    display: inline-block;
}

.hexagon2 {
    position: absolute;
    width: 200px;
    height: 400px;
    top: -85px;
}

.hexagon {
    overflow: hidden;
    visibility: hidden;

    -webkit-transform: rotate(120deg);
    -moz-transform: rotate(120deg);
    -o-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    transform: rotate(120deg);
    cursor: pointer;
}

.hexagon-in1 {
    overflow: hidden;
    width: 100%;
    height: 100%;

    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    -ms-transform: rotate(-60deg);
    transform: rotate(-60deg);
}

.hexagon-in2 {
    -webkit-box-shadow: inset 0 0 0 200px rgba(176, 218, 212, 0.48);
    box-shadow: inset 0 0 0 200px rgba(176, 218, 212, 0.48);
    overflow: hidden;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: 50%;

    -webkit-background-size: 125%;
    -moz-background-size: 125%;
    background-size: 125%;
    visibility: visible;

    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    -ms-transform: rotate(-60deg);
    transform: rotate(-60deg);

    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.hexagon-in2:hover {
    -webkit-box-shadow: inset 0 0 0 0px #B0DAD4;
    box-shadow: inset 0 0 0 0px #B0DAD4;
}

#lab article {
    padding-top: 1em;
    width: 820px;
    margin: 0 auto;
}

.lab_item:nth-child(7n-2) {
    margin-left: 101px;
}

.lab_item:nth-child(n+5) {
    margin-top: -55px;
}

@media (max-width: 1015px) {
    #lab {
    width: 100%;
}

}

@media (max-width: 820px) {
    .lab_item:nth-child(5n-1) {
    margin-left: 102px;
}

.lab_item:nth-child(n+4) {
    margin-top: -62px;
}

.lab_item:nth-child(7n-2) {
    margin-left: 0px;
}

.lab_item:nth-child(n+5) {
    margin-top: -56px;
}

#lab article {
    width: 610px;
}

}

@media (max-width: 640px) {
    #lab article {
    width: 405px;
}

.lab_item:nth-child(5n-1) {
    margin-left: 0px;
}

.lab_item:nth-child(3n) {
    margin-left: 102px;
}

.lab_item:nth-child(n+3) {
    margin-top: -56px;
}

}

@media (max-width: 450px) {
    #lab article {
    width: 300px;
}

.lab_item:nth-child(3n) {
    margin-left: 0px;
}

.lab_item:nth-child(2n) {
    margin-left: 102px;
}

.lab_item:nth-child(n+2) {
    margin-top: -56px;
}

}


</style>
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
<div class="col-md-4 mx-auto wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="xs-heading">
                    <h3 class="heading-title">Our Web Hosting Plans</h3>
                </div><!-- .xs-heading END -->
            </div>
<div class="xs-domain-search">
    <div class="container">
        <!--  Domain Plan  -->
        <div class="row">
                <div class="col-lg-4 col-md-6">
                        <div class="xs-single-pricing">
                            <div class="pricing-header">
                                        <h3 class="xs-title"><b>Freelance Plan</b></h3>
                                        <!-- price details -->
                                        <div class="pricing-body">
                                            <div class="pricing-price">
                                            <!-- <p>Starting at</p> -->
                                                <h2 class="p"><sup>Rs.</sup>3600</h2>
                                                <h6 class="discount-price">25% Discount<del>Rs.5000</del></h6>
                                            </div>
                                        </div><!-- .pricing-body END -->
                                        <div class="pricing-footer">
                                            <a href="https://billing.techhost.pk/index.php?rp=/store/shared-hosting/freelance-plan" class="btn btn-primary">Buy Now</a>
                                        </div>
                                        <!-- <h4 style="margin-top: 15px; color: #15095e;">Now 40% Off</h4> -->
                                        <ul class="pricing-card-list" style="text-align: left; padding: 7px;">
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick " aria-hidden="true"></i>Discounted Domain&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true"></i>1 GB SSD Storage&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true"></i>Unlimited Bandwidth&nbsp;
                                            </li>
                                            
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true" ></i>Host 1 Website&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true"></i>0 Sub Domain&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true" style="margin-right: 4px"></i>PHP,HTML &nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true" style="margin-right: 4px"></i>2 MySQL Databases&nbsp;</li>

                                            <li class="pricing-card-list-items package-features" ><i class="fa fa-check tick white-tick" aria-hidden="true" style="margin-right: 4px"></i>Free SSL&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true" style="margin-right: 4px"></i>cPanel Linux&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true" style="margin-right: 4px"></i>Wordpress Quick Install&nbsp;</li>
                                            <li class="pricing-card-list-items package-features"><i class="fa fa-check tick white-tick" aria-hidden="true" style="margin-right: 4px"></i>24/7 Support | 99.99% Uptime&nbsp;</li>
                                                <i class="fa fa-info-circle tick white-tick" aria-hidden="true">
                                                 <span class="litooltip " style="background:black;">iNodes-10000<br>CPU(%)-100<br>RAM(MBs)-1GB<br>EP-20<br>I/O(MB/sec)-1024<br>
                                                </span>
                                                </i>
                                            </li>
                                        </ul>
                                    </div>
                        </div><!-- .xs-single-pricing END -->
                    </div>
                <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing active">
                                    <div class="pricing-header">
                                        
                                        <h3 class="xs-title"><b>Agency Edge</b></h3>
                                        <!-- price details -->
                                        <div class="pricing-body">
                                            <div class="pricing-price">
                                            <!-- <p>Starting at</p> -->
                                            <h2 class="p"><sup>Rs.</sup>10,000</h2>
                                            <h6 class="discount-price">25% Discount<del>Rs.13,000</del></h6>
                                            </div>
                                        </div><!-- .pricing-body END -->
                                        <a href="https://billing.techhost.pk/index.php?rp=/store/bu/agency-edge" class="btn btn-primary">Buy Now</a>
                                        <!-- <h4 style="margin-top: 15px; color: #15095e;">Now 40% Off</h4> -->
                                        <ul class="pricing-card-list" style="text-align: left; padding: 7px;">
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true"></i>Discounted Domain&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" ></i>2 WordPress Website&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true"></i>5  Sub Domains&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" style="margin-right: 4px"></i>10  GB SSD Storage&nbsp;
                                            </li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" style="margin-right: 4px"></i>2  MySQL Database&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" style="margin-right: 4px"></i>15  Email Accounts&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" ></i>WordPress,PHP,HTML&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true"></i>Unlimited Bandwidth&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" style="margin-right: 4px"></i>Virust & Spam Protection&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" style="margin-right: 4px"></i>Free SSL&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" style="margin-right: 4px"></i>1  Click WordPress Installation&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" style="margin-right: 4px"></i>Anti DDOS Firewall&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check white-tick" aria-hidden="true" style="margin-right: 4px"></i>Free Migration&nbsp;</li>
                                            <li class="pricing-card-list-items package-features text-light"><i class="fa fa-check tick text-light" aria-hidden="true"></i>Entry Power&nbsp;
                                                <i class="fa fa-info-circle tick" aria-hidden="true">
                                                 <span class="litooltip " style="background:black;">iNodes-60000<br>CPU(%)-50<br>RAM(MBs)-300<br>EP-10<br>I/O(MB/sec)-1024<br>
                                                </span>
                                                </i>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .xs-single-pricing END -->
                            </div>
                <div class="col-lg-4 col-md-6">
                            <div class="xs-single-pricing" >
                                <div class="pricing-header">
                                                <h3 class="xs-title"><b>WordPress Premium</b></h3>
                                                <!-- price details -->
                                                <div class="pricing-body">
                                                    <div class="pricing-price">
                                                    <!-- <p>Starting at</p> -->
                                                            <h2 class="p"><sup>Rs.</sup>13,000</h2>
                                                            <h6 class="discount-price">25% Discount<del>Rs.16,000</del></h6>
                                                    </div>
                                                     
                                                </div><!-- .pricing-body END -->
                                                 <a href="https://billing.techhost.pk/index.php?rp=/store/wordpress-hosting/wordpress-premium" class="btn btn-primary">Buy Now</a>
                                                <!-- <h4 style="margin-top: 15px; color: #15095e;">Now 40% Off</h4> -->
                                                <ul class="pricing-card-list" style="text-align: left; padding: 7px;">
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>Free Domain .com .co.uk &nbsp;
                                                    </li>
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>3 WordPress Website&nbsp;
                                                    </li>
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>8 Sub Domains&nbsp;
                                                    </li>
        
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>12 GB SSD Storage&nbsp;
                                                    </li>
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>5  MySQL Database&nbsp;
                                                    </li>
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" ></i>WordPress,PHP,HTML&nbsp;</li>
                                                    
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true"></i>Unlimited Bandwidth&nbsp;
                                                    </li>
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>8 Email Accounts&nbsp;
                                                    </li>
                                                    <li class="pricing-card-list-items package-features" ><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Virust & Spam Protection&nbsp;</li>
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Free SSL&nbsp;</li>
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>1 Click WordPress Installation&nbsp;</li>
                                                    
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Anti DDOS Firewall&nbsp;</li>
                                                    <li class="pricing-card-list-items package-features"><i class="fa fa-check tick" aria-hidden="true" style="margin-right: 4px"></i>Free Migration&nbsp;</li>
        
                                                    <li class="pricing-card-list-items package-features">
                                                        <i class="fa fa-check tick"  aria-hidden="true"></i>Entry Power&nbsp;
                                                        <i class="fa fa-info-circle tick" aria-hidden="true">
                                                         <span class="litooltip " style="background:black;">iNodes-50000<br>CPU(%)-200<br>RAM(MBs)-2GB<br>EP-30<br>I/O(MB/sec)<br>
                                                        </span>
                                                        </i>
                                                    </li>
                                                </ul>
                                            </div>
                                </div><!-- .xs-single-pricing END -->
                            </div>
                        </div>
                    </div><!-- .container END -->
                </div>

<!-- domain search section -->
<div class="xs-domain-search">
    <div class="container">
        <div class="domain-search-form-group wow fadeIn">
            <form action="https://billing.techhost.pk/cart.php?a=add&domain=register" method="POST"  class="domain-search-form">
                <input type="search" placeholder="Enter Address" id="domain-search">
                <div class="select-group">
                    <!--<select name="domainList">-->
                    <!--    <option value="com" selected>.com</option>-->
                    <!--    <option value="net">.net</option>-->
                    <!--    <option value="io">.io</option>-->
                    <!--    <option value="info">.info</option>-->
                    <!--    <option value="store">.store</option>-->
                    <!--</select>-->
                    <input type="submit" value="Search" />
                </div>
            </form>
            <ul class="xs-domain-info">
                <li>
                    <img src="assets/images/domain/com.png" alt="Domain name">
                    <strong>PKR 3,850</strong>
                </li>
                <li>
                    <img src="assets/images/domain/co.png" alt="Domain name">
                    <strong>PKR 4,250</strong>
                </li>
                <li>
                    <img src="assets/images/domain/net.png" alt="Domain name">
                    <strong>PKR 4,250</strong>
                </li>
                <li>
                    <img src="assets/images/domain/info.png" alt="Domain name">
                    <strong>PKR 7,875</strong>
                </li>
                <li>
                    <img src="assets/images/domain/store.png" alt="Domain name">
                    <strong>PKR 17,027</strong>
                </li>
            </ul>
        </div>
    </div><!-- .container END -->
</div><!-- End domain search section -->
<section class="service-section xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto wow fadeIn">
                <div class="xs-heading">
                    <h2 class="heading-sub-title">Best Service</h2>
                    <h3 class="heading-title">OUR BEST SERVICE</h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp">
                    <div class="service-img">
                        <img src="assets/images/home/Asset1.svg" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="{{ url('shared-hosting')}}">Shared Hosting</a></h4>
                    <p>Share processes and data secure <br> lon a need to know basis </p>
                    <a href="{{ url('shared-hosting') }}" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="service-img">
                        <img src="assets/images/home/Asset2.svg" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="{{ url('reseller-hosting')}}">Reseller Hosting</a></h4>
                    <p>Out of the handful of hosting and solutions we tested </p>
                    <a href="{{ url('reseller-hosting') }}" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3.5s">
                    <div class="service-img">
                        <img src="assets/images/home/Asset6.svg" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="{{ url('vps-servers')}}">VPS Hosting</a></h4>
                    <p>We finally found a host that truly understood the unique </p>
                    <a href="{{ url('vps-servers') }}" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2.5s">
                    <div class="service-img">
                        <img src="assets/images/home/Asset4.svg" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="{{ url('business-hosting')}}">Business Hosting</a></h4>
                    <p>Share processes and data secure <br> lon a need to know basis </p>
                    <a href="{{ url('business-hosting')}}" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="3s">
                    <div class="service-img">
                        <img src="assets/images/home/Asset5.svg" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="{{ url('dedicated-servers')}}">Dedicated Hosting</a></h4>
                    <p>Out of the handful of hosting and solutions we tested </p>
                    <a href="{{ url('dedicated-servers')}}" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
            <div class="col-lg-4 col-md-6 xs-mb-8">
                <div class="xs-service-block wow fadeInUp" data-wow-duration="2s">
                    <div class="service-img">
                        <img src="assets/images/home/Asset3.svg" alt="hosting service icon">
                    </div>
                    <h4 class="xs-title"><a href="{{ url('register-domain')}}">Domain Name</a></h4>
                    <p>We finally found a host that truly understood the unique </p>
                    <a href="{{ url('register-domain')}}" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
                </div><!-- .xs-service-block END -->
            </div>
        </div>
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

<div class="container process">
        <div class="xs-heading wow fadeIn">
                    
                    <h3 class="heading-title"><span>Our Development Process</h3>
                    <h2 class="heading-sub-title">We follow Standard Development Process to Deliver Perfect Tech Product</h2>
                </div>
       <xml version="1.0" encoding="UTF-8"?>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 621.35 394">
            <defs>
        <style>
          .cls-1, .cls-2, .cls-3, .cls-4 {
            fill: #fff;
          }
    
          .cls-5, .cls-6 {
            stroke: #acacab;
            stroke-width: 1.65px;
          }
    
          .cls-5, .cls-6, .cls-7, .cls-8 {
            fill: none;
          }
    
          .cls-5, .cls-6, .cls-8 {
            stroke-linecap: round;
            stroke-miterlimit: 10;
          }
    
          .cls-9 {
            fill: url(#linear-gradient-17);
          }
    
          .cls-10 {
            fill: url(#linear-gradient-43);
          }
    
          .cls-11 {
            fill: url(#linear-gradient-15);
          }
    
          .cls-12 {
            fill: url(#linear-gradient-18);
          }
    
          .cls-13 {
            fill: url(#linear-gradient-40);
          }
    
          .cls-14 {
            fill: url(#linear-gradient-28);
          }
    
          .cls-15 {
            fill: url(#linear-gradient-14);
          }
    
          .cls-16 {
            fill: url(#linear-gradient-36);
          }
    
          .cls-17 {
            fill: url(#linear-gradient-5);
            filter: url(#drop-shadow-4);
          }
    
          .cls-17, .cls-18, .cls-19, .cls-20, .cls-21, .cls-22 {
            fill-rule: evenodd;
          }
    
          .cls-23 {
            fill: url(#linear-gradient-20);
          }
    
          .cls-24 {
            clip-path: url(#clippath-2);
          }
    
          .cls-25 {
            isolation: isolate;
          }
    
          .cls-2 {
            font-family: Poppins-Light, Poppins;
            font-size: 7px;
            font-weight: 300;
          }
    
          .cls-26 {
            fill: url(#Degradado_sin_nombre_59-2);
          }
    
          .cls-26, .cls-27, .cls-28, .cls-29, .cls-30, .cls-31, .cls-32, .cls-33, .cls-34, .cls-35, .cls-36, .cls-37 {
            mix-blend-mode: multiply;
            opacity: .3;
          }
    
          .cls-38 {
            fill: url(#linear-gradient-35);
          }
    
          .cls-39 {
            fill: url(#linear-gradient-32);
          }
    
          .cls-27 {
            fill: url(#Degradado_sin_nombre_59);
          }
    
          .cls-40 {
            fill: url(#linear-gradient-11);
          }
    
          .cls-18 {
            fill: url(#linear-gradient-2);
            filter: url(#drop-shadow-1);
          }
    
          .cls-41 {
            fill: url(#linear-gradient-39);
          }
    
          .cls-42 {
            clip-path: url(#clippath-1);
          }
    
          .cls-43 {
            clip-path: url(#clippath-4);
          }
    
          .cls-44 {
            fill: url(#linear-gradient-10);
          }
    
          .cls-19 {
            fill: url(#linear-gradient-4);
            filter: url(#drop-shadow-3);
          }
    
          .cls-6 {
            stroke-dasharray: 0 0 0 3.97;
          }
    
          .cls-45 {
            fill: url(#linear-gradient-37);
          }
    
          .cls-28 {
            fill: url(#Degradado_sin_nombre_21);
          }
    
          .cls-29 {
            fill: url(#Degradado_sin_nombre_66);
          }
    
          .cls-46 {
            fill: url(#linear-gradient-16);
          }
    
          .cls-47 {
            fill: url(#linear-gradient-31);
          }
    
          .cls-30 {
            fill: url(#Degradado_sin_nombre_62-2);
          }
    
          .cls-48 {
            fill: url(#linear-gradient-41);
          }
    
          .cls-49 {
            fill: url(#linear-gradient-21);
          }
    
          .cls-20 {
            fill: url(#linear-gradient-7);
            filter: url(#drop-shadow-6);
          }
    
          .cls-50 {
            fill: url(#linear-gradient-25);
          }
    
          .cls-51 {
            fill: #74b0e0;
          }
    
          .cls-31 {
            fill: url(#Degradado_sin_nombre_21-4);
          }
    
          .cls-52 {
            clip-path: url(#clippath);
          }
    
          .cls-7 {
            clip-rule: evenodd;
          }
    
          .cls-53 {
            fill: url(#linear-gradient-34);
          }
    
          .cls-32 {
            fill: url(#Degradado_sin_nombre_66-2);
          }
    
          .cls-8 {
            stroke: url(#linear-gradient);
            stroke-width: 6.61px;
          }
    
          .cls-21 {
            fill: url(#linear-gradient-6);
            filter: url(#drop-shadow-5);
          }
    
          .cls-54 {
            clip-path: url(#clippath-3);
          }
    
          .cls-33 {
            fill: url(#Degradado_sin_nombre_21-2);
          }
    
          .cls-34 {
            fill: url(#Degradado_sin_nombre_59-3);
          }
    
          .cls-55 {
            fill: url(#linear-gradient-24);
          }
    
          .cls-56 {
            fill: url(#linear-gradient-9);
          }
    
          .cls-22 {
            fill: url(#linear-gradient-3);
            filter: url(#drop-shadow-2);
          }
    
          .cls-57 {
            fill: url(#linear-gradient-22);
          }
    
          .cls-58 {
            fill: url(#linear-gradient-42);
          }
    
          .cls-59 {
            clip-path: url(#clippath-5);
          }
    
          .cls-3 {
            font-size: 14px;
          }
    
          .cls-3, .cls-4 {
            font-family: MontserratThin-Bold, 'Montserrat Thin';
            font-variation-settings: 'wght' 700;
            font-weight: 700;
          }
    
          .cls-35 {
            fill: url(#Degradado_sin_nombre_62);
          }
    
          .cls-60 {
            fill: url(#linear-gradient-27);
          }
    
          .cls-61 {
            fill: url(#linear-gradient-33);
          }
    
          .cls-62 {
            fill: url(#linear-gradient-38);
          }
    
          .cls-63 {
            fill: url(#linear-gradient-29);
          }
    
          .cls-64 {
            fill: url(#linear-gradient-30);
          }
    
          .cls-65 {
            fill: url(#linear-gradient-23);
          }
    
          .cls-66 {
            fill: url(#linear-gradient-19);
          }
    
          .cls-36 {
            fill: url(#Degradado_sin_nombre_59-4);
          }
    
          .cls-67 {
            fill: url(#linear-gradient-8);
          }
    
          .cls-4 {
            font-size: 12px;
          }
    
          .cls-68 {
            fill: url(#linear-gradient-12);
          }
    
          .cls-37 {
            fill: url(#Degradado_sin_nombre_21-3);
          }
    
          .cls-69 {
            fill: url(#linear-gradient-13);
          }
    
          .cls-70 {
            fill: url(#linear-gradient-26);
          }
        </style>
        <linearGradient id="linear-gradient" x1="55.32" y1="195.01" x2="621.35" y2="195.01" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#476ab1"/>
          <stop offset="1" stop-color="#2a2b74"/>
        </linearGradient>
        <linearGradient id="linear-gradient-2" x1="2078.19" y1="265.6" x2="2012.62" y2="379.17" gradientTransform="translate(2196.27 652.16) rotate(-180)" xlink:href="#linear-gradient"/>
        <filter id="drop-shadow-1" filterUnits="userSpaceOnUse">
          <feOffset dx="1" dy="4"/>
          <feGaussianBlur result="blur" stdDeviation="3"/>
          <feFlood flood-color="#000" flood-opacity=".75"/>
          <feComposite in2="blur" operator="in"/>
          <feComposite in="SourceGraphic"/>
        </filter>
        <linearGradient id="Degradado_sin_nombre_21" data-name="Degradado sin nombre 21" x1="2045.12" y1="323.82" x2="2045.12" y2="301.33" gradientTransform="translate(2196.27 652.16) rotate(-180)" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#000" stop-opacity="0"/>
          <stop offset="1" stop-color="#000"/>
        </linearGradient>
        <linearGradient id="Degradado_sin_nombre_59" data-name="Degradado sin nombre 59" x1="2055.51" y1="394.45" x2="2055.51" y2="377.19" gradientTransform="translate(2188.48 650.29) rotate(-180) scale(.99)" gradientUnits="userSpaceOnUse">
          <stop offset=".47" stop-color="#000" stop-opacity="0"/>
          <stop offset="1" stop-color="#000"/>
        </linearGradient>
        <clipPath id="clippath">
          <path class="cls-7" d="M110.2,380.45h81.33c5.53,0,10.02-4.49,10.02-10.02v-81.33c0-5.53-4.49-10.02-10.02-10.02h-30.9l-4.26-7.48-5.39-9.45-5.49,9.4-4.41,7.54h-30.88c-5.53,0-10.02,4.49-10.02,10.02v81.33c0,5.53,4.49,10.02,10.02,10.02Z"/>
        </clipPath>
        <linearGradient id="linear-gradient-3" x1="26.18" y1="119.33" x2="91.75" y2="5.76" xlink:href="#linear-gradient"/>
        <filter id="drop-shadow-2" filterUnits="userSpaceOnUse">
          <feOffset dx="1" dy="4"/>
          <feGaussianBlur result="blur-2" stdDeviation="3"/>
          <feFlood flood-color="#000" flood-opacity=".75"/>
          <feComposite in2="blur-2" operator="in"/>
          <feComposite in="SourceGraphic"/>
        </filter>
        <linearGradient id="Degradado_sin_nombre_59-2" data-name="Degradado sin nombre 59" x1="51.63" y1="130.36" x2="51.63" y2="113.1" gradientTransform="translate(7.79 1.86) scale(.99)" xlink:href="#Degradado_sin_nombre_59"/>
        <clipPath id="clippath-1">
          <path class="cls-7" d="M99.63,11.87H18.3c-5.53,0-10.02,4.49-10.02,10.02V103.21c0,5.53,4.49,10.02,10.02,10.02h30.9l4.26,7.48,5.39,9.45,5.49-9.4,4.41-7.54h30.88c5.53,0,10.02-4.49,10.02-10.02V21.88c0-5.53-4.49-10.02-10.02-10.02Z"/>
        </clipPath>
        <linearGradient id="Degradado_sin_nombre_21-2" data-name="Degradado sin nombre 21" x1="58.67" y1="61.55" x2="58.67" y2="41.5" gradientTransform="translate(117.35 103.05) rotate(-180)" xlink:href="#Degradado_sin_nombre_21"/>
        <linearGradient id="linear-gradient-4" x1="400.88" y1="113.01" x2="466.44" y2="-.56" xlink:href="#linear-gradient"/>
        <filter id="drop-shadow-3" filterUnits="userSpaceOnUse">
          <feOffset dx="1" dy="4"/>
          <feGaussianBlur result="blur-3" stdDeviation="3"/>
          <feFlood flood-color="#000" flood-opacity=".75"/>
          <feComposite in2="blur-3" operator="in"/>
          <feComposite in="SourceGraphic"/>
        </filter>
        <linearGradient id="Degradado_sin_nombre_59-3" data-name="Degradado sin nombre 59" x1="429.62" y1="123.93" x2="429.62" y2="106.67" gradientTransform="translate(7.79 1.86) scale(.99)" xlink:href="#Degradado_sin_nombre_59"/>
        <clipPath id="clippath-2">
          <path class="cls-7" d="M474.32,5.55h-81.33c-5.53,0-10.02,4.49-10.02,10.02V96.89c0,5.53,4.49,10.02,10.02,10.02h30.9l4.26,7.48,5.39,9.45,5.49-9.4,4.41-7.54h30.88c5.53,0,10.02-4.49,10.02-10.02V15.56c0-5.53-4.49-10.02-10.02-10.02Z"/>
        </clipPath>
        <linearGradient id="Degradado_sin_nombre_21-3" data-name="Degradado sin nombre 21" x1="433.37" y1="55.23" x2="433.37" y2="35.18" gradientTransform="translate(866.73 90.41) rotate(-180)" xlink:href="#Degradado_sin_nombre_21"/>
        <linearGradient id="linear-gradient-5" x1="1890.88" y1="266.66" x2="1825.32" y2="380.22" gradientTransform="translate(2196.27 652.16) rotate(-180)" xlink:href="#linear-gradient"/>
        <filter id="drop-shadow-4" filterUnits="userSpaceOnUse">
          <feOffset dx="1" dy="4"/>
          <feGaussianBlur result="blur-4" stdDeviation="3"/>
          <feFlood flood-color="#000" flood-opacity=".75"/>
          <feComposite in2="blur-4" operator="in"/>
          <feComposite in="SourceGraphic"/>
        </filter>
        <linearGradient id="Degradado_sin_nombre_66" data-name="Degradado sin nombre 66" x1="1857.81" y1="324.88" x2="1857.81" y2="302.39" gradientTransform="translate(2196.27 652.16) rotate(-180)" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#ef6522" stop-opacity="0"/>
          <stop offset=".12" stop-color="#ee6422" stop-opacity=".02"/>
          <stop offset=".24" stop-color="#ee6323" stop-opacity=".08"/>
          <stop offset=".38" stop-color="#ee6025" stop-opacity=".17"/>
          <stop offset=".52" stop-color="#ee5d28" stop-opacity=".3"/>
          <stop offset=".67" stop-color="#ed582b" stop-opacity=".48"/>
          <stop offset=".81" stop-color="#ec532f" stop-opacity=".68"/>
          <stop offset=".96" stop-color="#ec4c34" stop-opacity=".93"/>
          <stop offset="1" stop-color="#ec4b36"/>
        </linearGradient>
        <linearGradient id="Degradado_sin_nombre_62" data-name="Degradado sin nombre 62" x1="1866.56" y1="395.52" x2="1866.56" y2="378.26" gradientTransform="translate(2188.48 650.29) rotate(-180) scale(.99)" gradientUnits="userSpaceOnUse">
          <stop offset=".48" stop-color="#ec4b36" stop-opacity="0"/>
          <stop offset=".65" stop-color="#ec4b36" stop-opacity=".32"/>
          <stop offset="1" stop-color="#ec4b36"/>
        </linearGradient>
        <clipPath id="clippath-3">
          <path class="cls-7" d="M297.51,379.4h81.33c5.53,0,10.02-4.49,10.02-10.02v-81.33c0-5.53-4.49-10.02-10.02-10.02h-30.9l-4.26-7.48-5.39-9.45-5.49,9.4-4.41,7.54h-30.88c-5.53,0-10.02,4.49-10.02,10.02v81.33c0,5.53,4.49,10.02,10.02,10.02Z"/>
        </clipPath>
        <linearGradient id="linear-gradient-6" x1="1707.05" y1="266.66" x2="1641.48" y2="380.22" gradientTransform="translate(2196.27 652.16) rotate(-180)" xlink:href="#linear-gradient"/>
        <filter id="drop-shadow-5" filterUnits="userSpaceOnUse">
          <feOffset dx="1" dy="4"/>
          <feGaussianBlur result="blur-5" stdDeviation="3"/>
          <feFlood flood-color="#000" flood-opacity=".75"/>
          <feComposite in2="blur-5" operator="in"/>
          <feComposite in="SourceGraphic"/>
        </filter>
        <linearGradient id="Degradado_sin_nombre_66-2" data-name="Degradado sin nombre 66" x1="1673.97" x2="1673.97" xlink:href="#Degradado_sin_nombre_66"/>
        <linearGradient id="Degradado_sin_nombre_62-2" data-name="Degradado sin nombre 62" x1="1681.11" x2="1681.11" xlink:href="#Degradado_sin_nombre_62"/>
        <clipPath id="clippath-4">
          <path class="cls-7" d="M481.35,379.4h81.33c5.53,0,10.02-4.49,10.02-10.02v-81.33c0-5.53-4.49-10.02-10.02-10.02h-30.9l-4.26-7.48-5.39-9.45-5.49,9.4-4.41,7.54h-30.88c-5.53,0-10.02,4.49-10.02,10.02v81.33c0,5.53,4.49,10.02,10.02,10.02Z"/>
        </clipPath>
        <linearGradient id="linear-gradient-7" x1="209.38" y1="116.39" x2="274.95" y2="2.82" xlink:href="#linear-gradient"/>
        <filter id="drop-shadow-6" filterUnits="userSpaceOnUse">
          <feOffset dx="1" dy="4"/>
          <feGaussianBlur result="blur-6" stdDeviation="3"/>
          <feFlood flood-color="#000" flood-opacity=".75"/>
          <feComposite in2="blur-6" operator="in"/>
          <feComposite in="SourceGraphic"/>
        </filter>
        <linearGradient id="Degradado_sin_nombre_59-4" data-name="Degradado sin nombre 59" x1="236.44" y1="127.37" x2="236.44" y2="110.11" gradientTransform="translate(7.79 1.86) scale(.99)" xlink:href="#Degradado_sin_nombre_59"/>
        <clipPath id="clippath-5">
          <path class="cls-7" d="M282.83,8.92h-81.33c-5.53,0-10.02,4.49-10.02,10.02V100.27c0,5.53,4.49,10.02,10.02,10.02h30.9l4.26,7.48,5.39,9.45,5.49-9.4,4.41-7.54h30.88c5.53,0,10.02-4.49,10.02-10.02V18.94c0-5.53-4.49-10.02-10.02-10.02Z"/>
        </clipPath>
        <linearGradient id="Degradado_sin_nombre_21-4" data-name="Degradado sin nombre 21" x1="241.88" y1="58.61" x2="241.88" y2="38.55" gradientTransform="translate(483.75 97.16) rotate(-180)" xlink:href="#Degradado_sin_nombre_21"/>
        <linearGradient id="linear-gradient-8" x1="33.98" y1="27.62" x2="42" y2="27.62" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-9" x1="43.51" y1="27.32" x2="50.78" y2="27.32" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-10" x1="52.18" y1="28.75" x2="58.93" y2="28.75" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-11" x1="60.1" y1="28.75" x2="66.54" y2="28.75" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-12" x1="67.29" y1="28.75" x2="74.77" y2="28.75" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-13" x1="79.02" y1="27.62" x2="83.01" y2="27.62" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-14" x1="214.83" y1="25.08" x2="222.85" y2="25.08" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-15" x1="224.36" y1="24.79" x2="231.63" y2="24.79" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-16" x1="233.03" y1="26.22" x2="239.78" y2="26.22" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-17" x1="240.95" y1="26.22" x2="247.39" y2="26.22" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-18" x1="248.14" y1="26.22" x2="255.62" y2="26.22" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-19" x1="259.77" y1="25.17" x2="267.14" y2="25.17" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-20" x1="407.45" y1="20.39" x2="415.46" y2="20.39" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-21" x1="416.97" y1="20.1" x2="424.24" y2="20.1" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-22" x1="425.64" y1="21.53" x2="432.39" y2="21.53" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-23" x1="433.57" y1="21.53" x2="440" y2="21.53" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-24" x1="440.75" y1="21.53" x2="448.23" y2="21.53" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-25" x1="452.52" y1="20.48" x2="459.9" y2="20.48" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-26" x1="127.42" y1="364.99" x2="135.44" y2="364.99" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-27" x1="136.95" y1="364.7" x2="144.21" y2="364.7" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-28" x1="145.62" y1="366.13" x2="152.37" y2="366.13" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-29" x1="153.54" y1="366.13" x2="159.98" y2="366.13" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-30" x1="160.73" y1="366.13" x2="168.21" y2="366.13" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-31" x1="172.39" y1="364.91" x2="179.81" y2="364.91" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-32" x1="316.69" y1="364.94" x2="324.71" y2="364.94" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-33" x1="326.22" y1="364.64" x2="333.49" y2="364.64" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-34" x1="334.89" y1="366.07" x2="341.64" y2="366.07" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-35" x1="342.81" y1="366.07" x2="349.25" y2="366.07" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-36" x1="350" y1="366.07" x2="357.48" y2="366.07" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-37" x1="362.05" y1="364.94" x2="370.62" y2="364.94" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-38" x1="500.13" y1="363.8" x2="508.15" y2="363.8" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-39" x1="509.66" y1="363.5" x2="516.92" y2="363.5" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-40" x1="518.32" y1="364.93" x2="525.08" y2="364.93" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-41" x1="526.25" y1="364.93" x2="532.69" y2="364.93" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-42" x1="533.44" y1="364.93" x2="540.92" y2="364.93" xlink:href="#linear-gradient"/>
        <linearGradient id="linear-gradient-43" x1="545.59" y1="363.8" x2="553.23" y2="363.8" xlink:href="#linear-gradient"/>
      </defs>
         <g class="cls-25">
    <g id="Layer_2" data-name="Layer 2">
      <g id="Layer_1-2" data-name="Layer 1">
        <g>
          <g>
            <line class="cls-5" x1="58.5" y1="129.82" x2="58.5" y2="129.82"/>
            <line class="cls-6" x1="58.5" y1="133.78" x2="58.5" y2="167.5"/>
            <line class="cls-5" x1="58.5" y1="169.48" x2="58.5" y2="169.48"/>
          </g>
          <path class="cls-8" d="M58.63,175.18c46.62,0,46.62,39.66,93.23,39.66s46.62-39.66,93.23-39.66,46.62,39.66,93.23,39.66,46.62-39.66,93.24-39.66,46.62,39.66,93.24,39.66,46.62-39.66,93.24-39.66"/>
          <circle class="cls-51" cx="58.63" cy="175.76" r="6.78"/>
          <g>
            <line class="cls-5" x1="242.17" y1="129.98" x2="242.17" y2="129.98"/>
            <line class="cls-6" x1="242.17" y1="133.95" x2="242.17" y2="167.66"/>
            <line class="cls-5" x1="242.17" y1="169.64" x2="242.17" y2="169.64"/>
          </g>
          <circle class="cls-51" cx="242.17" cy="173.65" r="6.78"/>
          <g>
            <line class="cls-5" x1="433.66" y1="126.6" x2="433.66" y2="126.6"/>
            <line class="cls-6" x1="433.66" y1="130.57" x2="433.66" y2="164.28"/>
            <line class="cls-5" x1="433.66" y1="166.26" x2="433.66" y2="166.26"/>
          </g>
          <circle class="cls-51" cx="433.66" cy="170.27" r="6.78"/>
          <path class="cls-18" d="M110.2,380.45h81.33c5.53,0,10.02-4.49,10.02-10.02v-81.33c0-5.53-4.49-10.02-10.02-10.02h-30.9l-4.26-7.48-5.39-9.45-5.49,9.4-4.41,7.54h-30.88c-5.53,0-10.02,4.49-10.02,10.02v81.33c0,5.53,4.49,10.02,10.02,10.02Z"/>
          <rect class="cls-28" x="100.44" y="328.34" width="101.43" height="22.49"/>
          <polygon class="cls-27" points="160.7 279.18 150.85 279.13 141.01 279.07 145.98 270.64 150.94 262.2 155.82 270.69 160.7 279.18"/>
          <g class="cls-52">
            <rect class="cls-1" x="70.99" y="351.12" width="151.49" height="34.71" transform="translate(293.47 736.94) rotate(180)"/>
          </g>
          <path class="cls-22" d="M99.63,11.87H18.3c-5.53,0-10.02,4.49-10.02,10.02V103.21c0,5.53,4.49,10.02,10.02,10.02h30.9l4.26,7.48,5.39,9.45,5.49-9.4,4.41-7.54h30.88c5.53,0,10.02-4.49,10.02-10.02V21.88c0-5.53-4.49-10.02-10.02-10.02Z"/>
          <polygon class="cls-26" points="49.13 113.14 58.98 113.19 68.82 113.25 63.86 121.68 58.89 130.12 54.01 121.63 49.13 113.14"/>
          <g class="cls-42">
            <rect class="cls-1" x="-12.65" y="6.49" width="151.49" height="34.71"/>
          </g>
          <rect class="cls-33" x="7.96" y="41.5" width="101.43" height="20.05" transform="translate(117.35 103.05) rotate(180)"/>
          <path class="cls-19" d="M474.32,5.55h-81.33c-5.53,0-10.02,4.49-10.02,10.02V96.89c0,5.53,4.49,10.02,10.02,10.02h30.9l4.26,7.48,5.39,9.45,5.49-9.4,4.41-7.54h30.88c5.53,0,10.02-4.49,10.02-10.02V15.56c0-5.53-4.49-10.02-10.02-10.02Z"/>
          <polygon class="cls-34" points="423.82 106.82 433.67 106.87 443.52 106.93 438.55 115.36 433.58 123.8 428.7 115.31 423.82 106.82"/>
          <g class="cls-24">
            <rect class="cls-1" x="362.04" y=".17" width="151.49" height="34.71"/>
          </g>
          <rect class="cls-37" x="382.65" y="35.18" width="101.43" height="20.05" transform="translate(866.73 90.41) rotate(180)"/>
          <g>
            <line class="cls-5" x1="150.82" y1="261.09" x2="150.82" y2="261.09"/>
            <line class="cls-6" x1="150.82" y1="257.13" x2="150.82" y2="223.41"/>
            <line class="cls-5" x1="150.82" y1="221.43" x2="150.82" y2="221.43"/>
          </g>
          <circle class="cls-51" cx="150.82" cy="217.42" r="6.78"/>
          <path class="cls-17" d="M297.51,379.4h81.33c5.53,0,10.02-4.49,10.02-10.02v-81.33c0-5.53-4.49-10.02-10.02-10.02h-30.9l-4.26-7.48-5.39-9.45-5.49,9.4-4.41,7.54h-30.88c-5.53,0-10.02,4.49-10.02,10.02v81.33c0,5.53,4.49,10.02,10.02,10.02Z"/>
          <rect class="cls-29" x="287.75" y="327.28" width="101.43" height="22.49"/>
          <polygon class="cls-35" points="348.01 278.12 338.16 278.07 328.31 278.02 333.28 269.58 338.25 261.14 343.13 269.63 348.01 278.12"/>
          <g class="cls-54">
            <rect class="cls-1" x="258.29" y="350.06" width="151.49" height="34.71" transform="translate(668.08 734.83) rotate(180)"/>
          </g>
          <g>
            <line class="cls-5" x1="338.13" y1="260.04" x2="338.13" y2="260.04"/>
            <line class="cls-6" x1="338.13" y1="256.07" x2="338.13" y2="222.36"/>
            <line class="cls-5" x1="338.13" y1="220.37" x2="338.13" y2="220.37"/>
          </g>
          <circle class="cls-51" cx="338.13" cy="216.37" r="6.78"/>
          <path class="cls-21" d="M481.35,379.4h81.33c5.53,0,10.02-4.49,10.02-10.02v-81.33c0-5.53-4.49-10.02-10.02-10.02h-30.9l-4.26-7.48-5.39-9.45-5.49,9.4-4.41,7.54h-30.88c-5.53,0-10.02,4.49-10.02,10.02v81.33c0,5.53,4.49,10.02,10.02,10.02Z"/>
          <rect class="cls-32" x="471.59" y="327.28" width="101.43" height="22.49"/>
          <polygon class="cls-30" points="531.84 278.12 522 278.07 512.15 278.02 517.12 269.58 522.09 261.14 526.97 269.63 531.84 278.12"/>
          <g class="cls-43">
            <rect class="cls-1" x="442.13" y="350.06" width="151.49" height="34.71" transform="translate(1035.76 734.83) rotate(180)"/>
          </g>
          <g>
            <line class="cls-5" x1="521.97" y1="260.04" x2="521.97" y2="260.04"/>
            <line class="cls-6" x1="521.97" y1="256.07" x2="521.97" y2="222.36"/>
            <line class="cls-5" x1="521.97" y1="220.37" x2="521.97" y2="220.37"/>
          </g>
          <circle class="cls-51" cx="521.97" cy="216.37" r="6.78"/>
          <path class="cls-20" d="M282.83,8.92h-81.33c-5.53,0-10.02,4.49-10.02,10.02V100.27c0,5.53,4.49,10.02,10.02,10.02h30.9l4.26,7.48,5.39,9.45,5.49-9.4,4.41-7.54h30.88c5.53,0,10.02-4.49,10.02-10.02V18.94c0-5.53-4.49-10.02-10.02-10.02Z"/>
          <polygon class="cls-36" points="232.33 110.2 242.18 110.25 252.03 110.31 247.06 118.74 242.09 127.18 237.21 118.69 232.33 110.2"/>
          <g class="cls-59">
            <rect class="cls-1" x="170.55" y="3.55" width="151.49" height="34.71"/>
          </g>
          <rect class="cls-31" x="191.16" y="38.55" width="101.43" height="20.05" transform="translate(483.75 97.16) rotate(180)"/>
          <text class="cls-3" transform="translate(30.23 59.23) scale(.94 1)"><tspan x="0" y="0">Planing</tspan></text>
          <text class="cls-2" transform="translate(33.1 81.97) scale(.94 1)"><tspan x="0" y="0">Client meeting</tspan><tspan x="-6.53" y="8.4">Client requirments</tspan><tspan x="-16.8" y="16.8">Analysis with client need</tspan></text>
          <text class="cls-3" transform="translate(123.16 299.49) scale(.94 1)"><tspan x="0" y="0">Design</tspan></text>
          <text class="cls-2" transform="translate(117.8 320.25) scale(.94 1)"><tspan x="0" y="0">Wireframe layouts</tspan><tspan x=".95" y="8.4">proto type design</tspan><tspan x="7.17" y="16.8">Design signoff</tspan></text>
          <text class="cls-4" transform="translate(200.96 54.76) scale(.94 1)"><tspan x="0" y="0">Development</tspan></text>
          <text class="cls-2" transform="translate(229.64 76.71) scale(.94 1)"><tspan x="0" y="0">Coding</tspan><tspan x="-22.26" y="8.4">Layout main section</tspan><tspan x="-14.06" y="16.8">client feedback</tspan></text>
          <text class="cls-3" transform="translate(312.52 299.49) scale(.94 1)"><tspan x="0" y="0">Testing</tspan></text>
          <text class="cls-2" transform="translate(313.45 324.83) scale(.94 1)"><tspan x="0" y="0">Manual testing</tspan><tspan x="-7.54" y="8.4">Automation testing</tspan></text>
          <text class="cls-3" transform="translate(391.35 52.74) scale(.94 1)"><tspan x="0" y="0">Deployment</tspan></text>
          <text class="cls-2" transform="translate(401.92 76.71) scale(.94 1)"><tspan x="0" y="0">Server Configuration</tspan><tspan x="-10.8" y="8.4">Deployment on a live Web </tspan><tspan x="24.99" y="16.8">server</tspan></text>
          <text class="cls-4" transform="translate(482.8 299.49) scale(.94 1)"><tspan x="0" y="0">Maintenance</tspan></text>
          <text class="cls-2" transform="translate(480.26 324.83) scale(.94 1)"><tspan x="0" y="0">Application overall health</tspan><tspan x="1.65" y="8.4">Performance monitoring</tspan><tspan x="20.5" y="16.8">Monthly basis</tspan></text>
          <g>
            <path class="cls-67" d="M33.98,32.52v-9.8h4c.83,0,1.54,.14,2.14,.43,.6,.28,1.06,.69,1.39,1.23,.33,.53,.49,1.16,.49,1.89s-.16,1.37-.49,1.9c-.33,.53-.79,.94-1.39,1.22-.6,.29-1.31,.43-2.14,.43h-2.83l.98-1.02v3.72h-2.15Zm2.15-3.47l-.98-1.08h2.71c.65,0,1.15-.15,1.48-.45,.33-.3,.5-.72,.5-1.26s-.17-.96-.5-1.25c-.33-.29-.83-.44-1.48-.44h-2.71l.98-1.08v5.56Z"/>
            <path class="cls-56" d="M47.83,24.87c.56,0,1.07,.12,1.51,.36,.44,.24,.79,.6,1.05,1.09,.25,.49,.38,1.12,.38,1.88v4.31h-2.06v-3.98c0-.61-.12-1.05-.38-1.34-.25-.29-.61-.43-1.06-.43-.33,0-.62,.07-.88,.22s-.46,.37-.61,.66c-.15,.29-.22,.67-.22,1.15v3.72h-2.06v-10.39h2.06v4.94l-.46-.63c.26-.5,.62-.89,1.1-1.16,.48-.27,1.02-.41,1.62-.41Z"/>
            <path class="cls-44" d="M54.83,32.63c-.55,0-1.02-.1-1.41-.3s-.7-.47-.92-.82-.32-.73-.32-1.16,.1-.83,.31-1.17,.54-.6,.98-.79,1.04-.28,1.77-.28h1.88v1.26h-1.66c-.48,0-.82,.08-1,.25s-.27,.38-.27,.63c0,.28,.1,.5,.31,.67,.21,.16,.49,.25,.84,.25s.67-.08,.94-.25,.47-.42,.59-.77l.32,1.02c-.15,.47-.42,.83-.82,1.08s-.91,.38-1.53,.38Zm2.17-.11v-1.47l-.13-.32v-2.63c0-.47-.13-.83-.4-1.09-.27-.26-.68-.39-1.24-.39-.38,0-.75,.06-1.12,.19-.37,.13-.68,.3-.95,.51l-.73-1.53c.39-.3,.85-.52,1.4-.68,.55-.15,1.1-.23,1.67-.23,1.08,0,1.92,.27,2.52,.81,.6,.54,.9,1.39,.9,2.53v4.3h-1.93Z"/>
            <path class="cls-40" d="M63.18,32.63c-.61,0-1.19-.08-1.74-.23-.55-.15-1-.35-1.33-.58l.67-1.55c.33,.21,.72,.38,1.17,.51,.44,.14,.88,.2,1.31,.2,.48,0,.81-.06,1.01-.18,.2-.12,.3-.29,.3-.5,0-.18-.08-.31-.23-.4-.15-.09-.36-.16-.61-.2-.25-.05-.53-.09-.84-.14-.31-.05-.61-.11-.92-.2s-.59-.2-.85-.36-.47-.37-.62-.64c-.15-.27-.23-.62-.23-1.05,0-.48,.13-.9,.4-1.27,.26-.37,.64-.66,1.12-.86,.48-.21,1.07-.31,1.76-.31,.49,0,.99,.06,1.49,.17,.5,.12,.92,.28,1.26,.48l-.7,1.55c-.33-.21-.68-.35-1.02-.43s-.68-.13-1-.13c-.48,0-.82,.07-1.03,.2-.21,.13-.32,.3-.32,.5,0,.19,.08,.33,.24,.43,.16,.1,.37,.17,.62,.22s.54,.09,.85,.14c.31,.05,.61,.11,.91,.2,.3,.08,.58,.2,.84,.36,.26,.15,.47,.37,.62,.64s.23,.62,.23,1.05c0,.46-.13,.87-.4,1.23-.26,.36-.65,.64-1.14,.85-.5,.21-1.1,.31-1.82,.31Z"/>
            <path class="cls-68" d="M71.33,32.63c-.81,0-1.52-.17-2.13-.5s-1.08-.8-1.41-1.38c-.33-.58-.5-1.25-.5-2s.16-1.41,.48-2,.77-1.05,1.35-1.38c.58-.33,1.23-.5,1.95-.5s1.32,.16,1.88,.48c.56,.32,1,.77,1.33,1.34,.33,.58,.49,1.27,.49,2.09,0,.08,0,.18-.01,.29,0,.11-.02,.21-.03,.3h-5.77v-1.27h4.69l-.81,.38c0-.39-.06-.73-.21-1.02-.15-.29-.36-.52-.62-.68-.26-.16-.57-.25-.92-.25s-.66,.08-.93,.25c-.27,.16-.48,.39-.63,.69-.15,.29-.22,.64-.22,1.04v.34c0,.42,.09,.78,.26,1.09,.18,.31,.42,.54,.73,.71,.31,.16,.68,.24,1.11,.24,.37,0,.7-.06,.98-.18,.29-.12,.55-.3,.79-.55l1.1,1.26c-.33,.39-.74,.69-1.23,.9-.49,.21-1.06,.31-1.71,.31Z"/>
            <path class="cls-69" d="M80.87,32.52v-8.96l.92,.98h-2.77v-1.82h3.99v9.8h-2.14Z"/>
          </g>
          <g>
            <path class="cls-15" d="M214.83,29.98v-9.8h4c.83,0,1.54,.14,2.14,.43,.6,.28,1.06,.69,1.39,1.23,.33,.53,.49,1.16,.49,1.89s-.16,1.37-.49,1.9c-.33,.53-.79,.94-1.39,1.22-.6,.29-1.31,.43-2.14,.43h-2.83l.98-1.02v3.72h-2.15Zm2.15-3.47l-.98-1.08h2.71c.65,0,1.15-.15,1.48-.45,.33-.3,.5-.72,.5-1.26s-.17-.96-.5-1.25c-.33-.29-.83-.44-1.48-.44h-2.71l.98-1.08v5.56Z"/>
            <path class="cls-11" d="M228.68,22.34c.56,0,1.07,.12,1.51,.36,.44,.24,.79,.6,1.05,1.09,.25,.49,.38,1.12,.38,1.88v4.31h-2.06v-3.98c0-.61-.12-1.05-.38-1.34-.25-.29-.61-.43-1.06-.43-.33,0-.62,.07-.88,.22s-.46,.37-.61,.66c-.15,.29-.22,.67-.22,1.15v3.72h-2.06v-10.39h2.06v4.94l-.46-.63c.26-.5,.62-.89,1.1-1.16,.48-.27,1.02-.41,1.62-.41Z"/>
            <path class="cls-46" d="M235.68,30.09c-.55,0-1.02-.1-1.41-.3s-.7-.47-.92-.82-.32-.73-.32-1.16,.1-.83,.31-1.17,.54-.6,.98-.79,1.04-.28,1.77-.28h1.88v1.26h-1.66c-.48,0-.82,.08-1,.25s-.27,.38-.27,.63c0,.28,.1,.5,.31,.67,.21,.16,.49,.25,.84,.25s.67-.08,.94-.25,.47-.42,.59-.77l.32,1.02c-.15,.47-.42,.83-.82,1.08s-.91,.38-1.53,.38Zm2.17-.11v-1.47l-.13-.32v-2.63c0-.47-.13-.83-.4-1.09-.27-.26-.68-.39-1.24-.39-.38,0-.75,.06-1.12,.19-.37,.13-.68,.3-.95,.51l-.73-1.53c.39-.3,.85-.52,1.4-.68,.55-.15,1.1-.23,1.67-.23,1.08,0,1.92,.27,2.52,.81,.6,.54,.9,1.39,.9,2.53v4.3h-1.93Z"/>
            <path class="cls-9" d="M244.03,30.09c-.61,0-1.19-.08-1.74-.23-.55-.15-1-.35-1.33-.58l.67-1.55c.33,.21,.72,.38,1.17,.51,.44,.14,.88,.2,1.31,.2,.48,0,.81-.06,1.01-.18,.2-.12,.3-.29,.3-.5,0-.18-.08-.31-.23-.4-.15-.09-.36-.16-.61-.2-.25-.05-.53-.09-.84-.14-.31-.05-.61-.11-.92-.2s-.59-.2-.85-.36-.47-.37-.62-.64c-.15-.27-.23-.62-.23-1.05,0-.48,.13-.9,.4-1.27,.26-.37,.64-.66,1.12-.86,.48-.21,1.07-.31,1.76-.31,.49,0,.99,.06,1.49,.17,.5,.12,.92,.28,1.26,.48l-.7,1.55c-.33-.21-.68-.35-1.02-.43s-.68-.13-1-.13c-.48,0-.82,.07-1.03,.2-.21,.13-.32,.3-.32,.5,0,.19,.08,.33,.24,.43,.16,.1,.37,.17,.62,.22s.54,.09,.85,.14c.31,.05,.61,.11,.91,.2,.3,.08,.58,.2,.84,.36,.26,.15,.47,.37,.62,.64s.23,.62,.23,1.05c0,.46-.13,.87-.4,1.23-.26,.36-.65,.64-1.14,.85-.5,.21-1.1,.31-1.82,.31Z"/>
            <path class="cls-12" d="M252.18,30.09c-.81,0-1.52-.17-2.13-.5s-1.08-.8-1.41-1.38c-.33-.58-.5-1.25-.5-2s.16-1.41,.48-2,.77-1.05,1.35-1.38c.58-.33,1.23-.5,1.95-.5s1.32,.16,1.88,.48c.56,.32,1,.77,1.33,1.34,.33,.58,.49,1.27,.49,2.09,0,.08,0,.18-.01,.29,0,.11-.02,.21-.03,.3h-5.77v-1.27h4.69l-.81,.38c0-.39-.06-.73-.21-1.02-.15-.29-.36-.52-.62-.68-.26-.16-.57-.25-.92-.25s-.66,.08-.93,.25c-.27,.16-.48,.39-.63,.69-.15,.29-.22,.64-.22,1.04v.34c0,.42,.09,.78,.26,1.09,.18,.31,.42,.54,.73,.71,.31,.16,.68,.24,1.11,.24,.37,0,.7-.06,.98-.18,.29-.12,.55-.3,.79-.55l1.1,1.26c-.33,.39-.74,.69-1.23,.9-.49,.21-1.06,.31-1.71,.31Z"/>
            <path class="cls-66" d="M263.28,30.15c-.64,0-1.28-.09-1.9-.27-.63-.18-1.16-.45-1.61-.79l.83-1.72c.35,.27,.76,.49,1.22,.65,.46,.16,.94,.24,1.42,.24,.54,0,.96-.11,1.27-.34,.31-.23,.46-.54,.46-.93s-.14-.67-.41-.88c-.27-.21-.71-.32-1.32-.32h-.96v-1.48l2.56-3.11,.24,.81h-4.85v-1.82h6.47v1.47l-2.56,3.09-1.08-.66h.62c1.14,0,2,.27,2.58,.81,.59,.54,.88,1.23,.88,2.07,0,.56-.14,1.08-.42,1.57-.28,.49-.7,.88-1.26,1.17-.56,.29-1.29,.44-2.18,.44Z"/>
          </g>
          <g>
            <path class="cls-23" d="M407.45,25.29V15.49h4c.83,0,1.54,.14,2.14,.43,.6,.28,1.06,.69,1.39,1.23,.33,.53,.49,1.16,.49,1.89s-.16,1.37-.49,1.9c-.33,.53-.79,.94-1.39,1.22-.6,.29-1.31,.43-2.14,.43h-2.83l.98-1.02v3.72h-2.15Zm2.15-3.47l-.98-1.08h2.71c.65,0,1.15-.15,1.48-.45,.33-.3,.5-.72,.5-1.26s-.17-.96-.5-1.25c-.33-.29-.83-.44-1.48-.44h-2.71l.98-1.08v5.56Z"/>
            <path class="cls-49" d="M421.29,17.65c.56,0,1.07,.12,1.51,.36,.44,.24,.79,.6,1.05,1.09,.25,.49,.38,1.12,.38,1.88v4.31h-2.06v-3.98c0-.61-.12-1.05-.38-1.34-.25-.29-.61-.43-1.06-.43-.33,0-.62,.07-.88,.22s-.46,.37-.61,.66c-.15,.29-.22,.67-.22,1.15v3.72h-2.06V14.91h2.06v4.94l-.46-.63c.26-.5,.62-.89,1.1-1.16,.48-.27,1.02-.41,1.62-.41Z"/>
            <path class="cls-57" d="M428.29,25.41c-.55,0-1.02-.1-1.41-.3s-.7-.47-.92-.82-.32-.73-.32-1.16,.1-.83,.31-1.17,.54-.6,.98-.79,1.04-.28,1.77-.28h1.88v1.26h-1.66c-.48,0-.82,.08-1,.25s-.27,.38-.27,.63c0,.28,.1,.5,.31,.67,.21,.16,.49,.25,.84,.25s.67-.08,.94-.25,.47-.42,.59-.77l.32,1.02c-.15,.47-.42,.83-.82,1.08s-.91,.38-1.53,.38Zm2.17-.11v-1.47l-.13-.32v-2.63c0-.47-.13-.83-.4-1.09-.27-.26-.68-.39-1.24-.39-.38,0-.75,.06-1.12,.19-.37,.13-.68,.3-.95,.51l-.73-1.53c.39-.3,.85-.52,1.4-.68,.55-.15,1.1-.23,1.67-.23,1.08,0,1.92,.27,2.52,.81,.6,.54,.9,1.39,.9,2.53v4.3h-1.93Z"/>
            <path class="cls-65" d="M436.64,25.41c-.61,0-1.19-.08-1.74-.23-.55-.15-1-.35-1.33-.58l.67-1.55c.33,.21,.72,.38,1.17,.51,.44,.14,.88,.2,1.31,.2,.48,0,.81-.06,1.01-.18,.2-.12,.3-.29,.3-.5,0-.18-.08-.31-.23-.4-.15-.09-.36-.16-.61-.2-.25-.05-.53-.09-.84-.14-.31-.05-.61-.11-.92-.2s-.59-.2-.85-.36-.47-.37-.62-.64c-.15-.27-.23-.62-.23-1.05,0-.48,.13-.9,.4-1.27,.26-.37,.64-.66,1.12-.86,.48-.21,1.07-.31,1.76-.31,.49,0,.99,.06,1.49,.17,.5,.12,.92,.28,1.26,.48l-.7,1.55c-.33-.21-.68-.35-1.02-.43s-.68-.13-1-.13c-.48,0-.82,.07-1.03,.2-.21,.13-.32,.3-.32,.5,0,.19,.08,.33,.24,.43,.16,.1,.37,.17,.62,.22s.54,.09,.85,.14c.31,.05,.61,.11,.91,.2,.3,.08,.58,.2,.84,.36,.26,.15,.47,.37,.62,.64s.23,.62,.23,1.05c0,.46-.13,.87-.4,1.23-.26,.36-.65,.64-1.14,.85-.5,.21-1.1,.31-1.82,.31Z"/>
            <path class="cls-55" d="M444.8,25.41c-.81,0-1.52-.17-2.13-.5s-1.08-.8-1.41-1.38c-.33-.58-.5-1.25-.5-2s.16-1.41,.48-2,.77-1.05,1.35-1.38c.58-.33,1.23-.5,1.95-.5s1.32,.16,1.88,.48c.56,.32,1,.77,1.33,1.34,.33,.58,.49,1.27,.49,2.09,0,.08,0,.18-.01,.29,0,.11-.02,.21-.03,.3h-5.77v-1.27h4.69l-.81,.38c0-.39-.06-.73-.21-1.02-.15-.29-.36-.52-.62-.68-.26-.16-.57-.25-.92-.25s-.66,.08-.93,.25c-.27,.16-.48,.39-.63,.69-.15,.29-.22,.64-.22,1.04v.34c0,.42,.09,.78,.26,1.09,.18,.31,.42,.54,.73,.71,.31,.16,.68,.24,1.11,.24,.37,0,.7-.06,.98-.18,.29-.12,.55-.3,.79-.55l1.1,1.26c-.33,.39-.74,.69-1.23,.9-.49,.21-1.06,.31-1.71,.31Z"/>
            <path class="cls-50" d="M456.05,25.46c-.64,0-1.28-.09-1.91-.27-.63-.18-1.17-.45-1.62-.79l.85-1.72c.34,.27,.75,.49,1.21,.65,.46,.16,.94,.24,1.42,.24,.54,0,.96-.11,1.28-.34s.47-.54,.47-.94c0-.26-.06-.49-.19-.67-.13-.19-.35-.33-.66-.44-.31-.11-.75-.16-1.32-.16h-2.35l.46-5.52h5.65v1.82h-4.89l1.11-1.04-.34,3.93-1.1-1.02h1.96c.92,0,1.65,.13,2.21,.39s.96,.62,1.22,1.08,.39,.98,.39,1.56-.14,1.1-.41,1.6c-.27,.5-.69,.89-1.26,1.19-.57,.3-1.29,.45-2.17,.45Z"/>
          </g>
          <g>
            <path class="cls-70" d="M127.42,369.89v-9.8h4c.83,0,1.54,.14,2.14,.43,.6,.29,1.06,.69,1.39,1.23,.33,.53,.49,1.16,.49,1.89s-.16,1.37-.49,1.9c-.33,.53-.79,.94-1.39,1.22-.6,.29-1.31,.43-2.14,.43h-2.83l.98-1.02v3.72h-2.15Zm2.15-3.47l-.98-1.08h2.71c.65,0,1.15-.15,1.48-.45,.33-.3,.5-.72,.5-1.26s-.17-.96-.5-1.25c-.33-.29-.83-.44-1.48-.44h-2.71l.98-1.08v5.56Z"/>
            <path class="cls-60" d="M141.27,362.25c.56,0,1.07,.12,1.51,.36,.44,.24,.79,.6,1.05,1.09,.25,.49,.38,1.12,.38,1.88v4.31h-2.06v-3.98c0-.61-.12-1.05-.38-1.34-.25-.29-.61-.43-1.06-.43-.33,0-.62,.08-.88,.22s-.46,.37-.61,.66c-.15,.29-.22,.67-.22,1.15v3.72h-2.06v-10.39h2.06v4.94l-.46-.63c.26-.5,.62-.89,1.1-1.16,.48-.27,1.02-.41,1.62-.41Z"/>
            <path class="cls-14" d="M148.27,370c-.55,0-1.02-.1-1.41-.3-.4-.2-.7-.47-.92-.82-.22-.34-.32-.73-.32-1.16s.1-.83,.31-1.17,.54-.6,.98-.79,1.04-.28,1.77-.28h1.88v1.26h-1.66c-.48,0-.82,.08-1,.25s-.27,.38-.27,.63c0,.28,.1,.5,.31,.67s.49,.25,.84,.25,.67-.08,.94-.25,.47-.42,.59-.77l.32,1.02c-.15,.47-.42,.83-.82,1.08s-.91,.38-1.53,.38Zm2.17-.11v-1.47l-.13-.32v-2.63c0-.47-.13-.83-.4-1.09-.27-.26-.68-.39-1.24-.39-.38,0-.75,.06-1.12,.19-.37,.13-.68,.3-.95,.51l-.73-1.53c.39-.3,.85-.53,1.4-.68,.55-.15,1.1-.23,1.67-.23,1.08,0,1.92,.27,2.52,.81,.6,.54,.9,1.39,.9,2.53v4.3h-1.93Z"/>
            <path class="cls-63" d="M156.62,370c-.61,0-1.19-.08-1.74-.23-.55-.15-1-.35-1.33-.58l.67-1.55c.33,.21,.72,.38,1.17,.51,.44,.14,.88,.2,1.31,.2,.48,0,.81-.06,1.01-.18s.3-.29,.3-.5c0-.18-.08-.31-.23-.4-.15-.09-.36-.16-.61-.2-.25-.05-.53-.09-.84-.14s-.61-.11-.92-.2-.59-.2-.85-.36c-.26-.15-.47-.37-.62-.64-.15-.27-.23-.62-.23-1.05,0-.48,.13-.9,.4-1.27,.26-.37,.64-.66,1.12-.86,.48-.21,1.07-.31,1.76-.31,.49,0,.99,.06,1.49,.17,.5,.12,.92,.28,1.26,.48l-.7,1.55c-.33-.21-.68-.35-1.02-.43s-.68-.13-1-.13c-.48,0-.82,.07-1.03,.2-.21,.13-.32,.3-.32,.5,0,.19,.08,.33,.24,.43,.16,.1,.37,.17,.62,.22s.54,.09,.85,.14,.61,.11,.91,.2c.3,.08,.58,.2,.84,.36,.26,.15,.47,.37,.62,.64s.23,.62,.23,1.05c0,.46-.13,.87-.4,1.22-.26,.36-.65,.64-1.14,.85-.5,.21-1.1,.31-1.82,.31Z"/>
            <path class="cls-64" d="M164.77,370c-.81,0-1.52-.17-2.13-.5s-1.08-.8-1.41-1.38c-.33-.58-.5-1.25-.5-2s.16-1.41,.48-2,.77-1.05,1.35-1.38,1.23-.5,1.95-.5,1.32,.16,1.88,.48c.56,.32,1,.77,1.33,1.34,.33,.58,.49,1.27,.49,2.09,0,.08,0,.18-.01,.29,0,.11-.02,.21-.03,.3h-5.77v-1.27h4.69l-.81,.38c0-.39-.06-.73-.21-1.02-.15-.29-.36-.52-.62-.68-.26-.16-.57-.25-.92-.25s-.66,.08-.93,.25c-.27,.16-.48,.39-.63,.69-.15,.29-.22,.64-.22,1.04v.34c0,.42,.09,.78,.26,1.09,.18,.31,.42,.54,.73,.71,.31,.16,.68,.25,1.11,.25,.37,0,.7-.06,.98-.18,.29-.12,.55-.3,.79-.55l1.1,1.26c-.33,.39-.74,.69-1.23,.9-.49,.21-1.06,.32-1.71,.32Z"/>
            <path class="cls-47" d="M172.8,369.89v-1.47l3.57-3.57c.28-.27,.49-.51,.63-.72s.23-.41,.27-.59,.07-.35,.07-.51c0-.38-.12-.68-.37-.9-.25-.21-.62-.32-1.11-.32-.4,0-.76,.08-1.08,.25s-.6,.42-.83,.74l-1.55-1.06c.34-.56,.83-1,1.47-1.33,.63-.33,1.37-.49,2.19-.49,.69,0,1.29,.12,1.81,.35,.52,.23,.92,.57,1.21,1,.29,.43,.43,.95,.43,1.55,0,.31-.04,.62-.13,.94s-.24,.65-.46,.99c-.22,.35-.55,.73-.98,1.16l-2.96,2.94-.41-.81h5.23v1.85h-7Z"/>
          </g>
          <g>
            <path class="cls-39" d="M316.69,369.84v-9.8h4c.83,0,1.54,.14,2.14,.43,.6,.28,1.06,.69,1.39,1.22,.33,.53,.49,1.16,.49,1.89s-.16,1.37-.49,1.9c-.33,.53-.79,.94-1.39,1.22-.6,.29-1.31,.43-2.14,.43h-2.83l.98-1.02v3.72h-2.15Zm2.15-3.47l-.98-1.08h2.71c.65,0,1.15-.15,1.48-.45,.33-.3,.5-.72,.5-1.26s-.17-.96-.5-1.25c-.33-.29-.83-.44-1.48-.44h-2.71l.98-1.08v5.56Z"/>
            <path class="cls-61" d="M330.54,362.19c.56,0,1.07,.12,1.51,.36s.79,.6,1.05,1.09c.25,.49,.38,1.12,.38,1.88v4.31h-2.06v-3.98c0-.61-.12-1.05-.38-1.34s-.61-.43-1.06-.43c-.33,0-.62,.07-.88,.22s-.46,.37-.61,.66-.22,.67-.22,1.15v3.72h-2.06v-10.39h2.06v4.94l-.46-.63c.26-.5,.62-.89,1.1-1.16s1.02-.41,1.62-.41Z"/>
            <path class="cls-53" d="M337.54,369.95c-.55,0-1.02-.1-1.41-.3-.4-.2-.7-.47-.92-.82-.22-.35-.32-.73-.32-1.16s.1-.83,.31-1.17,.54-.6,.98-.79,1.04-.28,1.77-.28h1.88v1.26h-1.66c-.48,0-.82,.08-1,.25s-.27,.38-.27,.63c0,.28,.1,.5,.31,.67,.21,.16,.49,.25,.84,.25s.67-.08,.94-.25,.47-.42,.59-.77l.32,1.02c-.15,.47-.42,.83-.82,1.08s-.91,.38-1.53,.38Zm2.17-.11v-1.47l-.13-.32v-2.63c0-.47-.13-.83-.4-1.09-.27-.26-.68-.39-1.24-.39-.38,0-.75,.06-1.12,.19-.37,.13-.68,.3-.95,.51l-.73-1.53c.39-.3,.85-.52,1.4-.68s1.1-.23,1.67-.23c1.08,0,1.92,.27,2.52,.81,.6,.54,.9,1.39,.9,2.53v4.3h-1.93Z"/>
            <path class="cls-38" d="M345.89,369.95c-.61,0-1.19-.08-1.74-.23s-1-.35-1.33-.58l.67-1.55c.33,.21,.72,.38,1.17,.51,.44,.14,.88,.2,1.31,.2,.48,0,.81-.06,1.01-.18,.2-.12,.3-.29,.3-.5,0-.18-.08-.31-.23-.4-.15-.09-.36-.16-.61-.2s-.53-.09-.84-.14c-.31-.05-.61-.11-.92-.2s-.59-.2-.85-.36c-.26-.15-.47-.37-.62-.64s-.23-.62-.23-1.05c0-.48,.13-.9,.4-1.27,.26-.37,.64-.66,1.12-.86s1.07-.31,1.76-.31c.49,0,.99,.06,1.49,.17,.5,.12,.92,.28,1.26,.48l-.7,1.55c-.33-.21-.68-.35-1.02-.43s-.68-.13-1-.13c-.48,0-.82,.07-1.03,.2-.21,.13-.32,.3-.32,.5,0,.19,.08,.33,.24,.43,.16,.1,.37,.17,.62,.22s.54,.09,.85,.14c.31,.05,.61,.11,.91,.2,.3,.08,.58,.2,.84,.36,.26,.15,.47,.37,.62,.64s.23,.62,.23,1.05c0,.46-.13,.87-.4,1.23-.26,.36-.65,.64-1.14,.85-.5,.21-1.1,.31-1.82,.31Z"/>
            <path class="cls-16" d="M354.04,369.95c-.81,0-1.52-.17-2.13-.5s-1.08-.79-1.41-1.38c-.33-.58-.5-1.25-.5-2s.16-1.41,.48-2,.77-1.05,1.35-1.38c.58-.33,1.23-.5,1.95-.5s1.32,.16,1.88,.48c.56,.32,1,.76,1.33,1.34s.49,1.27,.49,2.09c0,.08,0,.18-.01,.29s-.02,.21-.03,.3h-5.77v-1.27h4.69l-.81,.38c0-.39-.06-.73-.21-1.02s-.36-.52-.62-.68c-.26-.16-.57-.25-.92-.25s-.66,.08-.93,.25-.48,.39-.63,.69c-.15,.29-.22,.64-.22,1.04v.34c0,.42,.09,.78,.26,1.09,.18,.31,.42,.54,.73,.71,.31,.16,.68,.24,1.11,.24,.37,0,.7-.06,.98-.18s.55-.3,.79-.55l1.1,1.26c-.33,.39-.74,.69-1.23,.9-.49,.21-1.06,.31-1.71,.31Z"/>
            <path class="cls-45" d="M362.05,367.78v-1.53l4.36-6.22h2.25l-4.25,6.22-1.06-.32h7.28v1.85h-8.58Zm4.98,2.06v-2.06l.07-1.85v-1.83h2.02v5.74h-2.09Z"/>
          </g>
          <g>
            <path class="cls-62" d="M500.13,368.7v-9.8h4c.83,0,1.54,.14,2.14,.43,.6,.28,1.06,.69,1.39,1.22,.33,.53,.49,1.16,.49,1.89s-.16,1.37-.49,1.9c-.33,.53-.79,.94-1.39,1.22-.6,.29-1.31,.43-2.14,.43h-2.83l.98-1.02v3.72h-2.15Zm2.15-3.47l-.98-1.08h2.71c.65,0,1.15-.15,1.48-.45,.33-.3,.5-.72,.5-1.26s-.17-.96-.5-1.25c-.33-.29-.83-.44-1.48-.44h-2.71l.98-1.08v5.56Z"/>
            <path class="cls-41" d="M513.98,361.05c.56,0,1.07,.12,1.51,.36s.79,.6,1.05,1.09c.25,.49,.38,1.12,.38,1.88v4.31h-2.06v-3.98c0-.61-.12-1.05-.38-1.34s-.61-.43-1.06-.43c-.33,0-.62,.07-.88,.22s-.46,.37-.61,.66-.22,.67-.22,1.15v3.72h-2.06v-10.39h2.06v4.94l-.46-.63c.26-.5,.62-.89,1.1-1.16s1.02-.41,1.62-.41Z"/>
            <path class="cls-13" d="M520.98,368.81c-.55,0-1.02-.1-1.41-.3-.4-.2-.7-.47-.92-.82-.22-.35-.32-.73-.32-1.16s.1-.83,.31-1.17,.54-.6,.98-.79,1.04-.28,1.77-.28h1.88v1.26h-1.66c-.48,0-.82,.08-1,.25s-.27,.38-.27,.63c0,.28,.1,.5,.31,.67,.21,.16,.49,.25,.84,.25s.67-.08,.94-.25,.47-.42,.59-.77l.32,1.02c-.15,.47-.42,.83-.82,1.08s-.91,.38-1.53,.38Zm2.17-.11v-1.47l-.13-.32v-2.63c0-.47-.13-.83-.4-1.09-.27-.26-.68-.39-1.24-.39-.38,0-.75,.06-1.12,.19-.37,.13-.68,.3-.95,.51l-.73-1.53c.39-.3,.85-.52,1.4-.68s1.1-.23,1.67-.23c1.08,0,1.92,.27,2.52,.81,.6,.54,.9,1.39,.9,2.53v4.3h-1.93Z"/>
            <path class="cls-48" d="M529.33,368.81c-.61,0-1.19-.08-1.74-.23s-1-.35-1.33-.58l.67-1.55c.33,.21,.72,.38,1.17,.51,.44,.14,.88,.2,1.31,.2,.48,0,.81-.06,1.01-.18,.2-.12,.3-.29,.3-.5,0-.18-.08-.31-.23-.4-.15-.09-.36-.16-.61-.2s-.53-.09-.84-.14c-.31-.05-.61-.11-.92-.2s-.59-.2-.85-.36c-.26-.15-.47-.37-.62-.64s-.23-.62-.23-1.05c0-.48,.13-.9,.4-1.27,.26-.37,.64-.66,1.12-.86s1.07-.31,1.76-.31c.49,0,.99,.06,1.49,.17,.5,.12,.92,.28,1.26,.48l-.7,1.55c-.33-.21-.68-.35-1.02-.43s-.68-.13-1-.13c-.48,0-.82,.07-1.03,.2-.21,.13-.32,.3-.32,.5,0,.19,.08,.33,.24,.43,.16,.1,.37,.17,.62,.22s.54,.09,.85,.14c.31,.05,.61,.11,.91,.2,.3,.08,.58,.2,.84,.36,.26,.15,.47,.37,.62,.64s.23,.62,.23,1.05c0,.46-.13,.87-.4,1.23-.26,.36-.65,.64-1.14,.85-.5,.21-1.1,.31-1.82,.31Z"/>
            <path class="cls-58" d="M537.48,368.81c-.81,0-1.52-.17-2.13-.5s-1.08-.79-1.41-1.38c-.33-.58-.5-1.25-.5-2s.16-1.41,.48-2,.77-1.05,1.35-1.38c.58-.33,1.23-.5,1.95-.5s1.32,.16,1.88,.48c.56,.32,1,.76,1.33,1.34s.49,1.27,.49,2.09c0,.08,0,.18-.01,.29s-.02,.21-.03,.3h-5.77v-1.27h4.69l-.81,.38c0-.39-.06-.73-.21-1.02s-.36-.52-.62-.68c-.26-.16-.57-.25-.92-.25s-.66,.08-.93,.25-.48,.39-.63,.69c-.15,.29-.22,.64-.22,1.04v.34c0,.42,.09,.78,.26,1.09,.18,.31,.42,.54,.73,.71,.31,.16,.68,.24,1.11,.24,.37,0,.7-.06,.98-.18s.55-.3,.79-.55l1.1,1.26c-.33,.39-.74,.69-1.23,.9-.49,.21-1.06,.31-1.71,.31Z"/>
            <path class="cls-10" d="M549.73,368.86c-.85,0-1.58-.18-2.19-.55-.62-.37-1.09-.92-1.43-1.64-.34-.72-.51-1.61-.51-2.65,0-1.14,.2-2.1,.6-2.88s.96-1.38,1.67-1.79c.71-.41,1.53-.62,2.46-.62,.48,0,.95,.06,1.4,.17,.45,.12,.84,.28,1.16,.5l-.79,1.67c-.26-.19-.53-.32-.82-.39-.29-.07-.59-.1-.91-.1-.79,0-1.43,.26-1.9,.78-.48,.52-.71,1.28-.71,2.27,0,.17,0,.35,.01,.56,0,.21,.04,.41,.08,.62l-.59-.59c.17-.36,.38-.67,.65-.92,.26-.25,.58-.43,.94-.56s.77-.19,1.21-.19c.6,0,1.14,.13,1.61,.38s.86,.61,1.14,1.06c.29,.46,.43,.99,.43,1.61,0,.66-.15,1.24-.46,1.73-.31,.49-.73,.87-1.25,1.13-.53,.27-1.12,.4-1.78,.4Zm-.12-1.69c.3,0,.57-.06,.8-.17,.23-.12,.42-.29,.55-.51,.13-.22,.2-.48,.2-.77,0-.45-.14-.8-.43-1.07-.29-.27-.67-.4-1.14-.4-.32,0-.59,.07-.83,.2-.24,.13-.42,.31-.56,.52-.14,.22-.21,.47-.21,.76,0,.27,.07,.52,.2,.73,.13,.22,.32,.39,.56,.52,.24,.13,.53,.19,.87,.19Z"/>
          </g>
        </g>
      </g>
    </g>
  </g>
        </svg>
</div>

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
@endsection