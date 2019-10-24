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

            $out['message'] = 'Вы робот?';
        }
        else{

            $to  = 'fmvsumah@gmail.com';
            $subject = "Заказ рекламы";

            $message = '
Заказ рекламы от'.date('d.m.Y H:i').'
Телефон: '.$data['phone'].'
Почта: '.$data['email'].'
Компания: '.$data['compani'].'
Сообщение: '.$data['message'].'
';

            if(mail($to, $subject, $message)){

                $out['ok'] = true;
                $out['message'] = 'Ваше сообщение отправлено, скоро с вами свяжется менеджер';
            }
            else{

                $out['message'] = 'Что-то пошло не так, обратитесь к администратору';
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