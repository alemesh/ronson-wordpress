<?php


function sendermail() {

if (isset($_POST['search'])) {
    parse_str($_POST['search']['formserialize'], $data);


    $senderName = 'Ronson site';
    $senderEmail = $_SERVER['SERVER_NAME'];
    $targetEmail = [];
//$targetEmail = ['ravit@gofmans.co.il', 'office@ronson.co.il', 'idan@ronson.co.il', 'alemesh@acceptic.com', 'sales1@ronson.co.il', 'israel@gofmans.co.il', 'eli@gofmans.co.il'];
    $targetEmail = ['alemesh@acceptic.com'];
//$targetEmail = ['alemesh@acceptic.com', 'eli@gofmans.co.il'];
    $messageSubject = 'Message from web-site - '. $_SERVER['SERVER_NAME'];
    $redirectToReferer = true;
    $redirectURL = $_SERVER['SERVER_NAME'];
//****************************************



//serchh Media title =========
    $mystr = $_SERVER['HTTP_REFERER'];
    $mystrarr = explode('?', $mystr);
    $findname = 'ck=';
    foreach ($mystrarr as $value){
        $pos = strpos($value, $findname);
        if($pos !== false){
            $posMediaTitle = explode('=', $value);
            $MediaTitle = $posMediaTitle[1];
        }
    }
//============================


// mail content
    $ufname = $data['name'];
    $uphone = $data['tel'];
    $umail = $data['email'];
    $ProjectID = $data['ProjectID'];
    $Password = $data['Password'];
    $reffererName = $_SERVER['HTTP_REFERER'];


// prepare message text
    $messageText =	'First Name: '.$ufname."\n".
        'Phone: '.$uphone."\n".
        'Email: '.$umail."\n".
        'Referal: '.$reffererName."\n";

// send email
    $senderName = "=?UTF-8?B?" . base64_encode($senderName) . "?=";
    $messageSubject = "=?UTF-8?B?" . base64_encode($messageSubject) . "?=";
    $messageHeaders = "From: " . $senderName . " <" . $senderEmail . ">\r\n"
        . "MIME-Version: 1.0" . "\r\n"
        . "Content-type: text/plain; charset=UTF-8" . "\r\n";

//if (preg_match('/^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$/',$targetEmail,$matches))
    foreach ($targetEmail as $val){
        mail($val, $messageSubject, $messageText, $messageHeaders);
    }

//    var_dump($_POST);
// BmbYY sistem ======

//$url = 'http://www.bmby.com/shared/AddClient/index.php';
////$url = 'http://192.168.89.147/test.php';
////$url = 'http://testbmby/test.php';
//$params = array(
//    'Fname' => $ufname,
//    'Phone' => $uphone,
//    'Email' => $umail,
//    'ProjectID' => $ProjectID,
//    'Password' => $Password,
//    'Referal' => $reffererName,
//    'MediaTitle' => $MediaTitle
//);
//$result = file_get_contents($url, false, stream_context_create(array(
//    'http' => array(
//        'method'  => 'POST',
//        'header'  => 'Content-type: application/x-www-form-urlencoded',
//        'content' => http_build_query($params)
//    )
//)));



//========== xml backups lids ================

    $today = date("F j, Y, g:i a");

    $file = 'sample.csv';
    $tofile = "$ufname;$uphone;$umail;$today\n";
    $bom = "\xEF\xBB\xBF";
    @file_put_contents($file, $bom . $tofile . file_get_contents($file));




//$urlredirect = 'http://www.ronson.co.il/thanks-page.html?Lead=true';
//$urlredirect = 'http://192.168.89.147/thanks-page.html?Lead=true';
//$urlredirect = 'http://campaign.gofmans.co.il/ronson/thanks-page.html?Lead=true';

//// redirect
//if($redirectToReferer) {
//    header("Location: ".$urlredirect);
//} else {
//    header("Location: ".$redirectURL);
//}
}
	wp_die();
}

add_action( 'wp_ajax_sendermail', 'sendermail' );
add_action( 'wp_ajax_nopriv_sendermail', 'sendermail' );
?>
