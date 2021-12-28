<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelwalikelas extends Model
{
    protected $table      = 'tbwalikelas';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id_guru', 'id_kelas'];

    function getAll()
    {
        $query = $this->db->query("SELECT tbwalikelas.id, tbguru.nama_guru , tbkelas.nama_kelas FROM tbwalikelas 
        INNER JOIN tbguru on tbwalikelas.id_guru = tbguru.id 
        INNER JOIN tbkelas on tbwalikelas.id_kelas = tbkelas.id_kelas");
        return $query->getResult();
    }
}
