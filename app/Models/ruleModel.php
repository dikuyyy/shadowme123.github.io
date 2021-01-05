<?php

namespace App\Models;

use CodeIgniter\Model;

class ruleModel extends Model
{
    protected $table = 'rule';
    protected $allowedFields = ['id', 'id_minat', 'id_ciri'];
}
