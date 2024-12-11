<?php 
namespace App\Models;
use CodeIgniter\Model;

class datahasil_model extends Model
{
    protected $table = 'v_total_skor';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilhasil()
    {
        $dataquery=$this->db->query("select * from v_total_skor");
        return $dataquery->getResult();
    }

}