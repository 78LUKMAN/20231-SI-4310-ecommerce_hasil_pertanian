<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                "id" => [
                    "type" => "INT",
                    "constraint" => 11,
                    "auto_increment" => true,
                ],
                "name" => [
                    "type" => "varchar",
                    "constraint" => 255,
                ],
                "description" => [
                    "type" => "varchar",
                    "constraint" => 255,
                ],
                "price" => [
                    "type" => "varchar",
                    "constraint" => 10,
                ],
                "stock" => [
                    "type" => "INT",
                    "constraint" => 3,
                ],
                "image" => [
                    "type" => "varchar",
                    "constraint" => 255,
                ]
            ]
        );
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("products");
    }

    public function down()
    {
        $this->forge->dropTable("products");
        
    }
}
