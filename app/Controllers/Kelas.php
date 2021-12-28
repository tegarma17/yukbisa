<?php

namespace App\Controllers;

use App\Models\Modelkelas;

class Kelas extends BaseController
{
    function __construct()
    {
        $this->kelas = new Modelkelas();
    }
    public function index()
    {
        // $data['kelas'] = $this->kelas->findAll();
        $query = $this->db->query("SELECT * FROM `tbkelas` ORDER BY tingkat_kelas ASC");
        $data['kelas'] = $query->getResult();
        return view('kelas/list', $data);
    }

    public function add()
    {
        return view('kelas/add');
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        $sukses = $this->kelas->insert($data);
        if ($sukses) {
            session()->setFlashdata('message', 'Ditambahkan ');
            return redirect()->to('/kelas');
        }
    }
    public function edit($id = null)
    {
        $data['kelas'] = $this->kelas->where('id', $id)->first();
        return view('kelas/edit', $data);
    }

    public function ubah($id = null)
    {
        $data = $this->request->getPost();
        $sukses = $this->kelas->update($id, $data);
        if ($sukses) {
            session()->setFlashdata('message', 'Diubah ');
            return redirect()->to('/kelas');
        }
    }

    public function hapus($id)
    {
        $sukses = $this->kelas->delete(['id' => $id]);
        if ($sukses) {
            session()->setFlashdata('message', 'Dihapus ');
            return redirect()->to('/kelas');
        }
    }
}
