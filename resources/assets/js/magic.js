$(function(){
    var $body = $('body');

    /* Language switch */
    var lang_switch = $('.switch');
    if(lang_switch.length){
        var lang_label      = lang_switch.find('label'),
            lang_checkbox   = lang_switch.find('#lang_switch'),
            language        = window.navigator.userLanguage || window.navigator.language;

        function change_lang(lang){
            window.location.href="/changeLang/" + lang;
        }

        lang_checkbox.click(function(){
            if(lang_checkbox.is(':checked')){
                lang_label.toggleClass('en sp');
                // change_lang('sp');
            }else{
                lang_label.toggleClass('sp en');
                // change_lang('en');
            }
        });
    }

    setTimeout(function(){
        $('.shots').fadeIn(100);
    }, 1300);
});
