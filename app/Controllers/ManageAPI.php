<?php

namespace App\Controllers;

use App\Models\Common;
use App\Models\UserModel;
use App\Helpers;
use CodeIgniter\Model;
use Tests\Support\Entity\User;

class ManageAPI extends BaseController
{
    
    public function __construct()
    {
        $this->session = session();
        $this->common = new Common();
        $this->userModel = new UserModel();
    }

    public function loginAuth()
    {
        // echo "<pre>";print_r($_POST);die();
        $form_type = $this->request->getVar('form_type');
        if($form_type=="login"){
            $email = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            
            $data = $this->common->get_single_row("users","email",$email);
            // echo "<pre>";print_r($data);die();
            if($data){
                $pass = $data['password'];
                $authenticatePass = password_verify($password,$pass);
                if($authenticatePass){
                    // $session_data = [
                    //     'id'=>$data['id'],
                    //     'first_name'=>$data['first_name'],
                    //     'last_name'=>$data['last_name'],
                    //     'email'=>$data['email'],
                    //     'isLoggedIn'=>true
                    // ];
                    // $this->session->set('userdata',$session_data);
                    $result = array('status'=>true,'message'=>'Successfully Logged In!');
                    return json_encode($result);
                }else{
                    $result = array('status'=>false,'message'=>'Password is not matched with this username!');
                    return json_encode($result);
                }
                // echo '<pre>';print_r($session);die();
            }else{
                $result = array('status'=>false,'message'=>'Username/Password not exit!');
                return json_encode($result);
            }
        }else if($form_type=="signup"){
            // echo $form_type;die();
            $first_name = $this->request->getVar('first_name');
            $last_name = $this->request->getVar('last_name');
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $hashPass = password_hash($password,PASSWORD_BCRYPT);

            $data = array(
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'email'=>$email,
                'password'=>$hashPass
            );
            $res = $this->common->data_insert('users',$data);
            if($res){
                $result = array('status'=>true,'message'=>'Successfully Register!','id'=>$res);
                return json_encode($result);
            }else{
                $result = array('status'=>false,'message'=>'Please try again!');
                return json_encode($result);
            }
        }else{
            $result = array('status'=>false,'message'=>'Invalid request!');
            return json_encode($result);
        }
        
    }
}
