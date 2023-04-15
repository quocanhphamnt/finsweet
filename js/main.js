$( document ).ready(function() {
    
    $('.faq').on('click', event => {
        $(event.currentTarget).parent().siblings('.number').toggleClass('text-secondary');
        $(event.currentTarget).parent().siblings('.number').toggleClass('text-primary');
    });

});