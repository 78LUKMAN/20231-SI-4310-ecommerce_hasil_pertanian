<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            "name" => [
                "type"=> "varchar",
                "constraint"=> 40,
            ],
            "email" => [
                "type"=> "varchar",
                "constraint"=> 100,
            ],
            "username" => [
                 "type"=> "varchar",
                 "constraint"=> 100,
            ],
            "password" => [
                 "type"=> "varchar",
                 "constraint"=> 255,
            ],
            "phone" => [
                "type"=> "varchar",
                "constraint"=> 15,
            ],
            "address" => [
                "type"=> "varchar",
                "constraint" => 255,
            ],
            "role" => [
                "type"=> "varchar",
                "constraint"=> 6
            ],
            "created_at" => [
                "type"=> "datetime",
                "adjust_privileges"=> "true"
            ],
            "updated_at" => [
                "type"=> "datetime"
            ],
            "deleted_at" => [
                "type"=> "datetime"
            ]
        ]);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("users");
    }

    public function down()
    {
        $this->forge->dropTable("users");
    }
}
