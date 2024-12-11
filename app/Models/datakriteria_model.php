<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakriteria_model extends Model
{
    protected $table = 'kriteria';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkriteria()
    {
        $dataquery=$this->db->query("select * from kriteria");
        return $dataquery->getResult();
    }

    function saveK($tabel,$data)
    {
        $this->db->table($tabel)->insert($data);
        return true;
    }

    function hapusK($id)
    {
    $this->db->table('kriteria')->where('criteria_id', $id)->delete();
    return true;
    }

    public function getkriteria($id)
   {
    return $this->db->table('kriteria')->where('criteria_id', $id)->get()->getRow();
   }

   public function prosesEditK($table, $data, $where)
{
    $this->db->table($table)->update($data, $where);
    return true;
}
// 



    

}