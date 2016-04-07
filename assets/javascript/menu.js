 jQuery(function($){
            $( '.menu-btn' ).click(function(){
                var menu = $('.responsive-menu');
                if(menu.css('display') == 'none')
                    menu.css('display','block');
                else if(menu.css('display') == 'block')
                    menu.css('display','none');
            });
        });