@extends('layouts.app')
@section('meta_title')

@endsection
@section('met_description')

@endsection
@section('code')

@endsection
@section('content')
@push('css')
.logo {
    
}
@endpush
<!-- banner section -->
<section class="xs-banner service-banner-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="xs-banner-content">
                    <div class="xs-banner-group">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1s">DOMAIN NAMES</h2>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s">Share processes and data securely on a need to know basis  without the need for reconciliation it combines a permissione.</p>
                    </div>
                </div><!-- .xs-banner-content END -->
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="inner-welcome-image-group wow fadeIn">
                    <img src="assets/images/innerWelcome/domain-bg.png" data-parallax='{"y": 150}' alt="cloud hosting image">
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- End banner section -->

<!-- domain search section -->
<div class="xs-domain-search">
    <div class="container">
        <div class="domain-search-form-group wow fadeIn">
            <form action="https://billing.techhost.pk/cart.php?a=add&domain=register" method="POST" class="domain-search-form">
                <input type="search" placeholder="Enter Address" id="domain-search">
                <div class="select-group">
                    <select name="domainList">
                        <option value="com" selected>.com</option>
                        <option value="net">.net</option>
                        <option value="io">.io</option>
                        <option value="info">.info</option>
                        <option value="store">.store</option>
                    </select>
                     <input type="text" name="query" size="20" />
                    <input type="submit" value="Go" />
                                    </div>
            </form>
            <ul class="xs-domain-info">
                <li>
                    <img src="assets/images/domain/com.png" alt="Domain name">
                    <strong>$2.95</strong>
                </li>
                <li>
                    <img src="assets/images/domain/co.png" alt="Domain name">
                    <strong>$4.5</strong>
                </li>
                <li>
                    <img src="assets/images/domain/net.png" alt="Domain name">
                    <strong>$5.8</strong>
                </li>
                <li>
                    <img src="assets/images/domain/info.png" alt="Domain name">
                    <strong>$7.9</strong>
                </li>
                <li>
                    <img src="assets/images/domain/store.png" alt="Domain name">
                    <strong>$1.00</strong>
                </li>
            </ul>
        </div>
    </div><!-- .container END -->
</div><!-- End domain search section -->

<!-- why choose section -->
<section class="why-choose-section xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Best Hosting</h2>
                    <h3 class="heading-title">WHY <span>CHOOSE US</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp">
                    <div class="choose-us-img">
                        <img src="assets/images/chooseUs/choose-us-7.png" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">99.9% Uptime Guarantee</h4>
                    <p>Share processes and data secure <br> lona need to know basis</p>
                </div><!-- .why-choose-us-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="choose-us-img">
                        <img src="assets/images/chooseUs/choose-us-2.png" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">Safe and Secured</h4>
                    <p>Our team assured your web site is always safe and secure</p>
                </div><!-- .why-choose-us-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="2s">
                    <div class="choose-us-img">
                        <img src="assets/images/chooseUs/choose-us-3.png" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-title">Our Dedicated Support</h4>
                    <p>We finally found a host that truly understood the unique</p>
                </div><!-- .why-choose-us-block END -->
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- END why choose section -->

<!-- domain section -->
<section class="domain-price-section xs-section-padding xs-bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">Pricin Plans</h2>
                    <h3 class="heading-title">DOMAIN <span>PRICES</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="table-responsive-md wow fadeIn">
            <table class="table xs-table">
                <thead class="domain-pricing-header">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Register</th>
                        <th scope="col">Transfer</th>
                        <th scope="col">Renew</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <img src="assets/images/domain/com.png" alt="domain name com icon">
                        </th>
                        <td>$19.95 <del>$29.95</del></td>
                        <td>$19.95</td>
                        <td>$19.95</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/me.png" alt="domain name me icon"></th>
                        <td>$16.95</td>
                        <td>$16.95</td>
                        <td>$16.95</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/biz.png" alt="domain name biz icon"></th>
                        <td>$09.95</td>
                        <td>$09.95</td>
                        <td>$09.95</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="assets/images/domain/co.png" alt="domain name co icon">
                        </th>
                        <td>$15.95</td>
                        <td>$15.95</td>
                        <td>$15.95</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/net.png" alt="domain name net icon"></th>
                        <td>$19.95</td>
                        <td>$19.95</td>
                        <td>$19.95</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/info.png" alt="domain name info icon"></th>
                        <td>$14.95 <del>$29.95</del></td>
                        <td>$14.95</td>
                        <td>$14.95</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="assets/images/domain/store.png" alt="domain name store icon">
                        </th>
                        <td>$16.95</td>
                        <td>$16.95</td>
                        <td>$16.95</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/mobi.png" alt="domain name mobi icon"></th>
                        <td>$18.95</td>
                        <td>$18.95</td>
                        <td>$18.95</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><!-- .container END -->
</section><!-- END domain section -->

