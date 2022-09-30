<?php
// Function: used to convert a string to revese in order
if (!function_exists("manageURL")) {
    function manageURL()
    {
        return base_url("manage");
    }
}

if (!function_exists("manageURL_API")) {
    function manageURL_API()
    {
        return base_url("manage/api");
    }
}