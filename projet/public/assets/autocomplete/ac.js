$(function() {
    $("#nbreDePlaces").on("keyup", function() {
        let tab = $(this).val().split("");
        console.log($(this).val());
        console.log(tab);
        for (let i = 0; i < tab.length; i++) {
            const element = tab[i];
            if (!/^([0-9]+)$/.test(element)) {
                tab.splice(i, 1);
            }
        }
        $(this).val(parseInt(tab.toString().replace(/,/g,"")));
    });
});