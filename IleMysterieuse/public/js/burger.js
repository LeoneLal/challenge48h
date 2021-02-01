function menuBurger() {
    $(document).ready(function(){
        $('.burger').click(function(){
            $('.menu').toggleClass('isOpen');
            $(this).find('.barre').toggleClass('activate');
        });
    });
}

function list() {
    $(document).ready(function(){
        $('.rulesA').click(function(){
            $('.sous-liste').toggleClass('hidden')
        });
    });
}

menuBurger()