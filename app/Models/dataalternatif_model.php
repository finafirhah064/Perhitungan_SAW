<?php 
namespace App\Models;
use CodeIgniter\Model;

class dataalternatif_model extends Model
{
    
        protected $table = 'alternatif';          // Nama tabel
    
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function saveMhs($tabel,$data)
    {
        $this->db->table($tabel)->insert($data);
        return true;
    }
    function tampilAlternatif()
    {
        $dataquery=$this->db->query("select supplier_id,name  from alternatif");
        return $dataquery->getResult();
        
    }
    public function getsupplier($id)
    {
        $dataquery=$this->db->query("select * from alternatif where supplier_id =".$id);
        return $dataquery->getRow();
        return $dataquery->getResult();
    }
    function prosesEditA($table, $data, $where)
    {
        $this->db->table($table)->update($data,$where);
        return true;
    }
    // Menghapus data dari tabel alternatif berdasarkan supplier_id
    function hapusA($id)
    {
        $dataquery = $this->db->query("DELETE FROM alternatif WHERE supplier_id = " . $id);
        return true;
    }
    public function saveA($table, $data)
    {   
    // Debugging untuk memastikan data yang dikirimkan
    var_dump($data);  // Cek apakah data valid dan sesuai dengan kolom yang ada

    return $this->db->table($table)->insert($data);  // Insert data ke dalam tabel
    }



    


    
    }