<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelekstra extends Model
{
    protected $table      = 'tbekstrakulikuler';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama_ekstra'];
}
