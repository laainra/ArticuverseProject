<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ExhibitionMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'exhibition_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'start_date' => [
                'type' => 'DATE',
            ],
            'end_date' => [
                'type' => 'DATE',
            ],
            'museum_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addPrimaryKey('exhibition_id');
        $this->forge->addForeignKey('museum_id', 'museums', 'museum_id');
        $this->forge->createTable('exhibitions');
    }

    public function down()
    {
        $this->forge->dropTable('exhibitions');
    }
}
