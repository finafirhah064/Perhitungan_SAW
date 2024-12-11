<?php

namespace App\Controllers;
use App\Models\datakriteria_model;
use App\Models\dataalternatif_model;
use App\Models\datakonversi_model;
use App\Models\datanormalisasi_model;
use App\Models\databobot_model;
use App\Models\datahasil_model;
use App\Models\datarangking_model;

class Home extends BaseController
{

    
    public function index()
    {
         echo View('admin_header');
         echo View('admin_nav');
         echo View ('home'); 
         echo View('admin_footer');
    }

    // MODEL ALTERNATIF
    public function simpanA()
    {
    $supplier = $this->request->getPost('supplier_id');  
    $name = $this->request->getPost('name');  


    $data = [
        'supplier_id' => $supplier,
        'name' => $name,
    ];

    $mb = new dataalternatif_model();
    $tabelalternatif = "alternatif";  
    $simpan = $mb->saveA($tabelalternatif, $data);

    return redirect()->to(site_url());  // Redirect setelah simpan data
    }

    public function viewalternatif()
    {
        $mb = new dataalternatif_model();
        $datamb = $mb->tampilAlternatif();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewalternatif',$data); 
        echo View('admin_footer');
    }
    public function formedit($id)
    {
        $mb = new dataalternatif_model();
        $datamb = $mb->getsupplier($id);  
        $data = ['datamb' => $datamb];

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('Formedit',$data); 
        echo View('admin_footer');
    }

    public function update_data($id)
    {
        $supplier = $this->request->getPost('supplier_id');
        $name = $this->request->getPost('name'); 
    
        $data = [
            'supplier_id' => $supplier,
            'name' => $name,
        ];
    
        $where = ['supplier_id' => $id];
    
        $mb = new dataalternatif_model();
        $tabelalternatif = "alternatif";
        $simpan = $mb->prosesEditA($tabelalternatif, $data, $where);
    
        return redirect()->to(site_url());
    }
    
    public function delete($id)
    {
    $mb = new dataalternatif_model();
    $mb->hapusA($id);  // Panggil fungsi hapus
    return redirect()->to(site_url());
    }

    public function forminputmhs(){
 
    echo view('admin_header');
    echo view('admin_nav');
    echo view('tambah_data');
    echo view('admin_footer'); 
    }
     // MODEL ALTERNATIF

      // MODEL KONVERSI
      public function viewkonversi()
      {
          $mb = new datakonversi_model();
          $datamb = $mb->tampilkonversi();
          $data = array('dataMb'=> $datamb,);
  
          echo View('admin_header');
          echo View('admin_nav');
          echo View ('view_konversi',$data); 
          echo View('admin_footer');
      }

      public function simpanKN()
      {
          $id = $this->request->getPost('id');  
          $supplier = $this->request->getPost('supplier_id');  
          $criteria = $this->request->getPost('criteria_id');
          $nilai = $this->request->getPost('nilai'); // Pastikan nama sesuai dengan input form
      
          $data = [
              'id' => $id,
              'supplier_id' => $supplier,
              'criteria_id' => $criteria,
              'nilai' => $nilai,
          ];
      
          $mb = new datakonversi_model();
          $tabelkronversi = "konversi_data";  
          $simpan = $mb->saveKN($tabelkronversi, $data);
      
          if ($simpan) {
              return redirect()->to(base_url('/Home/viewkonversi'))->with('message', 'Data berhasil disimpan!');
          } else {
              return redirect()->back()->with('message', 'Terjadi kesalahan saat menyimpan data.');
          }
      }
      
    public function forminputKN()
    {
    $dataalternatifModel = new dataalternatif_model();
    $datakriteriaModel = new datakriteria_model();

    // Ambil data dari model
    $suppliers = $dataalternatifModel->tampilAlternatif(); // Data supplier
    $criteria = $datakriteriaModel->tampilkriteria(); // Data kriteria

    // Kirim data ke view
    echo View('admin_header');
    echo View('admin_nav');
    echo view('Tambah_data_Konversi', [
        'supplier_id' => $suppliers, // Data supplier
        'criteria' => $criteria,    // Data kriteria
    ]);
    echo View('admin_footer');
    }

    public function deleteKN($id)
    {
    $mb = new datakonversi_model();
    $mb->hapusKN($id);  // Panggil fungsi hapus
    return redirect()->to(site_url());
    }

