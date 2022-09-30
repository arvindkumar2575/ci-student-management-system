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
        $this->common = new Common();
        $this->userModel = new UserModel();
    }
    public function login()
    {
        return view('manage/login');
    }

    public function signup()
    {
        return view('manage/signup');
    }

    public function forget_password()
    {
        return view('manage/forget-password');
    }

    public function checkString(string $p1, string $p2)
    {
        return $p1==$p2;
    }

    public function dashboard()
    {
        return view('manage/dashboard/index');
    }
}
