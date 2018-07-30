$(document).ready(function () {

    $("#formreservation").hide()
    $("#infobienapro").hide()
    $("#infobiennpro").hide()

    $("#insc").on("click", function () {
        $("#formconnexion").hide()
        $("#formreservation").show()
    })

    $("#conne").on("click", function () {
        $("#formreservation").hide()
        $("#formconnexion").show()
    })
    //cacher info perso ancie  pro et afficher info bien 
    $("#next").on("click", function () {
        $("#infobienapro").show()
        $("#infopersoapro").hide()
    })

    //cacher info perso ancie  proprietaire et afficher info bien 
    $("#previous").on("click", function () {
        $("#infobienapro").hide()
        $("#infopersoapro").show()

    })

    //cacher info perso new  pro et afficher info bien 
    $("#next2").on("click", function () {
        $("#infobiennpro").show()
        $("#infopersonpro").hide()
    })

    //cacher info perso new  proprietaire et afficher info bien 
    $("#previous2").on("click", function () {
        $("#infobiennpro").hide()
        $("#infopersonpro").show()

    })


    //disable bouton valider contrat
    $('#print').attr("disabled", true);
    $('.able').click(function () {
        $('#print').attr("disabled", false);
    });

    $('.denied').click(function () {
        $('#print').attr("disabled", true);
    });



    var el1 = document.querySelector(".mg-gallery .owl-controls .owl-buttons div.owl-prev");
    // el1.innerHTML='<img style="width:20px;position:relative"  src="{{asset ("assets/template/images/cur-arrow-left.png)}}" alt="prec">';

     el1.innerHTML='précédent'

    var el2 = document.querySelector(".mg-gallery .owl-controls .owl-buttons div.owl-next");
    // el2.innerHTML = "<img style='width:20px' src='{{asset ('assets/template/images/cur-arrow-right.png')}}' alt='suiv'>"
        
        el2.innerHTML='suivant'
});
