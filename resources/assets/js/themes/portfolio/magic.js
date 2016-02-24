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

    /* Delay shots */
    setTimeout(function(){
        var shots = $('.shots'),
            single = $('.single');
        if(shots.length)
            shots.fadeIn(100);
        if(single.length)
        {
            single.fadeIn(100);
            /* HighlightJS */
            hljs.initHighlightingOnLoad();
        }
    }, 1300);

    /* Modal */
    var modal = $('.modal');

    if(modal.length){

        var $layer           = $('.layer'),
            trigger_modal    = $('.trigger-modal'),
            close_modal      = modal.find('.close-icon');

        function show_modal(target){
            $layer.show().toggleClass('visible');
            modal.filter('[data-target="'+ target +'"]').show().addClass('visible');
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
