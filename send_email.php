<?php 

    require_once 'constants.php';
    require_once 'PHPMailer/class.phpmailer.php';
    
    $response = array();

    if(!empty($_REQUEST['submit'])){

        if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['mobile_no']) && !empty($_POST['message'])){
            $email_to = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

            $name             =   $_POST['name'];        
            $subject          =   $_POST['subject'];    
            $mobile_no        =   $_POST['mobile_no'];    
            $message          =   $_POST['message'];        
        }        

    }else {
        $response['status'] = "error";
        $response['message'] = ERROR_MSG;

        echo json_encode($response);
        exit;
    }
    
    // Send E-mail to Admin
    
    $subject  = "New Subscription"; // Subject for Admin E-mail

    $content ="New subscribed user information are as follows:<br><br>";
    $content .="Name : ".ucwords($name)."<br>";      
    $content .= "E-mail : ".$emailto."<br>";
    $content .= "Contact : ".$mobileno."<br>";
    $content .= "Messages : ".$message."<br><br>";
    $content .= "Thank You!<br>";
    
    try {      

        $mail = new PHPMailer(true); 
        $mail->IsSMTP();  
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = HOST_NAME;             // sets GMAIL as the SMTP server
        $mail->Port       = PORT;                  // set the SMTP port for the GMAIL server
        $mail->Username   = GUSER;                 // GMAIL username
        $mail->Password   = GPWD;                  // GMAIL password

        $mail->AddAddress($emailto);               // whom you wanna to send an email
        $mail->AddCC(EMAIL_FROM, ADMIN_USERNAME);        
        $mail->SetFrom(EMAIL_FROM, EMAIL_FROM_UNAME); 

        $mail->Subject = $subject;
        
        $mail->MsgHTML($content);            

        if(!$mail->Send()) {
            $response['status'] = "success";
            $response['message'] = SUCCESS_MSG;        
            
        }else {
            $response['status'] = "fail";
            $response['message'] = ERROR_MSG;                
        }

    } catch (phpmailerException $e) {
        $response['status'] = "fail";
        $response['message'] = $e->errorMessage();  
      
    } catch (Exception $e) {
        $response['status'] = "fail";
        $response['message'] = $e->errorMessage();  
    }

    echo json_encode($response);

    exit;