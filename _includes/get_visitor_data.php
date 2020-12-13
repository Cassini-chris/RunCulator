<?php
session_start();

// get user details
        $user_agent = $_SERVER['HTTP_USER_AGENT']; // user browser
        $ip_address = $_SERVER["REMOTE_ADDR"];     // user ip adderss
        $page_name = $_SERVER["SCRIPT_NAME"];      // page the user looking

          function isMobileDevice() {
              return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
          }
          if(isMobileDevice()){
              $device_type =  "mobile";
          }
          else {
              $device_type= "desktop";
          }
?>
