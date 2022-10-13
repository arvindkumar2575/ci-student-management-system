<?php

namespace App\Controllers;

use App\Libraries\CustomEmail;
use Config\Paths;

class Home extends BaseController
{
    public function index()
    {
        // $email = new CustomEmail();
        // echo $email->sendEmail();die;
        $data["bs_url"] = base_url('/assets/css/style.css');
        $paths = new Paths();
        $data['app_url'] = $paths->appDirectory;

        return view('home',$data);
    }

    public function web()
    {
        // echo "<pre>";print_r($this);die;
        $data['metadata'] = array(
            'title'=>'websit'
        );
        return view('web/index',$data);
    }
}
