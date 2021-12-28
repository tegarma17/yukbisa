<?php

namespace App\Controllers;

use App\Models\Modelkepsek;

class Kepsek extends BaseController
{
    public function __construct()
    {
        $this->kepsek = new Modelkepsek();
    }
    public function index()
    {
        $query = $this->db->query("SELECT * FROM `tbkepalasekolah` ORDER BY nama_kepsek ASC");
        $data['kepsek'] = $query->getResult();
        return view('kepsek/list', $data);
    }

    public function add()
    {
        return view('kepsek/add');
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        $sukses = $this->kepsek->insert($data);
        if ($sukses) {
            session()->setFlashdata('message', 'Ditambahkan ');
            return redirect()->to('/kepsek');
        }
    }
    public function edit($id = null)
    {
        $data['kepsek'] = $this->kepsek->where('id', $id)->first();
        return view('kepsek/edit', $data);
    }
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $sukses = $this->kepsek->update($id, $data);
        if ($sukses) {
            session()->setFlashdata('message', 'Diubah ');
            return redirect()->to('/kepsek');
        }
    }
    public function hapus($id)
    {
        $sukses = $this->kepsek->delete(['id' => $id]);
        if ($sukses) {
            session()->setFlashdata('message', 'Dihapus ');
            return redirect()->to('/kepsek');
        }
    }
}
