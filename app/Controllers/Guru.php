<?php

namespace App\Controllers;

use App\Models\Modelguru;

class Guru extends BaseController
{
    function __construct()
    {
        $this->guru = new Modelguru();
    }
    public function index()
    {
        $query = $this->db->query("SELECT * FROM `tbguru` ORDER BY nama_guru ASC");
        $data['guru'] = $query->getResult();
        return view('guru/list', $data);
    }

    public function add()
    {
        $data['validation'] = \Config\Services::validation();
        return view('guru/add', $data);
    }

    public function tambah()
    {
        if (!$this->validate([
            'nip' => [
                'rules' => 'required|is_unique[tbguru.nip]',
                'errors' => [
                    'required' => 'NIP Haru Diisi',
                    'is_unique' => 'NIP Telah Terdaftar'
                ]
            ]
        ])) {
            return redirect()->to('/guru/add')->withInput();
        }
        $data = $this->request->getPost();
        $sukses = $this->guru->insert($data);
        if ($sukses) {
            session()->setFlashdata('message', 'Ditambahkan ');
            return redirect()->to('/guru');
        }
    }
    public function edit($id = null)
    {
        $data['validation'] = \Config\Services::validation();
        $data['guru'] = $this->guru->where('id', $id)->first();
        return view('guru/edit', $data);
    }
    public function update($id = null)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'is_image[foto]|max_size[foto,1024]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]',
                'errors' => [
                    'is_image' => 'File Bukan Gambar',
                    'max_size' => 'Ukuran File Max 1 Mb'
                ]
            ]
        ])) {
            return redirect()->to('/guru/update/' . $id);
        }
        $data = $this->request->getPost();
        $sukses = $this->guru->update($id, $data);
        if ($sukses) {
            session()->setFlashdata('message', 'Diubah ');
            return redirect()->to('/guru');
        }
    }

    public function ubah($id = null)
    {
        $data = $this->request->getPost();
        $sukses = $this->guru->update($id, $data);
        if ($sukses) {
            session()->setFlashdata('message', 'Diubah ');
            return redirect()->to('/guru');
        }
    }

    public function hapus($id)
    {
        $sukses = $this->guru->delete(['id' => $id]);
        if ($sukses) {
            session()->setFlashdata('message', 'Dihapus ');
            return redirect()->to('/guru');
        }
    }
}
