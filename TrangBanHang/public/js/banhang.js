$('.bxslider').bxSlider({
    buildPager: function(slideIndex){
        switch(slideIndex){
            case 0:
                return '<img src="../jquery/images/iphone_7_gold-Copy.jpg">';
            case 1:
                return '<img src="../jquery/images/iphone_7_grey%20-%20Copy.jpeg">';
            case 2:
                return '<img src="../jquery/images/iphone_7_white%20-%20Copy.png">';
        }
    }
});