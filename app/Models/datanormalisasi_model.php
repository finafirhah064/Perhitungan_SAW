<?php 
namespace App\Models;
use CodeIgniter\Model;

class datanormalisasi_model extends Model
{
    protected $table = 'v_normalisasi';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilnormalisasi()
    {
        $dataquery=$this->db->query("select * from v_normalisasi");
        return $dataquery->getResult();
    }

}