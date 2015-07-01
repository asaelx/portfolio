$(function(){
    var $body = $('body');

    // Languages
    var lang_switch = $('.switch');

    if(lang_switch.length){
        var lang_label      = lang_switch.find('label'),
            lang_checkbox   = lang_switch.find('#lang_switch');
        lang_checkbox.click(function(){
            if(lang_checkbox.is(':checked')){
                lang_label.toggleClass('en sp');
            }else{
                lang_label.toggleClass('sp en');
            }
        });
    }

    //Shots
    var shots = $('.shots');

    if(shots.length){
        shots.unslider({
            autoplay: false,
            keys: true,
            dots: true
        });
    }
});
