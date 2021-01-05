<?php

namespace App\Models;

use CodeIgniter\Model;

class ciriminatModel extends Model
{
    protected $table = 'ciriminat';
    protected $allowedFields = ['id_ciri', 'ciri_minat'];
}
