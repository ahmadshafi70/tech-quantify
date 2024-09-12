(function($) {
    "use strict";
    $(document).ready(function() {

            
            if ($(".rdp-slider").length > 0) {

                let $this = $(".rdp-slider");
        
                let sliderplans = [];
                
                // name
                sliderplans[0] = [products1[0].name, products1[1].name, products1[2].name, products1[3].name, products1[4].name];
        
                // price
                sliderplans[1] = [products1[0].price, products1[1].price, products1[2].price, products1[3].price, products1[4].price];
        
                // description
                sliderplans[2] = [products1[0].desc, products1[1].desc, products1[2].desc, products1[3].desc, products1[4].desc];
        
                // cpu
                sliderplans[3] = [products1[0].cpu, products1[1].cpu, products1[2].cpu, products1[3].cpu, products1[4].cpu];
        
                // brandwidth 1
                sliderplans[4] = [products1[0].brandwidth, products1[1].brandwidth, products1[2].brandwidth, products1[3].brandwidth, products1[4].brandwidth];
        
                // brandwidth 2
                sliderplans[5] = [products1[0].windows, products1[1].windows, products1[2].windows, products1[3].windows, products1[4].windows];
        
                // ram
                sliderplans[6] = [products1[0].ram, products1[1].ram, products1[2].ram, products1[3].ram, products1[4].ram];
        
                // setup
                sliderplans[7] = [products1[0].setup, products1[1].setup, products1[2].setup, products1[3].setup, products1[4].setup];
        
                // setup 2
                sliderplans[8] = [products1[0].setup2, products1[1].setup2, products1[2].setup2, products1[3].setup2, products1[4].setup2];
        
                // diskspace
                sliderplans[9] = [products1[0].diskspace, products1[1].diskspace, products1[2].diskspace, products1[3].diskspace, products1[4].diskspace];
        
                // ip one
                sliderplans[10] = [products1[0].ipOne, products1[1].ipOne, products1[2].ipOne, products1[3].ipOne, products1[4].ipOne];
        
                // ip two
                sliderplans[11] = [products1[0].ipTwo, products1[1].ipTwo, products1[2].ipTwo, products1[3].ipTwo, products1[4].ipTwo];

                let urilink = [products1[0].urlLink, products1[1].urlLink, products1[2].urlLink, products1[3].urlLink, products1[4].urlLink];
        
                let currentplan = 1;
                
                $this.xsslide('single', sliderplans, currentplan, 'xs', 'horizontal');
        
                $this.slider({
                    animate: true,
                    slide: function( event, ui ) {
                        // title
                        $('.slider-container .title').html(sliderplans[0][ui.value-1]);
                        // price
                        $('.slider-container .price').html(sliderplans[1][ui.value-1]);
                        // description
                        $('.slider-container .desc').html(sliderplans[2][ui.value-1]);
                        // cpu
                        $('.rdp-pricing-list .cpu').html(sliderplans[3][ui.value-1]);
                        // brandwidth
                        $('.rdp-pricing-list .brandwidth').html(sliderplans[4][ui.value-1]);
                        // brandwidth2
                        $('.rdp-pricing-list .windows').html(sliderplans[5][ui.value-1]);
                        // ram
                        $('.rdp-pricing-list .ram').html(sliderplans[6][ui.value-1]);
                        // setup 1
                        $('.rdp-pricing-list .snapshot').html(sliderplans[7][ui.value-1]);
                        // setup 2
                        $('.rdp-pricing-list .setup2').html(sliderplans[8][ui.value-1]);
                        // diskspace
                        $('.rdp-pricing-list .diskspace').html(sliderplans[9][ui.value-1]);
                        // ip one
                        $('.rdp-pricing-list .ip_one').html(sliderplans[10][ui.value-1]);
                        // ip two
                        $('.rdp-pricing-list .ip_two').html(sliderplans[11][ui.value-1]);
                        // buttons
                        $('.slider-btns').attr('href', urilink[ui.value-1]);
                        // console.log($('.slider-btns').attr())
                    },
                    change: function( event, ui ) {
                        // title
                        $('.slider-container .title').html(sliderplans[0][ui.value-1]);
                        // price
                        $('.slider-container .price').html(sliderplans[1][ui.value-1]);
                        // description
                        $('.slider-container .desc').html(sliderplans[2][ui.value-1]);
                        // cpu
                        $('.rdp-pricing-list .cpu').html(sliderplans[3][ui.value-1]);
                        // brandwidth
                        $('.rdp-pricing-list .snapshot').html(sliderplans[4][ui.value-1]);
                        // brandwidth2
                        $('.rdp-pricing-list .windows').html(sliderplans[5][ui.value-1]);
                        // ram
                        $('.rdp-pricing-list .ram').html(sliderplans[6][ui.value-1]);
                        // setup 1
                        $('.rdp-pricing-list .setup').html(sliderplans[7][ui.value-1]);
                        // setup 2
                        $('.rdp-pricing-list .setup2').html(sliderplans[8][ui.value-1]);
                        // diskspace
                        $('.rdp-pricing-list .diskspace').html(sliderplans[9][ui.value-1]);
                        // ip one
                        $('.rdp-pricing-list .ip_one').html(sliderplans[10][ui.value-1]);
                        // ip two
                        $('.rdp-pricing-list .ip_two').html(sliderplans[11][ui.value-1]);
                        // buttons
                        $('.slider-btns').attr('href', urilink[ui.value-1]);
                        // console.log($('.slider-btns').attr())
                    }
                });
            }
        
            $('.slider-tigger').click(function() {
                var value= parseInt(this.id.slice(5)) + 1;
                $('.rdp-slider').slider('value', value);
                if (!$(this).hasClass('current')) {
                    $(this).addClass('current');
                    $(this).nextAll().removeClass('current');
                    $(this).prevAll().removeClass('current');
                } else {
                    $(this).removeClass('current');
                }
            });

    }); // end ready function
    
})(jQuery);