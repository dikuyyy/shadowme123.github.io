<?php

namespace App\Models;

use CodeIgniter\Model;

class dataminatModel extends Model
{
    protected $table = 'dataminat';
    protected $allowedFields = ['id_minat', 'nama_minat', 'slug'];
}
