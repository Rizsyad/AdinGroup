<?php 
namespace App\Models;
use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'tbl_pelanggan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pelanggan', 'no_tlpn'];
}