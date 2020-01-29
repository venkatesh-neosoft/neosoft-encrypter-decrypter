<?php

// get the base url of the route
function base_url(): string
{
    $currentPath = $_SERVER['PHP_SELF']; 
    $pathInfo = pathinfo($currentPath); 
    $hostName = $_SERVER['HTTP_HOST'];
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    return $protocol.$hostName.$pathInfo['dirname']."/";
}

// removing unwanted characters in a string
function trim_string(string $data){
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = trim($data);

    return $data;
}