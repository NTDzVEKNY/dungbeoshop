<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCartTable extends Migration
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
			'client_id' => [
				'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
			],
			'status' => [
				'type'           => 'ENUM',
                'constraint'     => ['pending', 'processing', 'completed', 'cancelled'],
                'default'        => 'pending',
			],
			'created_at' => [
				'type'           => 'DATETIME',
                'null'          => true,
			],
			'updated_at' => [
                'type'           => 'DATETIME',
                'null'          => true,
            ],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('client_id', 'clients', 'id', 'CASCADE','CASCADE');
		$this->forge->createTable('carts');
    }

    public function down()
    {
        //
    }
}
