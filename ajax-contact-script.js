jQuery(document).ready(function($) {
    $('form#contactForm').on('submit', function(e){
        $('p#status').show().text(ajax_contact_object.loading_message);
        jQuery('p#status').removeClass("success error");
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_contact_object.ajax_url,
            data: { 
                'action': 'wpschool_ajax_contact', 
                'contactName': $('#contactName').val(), 
                'email': $('#email').val(), 
                'commentsText': $('#commentsText').val() },
            success: function(data){
                debugger;
                if(data.error==true){
                    jQuery('p#status').removeClass("success");
                    jQuery('p#status').addClass("error");
                } else {
                    jQuery('p#status').addClass("success");
                    jQuery('p#status').removeClass("error");
                }
                $('p#status').text(data.message);
            },
            error: function(response){
                
                jQuery('p#status').addClass("error");
                jQuery('p#status').removeClass("success");
                jQuery('p#status').text("خطایی در هنگام ارتباط با سرور به وجود آمده است. لطفا دوباره امتحان کنید!");
            }
        });
        e.preventDefault();
    });
});