    public function formUpdateKN($id)
{
    $konversiModel = new datakonversi_model();
    $dataalternatifModel = new dataalternatif_model();
    $datakriteriaModel = new datakriteria_model();

    $konversi = $konversiModel->getKonversiById($id);
    $suppliers = $dataalternatifModel->tampilAlternatif();
    $criteria = $datakriteriaModel->tampilkriteria();

    if (!$konversi) {
        return redirect()->to(base_url('/Home/viewkonversi'))->with('message', 'Data tidak ditemukan!');
    }
    echo View('admin_header');
    echo View('admin_nav');
    echo view('Update_data_Konversi', [
        'konversi' => $konversi,
        'supplier_id' => $suppliers,
        'criteria' => $criteria,
    ]);
    echo View('admin_footer');
}

public function updateKN()
{
    $id = $this->request->getPost('id');
    $supplier = $this->request->getPost('supplier_id');
    $criteria = $this->request->getPost('criteria_id');
    $nilai = $this->request->getPost('nilai');

    if (!$id || !$supplier || !$criteria || !$nilai) {
        return redirect()->back()->with('message', 'Semua input harus diisi!')->withInput();
    }

    $data = [
        'supplier_id' => $supplier,
        'criteria_id' => $criteria,
        'nilai' => $nilai,
    ];

    $konversiModel = new datakonversi_model();
    if (!$konversiModel->updateKN($id, $data)) {
        return redirect()->back()->with('message', 'Gagal memperbarui data!')->withInput();
    }

    return redirect()->to(base_url('/Home/viewkonversi'))->with('message', 'Data berhasil diperbarui!');
}




    // Function Kriteria 
    public function viewkriteria()
    {
        $mb = new datakriteria_model();
        $datamb = $mb->tampilkriteria();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewkriteria',$data); 
        echo View('admin_footer');
    }
    public function simpanK()
    {
    $kriteria = $this->request->getPost('criteria_id');  
    $name = $this->request->getPost('name');  
    $weight = $this->request->getPost('weight');
    $type = $this->request->getPost('type');


    $data = [
        'criteria_id' => $kriteria,
        'name' => $name,
        'weight' => $weight,
        'type' => $type,
    ];

    $mb = new datakriteria_model();
    $tabelkriteria = "kriteria";  
    $simpan = $mb->saveK($tabelkriteria, $data);

    if ($simpan) {
        return redirect()->to(base_url('/Home/viewkonversi'))->with('message', 'Data berhasil disimpan!');
    } else {
        return redirect()->back()->with('message', 'Terjadi kesalahan saat menyimpan data.');
    } // Redirect setelah simpan data
    }

    public function forminputkriteria(){
 
        echo view('admin_header');
        echo view('admin_nav');
        echo view('tambah_kriteria');
        echo view('admin_footer'); 
    }

    public function deleteK($id)
    {
    $mb = new datakriteria_model();
    $mb->hapusK($id);  // Panggil fungsi hapus
    return redirect()->to(site_url());
    }

    public function EditK($id)
    {
        $mb = new datakriteria_model();
        $datamb = $mb->getkriteria($id);  
        $data = ['datamb' => $datamb]; 

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('update_kriteria',$data); 
        echo View('admin_footer');
    }

    public function updateK($id)
  {
    // Validasi ID
    if (!ctype_alnum($id)) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Invalid ID format');
    }

    // Ambil data dari form
    $name = $this->request->getPost('name');
    $weight = $this->request->getPost('weight');
    $type = $this->request->getPost('type');

    // Siapkan data untuk update (tidak menyertakan criteria_id)
    $data = [
        'name' => $name,
        'weight' => $weight,
        'type' => $type,
    ];

    $where = ['criteria_id' => $id];

    // Update data
    $mb = new datakriteria_model();
    $tabelkriteria = "kriteria";
    $simpan = $mb->prosesEditK($tabelkriteria, $data, $where);

    // Redirect setelah selesai
    return redirect()->to(site_url());
    }

    //Function Kriteria

    public function viewnormalisasi()
    {
        $mb = new datanormalisasi_model();
        $datamb = $mb->tampilnormalisasi();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewnormalisasi',$data); 
        echo View('admin_footer');
    }
    
    public function viewbobot()
    {
        $mb = new databobot_model();
        $datamb = $mb->tampilbobot();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewbobot',$data); 
        echo View('admin_footer');
    }

    public function viewhasil()
    {
        $mb = new datahasil_model();
        $datamb = $mb->tampilhasil();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewhasil',$data); 
        echo View('admin_footer');
    }

    public function viewrangking()
    {
        $mb = new datarangking_model();
        $datamb = $mb->tampilranking();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewrangking',$data); 
        echo View('admin_footer');
    }
    }
    



