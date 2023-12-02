<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'description', 'price', 'stock', 'image'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // Validation
    protected $validationRules      = [];

    public function getProductsInCart($productIds)
    {
        if (empty($productIds)) {
            return [];
        }

        // Fetch product details based on product IDs
        $this->whereIn('id', $productIds);
        return $this->findAll();
    }
    
    public function getProductById($id)
    {
        return $this->where('id', $id)->first();
    }
}
