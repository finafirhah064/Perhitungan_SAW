<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakonversi_model extends Model
{
    protected $table = 'konversi_data';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkonversi()
    {
        $dataquery=$this->db->query("select * from konversi_data");
        return $dataquery->getResult();
    }

    public function saveKN($tabel, $data)
    {
    return $this->db->table($tabel)->insert($data);
    }

    function hapusKN($id)
    {
        $dataquery = $this->db->query("DELETE FROM konversi_data WHERE id = " . $id);
        return true;
    }

    public function updateKN($id, $data)
{
    return $this->db->table('konversi_data')->update($data, ['id' => $id]);
}



    // Method untuk mengambil data berdasarkan ID
    public function getKonversiById($id)
{
    return $this->db->table('konversi_data')->where('id', $id)->get()->getFirstRow('array');
}

    

}