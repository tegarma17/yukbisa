<?php

namespace App\Controllers;

use App\Models\Modelkelas;
use App\Models\Modelguru;
use App\Models\Modelwalikelas;

class Walikelas extends BaseController
{
    function __construct()
    {
        $this->kelas = new Modelkelas();
        $this->guru = new Modelguru();
        $this->walikelas = new Modelwalikelas();
    }
    public function index()
    {
        $data['walikelas'] = $this->walikelas->getAll();
        // $data['kelas'] = $this->kelas->findAll();
        // $query = $this->db->query("SELECT * FROM `tbwalikelas` ORDER BY id_kelas ASC");
        // $data['kelas'] = $query->getResult();
        return view('walikelas/list', $data);
    }

    public function add()
    {
        $data = [
            'guru' => $this->guru->findAll(),
            'kelas' => $this->kelas->findAll()
        ];
        return view('walikelas/add', $data);
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        $sukses = $this->walikelas->insert($data);
        if ($sukses) {
            session()->setFlashdata('message', 'Ditambahkan ');
            return redirect()->to('/walikelas');
        }
    }
    public function edit($id = null)
    {
        $data['walikelas'] = $this->walikelas->where('id', $id)->first();
        return view('walikelas/edit', $data);
    }

    public function ubah($id = null)
    {
        $data = $this->request->getPost();
        $sukses = $this->walikelas->update($id, $data);
        if ($sukses) {
            session()->setFlashdata('message', 'Diubah ');
            return redirect()->to('/walikelas');
        }
    }

    public function hapus($id)
    {
        $sukses = $this->walikelas->delete(['id' => $id]);
        if ($sukses) {
            session()->setFlashdata('message', 'Dihapus ');
            return redirect()->to('/walikelas');
        }
    }
}
