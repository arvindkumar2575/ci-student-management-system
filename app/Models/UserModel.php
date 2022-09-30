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
        $query = $this->db->query('SELECT * from users');
        $result = $query->getResultArray();
        return $result;
    }
}