$(document).ready(function(){    

    $("#form_submit").click(function(e) {
        e.preventDefault();

        var focusSet = false;

        var name        = $("#name_validation").val();
        var email       = $("#email_validation").val();        
        var mobile      = $("#mobile_validation").val();
        var subject     = $("#subject_validation").val();        
        var message     = $("#message_validation").val();
        
        if(name == '' || email =='' || mobile == '' || subject =='' || message == '' )
        {
            var name_f      = /^[a-zA-Z ]*$/;            
            var mail_reg    = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var mobile_reg  = /^(\+91-|\+91|0)?\d{10}$/;
            
                if(!name.match(name_f) || name.length==0)
                {
                    $('#name').text("*Please enter name.");
                    $('#name_validation').focus();
                    e.preventDefault(); 
                    focusSet = true;
                    return false;
                } else{
                    $('#name').text("");
                }

                if(!mobile.match(mobile_reg) || mobile.length==0)
                {
                    $('#mobile').text("*Please enter the valid mobile number.");
                    $('#mobile_validation').focus();
                    e.preventDefault(); 
                    focusSet = true;
                    return false;
                } else{
                    $('#mobile').text("");
                }

                if(!email.match(mail_reg)|| email.length==0)
                {
                    $('#email').text("*Please enter the valid email address.");
                    $('#email_validation').focus();
                    e.preventDefault(); 
                    focusSet = true;
                    return false;
                } else {
                    $('#email').text("");

                }

                if (subject == '' || subject.length == 0 ) {
                    $('#subject').text("*Please write down subject for concer.");
                    $('#subject_validation').focus();
                    e.preventDefault(); 
                    focusSet = true;
                    return false;
                } else{
                    $('#subject').text("");
                }

                if (message == '' || message.length == 0 ) {
                    $('#message').text("*Please write down your concer in details.");
                    $('#message_validation').focus();
                    e.preventDefault(); 
                    focusSet = true;
                    return false;
                } else{
                    $('#message').text("");
                }
        }
        else
        {
            var dataString = 'name=' + name +'&mobile_no=' + mobile  + '&email=' + email + '&subject=' + subject + "&message=" + message;
            // console.log(dataString);
            $.ajax({
                type: "POST",
                url: "send_email.php",
                data: dataString,
                cache: false,
                dataType: "json", 
                success: function(result) {
                    
                    if(result.status == "success"){
                        alert("Thank you for subscribing. You will be the first to know about new releases & special updates. Stay tuned!!!");
                        $("#contact_form")[0].reset();
                        $("#name,#subject, #mobile,#email,#message").text("");                        
                    }                   
                    else{
                        alert("Something went wrong please try after sometime!");
                        $("#contact_form")[0].reset();
                        $("#name,#subject, #mobile,#email,#message").text("");                          
                    }
                },               

            });
        }
        return false;
    });


});