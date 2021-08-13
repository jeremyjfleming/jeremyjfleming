<?php


$requests = $_GET; 
switch (key($requests)) {

    case 404:
        header("Location: /");
        break;
    case 401:
        echo "Access Denied";
        break;
    case 403:
        echo "Access Denied";
        break;     
    case 400:
        echo "Bad Request";
        break;  
    case 405:
        echo "Invalid Method";
        break;
    case 408:
        echo "Server Timeout";
        break;  
    case 500:
        echo "Internal Server Error";
        break;  
    default:
        header("Location: /");
}