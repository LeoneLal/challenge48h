function affichageImage() {
    $(document).ready(function(){
        $('.julesVerne').click(function(){
            $(this).toggleClass('disappear');
            $('.cle').toggleClass('appear');
        });
    });
}

function requeteSQL() {
    console.log("Vous avez dorénavant en possession des identifiants vous permettant d’accéder à la base de données « romancier_enigme ». Mais ce n’est pas terminé. Nous allons maintenant tester vos connaissances en SQL. Ne vous inquiétez pas, cela restera basique. ")
    console.log("Vous disposez de deux tables, une listant toutes les villes de France et l’autre listant tous les départements. Voici les conditions que vous devrez respecter.")
    console.log("-	Le nom de la ville ne peut pas être composé de plus de deux noms propres. ")
    console.log("-	Le département de la ville ne peut pas être impair.")
    console.log("-	Le département_nom_soundex doit contenir un ‘2’ ")
    console.log("-	Une fois les villes filtrées selon ces critères, nous recherchons la plus grande différence de densité de population sur la période 1999 / 2012 (arrondie à l’unité).")
    console.log("Le résultat est le dernier élément dont vous aurez besoin pour valider l’énigme du site.")
        
}

affichageImage()