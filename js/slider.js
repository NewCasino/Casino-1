$(document).ready(function(){
    // Show Slider if Cookie not Set
    if (!$.cookie('sliderBlock'))
        {
            setTimeout(
                '$("#slider").animate({"top": "+=400px"}, "slow" )',
                3000
            );
        }
    // Close Slider and Set Cookie
    $(".sliderClose").click(function(){
       $("#slider").animate({"top": "-=400px"}, "slow");
       $.cookie('sliderBlock', '1');
    });
});
