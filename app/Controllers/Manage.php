<?php

namespace App\Controllers;

use App\Models\Common;
use App\Models\UserModel;
use App\Helpers;
use CodeIgniter\Model;
use Tests\Support\Entity\User;

class Manage extends BaseController
{
    
    public function __construct()
    {
        $this->session = session();
    }
    public function login()
    {
        $data = array();
        $data['title'] = 'Log In';
        $data["form_type"] = "login";
        return view('manage/login',$data);
    }

    public function signup()
    {
        $data = array();
        $data['title'] = 'Sign Up';
        $data["form_type"] = "signup";
        return view('manage/signup',$data);
    }

    public function forget_password()
    {
        $data = array();
        $data['title'] = 'Forget Password';
        $data["form_type"] = "forget-password";
        return view('manage/forget-password',$data);
    }

    public function dashboard()
    {
        return view('manage/dashboard/index');
    }
}
