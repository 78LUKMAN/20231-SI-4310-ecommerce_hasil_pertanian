<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionTable extends Migration
{

    public function up()
    {
        $this->forge->addField([
            "order_id" => [
                "type" => "INT",
                "constraint"=> 20,
            ],
            "username" => [
                "type" => "VARCHAR",
                "constraint" => 100,
            ],
            "total" => [
                "type" => "DOUBLE",
            ],
            "address" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "fare" => [
                "type" => "DOUBLE",
            ],
            "status" => [
                "type" => "INT",
                "default" => 1,
            ],
            "token" => [
                "type" => "VARCHAR",
                'constraint' => 100
            ],
            "created_by" => [
                "type" => "VARCHAR",
                "constraint" => 100,
            ],
            "created_date" => [
                "type" => "DATETIME",
            ],
        ]);

        $this->forge->addPrimaryKey("order_id");
        $this->forge->createTable("transactions");
    }

    public function down() {
        $this->forge->dropTable("transactions");
    }
}
