<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FeedbackTable extends Migration
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
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 100,
            ],
            "img" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "message" => [
                "type" => "VARCHAR",
                "constraint" => 600,
            ],
            "created_by" => [
                "type" => "VARCHAR",
                "constraint" => 600,
            ],
            "created_at" => [
                "type" => "DATETIME",
                "adjust_privileges"=> "true"

            ]
        ]);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("feedbacks");
    }

    public function down()
    {
        $this->forge->dropTable("feedbacks");
    }
}
