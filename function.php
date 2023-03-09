<?php

function checkHindi($url) {
    $html = file_get_contents($url);
    if (preg_match('/\p{Devanagari}/u', $html)) {
        return true;
    } else {
        return false;
    }
    
}

function checkSite($url) {
    $html = file_get_contents($url);
    if (strpos($html, 'Class Central aggregates courses from many providers to help you find the best courses on almost any subject, wherever they exist.') !== false) {
        echo "Classcentral site.<br>";
    } else {
        echo "Not Classcentral site.<br>";
    }
}

function fileExists($url) {
    $file = file_get_contents($url);
    return $file !== false;
}