<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelguru extends Model
{
    protected $table      = 'tbguru';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = [
        'nip', 'nama_guru', 'jk', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'foto'
    ];
}
