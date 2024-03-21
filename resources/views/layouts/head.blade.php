<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>@yield('meta_title')</title>
		<meta name="description" content="@yield('meta_description')">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Karla:400,700,700i%7CRubik:300,400,500,700" rel="stylesheet">

		<link rel="icon" type="image/png" href="assets/images/fav icon-01.png">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
            <!--Theme custom css -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
		<!--<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">-->
		<link rel="stylesheet" href="{{asset('assets2/css/main.css')}}" />
		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}"  />
		<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.theme.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" >
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" >
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" >
		<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.structure.min.css')}}">
		
		
    <style>
        
    </style>
		

		
		<meta name="google-site-verification" content="HzdGP7jPWlJfMeakQMiSCtXV60_nK5UBYM65J_l4Qfo" />
		 <!--Start of Tawk.to Script-->
                <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/65e6362e9131ed19d974ecfa/1ho5k7amh';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
                </script>
        <!--End of Tawk.to Script-->
		@yield('code')
	</head>
	<style type="text/css">
		p {
			font-size: 1.1rem;
			color: #454249;
		}
		.tick {
				margin-right: 4px;
				color: #15095e;
				font-size: 12px;
			}
			.package-features{
				color: Black;
				padding-top: 12px;
			}
			.plan-price{
				padding-top: 25px;
				font-size: 50px !important;
			}
			.xs-section-padding {
				padding: 10px  0px !important;  
			}
			#most-popular-plan{
				margin-top: 20px;
				background-color: red;
			}
			.price-box-btn{
				padding: 15px 75px 15px 75px;
			}
			.media {
			    display: -webkit-box;
			    display: -ms-flexbox;
			    display: flex;
			    -webkit-box-align: start;
			    -ms-flex-align: start;
			    align-items: flex-start;
			}
			.list-logo {
				width: 25px;
				margin-top: 10px;
			}
			.white-tike {
			    color:white;
			}
			.white-tike {
			    margin-right: 6px !important;
			    color: white !important;
			    font-size: 11px;
			}
			.quote-bottom {
				margin-bottom: 30px;
			}
	</style>
@stack('css')
