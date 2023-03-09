<?php

require_once 'function.php';

$event = filter_input(INPUT_POST, 'event', FILTER_SANITIZE_SPECIAL_CHARS);
$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

if($event === 'send') {
    trim($url);
    $urlArray = explode(',', $url);
    foreach ($urlArray as $url) {
        echo '<strong>' . $url . ':</strong><br>';
        if(checkHindi($url)) {
            echo 'The front page is Hindi.<br>';
        } else {
            echo 'The front page is not Hindi.<br>';
        }
        checkSite($url);
        if(@fileExists($url . '/webpack/Auth.44e05080311528b179c7.js')) {
            echo 'Javascript is working fine.<br>';
        } else {
            echo 'Javascript is not working.<br>';
    }
  }
    
  
}