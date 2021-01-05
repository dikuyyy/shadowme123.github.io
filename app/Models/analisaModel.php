<?php

namespace App\Models;

use CodeIgniter\Model;

class analisaModel extends Model
{
    protected $table = 'analisa';
    protected $allowedFields = ['id', 'id_minat', 'id_ciri'];
}
