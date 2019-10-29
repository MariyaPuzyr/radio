<?php

header( 'Content-Type: text/plain; charset=UTF-8' );

if( !defined( 'ISAJAXREQUEST' ) ) {
    define( 'ISAJAXREQUEST', (
    ( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest' )
        ? true
        : false
    ) );
}

if( ISAJAXREQUEST ) {
    if( isset( $_SERVER['HTTP_REFERER'] ) ) {
        if( !preg_match( "/^https?\:\/\/{$_SERVER['HTTP_HOST']}/ui", $_SERVER['HTTP_REFERER'] ) ) {
            JSONExit();
        }
    } else {
        JSONExit();
    }
} else {
    $_POST = array_merge( $_POST, $_GET );
}

include_once 'lib/ReCaptcha.php';
include_once 'lib/mailer/class.phpmailer.php';


$JSON = array();

if( isset( $_POST['action'] ) && $_POST['action'] == 'send-form' ) {

    parse_str($_POST['form'], $data);

    $recapch = new ReCaptcha();
    $out = [
        'ok' => false,
        'message' => '',
    ];

    if(!empty($data['phone'])
        && !empty($data['email'])
        && !empty($data['compani'])
        && !empty($data['message'])
    ){

        $response = $recapch->verifyResponse(
            $data["g-recaptcha-response"]
        );

        if(!$response->success){

            $out['message'] = 'Ви робот?';
        }
        else{



            $message = '
<p>замовлення реклами від '.date('d.m.Y H:i').'</p>
<p>Телефон: '.$data['phone'].'</p>
<p>Пошта: '.$data['email'].'</p>
<p>Компанія: '.$data['compani'].'</p>
<p>Повідомлення: '.$data['message'].'</p>
';

            $to  = 'fmvsumah@gmail.com';
            $subject = "Замовлення реклами";
            $from  = 'robot@gorod.sumy.ua';


            $mailer=new PHPMailer;
            $mailer->ClearAddresses();
            $mailer->ClearAttachments();
            $mailer->Host = 'mail.gorod.sumy.ua';
            $mailer->SMTPAuth = true;
            $mailer->Username = 'robot@gorod.sumy.ua';
            $mailer->Password = 'g2cLFLvp';
            $mailer->Subject=$subject;
            $mailer->Body=$message;
            $mailer->From=$from;
            $mailer->FromName=$from;
            $mailer->AddAddress($to);
            $mailer->isHtml(true);
            $mailer->CharSet = "utf-8";

//            $headers = "From: " . $from  . "\r\n";
//            $headers .= "Reply-To: ". $from . "\r\n";
//            $headers .= "CC: ". $from ."\r\n";
//            $headers .= "MIME-Version: 1.0\r\n";
//            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
//
//            if(mail($to, $subject, $message, $headers)){
            if($mailer->send()){

                $out['ok'] = true;
                $out['message'] = 'Ваше повідомлення надіслано, скоро з вами зв\'яжеться менеджер';
            }
            else{

                $out['message'] = 'Щось пішло не так, зверніться до адміністратора';
            }
        }
    }

    $JSON = $out;
}



JSONExit( $JSON );

function JSONExit( $JSON = null ) {
    ob_clean();

    if( ISAJAXREQUEST ) {
        header( 'Content-Type: application/json; charset=UTF-8' );
        echo json_encode( $JSON );
    } else {
        header( 'Content-Type: text/plain; charset=UTF-8' );
        print_r( $JSON );
    }

    exit;
}