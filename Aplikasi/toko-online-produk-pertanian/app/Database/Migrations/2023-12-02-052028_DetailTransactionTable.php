<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailTransactionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "auto_increment" => true,
                "unsigned" => true,
            ],
            "transaction_id" => [
                "type" => "INT",
            ],
            "product_id" => [
                "type" => "INT",
            ],
            "quantity" => [
                "type" => "DOUBLE",
            ],
            "discount" => [
                "type" => "DOUBLE",
            ],
            "subtotal" => [
                "type" => "DOUBLE",
            ],
            "created_by" => [
                "type" => "VARCHAR",
                "constraint" => 100,
            ],
            "created_date" => [
                "type" => "DATETIME",
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable("detailtransactions", true); 
    }

    public function down()
    {
        $this->forge->dropTable("detailtransactions"); 
    }
}
