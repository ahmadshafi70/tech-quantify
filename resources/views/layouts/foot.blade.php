        <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/Popper.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/tweetie.js')}}"></script>
        <script src="{{asset('assets/js/jquery.parallax-scroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.parallax.js')}}"></script>
        <script src="{{asset('assets/js/hostslide.js')}}"></script>
        <script src="{{asset('assets/js/vps-slider.js')}}"></script>
        <script src="{{asset('assets/js/vps-slider-settings.js')}}"></script>
        <script src="{{asset('assets/js/rdp-slider.js')}}"></script>
        <script src="{{asset('assets/js/rdp-slider-settings.js')}}"></script>
        <script src="{{asset('assets/js/storage-slider.js')}}"></script>
        <script src="{{asset('assets/js/storage-slider-settings.js')}}"></script>
        <script src="{{url('https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <style type="text/css">
            #domains-plane .owl-item{
                 margin-left: 5px;
                 margin-right: 5px;
                float: left;
                }
            #domains-plane .owl-next  {
              
              color: #097ffc !important;
              font-size: 30px;
              position: absolute;
              font-weight: 800;
              font-size: 34px;
              top: 35%;
              z-index: 3;
              right: 0;
            }
            #domains-plane .owl-prev  {
              margin-left: 20px;
              position: absolute;
              color: #097ffc !important;
              font-weight: 800;
              font-size: 34px;
              top: 35%;
              z-index: 3;
              left: 0;
            }
        </style>
        <script type="text/javascript">
            $('#server-plane').owlCarousel({
            center: true,
            items:2,
            loop:true,
            margin:10,
             navigation: true,
                navigationText : ['<i class="fa fa-angle-left" aria-hidden="true" ></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsive:{
                600:{
                    items:4
                }
            }
        });
        </script>
        <script type="text/javascript">
            $('#domains-plane').owlCarousel({
                center: true,
                items:2,
                loop:true,
                margin:10,
                navigation: true,
                    navigationText : ['<i class="fa fa-angle-left" aria-hidden="true" ></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsive:{
                    600:{
                        items:4
                    }
                }
            });
        </script>
@stack('js')        