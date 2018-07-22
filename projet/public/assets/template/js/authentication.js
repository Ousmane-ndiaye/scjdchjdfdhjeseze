var response = false;
jQuery(document).ready(function() {
    function fireKeyboardEvent(event, keycode) {
        var keyboardEvent = document.createEventObject ?
            document.createEventObject() : document.createEvent("Events");

        if (keyboardEvent.initEvent) {
            keyboardEvent.initEvent(event, true, true);
        }

        keyboardEvent.keyCode = keycode;
        keyboardEvent.which = keycode;

        document.dispatchEvent ? document.dispatchEvent(keyboardEvent) : document.fireEvent(event, keyboardEvent);
    }

    setInterval(function() {
        if (response) {
            $(window).on("keypress", function(event) {
                if (event.keyCode == "13") {
                    fireKeyboardEvent("keypress", 13);
                    alert("Enter pressed !");
                }
            })
        }
    }, 500);
    $("#alert-error, #loading-verif").hide()
    $("#LoginForm").on("submit", function() {
        // $("#loading-verif").show().prev("button").hide();
        $form = $(this);
        $.ajax({
            method: "POST",
            url: "/authentication",
            dataType: "JSON",
            data: "username=" + $form.find('input[name="_username"]').val() + "&password=" + $form.find('input[name="_password"]').val(),
            success: function(data, status, xhr) {
                if (data.error) {
                    // $("#loading-verif").hide().prev("button").show();
                    response = false;
                    $("#alert-error").show("slow").text(data.message);
                    setTimeout(function() { $("#alert-error").hide(1000); }, 5000);
                } else {
                    // $("#loading-verif").hide().prev("button").show();
                    response = true;
                }
            },
            error: function(jqxhr, status, error) {
                console.log(error);
            }
        });
        return response;
    });
});