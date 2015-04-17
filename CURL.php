<?php

/**
 * Description of CURL
 *
 * @author thambaru.com
 */
class Curl {

    function __construct() {
        
    }

    public static function curl($setopt) {
        if (is_array($setopt)) {
            $cc = curl_init();
            foreach ($setopt as $option => $attr) {
                curl_setopt($cc, $option, $attr);
            }
            $output = curl_exec($cc);
            curl_close($cc);
            return $output;
        } else {
            return "Not An Array.";
        }
    }

}
