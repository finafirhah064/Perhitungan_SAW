<?php 
namespace App\Models;
use CodeIgniter\Model;

class databobot_model extends Model
{
    protected $table = 'v_berat_alternatif';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilbobot()
    {
        $dataquery=$this->db->query("select * from v_berat_alternatif");
        return $dataquery->getResult();
    }

}