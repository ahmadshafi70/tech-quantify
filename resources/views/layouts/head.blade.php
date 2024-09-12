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

		<!--<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">-->
		<link rel="stylesheet" href="{{asset('assets2/css/main.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.structure.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/workflow.css')}}">
		@yield('canonical')

		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />

		<!--Theme custom css -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
		
		
    <style>
      @media only screen and (max-width: 600px) {
        .xs_nav-landscape {
            display: none !important;
        }
        
    }
    @media only screen and (min-width: 600px) {
        .mobile-logo {
            display:none !important;
        }
       
    }
  
    
        
    

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
