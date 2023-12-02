<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'carts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true; 
    protected $allowedFields = ['user_id', 'product_id', 'quantity', 'price'];
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getCartItems($userId)
    {
        return $this->select('carts.*, products.name, products.image')
            ->join('products', 'products.id = carts.product_id')
            ->where('user_id', $userId)
            ->findAll();
    }
}
