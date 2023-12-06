<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi'; 
    protected $primaryKey = 'order_id';
    protected $allowedFields = [
        'username','total_harga', 'alamat', 'ongkir', 'status','token','created_by', 'created_date'
    ];  
}