<!-- feature list section -->
<div class="xs-feature-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="xs-feature-group wow fadeInLeft">
                    <div class="media">
                        <div class="feature-img d-flex">
                            <img src="assets/images/feature-icon-1.png" alt="hosting feature img">
                        </div>
                        <div class="media-body feature-content">
                            <h4 class="xs-title">Add Web Hosting from us</h4>
                            <p>Choose from a range web hosting packages We designed it to fit budget.</p>
                            <div class="xs-btn-wraper">
                                <a href="#" class="btn btn-secondary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <span class="icon icon-hosting watermark-icon"></span>
                </div><!-- .xs-feature-group END -->
            </div>       
            <div class="col-lg-6">
                <div class="xs-feature-group wow fadeInRight">
                    <div class="media">
                        <div class="feature-img d-flex">
                            <img src="assets/images/feature-icon-2.png" alt="hosting feature img">
                        </div>
                        <div class="media-body feature-content">
                            <h4 class="xs-title">Transfer your domain to us</h4>
                            <p>Transfer now to extend your domain by 1 year! Its so easy.</p>
                            <div class="xs-btn-wraper">
                                <a href="#" class="btn btn-secondary">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <span class="icon icon-domian watermark-icon"></span>
                </div><!-- .xs-feature-group END -->
            </div>       
        </div><!-- .row END -->
    </div><!-- .container END -->
</div><!-- END feature list section -->

<!-- include feature section -->
<section class="xs-section-padding included-feature-list bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading wow fadeIn">
                    <h2 class="heading-sub-title">We Offer</h2>
                    <h3 class="heading-title">FEATURES <span>INCLUDED</span></h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-6">
                <div class="include-feature-list">
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-1.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">No Multi Tenancy</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-2.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">LiteSpeed Web Server</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-3.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">cPanel Hosting Control </h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                </div><!-- .include-feature-list END -->
            </div>    
            <div class="col-lg-6">
                <div class="include-feature-list">
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-4.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">PHP Selector</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-5.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">LiteSpeed Web Server</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                    <div class="media hosting-info-list">
                        <div class="d-flex info-icon">
                            <img src="assets/images/included-feature/included-feature-6.png" alt="included feature icon">
                        </div>
                        <div class="media-body">
                            <h4 class="xs-title">Patchman Kiler</h4>
                            <p>Share processes and data secure lon a need to know basis  with out the need for reconciliation it combines.</p>
                        </div>
                    </div><!-- .hosting-info-list END -->
                </div><!-- .include-feature-list END -->
            </div>    
        </div>
    </div><!-- .container END -->
</section><!-- END include feature section -->

<!-- testimonial section -->
<section class="xs-testimonial-section testimonial-v3 wow fadeIn">
    <div class="container">
        <div class="xs-testimonial-slider owl-carousel">
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/avatar/avatar-1.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Richard I Jones</h4>
                            <p class="commentor-info">WWW Realty</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/avatar/avatar-2.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Cecilia H King</h4>
                            <p class="commentor-info">The White Rabbit</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xs-testimonial-item">
                <div class="testimonial-content">
                    <p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                    <div class="commentor-bio media">
                        <div class="d-flex round-avatar">
                            <img src="assets/images/avatar/avatar-3.png" alt="avatar image">
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="commentor-title">Joe D Walczak</h4>
                            <p class="commentor-info">Hechinger</p>
                            <i class="icon icon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- END testimonial section -->

<!-- client section -->
<div class="xs-client-section xs-section-padding-bottom">
    <div class="container">
        <div class="xs-client-slider owl-carousel">
            <div class="single-client">
                <img src="assets/images/client/client-1.png" alt="hosting client image">
            </div><!-- .single-client END -->
            <div class="single-client">
                <img src="assets/images/client/client-2.png" alt="hosting client image">
            </div><!-- .single-client END -->
            <div class="single-client">
                <img src="assets/images/client/client-3.png" alt="hosting client image">
            </div><!-- .single-client END -->
            <div class="single-client">
                <img src="assets/images/client/client-4.png" alt="hosting client image">
            </div><!-- .single-client END -->
            <div class="single-client">
                <img src="assets/images/client/client-5.png" alt="hosting client image">
            </div><!-- .single-client END -->
        </div>
    </div><!-- .container END -->
</div><!-- END client section -->

<!-- language switcher strart -->
<!-- xs modal -->
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
</div><!-- End xs modal --><!-- end language switcher strart -->

<!-- language switcher strart -->
<!-- xs modal -->
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
</div><!-- End xs modal --><!-- end language switcher strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group cart-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <h3 class="widget-title">Shopping cart</h3>
                <h4 class="xs-title">No products in the cart.</h4>
                <p class="empty-cart-icon">
                    <i class="icon icon-shopping-cart"></i>
                </p>
                <p class="xs-btn-wraper">
                    <a class="btn btn-primary" href="#">Return To Shop</a>
                </p>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar cart item -->    <!-- END offset cart strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
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
                                <img src="assets/images/location.png" alt="">
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
</div>    <!-- END sidebar widget item -->    <!-- END offset cart strart -->

