@extends('layouts.app')
@section('meta_title')
Affordable Domain Registration Prices in Pakistan | Tech Host
@endsection
@section('met_description')
Find the best domain prices in Pakistan! Compare & register .com, .pk, .org & more. Free DNS, WHOIS privacy & 24/7 support. Start your online journey now!Affordable Domain Names in Pakistan! Register Yours Today! (.com, .pk & More)
@endsection
@section('code')

@endsection
@section('content')
@push('css')
.logo {
    
}
@endpush
@section('content')
@push('css')
    <style type="text/css">
        .select {
                border: none !important; 
            }
    </style>
@endpush
<!-- banner section -->
<section class="xs-banner service-banner-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="xs-banner-content">
                    <div class="xs-banner-group">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1s">Register, Renew, and Manage Your Domains with Ease!</h2>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s">Get started with your online presence today.</p>
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
                        <td>PKR 3950 <del>$29.95</del></td>
                        <td>PKR 3950</td>
                        <td>PKR 3950</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/me.png" alt="domain name me icon"></th>
                        <td>PKR 9,999</td>
                        <td>PKR 9,999</td>
                        <td>PKR 9,999</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/biz.png" alt="domain name biz icon"></th>
                        <td>PKR 6,000</td>
                        <td>PKR 6,000</td>
                        <td>PKR 6,000</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="assets/images/domain/co.png" alt="domain name co icon">
                        </th>
                        <td>PKR 9,000</td>
                        <td>PKR 9,000</td>
                        <td>PKR 9,000</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/net.png" alt="domain name net icon"></th>
                        <td>PKR 4250</td>
                        <td>PKR 4250</td>
                        <td>PKR 4250</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/info.png" alt="domain name info icon"></th>
                        <td>PKR 7,875<del>PKR 7,875</del></td>
                        <td>PKR 7,875</td>
                        <td>PKR 7,875</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="assets/images/domain/store.png" alt="domain name store icon">
                        </th>
                        <td>PKR 4,234</td>
                        <td>PKR 4,234</td>
                        <td>PKR 4,234</td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="assets/images/domain/mobi.png" alt="domain name mobi icon"></th>
                        <td>PKR 2200</td>
                        <td>PKR 2200</td>
                        <td>PKR 2200</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><!-- .container END -->
</section><!-- END domain section -->



<!-- Content details section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading wow fadeIn">
                    
                    <h3 class="heading-title"><span>Domain Registration</span></h3>
                   
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row" style="margin-top:-30px">
                <p>Are you looking to establish your online presence in Pakistan? Look no further than Techhost for all your domain registration needs. With our competitive prices and seamless registration process, we make it easier than ever to secure the perfect domain for your business or personal website. At Techhost, we understand the importance of a strong online identity. Your domain is the digital address of your website, and choosing the right one is crucial for your online success. That's why we offer a wide range of domain registration options at affordable prices, ensuring that you can find the perfect domain for your needs without breaking the bank.</p>
                <p>Whether you're a small startup, a growing business, or an individual looking to establish your online presence, we have the perfect domain for you. From .com and .pk to country-specific domains like .pk, .com.pk, and .org.pk, we offer a variety of options to suit your unique requirements. Our pricing is competitive, ensuring that you get the best value for your money without compromising on quality or service. With Techhost, you can register your domain with confidence, knowing that you're getting a great deal every time.</p>
                <p>Registering your domain with Techhost is quick, easy, and hassle-free. Our intuitive registration process guides you through every step, from searching for available domains to completing the registration process in just a few clicks. Simply enter your desired domain name into our search bar to check availability, select the domain extension that best suits your needs, and follow the prompts to complete the registration process. It's that easy! At Techhost, we're committed to providing exceptional customer service. If you have any questions or need assistance with your domain registration, our friendly and knowledgeable support team is available 24/7 to help. Whether you need help choosing the perfect domain name, navigating the registration process, or managing your domain settings, we're here to assist you every step of the way.</p>
                <p>Your satisfaction is our top priority, and we'll go above and beyond to ensure that your experience with Techhost is nothing short of excellent. Ready to register your domain and kickstart your online journey? Look no further than Techhost. With affordable prices, transparent pricing, and easy registration process, we make it easier than ever to secure the perfect domain for your website. Don't wait any longer - get started today and take the first step towards building your online presence with Techhost.
                </p>
                            
        </div>
    </div><!-- .container END -->
</section><!-- Content details section -->

<!-- faq section -->
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
                                What is domain registration?<i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>SMM is essential because it allows you to reach a vast and engaged audience, build brand awareness, drive website traffic, generate leads, and connect with your customers on a personal level.</p>
                            </div>
                        </div>
                    </div><!-- .card .isActive END -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               How do I check if a domain name is available?<i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                You can check the availability of a domain name by using the search tool provided by domain registrars. Simply enter your desired domain name, and the tool will indicate if it's available or already taken.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I register any domain name I want? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                While you have a lot of flexibility in choosing a domain name, there are some restrictions. Domain names must be unique and not already registered by someone else. They should also comply with the rules and guidelines set by domain registrars and the domain's governing authority (e.g., ICANN).
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is a domain registrar?<i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                A domain registrar is a company or organization accredited by the domain's governing authority (e.g., ICANN) to sell domain registrations to the public. Registrars provide the necessary tools and services to register, manage, and maintain domain names.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How long can I register a domain for? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                Typically, you can register a domain for a minimum of one year and extend the registration for multiple years. Some registrars may offer discounts for longer registration periods, such as two, five, or ten years.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="accordion-two" class="xs-accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can SMM help me generate leads and sales? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                Yes, SMM can be a powerful lead generation and sales tool. By creating targeted ads and engaging with your audience, you can drive traffic to your website and convert visitors into customers.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSix">
                            <a data-toggle="collapse" class="collapsed" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                What is domain privacy protection (WHOIS privacy)? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion-two">
                            <div class="card-body">
                                <p>To transfer a domain to a different registrar, you'll need to follow a specific process outlined by both the current registrar (where the domain is currently registered) and the new registrar (where you want to transfer it). This process usually involves unlocking the domain, obtaining an authorization code (EPP code), and confirming the transfer.</p>
                            </div>
                        </div>
                    </div><!-- .card END -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSeven">
                            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                 What happens if I forget to renew my domain? <i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion-two">
                            <div class="card-body">
                                If you forget to renew your domain before its expiration date, it may enter a grace period during which you can still renew it. After the grace period, the domain may go into a redemption period, during which it can be restored but at a higher cost. If you fail to renew during the redemption period, the domain may become available for anyone to register.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingEight">
                            <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                 Can I register a domain with special characters or spaces?<i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion-two">
                            <div class="card-body">
                                Domain names can only contain letters, numbers, and hyphens. Spaces and most special characters are not allowed in domain names.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingNine">
                            <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                 Can I sell or transfer my registered domain to someone else?<i class="icon icon-chevron-down"></i>
                            </a>
                        </div>
                        <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion-two">
                            <div class="card-body">
                               Yes, you can sell or transfer your registered domain to another individual or organization. The process involves changing the domain's ownership and updating the domain's contact information with the new owner's details.
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END faq section -->






@endsection