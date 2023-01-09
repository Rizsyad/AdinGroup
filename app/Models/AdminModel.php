<?php 
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tbl_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'store', 'id_roles'];
}