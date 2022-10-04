<?php 
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getUserDetails()
    {
        $query = $this->db->query('SELECT * FROM tbl_user');
        $result = $query->getResultArray();
        return $result;
    }

    public function isEmailExit($email)
    {
        $query = $this->db->query("SELECT * FROM tbl_user WHERE email='$email'");
        $result = $query->getNumRows();
        // echo $this->db->lastQuery;die();
        return $result;
    }
}