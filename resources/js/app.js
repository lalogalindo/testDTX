require('./bootstrap');

require('./blockui');

require('./percentageCircles');

require('./backdropImage');

$('.nav-item.dropdown').hover(function(ev){
    $(ev.currentTarget).addClass('show').find('.dropdown-menu').addClass('show')
},function(ev){
    $(ev.currentTarget).removeClass('show').find('.dropdown-menu').removeClass('show')
})