<?php 
namespace App\Models;
use CodeIgniter\Model;
class Common extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function data_insert($table=null, array $data=null)
    {
        if(isset($table)){
            $query = $this->db->table($table)->insert($data);
            return $query;
        }else{
            return false;
        }
        
    }

    public function data_single_update($table=null, $key=null, $value=null)
    {
        $update=null;
        if(isset($table)){
            $query = $this->db->table($table)->where($key,$value);
        }
        return $update;
    }

    public function get_single_row($table=null, $key=null, $value=null)
    {
        $result=null;
        if(isset($table)){
            $query = $this->db->query("SELECT * FROM $table WHERE $key='$value'");
            // echo $this->db->lastQuery;
            $result = $query->getRowArray();
        }
        return $result;
    }
}