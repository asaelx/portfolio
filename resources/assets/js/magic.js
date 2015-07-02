$(function(){
    var $body = $('body');

    // Languages
    var lang_switch = $('.switch');

    if(lang_switch.length){
        var lang_label      = lang_switch.find('label'),
            lang_checkbox   = lang_switch.find('#lang_switch'),
            language        = window.navigator.userLanguage || window.navigator.language;

        function change_lang(){

        }

        lang_checkbox.click(function(){
            if(lang_checkbox.is(':checked')){
                lang_label.toggleClass('en sp');
            }else{
                lang_label.toggleClass('sp en');
            }
        });
    }

    // Shots
    var shots = $('.shots');

    if(shots.length){
        shots.unslider({
            autoplay: false,
            keys: true,
            dots: true
        });
    }

    // Modal
    var modal = $('.modal');

    if(modal.length){

        var $layer           = $('.layer'),
            trigger_modal    = $('.trigger-modal')
            close_modal      = modal.find('.close');

        function show_modal(target){
            $layer.toggleClass('visible');
            modal.filter('[data-target="'+ target +'"]').addClass('visible');
        }

        function hide_modal(){
            $layer.removeClass('visible');
            modal.removeClass('visible');
        }

        trigger_modal.click(function(e){
            e.preventDefault();
            var $this   = $(this),
                target  = $this.data('target');

            show_modal(target);

        });

        close_modal.click(function(e){
            hide_modal();
        });

        $layer.click(function(e){
            hide_modal();
        });

        $(document).keyup(function(e) {
             if (e.keyCode == 27)
                hide_modal();
        });

    }
});
