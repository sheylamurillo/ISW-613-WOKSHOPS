<?php

namespace App\Models;
use CodeIgniter\Model;

class userModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'idUser';

    protected $allowedFields = ['name', 'lastName', 'idCareer'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}