<?php

namespace App\Controllers;

use App\Models\Common;
use App\Models\UserModel;

class Manage extends BaseController
{
    protected $session;
    protected $uri_segment;
    protected $common;
    protected $userModel;
    public function __construct()
    {
        $this->session = session();
        $this->uri_segment = service('uri');
        $this->common = new Common();
        $this->userModel = new UserModel();
    }
    public function login()
    {
        $userId = checkSessionUserId();
        if(checkSession()){
            return redirect()->to('manage/'.$userId.'/dashboard');
        }else{
            $data = array();
            $data['title'] = 'Log In';
            $data["form_type"] = "login";
            return view('manage/login/login',$data);
        }
    }

    public function sign_up()
    {
        $userId = checkSessionUserId();
        if(checkSession()){
            return redirect()->to('manage/'.$userId.'/dashboard');
        }else{
            $data = array();
            $data['title'] = 'Sign Up';
            $data["form_type"] = "signup";
            $data['gender_details'] = $this->userModel->getGenderDetails();
            $data['user_types'] = $this->userModel->getUserTypes();
            return view('manage/login/signup',$data);
        }
    }

    public function forget_password()
    {
        $userId = checkSessionUserId();
        if(checkSession()){
            return redirect()->to('manage/'.$userId.'/dashboard');
        }else{
            $data = array();
            $data['title'] = 'Forget Password';
            $data["form_type"] = "forget-password";
            return view('manage/login/forget-password',$data);
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('manage');
    }

    public function dashboard()
    {
        $userId = checkSessionUserId();
        $data=array();
        $url_userId = $this->uri_segment->getSegment(2);
        if(checkSession() && ($userId==$url_userId)){
            $data['uri2'] =  $this->uri_segment->getSegment(2);
            $data['uri3'] =  $this->uri_segment->getSegment(3);
            $data['permissions'] = $this->userModel->getUserPermissions($url_userId);
            return view('manage/v1/dashboard/index',$data);
        }else{
            return redirect()->to('manage');
        }
    
    }

    public function admin()
    {
        $userId = checkSessionUserId();
        $data=array();
        $url_userId = $this->uri_segment->getSegment(2);
        if(checkSession() && ($userId==$url_userId)){
            $data['uri2'] =  $this->uri_segment->getSegment(2);
            $data['uri3'] =  $this->uri_segment->getSegment(3);
            return view('manage/v1/dashboard/index',$data);
        }else{
            return redirect()->to('manage');
        }
    }

    public function users()
    {
        $userId = checkSessionUserId();
        $data=array();
        $url_userId = $this->uri_segment->getSegment(2);
        if(checkSession() && ($userId==$url_userId)){
            $data['uri2'] =  $this->uri_segment->getSegment(2);
            $data['uri3'] =  $this->uri_segment->getSegment(3);
            $data['permissions'] = $this->userModel->getUserPermissions($url_userId);
            return view('manage/v1/dashboard/index',$data);
        }else{
            return redirect()->to('manage');
        }
    }
}
