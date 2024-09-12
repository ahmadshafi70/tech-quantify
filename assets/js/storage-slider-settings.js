(function($) {
    "use strict";
    $(document).ready(function() {

            
            if ($(".storage-slider").length > 0) {

                let $this = $(".storage-slider");
        
                let sliderplans = [];
                
                // name
                sliderplans[0] = [products2[0].name, products2[1].name, products2[2].name, products2[3].name, products2[4].name];
        
                // price
                sliderplans[1] = [products2[0].price, products2[1].price, products2[2].price, products2[3].price, products2[4].price];
        
                // description
                sliderplans[2] = [products2[0].desc, products2[1].desc, products2[2].desc, products2[3].desc, products2[4].desc];
        
                // cpu
                sliderplans[3] = [products2[0].cpu, products2[1].cpu, products2[2].cpu, products2[3].cpu, products2[4].cpu];
        
                // brandwidth 1
                sliderplans[4] = [products2[0].brandwidth, products2[1].brandwidth, products2[2].brandwidth, products2[3].brandwidth, products2[4].brandwidth];
        
                // brandwidth 2
                sliderplans[5] = [products2[0].OS, products2[1].OS, products2[2].OS, products2[3].OS, products2[4].OS];
        
                // ram
                sliderplans[6] = [products2[0].ram, products2[1].ram, products2[2].ram, products2[3].ram, products2[4].ram];
        
                // setup
                sliderplans[7] = [products2[0].setup, products2[1].setup, products2[2].setup, products2[3].setup, products2[4].setup];
        
                // setup 2
                sliderplans[8] = [products2[0].setup2, products2[1].setup2, products2[2].setup2, products2[3].setup2, products2[4].setup2];
        
                // diskspace
                sliderplans[9] = [products2[0].diskspace, products2[1].diskspace, products2[2].diskspace, products2[3].diskspace, products2[4].diskspace];
        
                // ip one
                sliderplans[10] = [products2[0].ipOne, products2[1].ipOne, products2[2].ipOne, products2[3].ipOne, products2[4].ipOne];
        
                // ip two
                sliderplans[11] = [products2[0].ipTwo, products2[1].ipTwo, products2[2].ipTwo, products2[3].ipTwo, products2[4].ipTwo];

                let urilink = [products2[0].urlLink, products2[1].urlLink, products2[2].urlLink, products2[3].urlLink, products2[4].urlLink];
        
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
                        $('.storage-pricing-list .cpu').html(sliderplans[3][ui.value-1]);
                        // brandwidth
                        $('.storage-pricing-list .brandwidth').html(sliderplans[4][ui.value-1]);
                        // brandwidth2
                        $('.storage-pricing-list .os').html(sliderplans[5][ui.value-1]);
                        // ram
                        $('.storage-pricing-list .ram').html(sliderplans[6][ui.value-1]);
                        // setup 1
                        $('.storage-pricing-list .snapshot').html(sliderplans[7][ui.value-1]);
                        // setup 2
                        $('.storage-pricing-list .setup2').html(sliderplans[8][ui.value-1]);
                        // diskspace
                        $('.storage-pricing-list .diskspace').html(sliderplans[9][ui.value-1]);
                        // ip one
                        $('.storage-pricing-list .ip_one').html(sliderplans[10][ui.value-1]);
                        // ip two
                        $('.storage-pricing-list .ip_two').html(sliderplans[11][ui.value-1]);
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
                        $('.storage-pricing-list .cpu').html(sliderplans[3][ui.value-1]);
                        // brandwidth
                        $('.storage-pricing-list .snapshot').html(sliderplans[4][ui.value-1]);
                        // brandwidth2
                        $('.storage-pricing-list .windows').html(sliderplans[5][ui.value-1]);
                        // ram
                        $('.storage-pricing-list .ram').html(sliderplans[6][ui.value-1]);
                        // setup 1
                        $('.storage-pricing-list .setup').html(sliderplans[7][ui.value-1]);
                        // setup 2
                        $('.storage-pricing-list .setup2').html(sliderplans[8][ui.value-1]);
                        // diskspace
                        $('.storage-pricing-list .diskspace').html(sliderplans[9][ui.value-1]);
                        // ip one
                        $('.storage-pricing-list .ip_one').html(sliderplans[10][ui.value-1]);
                        // ip two
                        $('.storage-pricing-list .ip_two').html(sliderplans[11][ui.value-1]);
                        // buttons
                        $('.slider-btns').attr('href', urilink[ui.value-1]);
                        // console.log($('.slider-btns').attr())
                    }
                });
            }
        
            $('.slider-tigger').click(function() {
                var value= parseInt(this.id.slice(5)) + 1;
                $('.storage-slider').slider('value', value);
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