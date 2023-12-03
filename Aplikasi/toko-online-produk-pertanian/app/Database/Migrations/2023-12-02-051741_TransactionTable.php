<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionTable extends Migration
{

    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "auto_increment" => true,
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
            "created_by" => [
                "type" => "VARCHAR",
                "constraint" => 100,
            ],
            "created_date" => [
                "type" => "DATETIME",
            ],
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("transactions");
    }

    public function down() {
        $this->forge->dropTable("transactions");
    }
}
