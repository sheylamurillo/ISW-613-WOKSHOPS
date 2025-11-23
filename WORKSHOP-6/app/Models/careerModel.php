<?php

namespace App\Models;
use CodeIgniter\Model;

class careerModel extends Model
{
    protected $table      = 'careers';
    protected $primaryKey = 'idCareer';

    protected $allowedFields = ['career'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}