<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type"           => "INT",
                "unsigned"       => true,
                "auto_increment" => true,
            ],
            "name" => [
                "type"       => "VARCHAR",
                "constraint" => 50,
                "null"       => false,
            ],
            "email" => [
                "type"       => "VARCHAR",
                "constraint" => 100,
                "null"       => false,
            ],
            "phone_number" => [
                "type"       => "VARCHAR",
                "constraint" => 50,
                "null"       => false,
            ],
        ]);

        
        $this->forge->addKey("id", true);

    
        $this->forge->createTable("studentsdata");
    }

    public function down()
    {
        $this->forge->dropTable("studentsdata");
    }
}

