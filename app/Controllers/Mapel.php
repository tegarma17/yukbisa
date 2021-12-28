<?php

namespace App\Controllers;

use App\Models\Modelmapel;

class Mapel extends BaseController
{
    function __construct()
    {
        $this->mapel = new Modelmapel();
    }
    public function index()
    {
        $query = $this->db->query("SELECT * FROM `tbmapel` ORDER BY nama_mapel ASC");
        $data['mapel'] = $query->getResult();
        return view('mapel/list', $data);
    }

    public function add()
    {
        return view('mapel/add');
    }

    public function tambah()
    {
        $data = $this->request->getPost();
        $sukses = $this->mapel->insert($data);
        if ($sukses) {
            session()->setFlashdata('message', 'Ditambahkan ');
            return redirect()->to('/mapel');
        }
    }
    public function edit($id = null)
    {
        $data['mapel'] = $this->mapel->where('id', $id)->first();
        return view('mapel/edit', $data);
    }

    public function ubah($id = null)
    {
        $data = $this->request->getPost();
        $sukses = $this->mapel->update($id, $data);
        if ($sukses) {
            session()->setFlashdata('message', 'Diubah ');
            return redirect()->to('/mapel');
        }
    }

    public function hapus($id)
    {
        $sukses = $this->mapel->delete(['id' => $id]);
        // $sukses = $this->mapel->where('id', $id)->delete();
        if ($sukses) {
            session()->setFlashdata('message', 'Dihapus ');
            return redirect()->to('/mapel');
        }
    }
}
