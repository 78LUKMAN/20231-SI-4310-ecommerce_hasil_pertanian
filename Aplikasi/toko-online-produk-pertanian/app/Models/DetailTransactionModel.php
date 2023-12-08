<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailTransactionModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'detailtransactions';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'transaction_id',
        'product_id',
        'quantity',
        'subtotal',
        'created_by',
        'created_date'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
