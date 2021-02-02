function affichageImage() {
    $(document).ready(function(){
        $('.julesVerne').click(function(){
            $(this).toggleClass('disappear');
            $('.cle').toggleClass('appear');
        });
    });
}

function requeteSQL() {
    console.log("Salut")
}

affichageImage()