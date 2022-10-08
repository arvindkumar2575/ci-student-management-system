<?php

if (!function_exists("manageURL")) {
    function manageURL($uri=null)
    {
        if(isset($uri)){
            return base_url("manage").'/'.$uri;
        }else{
            return base_url("manage");
        }
    }
}

if (!function_exists("manageURL_API")) {
    function manageURL_API()
    {
        return base_url("manage/api");
    }
}

if (!function_exists("checkSession")) {
    function checkSession()
    {
        $session = session();
        $userdata = $session->get('userdata');
        $isLoggedIn = isset($userdata)?$userdata['isLoggedIn']:0;
        if($isLoggedIn){
            return true;
        }else{
            return false;
        }
    }
}

if (!function_exists("checkSessionUserId")) {
    function checkSessionUserId()
    {
        $session = session();
        $userdata = $session->get('userdata');
        $userId = isset($userdata)?$userdata['id']:0;
        if($userId){
            return $userId;
        }else{
            return 0;
        }
    }
}