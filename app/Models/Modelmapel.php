<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmapel extends Model
{
    protected $table      = 'tbmapel';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama_mapel'];
}
