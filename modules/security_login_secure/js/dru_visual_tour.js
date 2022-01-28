jQuery(document).ready( function () {

    jQuery("#edit-website-security-support-side-button").click(function (e) {
        
        e.preventDefault();
        if (jQuery("#mons-feedback-form").css("right") != "0px") {
            jQuery("#mons-feedback-overlay").show();
            jQuery("#mons-feedback-form").animate({
                "right": "0px"
            });
        }
        else {
            jQuery("#mons-feedback-overlay").hide();
            jQuery("#mons-feedback-form").animate({
                "right": "-391px"
            });
        }
    });

});