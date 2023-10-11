<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MuseumMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'museum_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'curator_information' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addPrimaryKey('museum_id');
        $this->forge->createTable('museums');
    }

    public function down()
    {
        $this->forge->dropTable('museums');
    }
}
