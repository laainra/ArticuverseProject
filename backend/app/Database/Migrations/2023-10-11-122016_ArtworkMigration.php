<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtworkMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'artwork_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'artist_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'creation_date' => [
                'type' => 'DATE',
            ],
            'genre' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addPrimaryKey('artwork_id');
        $this->forge->addForeignKey('artist_id', 'users', 'user_id');
        $this->forge->createTable('artworks');
    }

    public function down()
    {
        $this->forge->dropTable('artworks');
    }
}
