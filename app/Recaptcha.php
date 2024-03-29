<?php 
  namespace App;

  Class Recaptcha {
    public static function HandleCaptcha($gresponse,$ip,$action): Bool {
        // create a new cURL resource
        $ch = curl_init();
        
        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify" . "?secret=" . env('RE_CAP_SECRET') . "&response=" . $gresponse . "&remoteip=" . $ip);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        // grab URL and pass it to the browser
        $resp = curl_exec($ch);
        
        // close cURL resource, and free up system resources
        curl_close($ch);
    
        $resp = (json_decode($resp));
        if($resp->success){
            if($resp->action==$action){
                return $resp->success;
            }else {
                return false;
    
            }
    
        }else{
            return false;
        }
    }
  }

?>