<?php

function getRoute(){
    if(isset($_REQUEST['url'])){
        $url=$_REQUEST['url'];
    }else{
        $url="home";
    }
    switch($url){
        case 'login':
            return 'login';
        case 'logaction':
            return 'logaction';
        case 'register':
            return 'register';
        case 'regaction':
            return 'regaction';
        case 'logout':
            return 'logout';
        case 'dashboard':
            return 'dashboard';
        case 'dashaction':
            return 'dashaction';
        case 'delete':
            return 'delete';
        case 'deleteaction':
            return 'deleteaction';
        case 'update':
            return 'update';
        case 'updateaction':
            return 'updateaction';
        default:
            return 'home';
    }
}