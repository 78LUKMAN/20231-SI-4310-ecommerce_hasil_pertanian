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
                "discount" => [
                    "type" => "INT",
                    "constraint" => "2"
                ],
                "disprice" => [
                    "type" => "INT",
                    "constraint" => 10,
                ],
                "stock" => [
                    "type" => "INT",
                    "constraint" => 4,
                ],
                "sold" => [
                    "type" => "INT",
                    "constraint" => 6,
                ],
                "label" => [
                    "type" => "varchar",
                    "constraint" => "30",
                ],
                "image" => [
                    "type" => "varchar",
                    "constraint" => 255,
                ],
                "created_at" => [
                    "type" => "DATETIME",
                ],
                "updated_at" => [
                    "type" => "DATETIME"
                ],
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
