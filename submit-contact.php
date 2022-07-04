<?php 

/**
 *	include wp-config to get access to global CAPTCHA var
 */ 
// include '../../../wp-config.php';
// include '../../../wp-config.env.php';

function validate($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

	return $data;
} 


$s_na = $s_em = $s_su = $s_me = $hiddenRecaptcha = "";

$s_na	 = validate($_POST["s_na"]);
$s_em	 = validate($_POST["s_em"]);
$s_su	 = validate($_POST["s_su"]);
$s_me    = validate($_POST["s_me"]);
$captcha = validate($_POST["g-recaptcha-response"]);


if (!isset($_POST['s_cb'])) {
    echo "checkbox not checked!";
} else {
    $response = validate($_POST["g-recaptcha-response"]);
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    
    $data = array(
        'secret' => '',
        'response' => $_POST["g-recaptcha-response"]
    );
    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
            )
        );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success=json_decode($verify);
    if ($captcha_success->success==false) {
        echo '<h2>You are spammer!</h2>';
        //  echo "<p>You are a bot! Go away!</p>";
    } else if ($captcha_success->success==true) {
        echo "<p>You are not not a bot!</p>";
        //  $to = the_field('field_name', 5); 
        $to = "webmaster@elektrodesign-reiner-weber.de";
        $betreff = "Neue Nachricht von " . $s_na;
        $from = "From: " . $s_na;
        $text = "Name: " . $s_na .
        "\nEmail: " . $s_em .
        "\nBetreff: " . $s_su .
        "\nNachricht: " . $s_me;
        $headers = 'From: '. $s_em . "\r\n" .
        'Reply-To: ' . $s_em . "\r\n";
        // wp_mail($to, $subject, strip_tags($message), $headers);
        mail($to, $betreff, $text, $from);
    }
}
        
        
        /**
         * only for debugging!!!
         */ 
        // echo $s_na . "<br>" .
        // $s_em . "<br>" .
        // $s_su . "<br>" .
        // $s_me . "<br>" .
        // $captcha;
        
        //$response['success'] = TRUE;
        
        // if($response['success'] == false) {
            //  	echo '<h2>You are spammer!</h2>';
            // } else {
                //    // $to = get_option('admin_email');
                //     $to = the_field('field_name', 5); 
                // 	//$to = "s.steil2@gmail.com";
                // 	$betreff = "Neue Nachricht von " . $s_na;
                // 	$from = "From: " . $s_na;
                // 	$text = "Name: " . $s_na .
                //             "\nEmail: " . $s_em .
                //             "\nBetreff: " . $s_su .
                //         	"\nNachricht: " . $s_me;
                // 	$headers = 'From: '. $s_em . "\r\n" .
                //     		   'Reply-To: ' . $s_em . "\r\n";
                //     // wp_mail($to, $subject, strip_tags($message), $headers);
                //     mail($to, $betreff, $text, $from);
                // }