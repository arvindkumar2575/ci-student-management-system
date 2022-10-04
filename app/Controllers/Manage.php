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
        if(checkSession()){
            return redirect()->to('manage/user/dashboard');
        }else{
            $data = array();
            $data['title'] = 'Log In';
            $data["form_type"] = "login";
            return view('manage/login',$data);
        }
    }

    public function sign_up()
    {
        if(checkSession()){
            return redirect()->to('manage/user/dashboard');
        }else{
            $data = array();
            $data['title'] = 'Sign Up';
            $data["form_type"] = "signup";
            return view('manage/signup',$data);
        }
    }

    public function forget_password()
    {
        if(checkSession()){
            return redirect()->to('manage/user/dashboard');
        }else{
            $data = array();
            $data['title'] = 'Forget Password';
            $data["form_type"] = "forget-password";
            return view('manage/forget-password',$data);
        }
    }

    public function logout()
    {
        if(checkSession()){
            $this->session->destroy();
        }
        return redirect()->to('manage');
    }

    public function dashboard()
    {
        if(checkSession()){
            return view('manage/dashboard/index');
        }else{
            return redirect()->to('manage');
        }
    }
}
