<?php

namespace App\Controllers;

use App\Models\Modelkelas;
use App\Models\Modelsiswa;
use App\Models\Modelkelassiswa;
use PhpParser\Node\Stmt\Foreach_;

class Ruangkelas extends BaseController
{
    function __construct()
    {
        $this->kelas = new Modelkelas();
        $this->siswa = new Modelsiswa();
        $this->klssiswa = new Modelkelassiswa();
    }
    public function index()
    {
        $data['klssiswa'] = $this->klssiswa->getAll();
        // $data['kelas'] = $this->kelas->findAll();
        // $query = $this->db->query("SELECT * FROM `tbruangkelas` ORDER BY id_kelas ASC");
        // $data['kelas'] = $query->getResult();
        return view('ruangkelas/list', $data);
    }

    public function add()
    {
        $data = [
            'kelas' => $this->kelas->findAll(),
            'siswa' => $this->siswa->findAll()
        ];
        return view('ruangkelas/add', $data);
    }

    public function tambah()
    {
        $p = $this->input->post();
        $teks_val = array();
        foreach($p[''])
        $sukses = $this->klssiswa->insertBatch($data);
        if ($sukses) {
            session()->setFlashdata('message', 'Ditambahkan ');
            return redirect()->to('/ruangkelas');
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
