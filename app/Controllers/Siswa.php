<?php

namespace App\Controllers;

use App\Models\Modelsiswa;

class Siswa extends BaseController
{
    function __construct()
    {
        $this->siswa = new Modelsiswa();
    }
    public function index()
    {
        $query = $this->db->query("SELECT * FROM `tbsiswa` ORDER BY nama_siswa ASC");
        $data = [
            'siswa' => $query->getResult(),
            'validation' => \Config\Services::validation()
        ];
        return view('siswa/list', $data);
    }

    public function add()
    {
        return view('siswa/add');
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        $sukses = $this->siswa->insert($data);
        if ($sukses) {
            session()->setFlashdata('message', 'Ditambahkan ');
            return redirect()->to('/siswa');
        }
    }
    public function edit($id = null)
    {
        $data['siswa'] = $this->siswa->where('id_siswa', $id)->first();
        return view('siswa/edit', $data);
    }
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $sukses = $this->siswa->update($id, $data);
        if ($sukses) {
            session()->setFlashdata('message', 'Diubah ');
            return redirect()->to('/siswa');
        }
    }

    public function ubah($id = null)
    {
        $data = $this->request->getPost();
        $sukses = $this->siswa->update($id, $data);
        if ($sukses) {
            session()->setFlashdata('message', 'Diubah ');
            return redirect()->to('/siswa');
        }
    }

    public function hapus($id)
    {
        $sukses = $this->siswa->delete(['id_siswa' => $id]);
        if ($sukses) {
            session()->setFlashdata('message', 'Dihapus ');
            return redirect()->to('/siswa');
        }
    }
}
