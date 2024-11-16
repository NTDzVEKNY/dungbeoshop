<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddClientsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
			],
			'session_id' => [
				'type'           => 'VARCHAR',
                'constraint'     => 255,
			],
			'name' => [
				'type'           => 'VARCHAR',
                'constraint'     => 255,
			],
			'phone_number' => [
				'type'           => 'VARCHAR',
                'constraint'     => 255,
			],
			'address' => [
				'type'           => 'VARCHAR',
                'constraint'     => 255,
			],
			'created_at' => [
                'type'           => 'DATETIME',
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
				'null' => true,
            ],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('clients');
    }

    public function down()
    {
        //
    }
}
