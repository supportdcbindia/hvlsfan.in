jQuery(document).ready(function() {
    jQuery(".click1").click(function() {
        if (parseInt(jQuery('#ispopupopen').val())) {
            jQuery('#onload').modal('show');
            jQuery('#ispopupopen').val(0);
        }
    });
    jQuery(".click2").click(function() {
        if (parseInt(jQuery('#ispopupopen').val())) {
            jQuery('#onload1').modal('show');
            jQuery('#ispopupopen').val(0);
        }
    });
    jQuery("#onload").on('hide.bs.modal', function() {
        jQuery('#ispopupopen').val(1);
        onClick();
    });

    jQuery("#onload1").on('hide.bs.modal', function() {
        jQuery('#ispopupopen').val(1);
        onClick();
    });

    jQuery(".stick_close").click(function() {
        if (parseInt(jQuery('#ispopupopen').val())) {
            jQuery('#onload').modal('hide');
            jQuery('#ispopupopen').val(1);
        }
    });

});



g_timer = null;


    jQuery(document).ready(function() {
        startTimer();
    });

    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }


    function buzzbtn() {
        jQuery('.sticklist').addClass('vibrate-3');
        //jQuery('#sideService').addClass('open');
        setTimeout(function(){
            //jQuery('#sideService').removeClass('open');
            jQuery('.sticklist').removeClass('vibrate-3');
            
        }, 10000);
    }

    jQuery(".sticklist ").mouseover(function(){
        jQuery(this).removeClass('vibrate-3');
   });



    function startTimer() {
        g_timer = window.setInterval(function() {
            // var today = new Date();
            var cookiesisset = getCookie('isloadopenmodel');
            console.log(parseInt(jQuery('#ispopupopen').val()) + "---" + cookiesisset);
            if (parseInt(jQuery('#ispopupopen').val()) && jQuery('#inquiery-model').val() != 'inquiryset' && cookiesisset != '1') {
                jQuery('#onload').modal('show');
                jQuery('#ispopupopen').val(0);
                document.cookie = "isloadopenmodel=1";
                //buzzbtn();
            } else if (parseInt(jQuery('#ispopupopen').val())  && cookiesisset == '1') {
                // jQuery('#onload').modal('show');
                // jQuery('#ispopupopen').val(0);
                buzzbtn();
            }
        }, 20000);
    }

    function onClick() {
        clearTimeout(g_timer);
        // var today = new Date();
        // console.log("cancle model" + today)
        startTimer();
    }



// phone number validation 
jQuery(".number21").keypress(function(e) {
    //if the letter is not digit then display error and don't type anything
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
    //display error message
    jQuery("#errmsg").html("Digits Only").show().fadeOut("slow");
    return false;
    }
    });


 jQuery(document).ready(function () {
        jQuery(".open-close-arrow").click(function () {
            jQuery(".open-close-arrow").toggleClass("open");
            jQuery(".sticklist ul").toggleClass("open");
        });
    });
