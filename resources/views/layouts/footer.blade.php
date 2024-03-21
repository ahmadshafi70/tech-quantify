<style>
    .whatsapp-float {
        z-index:1000;
  position: fixed;
  width: 60px;
  height: 60px;
  bottom: 10px;
  left: 10px;
  /*background-color: #25d366;*/
  color: #FFF;
  border-radius: 50px;
  text-align: center;
  font-size: 24px;
  line-height: 60px;
  transition: all 0.3s ease;
}

.whatsapp-float:hover {
  transform: translateY(-5px);
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
</style>
<footer class="xs-footer-section">
			<div class="footer-group" style="background-image: url(assets/images/footer-bg.png);">
				<div class="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget wow fadeInUp">
									<h3 class="widget-title">Hosting & Servers</h3>
									<ul class="xs-list">
										<li><a href="{{url('shared-hosting')}}">Shared Hosting</a></li>
										<li><a href="{{url('reseller-hosting')}}">Reseller Hosting</a></li>
										<li><a href="{{url('reseller-hosting')}}">Wordpress Hosting</a></li>
										<li><a href="{{url('business-hosting')}}">Business Hosting</a></li>
										<li><a href="{{url('vps-hosting')}}">VPS Servers</a></li>
										<li><a href="{{url('dedicated-hosting')}}">Dedicated Servers</a></li>
										<li><a href="{{ url('register-domain') }}">Register A  Domain</a></li>
									</ul><!-- .xs-list END -->
								</div><!-- .footer-widget END -->
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget wow fadeInUp" data-wow-duration="1s">
									<h3 class="widget-title">Services</h3>
									<ul class="xs-list">
										<li><a href="{{route('website-development')}}">Website Development</a></li>
										<li><a href="{{route('seo')}}">Search Engine Optimization</a></li>
										<li><a href="{{route('smm')}}">Social Media Marketing</a></li>
										<li><a href="#">Google Ads</a></li>
										
									</ul><!-- .xs-list END -->
								</div><!-- .footer-widget END -->
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget wow fadeInUp" data-wow-duration="1.3s">
									<h3 class="widget-title">Tech Host</h3>
									<ul class="xs-list">
										<li><a href="{{url('https://billing.techhost.pk/index.php?rp=/login')}}">Login</a></li>
										<li><a href="{{url('https://billing.techhost.pk/register.php')}}">Register</a></li>
										<li><a href="{{url('about-us')}}">About Us</a></li>
										<li><a href="{{url('contact-us')}}">Contact Us</a></li>
										<li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
										<li><a href="{{url('terms-condition')}}">Terms & Condition</a></li>
										<li><a href="{{url('refund-policy')}}">Refund Policy</a></li>
									</ul><!-- .xs-list END -->
								</div><!-- .footer-widget END -->
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget wow fadeInUp" data-wow-duration="1.5s">
									<h3 class="widget-title">Contact Info</h3>
									<ul class="contact-info-widget">
										<li class="media">
											<img src="assets/images/address-pin.png" class="d-flex" alt="contact icon">
											<span class="media-body">Lahore</span>
										</li><!-- .media END -->
										<li class="media">
											<img src="assets/images/phone-pin.png" class="d-flex" alt="contact icon">
											<span class="media-body"><a href="tel:+923244959666"></a>+92 324 4959 666</span>
										</li><!-- .media END -->
										<li class="media">
											<img src="assets/images/email-icon.png" class="d-flex" alt="contact icon">
											<span class="media-body"><a href="mailto:info@techhost.pk"></a>info@techhost.pk</span>
										</li><!-- .media END -->
									<div class="social-list-wraper wow fadeInUp" data-wow-duration="1.3s">
											<ul class="social-list">
												<li><a href="#" ><img src="{{asset('assets/images/social/icons8-facebook.svg')}}"></a></li>
												<li><a href="#" ><img src="{{asset('assets/images/social/icons8-instagram.svg')}}"></a></li>
												<li><a href="#" ><img src="{{asset('assets/images/social/icons8-whatsapp.svg')}}"></a></li>
											</ul>
									</div><!-- .social-list-wraper END -->
									</ul><!-- .contact-info-widget -->
								</div><!-- .footer-widget END -->
							</div>
						</div><!-- .row END -->
					</div><!-- .container END -->
				</div><!-- .footer-main END -->
				
			</div><!-- .footer-group END -->
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							
						</div>
						<div class="col-md-4">
							<p class="footer-text">&copy; 2024 Tech Host All Right Reserved</p>
						</div>
						<div class="col-md-4">
							
						</div>
					</div><!-- .row END -->
				</div><!-- .container END -->
			</div><!-- .footer-copyright END -->
</footer>
<a href="https://api.whatsapp.com/send/?phone=+923244959666&text=https://techhost.pk" class="whatsapp-float" target="_blank">
 <img src="{{asset('assets/images/home/whatsapp.svg')}}" class="my-float">
</a>
